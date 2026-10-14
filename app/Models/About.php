<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    private static $about;

    public static function saveAbout($request){
        self::$about                    = new About();
        self::$about->about             = $request->about;
        self::$about->qualifications    = $request->qualifications;
        self::$about->specialization    = $request->specialization;
        self::$about->current_position  = $request->current_position;
        self::$about->membership        = $request->membership;
        self::$about->save();
    }

    public static function updateAbout($request){
        self::$about = About::first();
        if (self::$about) {
            self::$about->about             = $request->about;
            self::$about->qualifications    = $request->qualifications;
            self::$about->specialization    = $request->specialization;
            self::$about->current_position  = $request->current_position;
            self::$about->membership        = $request->membership;
            self::$about->save();
        }
    }

    public static function deleteAbout(){
        self::$about = About::first();
        if (self::$about) {
            self::$about->delete();
        }
    }
}
