<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootballPitch extends Model
{
    CONST LIST_TIME_ORDER = [
        5   => '05:00',
        6   => '06:00',
        7   => '07:00',
        8   => '08:00',
        9   => '09:00',
        10  => '10:00',
        14  => '14:00',
        15  => '15:00',
        16  => '16:00',
        17  => '17:00',
        18  => '18:00',
        19  => '19:00',
        20  => '20:00',
        21  => '21:00',
        22  => '22:00',
    ];

    protected $table = 'san';
    protected $fillable = [
        'ma_loai_san',
        'ten',
        'mo_ta',
    ];
}