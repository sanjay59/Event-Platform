<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  @if(!$data1->hpage_st)
  <script>
    window.location = "{{url('live')}}";
  </script>

  @endif()
</head>
<body>

  @php
  $dd=date_default_timezone_set("Asia/Kolkata");
  $currentdt=strtotime(date('Y-m-d H:i:s'));
  $evtstartdt=strtotime($data1->event_start_time);
  @endphp

 
  
  @if($currentdt<$evtstartdt)
  @else
  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        url:'{{url('update-holding-page')}}',
        success:function(){
          window.location = "{{url('live')}}";
        }
      });

    });
  </script>
  @endif


</body>
</html>