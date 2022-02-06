<!DOCTYPE html>
<html lang="en">
<head>
	<link href="{{url('frontassets/upload')}}/{{$logo->ficon}}" rel="icon" />
	<title>{{$logo->title}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('frontassets')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('frontassets')}}/css/style.min.css">

	<script src="{{url('frontassets')}}/js/jquery.min.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-M81P4J6KYB"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-M81P4J6KYB');
	</script>

	<style>
	.main-bg {
		background: url('{{url('frontassets/upload')}}/{{$logo->mainbg}}') top no-repeat;
background-size:cover;
}
.main-bg:after{
	background: url('{{url('frontassets/upload')}}/{{$logo->bg1}}') contain no-repeat;
background-position: bottom left;
}
.event-input input, .event-select select{
	background: url('{{url('frontassets/upload')}}/{{$logo->inputbg}}') no-repeat;
background-size:100% 50px;
}
.event-button a, .event-button button{
	background: url('{{url('frontassets/upload')}}/{{$logo->btnbg}}') no-repeat;
background-size:100% 52px;
}
</style>

</head>
<body class="bg-white">


	<div class="main-banner-area main-bg position-relative">

		<header class="w-100 d-sm-flex align-items-center justify-content-between">
			<div class="col">
				<div class="d-flex align-items-center justify-content-center justify-content-md-end">
					<img src="{{url('frontassets/upload')}}/{{$logo->logo}}" alt="image" width="155" class="d-block">
				</div>
			</div>
		</header>

		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center">

				<div class="col-xl-5 mb-5 mb-xl-0">
					<div class="event-form text-center pl-xl-4">
						<img src="{{url('frontassets/upload')}}/{{$pagesetup->heading_image}}" alt="image" width="130">

						<!-- <form  action ="{{url('/checkuser')}}" method="post">
							@csrf
							@if($inpfield->name)
							<div class="event-input">
								<input type="text" placeholder="Name :" name="name" value="{{old('name')}}" required>
							</div>
							@endif
							@if($inpfield->email)
							<div class="event-input">
								<input type="text" placeholder="Email :" name="email" value="{{old('email')}}" required>
							</div>
							@endif
							@if($inpfield->employee_code)
							<div class="event-input">
								<input type="text" placeholder="Agent/Employee Code :" name="employee_id" value="{{old('employee_id')}}" required>
							</div>
							@endif
							@if($inpfield->branch)
							<div class="event-input">
								<input type="text" placeholder="Branch :" name="branch" value="{{old('branch')}}" required>
							</div>
							@endif
							@if($inpfield->multioption)
							<div class="event-input event-select position-relative">
								<select name="channel" class="text-uppercase" required>
									<option value="" selected>Select Channel</option>
									<option value="Base Agency" >Base Agency</option>
									<option value="Ace Agency">Ace Agency</option>
									<option value="E Agency">E Agency</option>
									<option value="Other">Other</option>
								</select>
							</div>
							@endif

							<div class="input-checkbox">
								<input type="checkbox" name="agree" id="agree" checked required>
								<label for="agree">I hereby confirm and acknowledge that details provided above are correct to my knowledge</label>
							</div>

							<div class="event-input event-button mt-3 mt-md-4">
								<button type="submit" name="submit" class="text-uppercase d-inline-block text-center sm">Enter</button>
							</div>
						</form> -->
						 <form  action ="{{url('/checkuser')}}" method="post">
              @csrf
              @if($inpfield->name)
              <div class="event-input">
                <input type="text" placeholder="Name :" name="name" value="{{old('name')}}" required>
              </div>
              @endif
               @if($inpfield->email)
              <div class="event-input">
                <input type="text" placeholder="Email :" name="email" value="{{old('email')}}" required>
              </div>
              @endif
               @if($inpfield->mobile_no)
              <div class="event-input">
                <input type="text" placeholder="Mobile No. :" name="mobile_no" value="{{old('mobile_no')}}" required>
              </div>
              @endif
               @if($inpfield->firm_name)
              <div class="event-input">
                <input type="text" placeholder="Firm Name :" name="firm_name" value="{{old('firm_name')}}" required>
              </div>
              @endif
               @if($inpfield->city)
              <div class="event-input">
                <input type="text" placeholder="City :" name="city" value="{{old('city')}}" required>
              </div>
              @endif
               @if($inpfield->country)
              <div class="event-input">
                <input type="text" placeholder="Country :" name="country" value="{{old('country')}}" required>
              </div>
              @endif
              
              @if($inpfield->employee_code)
              <div class="event-input">
                <input type="text" placeholder="Agent/Employee Code :" name="employee_id" value="{{old('employee_id')}}" required>
              </div>
              @endif
              @if($inpfield->branch)
              <div class="event-input">
                <input type="text" placeholder="Branch :" name="branch" value="{{old('branch')}}" required>
              </div>
              @endif
               @if($inpfield->type)
              <div class="event-input">
                <input type="text" placeholder="Type :" name="type" value="{{old('type')}}" required>
              </div>
              @endif
              @if($inpfield->multioption)
              <div class="event-input event-select position-relative">
                <select name="channel" class="text-uppercase" required>
                  <option value="" selected>Select Channel</option>
                  <option value="Base Agency" @if(old('channel')=="Base Agency"){{'selected'}}@endif>Base Agency</option>
                  <option value="Ace Agency" @if(old('channel')=="Ace Agency"){{'selected'}}@endif>Ace Agency</option>
                  <option value="E Agency" @if(old('channel')=="E Agency"){{'selected'}}@endif>E Agency</option>
                  <option value="Other" @if(old('channel')=="Other"){{'selected'}}@endif>Other</option>
                </select>
              </div>
              @endif
               @if($inpfield->agree)
              <div class="input-checkbox">
                <input type="checkbox" name="agree" id="agree" value="1" checked required>
                <label for="agree">I hereby confirm and acknowledge that details provided above are correct to my knowledge</label>
              </div>
              @endif

              <div class="event-input event-button mt-3 mt-md-4">
                <button type="submit" name="submit" class="text-uppercase d-inline-block text-center sm">Enter</button>
              </div>
            </form>

					</div>
				</div>

				<div class="col-xl-6">
					<div class="main-content-img text-center">
						<img src="{{url('frontassets/upload')}}/{{$pagesetup->image}}" alt="image" class="img-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>


	<script src="{{url('frontassets')}}/js/popper.min.js"></script>
	<script src="{{url('frontassets')}}/js/bootstrap.min.js"></script>
	<script src="{{url('frontassets')}}/js/script.min.js"></script>

	@if ($message = Session::get('logout'))
	<div class="modal main-bg d-block" id="star-rating-modal">
		<div class="modal-dialog h-100 d-flex align-items-sm-center mt-3 mt-sm-0 mb-0">
			<div class="modal-content border-0 rounded-0">
				<div class="modal-body text-center py-0">
					<div class="row">
						<div class="col-lg-6 mx-auto">
							<h5 class="modal-title mb-3 mt-4 mt-md-0">How Was Your Experience?</h5>
							<div class="d-flex align-items-center justify-content-center">
								<div class="ev-rating">
									<input type="hidden" id="user_id" name="user_id" value="{{$message}}">
									<input type="radio" id="star5" name="star" value="5" class="star-rating" checked>
									<label class="star" for="star5"></label>
									<input type="radio" id="star4" name="star" value="4" class="star-rating">
									<label class="star" for="star4"></label>
									<input type="radio" id="star3" name="star" value="3" class="star-rating">
									<label class="star" for="star3"></label>
									<input type="radio" id="star2" name="star" value="2" class="star-rating">
									<label class="star" for="star2"></label>
									<input type="radio" id="star1" name="star" value="1" class="star-rating">
									<label class="star" for="star1"></label>
								</div>
							</div>
							<div class="event-input event-button mb-0">
								<a href="javascript:void(0);" class="text-uppercase d-block text-center mx-auto sm mt-4" onclick="createRating()">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	@endif
	<script type="text/javascript">
   $('#agree').on('change', function(){
   this.value = this.checked ? 1 : 0;
   });
   </script>
	@if ($message = Session::get('logout'))
	<script type="text/javascript">
		$('#star-rating-modal').modal('show');
		$('#star-rating-modal').addClass('fade');
		$('#star-rating-modal').removeClass('d-block');

		$("#star-rating-modal").on("click", function(){
			$(this).removeClass('fade');
			$(this).addClass('d-block');
		});

		$('#star-result').html('5 Star');
		$(".star-rating").on("click", function(){
			var star = $(".star-rating:checked").val();
			$('#star-result').show();
			$("#star-result").html(star+' Star');
		});
	</script>
	<script type="text/javascript">
		function createRating() {
			var user_id = $('#user_id').val();
			var star = $(".star-rating:checked").val();
			if(confirm('Are you sure '+star+' star rating!')){
				$.ajax({
					url: "{{url('/save-rating')}}",
					type: "POST",
					data: {
						user_id: user_id,
						star: star,
						_token: '{{csrf_token()}}',
					},
					success: function(response) {
						setInterval(function() {
							$('#star-rating-modal').modal('hide');
							$('#star-rating-modal').addClass('fade');
							$('#star-rating-modal').removeClass('d-block');
						},1000);
					}
				});
			}
		}
	</script>

	@endif

</body>
</html>

