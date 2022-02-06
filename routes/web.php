<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::post("/save-rating", "Addusers@storereating");
Route::post("/saveuser", "Addusers@saveusers");
Route::post("/checkuser", "Addusers@savecheckusers");
Route::get("/attend-user", "Addusers@attend_user");

$mhpage = DB::table('tbl_logo')->first();
if($mhpage->page_st){
    Route::get("/","front\Dashboard@loginform");
    Route::get('login', function () {
            return redirect('/');
        });
    Route::get('/register', "Addusers@register");

}else{
    Route::get('register', function () {
            return redirect('/');
        });
    Route::get("login","front\Dashboard@loginform");
    Route::get('/', "Addusers@register");
}

// Users Middleware
Route::get("/stage-demo","front\commentcontroller@livepage");
Route::get("/live-demo","front\Dashboard@livedemo");
Route::get("/change-holding-page","front\commentcontroller@hpage2");
Route::get("/update-holding-page","pulspoint\LogoController@updatehp");
Route::get("/holding-page","front\commentcontroller@hpage");
Route::group(['middleware'=>['user_auth']],function(){

    Route::get("/stage","front\commentcontroller@comment");
    Route::get("/live","front\Dashboard@index");
    
    Route::get("/changepg","front\Dashboard@changepage");
    Route::get("/ulogout","front\Dashboard@logout");



    Route::post("/posts2","front\commentcontroller@store2");

});

//Admin

Route::get("/admin","admin\Alluser@login");
Route::get("/client","admin\Alluser@clogin");
Route::post("/check","admin\Alluser@check_admin");

//Admin Middleware

Route::group(['middleware'=>['admin_auth']],function(){
 Route::get("/comment-delete/{id}","admin\Alluser@destroy");
 Route::get("/home","admin\Alluser@index");
 Route::get("/home1","admin\Alluser@index1");
 Route::get("/comments","admin\Alluser@showcomment");
 Route::get("/show-like","admin\Alluser@showlike");
 Route::get("/footfall","admin\Alluser@footfall");

 Route::get("/commentsref","admin\Alluser@showcommentref");
 Route::get("/rating","admin\Alluser@showratingpage");
 Route::get("/reguser","admin\Alluser@show");
 Route::get("/loginuser","admin\Alluser@showloginuser");
 Route::get("/attending-users","admin\Alluser@showallloginuser");
 Route::get("/not-attending-users","admin\Alluser@shownotattendeduser");
 Route::get("/livelogin","admin\Alluser@llshow");
 Route::get("/llref","admin\Alluser@llshowref");

 Route::get("/logout","admin\Alluser@logout");

    //Uploads Image
 Route::resource('/video', 'admin\Video');

 //Manage Input Field
 Route::get("all-fields","admin\ManageInputFieldC@getinputfield");
 Route::patch("change-fields/{id}","admin\ManageInputFieldC@update");

    //Change Logo
 Route::resource("/logo","pulspoint\LogoController");
 Route::patch("/ulogo/{id}","pulspoint\LogoController@update");
 Route::patch("/page-setup-update/{id}","pulspoint\LogoController@page_setup_update");
 Route::get("/page-setup/{id}","pulspoint\LogoController@pagesetupedit");
 Route::get("/page-setup-show","pulspoint\LogoController@pagesetupshow");

    // Route::get("/logo","pulspoint\LogoController@index");
 //download
 Route::get("/star-rating-data","admin\Alluser@ratingdata");
 Route::get("/login-data","admin\Alluser@downloadldata");
 Route::get("/attending-users-data","admin\Alluser@attendeddata");
 Route::get("/not-attending-users-data","admin\Alluser@notattendeddata");
 Route::get("/saveallcomment","admin\Alluser@commentdata");
 Route::get("/register-data","admin\Alluser@registerdata");

});

