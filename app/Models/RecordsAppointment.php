<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordsAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'guardian_id',
        'child_id',
        'date',
        'details'
    ];
}
