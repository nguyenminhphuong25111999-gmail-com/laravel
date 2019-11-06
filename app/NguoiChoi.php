<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class NguoiChoi extends Model
{
    use SoftDeletes;
    protected $table = "nguoi_choi";
}
