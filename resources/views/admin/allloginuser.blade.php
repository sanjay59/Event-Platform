@extends('layout.master')
@section('content')
<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between pt-3">
            <div class="pb-2 pb-sm-3"><h4 class="page-title">Attended Users</h4></div><div class="pb-3">
             <a href="{{url('attending-users-data')}}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="mdi mdi-download font-15 mr-1"></i> Export CSV</a>
           </div></div></div>
           <div class="table-responsive rounded border">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th >Sr No</th>
                 @if($inpfieldst->name)<th>Name</th>@endif
                   @if($inpfieldst->email)<th>Email </th>@endif
                   @if($inpfieldst->mobile_no)<th>Mobile No. </th>@endif
                   @if($inpfieldst->firm_name)<th>Firm Name </th>@endif
                   @if($inpfieldst->employee_code)<th>Employee Code </th>@endif
                   @if($inpfieldst->branch)<th>Branch</th>@endif
                   @if($inpfieldst->multioption)<th>Channel</th>@endif
                   @if($inpfieldst->city)<th>City</th>@endif
                   @if($inpfieldst->country)<th>Country </th>@endif
                   @if($inpfieldst->type)<th>Type </th>@endif
                  <th >Online</th>
                  <th >Created Date</th>
                </tr>
              </thead>
               <tbody>
                <?php
                $i=$attucount?>
                @foreach($table2 as $c)
                <tr>
                  <th scope="row">{{$i--}}</th>
                  @if($inpfieldst->name)<td>{{$c->name}}</td>@endif
                  @if($inpfieldst->email)<td>{{$c->email}}</td>@endif
                  @if($inpfieldst->mobile_no)<td>{{$c->mobile_no}}</td>@endif
                  @if($inpfieldst->firm_name)<td>{{$c->firm_name}}</td>@endif
                  @if($inpfieldst->employee_code)<td>{{$c->employee_id}}</td>@endif
                  @if($inpfieldst->branch)<td>{{$c->branch}}</td>@endif
                  @if($inpfieldst->multioption)<td>{{$c->multioption}}</td>@endif
                  @if($inpfieldst->city)<td>{{$c->city}}</td>@endif
                  @if($inpfieldst->country)<td>{{$c->country}}</td>@endif
                  @if($inpfieldst->type)<td>{{$c->type}}</td>@endif
                  <td>
                   @if($c->status)
                   <i class="mdi mdi-checkbox-blank-circle text-success"></i>
                   @else
                   <i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                   @endif
                 </td>


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
