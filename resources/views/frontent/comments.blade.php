<!DOCTYPE html>
<html lang="en">
<head>
	 <title>{{$data1->title}}</title>

  <link href="{{url('frontassets/upload')}}/{{$data1->ficon}}" rel="icon" />
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
	<script type="text/javascript">
		$(document).ready(function() {
			$.ajax({
				url: "{{url('/attend-user')}}",
			});
		});
	</script>
	<style>
.tooltip{left:9px !important;}
.portrait-content {
 display: none;
}
@media only screen and (min-device-width: 0px) and (max-device-width: 767px) and (orientation: portrait) {
 .lobby-main-video .stage-area {
  display: none;
}
.portrait-content {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  background: #fff;
  width: 100%;
  height: 100%;
  height: 100vh;
  z-index: 99999999;
}
}
</style>
</head>
<body class="bg-white">

 <div class="portrait-content">
    <div class="portrait-center" style="text-align: center;">
     <img src="{{url('rotate.gif')}}" alt="" style="height: 100%;width: 100%;">
     <p>Please Rotate your device</p>
     <p>Please ensure auto rotate is active on your device</p>
   </div>
 </div>
	<div class="stage-area position-relative">

		<div class="row no-gutters position-fixed align-items-center justify-content-between mt-3 right-15">
			<div class="col d-flex justify-content-end">
				<div class="event-input event-button">
					<a href="{{url('/ulogout')}}" class="pulse-back-btn text-uppercase d-block text-center sm">Logout</a>
				</div>
			</div>
		</div>

		<div class="video-frame">
			<iframe src="{{$data->video}}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="vimeo-player" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			
		</div>

		<div class="ask-qa-box shadow p-3 position-fixed d-none">
			<p class="d-flex align-items-center justify-content-between mb-2">
				<span class="text-white">Ask a Question?</span> 
				<a href="javascript:void(0);" class="d-block rounded-circle text-center bg-white shadow" onclick="createPostt()">
					<i class="fa fa-paper-plane-o"></i>
				</a>
			</p>
			<span class="position-absolute chat-msg" id="msg2"></span>
			<textarea name="description" id="description2" placeholder="Please Write Your Question Here.." maxlength="100" class="form-control border-0 rounded-0 p-1"></textarea>
		</div>
		<div class="ask-qa-btn shadow position-fixed bg-white" onClick="askBtn();">Comment</div>

	</div>
	<script src="{{url('frontassets')}}/js/popper.min.js"></script>
	<script src="{{url('frontassets')}}/js/bootstrap.min.js"></script>
	<script src="{{url('frontassets')}}/js/script.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$("#description2").keypress(function(e) {
				var description = $('#description2').val();
				var id = $('#post_id').val();
				if (e.which == 13) {
					if(description == ''){
						$('#msg2').html('');
						$('.comment-error').html('Write your Question');


						return false;

					}
					else{
						$('.comment-error').html('');
					}

					$.ajax({
						url: "{{url('/posts2')}}",
						type: "POST",
						data: {
							id: id,
							description: description,
							_token: '{{csrf_token()}}',
						},
						success: function(response) {
							$("#description2").val('');

							$('#msg2').show();

							$('#msg2').html(response.message);
							setInterval(function() {
								$('#msg2').hide();
							},5000);


						}


					});



				}

			});


		});
		function createPostt() {
			var description = $('#description2').val();
			var id = $('#post_id').val();
			if(description == ''){
				$('#msg2').html('');

				$('.comment-error').html('Write your Question');
				return false;

			}
			else{
				$('.comment-error').html('');
			}
			$.ajax({
				url: "{{url('/posts2')}}",
				type: "POST",
				data: {
					id: id,
					description: description,
					_token: '{{csrf_token()}}',
				},
				success: function(response) {
					$("#description2").val('');

					$('#msg2').show();

					$('#msg2').html(response.message);
					setInterval(function() {
						$('#msg2').hide();
					},5000 );


				}


			});

		}
	</script>
	<script>
		$("#like-btn").css({'bottom':'60px'});
		$('.ask-qa-btn').css({'bottom':'60px'});

		$('.ask-qa-box textarea').focus(function(){
			$('html, body').animate({ scrollTop: ($('.ask-qa-box textarea').offset().top - 10) }, 1);
			$('.ask-qa-box,.ask-qa-btn').addClass('mob-up');
			return false;
		});

		function askBtn(){

			var qa = $('.ask-qa-btn').text();
			if(qa == 'Comment'){
				$('.ask-qa-box').addClass('d-block');
				$('.ask-qa-btn').text('Close');
				$('.ask-qa-btn').addClass('active');
			}
			else{
				$('.ask-qa-box').removeClass('d-block');
				$('.ask-qa-btn').text('Comment');
				$('.ask-qa-btn').removeClass('active');
			}

		}
	</script>


</body>
</html>

