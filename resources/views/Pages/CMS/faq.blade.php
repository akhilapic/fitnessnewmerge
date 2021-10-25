@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Faq</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Faq</li>
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
					    <h4 class="card-title mb-0">Faq List</h4>             
					</div>
					<div class="card-body">
						<div class="table-responsive">
						
						    <!-- Alert Append Box -->
							<div class="alert alert-danger alert-dismissible text-white border-0 fade show" role="alert">
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
								<strong>Danger - </strong> A simple Danger alert
							</div> 
							
						    <div class="col-md-12">
								<a href="faq_add.php" class="btn btn-success fa-pull-right btn-sm table_add_btn mx-2">Add Faq</a>
							</div>
										
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th><div style="width:60px;">Sr. No.</div></th>
										<th style="width:200px;">Faq Question</th>
										<th>Faq Answer</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>What is Lorem Ipsum?</td>
										<td><div class="limit_4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div></td>
										<td>
											<div class="table_action">
												<a href="faq_edit.php" class="btn btn-info btn-sm list_edit">
													<i class="mdi mdi-lead-pencil"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
											</div>
										</td>
									</tr>
									<tr>
										<td>02</td>
										<td>What is Lorem Ipsum?</td>
										<td><div class="limit_4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div></td>
										<td>
											<div class="table_action">
												<a href="faq_edit.php" class="btn btn-info btn-sm list_edit">
													<i class="mdi mdi-lead-pencil"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm list_delete">
													<i class="mdi mdi-delete"></i>
												</a> 
											</div>
										</td>
									</tr>
									<tr>
										<td>03</td>
										<td>What is Lorem Ipsum?</td>
										<td><div class="limit_4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div></td>
										<td>
											<div class="table_action">
												<a href="faq_edit.php" class="btn btn-info btn-sm list_edit">
													<i class="mdi mdi-lead-pencil"></i>
												</a>
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

@stop