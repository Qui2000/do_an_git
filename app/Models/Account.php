<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'tai_khoan';
    protected $fillable = [
        'ten',
        'mat_khau',
        'ngay_sinh',
        'dia_chi',
        'sdt',
        'gioi_tinh',
        'quoc_tich',
        'ngay_lam_viec',
        'ma_quyen',
    ];
}