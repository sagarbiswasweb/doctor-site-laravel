<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
     protected $fillable = [

        'ip_address',
        'session_id',
        'user_id',
        'url',
        'user_agent',
        'referrer',
        'device_type',
        'browser',
        'platform',
        'visit_date'

    ];

    /*
    |--------------------------------------------------------------------------
    | Dashboard Statistics
    |--------------------------------------------------------------------------
    */

    public static function todayVisitors()
    {
        return self::whereDate('created_at', today())
            ->count();
    }

    public static function todayUniqueVisitors()
    {
        return self::where('visit_date', today())
            ->distinct('ip_address')
            ->count('ip_address');
    }

    public static function monthlyVisitors()
    {
        return self::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
    }

    public static function monthlyUniqueVisitors()
    {
        return self::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->distinct('ip_address')
            ->count('ip_address');
    }

    public static function totalVisitors()
    {
        return self::count();
    }

    /*
    |--------------------------------------------------------------------------
    | Chart Data
    |--------------------------------------------------------------------------
    */

    public static function last30DaysChart()
    {
        return self::chartForRange(
            now()->subDays(29),
            now()
        );
    }

    public static function queryForRange(Carbon $start, Carbon $end)
    {
        return self::whereBetween('created_at', [
            $start->copy()->startOfDay(),
            $end->copy()->endOfDay(),
        ]);
    }

    public static function rangeVisitors(Carbon $start, Carbon $end)
    {
        return self::queryForRange($start, $end)->count();
    }

    public static function rangeUniqueVisitors(Carbon $start, Carbon $end)
    {
        return self::queryForRange($start, $end)
            ->distinct('ip_address')
            ->count('ip_address');
    }

    public static function chartForRange(Carbon $start, Carbon $end)
    {
        return self::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->whereBetween('created_at', [
                $start->copy()->startOfDay(),
                $end->copy()->endOfDay(),
            ])
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    }
}
