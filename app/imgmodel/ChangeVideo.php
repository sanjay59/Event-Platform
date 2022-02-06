<?php

namespace App\imgmodel;

use Illuminate\Database\Eloquent\Model;

class ChangeVideo extends Model
{
    protected $table='change_videos';
    protected $fillable=['url','b_image'];
    public $timestamps=true;
}
