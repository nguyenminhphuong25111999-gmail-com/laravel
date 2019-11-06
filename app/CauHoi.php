<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class CauHoi extends Model
{
    use SoftDeletes;
    protected $table = 'cau_hoi';
}
