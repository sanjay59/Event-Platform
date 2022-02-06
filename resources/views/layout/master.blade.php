<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{url('frontassets/upload')}}/{{$logo->ficon}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontassets/upload')}}/{{$logo->logo}}" />

    <!-- Title -->
    <title>{{$logo->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="" />
    <!-- App css -->
    <link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{url('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    <link href="{{url('/')}}/assets/css/custom.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    <script src="{{url('/')}}/assets/js/vendor.min.js"></script>
    <!-- <script src="https://wowcloud.in/assets/js/jquery.min.js" type="text/javascript"></script> -->
    
</head>

<body class="bg-white">
    @include('layout.topbar')

    <!-- Begin page -->
    <div id="wrapper">
   <!-- ========== Left Sidebar Start ========== -->
        @include('layout.sidebar')
        @yield('content')
    </div>

    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{url('/')}}/assets/js/app.min.js"></script>
    
 <script>
  $('.button-menu-mobile').click(function(){
    $('.logo-box').toggleClass('active');
});
  

</script>
</body>

</html>