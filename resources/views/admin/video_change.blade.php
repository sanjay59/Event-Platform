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
                    <h4 class="page-title">Stage Page</h4>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ $message }}</div>
                @endif
            </div>
            
        </div>
        <div class="card-box">
           <form method="post" action="{{ route('video.update', $contact->id) }}" role="form" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">

                <div class="col-12 form-group">
                    <label for="exampleInputName1">Event Name</label>
                    <input type="text"  name="url" id="exampleInputEmail1"
                    value="{{$contact->url}}" class="form-control">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>

            </div>
        </form>

    </div>


</div> <!-- end container-fluid -->
</div> <!-- end container-fluid -->
</div> <!-- end container-fluid -->

@stop
