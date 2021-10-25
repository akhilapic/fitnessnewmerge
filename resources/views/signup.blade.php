<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{url('/assets/images/favicon.ico')}}" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

    <title> Fitness Point </title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Custom -->
	<!-- <script src="{{url('/assets/js/jquery.min.js')}}"></script> -->
	<script src="{{asset('assets/js/customvalidation.js')}}"></script>
	<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/build/css/intlTelInput.css')}}">
  <link rel="stylesheet" href="{{asset('assets/build/css/demo.css')}}">
</head>

<body>
	<!-- Sign in Banner -->
	<section class="signin-banner signup-banner">
		<div class="signinheader position-relative">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="{{url('/home')}}" class="logo"><img src="{{asset('/assets/images/signin-log.png')}}" alt=""></a>

					<a href="{{url('/home')}}" class="f-16 fr white mb-0 d-inline-flex aic"><img class="mr-2" src="{{asset('/assets/images/close.svg')}}" alt="">Close</a>
				</div>
			</div>
		</div>

		<div class="signin-content position-relative">
			<div class="container">
				<div class="signin-content-col">
					<div>
						<h2 class="title f-46 fm white text-center">Sign Up</h2>
						<p class="f-18 fr white mb-0 text-center">Create Your Account</p>
						<div class="signin-field-block d-sm-flex d-block">
							<div class="col-left">
								<form action="javascript:void(0);" id="user_signup" method="post" enctype="multipart/form-data">
								@csrf
									<div class="form-group form-group-transparent">
										<label class="f-16 fr white">Full Name</label>
										<div class="input-group">
											<input type="text" class="form-control" name="name" placeholder="Enter Full Name">
										</div>
									</div>
									<div class="form-group form-group-transparent">
										<label class="f-16 fr white">Email</label>
										<div class="input-group">
											<input type="email" class="form-control" name="email" placeholder="Enter Email Address">
										</div>
									</div>

									<div class="form-group form-group-transparent">
										<label class="f-16 fr white">Mobile Number</label>
										<div class="input-group input-group-inline">
										<input type="hidden" id="country_code"  name="country_code"/>
                                        <input type="text" class="form-control" required="true" id="phone" name="phone" placeholder="Mobile Number">        

										</div>
									</div>
									<div class="form-group form-group-transparent">
										<label class="f-16 fr white">Language</label>
										<div class="input-group">
										<select id="language" name="language" class="form-control">
										<option value=''>Select Language</option>
										<option value='English'>English</option>
										<option value='Arabic'>Arabic</option>
											<input type="text" class="form-control" name="language">
										</div>
									</div>
									
									<div class="form-group form-group-transparent">
										<label class="f-16 fr white">Password</label>
										<div class="input-group">
											<input type="password" class="form-control" name="password" placeholder="Enter Password">
											<span class="icon-right fii-eye"></span>
										</div>
									</div>

									<input type="submit" class="btn btn-xs btn-primary mt-3 btn_submit_tranning"  value="Sign Up">
								</form>
							</div>
	
							<div class="col-middle">
								<div class="middle-inner d-flex aic jcc h-100">
									<span class="or-text">Or</span>
								</div>
							</div>
	
							<div class="col-right">
								<div class="d-flex flex-column h-100 justify-content-center">
									<div class="mb-4 order-sm-1 order-2">
										<a href="#" class="social-btn fb-btn d-flex aic"><img src="{{url('/assets/images/fb-btn-img.svg')}}" alt="">Sign In with Facebook</a>
										<a href="#" class="social-btn googleplus-btn d-flex aic"><img src="{{url('/assets/images/googleplsu-btn-img.svg')}}" alt="">Sign In with Google</a>
									</div>
	
									<p class="f-16 flight gray-600 order-sm-2 order-1 mb-sm-0 mb-5 text-sm-left text-center">Already have an account? <a href="{{url('/signin')}}" class="fm white"> Sign In </a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="note-text w-100 mx-auto">
						<p class="f-16 fr white text-center mb-0">
							* By Signing Up, you agree to our <a href="#"> Terms of Conditions</a> and to receive Fitness Storm emails & 
							updates and acknowledge that you read our <a href="#">Privacy Policy</a> .
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
			    <!-- Modal -->
