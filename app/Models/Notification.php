<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'reciever_id',
        'title',
        'description',
        'type',
        'record_id',
        'seen',
        'is_admin',
        'created_at'
    ];
}
