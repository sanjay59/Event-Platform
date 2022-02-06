@foreach($rpage as $ro) 
    @if($ro->lobby_st)
<script>
  window.location = "{{url('stage')}}";
</script>

 @endif()
@endforeach()

