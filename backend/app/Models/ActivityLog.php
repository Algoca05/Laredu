<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'user_id',
        'table_name',
        'changes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
