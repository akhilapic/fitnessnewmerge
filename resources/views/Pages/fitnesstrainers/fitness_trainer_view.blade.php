@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Fitness Trainer Details</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Fitness Trainer Details</li>
			</ol>
		</div>
	</div>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
		
		<div class="col-12">
			<div class="card">
				<div class="border-bottom title-part-padding">
					<h4 class="card-title mb-0">Fitness Trainer Details</h4>
				</div>
				<div class="card-body min_height">
					<form name="user_add" id="user_add" method="post" action="javascript:void(0)" enctype="multipart/form-data">
						@csrf
					    <div class="row">
							<div class="">
								<!-- Alert Append Box -->
							<div class="result"></div>
							</div>
							<div class="mb-3 col-md-4">
								<label for="Name" class="control-label" >Name:</label>
								<input type="text" id="name" value="{{$fitnesstrainer->name}}" readonly="true" name="name" class="form-control">
							</div>
							<div class="mb-3 col-md-4">
								<label for="Email" class="control-label">Email:</label>
								<input type="email" id="email" name="email" value="{{$fitnesstrainer->email}}" readonly="true" class="form-control">
								{{-- allready exit error --}}
								<label id="email_error" class="error"></label>
							</div>
							<div class="mb-3 col-md-4">
								<label for="Email" class="control-label">Password:</label>
								<input type="password" id="password" name="password" value="{{$fitnesstrainer->password}}" readonly="true" class="form-control">
								{{-- allready exit error --}}
								<label id="email_error" class="error"></label>
							</div>
							<div class="mb-3 col-md-4">
								<label for="username" class="control-label">Mobile Number:</label>
								<input type="text" id="mobile_number" name="phone" value="{{$fitnesstrainer->country_code}} {{$fitnesstrainer->phone}}" readonly="true"  class="form-control">
								{{-- allready exit error --}}
								<label id="name_error" class="error"></label>
							</div>
                           
							<div class="mb-3 col-md-4">
								<label for="password" class="control-label">Gender:</label>
								<input type="text" id="gender" name="gender"  readonly="true" value="{{$fitnesstrainer->gender}}"    class="form-control">
							</div>

							<div class="mb-3 col-md-4">
								<label for="password" class="control-label">Specialization:</label>
								<input type="text" id="gender" name="gender"  readonly="true" value="{{$fitnesstrainer->specialization}}"    class="form-control">
							</div>
							<div class="mb-3 col-md-4">
								<label for="password" class="control-label">Date Of Birth:</label>
								<input type="text" id="gender" name="gender"  readonly="true" value="{{$fitnesstrainer->dob}}"    class="form-control">
							</div>
							<div class="mb-3 col-md-4">
								<label for="password" class="control-label">Education::</label>
								<input type="text" id="gender" name="gender"  readonly="true" value="{{$fitnesstrainer->education}}"    class="form-control">
							</div>
							<div class="mb-3 col-md-4">
								<label for="password" class="control-label">Bio:</label>
								<input type="text" id="gender" name="gender"  readonly="true" value="{{$fitnesstrainer->bio}}"    class="form-control">
							</div>
							<div class="mb-3 col-md-6">
								<label for="password" class="control-label">Location/Address:</label>
								<textarea rows="3" cols="5" class="form-control" readonly="true">{{$fitnesstrainer->address}}</textarea>
							
							</div>
							<div class="mb-3 col-md-6">
								<label for="username" class="control-label">Upload Document:</label>
								<!-- <img src="{{url('public/upload_doc/'.$fitnesstrainer->upload_doc)}}" height="150" width="100" class="form-control" /> -->
								<br>
									<label class="control-label">{{$fitnesstrainer->upload_doc}}</label>
							</div>
						</div>
						<a type="button" href="{{ url('manager_firness_trainers') }}" class="btn btn-dark fa-pull-left mt-3">Back</a>
						<!-- <input type="submit" id="submit" value="Add" class="btn btn-success btn_submit fa-pull-right mt-3"> -->
					</form>
				</div>
			</div>
		</div>
		
	</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

@stop


