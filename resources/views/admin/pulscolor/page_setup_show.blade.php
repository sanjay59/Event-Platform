@extends('layout.master')
@section('content')
<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between pt-3">
            <div class="pb-2 pb-sm-3"><h4 class="page-title">Event Page</h4>
            </div>
            
         </div></div>
           <div class="table-responsive rounded border">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th >Sr No</th>
                  <th >Page Name</th>
                  <th >Url </th>
                  <th >Status</th> 
                  <th >Page Setup</th>
                  <th >Created Date</th>
                </tr>
              </thead>
               <tbody>
                
                @foreach($contact as $c)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$c->name}}</td>
                  <td><a href="{{url('/')}}/{{$c->url}}" target="_blank">{{url('/')}}/{{$c->url}}</a></td>
                  
                  <td>
                   @if($c->status)
                   <i class="mdi mdi-checkbox-blank-circle text-success"></i>
                   @else
                   <i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                   @endif
                 </td>
                 <td><a href="{{url('page-setup',$c->id)}}"><i class="mdi mdi-pencil-outline text-muted"></i></a></td>


                 <td>{{  strftime("%d %b %Y",strtotime($c->created_at)) }} {{  date('H:i', strtotime($c->created_at)) }}

                  <!-- {{  date('d/m/Y', strtotime($c->created_at)) }} --></td>
                </tr>
                @endforeach()

              </tbody>
            </table>
          </div>



        </div> <!-- end container-fluid -->
      </div> <!-- end content -->
    </div>
    @stop
