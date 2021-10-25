<?php
	$base_url = URL::to('/');
?>
@include("inc/header");
<!-- main -->


<link rel="stylesheet" href="{{asset('/assets/build/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{asset('/assets/build/css/demo.css')}}">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
<main class="trainer_page trainer_page_margin">
    <section class="user_deatils">
        <div class="container">
            <div class="u_bg trainer_page_bg">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-9">
                        <div class="user_details_left d-flex align-items-center">
                            <div class="mr-4 user_img">
                                <span> <img src="{{url('/public/images/'.$fitnesstrainer->image)}}" alt=""> </span>
                                <i class="fii-edit-d"></i>
							</div>
                            <div class="user_name">
                                <h3 class="secondary font-26 fb mb-3">{{$fitnesstrainer->name}}</h3>
                                <h5 class="fm font-16">{{$fitnesstrainer->email}}</h5>
							</div>
						</div>
					</div>
                    <div class="col-md-4 col-sm-4 col-3">
                        <a href="{{url('/fitness_trainer_login_my_profile_view')}}" class="secondary"> <span
						class="fii-logut-blue-d ml-auto d-block trainer_lgout_icon text-right font-24"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
    <section class="dashbaord_menu">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="dash_menu_list">
						<!-- <span class="fii-more-d dash_menu_btn"></span> -->
                        <div class="dash_menu_btn d-sm-none d-block">
                            <span></span>
                            <span></span>
                            <span></span>
						</div>
                        <ul class="dash_menus_li triner_dash_menu">
                            <li>
                                <a href="javascript:void(0)" class="active">
                                    <span class="fii-user-d"></span>
                                    My Profile
								</a>
							</li>
                            <li>
                                <a href="{{url('Set-Availability')}}">
                                    <span class="fii-date-d"></span>
                                    Set Availability
								</a>
							</li>
                            <li>
                                <a href="booking.html">
                                    <span class="fii-booking-d"></span>
                                    Bookings
								</a>
							</li>
                            <li>
                                <a href="bank-account.html">
                                    <span class="fii-bank-d"></span>
                                    Bank Account
								</a>
							</li>
                            <li>
                                <a href="Transactions.html">
                                    <span class="fii-transaction-d"></span>
                                    Transactions
								</a>
							</li>
                            <li>
                                <a href="notification.html">
                                    <span class="fii-notification"></span>
                                    Notifications
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <section class="main_content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page_head align-items-center  d-flex justify-content-between">
                        <h4 class="secondary mb-0 fb">Edit Profile</h4>
                        <!-- <a href="#" class="btn-outline fm"> <span class="fii-edit-d"></span>Edit Profile</a> -->
					</div>
				</div>
                <div class="col-lg-8 col-md-12">
                    <div class="profile_tabs">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
							aria-labelledby="home-tab">
								@if (session('message'))
								<div class="alert alert-success" role="alert">
									<button type="button" class="close" data-dismiss="alert">×</button>
									{{ session('message') }}
								</div>
								@endif
                                <div class="row">
									@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									<form name="trainer_edit" id="trainer_edit" method="post" action="{{route('website_trainer_edit')}}" enctype="multipart/form-data">
										@csrf
										<input type="hidden" name="id" value="{{$fitnesstrainer->id}}"/>
										
										<div class="col-md-12 col-sm-12">
											<div class="profile_detials_left">
												<h5>Personal Info</h5>
												<!-- <form name="trainer_edit" id="trainer_edit" method="post" action="{{route('website_trainer_edit')}}" enctype="multipart/form-data"> -->
												
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Full Name <span> * </span></label>
                                                            <input type="text" placeholder="Name" name="name" value="{{$fitnesstrainer->name}}"
															class="form-control">
														</div>
                                                        @if ($errors->has('name'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('name') }}.</strong>
														</span>
                                                        @endif
													</div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Email <span> * </span></label>
                                                            <input type="text" placeholder="alvin156@domain.com" name ="email" value="{{$fitnesstrainer->email}}"
															class="form-control" readonly>
														</div>
                                                        @if ($errors->has('email'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('email') }}.</strong>
														</span>
                                                        @endif
													</div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Mobile Number <span> * </span></label>
                                                        
                                                        <div class="input-group">
                                                            <input type="hidden" id="country_code" value="{{$fitnesstrainer->country_code}}"  name="country_code"/>
                                                            <div class="phn_nub" style="width:100%;">
                    <input type="text" id="phone" name="mobile_number" value="{{$fitnesstrainer->phone}}"   class="form-control">
                                                                {{-- allready exit error --}}
                                                                <label id="name_error" class="error"></label>
																
															</div>
														</div>
                                                            @if ($errors->has('mobile_number'))
															<span class="invalid feedback"role="alert">
																<strong style="color:red;">{{ $errors->first('mobile_number') }}.</strong>
															</span>
															@endif
															
														</div>
													</div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Gender</label>
															
                                                            <select id="gender" name="gender" class="form-control">
                                                                <option value=''>Select Gender</option>
                                                                <option value='Male'  @if($fitnesstrainer->gender == 'Male') selected  @endif  >Male</option>
                                                                <option value='Female' @if($fitnesstrainer->gender == 'Female') selected  @endif >Female</option>
															</select>
                                                            <span class="fii-select-dropdown-d input_icon"></span>
														</div>
                                                        @if ($errors->has('gender'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('gender') }}.</strong>
														</span>
                                                        @endif
													</div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Specialization <span> * </span></label>
                                                            <div class="specialization_list">
                                                                <input type="text" id="specialization" name="specialization[]"  value="{{$fitnesstrainer->specialization}}"class="form-control">
															</div>
														</div>
                                                        @if ($errors->has('specialization'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('specialization') }}.</strong>
														</span>
                                                        @endif
													</div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Education</label>
                                                          	<input type="text" id="education" name="education" value="{{$fitnesstrainer->education}}" class="form-control">
                                                           
														</div>
													</div>
													 <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Date of Birth </label>
                                                          	<input type="date"  id="dob" name="dob" value="{{$fitnesstrainer->dob}}" class="form-control">
                                                           
														</div>
													</div>
													
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Location/Address <span> * </span></label>
                                                            <input type="text" placeholder="Address" name ="address" value="{{$fitnesstrainer->address}}"
															class="form-control">
														</div>
                                                        @if ($errors->has('address'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('address') }}.</strong>
														</span>
                                                        @endif
													</div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="bio_d d-flex align-items-center justify-content-between" >
                                                                <label for="">Bio  <span> * </span> </label>
                                                                <span class="limit_word">1500 Max Words</span>
															</div>
                                                            <textarea  type="text" cols="3" placeholder="Bio" name="bio"
															class="form-control pl-5">{{$fitnesstrainer->bio}}</textarea>
                                                            <i class="fii-edit-gray-d bio_edit" ></i>
														</div>
                                                        @if ($errors->has('bio'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('bio') }}.</strong>
														</span>
                                                        @endif
													</div>
												</div>
												<!-- </form> -->
											</div>
										</div>
										<div class="col-lg-12">
											<div class="edit_btn text-left mb-5">
												<input type="submit" class="btn btn-xs btn-primary mr-3" value="Save"/>
												<!-- <input class="btn btn-xs btn-primary mr-3 btn_submit_tranning" type="submit" value="Save"> -->
												<button class="btn btn-xs btn-primary-border"
												>Cancel</button>
											</div>
										</div>
									</form>
									<!-- @if (session('message'))
									<div class="alert alert-success" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										{{ session('message') }}
									</div>
									@endif
	                                <div class="row">
										@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
										@endif -->
						<form name="trainer_change_password" id="trainer_change_password" method="post" action="{{route('website_trainer_change_password')}}">
							@csrf
										<input type="hidden" name="id" value="{{$fitnesstrainer->id}}"/>
										<div class="col-md-12 col-sm-12">
											<div class="profile_detials_left">
												<h5>Change Password</h5>
												<!-- <form action="#"> -->
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group current_psd">
                                                            <label for="">Current Password</label>
                                                            <input type="password" placeholder="Enter Current Password" data-atr ="old_password" name="old_password" id="old_password"  
															class="form-control checkpasswordvalidation">
                                                            <span class="fa fa-eye input_icon" id="eye1" data-iconid ="1" data-name ="old_password"></span>
														</div>
														@if ($errors->has('old_password'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('old_password') }}.</strong>
														</span>
                                                        @endif
                                                        <span id="old_password_error" style="color:red"></span>
													</div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">New Password</label>
                                                            <input type="password" placeholder="Enter New Password"
															class="form-control checkpasswordvalidation" data-atr ="new_password" name="new_password" id="new_password">
                                                            <span class="fa fa-eye input_icon" id="eye2"  data-iconid ="2" data-name ="new_password"></span>
														</div>
                                                        @if ($errors->has('new_password'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('new_password') }}.</strong>
														</span>
                                                        @endif
                                                        <span id="new_password_error" style="color:red"></span>
													</div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Confirm Password</label>
                                                            <input type="password" name="confirm_password" id="confirm_password" data-atr ="confirm_password" placeholder="Confirm Password"
															class="form-control checkpasswordvalidation">
                                                            <span class="fa fa-eye input_icon"  id="eye3" data-iconid ="3" data-name ="confirm_password"></span>
														</div>
                                                        @if ($errors->has('confirm_password'))
                                                        <span class="invalid feedback"role="alert">
															<strong style="color:red;">{{ $errors->first('confirm_password') }}.</strong>
														</span>
                                                        @endif
                                                        <span id="confirm_password_error" style="color:red"></span>
													</div>
													
												</div>
												<!-- </form> -->
											</div>
											
										</div>
										<div class="col-lg-12">
											<div class="edit_btn text-left mb-5">
												<input type="submit" class="btn btn-xs btn-primary mr-3" value="Save"/>
												<!-- <input class="btn btn-xs btn-primary mr-3 btn_submit_tranning" type="submit" value="Save"> -->
												<button class="btn btn-xs btn-primary-border"
												>Cancel</button>
											</div>
										</div>
									<!-- //</div> -->
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


