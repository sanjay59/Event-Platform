<?php

namespace App\Page_Img;

use Illuminate\Database\Eloquent\Model;

class Rpage_Img extends Model
{
    protected $tavle="tbl_reg_page";

    protected $fillable=['image'];

    public $timestamps=false;
}
