@extends('layout.master')
@section('content')
<style type="text/css">
   .upload-file {
   padding: 15px;
   border:1px dashed #C9C9C9;
   height: 150px;
   border-radius: 6px;
   text-align: center;
   }
   .upload-file img {
   width: 45px;
   }
   .upload-file h4 {
   font-family: inherit;
   font-size: 13px;
   }
   .preview-thumb, .preview-thumb.sm {
   overflow: hidden;
   }
   .preview-thumb {
   height: 70px;
   width: 100px;
   border-radius: 8px;
   }
   .preview-thumb.sm {
   height: 40px;
   width: 60px;
   border-radius: 4px;
   }
   #file_name {
   font-size: 11px;
   color: #000;
   font-weight: 500;
   }
   .preview-thumb img, .preview-thumb video {
   object-fit: cover;
   }
   .upload-file input[type=file] {
   line-height: 35px;
   position: absolute;
   top: 0;
   left: 0;
   height: 100%!important;
   width: 100%;
   cursor: pointer;
   z-index: 1;
   opacity: 0;
   }
   @media(max-width:575px) {
   .upload-file {
   height: 100px;
   padding: 10px;
   }
   .upload-file img {
   width: 32px;
   }
   .upload-file h4 {
   margin-top: 10px;
   font-size: 11px;
   }
   }
</style>
<div class="content-page">
   <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box py-3">
                  <h4 class="page-title">Settings</h4>
               </div>
                 @if ($message = Session::get('changesuccess'))
                    <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ $message }}</div>
                    @endif
            </div>

         </div>
         <div class="card-box">
            <form method="post" action="{{ url('ulogo', $contact->id) }}" enctype="multipart/form-data">
               @method('PATCH')
               @csrf
               <div class="row">
                  <div class="col-12 form-group">
                     <label for="exampleInputName1">Event Name</label>
                     <input type="text" name="title" value="{{$contact->title}}" class="form-control">
                  </div>
                  <div class="col-6 form-group">
                     <label for="exampleInputName1">Event Start Time</label>
                     <input type="datetime-local" name="event_start_time" value="{{$contact->event_start_time}}" class="form-control">
                  </div>
                  <div class="col-6 form-group">
                     <label for="exampleInputName1">Event End Time</label>
                     <input type="datetime-local" name="event_end_time" value="{{$contact->event_end_time}}" class="form-control">
                  </div>
                 
                  <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label>Logo Image</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="logo" >
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->logo}}" id="img_preview" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name">Empty File</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Favicon</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="ficon" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->logo}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                   <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Main Background</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="mainbg" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->mainbg}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                   <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Left Side Image</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="bg1" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->bg1}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                   <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Right Side Image</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="bg2" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->bg2}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                   <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Image of Input Field</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="inputbg" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->inputbg}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                   <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Button Background Image</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="btnbg" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->btnbg}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-12 form-group">
                     <label class="mb-3" for="exampleInputName1">Home Page</label>
                     <div class="d-md-flex">
                        <div class="custom-control custom-radio">
                           <input type="radio" id="registerpage" name="page_st" value="0"  {{ ($contact->page_st=="0")? "checked" : "" }} class="custom-control-input">
                           <label class="custom-control-label" for="registerpage">Register Page</label>
                        </div>
                        <div class="ml-4 custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" name="mail_st" id="sendMail" value="{{$contact->mail_st}}"  {{ ($contact->mail_st=="1") ? "checked" : "" }} >
                           <label class="custom-control-label" for="sendMail">Send Mail</label>
                        </div>
                        <div class="ml-4 custom-control custom-radio">
                           <input type="radio" id="loginpage" name="page_st" value="1" {{ ($contact->page_st=="1")? "checked" : "" }} class="custom-control-input">
                           <label class="custom-control-label" for="loginpage">Login Page</label>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 mt-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="lobby_st" value="{{$contact->lobby_st}}"  {{ ($contact->lobby_st=="1")? "checked" : "" }}>
                        <label class="custom-control-label" for="customCheck1">Push User</label>
                     </div>
                  </div>
                  <div class="col-12 mt-2">
                     <div class="custom-control custom-checkbox" >
                        <input type="checkbox" class="custom-control-input" name="hpage_st" id="customCheck2" value="{{$contact->hpage_st}}"  {{ ($contact->hpage_st=="1") ? "checked" : "" }} >
                        <label class="custom-control-label" for="customCheck2">Holding Page</label>
                     </div>
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- end container-fluid -->
   </div>
   <!-- end container-fluid -->
</div>
<!-- end container-fluid -->
<script type="text/javascript">
   $('#customCheck1').on('change', function(){
   this.value = this.checked ? 1 : 0;
   });
   $('#customCheck2').on('change', function(){
   this.value = this.checked ? 1 : 0;
   });
   $('#sendMail').on('change', function(){
   this.value = this.checked ? 1 : 0;
   });
</script>
<script type="text/javascript">
   $('#file_upload').change(function(){
       const file = this.files[0];
       if(file){
           let reader = new FileReader();
           var ext = $(this).val().split('.').pop();
           file_name = $(this).val().replace(/C:\\fakepath\\/i, '');
           reader.onload = function(event){
               $('#file_name').text(file_name);
   
               $('#img_preview').show();
               $('#img_preview').attr('src', event.target.result);
   
   
           }
           reader.readAsDataURL(file);
       }   
   });
   $('#file_upload2').change(function(){
       const file = this.files[0];
       if(file){
           let reader = new FileReader();
           var ext = $(this).val().split('.').pop();
           file_name = $(this).val().replace(/C:\\fakepath\\/i, '');
           reader.onload = function(event){
               $('#file_name2').text(file_name);
   
               $('#img_preview2').show();
               $('#img_preview2').attr('src', event.target.result);
   
   
           }
           reader.readAsDataURL(file);
       }   
   });
   
   
   
   
</script>
@stop