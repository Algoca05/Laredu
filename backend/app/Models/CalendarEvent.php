<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start',
        "end",
        'start_time',
        'end_time',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}