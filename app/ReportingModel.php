<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportingModel extends Model
{
     protected $table="tbl_reporting";
    protected $fillable=['user_id','page_name','start_time','out_time'];
    public $timestamps=true;
}
