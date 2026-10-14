<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    private static $schedule;

    public function getFormattedFromAttribute(){
        return Carbon::parse($this->from)->format('h:i A');
    }

    public function getFormattedToAttribute(){
        return Carbon::parse($this->to)->format('h:i A');
    }

    public static function saveSchedule($request){
        self::$schedule                 = new Schedule();
        self::$schedule->hospital       = $request->hospital;
        self::$schedule->days           = $request->days;
        self::$schedule->from           = $request->from;
        self::$schedule->to             = $request->to;
        self::$schedule->off_days       = $request->off_days;
        self::$schedule->address        = $request->address;
        self::$schedule->phone1         = $request->phone1;
        self::$schedule->phone1_type    = $request->phone1_type;
        self::$schedule->phone2         = $request->phone2;
        self::$schedule->phone2_type    = $request->phone2_type;
        self::$schedule->phone3         = $request->phone3;
        self::$schedule->phone3_type    = $request->phone3_type;
        self::$schedule->phone4         = $request->phone4;
        self::$schedule->phone4_type    = $request->phone4_type;
        self::$schedule->phone5         = $request->phone5;
        self::$schedule->phone5_type    = $request->phone5_type;
        self::$schedule->map            = $request->map;
        self::$schedule->save();
    }

    public static function updateSchedule($request, $id){
        self::$schedule                 = Schedule::find($id);
        self::$schedule->hospital       = $request->hospital;
        self::$schedule->days           = $request->days;
        self::$schedule->from           = $request->from;
        self::$schedule->to             = $request->to;
        self::$schedule->off_days       = $request->off_days;
        self::$schedule->address        = $request->address;
        self::$schedule->phone1         = $request->phone1;
        self::$schedule->phone1_type    = $request->phone1_type;
        self::$schedule->phone2         = $request->phone2;
        self::$schedule->phone2_type    = $request->phone2_type;
        self::$schedule->phone3         = $request->phone3;
        self::$schedule->phone3_type    = $request->phone3_type;
        self::$schedule->phone4         = $request->phone4;
        self::$schedule->phone4_type    = $request->phone4_type;
        self::$schedule->phone5         = $request->phone5;
        self::$schedule->phone5_type    = $request->phone5_type;
        self::$schedule->map            = $request->map;
        self::$schedule->save();
    }

    public static function deleteSchedule($id){
        self::$schedule = Schedule::find($id);
        self::$schedule->delete();
    }

    public function getChamberStatusAttribute(){
        $tz = 'Asia/Dhaka';
        $now = Carbon::now($tz);

        $dayMap = [
            'sunday' => 0, 'sun' => 0, 'রবিবার' => 0,
            'monday' => 1, 'mon' => 1, 'সোমবার' => 1,
            'tuesday' => 2, 'tue' => 2, 'মঙ্গলবার' => 2,
            'wednesday' => 3, 'wed' => 3, 'বুধবার' => 3,
            'thursday' => 4, 'thu' => 4, 'thurs' => 4, 'বৃহস্পতিবার' => 4,
            'friday' => 5, 'fri' => 5, 'শুক্রবার' => 5,
            'saturday' => 6, 'sat' => 6, 'শনিবার' => 6,
            'daily' => -1, 'everyday' => -1, 'প্রতিদিন' => -1,
        ];

        $daysStr = trim($this->days ?? '');
        if ($daysStr === '') {
            return ['label' => 'Closed', 'is_open' => false];
        }

        $lower = mb_strtolower($daysStr);
        $openDays = [];

        if (
            str_contains($lower, 'daily') ||
            str_contains($lower, 'everyday') ||
            str_contains($lower, 'প্রতিদিন')
        ) {
            $openDays = range(0, 6);
        } else {
            $parts = preg_split('/[,\/\s]+/u', $lower, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($parts as $p) {
                if (isset($dayMap[$p])) {
                    $openDays[] = $dayMap[$p];
                }
            }
        }

        try {
            $from = Carbon::parse($this->from, $tz);
            $to   = Carbon::parse($this->to, $tz);
        } catch (\Exception $e) {
            return ['label' => 'Closed', 'is_open' => false];
        }

        // ---------- FIND NEXT OPENING ----------
        $nextOpeningText = null;

        for ($i = 1; $i <= 7; $i++) {
            $future = $now->copy()->addDays($i);
            if (in_array($future->dayOfWeek, $openDays)) {

                $futureTime = $future->copy()->setTimeFrom($from);

                if ($i == 1) {
                    $nextOpeningText = 'Tomorrow at ' . $futureTime->format('h:i A');
                } else {
                    $nextOpeningText = $futureTime->format('l, h:i A');
                }

                break;
            }
        }

        // ---------- TODAY LOGIC ----------
        if (in_array($now->dayOfWeek, $openDays)) {

            $fromToday = $now->copy()->setTimeFrom($from);
            $toToday   = $now->copy()->setTimeFrom($to);

            if ($toToday->lte($fromToday)) {
                $toToday->addDay();
            }

            if ($now->between($fromToday, $toToday)) {
                return ['label' => 'Open Now', 'is_open' => true];
            }

            if ($now->lt($fromToday)) {
                return [
                    'label' => 'Opens Today at ' . $fromToday->format('h:i A'),
                    'is_open' => true
                ];
            }

            return [
                'label' => 'Closed Now, Opens at ' . $nextOpeningText,
                'is_open' => false
            ];
        }

        // ---------- TODAY IS OFF ----------
        return [
            'label' => 'Closed Today, Opens at ' . $nextOpeningText,
            'is_open' => false
        ];
    }

}
