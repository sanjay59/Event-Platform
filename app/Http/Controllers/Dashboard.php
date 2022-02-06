<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\strtotime;
use Session;
use App\imgmodel\Total_login_Time;
use App\imgmodel\PulsModel\Puls1;



use App;
use App\Comment;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        if($r->session()->get('id')=="")
        {
            return redirect('login');
        }else
        {
            $data=DB::table('tbl_logo')->get();
            $name=$r->session()->get('name');
            $id=$r->session()->get('id');
            $puls1c = Puls1::get();

            $capsule=array('name'=>$name,'id'=>$id);
            // $capsule1=array('user_img'=>$user_img);
            return view('frontent.dashboard',compact('puls1c','data'))->with($capsule);
        }
    }
    public function loginform(Request $r)
    {
        if($r->session()->get('id'))
        {
            return redirect('home');
        }else
        {
        $data['table']=DB::table('tbl_logo')->get();
        $table1=DB::table('tbl_login')->get();

        return view('frontent.flogin',$data,['table1'=>$table1]);

    }
}

    public function check_admin(Request $r)
    {
        $email=$r->email;
        $mobile_no=$r->mobile_no;

        $admin= App\AdminReg::where('email',$email)->where('mobile_no',$mobile_no)->get();
    
        if(count($admin)>0){
            $r->session()->put('id',$admin[0]->id);
            $r->session()->put('name',$admin[0]->name);

            return redirect('dashboard')->with('slogin','Successfully Login');
        }
        else{
            return redirect('/admin')->with('msg','Email or Password are not matched');
        }
    }

    public function check_user(Request $r)
    {
        $email=$r->email;
        $mobile_no=$r->mobile_no;

        $user= App\Adduser::where('email',$email)->where('mobile_no',$mobile_no)->get();
    
        if(count($user)>0){
            $r->session()->put('id',$user[0]->id);

            $r->session()->put('name',$user[0]->name);

            $name=$r->session()->get('id');


            $reg = new App\All_login_users;
            $u_time = new App\imgmodel\Total_login_Time;

            $reg->u_id=$name;
            $u_time->user_id=$name;
            $u_time->login_time=now();
            $dt1=now();
            $created=$u_time->save();

            $data['table']=DB::table('tbl_users')->find($name);

                // $created=$reg->save();
                // $data['table']=DB::table('all_login_users')->where('u_id','=',$name)->update(['status'=>1]);
                // return redirect('dashboard')->with('slogin','Successfully Login');
        
                // $created=$reg->save();
            $data['table']=DB::table('tbl_users')->where('id','=',$name)
            ->update(['status'=>1]);

            $data['table']=DB::table('tbl_users')->where('id','=',$name)
            ->update(['login_time'=>now()]);
            Session::flash('message', 'Successfully Login'); 

            // if($data)
            // {
            //     return redirect()->with('slogin','Successfully Login');
            // }

            return redirect('home')->with('slogin','Successfully Login');
        
        }
        else{
            return redirect('/login')->with('msg','Email or Password are not matched');
        }
    }



    public function logout(Request $r)
    {
        $id=$r->session()->get('id');


        $id=$r->session()->get('id');
        // print_r($id);
        // echo "<pre>";
        $data['table']=DB::table('tbl_users')->where('id',$id)->update(['status'=>0]);
        $data['table']=DB::table('tbl_users')->where('id',$id)->update(['logout_time'=>now()]);
        $data['table']=DB::table('total_login__times')->where('user_id',$id)->update(['logout_time'=>now()]);
        // print_r($data);
        $r->session()->forget('id');
        $r->session()->forget('name');
        
        return redirect('login')->with('logout','Successfully Logout');
    }
        

    
}
