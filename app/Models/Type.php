<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    const FOOTBALL = 1;
    const BADMINTON = 2;
    protected $table = 'loai_hinh';
}
