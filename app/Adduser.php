<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adduser extends Model
{
    protected $table='tbl_users';
    protected $fillable=[ 'name', 'email', 'employee_id', 'branch','mobile_no', 'firm_name', 'agree', 'city', 'country', 'type', 'multioption', 'eurl', 'status', 'login_time', 'logout_time'];

    public $timestamps=true;
   
}
