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
                  <h4 class="page-title">Event Page</h4>
               </div>
               @if ($message = Session::get('changesuccess'))
               <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ $message }}</div>
               @endif
            </div>

         </div>
         <div class="card-box">
            <form method="post" action="{{ url('page-setup-update', $contact->id) }}" enctype="multipart/form-data">
               @method('PATCH')
               @csrf
               <div class="row">

                  <div class="col-xl-6 col-sm-12 form-group">
                     <input type="text" name="name" value="{{$contact->name}}" class="form-control" readonly="">
                  </div>
                  <div class="col-xl-6 col-sm-12 form-group">
                     <input type="text" name="url" value="{{url('/')}}/{{$contact->url}}" class="form-control" readonly="">
                  </div>


                  @if($contact->name !='Stage')
                  <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label>Heading Image</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="heading_image" >
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->heading_image}}" id="img_preview" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name">Empty File</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 form-group ">
                     <div class="row">
                        <div class="col-sm-12">
                           <label >Content Image</label>
                        </div>
                        <div class="col-sm-6">
                           <input type="file" name="image" id="file_upload2">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                           <div class="preview-thumb mb-2 shadow">
                              <img src="{{url('frontassets/upload')}}/{{$contact->image}}" id="img_preview2" class="w-100 h-100">
                           </div>
                           <p class="mb-3" id="file_name2">Empty File</p>
                        </div>
                     </div>
                  </div>
                  @else
                  <div class="col-xl-12 col-sm-12 form-group">
                     <input type="text" name="video" value="{{$contact->video}}" class="form-control" >
                  </div>
                  @endif
                  <div class="col-12">
                     <button type="submit" class="btn btn-primary">Submit</button>
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
      $('#customCheck2').on('change', function(){
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