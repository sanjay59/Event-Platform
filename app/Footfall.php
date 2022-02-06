<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footfall extends Model
{
    public $fillable = ['u_id','location','nocount'];
}
