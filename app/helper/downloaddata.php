<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use\Illuminate\Support\Facades\App\ManageInputField;

function changeDateFormate($date,$date_format){
	return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
}
function tablehead()
{
	$tablehead=App\ManageInputField::where('page_name','register')->first();
	$array=array('Sr No.');
	if($tablehead->name){$name='Name';array_push($array,$name);};
	if($tablehead->firm_name){$firm_name='Firm Name';array_push($array,$firm_name);};
	if($tablehead->email){$email='Email';array_push($array,$email);};
	if($tablehead->mobile_no){$mobile_no='Mobile No.';array_push($array,$mobile_no);};
	if($tablehead->branch){$branch='Branch';array_push($array,$branch);};
	if($tablehead->multioption){$multioption='Chanel';array_push($array,$multioption);};
	if($tablehead->employee_code){$employee_code='Employee Code';array_push($array,$employee_code);};
	if($tablehead->type){$type='Type';array_push($array,$type);};
	if($tablehead->city){$city='City';array_push($array,$city);};
	if($tablehead->country){$country='Country';array_push($array,$country);};
	array_push($array,'Status');
	array_push($array,'Create Date');
	array_push($array,'Time');
	return $array;

}
