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
use App\rating;
class Dashboard extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Kolkata");
    }
    
    public function index(Request $r)
    {
     if(!$r->session()->get('id'))
     {
        return redirect('/');
    }else
    {

        $data=DB::table('tbl_logo')->first();
        $allpulse=DB::table('dy_pulse')->get();
        $img_slider=DB::table('dy_pulse')->select("*")->where('img_st',1)->get();
        $img_slider2=DB::table('dy_pulse')->select("*")->where('aj_st',1)->get();
        $lobbyvideo=DB::table('lobby_videos')->get();
        $rpage=DB::table('tbl_login')->get();
        $name=$r->session()->get('name');
        $id=$r->session()->get('id');
        $puls1c = Puls1::get();
        // print_r($id);die();

        $capsule=array('name'=>$name,'id'=>$id);
        // $capsule1=array('user_img'=>$user_img);
        if($data->hpage_st==0){
            return view('frontent.dashboard',compact('puls1c','data','allpulse','lobbyvideo','img_slider','img_slider2','rpage'))->with($capsule);
        }else{
            return redirect('holding-page');
        }
    }
}
public function livedemo(Request $r)
    {
     
        $data=DB::table('tbl_logo')->first();
        $allpulse=DB::table('dy_pulse')->get();
        $img_slider=DB::table('dy_pulse')->select("*")->where('img_st',1)->get();
        $img_slider2=DB::table('dy_pulse')->select("*")->where('aj_st',1)->get();
        $lobbyvideo=DB::table('lobby_videos')->get();
        $rpage=DB::table('tbl_login')->get();
       
        $puls1c = Puls1::get();
        // print_r($id);die();

        // $capsule1=array('user_img'=>$user_img);
            return view('frontent.dashboard2',compact('puls1c','data','allpulse','lobbyvideo','img_slider','img_slider2','rpage'));
}
public function welcome(Request $r)
{
 if(!$r->session()->get('id'))
 {
    return redirect('/');
}else
{

    $data=DB::table('tbl_logo')->first();
    $puls1c = Puls1::get();

        // $capsule1=array('user_img'=>$user_img);
    if($data->hpage_st==0){
        return view('frontent.welcome',compact('data','puls1c',));
    }else{
        return redirect('live');
    }
}
}
public function changepage()
{
    $data=DB::table('tbl_logo')->first();
    $allpulse=DB::table('dy_pulse')->get();
    $img_slider=DB::table('dy_pulse')->select("*")->where('img_st',1)->get();
    $img_slider2=DB::table('dy_pulse')->select("*")->where('aj_st',1)->get();
    $lobbyvideo=DB::table('lobby_videos')->get();
    $rpage=DB::table('tbl_logo')->get();

    $puls1c = Puls1::get();

        // $capsule1=array('user_img'=>$user_img);
    return view('frontent.changep',compact('puls1c','data','allpulse','lobbyvideo','img_slider','img_slider2','rpage'));
}



public function loginform(Request $r)
{
    if($r->session()->get('id'))
    {
        return redirect('/live');
    }else
    {
        $logo=DB::table('tbl_logo')->first();
        $pagesetup=DB::table('page_setup')->where('type','login')->first();
        $inpfield=App\ManageInputField::where('page_name','login')->first();
        return view('frontent.flogin',compact('logo','inpfield','pagesetup'));

    }
}

public function loginform2(Request $r)
{
    if($r->session()->get('id'))
    {
        return redirect('live');
    }else
    {
        $logo=DB::table('tbl_logo')->first();
        $lrtable=DB::table('tbl_login')->get();

        $table1=DB::table('tbl_login')->get();
        // print_r($logo);die();

        return view('frontent.thankpage',['table1'=>$table1,'lrtable'=>$lrtable],compact('logo'));

    }
}

public function check_admin(Request $r)
{
    $name=$r->name;
    $email=$r->email;
    $mobile_no=$r->mobile_no;

    $admin= App\AdminReg::where('mobile_no',$mobile_no)->get();
    
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
   $validator = Validator::make($r->all(), [
    'name'=>'required|alpha',
    'mobile_no'=>'required|numeric',
]);
        // $email=$r->email;
   $mobile_no=$r->mobile_no;
        // print_r($token);
        // print_r($tkn);die();

   $user= App\Adduser::where('mobile_no',$mobile_no)->get();

   if(count($user)>0){
            // $r->session()->put('id',$user[0]->id);

    $r->session()->put('name',$user[0]->name);
            // $r->session()->put('id',\Session::getId());
    $r->session()->put('id', $user[0]->id);
            // $r->session()->put('ip_address', $r->ip());
            // $r->session()->put('user_agent', $r->header('User-Agent'));
            // $r->session()->put('payload', base64_encode($r->getContent()));
            // $r->session()->put('last_activity', time());
            //redirect to dashboard;
            // echo($r);die();

    $name=$r->session()->get('id');
            // print_r($name);die();


    $reg = new App\All_login_users;
    $u_time = new App\imgmodel\Total_login_Time;

    $reg->u_id=$name;
    $u_time->user_id=$name;
    $u_time->login_time=now();
    $u_time->logout_time=now();
    $dt1=now();

    $created=$u_time->save();

    $data['table']=DB::table('tbl_users')->find($name);


    $data['table']=DB::table('tbl_users')->where('id','=',$name)
    ->update(['status'=>1]);

    $data['table']=DB::table('tbl_users')->where('id','=',$name)
    ->update(['login_time'=>now()]);



    return redirect('live')->with('slogin','Successfully Login');

}
else{

    return redirect('/')->with('msg','Please Enter valid 10 digit Phone Number');
}
}



public function logout(Request $r)
{
    $id=$r->session()->get('id');
    $checkrating=rating::where('user_id',$id)->first();
    $checkrating2=DB::table('tbl_users')->where('id',$id)->where('eurl',1)->first();
    $data['table']=DB::table('tbl_users')->where('id',$id)->update(['status'=>0]);
    $data['table']=DB::table('tbl_users')->where('id',$id)->update(['logout_time'=>now()]);
    $data['table']=DB::table('total_login__times')->where('user_id',$id)->update(['logout_time'=>now()]);
    // print_r($checkrating);
    // print_r($checkrating2);die();

    $r->session()->forget('id');
    $r->session()->forget('name');
    if($checkrating){
    if($checkrating2){
        return redirect('/');
    }
    }else{
         if($checkrating2){
        return redirect('/')->with('logout',$id);
    }else{
        return redirect('/');
        
    }
    }
}



}