</body>
<!--<script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>-->
<!-- Scripts -->
<!--	<script src="{{asset('/assets/js/jquery.min.js')}}"></script>-->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="{{ asset('assets/js/customvalidation.js') }}"></script>


<!-- Bootstrap -->
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>

<!-- Select 2 Js -->
<script src="{{asset('/assets/js/select2.min.js')}}"></script>

<!-- Slick slider -->
<script src="{{asset('/assets/js/slick.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('/assets/js/custom.js')}}"></script>



<script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
<script type="text/javascript">
	$(function(){
		
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,}$/;
        $(".checkpasswordvalidation").keypress(function(){
			attr = $(this).attr("data-atr");
			pswd =  $(this).val();
			if (!regex.test(pswd)) {
				
				$("#"+attr+"_error").text("Password Must Be lest 8 charaters and one letter and one number and one capital letter and one special charater ");
				} else {
                $("#"+attr+"_error").text("");
			}
		});
		
        $("#new_password").keypress(function(){
			old_password = $("#old_password").val();
			if(!old_password)
			{
				$("#old_password_error").text("Please Enter Current Password");
				$("#old_password").focus();
				return false;
			}
			else{
				$("#old_password_error").text("");
				
				return true;
			}
			
		});
  //       $("#confirm_password2").keypress(function(){
		// 	confirm_password = $("#confirm_password").val();
		// 	old_password = $("#old_password").val();
		// 	new_password = $("#new_password").val();
		// 	if(old_password=='')
		// 	{
		// 		$("#old_password_error").text("Please Enter Current Password");
		// 		$("#old_password").focus();
		// 		return false;
		// 	}
		// 	else{
		// 		$("#old_password_error").text("");
		// 		if(new_password=='')
		// 		{
		// 			$("#new_password_error").text("Please Enter New Password");
		// 			$("#new_password").focus();
		// 			return false;
		// 		}
		// 		else 
		// 		{
					
		// 			$("#new_password_error").text("");
		// 			if(confirm_password=='')
		// 			{
		// 				$("#confirm_password_error").text("Please Enter Confirm Password");
		// 				$("#confirm_password").focus();
		// 				return false;
		// 			}
		// 			else if(confirm_password!=new_password)
		// 			{
		// 				$("#confirm_password_error").text("Password And Confirm Password Not Match Try Again");
		// 				$("#confirm_password").focus();
		// 				return false;
		// 			}
		// 			else{
		// 				$("#confirm_password_error").text("");
		// 				return true;
						
		// 			}
		// 		}
		// 	}
			
		// });
        
		// $("#confirm_password2"),keypress(function(){
		// 	old_password = $("#old_password").val();
		// 	new_password = $("#new_password").val();
		// 	if(old_password=='')
		// 	{
  //               $("#old_password_error").text("Please Enter Current Password");
  //               return false;
		// 	}
		// 	else if(new_password=='')
		// 	{
  //               $("#new_password_error").text("Please Enter New Password");
  //               return false;
		// 	}
		// 	else
		// 	{
  //               return true;
		// 	}
			
		// });
        // $(".checkpasswordvalidation").keypress(function(){
        //         pswd =  $(this).val();
        //         var pattern = /[_~\-!@#\$%\^&\*\(\)]+$/;
		
        //         attr = $(this).attr("data-atr");
		
        //          if (pswd.length < 8 ) {
        //                  $("#"+attr+"_error").text("Password Must Be lest 8 charaters");
        //                 return false;
        //         }
        //         //validate letter
        //         if ( pswd.match(/[A-z]/) ) {
        //                 $("#"+attr+"_error").text("Password at least one letter");
        //                 return false;
        //         }
		
        //         //validate capital letter
        //         if (pswd.match(/[A-Z]/) ) {
        //                 $("#"+attr+"_error").text("Password at least one capital letter");
        //                 return false;
        //         }
		
        //         //validate number
        //         if ( pswd.match(/\d/) ) {
        //                 $("#"+attr+"_error").text("Password at least one number");
        //                 return false;
        //         }
        //         if ( !pswd.match(pattern) ) {
        //                 $("#"+attr+"_error").text("Password at least one special charater");
        //                 return false;
        //         }
        // });
	})
	// $(function()}{
	//         //---------------website ---firness_trainer_edit-------------------------
	//         $("#trainer_edit").validate({
	//         rules: {
	// 	name:{required:true,},
	// 	gender:{required:true},
	// 	email: {required: true,email: true,},  
	// 	specialization:{required:true},
	// 	bio:{required:true},
	// 	mobile_number:{ 
	// 		required:true,
	// 		minlength:10,
	// 		maxlength:10}, 
	// 		address:{required:true
	// 		},
	// 		confirm_password : {
	// 			equalTo : "#new_password"
	// 		},
	// 	},
	// 	messages: {
	// 		name: {required: "Please enter name",},
	// 		email: {required: "Please enter valid email",email: "Please enter valid email",},   
	// 		gender: {required: "Please enter gender",},
	
	// 		specialization: {required: "Please enter specialization",},
	// 		bio:{required:"Please enter Bio"},
	// 		old_password: {required: "Please enter old password",},
	// 		new_password:{required:"please enter new password"},
	// 		confirm_password:{required:"please enter cpnform password"}
	// 	},
	// 	submitHandler: function(form) {
	// 	   var formData= new FormData(jQuery('#trainer_edit')[0]);
	// 	jQuery.ajax({
	// 			url: host_url+"website_trainer_edit",
	// 			type: "post",
	// 			cache: false,
	// 			data: formData,
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
	// 	}
	// });
	// });
	$(function(){
        $(".btn_submit_tranning").on("click", function(){
			country_code = $(".iti__selected-flag").attr("title");
			if (typeof country_code !== "undefined")
			{
				const myArr = country_code.split(": ");
                c_code = myArr[1];
                $("#country_code").val(c_code);
			}
			
			//   console.log($("#country_code").val());
			
		});
  //       $(".input_icon").on("click",function(){
		// 	type=$("input[name='"+$(this).data("name")+"']").attr("type");
		// 	iconid = $(this).data("iconid");
			
		// 		  if(type=='password')
		// 			{
		// 				$(".input_icon").removeClass("fa-eye");
		// 				$(".input_icon").addClass("fa-eye-slash");
		// 				$("input[name='"+$(this).data("name")+"']").attr("type",'text');
		// 			}
		// 			else
		// 			{
		// 				$(".input_icon").addClass("fa-eye");
		// 				$(".input_icon").removeClass("fa-eye-slash");
		// 				$("input[name='"+$(this).data("name")+"']").attr("type",'password');
		// 			}
        		
		  
		// });

		 $("#eye1").on("click",function(){
		 	
			type=$("input[name='"+$(this).data("name")+"']").attr("type");
			iconid = $(this).data("iconid");
		
				  if(type=='password')
					{
						$(this).removeClass("fa-eye");
						$(this).addClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'text');
					}
					else
					{
						$(this).addClass("fa-eye");
						$(this).removeClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'password');
					}
        		
		  
		});
		  $("#eye2").on("click",function(){
		 	
			type=$("input[name='"+$(this).data("name")+"']").attr("type");
			iconid = $(this).data("iconid");
		
				  if(type=='password')
					{
						$(this).removeClass("fa-eye");
						$(this).addClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'text');
					}
					else
					{
						$(this).addClass("fa-eye");
						$(this).removeClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'password');
					}
        		
		  
		});
		   $("#eye3").on("click",function(){
		 	
			type=$("input[name='"+$(this).data("name")+"']").attr("type");
			iconid = $(this).data("iconid");
				  if(type=='password')
					{
						$(this).removeClass("fa-eye");
						$(this).addClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'text');
					}
					else
					{
						$(this).addClass("fa-eye");
						$(this).removeClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'password');
					}
        		
		  
		});

	});</script>
	<script>
		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "{{asset('assets/build/js/utils.js')}}",
		});</script>
		<script type="text/javascript">
            var AmsifySuggestags;
            (function(factory) {
				if (typeof module === 'object' && typeof module.exports === 'object') {
					factory(require('jquery'), window, document);
                    } else {
					factory(jQuery, window, document);
				}
			}
            (function($, window, document, undefined) {
				
				AmsifySuggestags = function(selector) {
					this.selector = selector;
                    this.settings = {
						type              : 'bootstrap',
						tagLimit          : - 1,
						suggestions       : [],
						suggestMatch 	  : {},
						suggestionsAction : {timeout: - 1, minChars:2, minChange: - 1, delay:100, type: 'GET'},
						defaultTagClass   : '',
						classes           : [],
						backgrounds       : [],
						colors            : [],
						whiteList         : false,
						afterAdd          : {},
						afterRemove       : {},
						//My changes
						trimValue         : false,
						dashspaces        : false,
						lowercase         : false,
						selectOnHover     : true,
						triggerChange     : false,
						noSuggestionMsg   : '',
						showAllSuggestions: false,
						keepLastOnHoverTag: true,
						printValues 	  : true,
						checkSimilar 	  : true,
						delimiters 		  : [],
						showPlusAfter 	  : 0
					};
                    this.method = undefined;
                    this.name = null;
                    this.defaultLabel = 'Type here';
                    this.classes = {
						sTagsArea     : '.amsify-suggestags-area',
						inputArea     : '.amsify-suggestags-input-area',
						inputAreaDef  : '.amsify-suggestags-input-area-default',
						focus         : '.amsify-focus',
						sTagsInput    : '.amsify-suggestags-input',
						listArea      : '.amsify-suggestags-list',
						list          : '.amsify-list',
						listItem      : '.amsify-list-item',
						itemPad       : '.amsify-item-pad',
						inputType     : '.amsify-select-input',
						tagItem       : '.amsify-select-tag',
						plusItem 	  : '.amsify-plus-tag',
						colBg         : '.col-bg',
						removeTag     : '.amsify-remove-tag',
						readyToRemove : '.ready-to-remove',
						noSuggestion  : '.amsify-no-suggestion',
						showPlusBg 	  : '.show-plus-bg'
					};
                    this.selectors = {
						sTagsArea     : null,
						inputArea     : null,
						inputAreaDef  : null,
						sTagsInput    : null,
						listArea      : null,
						list          : null,
						listGroup     : null,
						listItem      : null,
						itemPad       : null,
						inputType     : null,
						plusTag 	  : null
					};
                    this.isRequired = false;
                    this.ajaxActive = false;
                    this.tagNames = [];
                    this.delayTimer = 0;
                    this.blurTgItems = null;
				};
				AmsifySuggestags.prototype = {
                    /**
						* Merging default settings with custom
						* @type {object}
						*/
						_settings : function(settings) {
							this.settings = $.extend(true, {}, this.settings, settings);
						},
						_setMethod : function(method) {
                            this.method = method;
						},
						_init : function() {
                            if (this.checkMethod()) {
								this.name = ($(this.selector).attr('name'))? $(this.selector).attr('name') + '_amsify': 'amsify_suggestags';
								this.createHTML();
								this.setEvents();
								$(this.selector).hide();
								this.setDefault();
							}
						},
						createHTML : function() {
                            var HTML = '<div class="' + this.classes.sTagsArea.substring(1) + '"></div>';
							this.selectors.sTagsArea = $(HTML).insertAfter(this.selector);
							var labelHTML = '<div class="' + this.classes.inputArea.substring(1) + '"></div>';
							this.selectors.inputArea = $(labelHTML).appendTo(this.selectors.sTagsArea);
							this.defaultLabel = ($(this.selector).attr('placeholder') !== undefined)? $(this.selector).attr('placeholder'): this.defaultLabel;
							var sTagsInput = '<input type="text" class="' + this.classes.sTagsInput.substring(1) + '" placeholder="' + this.defaultLabel + '">';
							this.selectors.sTagsInput = $(sTagsInput).appendTo(this.selectors.inputArea).attr('autocomplete', 'off');
							if ($(this.selector).attr('required')) {
								$(this.selector).removeAttr('required');
								this.isRequired = true;
								this.updateIsRequired();
							}
                            var listArea = '<div class="' + this.classes.listArea.substring(1) + '"></div>';
							this.selectors.listArea = $(listArea).appendTo(this.selectors.sTagsArea);
							$(this.selectors.listArea).width($(this.selectors.sTagsArea).width() - 3);
							var list = '<ul class="' + this.classes.list.substring(1) + '"></ul>';
							this.selectors.list = $(list).appendTo(this.selectors.listArea);
							this.updateSuggestionList();
							this.fixCSS();
						},
						updateIsRequired : function() {
                            if (this.isRequired) {
								if (this.tagNames.length){
									$(this.selectors.sTagsInput).removeAttr('required');
									} else {
									$(this.selectors.sTagsInput).attr('required', 'required');
								}
							}
						},
						updateSuggestionList : function() {
                            $(this.selectors.list).html('');
							$(this.createList()).appendTo(this.selectors.list);
						},
						setEvents : function() {
                            var _self = this;
							$(this.selectors.inputArea).attr('style', $(this.selector).attr('style')).addClass($(this.selector).attr('class'));
							this.setTagEvents();
							if (window !== undefined) {
								$(window).resize(function(){
									$(_self.selectors.listArea).width($(_self.selectors.sTagsArea).width() - 3);
								});
							}
                            this.setSuggestionsEvents();
							this.setRemoveEvent();
						},
						setTagEvents : function() {
                            var _self = this;
							$(this.selectors.sTagsInput).focus(function(){
								/**
									* Show all suggestions if setting set to true
									*/
									if (_self.settings.showAllSuggestions) {
										_self.suggestWhiteList('', 0, true);
									}
									$(this).closest(_self.classes.inputArea).addClass(_self.classes.focus.substring(1));
                                    if (_self.settings.type == 'materialize') {
										$(this).css({
											'border-bottom': 'none',
											'-webkit-box-shadow': 'none',
											'box-shadow': 'none',
										});
									}
									_self.checkPlusAfter();
								});
								$(this.selectors.sTagsInput).blur(function(){
									$(this).closest(_self.classes.inputArea).removeClass(_self.classes.focus.substring(1));
                                    if (!$(this).val()) {
										$(_self.selectors.listArea).hide();
									}
									_self.checkPlusAfter(true);
								});
								$(this.selectors.sTagsInput).keyup(function(e){
									var keycode = (e.keyCode ? e.keyCode : e.which);
                                    var key = '';
                                    if (e.key) {
										key = e.key;
										} else {
										if (keycode == '13') {
											key = 'Enter';
											} else if (keycode == '188') {
											key = ',';
										}
									}
									/**
										* Mobile browser fix
										*/
										if (keycode == 229 && key == 'Unidentified' && /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()) && $(this).val()[$(this).val().length - 1] == ',')
										{
											key = ',';
										}
										var isDelimiter = ($.inArray(key, _self.settings.delimiters) !== - 1)? true: false;
										if (key == 'Enter' || key == ',' || isDelimiter) {
											var value = $.trim($(this).val().replace(/,/g, ''));
											if (isDelimiter) {
												$.each(_self.settings.delimiters, function(dkey, delimiter) {
													value = $.trim(value.replace(delimiter, ''));
												});
											}
											$(this).val('');
											_self.addTag(_self.getValue(value));
											if (_self.settings.showAllSuggestions) {
												_self.suggestWhiteList('', 0, true);
											}
											} else if (keycode == '8' && !$(this).val()) {
											var removeClass = _self.classes.readyToRemove.substring(1);
											if ($(this).hasClass(removeClass)) {
												$item = $(this).closest(_self.classes.inputArea).find(_self.classes.tagItem + ':last');
												_self.removeTagByItem($item, false);
												} else {
												$(this).addClass(removeClass);
											}
											$(_self.selectors.listArea).hide();
											if (_self.settings.showAllSuggestions) {
												_self.suggestWhiteList('', 0, true);
											}
											} else if ((_self.settings.suggestions.length || _self.isSuggestAction()) && ($(this).val() || _self.settings.showAllSuggestions)) {
											$(this).removeClass(_self.classes.readyToRemove.substring(1));
											_self.processWhiteList(keycode, $(this).val());
										}
									});
                                    $(this.selectors.sTagsInput).keypress(function(e){
										var keycode = (e.keyCode ? e.keyCode : e.which);
										if (keycode == 13) {
											return false;
										}
									});
                                    $(this.selectors.sTagsArea).click(function(){
										$(_self.selectors.sTagsInput).focus();
									});
								},
								setSuggestionsEvents : function() {
									var _self = this;
                                    if (this.settings.selectOnHover) {
										$(this.selectors.listArea).find(this.classes.listItem).hover(function(){
											$(_self.selectors.listArea).find(_self.classes.listItem).removeClass('active');
											$(this).addClass('active');
											$(_self.selectors.sTagsInput).val($(this).text());
											}, function() {
											$(this).removeClass('active');
											if (!_self.settings.keepLastOnHoverTag) {
												$(_self.selectors.sTagsInput).val('');
											}
										});
									}
									$(this.selectors.listArea).find(this.classes.listItem).click(function(){
										_self.addTag($(this).data('val'));
										$(_self.selectors.sTagsInput).val('').focus();
									});
								},
								isSuggestAction : function() {
									return (this.settings.suggestionsAction && this.settings.suggestionsAction.url);
								},
								getTag : function(value) {
									if (this.settings.suggestions.length) {
										var tag = value;
										$.each(this.settings.suggestions, function(key, item){
											if (typeof item === 'object' && item.value == value) {
												tag = item.tag
												return false;
											}
											else if (item == value) {
												return false;
											}
										});
										return tag;
									}
									return value;
								},
								getValue : function(tag) {
									if (this.settings.suggestions.length) {
										var value = tag;
										var lower = tag.toString().toLowerCase();
										$.each(this.settings.suggestions, function(key, item){
											if (typeof item === 'object' && item.tag.toString().toLowerCase() == lower) {
												value = item.value
												return false;
											}
											else if (item.toString().toLowerCase() == lower) {
												return false;
											}
										});
										return value;
									}
									return tag;
								},
								processAjaxSuggestion : function(value, keycode) {
									var _self = this;
                                    var actionURL = this.getActionURL(this.settings.suggestionsAction.url);
                                    var params = {existingTags: this.tagNames, existing: this.settings.suggestions, term: value};
                                    var ajaxConfig = (this.settings.suggestionsAction.callbacks)? this.settings.suggestionsAction.callbacks: {};
                                    var ajaxFormParams = {
										url : actionURL,
									};
                                    if (this.settings.suggestionsAction.type == 'GET') {
										ajaxFormParams.url = ajaxFormParams.url + '?' + $.param(params);
										} else {
										ajaxFormParams.type = this.settings.suggestionsAction.type;
										ajaxFormParams.data = params;
									}
									if (this.settings.suggestionsAction.timeout !== - 1) {
										ajaxFormParams['timeout'] = this.settings.suggestionsAction.timeout * 1000;
									}
									if (this.settings.suggestionsAction.beforeSend !== undefined && typeof this.settings.suggestionsAction.beforeSend == "function") {
										ajaxFormParams['beforeSend'] = this.settings.suggestionsAction.beforeSend;
									}
									ajaxFormParams['success'] = function(data) {
										if (data && data.suggestions) {
											_self.settings.suggestions = $.merge(_self.settings.suggestions, data.suggestions);
											_self.settings.suggestions = _self.unique(_self.settings.suggestions);
											_self.updateSuggestionList();
											_self.setSuggestionsEvents();
											_self.suggestWhiteList(value, keycode);
										}
										if (_self.settings.suggestionsAction.success !== undefined && typeof _self.settings.suggestionsAction.success == "function") {
											_self.settings.suggestionsAction.success(data);
										}
									};
                                    if (this.settings.suggestionsAction.error !== undefined && typeof this.settings.suggestionsAction.error == "function") {
										ajaxFormParams['error'] = this.settings.suggestionsAction.error;
									}
									ajaxFormParams['complete'] = function(data) {
										if (_self.settings.suggestionsAction.complete !== undefined && typeof _self.settings.suggestionsAction.complete == "function") {
											_self.settings.suggestionsAction.complete(data);
										}
										_self.ajaxActive = false;
									};
                                    if (this.settings.suggestionsAction.dataType !== undefined && this.settings.suggestionsAction.dataType !== null) {
										ajaxFormParams['dataType'] = this.settings.suggestionsAction.dataType;
									}
									
									$.ajax(ajaxFormParams);
								},
								processWhiteList : function(keycode, value) {
									if (keycode == '40' || keycode == '38') {
										var type = (keycode == '40')? 'down': 'up';
										this.upDownSuggestion(value, type);
										} else {
										clearTimeout(this.delayTimer);
										var _self = this;
										this.delayTimer = setTimeout(function() {
											if (_self.isSuggestAction() && !_self.ajaxActive) {
												var minChars = _self.settings.suggestionsAction.minChars;
												var minChange = _self.settings.suggestionsAction.minChange;
												var lastSearch = _self.selectors.sTagsInput.attr('last-search');
												if (value.length >= minChars && (minChange === - 1 || !lastSearch || _self.similarity(lastSearch, value) * 100 <= minChange)) {
													_self.selectors.sTagsInput.attr('last-search', value);
													_self.ajaxActive = true;
													_self.processAjaxSuggestion(value, keycode);
												}
												} else {
												_self.suggestWhiteList(value, keycode);
											}
										}, this.settings.suggestionsAction.delay);
									}
								},
								upDownSuggestion : function(value, type) {
									var _self = this;
                                    var isActive = false;
                                    $(this.selectors.listArea).find(this.classes.listItem + ':visible').each(function(){
										if ($(this).hasClass('active')) {
											$(this).removeClass('active');
											if (type == 'up') {
												$item = $(this).prevAll(_self.classes.listItem + ':visible:first');
												} else {
												$item = $(this).nextAll(_self.classes.listItem + ':visible:first');
											}
											if ($item.length) {
												isActive = true;
												$item.addClass('active');
												$(_self.selectors.sTagsInput).val($item.text());
											}
											return false;
										}
									});
                                    if (!isActive) {
										var childItem = (type == 'down')? 'first': 'last';
										$item = $(this.selectors.listArea).find(this.classes.listItem + ':visible:' + childItem);
										if ($item.length) {
											$item.addClass('active');
											$(_self.selectors.sTagsInput).val($item.text());
										}
									}
								},
								suggestWhiteList : function(value, keycode, showAll) {
									var _self = this;
                                    var found = false;
                                    var all = (showAll)? true: false;
                                    var lower = value.toString().toLowerCase();
                                    $(this.selectors.listArea).find(_self.classes.noSuggestion).hide();
                                    var $list = $(this.selectors.listArea).find(this.classes.list);
                                    $list.find(this.classes.listItem).each(function(){
										var dataVal = $(this).data('val');
										if ($.isNumeric(dataVal)) {
											dataVal = (value.toString().indexOf('.') == - 1)? parseInt(dataVal): parseFloat(dataVal);
										}
										
										/**
											* Suggest item matching result
											*/
											var suggestItemResult = 0;
											if (_self.settings.suggestMatch && typeof _self.settings.suggestMatch == "function") {
												suggestItemResult = _self.settings.suggestMatch($(this).text(), value);
												} else {
												suggestItemResult = ~$(this).text().toString().toLowerCase().indexOf(lower);
											}
											
											if ((all || suggestItemResult) && $.inArray(dataVal, _self.tagNames) === - 1) {
												$(this).attr('data-show', 1);
												found = true;
												} else {
												$(this).removeAttr('data-show');
											}
											$(this).hide();
										});
										if (found) {
											/**
												* Sorting the suggestions
												*/
												$dataShow = $list.find(this.classes.listItem + '[data-show]');
												if (lower) {
													$dataShow.sort(function(a, b) {
														return value.localeCompare($(a).text().toString());
													}).appendTo($list);
													} else {
													$dataShow.sort(function(a, b) {
														return $(a).text().toString().localeCompare($(b).text().toString());
													}).appendTo($list);
												}
												$dataShow.each(function(){
													$(this).show();
												});
												/**
													* If only one item left in whitelist suggestions
													*/
													$item = $(this.selectors.listArea).find(this.classes.listItem + ':visible');
													if ($item.length == 1 && keycode != '8') {
														if ((this.settings.whiteList && this.isSimilarText(value.toLowerCase(), $item.text().toLowerCase(), 40)) || this.isSimilarText(value.toLowerCase(), $item.text().toLowerCase(), 60)) {
															$item.addClass('active');
															$(this.selectors.sTagsInput).val($item.text());
														}
														} else {
														$item.removeClass('active');
													}
													
													$(this.selectors.listArea).show();
													} else {
													if (value && _self.settings.noSuggestionMsg) {
														$(this.selectors.listArea).find(_self.classes.listItem).hide();
														$(this.selectors.listArea).find(_self.classes.noSuggestion).show();
														} else {
														$(this.selectors.listArea).hide();
													}
												}
											},
											setDefault : function() {
												var _self = this;
												var items = $(this.selector).val().split(',');
												if (items.length) {
													$.each(items, function(index, item){
														_self.addTag($.trim(item));
													});
												}
											},
											setRemoveEvent: function() {
												var _self = this;
												$(this.selectors.inputArea).find(this.classes.removeTag).click(function(e){
													e.stopImmediatePropagation();
													$tagItem = $(this).closest(_self.classes.tagItem);
													_self.removeTagByItem($tagItem, false);
												});
											},
											createList : function() {
												var _self = this;
												var listHTML = '';
												$.each(this.settings.suggestions, function(index, item){
													var value = '';
													var tag = '';
													if (typeof item === 'object') {
														value = item.value
														tag = item.tag
														} else {
														value = item;
														tag = item;
													}
													listHTML += '<li class="' + _self.classes.listItem.substring(1) + '" data-val="' + value + '">' + tag + '</li>';
												});
												if (_self.settings.noSuggestionMsg) {
													listHTML += '<li class="' + _self.classes.noSuggestion.substring(1) + '">' + _self.settings.noSuggestionMsg + '</li>';
												}
												return listHTML;
											},
											addTag : function(value, animate = true) {
												if (!value) {
													return;
												}
												// Trim value
												if (typeof value === "string" && this.settings.trimValue) {
													value = $.trim(value);
												}
												
												// lowercase and dash
												if (typeof value === "string" && this.settings.lowercase && this.settings.dashspaces) {
													value = value.replace(/\s+/g, '-').toLowerCase();
												}
												else if (typeof value === "string" && this.settings.lowercase){
													value = value.toLowerCase();
												}
												else if (typeof value === "string" && this.settings.dashspaces){
													value = value.replace(/\s+/g, '-');
												}
												
												var html = '<span class="' + this.classes.tagItem.substring(1) + '" data-val="' + value + '">' + this.getTag(value) + ' ' + this.setIcon() + '</span>';
												$item = $(html).insertBefore($(this.selectors.sTagsInput));
												if (this.settings.defaultTagClass) {
													$item.addClass(this.settings.defaultTagClass);
												}
												if (this.settings.tagLimit != - 1 && this.settings.tagLimit > 0 && this.tagNames.length >= this.settings.tagLimit) {
													this.animateRemove($item, animate);
													if (animate) {
														this.flashItem(value);
													}
													return false;
												}
												var itemKey = this.getItemKey(value);
												if (this.settings.whiteList && itemKey === - 1) {
													this.animateRemove($item, animate);
													if (animate) {
														this.flashItem(value, itemKey);
													}
													return false;
												}
												if (this.isPresent(value)) {
													this.animateRemove($item, animate);
													if (animate) {
														this.flashItem(value, itemKey);
													}
													} else {
													this.customStylings($item, itemKey);
													var dataVal = value;
													if ($.isNumeric(dataVal)) {
														dataVal = (value.toString().indexOf('.') == - 1)? parseInt(dataVal): parseFloat(dataVal);
													}
													this.tagNames.push(dataVal);
													this.setRemoveEvent();
													this.setInputValue();
													if (this.settings.afterAdd && typeof this.settings.afterAdd == "function") {
														this.settings.afterAdd(value);
													}
												}
												$(this.selector).trigger('suggestags.add', [value]);
												$(this.selector).trigger('suggestags.change');
												if (this.settings.triggerChange) {
													$(this.selector).trigger('change');
												}
												$(this.selectors.listArea).find(this.classes.listItem).removeClass('active');
												$(this.selectors.listArea).hide();
												$(this.selectors.sTagsInput).removeClass(this.classes.readyToRemove.substring(1));
												this.checkPlusAfter();
											},
											getItemKey : function(value) {
												var itemKey = - 1
												var _self = this;
												if (this.settings.suggestions.length) {
													var lower = value.toString().toLowerCase();
													$.each(this.settings.suggestions, function(key, item){
														if (typeof item === 'object') {
															if (item.value.toString().toLowerCase() == lower) {
																itemKey = key;
																if (item.class !== undefined && _self.settings.classes[key] === undefined) {
																	_self.settings.classes[key] = item.class;
																}
																if (item.background !== undefined && _self.settings.backgrounds[key] === undefined) {
																	_self.settings.backgrounds[key] = item.background;
																}
																if (item.color !== undefined && _self.settings.colors[key] === undefined) {
																	_self.settings.colors[key] = item.color;
																}
																return false;
															}
															} else if (item.toString().toLowerCase() == lower) {
															itemKey = key;
															return false;
														}
													});
												}
												return itemKey;
											},
											isPresent : function(value) {
												var present = false;
												$.each(this.tagNames, function(index, tag){
													if (value.toString().toLowerCase() == tag.toString().toLowerCase()) {
														present = true;
														return false;
													}
												});
												return present;
											},
											customStylings : function(item, key) {
												var isCustom = false;
												if (this.settings.classes[key]) {
													isCustom = true;
													$(item).addClass(this.settings.classes[key]);
												}
												if (this.settings.backgrounds[key]) {
													isCustom = true;
													$(item).css('background', this.settings.backgrounds[key]);
												}
												if (this.settings.colors[key]) {
													isCustom = true;
													$(item).css('color', this.settings.colors[key]);
												}
												if (!isCustom) {
													$(item).addClass(this.classes.colBg.substring(1));
												}
											},
											removeTag: function(value, animate = true) {
												var _self = this;
												$findTags = $(this.selectors.inputArea).find('[data-val="' + value + '"]');
												if ($findTags.length) {
													$findTags.each(function(){
														_self.removeTagByItem(this, animate);
													});
												}
											},
											removeTagByItem : function(item, animate) {
												this.tagNames.splice($(item).index(), 1);
												this.animateRemove(item, animate);
												this.setInputValue();
												$(this.selector).trigger('suggestags.remove', [$(item).attr('data-val')]);
												$(this.selector).trigger('suggestags.change');
												if (this.settings.triggerChange) {
													$(this.selector).trigger('change');
												}
												if (this.settings.afterRemove && typeof this.settings.afterRemove == "function") {
													this.settings.afterRemove($(item).attr('data-val'));
												}
												$(this.selectors.sTagsInput).removeClass(this.classes.readyToRemove.substring(1));
												this.checkPlusAfter();
											},
											animateRemove : function(item, animate) {
												$(item).addClass('disabled');
												if (animate) {
													setTimeout(function(){
														$(item).slideUp();
														setTimeout(function(){
															$(item).remove();
														}, 500);
													}, 500);
													} else {
													$(item).remove();
												}
											},
											flashItem : function(value, itemKey) {
												$tagItem = '';
												value = value.toString().toLowerCase();
												$(this.selectors.sTagsArea).find(this.classes.tagItem).each(function(){
													var tagName = $.trim($(this).attr('data-val'));
													if (value == tagName.toString().toLowerCase()) {
														$tagItem = $(this);
														return false;
													}
												});
												if ($tagItem) {
													background = (this.settings.backgrounds[itemKey] !== undefined)? this.settings.backgrounds[itemKey]: null;
													if (background !== null) {
														$tagItem.css('background', '');
													}
													$tagItem.addClass('flash');
													setTimeout(function(){
														$tagItem.removeClass('flash');
														if (background !== null) {
															$tagItem.css('background', background);
														}
													}, 1500, $tagItem);
												}
											},
											setIcon : function() {
												var removeClass = this.classes.removeTag.substring(1);
												if (this.settings.type == 'bootstrap') {
													return '<span class="fa fa-times ' + removeClass + '"></span>';
													} else if (this.settings.type == 'materialize') {
													return '<i class="material-icons right ' + removeClass + '">clear</i>';
													} else {
													return '<b class="' + removeClass + '">&#10006;</b>';
												}
											},
											setInputValue: function() {
												this.updateIsRequired();
												$(this.selector).val(this.tagNames.join(','));
												if (this.settings.printValues) {
													this.printValues();
												}
											},
											fixCSS : function() {
												if (this.settings.type == 'amsify') {
													$(this.selectors.inputArea).addClass(this.classes.inputAreaDef.substring(1)).css({'padding': '5px 5px'});
													} else if (this.settings.type == 'materialize') {
													$(this.selectors.inputArea).addClass(this.classes.inputAreaDef.substring(1)).css({'height': 'auto', 'padding': '5px 5px'});
													$(this.selectors.sTagsInput).css({'margin': '0', 'height': 'auto'});
												}
											},
											printValues : function() {
												console.info(this.tagNames, $(this.selector).val());
											},
											checkMethod : function() {
												$findTags = $(this.selector).next(this.classes.sTagsArea);
												if ($findTags.length) {
													$findTags.remove();
												}
												$(this.selector).show();
												if (typeof this.method !== undefined && this.method == 'destroy') {
													return false;
													} else {
													return true;
												}
											},
											refresh : function() {
												this._setMethod('refresh');
												this._init();
											},
											destroy : function() {
												this._setMethod('destroy');
												this._init();
											},
											getActionURL : function(urlString) {
												var URL = '';
												if (window !== undefined) {
													URL = window.location.protocol + '//' + window.location.host;
												}
												if (this.isAbsoluteURL(urlString)) {
													URL = urlString;
													} else {
													URL += '/' + urlString.replace(/^\/|\/$/g, '');
												}
												return URL;
											},
											isAbsoluteURL : function(urlString) {
												var regexURL = new RegExp('^(?:[a-z]+:)?//', 'i');
												return (regexURL.test(urlString))? true: false;
											},
											unique: function(list) {
												var result = [];
												var _self = this;
												$.each(list, function(i, e) {
													if (typeof e === 'object') {
														if (!_self.objectInArray(e, result)) {
															result.push(e);
														}
														} else {
														if ($.inArray(e, result) == - 1) {
															result.push(e);
														}
													}
												});
												return result;
											},
											objectInArray : function(element, result) {
												if (result.length) {
													var present = false;
													$.each(result, function(i, e) {
														if (typeof e === 'object') {
															if (e.value == element.value) {
																present = true;
																return false;
															}
															} else {
															if (e == element.value) {
																present = true;
																return false;
															}
														}
													});
													return present;
													} else {
													return false;
												}
											},
											isSimilarText: function(str1, str2, perc) {
												if (!this.settings.checkSimilar) {
													return false;
												}
												var percent = this.similarity(str1, str2);
												return (percent * 100 >= perc)? true: false;
											},
											similarity: function(s1, s2) {
												var longer = s1;
												var shorter = s2;
												if (s1.length < s2.length) {
													longer = s2;
													shorter = s1;
												}
												var longerLength = longer.length;
												if (longerLength == 0) {
													return 1.0;
												}
												return (longerLength - this.editDistance(longer, shorter)) / parseFloat(longerLength);
											},
											editDistance: function(s1, s2) {
												s1 = s1.toLowerCase();
												s2 = s2.toLowerCase();
												var costs = new Array();
												for (var i = 0; i <= s1.length; i++) {
													var lastValue = i;
													for (var j = 0; j <= s2.length; j++) {
														if (i == 0) {
															costs[j] = j;
															} else {
															if (j > 0) {
																var newValue = costs[j - 1];
																if (s1.charAt(i - 1) != s2.charAt(j - 1)) {
																	newValue = Math.min(Math.min(newValue, lastValue), costs[j]) + 1;
																}
																costs[j - 1] = lastValue;
																lastValue = newValue;
															}
														}
													}
													if (i > 0)
													costs[s2.length] = lastValue;
												}
												return costs[s2.length];
											},
											checkPlusAfter : function(fromBlur) {
												if (this.settings.showPlusAfter > 0) {
													if (this.tagNames.length > this.settings.showPlusAfter) {
														var _self = this;
														var plusNumber = this.tagNames.length - this.settings.showPlusAfter;
														if (!this.selectors.plusTag) {
															var html = '<span class="' + this.classes.plusItem.substring(1) + '"></span>';
															this.selectors.plusTag = $(html).appendTo(this.selectors.inputArea);
															$(this.selectors.plusTag).addClass(this.classes.showPlusBg.substring(1));
															/**
																* Show input after focus on input area
																*/
																$(this.selectors.inputArea).click(function(){
																	$(_self.selectors.sTagsInput).show();
																});
															}
															$(this.selectors.plusTag).text('+ ' + plusNumber);
															$tagItems = $(this.selectors.inputArea).find(this.classes.tagItem);
															$tagItems.show();
															if ($(this.selectors.inputArea).hasClass(this.classes.focus.substring(1))){
																$(this.selectors.plusTag).hide();
																} else {
																if (fromBlur && !this.blurTgItems) {
																	this.blurTgItems = $tagItems;
																	setTimeout(function(){
																		if (_self.blurTgItems) {
																			_self.blurTgItems.slice(_self.settings.showPlusAfter).hide();
																		}
																	}, 200);
																	} else {
																	this.blurTgItems = null;
																	$tagItems.slice(this.settings.showPlusAfter).hide();
																}
																$(this.selectors.sTagsInput).hide();
																$(this.selectors.plusTag).show();
															}
															} else if (this.selectors.plusTag) {
															$(this.selectors.inputArea).find(this.classes.tagItem).show();
															$(this.selectors.plusTag).hide();
														}
													}
												}
											};
											$.fn.amsifySuggestags = function(options, method) {
												return this.each(function() {
													var amsifySuggestags = new AmsifySuggestags(this);
													amsifySuggestags._settings(options);
													amsifySuggestags._setMethod(method);
													amsifySuggestags._init();
												});
											};
										}));
										$('input[id="specialization"]').amsifySuggestags();
										
										
									</script>
									<style>
										
										
										.amsify-suggestags-area
										.amsify-suggestags-input-area {
										text-align: left;
										height: auto;
										}
										
										.amsify-suggestags-area
										.amsify-suggestags-input-area:hover {
										cursor: text;
										}
										
										.amsify-suggestags-area
										.amsify-suggestags-input-area
										.amsify-suggestags-input {
										max-width: 200px;
										padding: 0px 4px;
										border: 0;
										}
										
										.amsify-suggestags-area
										.amsify-suggestags-input-area
										.amsify-suggestags-input:focus {
										outline: 0;
										}
										span.amsify-select-tag {
										background: #e0e0e0;
										padding: 4px 8px;
										display: inline-block;
										border-radius: 5px;
										margin-right: 5px;
										}
										span.amsify-select-tag .amsify-remove-tag {
										font-size: 12px;
										margin-left: 3px;
										cursor: pointer;
										}
										
										
										
										.profile_detials_left h5 {
										color: #a8a5a5;
										font-weight: 500;
										font-size: 1.125rem;
										}
										.profile_detials_left {
										margin-top: 15px;
										}
										.profile_detials_left .form-group label {
										font-size: 1rem;
										color: #000000;
										font-weight: 400;
										}
										.profile_detials_left .form-group .form-control {
										border: solid 1px #dfe6f1;
										border-radius: 4px;
										height: 3.375rem;
										color: #565c63;
										-webkit-appearance: none;
										padding: 0.625rem 1rem;
										padding-right: 3rem;
										}
										.profile_detials_left .form-group .form-control::-webkit-input-placeholder {
										color: #565c63;
										}
										.profile_detials_left .form-group .form-control::-moz-placeholder {
										color: #565c63;
										}
										.profile_detials_left .form-group .form-control:-ms-input-placeholder {
										color: #565c63;
										}
										.profile_detials_left .form-group .form-control::-ms-input-placeholder {
										color: #565c63;
										}
										.profile_detials_left .form-group .form-control::placeholder {
										color: #565c63;
										}
										.profile_detials_left .form-group select {
										-webkit-appearance: none;
										}
										.profile_detials_left .form-group .input_icon {
										position: absolute;
										right: 0;
										top: 52px;
										right: 15px;
										font-size: 9px;
										}
										.phn_nub .iti.iti--allow-dropdown {
                                            width: 100%;
                                        }
                                        .phn_nub .iti.iti--allow-dropdown input#phone {
                                            padding-left: 60px;
                                        }
