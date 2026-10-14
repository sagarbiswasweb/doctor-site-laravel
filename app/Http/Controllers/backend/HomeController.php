<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Schedule;
use App\Models\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $countMessage = Message::count();
        $countSchedule = Schedule::count();

        [$filter, $from, $to, $rangeLabel] = $this->resolveVisitorFilter($request);

        return view('backend.home', [
            'countMessage'      => $countMessage,
            'countSchedule'     => $countSchedule,

            // Widgets
            'todayVisitors'     => Visitor::todayVisitors(),
            'todayUnique'       => Visitor::todayUniqueVisitors(),
            'monthly'           => Visitor::monthlyVisitors(),
            'monthlyUnique'     => Visitor::monthlyUniqueVisitors(),
            'totalVisitors'     => Visitor::totalVisitors(),

            // Visitor range summary
            'visitorFilter'        => $filter,
            'visitorFrom'          => $from->toDateString(),
            'visitorTo'            => $to->toDateString(),
            'visitorRangeLabel'    => $rangeLabel,
            'visitorRangeVisitors' => Visitor::rangeVisitors($from, $to),
            'visitorRangeUnique'   => Visitor::rangeUniqueVisitors($from, $to),

            // Chart Data
            'chartData'         => $this->formatChartData($from, $to),
        ]);
    }

    private function resolveVisitorFilter(Request $request)
    {
        $filter = $request->query('visitor_filter', 'this_month');
        $start = now()->copy()->startOfMonth();
        $end = now()->copy()->endOfMonth();
        $label = 'This month';

        if ($filter === 'last_month') {
            $start = now()->copy()->subMonthNoOverflow()->startOfMonth();
            $end = now()->copy()->subMonthNoOverflow()->endOfMonth();
            $label = 'Last month';
        } elseif ($filter === 'custom') {
            $from = $request->query('from');
            $to = $request->query('to');

            if ($from && $to) {
                try {
                    $parsedFrom = \Carbon\Carbon::parse($from);
                    $parsedTo = \Carbon\Carbon::parse($to);

                    if ($parsedFrom->lte($parsedTo)) {
                        $start = $parsedFrom->copy()->startOfDay();
                        $end = $parsedTo->copy()->endOfDay();
                        $label = 'Custom range';
                    }
                } catch (\Exception $exception) {
                    // Keep default this_month when custom dates are invalid.
                }
            }
        }

        return [$filter, $start, $end, $label];
    }

    private function formatChartData($start, $end){
        $data = Visitor::chartForRange($start, $end);

        $labels = [];
        $values = [];

        $days = $start->diffInDays($end);

        for ($i = $days; $i >= 0; $i--) {
            $date = $start->copy()->addDays($i)->toDateString();
            $labels[] = $date;
            $found = $data->firstWhere('date', $date);
            $values[] = $found ? $found->total : 0;
        }

        return [
            'labels' => $labels,
            'values' => $values,
        ];
    }
}
