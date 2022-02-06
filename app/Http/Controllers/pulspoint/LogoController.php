<?php

namespace App\Http\Controllers\pulspoint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\imgmodel\PulsModel\Logo;
use App\imgmodel\PulsModel\PageSetup;
use DB;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $id=$r->session()->get('admin_id');
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $capsule=array('image'=>$image,'name'=>$name,'id'=>$id);
            $data['table']=DB::table('tbl_logo')->get();
            $logo=DB::table('tbl_logo')->first();
            return view('admin.pulscolor.show_logo',$data,compact('logo'))->with($capsule);
        }
    }

    public function edit(Request $r,$id)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $admin_id=$r->session()->get('admin_id');
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $role=$r->session()->get('role');
            $admin='admin';

            $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'admin_id'=>$admin_id);
            $contact = Logo::find($id);
            $logo=DB::table('tbl_logo')->first();

        // echo("<pre>");
        // print_r($contact);die;
            return view('admin.pulscolor.edit_logo',compact('contact','logo','admin'))->with($capsule);
        }
    }
    public function pagesetupedit(Request $r,$id)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $admin_id=$r->session()->get('admin_id');
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $role=$r->session()->get('role');
            $admin='admin';

            $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'admin_id'=>$admin_id);
            $contact = DB::table('page_setup')->find($id);
            $logo=DB::table('tbl_logo')->first();

        // echo("<pre>");
        // print_r($contact);die;
            return view('admin.pulscolor.page_setup',compact('contact','logo','admin'))->with($capsule);
        }
    }
     public function pagesetupshow(Request $r)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
            $admin_id=$r->session()->get('admin_id');
            $image=$r->session()->get('image');
            $name=$r->session()->get('name');
            $role=$r->session()->get('role');
            $admin='admin';

            $capsule=array('image'=>$image,'name'=>$name,'role'=>$role,'admin_id'=>$admin_id);
            $contact = DB::table('page_setup')->get();
            $logo=DB::table('tbl_logo')->first();

        // echo("<pre>");
        // print_r($contact);die;
            return view('admin.pulscolor.page_setup_show',compact('contact','logo','admin'))->with($capsule);
        }
    }


    public function update(Request $r, $id)
    {
        $contact = logo::find($id);
        if($r->hasFile('logo')){

            $file2=$r->file('logo');
            $ext2=$file2->extension();
            $logo=time()."1.".$ext2;
            $file2->move(public_path('frontassets/upload'),$logo);
            $contact->logo=$logo;
        }
        if($r->hasFile('ficon')){
            $file1=$r->file('ficon');
            $ext1=$file1->extension();
            $ficon=time()."2.".$ext1;
            $file1->move(public_path('frontassets/upload'),$ficon);
            $contact->ficon=$ficon;
        }
         if($r->hasFile('mainbg')){
            $file1=$r->file('mainbg');
            $ext1=$file1->extension();
            $mainbg=time()."3.".$ext1;
            $file1->move(public_path('frontassets/upload'),$mainbg);
            $contact->mainbg=$mainbg;
        }
         if($r->hasFile('bg1')){
            $file1=$r->file('bg1');
            $ext1=$file1->extension();
            $bg1=time()."4.".$ext1;
            $file1->move(public_path('frontassets/upload'),$bg1);
            $contact->bg1=$bg1;
        }
         if($r->hasFile('bg2')){
            $file1=$r->file('bg2');
            $ext1=$file1->extension();
            $bg2=time()."5.".$ext1;
            $file1->move(public_path('frontassets/upload'),$bg2);
            $contact->bg2=$bg2;
        }
         if($r->hasFile('inputbg')){
            $file1=$r->file('inputbg');
            $ext1=$file1->extension();
            $inputbg=time()."6.".$ext1;
            $file1->move(public_path('frontassets/upload'),$inputbg);
            $contact->inputbg=$inputbg;
        }
         if($r->hasFile('btnbg')){
            $file1=$r->file('btnbg');
            $ext1=$file1->extension();
            $btnbg=time()."7.".$ext1;
            $file1->move(public_path('frontassets/upload'),$btnbg);
            $contact->btnbg=$btnbg;
        }
        $contact->page_st = $r->get('page_st');
        $contact->mail_st = $r->get('mail_st');
        $contact->hpage_st = $r->get('hpage_st');
        $contact->lobby_st = $r->get('lobby_st');
        $contact->title = $r->get('title');
        $contact->event_start_time = $r->get('event_start_time');
        $contact->event_end_time = $r->get('event_end_time');

        $created=$contact->save();

        return redirect()->route('logo.edit',$id)->with('changesuccess', 'Changed Successfully');
    }
     public function page_setup_update(Request $r, $id)
    {
        $contact = PageSetup::find($id);

        if($r->hasFile('heading_image')){

            $file2=$r->file('heading_image');
            $ext2=$file2->extension();
            $heading_image=time()."1.".$ext2;
            $file2->move(public_path('frontassets/upload'),$heading_image);
            $contact->heading_image=$heading_image;
        }
        if($r->hasFile('image')){
            $file1=$r->file('image');
            $ext1=$file1->extension();
            $image=time()."2.".$ext1;
            $file1->move(public_path('frontassets/upload'),$image);
            $contact->image=$image;
        }
        $contact->video = $r->get('video');
        $created=$contact->save();

        return redirect()->back()->with('changesuccess', 'Changed Successfully');
    }
    public function updatehp(Request $r)
    {
        $data=DB::table('tbl_logo')->where('hpage_st',1)->update(['hpage_st'=>0]);
        return response()->json(['code'=>200,'data'=>$data]);
    }
    
}
