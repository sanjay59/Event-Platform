@extends('layout.master')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            
         <div class="row mt-4">
            <div class="col-md-6 col-xl-3">
                <a href="#" class="card-box tilebox-one d-block mb-4 rounded">
                    <h6 class="text-uppercase my-0">Live Page</h6>
                    <div class="mt-3 d-flex align-items-center justify-content-between">
                        <div class="mr-3"><h3 class="my-0">{{$livepage}}</h3></div>
                        <div><i class="mdi mdi-folder-edit-outline h2"></i></div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="#" class="card-box tilebox-one d-block mb-4 rounded">
                    <h6 class="text-uppercase my-0">Stage Page</h6>
                    <div class="mt-3 d-flex align-items-center justify-content-between">
                        <div class="mr-3"><h3 class="my-0">{{$stagepage}}</h3></div>
                        <div><i class="mdi mdi-account-multiple-plus-outline h2"></i></div>
                    </div>
                </a>
            </div>
            
            
        </div>
        
        
        
    </div>
    @endsection