@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">User Details</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">User Details</li>
			</ol>
		</div>
	</div>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
		<!-- basic table -->
		<div class="row">
			<div class="col-12">
				<div class="card">
				    <div class="card-body">
					    <div class="profile_box">
						    <img src="{{ asset('assets/admin/images/theme/user.png') }}" class="profile_img"> 
							<div class="profile_box_body">
							    <h4>Jitendra Kumar Prajapat</h4>
								<a href="javascript:void(0);"><i class="mdi mdi-email-outline"></i> jkdesigner62@gmail.com</a>
								<a href="javascript:void(0);"><i class="mdi mdi-phone"></i> +91 9876543210</a>
								<a href="javascript:void(0);"><i class="mdi mdi-map-marker"></i> Melbourne</a>
								<p class="mb-0">I distinguish three main text objectives could be merely to inform people. A second could be persuade people. You want people to bay objective.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div>
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
										<span>User Details</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
										<span>User Orders</span>
									</a>
								</li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content pt-3">
								<div class="tab-pane active" id="home" role="tabpanel">
									<table class="table table-bordered table_fix_width">
                                        <tbody>
											<tr>
												<th>User Name</th>
												<td><input type="text" class="form-control" value="Jitendra Kumar Prajapat"></td>
											</tr>
											<tr>
												<th>Email</th>
												<td>jkdesigner62@gmail.com</td>
											</tr>
											<tr>
												<th>Phone Number</th>
												<td>9876543210</td>
											</tr>
											<tr>
												<th>Checkbox</th>
												<td>
													<div class="form-check form-check-inline">
														<input class="form-check-input success" type="checkbox" id="success1-check" value="option1">
														<label class="form-check-label" for="success1-check">Checked</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input success" type="checkbox" id="success2-check" value="option1">
														<label class="form-check-label" for="success2-check">Checked</label>
													</div>
												</td>
											</tr>
											<tr>
												<th>Radio</th>
												<td>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
														<label class="form-check-label" for="exampleRadios1">
															Default radio
														</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked="">
														<label class="form-check-label" for="exampleRadios2">
															Default radio
														</label>
													</div>
												</td>
											</tr>
											<tr>
												<th>Address</th>
												<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
											</tr>
											<tr>
												<th>Address 2</th>
												<td>
													<div class="row">
														<div class="col-md-6">
															<input type="text" class="form-control" placeholder="langitute" value="">  
														</div>
														<div class="col-md-6">
															<input type="text" class="form-control" placeholder="latitute" value="">  
														</div>
														<div class="col-md-12">
															<iframe class="map_box" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.38256348536!2d75.65047013538644!3d26.88544791745257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1612253364323!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
														</div>
													</div>
												</td>
											</tr>
										</tbody></table>
										<div class="col-md-12">
											<button class="btn btn-success btn_submit fa-pull-right">Update Details</button>  
										</div>
								</div>
								<div class="tab-pane" id="profile" role="tabpanel">
								
									<div class="col-md-5">
										<div class="input-group mb-3">
											<select class="form-control">
												<option>All</option>
												<option>New</option>
												<option>Completed</option>
												<option>Canceled</option>
											</select>
											<input type="button" class="btn btn-info ml-2" value="Filter">
										</div>
									</div>
									
									<div class="table-responsive">
										<table id="zero_config" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Sr. No.</th>
													<th>Status</th>
													<th>Image</th>
													<th>Product Name</th>
													<th>Order Id</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="sorting_1">01</td>
													<td>
														<span class="status_btn mb-1" style="background:rgb(55 141 223);">New</span>
														<br> 
														<span class="order_stauts">Pick-up</span>
													</td>
													<td><img class="fit_img" style="width:100px;height:62px;" src="assets/admin/images/theme/no_images.png"></td>
													<td>
														<p class="m-0 limit_1"><b>King Spa and Sauna</b></p>
														<p class="m-0 limit_1">Category : Beauty &amp; Spa</p>
														<p class="m-0 limit_1">Price : $ 34.09</p>
													</td>
													<td>W3-534DFG23</td>
													<td>
														<div class="table_action">
															<a href="{{ url('/customer-details-order') }}" class="btn btn-success btn-sm list_view">
																<i class="mdi mdi-eye"></i>
															</a>  
															<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
																<i class="mdi mdi-delete"></i>
															</a>  
															<!--<span class="status">
																<label class="switch">
																	<input class="switch-input" type="checkbox" checked />
																	<span class="switch-label" data-on="Active" data-off="Deactive"></span> 
																	<span class="switch-handle"></span> 
																</label>
															</span>-->
														</div>
													</td>
												</tr>
												<tr>
													<td class="sorting_1">02</td>
													<td>
														<span class="status_btn mb-1" style="background:rgb(87 170 32);">Completed</span>
													</td>
													<td><img class="fit_img" style="width:100px;height:62px;" src="assets/admin/images/theme/no_images.png"></td>
													<td>
														<p class="m-0 limit_1"><b>King Spa and Sauna</b></p>
														<p class="m-0 limit_1">Category : Beauty &amp; Spa</p>
														<p class="m-0 limit_1">Price : $ 34.09</p>
													</td>
													<td>W3-534DFG23</td>
													<td>
														<div class="table_action">
															<a href="{{ url('/customer-details-order') }}" class="btn btn-success btn-sm list_view">
																<i class="mdi mdi-eye"></i>
															</a>  
															<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
																<i class="mdi mdi-delete"></i>
															</a>  
															<!--<span class="status">
																<label class="switch">
																	<input class="switch-input" type="checkbox" checked />
																	<span class="switch-label" data-on="Active" data-off="Deactive"></span> 
																	<span class="switch-handle"></span> 
																</label>
															</span>-->
														</div>
													</td>
												</tr>
												<tr>
													<td class="sorting_1">03</td>
													<td>
														<span class="status_btn mb-1" style="background:rgb(214 2 2);">Cancelled</span>
													</td>
													<td><img class="fit_img" style="width:100px;height:62px;" src="assets/admin/images/theme/no_images.png"></td>
													<td>
														<p class="m-0 limit_1"><b>King Spa and Sauna</b></p>
														<p class="m-0 limit_1">Category : Beauty &amp; Spa</p>
														<p class="m-0 limit_1">Price : $ 34.09</p>
													</td>
													<td>W3-534DFG23</td>
													<td>
														<div class="table_action">
															<a href="{{ url('/customer-details-order') }}" class="btn btn-success btn-sm list_view">
																<i class="mdi mdi-eye"></i>
															</a>  
															<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
																<i class="mdi mdi-delete"></i>
															</a>  
															<!--<span class="status">
																<label class="switch">
																	<input class="switch-input" type="checkbox" checked />
																	<span class="switch-label" data-on="Active" data-off="Deactive"></span> 
																	<span class="switch-handle"></span> 
																</label>
															</span>-->
														</div>
													</td>
												</tr>
												
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->


@stop