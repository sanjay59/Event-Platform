<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    @foreach($table as $b)
	<title>{{$b->title}}</title>


	<link rel="icon" href="all_images/logo/{{$b->ficon}}" type="image/x-icon"/>
	@endforeach()
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="" />
    <!-- App css -->
    <link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{url('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    <link href="{{url('/')}}/assets/css/custom.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

</head>

<body>

 <div class="login-area px-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-4 mx-auto">
                <div class="border rounded p-4 bg-white">
                    <div class="text-center">
                        <img src="{{url('frontassets/upload')}}/{{$b->logo}}" alt="Login">
                        <h1 class="my-0 py-4 font-18">Login in to Your Account</h1>
                    </div>
                    <form method="post" action="{{url('check')}}">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" required="">
                            <span class="font-12 text-danger h6 email-error"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="mobile_no" class="form-control" value="{{old('mobile_no')}}" id="password" required="">
                            <span class="font-12 text-danger h6 password-error"></span>
                        </div>
                        <button type="submit" class="btn btn-outline btn-block waves-effect waves-light text-uppercase" id="login-btn">Login</button>
                    </form>
                </div>
                @if($msg=session()->get('msg'))
                <p>{{$msg}}</p>
                @endif
            </div>
        </div>  
    </div>
</div>
<!-- Vendor js -->
<script src="{{url('/')}}/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="{{url('/')}}/assets/js/app.min.js"></script>
<script>
    $('#login-btn').click(function(){
        var email = $('#email').val();
        var password = $('#password').val();
        if(email == ''){
            $('.email-error').html('Email ID is required');
        } else{
            $('.email-error').html('');
        }
        if(password == ''){
            $('.password-error').html('Password is required');
        }else{
            $('.password-error').html('');
        }
        if(email=='' && password==''){
            return false;
        }
    });
</script>

</body>

</html>