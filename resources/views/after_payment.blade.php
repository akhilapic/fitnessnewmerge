<?php

 $base_url =  URL::to('/');
?>

@include("inc/header");

<meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- main -->
    <main>
        <section class="fit_plan_a_p pb-5">
            <div class="container">
                @foreach($workoutplan as $w)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="fit_top_h">
                                <div class="fit_top_left">
                                    <span class="u_fit_img"><img src="{{asset('assets/images/extra/user-fit.png')}}" alt=""></span>
                                    <div class="user_fit_info">
                                        <h3 class="fb">{{$w->fitness_trainers_name}}</h3>
                                        <p>{{$w->category}} <span class="fm"><i class="icon fii-star"></i> 4.0</span>
                                        </p>
                                    </div>
                                </div>
                                <a href="#" class="go_back fr"><span class="fii-anglearrow-left-sm"></span> Go to Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="yoga_Sec">
                                @foreach($w->day as $key=> $d)
                                <div class="yoga_img">
                                    <img src="{{asset('assets/images/extra/yoga.png')}}" alt="">
                                    <div class="top_content">
                                        <div class="y_name">
                                            <h2 class="fb">{{$d->exercise_name}}</h2>
                                            <h4 class="fm">Day - {{$key+1}}</h4>
                                        </div>
                                        <div class="yoga_time">
                                            <span><i class="icon fii-clock-d"></i> 00:22:30 </span>
                                            <span><i class="icon fii-calroies-d"></i> 360</span>
                                            <span class="download"><i class="icon fii-download "></i> Download</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="yoga_intro">
                                    <h4 class="fb">Introduction</h4>
                                    <p>{{$w->description}}</p>
                                    <a href="#" class="fb"> Read More <span class="icon fii-acc-arrow-down"></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach                

                <div class="excerise_listing">
                    <div class="row  pt-5">
                        <div class="col-sm-8">
                            <h3 class="fb excer_head">{{count($exercise_details)}} Exercises</h3>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="#" class="work_btn">Start Workout <span class="fii-angle-arrow"></span></a>
                        </div>
                    </div>
                    <div class="row pt-5">
                        @foreach($exercise_details as $keys=> $exercisedetails)
                        <div class="col-md-4 col-sm-6">
                            <div class="v_b">
                                <div class="video_box">
                                    <video id="my-video" class="video-js" controls preload="auto" width="640"
                                        height="264" poster="{{asset('assets/images/extra/video1.png')}}" data-setup="{}">
                                        <source
                                            src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4"
                                            poster="https://image.mux.com/9V2DYex7h8lpXWB64vh8yiEAdHti8VOG/thumbnail.jpg?time=10"
                                            type="video/mp4" />
                                    </video>
                                    <!-- <span class="fii-v-play-d playpause" onclick="playVid()"></span> -->
                                    <p class="video_size"> <span><i class="icon fii-clock-d"></i> 30 Min</span>
                                        <span><i class="icon fii-calroies-d"></i> 360</span>
                                    </p>
                                </div>
                                <div class="video_content">
                                    <h2 class="fb" onclick="location.href='excerise.html'">{{$exercisedetails[$keys]->exercise_name}}</h2>
                                    <div class="rapes_sec">
                                        <p>{{$exercisedetails[$keys]->reps}} X {{$exercisedetails[$keys]->sets}} Reps</p>
                                        <div class="proc">
                                            <span>100%</span>
                                            <div class="progress">

                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                    value="25%"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @endforeach
                   

                    </div>
                </div>

            </div>
        </section>
    </main>


    @include("inc/footer");
   