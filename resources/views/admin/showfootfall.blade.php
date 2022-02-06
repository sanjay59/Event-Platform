@extends('layout.master')
@section('content')
<script>
  setInterval(function(){
   // $('#currentstatus').load('update-like').fadeIn('fast');
}, 10000)
</script>
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

<br>
<div class="content-page">
  <div class="content">
   <div class="side-app" id="currentstatus">
                 
<div class="row tab">

 <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 tablinks active" onclick="openCity(event, 'Unique')">
   <div class="card overflow-hidden activecart" id="cartuf">
     <div class="card-header">
       <h3 class="card-title font-weight-normal">Unique Footfall </h3>
       <div class="card-options"> <a class="btn btn-sm btn-success" href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true" style="font-size:15px"></i>
       </a> </div>
    </div>
    <div class="card-body ">
       <h2 class="text-dark  mt-0">{{$uniquefootfall}}</h2>
       <div class="progress progress-sm mt-0 mb-2">
         <div class="progress-bar bg-primary w-{{$uniquefootfall}}" role="progressbar"></div>
      </div>
   </div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 tablinks" onclick="openCity(event, 'Allfootfall')">
 <div class="card overflow-hidden" id="cartaf">
   <div class="card-header">
     <h3 class="card-title font-weight-normal">All Footfall</h3>
     <div class="card-options"> <a class="btn btn-sm btn-success" href="javascript:void(0)"><i class="fa fa-users" aria-hidden="true" style="font-size:15px"></i></a> </div>
  </div>
  <div class="card-body ">
     <h2 class="text-dark  mt-0">{{$allfootfall}}</h2>
     <div class="progress progress-sm mt-0 mb-2">
       <div class="progress-bar bg-primary w-{{$allfootfall}}" role="progressbar"></div>
    </div>
 </div>
</div>
</div>



</div>

<div id="Unique" class="tabcontent" style="display:block;">
  <span style="font-size:20px;font-weight:bold;">Unique Footfall</span style="font-size:20px;font-weight:bold;">
  <!-- <span class="" style="float: right;"> <a href="{{url('footfall-data')}}"><button type="button" style="min-height: 20px;background-color: #28a745;font-size: .8rem;color: #fff;padding: .175rem .25rem; " class="btn btn-success"><i class="fe fe-download mr-2"></i>Download</button></a></span> -->
  <div class="row item-all-cat">
     <div class="col-xl-2 col-sm-6">
      <div class="card text-center">
         <div class="card-body service-card">
            <div class="item-all-text ">
               <h4 class="mb-0 counter font-weight-semibold fs-35">{{$livepage}} </h4>
               <p class="mb-0 mt-2">Total Visits In<a href="#" class="d-block"> Live</a></p>

            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-2 col-sm-6">
      <div class="card text-center">
         <div class="card-body service-card">
            <div class="item-all-text ">
               <h4 class="mb-0 counter font-weight-semibold fs-35">{{$stagepage}}</h4>
               <p class="mb-0 mt-2">Total Visits In<a href="#" class="d-block"> Stage</a></p>

            </div>
         </div>
      </div>
   </div>
   
   
</div>
</div>

<div id="Allfootfall" class="tabcontent">
    <span style="font-size:20px;font-weight:bold;">All Footfall</span style="font-size:20px;font-weight:bold;">

<!--  <span class="" style="float: right;"> <a href="{{url('footfall-data')}}"><button type="button" style="min-height: 20px;background-color: #28a745;font-size: .8rem;color: #fff;padding: .175rem .35rem; " class="btn btn-success"><i class="fe fe-download mr-2"></i>Download</button></a></span> -->
  <div class="row item-all-cat">
     <div class="col-xl-2 col-sm-6">
      <div class="card text-center">
         <div class="card-body service-card">
            <div class="item-all-text ">
               <h4 class="mb-0 counter font-weight-semibold fs-35">{{$livepage2}}</h4>
               <p class="mb-0 mt-2">Total Visits In<a href="#" class="d-block"> Live</a></p>

            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-2 col-sm-6">
      <div class="card text-center">
         <div class="card-body service-card">
            <div class="item-all-text ">
               <h4 class="mb-0 counter font-weight-semibold fs-35">{{$stagepage2}}</h4>
               <p class="mb-0 mt-2">Total Visits In<a href="#" class="d-block"> Stage</a></p>

            </div>
         </div>
      </div>
   </div>
  
   
</div>
</div>

<script type="text/javascript">
   function openCity(evt, Unique) {

    $("#cartuf").addClass("activecart");
  // $(".cart").addClass("intro");activecart
}
function openCity(evt, Allfootfall) {

 $("#cartaf").addClass("activecart");
  // $(".cart").addClass("intro");activecart
}
</script>
<script>
   function openCity(evt, cityName) {
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

  

</div>
</div>
</div>

@endsection