<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Child extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'guardians',
        'given_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'height',
        'weight'
    ];

    public function guardian()
    {
        return $this->belongsToMany(Guardian::class);
    }
}
