

<?php
$i=$ccount;
?>
@foreach($table->chunk(200) as $totalcomment)

@foreach($totalcomment as $c)
<tr>
	<th scope="row">{{$i--}}</th>
	@if($inpfieldst->name)<td>{{$c->name}}</td>@endif
                  @if($inpfieldst->email)<td>{{$c->email}}</td>@endif
                  @if($inpfieldst->mobile_no)<td>{{$c->mobile_no}}</td>@endif
                  @if($inpfieldst->firm_name)<td>{{$c->firm_name}}</td>@endif
                  @if($inpfieldst->employee_code)<td>{{$c->employee_id}}</td>@endif
                  @if($inpfieldst->branch)<td>{{$c->branch}}</td>@endif
                  @if($inpfieldst->multioption)<td>{{$c->multioption}}</td>@endif
                  @if($inpfieldst->city)<td>{{$c->city}}</td>@endif
                  @if($inpfieldst->country)<td>{{$c->country}}</td>@endif
                  @if($inpfieldst->type)<td>{{$c->type}}</td>@endif
	<td>{{$c->description}}</td>
	<td>
		{{  strftime("%d %b %Y ",strtotime($c->ctime)) }} {{  date('H:i', strtotime($c->ctime)) }}
	</td> 
	<td>
		<a href="{{ url('comment-delete',$c->id)}}"><i class="mdi mdi-delete-outline font-15 text-danger"></i></a>
	</td>
</tr>
@endforeach()
@endforeach()

