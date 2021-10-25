<?php

 $base_url =  URL::to('/');
?>
@include("inc/header");
<meta name="csrf-token" content="{{ csrf_token() }}" />
   <!-- main -->
    <main>
        <!-- Profile Banner -->
<!--        <section class="trainer-profile-banner  fitplandetail-bnr" style="background-image: url('http://localhost/development/fitness/assets/images/trainer-pro-bg.png');">-->
@foreach($workoutplan as $c)
        <section class="trainer-profile-banner  fitplandetail-bnr" style="background-image: url('{{ asset('assets/images/trainer-pro-bg.png') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pl-0 pr-0 text-left mob_banner_btn position-relative align-self-end order-md-1 order-2">
                        <!-- <img class="img-fluid banner-image" src="images/fit-plans-details-banner.png" alt=""> -->

                        <div class="pro_pub_btn  d-md-none d-block text-left mt-5">
                            <div class="col-md-5 p-0 profile-content mt-0 order-md-2 order-1">
                                <h2 class="trainer-name f-46 mb-sm-2 mb-2 fb white">
                                     {{$c->fitness_trainers_name}}</h2>
                                <ul class="list d-flex flex-wrap aic mb-sm-3 mb-0"> 
                                    <li>Fitness</li>
                                    <li><span class="fii-star"></span><span class="fm yellowtext">4.0</span> ( 360 Reviews )</li>
                                </ul>                                       
                                <h1 class="f-24 fb text-white mb-2">$ {{$c->amount}}</h1>        
                                <p class="f-14 flight text-white mb-3 " style="font-size: 9px;">Lets  Start This Fit Plan with Trainer</p>
                                <a href="setschedule-workout-by-trainer.html" class="btn mt-2 d-block btn-primary btn-xs">
                                    Book Trainer<span class="fii-arrow-right-round ml-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                         
                    </div>

                    <div class="col-md-5 profile-content order-md-2 order-1">
                        <h2 class="trainer-name f-46 fb white d-none d-md-block">{{$c->fitness_trainers_name}} </h2>
                        <ul class="list d-md-flex flex-wrap aic d-none d-md-block"> 
                            <li>Fitness</li>
                            <li class="d-flex pl-2"><span class="fii-star d-none d-md-block"></span><span class="fm yellowtext">4.0</span> ( 360 Reviews )</li>
                        </ul>
                        
                        <h1 class="f-60 fb white mb-4 d-none d-md-block">$ {{$c->amount}}</h1>
                        <p class="f-22 flight white mb-4 d-none d-md-block ">Lets  Start This Fit Plan with Trainer</p>

                        <a href="setschedule-workout-by-trainer.html" class="btn btn-primary btn-xs d-none d-md-block">
                            Book Trainer<span class="fii-arrow-right-round ml-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endforeach
        @foreach($workoutplan as $val)

        <!-- My Fit Plans Details Sec -->
        <section class="my-fit-plan-detail-sec featured-plan-sec">
            <div class="container">
                <a href="{{url('fit-plans')}}" class="f-16 fr gray-700 backarrow d-inline-block"><span class="fii-anglearrow-left-sm mr-2"></span>Go to Back</a>
                
                <div class="d-flex aic justify-content-between bookmark-sec">
                    <h2 class="f-36 fb secondary mb-0">{{$val->name}}</h2>
                    <span class="fii-bookmark-d"><span class="path1"></span><span class="path2"></span></span>
                </div>

                <div class="row video-description-block">
                    <div class="col-left mb-lg-0 mb-5">
                        <div class="video-col">
                            <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="{{asset('assets/images/fit-plans-detail-video-img.png')}}" data-setup="{}">
                                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4" poster="https://image.mux.com/9V2DYex7h8lpXWB64vh8yiEAdHti8VOG/thumbnail.jpg?time=10" type="video/mp4" />
                            </video>
                        </div>
                        <div class="description-col">
                            <h6 class="title f-24 fb black-100">Description</h6>
                            <p class="f-22 flight black">{{$val->description}}</p>
                        </div>
                    </div>

                    <div class="col-right">
                        <div class="video-detail-list d-flex flex-wrap">
                            <div class="video-list orange">
                                <h6 class="title f-16 fm ttu">Total Days</h6>
                                <h5 class="f-28 fb secondary mb-0">{{count($val->day)}} Day Plan</h5>
                            </div>
                            <div class="video-list green">
                                <h6 class="title f-16 fm ttu">duration</h6>
                                <h5 class="f-28 fb secondary mb-0">{{$val->duration}} Min</h5>
                            </div>
                            <div class="video-list green">
                                <h6 class="title f-16 fm ttu">total Week</h6>
                                <h5 class="f-28 fb secondary mb-0">{{round($val->frequency/7)}} Week</h5>
                            </div>
                            <div class="video-list orange">
                                <h6 class="title f-16 fm ttu">Train</h6>
                                <h5 class="f-28 fb secondary mb-0">{{$val->frequency}}x/Week</h5>
                            </div>
                            <div class="video-list orange">
                                <h6 class="title f-16 fm ttu">Workout Level</h6>
                                <h5 class="f-28 fb secondary mb-0">{{ucfirst($val->level)}}</h5>
                            </div>
                            <div class="video-list green">
                                <h6 class="title f-16 fm ttu">Workout type</h6>
                                <h5 class="f-28 fb secondary mb-0">{{ucfirst($val->type)}}</h5>
                            </div>
                            <div class="video-list green">
                                <h6 class="title f-16 fm ttu">Location</h6>
                                <h5 class="f-28 fb secondary mb-0">{{ucfirst($val->type)}}</h5>
                            </div>
                            <div class="video-list orange">
                                <h6 class="title f-16 fm ttu">Calories burn</h6>
                                <h5 class="f-28 fb secondary mb-0">{{$val->calories_burn}}</h5>
                            </div>
                            <div class="video-list orange">
                                <h6 class="title f-16 fm ttu">people Doing this plan</h6>
                                <h5 class="f-28 fb secondary mb-0 d-flex aic"><span class="video-ic"><img src="{{ asset('assets/images/profiledropdown-img.jpg') }}" alt=""></span><span class="video-ic"><img src="{{ asset('assets/images/video-ic.png') }}" alt=""></span> 46K +</h5>
                            </div>
                        </div>

                        <ul class="plan-list">
                            <li class="d-flex">
                                <span class="tick-icon fii-tick"></span>
                                <p class="f-16 fr secondary mb-0">Tracks reps, sets and right time in website</p>
                            </li>
                            <li class="d-flex">
                                <span class="tick-icon fii-tick"></span>
                                <p class="f-16 fr secondary mb-0">Video instruction for every exercise</p>
                            </li>
                            <li class="d-flex">
                                <span class="tick-icon fii-tick"></span>
                                <p class="f-16 fr secondary mb-0">Download Workout Fit Plan Videos</p>
                            </li>
                        </ul>

                        <h6 class="f-22 fm secondary mb-4 pb-2">Let's Start Workout by Yourself</h6>

                        <div class="d-flex aic price-row">
                            <span class="price-amt f-60 fb primary">$ {{$val->amount}}</span>
                            <span class="fii-double-arrow"></span>
                            <a href="{{url('payment-workout-by-yourself')}}/{{$val->id}}" class="btn btn-xs btn-primary">Start Plan Now <span class="fii-arrow-right-round ml-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Fit Plan detail Workout sec -->
        <section class="fitplan-detail-workout-sec">
            <div class="container">
                <h2 class="sectitle f-24 fb black-100 ttu">Workouts</h2>

                <div class="row fitplan-detail-workout-row">
                        @foreach($val->day as $k=> $d)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="column">
                            <img class="img-fluid w-100 h-100 obj-cover" src="{{asset('assets/images/fitplandetail-workout-img01.jpg')}}" alt="">
                            <span class="fii-unlock"><span class="f-24 fr white">Unlock</span></span>
                        
                            <div class="content">
                                <h6 class="title fm white text-truncate">{{ucfirst($d->exercise_name)}}</h6>
                                <div class="d-flex justify-content-between">
                                    <p class="f-24 fb primary mb-0">Day - {{$k+1}}</p>

                                    <ul class="d-flex aic">
                                        <li class="d-inline-flex aic"><span class="fii-clock-d"></span><span class="f-24 fr white">30 Min</span></li>
                                        <li class="d-inline-flex aic"><span class="fii-calroies-d"></span><span class="f-24 fr white">360</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="#" class="see-alltext f-22 fb primary ttu">See all ({{count($val->day)}}) <span class="arrowdown fii-angle-arrow-down"></span></a>
            </div>
        </section>
        @endforeach
    </main>
    @include("inc/footer");