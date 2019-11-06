<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Admin extends Model
{
    use SoftDeletes;
    protected $table = 'admin';
}
