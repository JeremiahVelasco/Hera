<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'given_name',
        'middle_name',
        'last_name',
        'email',
        'contact',
        'password',
    ];

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
