<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageInputField extends Model
{
    protected $table='inputfield';
    protected $fillable=[ 'name', 'email', 'mobile_no', 'employee_code', 'branch', 'firm_name', 'city', 'country', 'type', 'multioption'];
    
}
