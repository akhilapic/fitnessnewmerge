@extends('layouts.admin')
@section('content')


<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Manage Category</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Manage Category</li>
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
					    <h4 class="card-title mb-0">Manage Category List</h4>             
					</div>
					<div class="card-body">
						<div class="table-responsive">
					   <div class="">
							<!-- Alert Append Box -->
							<div class="result"></div>
						</div>
                        <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('categoryDeleteAll') }}">Selected Delete</button>
						
						    <div class="col-md-12">
								<a href="javascript:void(0);" class="btn btn-success fa-pull-right btn-sm table_add_btn mx-2" data-bs-toggle="modal" data-bs-target="#add_category_modal" data-bs-whatever="@mdo">Add New Category</a>
							</div>
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr> 
                                        <th><input type="checkbox" id="master"></th>
										<th>Sr. No.</th>
										<th>Sub Category</th>
										<th>Category</th>
                                        <th>Moods</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                   
                                    @foreach($subCategory as $item)
                                    <tr>
                                        <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->sub_category }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->moods }}</td>
                                            <td>
                                                <div class="table_action">
                                                    <a href="javascript:void(0);" data-id="{{ $item->id }}" class="btn btn-info btn-sm list_edit editBtn" data-bs-toggle="modal" data-bs-target="#edit_category_modal" data-bs-whatever="@mdo">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </a> 
                                                    <a href="{{ route('category_del', $item->id) }}" onclick="return confirm('Are you sure delete this category？')" class="btn btn-danger btn-sm list_delete">
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
                                            <meta name="_token" content="{{ csrf_token() }}">
                                    </tr>  
                                                      
                                @endforeach
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
			    <form class=""  method="post" action="javascript:void(0)" id="add_subcategory">
                    @csrf
					<div class="mb-3 col-md-12">
						<label for="sub_category" class="control-label">Sub-Category Name:</label>
						<input type="text" id="sub_category" name="sub_category" class="form-control" id="recipient-name1">
					</div>

                    <div class="mb-3 col-md-12">
                        <label for="category" class="control-label">Select Category:</label>
                        <select  id="category" class="selectpicker form-control" multiple data-live-search="true" name="category[]">
                          <option value="Guided meditation">Guided meditation</option>
                          <option value="Life coaching">Life coaching</option>
                          <option value="Explore sounds">Explore sounds</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="moods" class="control-label">Moods:</label>
                        <select id="moods" class="selectpicker form-control" multiple data-live-search="true" name="moods[]">
                          <option value="Happy">Happy</option>
                          <option value="Sad">Sad</option>
                          <option value="Anxious">Anxious</option>
                          <option value="Explore sounds">Dull</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger text-danger font-weight-medium" data-bs-dismiss="modal">Close</button>
                        <button type="submit"  id="submit" name="submit" class="btn btn-success btn_submit">Add Category</button>
                    </div>
				</form>
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
						<label for="sub_category" class="control-label">Category Name:</label>
						<input type="text" class="form-control" name="sub_category" id="sub_category" value="Audio">
					</div>
                    <div class="mb-3 col-md-12">
						<label for="sub_category" class="control-label">Category Name:</label>
						<input type="text" class="form-control" name="sub_category" id="sub_category" value="Audio">
					</div>
                    <div class="mb-3 col-md-12">
						<label for="sub_category" class="control-label">Category Name:</label>
						<input type="text" class="form-control" name="sub_category" id="sub_category" value="Audio">
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