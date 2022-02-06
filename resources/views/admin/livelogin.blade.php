@extends('layout1.master')

@section('title')
Users
@endsection()

@section('content')
<!-- <script>
  setInterval(function(){
   $('#liveloginreff').load('llref').fadeIn('fast');
 }, 5000)
</script> -->
<div class="app-content">
					<div class="side-app" id="liveloginreff">
						
						<!--/Page-Header-->

						@include('admin.liveloginref')
					</div>
				</div>
				@endsection