<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Treatment extends Model
{
    private static $treatment;

    public static function saveTreatment($request){
        self::$treatment                    = new Treatment();
        self::$treatment->treated_condition = $request->treated_condition;
        // self::$treatment->image             = $request->file('image')->store('treatments', 'public');
        self::$treatment->image = $request->hasFile('image') ? $request->file('image')->store('treatments', 'public') : null;
        self::$treatment->save();
    }

    public static function updateTreatment($request, $id){
        self::$treatment                    = Treatment::findOrFail($id);
        self::$treatment->treated_condition = $request->treated_condition;
        // self::$treatment->image              = $request->file('image') ? $request->file('image')->store('treatments', 'public') : self::$treatment->image;
        if ($request->hasFile('image')) {

            // পুরাতন image delete
            if (self::$treatment->image && Storage::disk('public')->exists(self::$treatment->image)) {

                Storage::disk('public')->delete(self::$treatment->image);
            }

            // নতুন image upload
            self::$treatment->image =
                $request->file('image')->store('treatments', 'public');
        }
        self::$treatment->save();
    }

    public static function deleteTreatment($id){
        self::$treatment = Treatment::findOrFail($id);
        if (self::$treatment->image && Storage::disk('public')->exists(self::$treatment->image)) {

            Storage::disk('public')->delete(self::$treatment->image);
        }
        self::$treatment->delete();
    }
}
