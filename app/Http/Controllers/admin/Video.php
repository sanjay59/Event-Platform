<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\imgmodel\ChangeVideo;
use DB;

class Video extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ChangeVideo::all();
        $logo=DB::table('tbl_logo')->first();
        return view("admin.vshow", compact('data','logo'));

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data["table"]=DB::table("change_videos")->get();
        $logo=DB::table('tbl_logo')->first();
        // print_r($data);
        return view("admin.vshow", $data,compact('logo'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r,$id)
    {
        if($r->session()->get('admin_id')=="")
        {
            return redirect('admin');
        }else
        {
        $image=$r->session()->get('image');
        $name=$r->session()->get('name');
         $role=$r->session()->get('role');
        $admin='admin';
        
        $capsule=array('image'=>$image,'name'=>$name,'role'=>$role);
        $contact = ChangeVideo::find($id);
        $logo=DB::table('tbl_logo')->first();
        return view('admin.video_change', compact('contact','admin','logo'))->with($capsule);
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $r, $id)
    {   
        
       $contact = ChangeVideo::find($id);
        if($r->hasFile('logo')){

        $file2=$r->file('logo');
        $ext2=$file2->extension();
        $logo=time()."1.".$ext2;

        $file2->move(public_path('/all_images/logo'),$logo);

        
        $contact->logo=$logo;
    }
    if($r->hasFile('hpage')){

        $file2=$r->file('hpage');
        $ext2=$file2->extension();
        $hpage=time()."2.".$ext2;

        $file2->move(public_path('/all_images/logo'),$hpage);

        
        $contact->hpage=$hpage;
    }
    if($r->hasFile('successp')){

        $file2=$r->file('successp');
        $ext2=$file2->extension();
        $successp=time()."3.".$ext2;

        $file2->move(public_path('/all_images/logo'),$successp);

        
        $contact->successp=$successp;
    }
    $contact->url=$r->get('url');
   
        $created=$contact->save();



        return redirect()->route('video.edit',$id)->with('success', 'Video URL Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
