<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSheetType extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
    ];

    protected $casts = [

    ];
}
