@extends('layouts.admin')
@section('content')


<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Category</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
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
					    <h4 class="card-title mb-0">Category List</h4>             
					</div>
					<div class="card-body">
						<div class="table-responsive">
						
						<div class="">
					
							<!-- Alert Append Box -->
							<div class="alert alert-danger alert-dismissible text-white border-0 fade show" role="alert">
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
								<strong>Danger - </strong> A simple Danger alert
							</div> 
							
						</div>
						
						
						    <div class="col-md-12">
								<a href="javascript:void(0);" class="btn btn-success fa-pull-right btn-sm table_add_btn mx-2" data-bs-toggle="modal" data-bs-target="#add_category_modal" data-bs-whatever="@mdo">Add New Category</a>
							</div>
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr. No.</th>
										<th>Category Name</th>
										<th>Category Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>
											<div class="blog_dtls_row">
												<p class="limit_1">Audio</p> 
											</div>
										</td>
										<td>
											<div class="upload_img">
												<img src="assets/admin/images/theme/no_images.png" class="fit_img" width="100px" height="60px">
											</div>
										</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-info btn-sm list_edit" data-bs-toggle="modal" data-bs-target="#edit_category_modal" data-bs-whatever="@mdo">
													<i class="mdi mdi-lead-pencil"></i>
												</a> 
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
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
									<tr>
										<td>02</td>
										<td>
											<div class="blog_dtls_row">
												<p class="limit_1">Video</p> 
											</div>
										</td>
										<td>
											<div class="upload_img">
												<img src="assets/admin/images/theme/no_images.png" class="fit_img" width="100px" height="60px">
											</div>
										</td>
										<td>
											<div class="table_action">
												<a href="javascript:void(0);" class="btn btn-info btn-sm list_edit" data-bs-toggle="modal" data-bs-target="#edit_category_modal" data-bs-whatever="@mdo">
													<i class="mdi mdi-lead-pencil"></i>
												</a> 
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
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


<!-- Add Blog Modal -->
<div class="modal fade" id="add_category_modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="exampleModalLabel1">Add Category</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
			    <form>
					<div class="mb-3 col-md-12">
						<label for="recipient-name" class="control-label">Category Name:</label>
						<input type="text" class="form-control" id="recipient-name1">
					</div>
					<div class="mb-3 col-md-12">
						<label for="recipient-name" class="control-label">Category Image <small class="text-danger">(Images Size : 800 X 800)</small></label>
						<input class="form-control" type="file" id="formFile">
						<div class="upload_img mt-2">
							<img src="assets/admin/images/theme/no_images.png" class="fit_img" width="100px" height="100px">
							<!--<i class="mdi mdi-close"></i>-->
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-weight-medium" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success btn_submit">Add Category</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="edit_category_modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="exampleModalLabel1">Edit Category</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
			    <form>
					<div class="mb-3 col-md-12">
						<label for="recipient-name" class="control-label">Category Name:</label>
						<input type="text" class="form-control" id="recipient-name1" value="Audio">
					</div>
					<div class="mb-3 col-md-12">
						<label for="recipient-name" class="control-label">Category Image <small class="text-danger">(Images Size : 800 X 800)</small></label>
						<input class="form-control" type="file" id="formFile">
						<div class="upload_img mt-2">
							<img src="assets/admin/images/theme/no_images.png" class="fit_img" width="100px" height="100px">
							<i class="mdi mdi-close"></i>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-weight-medium" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success btn_submit">Edit Category</button>
			</div>
		</div>
	</div>
</div>






@stop