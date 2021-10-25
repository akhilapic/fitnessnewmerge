<?php

 $base_url =  URL::to('/');
?>

@include("inc/header");

<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- main -->
	<main>
		<!-- Membership Banner sec -->
		<section class="membership-bnr-sec d-flex">
			<div class="container d-flex aic jcc position-relative">
				<h1 class="f-60 fblack secondary">Membership</h1>

				<img class="curve-img" src="{{asset('/assets/images/membership-bnr-curve.svg')}}" alt="">
			</div>
		</section>

		<!-- Membership detail Plan -->
		<section class="membership-detail-plan">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-md-8 col-sm-7 mx-auto text-center">
						<p class="f-20 flight white mb-5">Aliquam condimentum vulputate. Nulla facilisi. Sed tempor dolor egestas mi placerat fringilla Sed cursus pharetra eros.</p>
						<h2 class="f-36 fb white mb-0">Membership Plan</h2>
					</div>
				</div>

				<div class="row membership-plan-columns">
					<div class="col-lg-3 col-md-6">
						<div class="column">
							<h3 class="title f-36 fblack secondary text-center ttu">Monthly</h3>
							<h2 class="subtitle f-45 fb primary text-center mb-0">$ 100</h2>
							<ul class="plan-list">
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">You Get 3 day Free Trial </p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
							</ul>

							<a href="payment-membership.html" class="selectplantext f-22 fb primary ttu">Select plan <span class="arrowicon fii-arrow-right"></span></a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="column">
							<h3 class="title f-36 fblack secondary text-center ttu">3 Month</h3>
							<h2 class="subtitle f-45 fb primary text-center mb-0">$ 150</h2>
							<ul class="plan-list">
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">You Get 3 day Free Trial </p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
							</ul>

							<a href="payment-membership.html" class="selectplantext f-22 fb primary ttu">Select plan <span class="arrowicon fii-arrow-right"></span></a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="column">
							<h3 class="title f-36 fblack secondary text-center ttu">6 Month</h3>
							<h2 class="subtitle f-45 fb primary text-center mb-0">$ 280</h2>
							<ul class="plan-list">
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">You Get 3 day Free Trial </p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
							</ul>

							<a href="payment-membership.html" class="selectplantext f-22 fb primary ttu">Select plan <span class="arrowicon fii-arrow-right"></span></a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="column">
							<h3 class="title f-36 fblack secondary text-center ttu">Annual</h3>
							<h2 class="subtitle f-45 fb primary text-center mb-0">$ 560</h2>
							<ul class="plan-list">
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">You Get 3 day Free Trial </p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
								<li class="d-flex">
									<span class="tick-icon fii-tick"></span>
									<p class="f-16 fr secondary mb-0">Quisque aliquam condimentum vulputate. Nulla facilisi.</p>
								</li>
							</ul>

							<a href="payment-membership.html" class="selectplantext f-22 fb primary ttu">Select plan <span class="arrowicon fii-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Membership Benifits Sec -->
		<section class="membership-benefit-sec">
			<div class="container">
				<h2 class="pagetitle f-36 fb secondary text-center">Membership Benefits</h2>
				
				<div class="membership-benefits-panels d-flex flex-wrap mx-auto">
					<div class="membershipbenefit-col">
						<span class="number f-26 fb white d-flex aic jcc">01</span>
						<span class="icon fii-dumbell-ic d-flex aic jcc mx-auto"></span>
						<h6 class="title f-20 fb black-100 ttu text-truncate">All Training Type</h6>
						<p class="para f-16 fr black-100 mb-0">
							Condimentum vulputate. Nulla facilisi. Sed tempor dolor egestas mi placerat fringilla Sed cursus pharetra eros.
						</p>
					</div>
					<div class="membershipbenefit-col">
						<span class="number f-26 fb white d-flex aic jcc">02</span>
						<span class="icon fii-chat-ic d-flex aic jcc mx-auto"></span>
						<h6 class="title f-20 fb black-100 ttu text-truncate">chat with trainers</h6>
						<p class="para f-16 fr black-100 mb-0">
							Condimentum vulputate. Nulla facilisi. Sed tempor dolor egestas mi placerat fringilla Sed cursus pharetra eros.
						</p>
					</div>
					<div class="membershipbenefit-col">
						<span class="number f-26 fb white d-flex aic jcc">03</span>
						<span class="icon fii-live-camera d-flex aic jcc mx-auto"></span>
						<h6 class="title f-20 fb black-100 ttu text-truncate">live video call</h6>
						<p class="para f-16 fr black-100 mb-0">
							Condimentum vulputate. Nulla facilisi. Sed tempor dolor egestas mi placerat fringilla Sed cursus pharetra eros.
						</p>
					</div>
					<div class="membershipbenefit-col">
						<span class="number f-26 fb white d-flex aic jcc">04</span>
						<span class="icon fii-rating-likes d-flex aic jcc mx-auto"></span>
						<h6 class="title f-20 fb black-100 ttu text-truncate">5 star trainers</h6>
						<p class="para f-16 fr black-100 mb-0">
							Condimentum vulputate. Nulla facilisi. Sed tempor dolor egestas mi placerat fringilla Sed cursus pharetra eros.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Top workout session sec -->
		<section class="topworkout-session-sec">
			<div class="container">
				<h2 class="pagetitle f-36 fb secondary">Top Workouts Sessions</h2>
			</div>

			<!-- Slider -->
			<div class="top-workoutsession-slider owl-carousel">
				<div class="item">
					<img src="images/topworkoutsession-img01.png" alt="">
					<h6 class="title f-22 fb white mb-0 ttu"><a href="#">Weight Lifting</a></h6>
					<a href="fit-plans.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>
				</div>
				<div class="item">
					<img src="{{asset('/assets/images/topworkoutsession-img02.png')}}" alt="">
					<h6 class="title f-22 fb white mb-0 ttu"><a href="#">Body Weight</a></h6>
					<a href="fit-plans.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>
				</div>
				<div class="item">
					<img src="{{asset('/assets/images/topworkoutsession-img03.png')}}" alt="">
					<h6 class="title f-22 fb white mb-0 ttu"><a href="#">Sports Training</a></h6>
					<a href="fit-plans.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>
				</div>
				<div class="item">
					<img src="{{asset('/assets/images/topworkoutsession-img04.png')}}" alt="">
					<h6 class="title f-22 fb white mb-0 ttu"><a href="#">Hiit Training</a></h6>
					<a href="fit-plans.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>
				</div>
				<div class="item">
					<img src="{{asset('/assets/images/topworkoutsession-img05.png')}}" alt="">
					<h6 class="title f-22 fb white mb-0 ttu"><a href="#">Weight Lifting</a></h6>
					<a href="fit-plans.html" class="arrow-box d-flex aic jcc"><span class="fii-arrow-right"></span></a>
				</div>
			</div>
		</section>
	</main>


	    @include("inc/footer");