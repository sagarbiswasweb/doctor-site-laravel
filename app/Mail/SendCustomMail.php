<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;

class SendCustomMail extends Mailable
{
    public $data;
    protected $files = [];

    public function __construct($data, $attachments = []){
        $this->data = $data;

        // Ensure attachments is always array
        $this->files = is_array($attachments)
                        ? $attachments
                        : [$attachments];
    }

    public function envelope(): Envelope{
        return new Envelope(
            subject: $this->data['subject'],
        );
    }

    public function content(): Content{
        return new Content(
            view: 'emails.custom', // make sure this blade exists
            with: [
                'data' => $this->data
            ]
        );
    }

    public function attachments(): array{
        $attachments = [];

        foreach ($this->files as $filePath) {

            if ($filePath) {

                // Convert stored path to full system path
                $fullPath = storage_path('app/public/' . $filePath);

                if (file_exists($fullPath)) {

                    $attachments[] = Attachment::fromPath($fullPath)
                        ->as(basename($filePath));
                }
            }
        }

        return $attachments;
    }
}