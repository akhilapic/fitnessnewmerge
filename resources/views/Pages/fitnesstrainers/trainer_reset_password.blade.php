<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('public/assets/images/favicon.ico')}}" type="image/x-icon">
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
    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Sign in Banner -->
	<section class="email-banner">
		<div class="signinheader position-relative">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="{{url('/home')}}" class="logo"><img src="{{asset('public/assets/images/logo.svg')}}" alt=""></a>
				</div>
			</div>
		</div>

		<!-- Password Section -->
		<div class="email-verification-section resetpassword-section">
			<div class="verification-inner">
				<div class="email-verification-block">
					<div class="block-inner">
						<h2 class="block-head f-46 fm secondary">Reset Password</h2>

						<p class="subhead f-18 fr black">
							The password should have atleast 6 characters
						</p>
<form action="javascript:void(0)" id="trainer_reset_password" method="Post" enctype="multipart/form-data">
                     
                                                    <input type="hidden" name ="email_token" value="{{$token}}"/>
                                                    
							<div class="form-group form-group-gray">
								<label class="text-left w-100">New Password</label>
								<div class="input-group">
									<input type="password" name="password" id="psd" class="form-control" placeholder="Enter New Password">
									<span class="icon-right fa fa-eye input_icon" style="color: #9f9a9a; cursor: pointer " id="eye1" data-name = "password"></span>
								</div>
							</div>

							<div class="form-group form-group-gray">
								<label class="text-left w-100">Confirm Password</label>
								<div class="input-group">
									<input type="password" class="form-control" name ="confirm_password" placeholder="Confirm Password">
									<span class="icon-right fa fa-eye input_icon" style="color: #9f9a9a; cursor: pointer " id="eye2" data-name = "confirm_password"></span>
								</div>
							</div>
							<button type="submit" class="btn btn-xs btn-primary trainer_submit_restpasswordbtn">Reset Password</button>
						</form>

						<div class="info-block">
							<p class="f-16 fr black-400 mb-0">
								Not a Member ? <a href="#" class="primary">Sign Up</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="emailverification-bgimg">
				<img class="img-fluid" src="{{asset('public/assets/images/emailverification-bg.png')}}" alt="">
			</div>
		</div>
	</section>

            <!-- Modal -->
<div class="modal fade done_message" id="b_trainer1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content pt-5 pb-5">
        <div class="modal-body text-center ">
          <img src="{{asset('assets/images/extra/check.png')}}" alt="">
          <h4>Success!</h4>
          <p class="result"></p>
        </div>
        <div class="modal-footer justify-content-center border-0">
          <button type="button" data-dismiss="modal" class="btn btn-xs btn-primary  fr" onclick="location.href='home'">Done</button>
        </div>
      </div>
    </div>
  </div>
 <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('public/assets/js/customvalidation.js') }}"></script>
    <!-- Scripts -->
<!--	<script src="{{asset('/assets/js/jquery.min.js')}}"></script>-->

	<!-- Bootstrap -->
	<script src="{{asset('/public/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('/public/assets/js/bootstrap.min.js')}}"></script>

	<!-- Owl Carousel -->
	<script src="{{asset('/public/assets/js/owl.carousel.min.js')}}"></script>

	<!-- Select 2 Js -->
	<script src="{{asset('/public/assets/js/select2.min.js')}}"></script>

	<!-- Slick slider -->
	<script src="{{asset('/public/assets/js/slick.js')}}"></script>

	<!-- Custom Js -->
	<script src="{{asset('/public/assets/js/custom.js')}}"></script>

        <style type="text/css">
    label.error {
    display: inline-block;
    width: 100%;
    clear: both;
    margin-top: 8px;
    color: #db0707;
}
</style>
</body>
<script>
      $("#eye1").on("click",function(){
		 	
			type=$("input[name='"+$(this).data("name")+"']").attr("type");
		
		
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
        </script>
</html>