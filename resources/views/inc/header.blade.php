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
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
		<![endif]-->
    <!-- Custom -->
    
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    
</head>
<body>
	<!-- Header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg p-0 w-100">
				<div class="d-lg-none d-block">
					<a href="#" class="logo"><img src="{{asset('/assets/images/logo.svg')}}" alt=""></a>
				</div>
				<div class="search-icon ml-auto d-md-none d-block">
					<span class="fii-search search-toggle-btn"></span>
				</div>
				<button class="navbar-toggler p-0 collapsed ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> 
				<div class="collapse navbar-collapse top-header row" id="navbarSupportedContent">
					<div class="col-lg-5">
						<ul class="d-lg-flex aic justify-content-lg-end header-menus">
							<li class="active"><a href="{{url('/home')}}">Home</a></li>
							<li><a href="{{url('/aboutus')}}">About Us</a></li>
							<li><a href="trainers.html">Trainers</a></li>
						</ul>
					</div>
					<div class="col-lg-2"></div>
					<div class="col-lg-5">
						<ul class="d-lg-flex aic justify-content-start header-menus">
							<li><a href="{{url('/fit-plans')}}">Fit Plans</a></li>
							<li><a href="membership.html">Membership</a></li>
							<li><a href="contactus.html">Contact Us</a></li>
						</ul>
					</div>
				</div>

				
			</nav>
			

			<!-- <div class="search-block search-block-toggle">
				<div class="d-flex aic">
					<span class="fii-search"></span>
					<input type="text" placeholder="Search Trainers & Trainings...">
					<button type="submit" class="fii-arrow-right"></button>
				</div>
			</div> -->
			<div class="bottom-header row">
				<div class="col-lg-5 col-md-4 col-12 align-self-end">
					<div class="search-block">
						<div class="d-flex aic">
							<span class="fii-search"></span>
							<input type="text" placeholder="Search Trainers & Trainings...">
							<button type="submit" class="fii-arrow-right" onclick="location.href='fit-plans.html'"></button>
						</div>
					</div>
				</div>

				<div class="col-lg-2 d-lg-block d-none text-center">
					<a href="index.html" class="logo"><img src="{{asset('/assets/images/logo.svg')}}" alt=""></a>
				</div>

				<div class="col-lg-5 col-md-8 col-12 align-self-end">
					<div class="d-flex aic justify-content-md-end justify-content-center">
					@if(Session::get('fitness_tranner_id'))
					<a href="{{asset('/signin')}}" class="btn btn-xs btn-primary">Sign out</a>
					@else
					<a href="{{asset('/signin')}}" class="btn btn-xs btn-primary">Sign In</a>
					@endif

					
						<a href="{{asset('/signup')}}" class="btn btn-xs btn-primary-border ml-2">Sign Up</a>

						<div class='toggletabs d-flex ml-2'>
							<input type='radio' id='r1' name='t'>
							<label for='r1'>Arabic</label>
							<input type='radio' id='r2' name='t' checked>
							<label for='r2'>English</label>
							<div id='slider'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>