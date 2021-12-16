<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootballPitch extends Model
{
    protected $table = 'san';
    protected $fillable = [
        'ma_loai_san',
        'ten',
        'mo_ta',
    ];
}