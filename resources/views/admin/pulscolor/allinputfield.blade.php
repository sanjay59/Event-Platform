@extends('layout.master')
@section('content')
<br>
<div class="content-page">
   <div class="content">
      <!-- Start Content-->
      <style type="text/css">
      .card-title {
       font-size: 0.9rem !important;
       line-height: 1.2;
       font-weight: 500;
    }
    h2 {
       font-size: 1rem !important;
    }
    .card-body {
       -ms-flex: 1 1 auto;
       flex: 1 1 auto;
       margin: 0;
       padding: 1rem 1rem !important;
       position: relative;
       height: 100%;
    }

    .tab button {
     background-color: inherit;
     float: left;
     border: none;
     outline: none;
     cursor: pointer;
     padding: 14px 16px;
     transition: 0.3s;
     font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
     background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
     background-color: red;
  }

  /* Style the tab content */
  .tabcontent {
     display: none;
  }
  .activecart{
   /*background-color: #e9ebf8;*/
}
</style>

<div class="container-fluid">
   <!-- start page title -->
   <div class="row tab">

      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 tablinks active" onclick="openLogin(event, 'Register')">
         <div class="card overflow-hidden activecart" id="cartuf">
           <div class="card-header">
             <h3 class="card-title font-weight-normal">Register Page </h3>
             <div class="card-options"> <a class="btn btn-sm btn-success" href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true" style="font-size:15px"></i>
             </a> </div>
          </div>
          
      </div>
   </div>
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 tablinks" onclick="openLogin(event, 'Login')">
    <div class="card overflow-hidden" id="cartaf">
      <div class="card-header">
        <h3 class="card-title font-weight-normal">Login Page</h3>
        <div class="card-options"> <a class="btn btn-sm btn-success" href="javascript:void(0)"><i class="fa fa-users" aria-hidden="true" style="font-size:15px"></i></a> </div>
     </div>
 </div>
</div>



</div>
<div class="row">
   <div class="col-12">
      
      @if ($message = Session::get('changesuccess'))
      <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ $message }}</div>
      @endif
   </div>

</div>
<div id="Register" style="display:block;" class="card-box tabcontent">
   <div class="page-title-box py-3">
         <h4 class="page-title">Input Field Manage Register Page</h4>
      </div>
   <form method="post" action="{{url('change-fields',$getfieldreg->id)}}" enctype="multipart/form-data">
      @method('PATCH')
      @csrf
      <div class="row">                       
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->name}}"  {{ ($getfieldreg->name=="1") ? "checked" : "" }} name="name" id="name" >
               <label class="custom-control-label" for="name">Name</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                      
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->email}}"  {{ ($getfieldreg->email=="1") ? "checked" : "" }} name="email" id="email" >
               <label class="custom-control-label" for="email">Email</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->mobile_no}}"  {{ ($getfieldreg->mobile_no=="1") ? "checked" : "" }} name="mobile_no" id="mobile_no" >
               <label class="custom-control-label" for="mobile_no">Mobile No.</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->employee_code}}"  {{ ($getfieldreg->employee_code=="1") ? "checked" : "" }} name="employee_code" id="employee_code" >
               <label class="custom-control-label" for="employee_code">Employee Code</label>
            </div>
         </div>
      </div>
      <div class="row">                       
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->branch}}"  {{ ($getfieldreg->branch=="1") ? "checked" : "" }} name="branch" id="branch" >
               <label class="custom-control-label" for="branch">Branch</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->firm_name}}"  {{ ($getfieldreg->firm_name=="1") ? "checked" : "" }} name="firm_name" id="firm_name" >
               <label class="custom-control-label" for="firm_name">Firm Name</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->city}}"  {{ ($getfieldreg->city=="1") ? "checked" : "" }} name="city" id="city" >
               <label class="custom-control-label" for="city">City</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->country}}"  {{ ($getfieldreg->country=="1") ? "checked" : "" }} name="country" id="country" >
               <label class="custom-control-label" for="country">Country</label>
            </div>
         </div>
      </div>
      <div class="row">                       
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->type}}"  {{ ($getfieldreg->type=="1") ? "checked" : "" }} name="type" id="type" >
               <label class="custom-control-label" for="type">Type</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->multioption}}"  {{ ($getfieldreg->multioption=="1") ? "checked" : "" }} name="multioption" id="multioption" >
               <label class="custom-control-label" for="multioption">Multiple Option</label>
            </div>
         </div>
          <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldreg->agree}}"  {{ ($getfieldreg->agree=="1") ? "checked" : "" }} name="agree" id="agree" >
               <label class="custom-control-label" for="agree">Agree</label>
            </div>
         </div>


      </div>
      <div class="col-12">
         <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </div>
   </form>
