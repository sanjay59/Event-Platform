<!DOCTYPE html>
<html lang="en">
<head>
 <link href="{{url('frontassets/upload')}}/{{$data->ficon}}" rel="icon" />

 <title>{{$data->title}}</title>
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
 .lobby-main-video .live-banner-area {
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

 <div class="live-banner-area position-relative">
<div class="row no-gutters position-fixed align-items-center justify-content-between mt-3 right-15" style="z-index:1000">
      <div class="col d-flex justify-content-end">
        <div class="event-input event-button">
          <a href="{{url('/ulogout')}}" class="pulse-back-btn text-uppercase d-block text-center sm">Logout</a>
        </div>
      </div>
    </div>
  <img src="{{url('frontassets')}}/images/live.png" class="w-100 d-block">

  <ul class="pulse-nav-tabs nav nav-tabs border-0 d-block position-absolute w-100 h-100" id="myTab" role="tablist">
    <li class="nav-item mb-0">
      <!-- Pulse - Photo-booth - Start -->
      <a href="javascript:void(0);" data-toggle="modal" data-target="#photo-booth-modal">
        <div class="pulse position-absolute" id="pulse-photo-booth" data-toggle="tooltip" data-placement="top" title="Photo Booth" style="top:58%;left:14.1%;">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
      <script>
        $(document).ready(function(){
          $('#pulse-photo-booth').tooltip('show');
          $('#pulse-photo-booth').hover(function(){
            $(this).tooltip('show');
          });
        });
      </script>
      <!-- Pulse - Photo-booth - End -->
    </li>

    <li class="nav-item mb-0">
      <!-- Pulse - Photo-gallery - Start -->
      <a href="javascript:void(0);" data-toggle="modal" data-target="#photo-gallery-modal">
        <div class="pulse position-absolute" id="pulse-photo-gallery" data-toggle="tooltip" data-placement="top" title="Photo Gallery" style="top:58%;left:83%;">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
      <script>
        $(document).ready(function(){
          $('#pulse-photo-gallery').tooltip('show');
          $('#pulse-photo-gallery').hover(function(){
            $(this).tooltip('show');
          });
        });
      </script>
      <!-- Pulse - Photo-gallery - End -->
    </li>
  </div>


  

  <div class="modal fade" id="photo-booth-modal">
    <div class="modal-dialog modal-lg mt-2">
      <div class="modal-content border-0 rounded-0">
        <div class="modal-header py-2">
          <h5 class="modal-title text-center w-100">Photo Booth</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body photo-booth-modal-body"></div>
      </div>
    </div>
  </div>
  <script>
    $('#photo-booth-modal').on('show.bs.modal', function(){
      $('div.photo-booth-modal-body').html('<iframe src="https://apc.vbooth.me/booth/pd383RLV" allow="accelerometer;camera;microphone; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="border-0 w-100 d-block"></iframe>');
    });
    $('#photo-booth-modal').on('hide.bs.modal', function(){
      $('div.photo-booth-modal-body').html('None');
    });
  </script>
  <div class="modal fade" id="photo-gallery-modal">
    <div class="modal-dialog modal-xl mt-2">
      <div class="modal-content border-0 rounded-0">
        <div class="modal-header py-2">
          <h5 class="modal-title text-center w-100">Photo Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe src="https://apc.vbooth.me/gallery/pd383RLV?fs=0" class="border-0 w-100 d-block"></iframe>
        </div>
      </div>
    </div>
  </div>
  <script src="{{url('frontassets')}}/js/popper.min.js"></script>
  <script src="{{url('frontassets')}}/js/bootstrap.min.js"></script>
  <script src="{{url('frontassets')}}/js/script.min.js"></script>


  <script>
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


</body>
</html>

