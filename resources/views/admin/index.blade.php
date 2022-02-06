@extends('layout.master')
@section('content')
<script src="{{url('/')}}/assets/js/morris.min.js"></script>
<script src="{{url('/')}}/assets/js/raphael.min.js"></script>
<script>
  setInterval(function(){
   $('#currentstatus').load('home1').fadeIn('fast');
 }, 10000)
</script>
<div class="content-page" id="currentstatus">

    	@include('admin.index1')
</div>

@stop
