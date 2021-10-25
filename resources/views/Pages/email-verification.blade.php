<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Fitness Point </title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Custom -->
	
	<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Sign in Banner -->
	<section class="email-banner">
		<div class="signinheader position-relative">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="index.html" class="logo"><img src="{{asset('/assets/images/logo.svg')}}" alt=""></a>
						
					<a href="signup.html" class="f-16 fr gray-700 mb-0"><span class="fii-anglearrow-left-sm mr-2"></span>Go to Back</a>
				</div>
			</div>
		</div>

		<!-- Email verification block -->
		<div class="email-verification-section">
			<div class="verification-inner">
				<div class="email-verification-block">
					<div class="block-inner">
						<h2 class="block-head f-46 fm secondary">Email Verification</h2>

						<p class="subhead f-18 fr black-200">
							Enter your 6 digit code we have sent on your registered
							email address example@domain
						</p>

						
						<!-- <div id="otp" class="otp-inputs inputs d-flex flex-row justify-content-center"> 
							<input class="text-center form-control" type="text" id="first" maxlength="1" /> 
							<input class="text-center form-control" type="text" id="second" maxlength="1" /> 
							<input class="text-center form-control" type="text" id="third" maxlength="1" /> 
							<input class="text-center form-control" type="text" id="fourth" maxlength="1" /> 
							<input class="text-center form-control" type="text" id="fifth" maxlength="1" /> 
							<input class="text-center form-control" type="text" id="sixth" maxlength="1" /> 
						</div> -->
						<form method="post" id="verify_otp" action="javascript:void(0);"  data-group-name="digits" data-autosubmit="false" autocomplete="off" enctype="multipart/form-data">
						
						<div class="otp-inputs d-flex flex-row justify-content-center digit-group">
							@csrf
							<input class="text-center form-control" type="text" id="digit-1" required name="digit1" data-next="digit-2" />
							<input class="text-center form-control" type="text" id="digit-2" required name="digit2" data-next="digit-3" data-previous="digit-1" />
							<input class="text-center form-control" type="text" id="digit-3" required name="digit3" data-next="digit-4" data-previous="digit-2" />
							<input class="text-center form-control" type="text" id="digit-4" required name="digit4" data-next="digit-5" data-previous="digit-3" />
							<input class="text-center form-control" type="text" id="digit-5" required name="digit5" data-next="digit-6" data-previous="digit-4" />
							<input class="text-center form-control" type="text" id="digit-6" required name="digit6" data-previous="digit-5" />
						</div>

						<p class="f-16 fr black-300 mb-0">
							You will receive OTP within <span class="primary">02:00</span> mins
						</p>

						<div class="btn-row d-sm-flex aic justify-content-between">
							<div class="text-sm-left mb-sm-0 mb-4">
								<p class="f-16 fr gray-700 mb-1">Did not get Verification Code?</p>
								<a href="#" class="f-16 fm secondary-100">Resend OTP</a>
							</div>

							<button href="" class="btn btn-xs btn-primary">Verify</a>
						</div>

						</form>

						<div class="info-block">
							<p class="f-16 fr black-400 mb-0">
								Not a Member ? <a href="{{url('signup')}}" class="primary">Sign Up</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="emailverification-bgimg">
				<img class="img-fluid" src="{{asset('/assets/images/emailverification-bg.png')}}" alt="">
				
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
          <p>Verify Successfully.</p>
        </div>
        <div class="modal-footer justify-content-center border-0">
          <button type="button" data-dismiss="modal" class="btn btn-xs btn-primary  fr" onclick="location.href='signup'">Done</button>
        </div>
      </div>
    </div>
  </div>


    <!-- Scripts -->


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/js/customvalidation.js') }}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->

	<!-- Bootstrap -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Owl Carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

	<!-- Select 2 Js -->
	<script src="{{asset('assets/js/select2.min.js')}}"></script>

	<!-- Slick slider -->
	<script src="{{asset('assets/js/slick.js')}}"></script>

	<!-- Custom Js -->
	<script src="{{asset('assets/js/custom.js')}}"></script>

</body>
<script>
	$(function(){
	
	$("#verify_otp").validate({
		rules: {
			digit1: {
				required: true,
			},
			digit2: {
				required: true,
			},
			digit3: {
				required: true,
			},
			digit4: {
				required: true,
			},
			digit5: {
				required: true,
			},

			digit6: {
				required: true,
			},
		},
		
		messages: {
			digit1: {required: "Please enter otp",},
			digit2: {required: "Please enter otp",},
			digit3: {required: "Please enter otp",},
			digit4: {required: "Please enter otp",},
			digit5: {required: "Please enter otp",},
			digit6: {required: "Please enter otp",},

		},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#verify_otp')[0]);
	
		   u ="development/fitness/";
		  
		jQuery.ajax({
				url: "verify_otp",
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
						 window.location.href = "fitness-survey";
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
});
</script>
</html>