<div class="modal fade done_message" id="b_trainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content pt-5 pb-5">
        <div class="modal-body text-center ">
          <img src="{{asset('assets/images/extra/check.png')}}" alt="">
          <h4>Success!</h4>
          <p>Send Otp On your Email Address.</p>
        </div>
        <div class="modal-footer justify-content-center border-0">
          <button type="button" data-dismiss="modal" class="btn btn-xs btn-primary  fr" onclick="location.href='signup'">Done</button>
        </div>
      </div>
    </div>
  </div>


    <!-- Scripts -->
	<script src="{{url('/assets/js/jquery.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    
	<!-- Bootstrap -->
	<script src="{{url('/assets/js/popper.min.js')}}"></script>
	<script src="{{url('/assets/js/bootstrap.min.js')}}"></script>

	<!-- Owl Carousel -->
	<script src="{{url('/assets/js/owl.carousel.min.js')}}"></script>

	<!-- Select 2 Js -->
	<script src="{{url('/assets/js/select2.min.js')}}"></script>

	<!-- Slick slider -->
	<script src="{{url('/assets/js/slick.js')}}"></script>

	<!-- Custom Js -->
	<script src="{{url('/assets/js/custom.js')}}"></script>
	

</body>

<script type="text/javascript">
    $(function(){


        country_code =$(".iti__selected-flag").attr("title");
         const myArr = country_code.split(": ");
         c_code =myArr[1];
         $("#country_code").val(c_code);
         // console.log($("#country_code").val());
    
    $(".btn_submit_tranning").on("click",function(){
        country_code =$(".iti__selected-flag").attr("title");
         const myArr = country_code.split(": ");
         c_code =myArr[1];
         $("#country_code").val(c_code);
          console.log($("#country_code").val());
    
      });
    });

</script>
<style type="text/css">
    label.error {
    display: inline-block;
    width: 100%;
    clear: both;
    margin-top: 8px;
    color: #db0707;
}
</style>
<script>
	$("#user_signup").validate({
		
	rules: {
		name: {required: true,},
		email: {required: true,email: true,},  
	
		password:{required:true},
		// specialization:{required:true},
		phone:{ 
		required:true,
		minlength:10,
		maxlength:10}, 
		// address:{required:true},
	
		},
	
	messages: {
		name: {required: "Please enter name",},email: {required: "Please enter valid email",email: "Please enter valid email",},   
		phone: {required: "Please enter Mobile Number",},
		password: {required: "Please enter password",},
		// specialization: {required: "Please enter specialization",},
		// gender: {required: "Please select gender",},
		// upload_doc:{required:"Please Upload Document"},
	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#user_signup')[0]);
		   formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
		   u ="development/fitness/";
		  
		jQuery.ajax({
				url: "signup",
				type: "post",
				cache: false,
				data: formData,
				processData: false,
				contentType: false,
				
				success:function(data) { 
				var obj = JSON.parse(data);
				
				if(obj.status==true){
					$(".result").text(obj.message);
					setTimeout(function(){
						 $("#b_trainer").modal('show');
						 window.location.href = "emailverification";
					}, 1000);
				}
				else{
					if(obj.statusmobile_number==false){
						jQuery('#mobile_number_error').html(obj.message);
						jQuery('#mobile_number_error').css("display", "block");
					}
					else if(obj.statusemail==false){
						jQuery('#email_error').html('');
						jQuery('#email_error').html(obj.message);
						jQuery('#email_error').css("display", "block");
					}
					else{
						jQuery('#mobile_number_error').html('');
						jQuery('#email_error').html('');
					}
				}
				}
			});
		}
	});

</script>


<script src="{{asset('assets/build/js/intlTelInput.js')}}"></script>
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
    });
  </script>
</html>