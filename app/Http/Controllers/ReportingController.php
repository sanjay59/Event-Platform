<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use App\ReportingModel;


class ReportingController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Calcutta");
    }
    public function reportoflobby(Request $r)
    {
        if($r->session()->get('id')=="")
        {
            return redirect('/');
        }else
        {
            $id=$r->session()->get('id');
            $email=$r->session()->get('email');
            $capsule=array('id'=>$id,'email'=>$email);
        // print_r($name);die();
            $post = ReportingModel::Create(
                ['user_id' => $id,'page_name' => 'lobby','start_time' =>now(),'out_time' =>now()]);
            return response()->json(['code'=>200, 'data' => $post], 200);
        }

    }
    public function reportoflobbyotime(Request $r)
    {
        $id=$r->session()->get('id');
        $email=$r->session()->get('email');
        $capsule=array('id'=>$id,'email'=>$email);
        $post = ReportingModel::Create(
            ['user_id' => $id,'page_name' => 'ballroom','start_time' =>now(),'out_time' =>now()]);
        $data['table']=DB::table('tbl_reporting')->where('user_id',$id)->where('page_name','lobby')->latest('created_at')->take(1)->update(['out_time'=>now()]);
        // print_r($name);die();
            // $post = ReportingModel::update(
                // 'out_time' =>now());
        return response()->json(['code'=>200], 200);
    }
    public function reportofouttime(Request $r)
    {
        $id=$r->session()->get('id');
        $email=$r->session()->get('email');
        $capsule=array('id'=>$id,'email'=>$email);
        $out_time=$r->get('out_time');
        $data['table']=DB::table('tbl_reporting')->where('user_id',$id)->where('page_name',$out_time)->latest('created_at')->take(1)->update(['out_time'=>now()]);
        // print_r($name);die();
            // $post = ReportingModel::update(
                // 'out_time' =>now());
        return response()->json(['code'=>200], 200);
    }
}
