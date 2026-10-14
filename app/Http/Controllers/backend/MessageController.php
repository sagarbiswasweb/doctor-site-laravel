<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::latest()->get();
        return view('backend.message.index', [
            'messages' => $messages
        ]);
    }

    public function viewMessage($id){
        $message = Message::findOrFail($id);

        $message->is_read = 1;
        $message->save();

        return view('backend.message.view', [
            'message' => $message
        ]);
    }

    public function deleteMessage($id){
        Message::deleteMessage($id);
        Swal::success([
            'title' => 'Message deleted successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    public function bulkDelete(Request $request){
        Message::whereIn('id',$request->ids)->delete();

        return response()->json([
            'success' => true
        ]);
    }

    public function unread(){
        $messages = Message::where('is_read', false)
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($msg) {
                return [
                    'id'            => $msg->id,
                    'user_name'     => $msg->name,           // matches DB
                    'user_avatar'   => $msg->user_avatar ?? 'default-avatar.jpg', // optional
                    'preview'       => \Illuminate\Support\Str::limit($msg->message, 50),
                    'created_at'    => $msg->created_at->format('h:i a')
                ];
            });

        $count = Message::where('is_read', false)->count();

        return response()->json([
            'messages'  => $messages,
            'count'     => $count
        ]);
    }

    // Mark all unread as read
    public function markRead(){
        Message::where('is_read', false)->update(['is_read' => true]);
        return response()->json(['success' => true]);
    }

    public function unreadCount(){
        $count = Message::where('is_read', 0)->count();

        return response()->json([
            'count' => $count
        ]);
    }
}
