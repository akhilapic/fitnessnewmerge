@extends('layouts.admin')
@section('content')
 

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Manage Workout Plans</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Manage Workout Plans</li>
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
					    <h4 class="card-title mb-0">Manage Workout Plans List</h4>             
					</div>
					<div class="card-body">
						<div class="table-responsive">
					   <div class="">
							<!-- Alert Append Box -->
							<div class="result"></div>
						</div>
                        <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('workoutplansAll') }}">Selected Delete</button>
						
						    <div class="col-md-12">
							<!-- <a href="{{url('add_workout_plan')}}" class="btn btn-success fa-pull-right btn-sm table_add_btn mx-2" data-bs-toggle="modal" data-bs-target="#add_workout_plan_modal" data-bs-whatever="@mdo">Add New Workout Plan</a> -->
								<a href="{{url('add_workout_plan')}}" class="btn btn-success fa-pull-right btn-sm table_add_btn mx-2"  data-bs-whatever="@mdo">Add New Workout Plan</a>
							</div>
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr> 
                                        <th><input type="checkbox" id="master"></th>
										<th>Sr. No.</th>
										<th>Name</th>
										<th>Arabic Name</th>
										<th>Category</th>
										<th>Level</th>
										<th>Type</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($workoutplans as $item)
                                    <tr>
                                        <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->arabic_name }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        
                                        <td>{{ $item->level }}</td>
                                        <td>{{ $item->type }}</td>
                                   	
                                      
                                            <td>
                                                <div class="table_action">
                                                    <a href="{{ route('workout_plans_edit', $item->id) }}" data-id="{{ $item->id }}" class="btn btn-info btn-sm list_edit"  data-bs-whatever="@mdo">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </a> 
                                                    <a href="{{ route('workout_plans_del', $item->id) }}" onclick="return confirm('Are you sure delete this user？')" class="btn btn-danger btn-sm list_delete">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a> 
												
													<span class="status">
                                                        <label class="switch">
													<input data-id="{{$item->id}}" class="toggle-class1 switch-input statusChange" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" >
													<input class="switch-input" id="togBtn" type="checkbox" {{ $item->status ? 'checked' : '' }} value="{{$item->status}}">
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
<div class="modal fade" id="add_workout_plan_modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="exampleModalLabel1">Add Workout Plan</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
			    <form class=""  method="post" action="javascript:void(0)" id="add_subcategory">
                    @csrf
					<div class="mb-3 col-md-12">
						<label for="Name" class="control-label">Name:</label>
						<input type="text" id="Name" name="Name" class="form-control" id="recipient-name1">
					</div>

                    <div class="mb-3 col-md-12">
                        <label for="category" class="control-label">Select Category:</label>
                        <select  id="category" class="selectpicker form-control" data-live-search="true" name="category_id">
                          <option value="Guided meditation">Guided meditation</option>
                          <option value="Life coaching">Life coaching</option>
                          <option value="Explore sounds">Explore sounds</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="moods" class="control-label">Description:</label>
                       <textarea id="Description" class="form-control" rows="10" cols="10"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger text-danger font-weight-medium" data-bs-dismiss="modal">Close</button>
                        <button type="submit"  id="submit" name="submit" class="btn btn-success btn_submit">Add WorkoutPlan</button>
                    </div>
				</form>
			</div>

			
		</div>
	</div>
</div>

<div class="modal fade" id="edit_workout_plan_modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
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



<script>
 $('.statusChange').change(function() {
	host_url = "/development/fitness/";
		  var status = $(this).prop('checked') == true ? 1 : 0; 
		// alert(status)
		  var token = $("meta[name='csrf-token']").attr("content");
		  var workout_plans_id = $(this).data('id'); 
		  
		  $.ajax({
			  type: "POST",		
 			  cache: false,
			  dataType: "json",
			  url: host_url+'workout_plans_active_desctive/',
			  data: {'_token':  token,'status': status, 'workout_plans_id': workout_plans_id},
			  success: function(data){
			  	//location.reload();
				setTimeout(function(){
					jQuery('.result').html('');
				//	window.location = "/user_list";
				}, 1000);
			  }
		  });
	  });

// host_url = "/development/fitness-final/";
// 		var switchStatus = false;
// $("#togBtn").on('change', function() {
//     if ($(this).is(':checked')) {
//         switchStatus = $(this).is(':checked');
//     }
//     else {
//        switchStatus = $(this).is(':checked');
//    }

// 	jQuery.ajax({
// 			url: host_url+"workout_plans_active_desctive",
// 			type: "post",
// 			cache: false,
// 			data: {'switchStatus':switchStatus,'_token',{{csrf_token()}}},
// 			processData: false,
// 			contentType: false,
			
// 			success:function(data) { 
// 			var obj = JSON.parse(data);
// 			if(obj.status==true){
// 				jQuery('#name_error').html('');
// 				jQuery('#email_error').html('');
// 				jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> "+obj.message+"</div>");
// 				setTimeout(function(){
// 					jQuery('.result').html('');
// 					window.location = host_url+"manager_firness_trainers";
// 				}, 3000);
// 			}
// 			else{
// 				if(obj.status==false){
// 					jQuery('#name_error').html(obj.message);
// 					jQuery('#name_error').css("display", "block");
// 				}
// 			}
// 			}
// 		});
// });
</script>

@stop