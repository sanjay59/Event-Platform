<?php

namespace App\Http\Controllers;
use App\Adduser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App;
use App\rating;
use Mail;


class Addusers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        date_default_timezone_set("Asia/Calcutta");
    }
    
    public function index()
    {
        return view('admin.index');
    }

    public function register(Request $r)
    {
        if($r->session()->get('id'))
        {
            $hpage=DB::table('tbl_logo')->first();
            if($hpage->hpage_st==0){
                return redirect('live');
            }else{
                return redirect('holding-page');
            }

        }else
        {
            $pagesetup=DB::table('page_setup')->where('type','register')->first();
            $table=DB::table('tbl_logo')->first();
            $inpfield=App\ManageInputField::where('page_name','register')->first();
            return view('frontent.fregister',compact('table','pagesetup','inpfield'));
        }

    }
    public function storereating(Request $r)
    {
        $post = rating::Create(
            ['user_id' => $r->user_id,'star' =>$r->star]);
        return response()->json(['code'=>200, 'message'=>'Your Rating has been submitted.','data' => $post], 200);
    }
    public function attendinguser(Request $r)
    {
        if($r->session()->get('id'))
        {
            $id=$r->session()->get('id');
            $data['table']=DB::table('tbl_users')->where('id','=',$id)->update(['eurl'=>1]);
        }

    }
    public function changepage()
    {

        return view('frontent.changep');
    }
    public function saveusers(Request $request)
    {
        $inpfield=App\ManageInputField::first();
        if($inpfield->name){
            $name=request('name');
        }if($inpfield->email){
            $email=request('email');
        }if($inpfield->mobile_no){
            $mobile_no=request('mobile_no');
        }if($inpfield->firm_name){
            $firm_name=request('firm_name');
        }if($inpfield->city){
            $city=request('city');
        }if($inpfield->country){
            $country=request('country');
        }if($inpfield->type){
            $type=request('type');
        }if($inpfield->agree){
            $agree=request('agree');
        }if($inpfield->employee_code){
            $employee_id=request('employee_id');
        }if($inpfield->branch){
            $branch=request('branch');
        }if($inpfield->multioption){
            $multioption=request('channel');
        }

        $user= new App\Adduser;
        if($inpfield->name){
            $user->name=$name;
        }if($inpfield->email){
            $user->email=$email;
        }if($inpfield->mobile_no){
            $user->mobile_no=$mobile_no;
        }if($inpfield->employee_code){
            $user->employee_id=$employee_id;
        }if($inpfield->branch){
            $user->branch=$branch;
        }if($inpfield->multioption){
            $user->multioption=$multioption;
        }if($inpfield->firm_name){
            $user->firm_name=$firm_name;
        }if($inpfield->city){
            $user->city=$city;
        }if($inpfield->country){
            $user->country=$country;
        }if($inpfield->type){
            $user->type=$type;
        }if($inpfield->agree){
            $user->agree=$agree;
        }
        $table=DB::table('tbl_logo')->first();
        if($inpfield->employee_code){
            $check_user=App\Adduser::where('employee_id',$employee_id)->get();
        }
        if($inpfield->mobile_no){
            $check_user=App\Adduser::where('mobile_no',$mobile_no)->get();
        }
        if($inpfield->email){
            $check_user=App\Adduser::where('email',$email)->get();
        }

        if(count($check_user)>0)
        {
            return redirect('/')->with('msg','User Already exists.')->withinput();
        }
        else{
            if($inpfield->email && $table->mail_st){
                $to_name=' ';
                $to_email=$email;
                $data=array('name'=>$name,'body'=>'First mail send');
                Mail::send('mail',$data,function($message) use ($to_name,$to_email){
                    $message->to($to_email)
                    ->subject('Welcome');
                });
            }

            $created=$user->save();
            if($created){
                return redirect('holding-page')->with('countmsg','Count start');
            }else{
                return redirect('/')->withinput();

            }
        }
    }
    public function savecheckusers(Request $request)
    {
        $inpfield=App\ManageInputField::where('page_name','login')->first();
        if($inpfield->name){
            $name=request('name');
        }if($inpfield->email){
            $email=request('email');
        }if($inpfield->mobile_no){
            $mobile_no=request('mobile_no');
        }if($inpfield->firm_name){
            $firm_name=request('firm_name');
        }if($inpfield->city){
            $city=request('city');
        }if($inpfield->country){
            $country=request('country');
        }if($inpfield->type){
            $type=request('type');
        }if($inpfield->agree){
            $agree=request('agree');
        }if($inpfield->employee_code){
            $employee_id=request('employee_id');
        }if($inpfield->branch){
            $branch=request('branch');
        }if($inpfield->multioption){
            $multioption=request('channel');
        }
        $hpage=DB::table('tbl_logo')->first();
        // print_r($hpage->hpage_st);die();

        if($inpfield->employee_code){
            $user=App\Adduser::where('employee_id',$employee_id)->get();
        }
        if($inpfield->mobile_no){
            $user=App\Adduser::where('mobile_no',$mobile_no)->get();
        }
        if($inpfield->email){
            $user=App\Adduser::where('email',$email)->get();
        }
        if($user->isEmpty()){
            $user= new App\Adduser;

           if($inpfield->name){
            $user->name=$name;
        }if($inpfield->email){
            $user->email=$email;
        }if($inpfield->mobile_no){
            $user->mobile_no=$mobile_no;
        }if($inpfield->employee_code){
            $user->employee_id=$employee_id;
        }if($inpfield->branch){
            $user->branch=$branch;
        }if($inpfield->multioption){
            $user->multioption=$multioption;
        }if($inpfield->firm_name){
            $user->firm_name=$firm_name;
        }if($inpfield->city){
            $user->city=$city;
        }if($inpfield->country){
            $user->country=$country;
        }if($inpfield->type){
            $user->type=$type;
        }if($inpfield->agree){
            $user->agree=$agree;
        }
            $user->eurl=0;
            $user->status=1;
            $user->login_time=now();
            $user->logout_time=now();
            $user->save();

            if($inpfield->employee_code){
                $user=App\Adduser::where('employee_id',$employee_id)->get();
            }
            if($inpfield->email){
                $user=App\Adduser::where('email',$email)->get();
            }
            $request->session()->put('id',$user[0]->id);
            $request->session()->put('name',$user[0]->name);
            $id=$request->session()->get('id');
            $name=$request->session()->get('name');
            $u_time = new App\imgmodel\Total_login_Time;

            $u_time->user_id=$id;
            $u_time->login_time=now();
            $u_time->logout_time=now();
            $dt1=now();
            $created=$u_time->save();

            if($hpage->hpage_st==0){
                return redirect('live');
            }else{
                return redirect('holding-page')->with('countmsg','Count start');
            }

        }
        // echo ("<pre>");
        // print_r($user);die();
        $request->session()->put('id',$user[0]->id);

        $request->session()->put('name',$user[0]->name);
        $id=$request->session()->get('id');
        $name=$request->session()->get('name');
        // print_r($name);die();
        $u_time = new App\imgmodel\Total_login_Time;

        $u_time->user_id=$id;
        $u_time->login_time=now();
        $u_time->logout_time=now();
        $dt1=now();

        $created=$u_time->save();

        $data['table']=DB::table('tbl_users')->where('id','=',$id)
        ->update(['status'=>1,'eurl'=>0]);
        $data['table']=DB::table('tbl_users')->where('id','=',$id)
        ->update(['login_time'=>now()]);

        if($hpage->hpage_st==0){
            return redirect('live');
        }else{
            return redirect('holding-page')->with('countmsg','Count start');
        }

    }
    public function attend_user(Request $r)
    { 
        $id=$r->session()->get('id');
        $post = App\Adduser::where('id',$id)->update(
            ['eurl' => 1]);
        return response()->json(['code'=>200, 'message'=>'','data' => $post], 200);
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


            $data['table']=DB::table('tbl_users')->where('id','=',$name)
            ->update(['status'=>1]);

            $data['table']=DB::table('tbl_users')->where('id','=',$name)
            ->update(['login_time'=>now()]);



            return redirect('live')->with('slogin','Successfully Login');

        }

    }
}
