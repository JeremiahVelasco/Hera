<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'module',
        'timestamp'
    ];

    const DEFAULT_PAGINATION = 5;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
