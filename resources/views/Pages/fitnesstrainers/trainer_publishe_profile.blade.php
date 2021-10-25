<?php

 $base_url =  URL::to('/');
?>
@include("inc/header");

	<!-- main -->
	<main>
		<!-- Profile Banner -->
		<section class="trainer-profile-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center position-relative align-self-end order-md-1 order-2">
						<img class="img-fluid banner-image" src="{{asset('/public/assets/images/trainer-profile-bnr-img.png')}}" alt="">
						<span class="profiletext-img"><img src="{{asset('/public/assets/images/profile-text-img.svg')}}" alt=""></span>
					</div>

					<div class="col-md-6 profile-content order-md-2 order-1">
						<h2 class="trainer-name f-46 fb white">Alvin Summers</h2>
						<ul class="list d-flex flex-wrap aic"> 
							<li>Fitness, Model, Yoga</li>
							<li><span class="fii-star"> 4.0</span>( 360 Reviews )</li>
						</ul>
						<p class="paratext f-24 flight white mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  totam vaccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						
						<ul class="workout-list"> 
							<li class="d-inline-flex aic">
								<span class="icon-tick fii-tick"></span>
								<div>
									<h6 class="title f-16 fr ttu">WORKOUT PLANS</h6>
									<p class="f-46 fb white mb-0">16</p>
								</div>
							</li>
							<li class="d-inline-flex aic">
								<span class="icon-tick fii-tick"></span>
								<div>
									<h6 class="title f-16 fr ttu">TOTAL WORKOUT</h6>
									<p class="f-46 fb white mb-0">252</p>
								</div>
							</li>
						</ul>

						<!-- <p class="f-22 flight white mb-4">Lets  Start Train with Trainer</p> -->

						<!-- <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Booktrainermodal">
							Book Trainer<span class="fii-arrow-right-round ml-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
						</button> -->
                        <div class="pro_pub_btn mt-5">
                            <a href="#"><span class="fii-camera-white-d"></span> Add Background Cover</a>
                            <a href="edit-profile.html"><span class="fii-edit-white-d"></span> Edit Profile</a>
                        </div>    
					</div>
				</div>
			</div>
		</section>

		<!-- My Fit Plans Sec -->
		<section class="my-fit-plan-sec featured-plan-sec">
			<div class="container">
				<a href="my-profile.html" class="f-16 fr gray-700 backarrow d-inline-block"><span class="fii-anglearrow-left-sm mr-2"></span>Go to Back</a>
				
				<div class="row aic mb-5">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-sm-0 mb-4">
						<h2 class="f-36 fb secondary mb-0">My Fit Plans</h2>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
						<div class="d-flex justify-content-end">
							<div class="search-filter-sort-block d-inline-flex aic">
								<span class="icon fii-sort"></span>
								<span class="text f-18 fr secondary ttu">Sort</span>
							</div>
						</div>
					</div>
				</div>

				<div class="row myfitplan-row">
					<div class="col-lg-6 col-md-6 col-sm-6 featured-plan-col">
						<div class="image-block">
							<video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="{{asset('public/assets/images/myfitplans-video-01.png')}}" data-setup="{}">
								<source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4" poster="https://image.mux.com/9V2DYex7h8lpXWB64vh8yiEAdHti8VOG/thumbnail.jpg?time=10" type="video/mp4" />
							</video>
							
						</div>

						<div class="content" onclick="location.href='trainer-publishe-profile-details.html'">
							<h4 class="title f-26 fb secondary"><a href="#">Ultimate Abs</a><span class="toottips bg-primary">Beginner</span></h4>
							<div class="d-flex justify-content-between">
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout frequency</h6>
									<p class="f-24 fb black-100 mb-0">4x/Week</p>
								</div>
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout type</h6>
									<p class="f-24 fb black-100 mb-0">Gym</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 featured-plan-col">
						<div class="image-block">
							<video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="{{asset('public/assets/images/myfitplans-video-02.png')}}" data-setup="{}">
								<source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4" poster="https://image.mux.com/9V2DYex7h8lpXWB64vh8yiEAdHti8VOG/thumbnail.jpg?time=10" type="video/mp4" />
							</video>
							
						</div>

						<div class="content" onclick="location.href='trainer-publishe-profile-details.html'">
							<h4 class="title f-26 fb secondary"><a href="#">Ultimate Abs</a><span class="toottips bg-primary">Beginner</span></h4>
							<div class="d-flex justify-content-between">
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout frequency</h6>
									<p class="f-24 fb black-100 mb-0">4x/Week</p>
								</div>
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout type</h6>
									<p class="f-24 fb black-100 mb-0">Gym</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 featured-plan-col">
						<div class="image-block">
							<video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="{{asset('public/assets/images/myfitplans-video-03.png')}}" data-setup="{}">
								<source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4" poster="https://image.mux.com/9V2DYex7h8lpXWB64vh8yiEAdHti8VOG/thumbnail.jpg?time=10" type="video/mp4" />
							</video>
							
						</div>

						<div class="content" onclick="location.href='trainer-publishe-profile-details.html'">
							<h4 class="title f-26 fb secondary"><a href="#">Ultimate Abs</a><span class="toottips bg-primary">Beginner</span></h4>
							<div class="d-flex justify-content-between">
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout frequency</h6>
									<p class="f-24 fb black-100 mb-0">4x/Week</p>
								</div>
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout type</h6>
									<p class="f-24 fb black-100 mb-0">Gym</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 featured-plan-col">
						<div class="image-block">
							<video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="{{asset('public/assets/images/myfitplans-video-04.png')}}" data-setup="{}">
								<source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4" poster="https://image.mux.com/9V2DYex7h8lpXWB64vh8yiEAdHti8VOG/thumbnail.jpg?time=10" type="video/mp4" />
							</video>
							
						</div>

						<div class="content" onclick="location.href='trainer-publishe-profile-details.html'">
							<h4 class="title f-26 fb secondary"><a href="#">Ultimate Abs</a><span class="toottips bg-primary">Beginner</span></h4>
							<div class="d-flex justify-content-between">
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout frequency</h6>
									<p class="f-24 fb black-100 mb-0">4x/Week</p>
								</div>
								<div class="text-left">
									<h6 class="f-16 fb subhead ttu">Workout type</h6>
									<p class="f-24 fb black-100 mb-0">Gym</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<a href="#" class="see-alltext f-22 fb primary ttu">See all (16) <span class="arrowdown fii-angle-arrow-down"></span></a>
			</div>
		</section>


		<!-- Rate & Review Sec -->
		<section class="rate-review-sec">
			<div class="container">
				<h2 class="setion-title f-36 fb secondary">Rate & Reviews</h2>
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-md-7 mb-md-0 mb-5">
						<div class="rate-review-panels">
							<div class="content">
								<p class="rating-group">
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star"></span>
								</p>

								<p class="f-18 fr gray-700 mb-0">
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
							<div class="name d-flex aic">
								<span class="avatar">
									<img src="{{asset('public/assets/images/ratereview-user01.png')}}" alt="">
								</span>
								<h6 class="f-18 fm black mb-0">Username</h6>
							</div>
						</div>

						<div class="rate-review-panels">
							<div class="content">
								<p class="rating-group">
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star"></span>
								</p>

								<p class="f-18 fr gray-700 mb-0">
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
							<div class="name d-flex aic">
								<span class="avatar">
									<img src="{{asset('public/assets/images/ratereview-user01.png')}}" alt="">
								</span>
								<h6 class="f-18 fm black mb-0">Username</h6>
							</div>
						</div>

						<div class="rate-review-panels">
							<div class="content">
								<p class="rating-group">
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star active"></span>
									<span class="fii-star"></span>
								</p>

								<p class="f-18 fr gray-700 mb-0">
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
							<div class="name d-flex aic">
								<span class="avatar">
									<img src="{{asset('public/assets/images/ratereview-user01.png')}}" alt="">
								</span>
								<h6 class="f-18 fm black mb-0">Username</h6>
							</div>
						</div>
					</div>

					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="review-column">
							<div class="head d-flex justify-content-between aic">
								<div class="d-inline-flex aic">
									<span class="ratetext">4.0</span>
									<p class="f-18 fr mb-0">Best on <b class="fm d-block"> 430 Comments</b></p>
								</div>

								<span class="star-ic fii-star-gray-d"></span>
							</div>

							<div class="body-sec">
								<div class="d-flex aic progress-bar-row">
									<ul class="d-inline-flex aic">
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
									</ul>
									<div class="progress w-100 ml-4 mr-2">
										<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="f-18 fr black">150</span>
								</div>

								<div class="d-flex aic progress-bar-row">
									<ul class="d-inline-flex aic">
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
									</ul>
									<div class="progress w-100 ml-4 mr-2">
										<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="f-18 fr black">250</span>
								</div>

								<div class="d-flex aic progress-bar-row">
									<ul class="d-inline-flex aic">
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
									</ul>
									<div class="progress w-100 ml-4 mr-2">
										<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="f-18 fr black">130</span>
								</div>

								<div class="d-flex aic progress-bar-row">
									<ul class="d-inline-flex aic">
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
									</ul>
									<div class="progress w-100 ml-4 mr-2">
										<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="f-18 fr black">80</span>
								</div>

								<div class="d-flex aic progress-bar-row">
									<ul class="d-inline-flex aic">
										<li><span class="fii-star-gray-d active"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
										<li><span class="fii-star-gray-d"></span></li>
									</ul>
									<div class="progress w-100 ml-4 mr-2">
										<div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="f-18 fr black">30</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>


	@include("inc/footer");