</div>
<div class="card-box tabcontent" id="Login" >
   <div class="page-title-box py-3">
         <h4 class="page-title">Input Field Manage In Login Page</h4>
      </div>
   <form method="post" action="{{url('change-fields',$getfieldlogin->id)}}" enctype="multipart/form-data">
      @method('PATCH')
      @csrf
      <div class="row">                       
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->name}}"  {{ ($getfieldlogin->name=="1") ? "checked" : "" }} name="name" id="namel" >
               <label class="custom-control-label" for="namel">Name</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                      
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->email}}"  {{ ($getfieldlogin->email=="1") ? "checked" : "" }} name="email" id="emaill" >
               <label class="custom-control-label" for="emaill">Email</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->mobile_no}}"  {{ ($getfieldlogin->mobile_no=="1") ? "checked" : "" }} name="mobile_no" id="mobile_nol" >
               <label class="custom-control-label" for="mobile_nol">Mobile No.</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->employee_code}}"  {{ ($getfieldlogin->employee_code=="1") ? "checked" : "" }} name="employee_code" id="employee_codel" >
               <label class="custom-control-label" for="employee_codel">Employee Code</label>
            </div>
         </div>
      </div>
      <div class="row">                       
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->branch}}"  {{ ($getfieldlogin->branch=="1") ? "checked" : "" }} name="branch" id="branchl" >
               <label class="custom-control-label" for="branchl">Branch</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->firm_name}}"  {{ ($getfieldlogin->firm_name=="1") ? "checked" : "" }} name="firm_name" id="firm_namel" >
               <label class="custom-control-label" for="firm_namel">Firm Name</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->city}}"  {{ ($getfieldlogin->city=="1") ? "checked" : "" }} name="city" id="cityl" >
               <label class="custom-control-label" for="cityl">City</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->country}}"  {{ ($getfieldlogin->country=="1") ? "checked" : "" }} name="country" id="countryl" >
               <label class="custom-control-label" for="countryl">Country</label>
            </div>
         </div>
      </div>
      <div class="row">                       
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->type}}"  {{ ($getfieldlogin->type=="1") ? "checked" : "" }} name="type" id="typel" >
               <label class="custom-control-label" for="typel">Type</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->multioption}}"  {{ ($getfieldlogin->multioption=="1") ? "checked" : "" }} name="multioption" id="multioptionl" >
               <label class="custom-control-label" for="multioptionl">Multiple Option</label>
            </div>
         </div>
         <div class="col-3 mt-3 form-group">                       
            <div class="ml-4 custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" value="{{$getfieldlogin->agree}}"  {{ ($getfieldlogin->agree=="1") ? "checked" : "" }} name="agree" id="agreel" >
               <label class="custom-control-label" for="agreel">Agree</label>
            </div>
         </div>


      </div>
      <div class="col-12">
         <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </div>
   </form>
</div>
</div>
</div>
<!-- end container-fluid -->
</div>
<!-- end container-fluid -->
</div>
<!-- end container-fluid -->
<script type="text/javascript">
   $('#name').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#email').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#mobile_no').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#employee_code').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#branch').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#firm_name').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#city').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#type').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#country').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#agree').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#multioption').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
</script>
<script type="text/javascript">
   $('#namel').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#emaill').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#mobile_nol').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#employee_codel').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#branchl').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#firm_namel').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#cityl').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#typel').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#countryl').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#multioptionl').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
   $('#agreel').on('change', function(){
      this.value = this.checked ? 1 : 0;
   });
</script>
<script type="text/javascript">
   function openLogin(evt, Register) {

    $("#cartuf").addClass("activecart");
  // $(".cart").addClass("intro");activecart
}
function openLogin(evt, Login) {

 $("#cartaf").addClass("activecart");
  // $(".cart").addClass("intro");activecart
}
</script>
<script>
   function openLogin(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
     tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@stop