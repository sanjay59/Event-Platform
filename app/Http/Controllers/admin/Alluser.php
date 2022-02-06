<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\strtotime;
use App;
use App\Cmm;
use App\rating;
use App\Footfall;
use App\Pagelike;

class Alluser extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Calcutta");
        $this->inpfield=App\ManageInputField::where('page_name','register')->first();
        $this->inpfieldl=App\ManageInputField::where('page_name','login')->first();


    }
    public function index(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $id=$r->session()->get('admin_id');
            $logo=DB::table('tbl_logo')->first();
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $role=$r->session()->get('role');
            $admin='admin';
            
            $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
            
            $count=DB::table('tbl_users')->count();
            $lcount=DB::table('tbl_users')->where('status',1)->count();
        // $ccount=DB::table('all_comments')->count();
            $ccount=DB::table('cmms')->where('sparkm','comment')->count();
            $attucount=DB::table('tbl_users')->where('eurl',1)->count();

            $logo=DB::table('tbl_logo')->first();
            $ratingcount=rating::count();
            $ratingcount5=rating::where('star',5)->count();
            $ratingcount4=rating::where('star',4)->count();
            $ratingcount3=rating::where('star',3)->count();
            $ratingcount2=rating::where('star',2)->count();
            $ratingcount1=rating::where('star',1)->count();
            $uniqueft=Footfall::get();
            $uniquefootfall=$uniqueft->count();
            $allfootfall=Footfall::sum('nocount');
            $likecount=Pagelike::count();
            return view('admin.index',compact('attucount','ratingcount','ratingcount5','ratingcount4','ratingcount3','ratingcount2','ratingcount1','uniquefootfall','allfootfall','likecount'),['count'=>$count,'logo'=>$logo,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
        }

        
    }
    public function index1(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $id=$r->session()->get('admin_id');
            $logo=DB::table('tbl_logo')->first();
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $role=$r->session()->get('role');
            $admin='admin';
            
            $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
            
            $count=DB::table('tbl_users')->count();
            $lcount=DB::table('tbl_users')->where('status',1)->count();
            $ccount=DB::table('cmms')->where('sparkm','comment')->count();
            $attucount=DB::table('tbl_users')->where('eurl',1)->count();

        // print_r($name);die;
            $ratingcount=rating::count();
            $ratingcount5=rating::where('star',5)->count();
            $ratingcount4=rating::where('star',4)->count();
            $ratingcount3=rating::where('star',3)->count();
            $ratingcount2=rating::where('star',2)->count();
            $ratingcount1=rating::where('star',1)->count();
        // $capsule1=array('user_img'=>$user_img);
            return view('admin.index1',compact('attucount','ratingcount','ratingcount5','ratingcount4','ratingcount3','ratingcount2','ratingcount1'),['count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
        }

        
    }
    public function showratingpage(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $id=$r->session()->get('admin_id');
            $logo=DB::table('tbl_logo')->first();
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $role=$r->session()->get('role');
            $admin='admin';
            $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
            $data["table2"] =DB::table('tbl_users')
            ->rightjoin('ratings', 'tbl_users.id', '=', 'ratings.user_id')
            ->select('ratings.user_id','tbl_users.*','ratings.star','ratings.created_at as ratingtime')->get();
            $count=DB::table('tbl_users')->count();
            $lcount=DB::table('tbl_users')->where('status',1)->count();
            $inpfieldst=$this->inpfield;
            return view('admin.ratingpage',$data,['count'=>$count,'inpfieldst'=>$inpfieldst,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount])->with($capsule);
        }

    }
    public function show(Request $r)
    {
      if($r->session()->get('admin_id')=="")
      {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $inpfieldst=$this->inpfield;
        $table2 =DB::table('tbl_users')
        ->leftjoin('total_login_time', 'tbl_users.id', '=', 'total_login_time.user_id')
        ->select('total_login_time.user_id','total_login_time.total_time','total_login_time.cltime','tbl_users.*')
        ->orderby("tbl_users.id","desc")->latest("created_at")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        return view('admin.registeruser',compact('table2','inpfieldst'),['count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount])->with($capsule);
    }

}
public function showhistry(Request $r,$id)
{
  if($r->session()->get('admin_id')=="")
  {
    return redirect('admin');
}else
{
    $adminid=$r->session()->get('admin_id');
    $logo=DB::table('tbl_logo')->first();
    $image=$r->session()->get('image');
    $name=$r->session()->get('name');
    $role=$r->session()->get('role');
    $userid=request('userid');
        // print_r($id);die();

    $admin='admin';
    $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$adminid);
    $data["table2"] =DB::table('tbl_users')
    ->leftjoin('tbl_reporting', 'tbl_users.id', '=', 'tbl_reporting.user_id')
    ->select('tbl_reporting.user_id','tbl_reporting.id','tbl_users.name','tbl_users.agree','tbl_users.status','tbl_users.employee_id','tbl_users.mobile_no',
        'tbl_users.company_name','tbl_reporting.page_name','tbl_reporting.start_time','tbl_reporting.out_time','tbl_users.created_at','tbl_users.updated_at')
    ->orderby("tbl_users.id","desc")->where('tbl_reporting.user_id',$id)->get();

    $userdetail=DB::table('tbl_users')->where('id',$id)->first();
    $count=DB::table('tbl_users')->count();
    $lcount=DB::table('tbl_users')->where('status',1)->count();


    return view('admin.userhistry',$data,['count'=>$count,'userdetail'=>$userdetail,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount])->with($capsule);
}

}
public function showlike(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $livepage=Pagelike::where('location','live')->count();
        $stagepage=Pagelike::where('location','stage')->count();
        $logo=DB::table('tbl_logo')->first();
        return view('admin.likepage',compact('livepage','stagepage','admin','logo'))->with($capsule);
    }


}
public function footfall(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $uniqueft=Footfall::get();
        $uniquefootfall=$uniqueft->count();
        $allfootfall=Footfall::sum('nocount');
           // Unique Footfall
        $liveedit=Footfall::where('location','live')->first();
        $livepage=Footfall::where('location','live')->count();
        $stagepage=Footfall::where('location','stage')->count();
        $photobooth=Footfall::where('location','photo-booth')->count();
        $photogallery=Footfall::where('location','photo-gallery')->count();
        $helpdesk=Footfall::where('location','welcome-desk')->count();
        $productzone=Footfall::where('location','product-zone')->count();
        $gamezone=Footfall::where('location','game-zone')->count();
        $walloffame=Footfall::where('location','wall-of-fame')->count();
        $talent=Footfall::where('location','talent')->count();
            // All Footfall
        $livepage2=Footfall::where('location','live')->sum('nocount');
        $stagepage2=Footfall::where('location','stage')->sum('nocount');
        $photobooth2=Footfall::where('location','photo-booth')->sum('nocount');
        $photogallery2=Footfall::where('location','photo-gallery')->sum('nocount');
        $helpdesk2=Footfall::where('location','welcome-desk')->sum('nocount');
        $productzone2=Footfall::where('location','product-zone')->sum('nocount');
        $gamezone2=Footfall::where('location','game-zone')->sum('nocount');
        $walloffame2=Footfall::where('location','wall-of-fame')->sum('nocount');
        $talent2=Footfall::where('location','talent')->sum('nocount');
        $logo=DB::table('tbl_logo')->first();
        return view('admin.showfootfall',['liveedit'=>$liveedit,'uniquefootfall'=>$uniquefootfall,'allfootfall'=>$allfootfall,'livepage'=>$livepage,'stagepage'=>$stagepage,'productzone'=>$productzone,'gamezone'=>$gamezone,'photobooth'=>$photobooth,'photogallery'=>$photogallery,'walloffame'=>$walloffame,'helpdesk'=>$helpdesk,'talent'=>$talent,'livepage2'=>$livepage2,'stagepage2'=>$stagepage2,'productzone2'=>$productzone2,'gamezone2'=>$gamezone2,'photobooth2'=>$photobooth2,'photogallery2'=>$photogallery2,'walloffame2'=>$walloffame2,'helpdesk2'=>$helpdesk2,'talent2'=>$talent2,'admin'=>$admin,'logo'=>$logo,])->with($capsule);
    }


}
public function search(Request $r)
{
 $name=$r->get('name');
 $employee_id=$r->get('employee_id');
     // $post = DB::table('tbl_users')->where('name','LIKE','%'.$name.'%')->get();
     // $cdata = DB::table('tbl_users')->where('name','LIKE','%'.$name.'%')->count();
 $data =DB::table('tbl_users')
 ->leftjoin('total_login_time', 'tbl_users.id', '=', 'total_login_time.user_id')
 ->select('total_login_time.user_id','tbl_users.name','tbl_users.branch','tbl_users.id','tbl_users.agree','tbl_users.status','tbl_users.employee_id','total_login_time.total_time','total_login_time.cltime','tbl_users.created_at','tbl_users.updated_at')
 ->where('tbl_users.name','LIKE','%'.$name.'%')->where('tbl_users.mobile_no','LIKE','%'.$employee_id.'%')->get();
 print_r($data);die();
 $cdata=DB::table('tbl_users')
 ->leftjoin('total_login_time', 'tbl_users.id', '=', 'total_login_time.user_id')
 ->select('total_login_time.user_id','tbl_users.name','tbl_users.branch','tbl_users.id','tbl_users.agree','tbl_users.status','tbl_users.employee_id','total_login_time.total_time','total_login_time.cltime','tbl_users.created_at','tbl_users.updated_at')
 ->where('tbl_users.name','LIKE','%'.$name.'%')->count();

 return response()->json(['code'=>200, 'data' => $data,'cdata' => $cdata], 200);
}
public function searchold(Request $r)
{
 $name=$r->get('name');
     // $user2 = DB::table('tbl_users')->where('name','LIKE','%'.$name.'%')->orWhere('employee_id','LIKE','%'.$name.'%')->get();
 $user =DB::table('tbl_users')
 ->leftjoin('total_login_time', 'tbl_users.id', '=', 'total_login_time.user_id')
 ->select('total_login_time.user_id','tbl_users.name','tbl_users.id','tbl_users.agree','tbl_users.status','tbl_users.employee_id','tbl_users.mobile_no',
    'tbl_users.company_name','total_login_time.total_time','total_login_time.cltime','tbl_users.created_at','tbl_users.updated_at')
 ->where('tbl_users.name','LIKE','%'.$name.'%')->get();
    // if(count($user) > 0)
    //     return view('admin.registeruser')->withDetails($user)->withQuery ( $q );
    // else return view ('admin.registeruser')->withMessage('No Details found. Try to search again !');
 print_r($user);die();
}
public function showuser(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->get();
            // $data["table2"]=DB::table("tbl_users")->orderby("id","desc")->latest("created_at")->get();
            // $data["table2"]=DB::table("tbl_users")->orderby("id","desc")->latest("created_at")->get();
             // $data["table2"] =DB::table('tbl_users')
             //    ->join('total_login_time', 'tbl_users.id', '=', 'total_login_time.u_id')
             //    ->select('total_login_time.id','total_login_time.u_id','tbl_users.name','tbl_users.mobile_no','tbl_users.employee_id','tbl_users.company_name','total_login_time.description','total_login_time.sparkm','total_login_time.created_at','total_login_time.updated_at')->where('total_login_time.sparkm','comment')
             //    ->orderby("id","desc")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        
        return view('admin.registeruserref',$data,['count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}
public function ratingdata(Request $r)
{
   $table =DB::table('tbl_users')
   ->rightjoin('ratings', 'tbl_users.id', '=', 'ratings.user_id')
   ->select('ratings.*','tbl_users.name','tbl_users.branch','tbl_users.company_name','tbl_users.mobile_no',)->get();
        // print_r($table);die();
   $filename = "StarRatingData.csv";
   $handle = fopen($filename, 'w+');
   fputcsv($handle, array('Sr No.','Name',  'Employee Code','Branch','Channel','Star Rating','Create Date','Time'));
   foreach($table as $row) {
    $srno      = $row->id;
    $name      = $row->name;
    $empcode      = $row->mobile_no;
    $branch      = $row->company_name;
    $channel      = $row->branch;
    $star      = $row->star;
    $created_at      = $row->created_at;

    fputcsv($handle, array($srno,$name,$empcode,$branch,$channel,$star,strftime("%d %b %Y",strtotime($created_at)),date('H:i', strtotime($created_at))));
}
fclose($handle);

$headers = array(
    'Content-Type' => 'text/csv',
);

return Response::download($filename, 'StarRatingData.csv', $headers);

}
public function showloginuser(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->get();
        $data["table2"]=DB::table("tbl_users")->where('status',1)->latest("created_at")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        $inpfieldst=$this->inpfield;
        
        return view('admin.loginuser',$data,['count'=>$count,'inpfieldst'=>$inpfieldst,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}
public function showallloginuser(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->get();
        $data["table2"]=DB::table("tbl_users")->where('eurl',1)->latest("created_at")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $attucount=DB::table('tbl_users')->where('eurl',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        $inpfieldst=$this->inpfield;
        
        return view('admin.allloginuser',$data,['inpfieldst'=>$inpfieldst,'attucount'=>$attucount,'count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}
public function shownotattendeduser(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $inpfieldst=$this->inpfield;
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->get();
        $data["table2"]=DB::table("tbl_users")->where('eurl',0)->latest("created_at")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $attucount=DB::table('tbl_users')->where('eurl',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        
        return view('admin.notattend',$data,['inpfieldst'=>$inpfieldst,'attucount'=>$attucount,'count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}
public function showloginuserref(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->get();
        $data["table2"]=DB::table("tbl_users")->orderby("id","desc")->where('status',1)->latest("created_at")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        
        return view('admin.loginuserref',$data,['count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}
public function lshow(Request $r)
{
 if($r->session()->get('admin_id')=="")
 {
    return redirect('admin');
}else
{
    $id=$r->session()->get('admin_id');
    $logo=DB::table('tbl_logo')->first();
    $image=$r->session()->get('image');
    $name=$r->session()->get('name');
    $data["table"]=DB::table("total_login_time")->get();
    $data["table2"]=DB::table("tbl_users")->get();
    $count=DB::table('tbl_users')->count();
    $lcount=DB::table('tbl_users')->where('status',1)->count();
    $data["table1"]=DB::table("all_comments")->get();
    $ccount=DB::table('all_comments')->count();
    $role=$r->session()->get('role');
    $admin='admin';
    $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);

    
    return view('admin.loguser',$data,['count'=>$count,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
}

}
public function llshow(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->where('status',1)->get();
        $data["table2"]=DB::table("tbl_users")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        $lcc=DB::table('total_login_time')->count();
        $inpfieldst=$this->inpfield;
        
        return view('admin.livelogin',$data,['count'=>$count,'inpfieldst'=>$inpfieldst,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount,'lcc'=>$lcc])->with($capsule);
    }

}
public function llshowref(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
        $data["table"]=DB::table("total_login_time")->orderby("user_id","desc")->latest("created_at")->where('status',1)->get();
        $data["table2"]=DB::table("tbl_users")->get();
        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $data["table1"]=DB::table("all_comments")->get();
        $ccount=DB::table('all_comments')->count();
        $lcc=DB::table('total_login_time')->count();
        $inpfieldst=$this->inpfield;
            // print_r($lcc);die();
        
        return view('admin.liveloginref',$data,['count'=>$count,'inpfieldst'=>$inpfieldst,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount,'lcc'=>$lcc])->with($capsule);
    }

}
public function showcomment(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
            // $data["table"]=DB::table("all_comments")->orderby("id","desc")->get();
        $data["table"] =DB::table('tbl_users')
        ->join('cmms', 'tbl_users.id', '=', 'cmms.u_id')
        ->select('cmms.id as cid','cmms.u_id','tbl_users.*','cmms.description','cmms.sparkm','cmms.created_at as ctime','cmms.updated_at')->where('cmms.sparkm','comment')
        ->orderby("id","desc")->get();
        $ccount=Cmm::where('sparkm','comment')->count();
        $rpage=DB::table('l_r_page')->get();
        $inpfieldst=$this->inpfield;

        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();


        return view('admin.comment',$data,['count'=>$count,'inpfieldst'=>$inpfieldst,'rpage'=>$rpage,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}

public function showcommentref(Request $r)
{
    if($r->session()->get('admin_id')=="")
    {
        return redirect('admin');
    }else
    {
        $id=$r->session()->get('admin_id');
        $logo=DB::table('tbl_logo')->first();
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
        $role=$r->session()->get('role');
        $admin='admin';
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'id'=>$id);
            // $data["table"]=DB::table("all_comments")->orderby("id","desc")->get();
        $data["table"] =DB::table('tbl_users')
        ->join('cmms', 'tbl_users.id', '=', 'cmms.u_id')
        ->select('cmms.id as cid','cmms.u_id','tbl_users.*','cmms.description','cmms.sparkm','cmms.created_at as ctime','cmms.updated_at')->where('cmms.sparkm','comment')
        ->orderby("id","desc")->get();
        $ccount=Cmm::where('sparkm','comment')->count();
        $rpage=DB::table('l_r_page')->get();

        $count=DB::table('tbl_users')->count();
        $lcount=DB::table('tbl_users')->where('status',1)->count();
        $inpfieldst=$this->inpfield;


        return view('admin.commentref',$data,['count'=>$count,'inpfieldst'=>$inpfieldst,'rpage'=>$rpage,'admin'=>$admin,'logo'=>$logo,'lcount'=>$lcount,'ccount'=>$ccount])->with($capsule);
    }

}



public function login(Request $r)
{
    if($r->session()->get('admin_id'))
    {
        return redirect('home');
    }else
    {
        $data['table']=DB::table('tbl_logo')->get();
        return view('admin.login',$data);

    }
}
public function clogin(Request $r)
{
    if($r->session()->get('admin_id'))
    {
        return redirect('home');
    }else
    {
        $data['table']=DB::table('tbl_logo')->get();
        return view('admin.clogin',$data);

    }
}
public function check_admin(Request $r)
{
    $email=$r->email;
    $mobile_no=$r->mobile_no;

    $session= App\AdminReg::where('email',$email)->where('mobile_no',$mobile_no)->get();
    
    if(count($session)>0){
        $r->session()->put('admin_id',$session[0]->admin_id);
        $r->session()->put('name',$session[0]->name);
        $r->session()->put('image',$session[0]->image);
        $r->session()->put('role',$session[0]->role);

        return redirect('home')->with('slogin','Successfully Login');
    }
    else{
        return redirect('/admin')->with('msg','Email or Password are not matched')->withinput();
    }
}

public function check_user1(Request $r)
{
    $email=$r->email;
    $mobile_no=$r->mobile_no;

    $session= App\Adduser::where('email',$email)->where('mobile_no',$mobile_no)->get();
    
    if(count($session)>0){
        $r->session()->put('admin_id',$session[0]->id);

        $r->session()->put('name',$session[0]->name);

        $name=$r->session()->get('admin_id');


        $reg = new App\All_login_users;

        $reg->u_id=$name;
            // $reg->u_id=$name;
            // $dt1=now();
            // $created=$reg->save();

            // $data['table']=DB::table('tbl_users')->find($name);

                // $created=$reg->save();
                // $data['table']=DB::table('all_login_users')->where('u_id','=',$name)->update(['status'=>1]);
                // return redirect('dashboard')->with('slogin','Successfully Login');
        
                // $created=$reg->save();
        $data['table']=DB::table('tbl_users')->where('admin_id','=',$name)
        ->update(['status'=>1]);

        $data['table']=DB::table('tbl_users')->where('admin_id','=',$name)
        ->update(['login_time'=>now()]);
    }elseif ($session) {
        return redirect('dashboard')->with('slogin','Successfully Login');

    }
    
    else{
        return redirect('/admin')->with('msg','employee_id or Password are not matched');
    }
}







public function logout(Request $r){

        // $id=$r->session()->get('id');


        // $id=$r->session()->get('id');
        // print_r($id);
        // echo "<pre>";
        // $data['table']=DB::table('adminreg')->where('id',$id)->update(['status'=>0]);
        // $data['table']=DB::table('adminreg')->where('id',$id)->update(['logout_time'=>now()]);
        // print_r($data);
    $r->session()->forget('admin_id');
    $r->session()->forget('name');
    $cc=$r->session()->get('role');
        // print_r($cc);
    $admin='admin';
        // print_r($admin);

    if($cc==$admin)
    {
        return redirect('admin')->with('logout','Successfully Logout');
    }else{ 
        return redirect('client')->with('logout','Successfully Logout');
    }
}
public function destroy($id)
{
    $delete = Cmm::find($id)->delete();
    return redirect()->back()->with('cdelete','Delete Successfully.');
}
public function downloadldata(Request $request)
{
    $table = App\Adduser::where('status',1)->get();
    $filename = "Login data.csv";
    $inpfieldst=$this->inpfield;
   $tablehead=tablehead();
    $handle = fopen($filename, 'w+');
    fputcsv($handle, $tablehead);
    foreach($table as $row) {
       $arraydata= array($row['id']);
       if($inpfieldst->name){$namedata=$row['name'];array_push($arraydata,$namedata);};
       if($inpfieldst->firm_name){$firm_namedata=$row['firm_name'];array_push($arraydata,$firm_namedata);};
       if($inpfieldst->email){$emaildata=$row['email'];array_push($arraydata,$emaildata);};
       if($inpfieldst->mobile_no){$mobile_nodata=$row['mobile_no'];array_push($arraydata,$mobile_nodata);};
       if($inpfieldst->branch){$branchdata=$row['branch'];array_push($arraydata,$branchdata);};
       if($inpfieldst->employee_code){$employee_codedata=$row['employee_id'];array_push($arraydata,$employee_codedata);};
       if($inpfieldst->employee_code){$employee_codedata=$row['multioption'];array_push($arraydata,$employee_codedata);};
        if($inpfieldst->type){$typedata=$row['type'];array_push($arraydata,$typedata);};
       if($inpfieldst->city){$citydata=$row['city'];array_push($arraydata,$citydata);};
       if($inpfieldst->country){$countrydata=$row['country'];array_push($arraydata,$countrydata);};
       array_push($arraydata,$row['status']);
       array_push($arraydata,strftime("%d %b %Y",strtotime( $row['$created_at'])));
       array_push($arraydata,date('H:i', strtotime( $row['$created_at'])));
       fputcsv($handle, $arraydata);
   }

   fclose($handle);

   $headers = array(
    'Content-Type' => 'text/csv',
);

   return Response::download($filename, 'Login data.csv', $headers);
}

public function attendeddata(Request $request)
{
     $table = App\Adduser::where('eurl',1)->get();
    $filename = "attending-users.csv";
    $inpfieldst=$this->inpfield;
   $tablehead=tablehead();
    $handle = fopen($filename, 'w+');
    fputcsv($handle, $tablehead);
    foreach($table as $row) {
       $arraydata= array($row['id']);
       if($inpfieldst->name){$namedata=$row['name'];array_push($arraydata,$namedata);};
       if($inpfieldst->firm_name){$firm_namedata=$row['firm_name'];array_push($arraydata,$firm_namedata);};
       if($inpfieldst->email){$emaildata=$row['email'];array_push($arraydata,$emaildata);};
       if($inpfieldst->mobile_no){$mobile_nodata=$row['mobile_no'];array_push($arraydata,$mobile_nodata);};
       if($inpfieldst->branch){$branchdata=$row['branch'];array_push($arraydata,$branchdata);};
       if($inpfieldst->employee_code){$employee_codedata=$row['employee_id'];array_push($arraydata,$employee_codedata);};
       if($inpfieldst->employee_code){$employee_codedata=$row['multioption'];array_push($arraydata,$employee_codedata);};

        if($inpfieldst->type){$typedata=$row['type'];array_push($arraydata,$typedata);};
       if($inpfieldst->city){$citydata=$row['city'];array_push($arraydata,$citydata);};
       if($inpfieldst->country){$countrydata=$row['country'];array_push($arraydata,$countrydata);};
       array_push($arraydata,$row['status']);
       array_push($arraydata,strftime("%d %b %Y",strtotime( $row['$created_at'])));
       array_push($arraydata,date('H:i', strtotime( $row['$created_at'])));
       fputcsv($handle, $arraydata);
   }

   fclose($handle);

   $headers = array(
    'Content-Type' => 'text/csv',
);

   return Response::download($filename, 'Login data.csv', $headers);
}
public function notattendeddata(Request $request)
{
     $table = Adduser::where('eurl',0)->get();
    $filename = "not-attending-users.csv";
    $inpfieldst=$this->inpfield;
   $tablehead=tablehead();
    $handle = fopen($filename, 'w+');
    fputcsv($handle, $tablehead);
    foreach($table as $row) {
       $arraydata= array($row['id']);
       if($inpfieldst->name){$namedata=$row['name'];array_push($arraydata,$namedata);};
       if($inpfieldst->firm_name){$firm_namedata=$row['firm_name'];array_push($arraydata,$firm_namedata);};
       if($inpfieldst->email){$emaildata=$row['email'];array_push($arraydata,$emaildata);};
       if($inpfieldst->mobile_no){$mobile_nodata=$row['mobile_no'];array_push($arraydata,$mobile_nodata);};
       if($inpfieldst->branch){$branchdata=$row['branch'];array_push($arraydata,$branchdata);};
       if($inpfieldst->employee_code){$employee_codedata=$row['employee_id'];array_push($arraydata,$employee_codedata);};
       if($inpfieldst->employee_code){$employee_codedata=$row['multioption'];array_push($arraydata,$employee_codedata);};
        if($inpfieldst->type){$typedata=$row['type'];array_push($arraydata,$typedata);};
       if($inpfieldst->city){$citydata=$row['city'];array_push($arraydata,$citydata);};
       if($inpfieldst->country){$countrydata=$row['country'];array_push($arraydata,$countrydata);};
       array_push($arraydata,$row['status']);
       array_push($arraydata,strftime("%d %b %Y",strtotime( $row['$created_at'])));
       array_push($arraydata,date('H:i', strtotime( $row['$created_at'])));
       fputcsv($handle, $arraydata);
   }
   fclose($handle);
   $headers = array(
    'Content-Type' => 'text/csv',
);
   return Response::download($filename, 'Login data.csv', $headers);
}
public function commentdata(Request $request)
{
    $table =DB::table('tbl_users')
     ->rightjoin('cmms', 'tbl_users.id', '=', 'cmms.u_id')
     ->select('cmms.id as comid','cmms.u_id','tbl_users.*','cmms.description','cmms.created_at as commct')
     ->orderby("cmms.id","desc")->latest("commct")->get();
    $inpfieldst=$this->inpfield;
     $filename = "allcomment.csv";
     $array=array('Sr No.');
    if($inpfieldst->name){$name='Name';array_push($array,$name);};
    if($inpfieldst->firm_name){$firm_name='Firm Name';array_push($array,$firm_name);};
    if($inpfieldst->email){$email='Email';array_push($array,$email);};
    if($inpfieldst->mobile_no){$mobile_no='Mobile No.';array_push($array,$mobile_no);};
    if($inpfieldst->branch){$branch='Branch';array_push($array,$branch);};
    if($inpfieldst->multioption){$multioption='Chanel';array_push($array,$multioption);};
    if($inpfieldst->employee_code){$employee_code='Employee Code';array_push($array,$employee_code);};
    if($inpfieldst->type){$type='Type';array_push($array,$type);};
    if($inpfieldst->city){$city='City';array_push($array,$city);};
    if($inpfieldst->country){$country='Country';array_push($array,$country);};
    array_push($array,'Question');
    array_push($array,'Create Date');
    array_push($array,'Time');
     $handle = fopen($filename,'w+');
     fputcsv($handle, $array);
     foreach ($table as $row) {
        $arraydata= array($row->id);
       if($inpfieldst->name){$namedata=$row->name;array_push($arraydata,$namedata);};
       if($inpfieldst->firm_name){$firm_namedata=$row->firm_name;array_push($arraydata,$firm_namedata);};
       if($inpfieldst->email){$emaildata=$row->email;array_push($arraydata,$emaildata);};
       if($inpfieldst->mobile_no){$mobile_nodata=$row->mobile_no;array_push($arraydata,$mobile_nodata);};
       if($inpfieldst->branch){$branchdata=$row->branch;array_push($arraydata,$branchdata);};
       if($inpfieldst->employee_code){$employee_codedata=$row->employee_id;array_push($arraydata,$employee_codedata);};
        if($inpfieldst->multioption){$typedata=$row->multioption;array_push($arraydata,$typedata);};
        if($inpfieldst->type){$typedata=$row->type;array_push($arraydata,$typedata);};
       if($inpfieldst->city){$citydata=$row->city;array_push($arraydata,$citydata);};
       if($inpfieldst->country){$countrydata=$row->country;array_push($arraydata,$countrydata);};
       array_push($arraydata,$row->description);
       array_push($arraydata,strftime("%d %b %Y",strtotime( $row->commct)));
       array_push($arraydata,date('H:i', strtotime( $row->commct)));
       fputcsv($handle, $arraydata);
    }
    fclose($handle);

    $headers = array(
        'Content-Type' =>'text/csv',
    );
    return Response::download($filename, 'allcomment.csv', $headers);
}
public function registerdata(Request $request)
{
    $data =DB::table('tbl_users')
    ->leftjoin('total_login_time', 'tbl_users.id', '=', 'total_login_time.user_id')
    ->select('total_login_time.user_id','total_login_time.total_time','total_login_time.cltime','tbl_users.created_at','tbl_users.*')
    ->orderby("tbl_users.id","desc")->latest("created_at")->get();
    $inpfieldst=$this->inpfield;
     $array=array('Sr No.');
    if($inpfieldst->name){$name='Name';array_push($array,$name);};
    if($inpfieldst->firm_name){$firm_name='Firm Name';array_push($array,$firm_name);};
    if($inpfieldst->email){$email='Email';array_push($array,$email);};
    if($inpfieldst->mobile_no){$mobile_no='Mobile No.';array_push($array,$mobile_no);};
    if($inpfieldst->branch){$branch='Branch';array_push($array,$branch);};
    if($inpfieldst->multioption){$multioption='Chanel';array_push($array,$multioption);};
    if($inpfieldst->employee_code){$employee_code='Employee Code';array_push($array,$employee_code);};
    if($inpfieldst->type){$type='Type';array_push($array,$type);};
    if($inpfieldst->city){$city='City';array_push($array,$city);};
    if($inpfieldst->country){$country='Country';array_push($array,$country);};
    array_push($array,'Stay Time');
    array_push($array,'Total Times Login');
    array_push($array,'Create Date');
    array_push($array,'Time');
    $filename = "Register data.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, $array);

    foreach($data as $row) {
       $arraydata= array($row->id);
       if($inpfieldst->name){$namedata=$row->name;array_push($arraydata,$namedata);};
       if($inpfieldst->firm_name){$firm_namedata=$row->firm_name;array_push($arraydata,$firm_namedata);};
       if($inpfieldst->email){$emaildata=$row->email;array_push($arraydata,$emaildata);};
       if($inpfieldst->mobile_no){$mobile_nodata=$row->mobile_no;array_push($arraydata,$mobile_nodata);};
       if($inpfieldst->branch){$branchdata=$row->branch;array_push($arraydata,$branchdata);};
       if($inpfieldst->employee_code){$employee_codedata=$row->employee_id;array_push($arraydata,$employee_codedata);};
        if($inpfieldst->multioption){$typedata=$row->multioption;array_push($arraydata,$typedata);};
        if($inpfieldst->type){$typedata=$row->type;array_push($arraydata,$typedata);};
       if($inpfieldst->city){$citydata=$row->city;array_push($arraydata,$citydata);};
       if($inpfieldst->country){$countrydata=$row->country;array_push($arraydata,$countrydata);};
       array_push($arraydata,$row->total_time);
       array_push($arraydata,$row->cltime);
       array_push($arraydata,strftime("%d %b %Y",strtotime( $row->created_at)));
       array_push($arraydata,date('H:i', strtotime( $row->created_at)));
        fputcsv($handle, $arraydata);
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    return Response::download($filename, 'Register data.csv', $headers);
}

}
