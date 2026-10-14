<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    private static $procedure;

    public static function saveProcedure($request){
        self::$procedure = new Procedure();
        self::$procedure->icon_class    = $request->icon_class;
        self::$procedure->heading       = $request->heading;
        self::$procedure->content       = $request->content;
        self::$procedure->save();
    }

    public static function updateProcedure($request, $id){
        self::$procedure = Procedure::find($id);
        self::$procedure->icon_class    = $request->icon_class;
        self::$procedure->heading       = $request->heading;
        self::$procedure->content       = $request->content;
        self::$procedure->save();
    }

    public static function deleteProcedure($id){
        self::$procedure = Procedure::find($id);
        self::$procedure->delete();
    }
}
