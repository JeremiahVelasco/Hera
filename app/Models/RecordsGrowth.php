<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordsGrowth extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'date',
        'height',
        'weight',
    ];
}
