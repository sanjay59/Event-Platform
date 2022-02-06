<!DOCTYPE html>
<html lang="en">
<head>
 <title>{{$table->title}}</title>
 <link href="{{url('frontassets/upload')}}/{{$table->ficon}}" rel="icon" />
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
<style type="text/css">
.swal2-styled.swal2-confirm {
  border: 4px solid #ffdc48 !important;
  border-radius: .25em;
  background: initial;
  background-color: #802512 !important;
  color: #fff;
  font-size: 1em;
}
.swal2-styled:focus {
  outline: 0;
  box-shadow: none !important;
}
.error-msg{
  font-size:21px;
  font-weight: 700;
    color: #FF1A21;
  top:8px;
  left:-18px;
}
.type-error{
  top:-3px;
}
.swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
      background: rgb(255 255 255 / 80%) !important;
    }
    .swal2-popup {
      /*background: #da4040;*/
      width: 28em !important;
      background: url('{{url('frontassets/upload')}}/{{$table->mainbg}}') center no-repeat !important;
      background-size: cover !important;
    }
    .swal2-icon{width: 40px !important;height: 40px !important;border-color: #a02d32 !important;
      color: #a02d32  !important;border-width: 2px !important;}
      .swal2-icon .swal2-icon-content{font-size:30px !important;}
      .swal2-title{font-size:16px !important;font-weight:400 !important;
        color: #a02d32 !important;}
        .swal2-styled.swal2-confirm{font-size:13px !important;border:none !important;outline: none !important;background:#a02d32 !important;}

  .main-bg {
    background: url('{{url('frontassets/upload')}}/{{$table->mainbg}}') top no-repeat;
    background-size:cover;
}
.main-bg:after{
  background: url('{{url('frontassets/upload')}}/{{$table->bg1}}') contain no-repeat;
    background-position: bottom left;
}
.event-input input, .event-select select{
  background: url('{{url('frontassets/upload')}}/{{$table->inputbg}}') no-repeat;
    background-size:100% 50px;
}
.event-button a, .event-button button{
  background: url('{{url('frontassets/upload')}}/{{$table->btnbg}}') no-repeat;
    background-size:100% 52px;
}
</style>
</head>
<body class="bg-white">
  <div class="main-banner-area main-bg position-relative">
    <header class="w-100 d-md-flex align-items-center justify-content-between px-4 px-xl-5 pt-xl-3 mb-5 mb-md-4 mb-lg-0">  
      <div class="col">
        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
          <img src="{{url('frontassets/upload')}}/{{$table->logo}}" alt="image" width="180" class="d-block">
        </div>
      </div>
    </header>

    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">

        <div class="col-xl-5 mb-5 mb-xl-0">
          <div class="event-form text-center">
            <img src="{{url('frontassets/upload')}}/{{$pagesetup->heading_image}}" alt="image" width="270">
           <form  action ="{{url('/saveuser')}}" method="post">
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

      <div class="col-xl-5">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
   $('#agree').on('change', function(){
   this.value = this.checked ? 1 : 0;
   });
   </script>
@if ($message = Session::get('msg'))
<script>

  swal.fire({
    title: "{{$message}}",
    icon: "warning",
    button: "OK",
  });
</script>
@endif
<script>
 $('#registration-btn').click(function(){
  var name = $('#name').val();
  var mobile = $('#mobile').val();
  var firm_name = $('#firm_name').val();
  var city = $('#city').val();
  if(name == '')
  {
   $('.name-error').html('*');
 }
 else{
   $('.name-error').html('*');
 }
 if(mobile == '')
 {
  $('.mobile-error').html('*');
}
else{
  $('.mobile-error').html('*');
  if(!mobile.match('[0-9]{10}'))
  {
    $('.mobile-error').html('*');
    return false;
  }else{
    $('.mobile-error').html('*');
  }
}
if(firm_name == '')
{
 $('.firm-name-error').html('*');
}
else{
 $('.firm-name-error').html('*');
}
if(city == '')
{
 $('.city-error').html('*');
}
else{
 $('.city-error').html('*');
}

if ($('input[name=type]:checked').length <= 0) {
 $('.type-error').html('*');
 return false;
}
else {
 $('.type-error').html(''); 
}
if(name==null || name=="",mobile==null || mobile=="",firm_name==null || firm_name=="",city==null || city==""){
 return false;
}

});
</script>


</body>
</html>

