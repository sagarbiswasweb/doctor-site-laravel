<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Message;
use App\Models\Procedure;
use App\Models\Schedule;
use App\Models\Treatment;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class HomeController extends Controller
{
    // show home page 
    public function index(){
        $schedules = Schedule::latest()->get();
        $about = About::latest()->first();
        $treatments = Treatment::latest()->get();
        $procedures = Procedure::latest()->get();
        return view('frontend.home',[
            'schedules' => $schedules,
            'about' => $about,
            'treatments' => $treatments,
            'procedures' => $procedures
        ]);
    }

    // store message from contact form
    public function storeMessage(Request $request){
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            // 'phone'     => 'nullable|string|max:20',
            'message'   => 'required|string',
        ]);

        try {
            Message::storeMessage($request);
            
            // Check if it's an AJAX request
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Message sent successfully!'
                ]);
            }

            Swal::success([
                'title' => 'Message sent successfully',
                'timer' => 2000,
            ]);
            return redirect()->back();
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while sending your message.'
                ], 500);
            }
            throw $e;
        }
    }
}
