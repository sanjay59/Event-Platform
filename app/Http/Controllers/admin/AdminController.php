<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminReg;
use App;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     public function index(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $capsule=array('image'=>$image,'name'=>$name);
        return view('admin.newadmin')->with($capsule);
    }
                
    }

    public function adminregister()
    {
        $data['table']=DB::table('tbl_reg_page')->get();

        $bgimg=DB::table('tbl_reg_page')->select("image")->where('id',1)->get();
        // print_r($bgimg);
        return view('frontent.fregister',$data);
    }

    public function saveadmin(Request $request)
    {
       
        $file2=$request->file('image');
        $ext2=$file2->extension();
        $logo=time()."1.".$ext2;

        $file2->move(public_path('/all_images/admin'),$logo);

        
        $name=$request->name;
        $email=$request->email;
        $mobile=$request->mobile_no;
        $company_name=$request->company_name;

        $reg= new App\AdminReg;  

        $reg->name=$name;
        $reg->email=$email;
        $reg->mobile_no=$mobile;
        $reg->company_name=$company_name;
        $reg->image=$logo;
       

        $created=$reg->save();

  
        
   
        return redirect('alladmin')
                        ->with('success','Account created successfully.');
    }
    public function show(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $capsule=array('image'=>$image,'name'=>$name);
        $data=AdminReg::get();
           
        
            // $capsule1=array('user_img'=>$user_img);
            return view('admin.alladmin',compact('data'))->with($capsule);
        }
        
    }
}
