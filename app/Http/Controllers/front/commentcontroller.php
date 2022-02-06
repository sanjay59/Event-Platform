<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\imgmodel\ChangeVideo;
use App\imgmodel\Reg_model;


use App;
use App\Cmm;

class commentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        date_default_timezone_set("Asia/Kolkata");
    }
    
    public function checkcount()
    {
        return view('frontent.checkcount');
    }
    public function comment(Request $r)
    {
     if($r->session()->get('id'))
     {
       $data1=DB::table('tbl_logo')->first();
       $data = DB::table('page_setup')->where('url','stage')->first();
       $bgimg = Reg_model::get('image');
       $uname=$r->session()->get('name');
       $id=$r->session()->get('id');
       $email="sanjay@gmail.com";
       $description=request('description');
       $date=now();
       $capsule=array('name'=>$uname,'id'=>$id,'email'=>$email);
       $rpage=DB::table('l_r_page')->get();

            // $comments=DB::table("all_comments")->get();
       $comments =DB::table('tbl_users')
       ->join('cmms', 'tbl_users.id', '=', 'cmms.u_id')
       ->select('cmms.id','cmms.u_id','tbl_users.name','cmms.description','cmms.sparkm','cmms.created_at','cmms.updated_at')->where('cmms.sparkm','chat')->orderby("id","desc")->latest("created_at")->take(100)->get()->reverse();
       if($data1->hpage_st==0){
        return view('frontent.comments',compact('data','date','bgimg','data1','rpage','comments','description'))->with($capsule);
    }else{
        return redirect('holding-page');
    }
}else{
 return redirect('register');

}
}
public function livepage(Request $r)
{
   $data1=DB::table('tbl_logo')->first();
   $data = DB::table('page_setup')->where('url','stage')->first();
   $bgimg = Reg_model::get('image');
   $uname=$r->session()->get('name');
   $id=$r->session()->get('id');
   $email="sanjay@gmail.com";
   $description=request('description');
   $date=now();
   $capsule=array('name'=>$uname,'id'=>$id,'email'=>$email);
   $rpage=DB::table('l_r_page')->get();

            // $comments=DB::table("all_comments")->get();
   $comments =DB::table('tbl_users')
   ->join('cmms', 'tbl_users.id', '=', 'cmms.u_id')
   ->select('cmms.id','cmms.u_id','tbl_users.name','cmms.description','cmms.sparkm','cmms.created_at','cmms.updated_at')->where('cmms.sparkm','chat')->orderby("id","desc")->latest("created_at")->take(100)->get()->reverse();
   return view('frontent.commentsdemo',compact('data','date','bgimg','data1','rpage','comments','description'))->with($capsule);
}
public function entrypage(Request $r)
{
 if($r->session()->get('id'))
 {
   return view('frontent.entrypage');
}else{
 return redirect('register');

}
}
public function hpage(Request $r)
{

    $data1=DB::table('tbl_logo')->first();
    $uname=$r->session()->get('name');
    $id=$r->session()->get('id');
    $capsule=array('name'=>$uname,'id'=>$id);
    $rpage=DB::table('l_r_page')->get();    
    return view('frontent.holdingpage',compact('data1','rpage'))->with($capsule);
}
public function hpage2(Request $r)
{
    $data1=DB::table('tbl_logo')->first();   
    return view('frontent.choldpage',compact('data1'));
}
public function successp(Request $r)
{

    $data1=DB::table('tbl_logo')->first();
    $data = ChangeVideo::all();

    $uname=$r->session()->get('name');
    $id=$r->session()->get('id');
    $capsule=array('name'=>$uname,'id'=>$id);
    $rpage=DB::table('l_r_page')->get();
            // $comments=DB::table("all_comments")->get();
    
    return view('frontent.successpage',compact('data','data1','rpage'))->with($capsule);
    
}
public function userchat(Request $r)
{
    $data1=DB::table('tbl_logo')->first();
    


    $data = ChangeVideo::all();
    $bgimg = Reg_model::get('image');
    $name=$r->session()->get('name');
    $id=$r->session()->get('id');
    $email="sanjay@gmail.com";
    $description=request('description');
    $date=now();

    $capsule=array('name'=>$name,'id'=>$id,'email'=>$email);
    $rpage=DB::table('l_r_page')->get();
            // $comments=DB::table("all_comments")->get();
    $comments =DB::table('tbl_users')
    ->join('cmms', 'tbl_users.id', '=', 'cmms.u_id')
    ->select('cmms.id','cmms.u_id','tbl_users.name','cmms.description','cmms.sparkm','cmms.created_at','cmms.updated_at')->where('cmms.sparkm','chat')->orderby("id","desc")->latest("created_at")->take(100)
    ->get()->reverse();

    return view('frontent.userchat',compact('data','date','bgimg','data1','rpage','comments','description'))->with($capsule);
}
public function commentchat(Request $r)
{
   $data1=DB::table('tbl_logo')->first();



   $data = ChangeVideo::all();
   $bgimg = Reg_model::get('image');
   $id=$r->session()->get('id');
   $name=$r->session()->get('name');

   $capsule=array('name'=>$name,'id'=>$id);
   $rpage=DB::table('l_r_page')->get();
   $comments=DB::table("all_comments")->get();

   return view('frontent.chat',compact('data','bgimg','data1','rpage','comments'))->with($capsule);
}
    // public function commentchatref(Request $r)
    // {
    //    $data1=DB::table('tbl_logo')->get();



    //         $data = ChangeVideo::all();
    //         $bgimg = Reg_model::get('image');
    //         $id=$r->session()->get('id');
    //         $name=$r->session()->get('name');

    //         $capsule=array('name'=>$name,'id'=>$id);
    //         $comments=DB::table("all_comments")->get();

    //         return view('frontent.chatref',compact('data','bgimg','data1','comments'))->with($capsule);
    // }
