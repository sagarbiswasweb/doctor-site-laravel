<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Skip admin routes (including the admin root) and API
        if ($request->is('admin') || $request->is('admin/*') || $request->is('api/*')) {
            return $next($request);
        }

        // Bot filter
        if ($this->isBot($request->userAgent())) {
            return $next($request);
        }

        $agent = new Agent();
        $agent->setUserAgent($request->userAgent());

        $ip = $request->ip();
        $sessionId = $request->hasSession()
            ? $request->session()->getId()
            : null;

        $url = $request->fullUrl();
        $referrer = $request->headers->get('referer');

        $deviceType = $agent->isDesktop() ? 'Desktop' :
                      ($agent->isTablet() ? 'Tablet' : 'Mobile');

        $browser = $agent->browser();
        $platform = $agent->platform();

        $today = now()->toDateString();

        /*
        |--------------------------------------------------------------------------
        | UNIQUE VISITOR LOGIC (Based on Session ID for Unique Devices)
        |--------------------------------------------------------------------------
        */
        try {
            if ($sessionId) {
                // আইপির বদলে আজকের দিনে এই সেশন আইডি দিয়ে কেউ এসেছে কিনা তা চেক করবে
                $alreadyVisited = Visitor::where('session_id', $sessionId)
                    ->where('visit_date', $today)
                    ->exists();
            } else {
                // কোনো কারণে সেশন আইডি না পাওয়া গেলে আইপি দিয়ে ব্যাকআপ চেক করবে
                $alreadyVisited = Visitor::where('ip_address', $ip)
                    ->where('visit_date', $today)
                    ->exists();
            }
        } catch (\Exception $e) {
            $alreadyVisited = true; // DB fail হলে site stop হবে না
        }

        /*
        --------------------------------------------------------------------------
        | SAVE VISITOR (PAGE VIEW TRACKING)
        --------------------------------------------------------------------------
        */

        if (! $alreadyVisited) {
            Visitor::create([
                'ip_address'  => $ip,
                'session_id'  => $sessionId,
                'user_id'     => auth()->id(),
                'url'         => $url,
                'user_agent'  => $request->userAgent(),
                'referrer'    => $referrer,
                'device_type' => $deviceType,
                'browser'     => $browser,
                'platform'    => $platform,
                'visit_date'  => $today,
            ]);
        }

        return $next($request);
    }

    /*
    |--------------------------------------------------------------------------
    | BOT DETECTION
    |--------------------------------------------------------------------------
    */

    private function isBot($userAgent)
    {
        $bots = [
            'googlebot',
            'bingbot',
            'slurp',
            'duckduckbot',
            'baiduspider',
            'yandex',
        ];

        $userAgent = strtolower($userAgent ?? '');

        foreach ($bots as $bot) {
            if (str_contains($userAgent, $bot)) {
                return true;
            }
        }

        return false;
    }
}