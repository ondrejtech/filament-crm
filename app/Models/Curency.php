<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curency extends Model
{
    use HasFactory;

    protected $fillable = [
        'curency_name',
    ];

    protected $casts = [

    ];
}
