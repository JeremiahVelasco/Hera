<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    const VACCINATION = 1;
    const APPOINTMENT = 2;
    const GROWTH_UPDATE = 3;
}
