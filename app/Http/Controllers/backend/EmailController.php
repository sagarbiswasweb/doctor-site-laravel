<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendCustomMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Webklex\IMAP\Facades\Client;
use Illuminate\Pagination\LengthAwarePaginator;

class EmailController extends Controller
{
    public function inbox(Request $request)
    {
        try {
            $client = Client::account('default');
            $client->connect();

            $folder = $client->getFolderByName('INBOX');

            // 1. Fetch messages without the broken sort method
            $messages = $folder->messages()->all()->get();

            // 2. Sort them by date descending using Laravel's collection helper
            $sortedMessages = $messages->sortByDesc(function ($message) {
                return $message->getDate()[0] ?? now();
            });

            // 3. Setup pagination variables
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $perPage = 10;

            // 4. Slice the sorted collection
            $currentItems = $sortedMessages->slice(($currentPage - 1) * $perPage, $perPage)->all();

            // 5. Build the custom paginator
            $emails = new LengthAwarePaginator(
                $currentItems,
                $sortedMessages->count(),
                $perPage,
                $currentPage,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => 'page',
                ]
            );

            return view('backend.email.inbox', compact('emails'));
        } catch (\Throwable $e) {
            dd(
                $e->getMessage(),
                $e->getFile(),
                $e->getLine()
            );
        }
    }

    public function sent(){
        $emails = Email::where('type', 'sent')
                    ->latest()
                    ->paginate(10);

        return view('backend.email.sent', compact('emails'));
    }

    public function compose(){
        return view('backend.email.compose');
    }

    public function read($id){
        $email = Email::findOrFail($id);

        // Inbox এর জন্য read mark করা
        if($email->type == 'received' && !$email->is_read) {
            $email->update(['is_read' => true]);
        }
        return view('backend.email.read', compact('email'));
    }

    public function readImap($uid)
    {
        try {
            $client = Client::account('default');
            $client->connect();

            $folder = $client->getFolderByName('INBOX');
            $message = $folder->query()->getMessageByUid($uid);

            if ($message && method_exists($message, 'setFlag')) {
                $message->setFlag('Seen');
            }

            return view('backend.email.read-imap', compact('message', 'uid'));
        } catch (\Throwable $e) {
            dd(
                $e->getMessage(),
                $e->getFile(),
                $e->getLine()
            );
        }
    }

    public function downloadAttachment($uid, $partNumber)
    {
        try {
            $client = Client::account('default');
            $client->connect();

            $folder = $client->getFolderByName('INBOX');
            $message = $folder->query()->getMessageByUid($uid);

            $attachments = $message->getAttachments();
            foreach ($attachments as $attachment) {
                if ($attachment->getPartNumber() == $partNumber) {
                    $content = $attachment->getContent();
                    $filename = $attachment->getName();
                    
                    return response($content, 200)
                        ->header('Content-Type', $attachment->getContentType() ?? 'application/octet-stream')
                        ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
                }
            }

            return abort(404, 'Attachment not found');
        } catch (\Throwable $e) {
            return abort(500, 'Error downloading attachment: ' . $e->getMessage());
        }
    }

    public function send(Request $request){
        $request->validate([
            'email'         => 'required|email',
            'subject'       => 'required',
            'message'       => 'required',
            'attachments.*' => 'file|mimes:jpg,jpeg,png,gif,pdf,doc,docx|max:5120'
        ]);

        $attachments = [];

        // Store attachments
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $path = $file->store('emails', 'public');
                $attachments[] = $path;
            }
        }

        $data = [
            'subject' => $request->subject,
            'title'   => 'Advanced Hernia Center Bangladesh',
            'message' => $request->message,
        ];

        // Send email
        Mail::to($request->email)
            ->send(new SendCustomMail($data, $attachments));

        // Save to database
        Email::create([
            'to_email'    => $request->email,
            'from_email'  => Auth::guard('admin')->user()->email,
            'subject'     => $request->subject,
            'message'     => $request->message,
            'type'        => 'sent',
            'attachments' => $attachments
        ]);

        return redirect()->route('email.compose')
            ->with('success', 'Email sent successfully!');
    }

    public function markRead(Request $request){
        Email::whereIn('id',$request->ids)
            ->update(['status'=>'read']);

        return response()->json(['success'=>true]);
    }

    public function deleteMail(Request $request){
        $emails = Email::whereIn('id', $request->ids)->get();

        foreach ($emails as $email) {

            if ($email->attachments) {
                foreach ($email->attachments as $file) {
                    Storage::disk('public')->delete($file);
                }
            }

            $email->delete();
        }

        return response()->json(['success'=>true]);
    }
}
