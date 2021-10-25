@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Contact Us</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
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
					<div class="border-bottom title-part-padding">
					    <h4 class="card-title mb-0">Contact List</h4>             
					</div>
					<div class="card-body">
						<div class="table-responsive">
						
						    <!-- Alert Append Box -->
							<div class="alert alert-danger alert-dismissible text-white border-0 fade show" role="alert">
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
								<strong>Danger - </strong> A simple Danger alert
							</div> 
										
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th><div style="width:60px;">Sr. No.</div></th>
										<th>Name</th>
										<th>Message</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>
											<b>Jitendra Kumar Prajapat</b><br>
											<p class="m-0">jkdesigner62+1@gmail.com</p>
											<p class="m-0">27-01-2021 <span class="ml-2">10:00 AM</span></p>
											<p class="m-0">9876543210</p>
										</td>
										<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
											</div>
										</td>
									</tr>
									<tr>
										<td>02</td>
										<td>
											<b>Jitendra Kumar Prajapat</b><br>
											<p class="m-0">jkdesigner62+1@gmail.com</p>
											<p class="m-0">27-01-2021 <span class="ml-2">10:00 AM</span></p>
											<p class="m-0">9876543210</p>
										</td>
										<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
											</div>
										</td>
									</tr>
									<tr>
										<td>03</td>
										<td>
											<b>Jitendra Kumar Prajapat</b><br>
											<p class="m-0">jkdesigner62+1@gmail.com</p>
											<p class="m-0">27-01-2021 <span class="ml-2">10:00 AM</span></p>
											<p class="m-0">9876543210</p>
										</td>
										<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
											</div>
										</td>
									</tr>
									<tr>
										<td>04</td>
										<td>
											<b>Jitendra Kumar Prajapat</b><br>
											<p class="m-0">jkdesigner62+1@gmail.com</p>
											<p class="m-0">27-01-2021 <span class="ml-2">10:00 AM</span></p>
											<p class="m-0">9876543210</p>
										</td>
										<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


<!-- This page plugin CSS -->
<link href="{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!--This page plugins -->
<script src="{{ asset('assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
<!--This page plugins -->
@stop