public function comment2(Request $r)
{
   $data1=DB::table('tbl_logo')->first();



   $data = ChangeVideo::all();
   $bgimg = Reg_model::get('image');
   $name="ABC";
   $id=$r->session()->get('id');

   $capsule=array('name'=>$name,'id'=>$id);


   return view('frontent.commentsf',compact('data','bgimg','data1'))->with($capsule);
}
public function videocall(Request $r)
{
   $data1=DB::table('tbl_logo')->first();


   $data = ChangeVideo::all();
   $bgimg = Reg_model::get('image');


            // echo "<pre>";
            // print_r($bgimg);


   return view('frontent.videocall',compact('data','bgimg','data1'));
}

public function showcomment1(Request $r)
{
    if($r->session()->get('id')=="")
    {
        return redirect('admin');
    }else
    {
        $data["table"]=DB::table("all_comments")->orderby("id","desc")->get();
        $ccount=DB::table('all_comments')->count();

        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();


        $name=$r->session()->get('name');
        $email=$r->session()->get('email');
        $capsule=array('name'=>$name,'email'=>$email);
            // $capsule1=array('user_img'=>$user_img);
        return view('admin.comment',$data,['count'=>$count,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}

Public function savecomment(Request $r)
{
    if($r->session()->get('id')=="")
    {
        return redirect('login');
    }else
    {
        $name=$r->session()->get('id');
        $email=$r->session()->get('email');
        $capsule=array('name'=>$name,'email'=>$email);
        $comment=request('comment');


        $reg = new App\Comment;

        $reg->comment=$comment;
        $reg->u_id=$name;

        $created=$reg->save();

        if($created){
            return redirect('stage')->with('mag','Comment successfully send',$capsule);
        }

    }

}

public function store(Request $r)
{
    if($r->session()->get('id')=="")
    {
        return redirect('/');
    }else
    {
        $name=$r->session()->get('id');
        $email=$r->session()->get('email');
        $capsule=array('name'=>$name,'email'=>$email);
        $r->validate([
          'description' => 'required',
      ]);
        // print_r($name);die();
        $post = Cmm::Create(
            ['description' => $r->description,'u_id' => $name,'sparkm' =>'chat']);
        return response()->json(['code'=>200, 'message'=>'Your Comment has been submitted.','data' => $post], 200);
    }

}
public function store2(Request $r)
{
    if($r->session()->get('id')=="")
    {
        return redirect('/');
    }else
    {
        $name=$r->session()->get('id');
        $email=$r->session()->get('email');
        $capsule=array('name'=>$name,'email'=>$email);
        $r->validate([
          'description' => 'required',
      ]);
        // print_r($name);die();
        $post = Cmm::Create(
            ['description' => $r->description,'u_id' => $name,'sparkm' =>'comment']);
        return response()->json(['code'=>200, 'message'=>'Your Comment has been submitted.','data' => $post], 200);
    }

}



public function download()
{
    return view('admin.comment');
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
}
