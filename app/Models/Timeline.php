<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $fillable = [
        'guardian_id',
        'child_id',
        'event_type',
        'event_id',
    ];
}
