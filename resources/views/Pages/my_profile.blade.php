@extends('layouts.admin')
@section('content')


<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h4 class="text-themecolor mb-0">My Profile</h4>
		</div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent fa-pull-right">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">My Profile</li>
			</ol>
		</div>
	</div>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
		<!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> 
								    <div class="profile_img">
									    <img src="assets/admin/images/users/5.jpg" class="rounded-circle" />
										<a href="javascript:void(0);" class="camera"><i class="mdi mdi-camera"></i></a>
									</div>
                                    
                                    <h4 class="card-title mt-2">{{Session::get('name')}}</h4>
                                    <h6 class="card-subtitle">{{Session::get('email')}}</h6>
                                    <!--<div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-weight-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-weight-medium">54</font></a></div>
                                    </div>-->
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> 
							    <small class="text-muted">Email address </small>
                                <h6>{{Session::get('email')}}</h6> 
								<!--<small class="text-muted pt-4 db">Phone</small>-->
        <!--                        <h6>{{Session::get('phone')}}</h6> -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-setting-tab" data-bs-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Update Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#change-password-tab" data-bs-toggle="pill" href="#change-password-tab" role="tab" aria-controls="change-password-tab" aria-selected="false">Change Password</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
							    <div class="tab-pane show active" id="previous-month" role="tabpanel">
                                    <div class="card-body">
									
									    <!-- Alert Append Box -->
										<!--<div class="alert alert-danger alert-dismissible text-white border-0 fade show" role="alert">-->
										<!--	<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>-->
										<!--	<strong>Danger - </strong> A simple Danger alert-->
										<!--</div> -->
										 <div class="result" style="color:red"></div>
                                          <form class="form-horizontal form-material" id="update_admin_profile" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                   <input type="hidden" name="id" value="{{Session::get('id')}}">
                                                      <input type="hidden" name="email" value="{{Session::get('email')}}">
                                                    <input type="text" placeholder="Full Name" class="form-control form-control-line" name="name" value="{{Session::get('name')}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="Email" class="form-control form-control-line" name="email" id="example-email" value="{{Session::get('email')}}" disabled>
                                                </div>
                                            </div>
                                            <!--<div class="mb-3">-->
                                            <!--    <label class="col-md-12">Phone Number</label>-->
                                            <!--    <div class="col-md-12">-->
                                            <!--        <input type="number" value="{{Session::get('phone')}}" class="form-control form-control-line">-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="mb-3">
                                                <div class="col-sm-12">
                                                      <input type="submit"  value="Update Profile" class="btn btn-success btn_submit fa-pull-left mt-3">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
							   
							    <div class="tab-pane fade" id="change-password-tab" role="tabpanel" aria-labelledby="change-password-tab">
                                    <div class="card-body">
									
									    <!-- Alert Append Box -->
                                        <div class="result" style="color:red"></div>
										 
										
                                        <form class="form-horizontal form-material" id="user_change_password" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <input type="hidden" name="id" value="{{Session::get('user_id')}}"/>
                                            <div class="mb-3">
                                                <label class="col-md-12">Old Password</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="**********" name ="old_password" id ="old_password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-12">New Password</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="**********" id="new_password" name ="new_password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-md-12">Confirm Password</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="**********"  name ="confirm_password" id ="confirm_password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="col-lg-12">
                                                <input type="submit" id="admin_change_psd" value="Change Password" class="btn btn-success btn_submit fa-pull-left mt-3">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            
							</div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
	</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->





@stop