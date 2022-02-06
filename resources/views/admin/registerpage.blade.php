@extends('layout1.master')

@section('title')
Register Page
@endsection()

@section('content')

				<!--App-Content-->
				<div class="app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Forms</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>
						</div>
						<!--/Page-Header-->

						 
						<!-- end row -->
						
						<div class="row">
							<div class="col-12">
								
								
							
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">File Uploads</h3>
									</div>
									<div class=" card-body">
										<div class="row">
											<div class="col-lg-4 col-sm-12">
												<input type="file" class="dropify" data-height="180" />
											</div>
											<div class="col-lg-4 col-sm-12">
												<input type="file" class="dropify" data-default-file="assets/images/media/media1.jpg" data-height="180"  />
											</div>
											<div class="col-lg-4 col-sm-12">
												<input type="file" class="dropify" disabled="disabled" data-height="180" />
											</div>
										</div>
										<br>
										<div class="input-group file-browser">
											<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
											<label class="input-group-btn">
												<span class="btn btn-primary">
													Browse <input type="file" style="display: none;" multiple>
												</span>
											</label>
											</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Select2 elements</h3>
									</div>
									
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Time Picker</h3>
									</div>
									<div class=" card-body">
										<label >Default Time Picker:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tpBasic" placeholder="Set time" type="text">
											</div>
										</div><!-- wd-150 -->
										<label class="mt-4">Set the scroll position to local time if no value selected:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
													</div><!-- input-group-text -->
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tp2" placeholder="Set time" type="text">
											</div>
										</div><!-- wd-150 -->
										<label class="mt-4 ">Dynamically set the time using a Javascript Date object:</label>
										<div class="d-flex">
											<div class="input-group wd-150">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
													</div><!-- input-group-text -->
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tp3" placeholder="Set time" type="text">
												<button class="btn btn btn-primary " id="setTimeButton">Set Current Time</button>
											</div><!-- input-group -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Picker</h3>
									</div>
									<div class=" card-body">
										<p class=" mb-1">A simple component to select color in the same way you select color in Adobe Photoshop.</p><input id="colorpicker" type="text">
										<p class="mt-3  mb-1">You can allow alpha transparency selection. Check out these example.</p><input id="showAlpha" type="text">
										<p class="mt-4 mb-1">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p><input id="showPaletteOnly" type="text">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Default Date picker</div>
									</div>
									<div class="card-body">
										<p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
										<div class="wd-200 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Multiple Months </div>
									</div>
									<div class="card-body">
										<p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
										<div class="wd-200 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
													</div>
												</div><input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Input Mask</h3>
									</div>
									<div class="card-body">
										<form class="form-horizontal form-label-left">
											<div class="input-group mb-3">
												<div class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Date Mask</div>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
													<span class="form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Phone mask</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Custom Mask</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" data-inputmask="'mask': '99-999999'">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Serial Number</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
													<span class="form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">TaxID Mask</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" data-inputmask="'mask' : '99-99999999'">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Credit Card Mask</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			@endsection