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
	<section class="fitness-survey">
		<!-- fitness survey bg img -->
		<div class="fitness-survey-bgimg">
			<img src="{{asset('/assets/images/fitness-survey-sideimg02.jpg')}}" alt="">
		</div>

		<!-- Header -->
		<div class="fitness-header">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="index.html" class="logo"><img src="{{asset('/assets/images/logo.svg')}}" alt=""></a>

					<a href="" class="f-18 fr white">Skip</a>
				</div>
			</div>
		</div>

		<!-- Fitness Survey Block -->
		<div class="fitness-survey-block">
			<div class="box-inner">
				<div class="head">
					<h2 class="f-36 fb secondary mb-0">Fitness Survey</h2>
				</div>

				<div class="fitness-content d-sm-flex">
					<div class="col-left">
						<ul class="steps">
							<li class="is-completed d-flex">
								<span class="icon fii-tick-round"></span>
								<div>
									<h2 class="title fm ttu mb-0">Step 1</h2>
									<p class="para fm ttu mb-0">Fill your body details</p>
								</div>
							</li>
							<li class="is-active d-flex">
								<span class="icon fii-tick-round"></span>
								<div>
									<h2 class="title fm ttu mb-0">Step 2</h2>
									<p class="para fm ttu mb-0">Fill your body details</p>
								</div>
							</li>
							<li class="d-flex">
								<span class="icon fii-tick-round"></span>
								<div>
									<h2 class="title fm ttu mb-0">Step 3</h2>
									<p class="para fm ttu mb-0">Fill your body details</p>
								</div>
							</li>
						</ul>
					</div>

					<div class="col-right">
						<form action="{{route('fitness_survey_two')}}"method="post"> 
						@csrf
							<div class="panel">
								<label class="fm black">Your interest in</label>
								<div class="form-group form-group-gray">
									<div class="input-group d-flex justify-content-between">
										<select id="interestedin" name="interest">
                                             <option value="">Select Option</option>
											<option value="lose weight">lose weight</option>
											<option value="increase weight">increase weight</option>
											<option value="maintain weigh">maintain weight </option>
											<option value="build muscle mass">build muscle mass</option>
										</select>
									</div>
								</div>
							</div>

							<div class="panel">
								<label class="fm black">Your body parts you want to work on</label>
								<div class="form-group form-group-gray">
									<div class="input-group d-flex justify-content-between">
										<select id="bodyparts" name="bodyparts_work">
                                            <option value="">Select Option</option>
											<option value="Back & Arms">Back & Arms</option>
											<option value="Chest">Chest</option>
											<option value="Belly">Belly</option>
											<option value="Legs">Legs</option>
										</select>
									</div>
								</div>
							</div>

							<div class="panel">
								<label class="fm black">How often do you exercise</label>
								<div class="form-group form-group-gray">
									<div class="input-group d-flex justify-content-between">
										<select id="exercise" name="exercise">
                                            <option value="">Select Option</option>
											<option value="Sedentary Lifestyle">Little (Sedentary Lifestyle)</option>
											<option value="Once a week">Occasionally (Once a week)</option>
											<option value="At least 3 times a week">Often (At least 3 times a week)</option>
											
										</select>
									</div>
								</div>
							</div>

							<div class="btn-group d-flex aic justify-content-between">
								<a href="fitness-survey" class="fm primary" > <span class="arrow-ic fii-angle-arrow-left mr-1"></span>Back</a>
								<button href="" type="submit" class="fm primary" >Next <span class="arrow-ic fii-angle-arrow-right ml-1"></span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



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

</html>