.profile_detials_left .specialization_list .form-control {
    background: transparent;
}
.profile_detials_left .specialization_list {
    border: solid 1px #dfe6f1;
    border-radius: 4px;
    min-height: 3.375rem;
    color: #565c63;
    -webkit-appearance: none;
    padding: 0.625rem 1rem;
    padding-right: 3rem;
    background: #f7f7f7;
}
.profile_detials_left .specialization_list .form-control {
    background: transparent;
    padding: 0;
    border: 0;
    height: auto;
}
.profile_detials_left .specialization_list .form-control input.amsify-suggestags-input {
   background: transparent;
    height: 20px;
    margin-top: 5px;
}
.trainer_page .specialization_list span {
    width: auto;
    float: left;
}
.trainer_page .specialization_list span span.fa.fa-times.amsify-remove-tag {
    padding: 0;
    margin: 0px 0px 0px 8px;
}
.amsify-suggestags-area .amsify-suggestags-input-area .amsify-suggestags-input {
    max-width: 120px;
}
.trainer_page .specialization_list span {
    width: auto;
    float: left;
    margin: 0px 5px 5px 0px;
}
.profile_detials_left .form-group .input_icon {
    font-size: 16px;
    color: #9f9a9a;
    top: 47px;
    cursor: pointer;
}
										
									</style>									