<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class LinhVuc extends Model
{
    use SoftDeletes;
    protected $table  = 'linh_vuc';
}
