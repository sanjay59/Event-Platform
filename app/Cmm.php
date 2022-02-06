<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cmm extends Model
{
    // use SoftDeletes;
    public $fillable = ['u_id','description','sparkm'];
    // protected $dates = ['deleted_at'];
    
}
