<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
												<div class="card-title" style="width: 30%">Login Data</div>

										<div class="row" style="width: 70%">
									
											<div class="col-sm-12">
												<div class="card-title" style="float: right;"> <a href="alllogin"><button type="button" style="min-height: 20px;background-color: #28a745;font-size: .8rem;color: #fff;padding: .175rem .25rem; " class="btn btn-success"><i class="fe fe-download mr-2"></i>Download</button></a></div>
											</div>
											 
										
										</div>
										
										
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th class="wd-10p">Sr No</th>
														<th class="wd-20p">Firm Name</th>
														<!-- <th class="wd-10p">Firm Name</th> -->
														<!-- <th class="wd-10p">Mobile No</th> -->
														<th class="wd-10p">Contact No</th>
														
														<th class="wd-10p">Total Login</th>
														<th class="wd-10p">Online</th>
														<th class="wd-10p">Stay Time</th>
														<th class="wd-10p">Created Date</th>
													</tr>
													
												</thead>
												<tbody>
													<?php $i=$lcount+1 ?>
													 @foreach($table as $c)
													 
					                                <tr>
					                                    <td><?php echo $i--; ?></td>
					                                    <td>{{$c->name}}</td>
					                                    <!-- <td>{{$c->email}}</td> -->
					                                    <!-- <td>{{$c->mobile_no}}</td> -->
					                                    <td>{{$c->company_name}}</td>

					                                    
					                                    <td>{{$c->cltime}}</td>
					                                    <td>
					                                    	@if($c->status)
					                                    	<button type="radio" class=" btn-success" style="border-radius: 50%;height: 15px;width: 15px;"></i></button>
					                                    	@else
					                                    	<button type="radio" class=" btn-danger" style="border-radius: 50%;height: 15px;width: 15px;"></i></button>
					                                    	@endif
					                                    </td>
					                                    <td>{{$c->total_time}}</td>
					                                    <td>{{  strftime("%d %b %Y",strtotime($c->created_at)) }} {{  date('H:i', strtotime($c->created_at)) }}</td>
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