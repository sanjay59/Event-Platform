@extends('layout.master')
@section('content')
<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between pt-3">
            <div class="pb-2 pb-sm-3"><h4 class="page-title">Comments</h4></div><div class="pb-3">
             <a href="{{url('saveallcomment')}}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="mdi mdi-download font-15 mr-1"></i> Export CSV</a>
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
                  <th >Question</th>
                  <th >Created Date</th>
                  <th >Delete</th>
                </tr>
              </thead>
              <tbody id="registeruserref">
						@include('admin.commentref')
						</tbody>
            </table>
          </div>



        </div> <!-- end container-fluid -->
      </div> <!-- end content -->
    </div>
    @stop
