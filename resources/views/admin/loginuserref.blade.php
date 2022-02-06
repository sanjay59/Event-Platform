<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title" style="width: 30%">Live Users</div>

				<div class="row" style="width: 70%">

					<div class="col-sm-12">
						<div class="card-title" style="float: right;"> <a href="{{url('login-data')}}"><button type="button" style="min-height: 20px;background-color: #28a745;font-size: .8rem;color: #fff;padding: .175rem .25rem; " class="btn btn-success"><i class="fe fe-download mr-2"></i>Download</button></a></div>
					</div>


				</div>


			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" >
						<thead>
							<tr>
								<th class="wd-15p">Sr No</th>
								<th class="wd-15p">Name</th>
								<th class="wd-10p">Employee Code </th>
								<th class="wd-10p">Branch</th>
								<th class="wd-10p">Channel</th>
								<th class="wd-10p">Online</th>
								<th class="wd-25p">Created Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=$lcount?>
							@foreach($table2 as $c)
							<tr>
								<td>{{$lcount--}}</td>
								<td>{{$c->name}}</td>
								<td>{{$c->mobile_no}}</td>
								<td>{{$c->company_name}}</td>
								<td>{{$c->bank_relation}}</td>
								<td>
									@if($c->status)
									<span class="status-icon bg-success"></span>
									@else
									<span class="status-icon bg-danger"></span>
									@endif
								</td>


								<td>{{  strftime("%d %b %Y",strtotime($c->created_at)) }} {{  date('H:i', strtotime($c->created_at)) }}

									<!-- {{  date('d/m/Y', strtotime($c->created_at)) }} --></td>
								</tr>
								@endforeach()

							</tbody>
						</table>
					</div>
				</div>
				<!-- table-wrapper -->
			</div>
			<!-- section-wrapper -->
		</div>

	</div>