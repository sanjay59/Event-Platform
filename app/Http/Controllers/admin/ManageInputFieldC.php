<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\ManageInputField;


class ManageInputFieldC extends Controller
{
    function getinputfield(Request $r)
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $getfieldreg=ManageInputField::where('page_name','register')->first();
        $getfieldlogin=ManageInputField::where('page_name','login')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        return view('admin.pulscolor.allinputfield',compact('logo','admin','getfieldreg','getfieldlogin'))->with($capsule);
    }
     public function update(Request $r, $id)
    {
        $contact = ManageInputField::find($id);
        $contact->name = $r->get('name');
        $contact->email = $r->get('email');
        $contact->mobile_no = $r->get('mobile_no');
        $contact->employee_code = $r->get('employee_code');
        $contact->branch = $r->get('branch');
        $contact->firm_name = $r->get('firm_name');
        $contact->city = $r->get('city');
        $contact->type = $r->get('type');
        $contact->country = $r->get('country');
        $contact->multioption = $r->get('multioption');
        $contact->agree = $r->get('agree');

        $created=$contact->save();

        return redirect()->back()->with('changesuccess', 'Changed Successfully');
    }
}
