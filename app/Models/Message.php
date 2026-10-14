<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    private static $message;
    protected $fillable = ['name','email','phone','message','is_read','user_avatar'];

    public static function storeMessage($request){
        return self::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'message'   => $request->message
        ]);
    }

    public static function deleteMessage($id){
        self::$message = Message::find($id);
        self::$message->delete();
    }
}
