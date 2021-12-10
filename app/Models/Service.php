<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'qui_dinh';
    protected $fillable = [
        'ma_loai_dv',
        'ten',
        'gia_tien',
        'don_vi',
    ];
}