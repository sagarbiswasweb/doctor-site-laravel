<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'to_email',
        'from_email',
        'subject',
        'message',
        'type',
        'is_read',
        'attachments'
    ];

    protected $casts = [
        'attachments' => 'array',
    ];
}
