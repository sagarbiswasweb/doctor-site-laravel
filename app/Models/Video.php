<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    private static $video;

    public static function saveVideo($request){
        self::$video = new Video();
        self::$video->title       = $request->title;
        self::$video->embed_code  = $request->embed_code;
        self::$video->save();
    }

    public static function updateVideo($request, $id){
        self::$video = Video::find($id);
        self::$video->title       = $request->title;
        self::$video->embed_code  = $request->embed_code;
        self::$video->save();
    }

    public static function deleteVideo($id){
        self::$video = Video::find($id);
        self::$video->delete();
    }
}
