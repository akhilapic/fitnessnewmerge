<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Sign in Banner -->
	<section class="email-banner">
		<div class="signinheader position-relative">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="index.html" class="logo"><img src="{{asset('assets/images/logo.svg')}}" alt=""></a>

					<a href="{{url('/signin')}}" class="f-16 fr gray-700 mb-0"><span class="fii-anglearrow-left-sm mr-2"></span>Go to Back</a>
				</div>
			</div>
		</div>

		<!-- Password Section -->
		<div class="email-verification-section password-section">
			<div class="verification-inner">
				<div class="email-verification-block">
					<div class="block-inner">
						<h2 class="block-head f-46 fm secondary">Forgot Password ?</h2>
  <div class="result"></div>
			
						<p class="subhead f-18 fr black">
							
						</p>

                        <form name="firness_forget_password" id="firness_forget_password" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                          	
							<div class="form-group form-group-gray">
								<div class="input-group">
									<input type="email" class="form-control" name="email" placeholder="Email Address">
								</div>
							</div>
                            <span id="email_error" style="color:red"></span>

							<button type="submit" class="btn btn-xs btn-primary">Send</button>
						</form>

						<div class="info-block">
							<p class="f-16 fr black-400 mb-0">
								Not a Member ? <a href="{{url('/signup')}}" class="primary">Sign Up</a>
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




<!--<script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>-->
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

</html>