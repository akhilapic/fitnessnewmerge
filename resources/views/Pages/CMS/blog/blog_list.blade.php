@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Blog</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
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
					    <h4 class="card-title mb-0">Blog List</h4>             
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<div class="col-md-12">
								<a href="{{ url('/blog_add') }}" class="btn btn-success fa-pull-right btn-sm table_add_btn mx-2">Add New Blog</a>
							</div>
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th style="width:60px;">Sr. No.</th>
										<th style="width:270px;">Blog Title</th>
										<th style="width:270px;">Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>
											<div class="blog_dtls_row">
												<p class="limit_1"><b>Start making money from your fashion blog Start making money from your fashion blog Start making money from your fashion blog Start making money from your fashion blog</b></p> 
												<p class="limit_1">Author : Tester</p> 
												<p class="limit_1">Category : Video</p> 
												<p class="limit_1">Publish Date : 25 January 2021 6:00 PM</p> 
											</div>
										</td>
										<td>
										    <div class="limit_4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
										</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-success btn-sm list_view" data-bs-toggle="modal" data-bs-target="#blog_details_modal" data-bs-whatever="@mdo">
													<i class="mdi mdi-eye"></i>
												</a>  
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
												<a href="{{ url('/blog_edit') }}" class="btn btn-info btn-sm list_edit">
													<i class="mdi mdi-lead-pencil"></i>
												</a> 
												<span class="status">
													<label class="switch">
														<input class="switch-input" type="checkbox" checked="">
														<span class="switch-label" data-on="Active" data-off="Deactive"></span> 
														<span class="switch-handle"></span> 
													</label>
												</span>
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



<!-- Blog Details -->
<div class="modal fade" id="blog_details_modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="exampleModalLabel1">Blog Details</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
			    <form>
					<div class="mb-3 col-md-12">
						<div class="mb-3 col-md-6">
							<div class="upload_img">
								<img src="assets/admin/images/theme/no_images.png" class="fit_img" width="100px" height="100px">
							</div>
						</div>
					</div>
					<div class="blog_popup_details">
						<p>
							<strong>Start making money from your fashion</strong>
						</p>
						<p>Author : Tester</p>
						<p>Category : Video</p>
						<p>Publish Date : 25 January 2021 6:00 PM</p>
					</div>
					<table class="table table-bordered table_fix_width">
						<tbody>
							<tr>
								<th>Description</th>
								<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>

			<div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-weight-medium" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>






@stop