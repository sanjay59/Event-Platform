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
   @if ( !Session::get('countmsg'))
  <script>
    $(document).ready(function() {
window.location = "{{url('/')}}";
window.location = "{{url('ulogout')}}";
});
</script>
@endif


  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-M81P4J6KYB');
  </script>

 
@if ( !$data1->hpage_st)
<script>
 window.location = "{{url('live')}}";
</script>
@else
<script type="text/javascript">
 $(document).ready(function() {
   setInterval(function() {
     $('#registeruserref').load('change-holding-page');
   }, 10000)
 });
</script>
@endif
<style type="text/css">
  .main-bg {
    background: url('{{url('frontassets/upload')}}/{{$data1->mainbg}}') top no-repeat;
    background-size:cover;
}

.main-bg:after {
    background: url('{{url('frontassets/upload')}}/{{$data1->bg1}}') no-repeat;
    background-position: bottom left;
    background-size: contain;
}
</style>
</head>
<body class="bg-white">
 <div id="registeruserref">
  @include('frontent.choldpage')
</div>


<div class="main-banner-area main-bg timer-area position-relative">

  <header class="w-100 d-sm-flex align-items-center justify-content-between">
    <div class="col">
      <div class="d-flex align-items-center justify-content-center justify-content-md-end">
        <img src="{{url('frontassets/upload')}}/{{$data1->logo}}" alt="image" width="155" class="d-block">
      </div>
    </div>
  </header>

  <div class="container">
    <div class="days-count-down row text-center">

      <div class="col-12 col-lg-12 mb-5">
        <h1 class="mb-3 text-uppercase">
          <span class="d-block">Congratulations</span>
          You have Successfully Registered
        </h1>
        <h2 class="text-center text-uppercase">Join Us Live In</h2>
      </div>

      <div class="days-count col-6 col-lg-3 mb-5 mb-md-0">
        <strong id="days" class="d-flex align-items-center justify-content-center"></strong>
        <p class="text-uppercase mt-2">Days</p>
      </div>

      <div class="days-count col-6 col-lg-3 mb-5 mb-md-0">
        <strong id="hours" class="d-flex align-items-center justify-content-center"></strong>
        <p class="text-uppercase mt-2">Hours</p>
      </div>

      <div class="days-count col-6 col-lg-3 mb-4 mb-md-0">
        <strong id="minutes" class="d-flex align-items-center justify-content-center"></strong>
        <p class="text-uppercase mt-2">Min</p>
      </div>

      <div class="days-count col-6 col-lg-3 mb-4 mb-md-0">
        <strong id="seconds" class="d-flex align-items-center justify-content-center"></strong>
        <p class="text-uppercase mt-2">Sec</p>
      </div>

    </div>
  </div>
</div>


<script src="{{url('frontassets')}}/js/popper.min.js"></script>
<script src="{{url('frontassets')}}/js/bootstrap.min.js"></script>
<script src="{{url('frontassets')}}/js/script.min.js"></script>


</body>
</html>

