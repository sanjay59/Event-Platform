<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class D_a_p_model extends Model
{
    protected $table='dy_pulse';
    protected $fillable=['color','m_top','m_left','pheight','pwidth','url'];

    public $timestamps=false;
}
