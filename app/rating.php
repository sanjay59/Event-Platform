<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    public $fillable = ['user_id','star'];
}
