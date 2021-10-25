@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">Edit User</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit User</li>
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
					<h4 class="card-title mb-0">Edit User</h4>
				</div>
				<div class="card-body min_height">
					<form name="user_edit" id="user_edit" method="post" action="javascript:void(0)">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="user_id" id="user_id" value="{{ $users->id }}">
						@csrf
					    <div class="row">
							<div class="">
								<!-- Alert Append Box -->
							<div class="result"></div>
							</div>
							<div class="mb-3 col-md-6">
								<label for="Name" class="control-label" >Name:</label>
								<input type="text" id="name" name="name" value="{{$users->name}}" class="form-control">
								
							</div>
							<div class="mb-3 col-md-6">
								<label for="Email" class="control-label">Email:</label>
								<input type="email" id="email" name="email" value="{{$users->email}}" class="form-control">
								{{-- allready exit error --}}
								<label id="email_error" class="error"></label>
							</div>
							<div class="mb-3 col-md-6">
								<label for="username" class="control-label">Mobile Number:</label>
								<input type="phone" id="phone" name="phone" value="{{$users->phone}}" class="form-control">
							{{-- allready exit error --}}
							<label id="name_error" class="error"></label>
							</div>
							<div class="mb-3 col-md-6">
								<label for="password" class="control-label">Language:</label>
								<select id="language" name="language" class="form-control">
									<option value=''>Select Language</option>
								<option value='English'@if($users->language == 'English')selected  @endif>English</option>
									<option value='Arabic'@if($users->language == 'Arabic')selected  @endif>Arabic</option>
								</select>
							</div>
							<!-- <div class="mb-3 col-md-6">
								<label for="username" class="control-label">Image:</label>
								<input type="file" id="iamge" name="image"  class="form-control">
								<img src="{{url('public/images/').$users->image}}" width="150" height="150"/>
							{{-- allready exit error --}}
							<label id="image_error" class="error"></label>
							</div> -->
						</div>
						<a type="button" href="{{ route('user_list') }}" class="btn btn-dark fa-pull-left mt-3">Back</a>
						<input type="submit" id="submit" value="Update" class="btn btn-success btn_submit fa-pull-right mt-3">
					</form>
				</div>
			</div>
		</div>
		
	</div>
<script>
	
</script>
@stop


