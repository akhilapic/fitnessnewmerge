<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Fitness Point </title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Custom -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Sign in Banner -->
	<section class="signin-banner">
		<div class="signinheader position-relative">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="{{url('/home')}}" class="logo"><img src="{{asset('assets/images/logo.svg')}}" alt=""></a>

					<a href="{{url('/home')}}" class="f-16 fr white mb-0 d-inline-flex aic"><img class="mr-2" src="{{asset('assets/images/close.svg')}}" alt="">Close</a>
				</div>
			</div>
		</div>

		<div class="signin-content position-relative">
			<div class="container">

				<div class="signin-content-col">
					<div>
						<h2 class="title f-46 fm white text-center">Sign In</h2>
						<p class="f-18 fr white mb-0 text-center">Sign In to Your Account</p>
						<div class="signin-field-block d-sm-flex d-block">
							<div class="col-left">
								<span id="msg_error" style="display: none;color:red"></span>
									<form action="javascript:void(0)" id="fitness_trainer_signin" method="Post" enctype="multipart/form-data">
									<div class="form-group form-group-transparent">
										<label class="f-16 fr white">Email</label>
										<div class="input-group">
											<input type="email" class="form-control" name ="email" placeholder="Enter Email Address">
										</div>
										
									</div><span id="email_error" style="color:Red; display:none"></span>
									
									<div class="form-group form-group-transparent" style="margin-top: 22px;">
										<label class="f-16 fr white">Password</label>
										<div class="input-group">
											<input type="password" class="form-control" name="password" placeholder="Enter Password">
											<span class="icon-right fa fa-eye input_icon" id="eye1" style="cursor: pointer ;color: #9f9a9a;" data-name="password"></span>
										</div>
									</div><span id="psd_error" style="color:Red; display:none"></span>
		
									<div class="d-flex justify-content-between mt-4">
										<div class="custom-control custom-checkbox custom-checkbox-white" style="display:none">
											<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
											<label class="custom-control-label white" for="customCheck">Remember Me ?</label>
										</div>
		
										<a href="{{url('/trainer-forgot-password')}}" class="f-16 fr white">Forgot Password ?</a>
									</div>
		
									<button type="submit" class="btn btn-xs btn-primary mt-5">Sign In</button>
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
										<a href="#" class="social-btn fb-btn d-flex aic"><img src="{{asset('/assets/images/fb-btn-img.svg')}}" alt="">Sign In with Facebook</a>
										<a href="#" class="social-btn googleplus-btn d-flex aic"><img src="{{asset('/assets/images/googleplsu-btn-img.svg')}}" alt="">Sign In with Google</a>
									</div>
	
									<p class="f-16 flight gray-600 order-sm-2 order-1 mb-sm-0 mb-5 text-sm-left text-center">Not a Member ? <a href="{{url('signup')}}" class="fm white">Sign Up </a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="note-text w-100 mx-auto">
						<p class="f-16 fr white text-center mb-0">
							* By Signing in, you agree to our <a href="#"> Terms of Conditions</a> and to receive Fitness Storm emails & 
							updates and acknowledge that you read our <a href="#">Privacy Policy</a> .
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


 <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/js/customvalidation.js') }}"></script>
    <!-- Scripts -->
<!--	<script src="{{asset('/assets/js/jquery.min.js')}}"></script>-->

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

</body>

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
	$(function(){
  $("#eye1").on("click",function(){
		 	
			type=$("input[name='"+$(this).data("name")+"']").attr("type");
				  if(type=='password')
					{
						$("#eye1").removeClass("fa-eye");
						$("#eye1").addClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'text');
					}
					else
					{
						$("#eye1").addClass("fa-eye");
						$("#eye1").removeClass("fa-eye-slash");
						$("input[name='"+$(this).data("name")+"']").attr("type",'password');
					}
        		
		  
		});

 // $(".input_icon").on("click",function(){
        	
	// 		type=$("input[name='"+$(this).data("name")+"']").attr("type");
 //            if(type=='password')
	// 		{
	// 			$("input[name='"+$(this).data("name")+"']").attr("type",'text');
	// 		}
	// 		else
	// 		{
	// 			$("input[name='"+$(this).data("name")+"']").attr("type",'password');
	// 		}
	// 	});
	});

    </script>
</html>