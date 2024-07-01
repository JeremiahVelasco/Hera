<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'given_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'height',
        'weight'
    ];
}
