<?php
$base_url = URL::to('/');
?>
@include("inc/header");
@include("inc/trainer_login_header");
<!-- main -->


    <section class="main_content my_pro pb-5 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ session('message') }}
                                </div>
                                @endif
                    <div class="page_head align-items-center flex-wrap  d-flex justify-content-between">
                        <h4 class="secondary mb-0 fb">My Profile</h4>
                        <div class="p_btn d-flex mt-sm-0 mt-3">
                            <a href="{{url('trainer-edit-profile/'.$fitnesstrainer->id)}}" class="btn-outline fm mr-3"> <span class="fii-edit-d"></span>Edit
                                Profile</a>
                            <a href="{{url('trainer-publishe-profile/'.$fitnesstrainer->id)}}" class="btn-red fm"> View Published Profile <span class="fii-angle-arrow"></span></a>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-10 col-md-11">
                    <div class="profile_tabs">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                 aria-labelledby="home-tab">
                                <div class="row tra_pro_pad">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="user_deatils_f">
                                            <p>Full Name</p>
                                            <h4>{{$fitnesstrainer->name}}</h4>
                                        </div>
                                        <div class="user_deatils_f d-flex justify-content-between">
                                            <div class="verify_de">
                                                <p>Email</p>
                                                <h4>{{$fitnesstrainer->email}}</h4>
                                            </div>
                                            <h5 class="verifyed"><span> <img src="{{asset('assets/images/dashbaord/verify.svg')}}"
                                                                             alt=""> </span> Verified</h5>
                                        </div>
                                        <div class="user_deatils_f d-flex justify-content-between">
                                            <div class="verify_de">
                                                <p>Mobile Number</p>
                                                <h4 ><span class="mr-2">{{$fitnesstrainer->country_code}}</span> {{$fitnesstrainer->phone}}</h4>
                                            </div>

                                            <h5 class="unverifyed"> Verify</h5>

                                        </div>
                                        <div class="user_deatils_f">
                                            <p>Gender</p>
                                            <h4>{{$fitnesstrainer->gender}}</h4>
                                        </div>
                                        <div class="user_deatils_f border-0">
                                            <p>Date of Birth</p>
                                            <h4>{{$fitnesstrainer->dob}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="user_deatils_f">
                                            <p>Specialization</p>
                                            <div class="spe_list">
                                                @foreach(explode(',', $fitnesstrainer->specialization) as $info) 
                                                <span class="spec_s">{{$info}}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="user_deatils_f d-flex justify-content-between">
                                            <div class="verify_de">
                                                <p>Education</p>
                                                <h4>{{$fitnesstrainer->education}}</h4>
                                            </div>
                                        </div>
                                        <div class="user_deatils_f">
                                            <p>Location/Address</p>
                                            <h4>{{$fitnesstrainer->address}}</h4>
                                        </div>
                                        <div class="user_deatils_f border-0">
                                            <p>Bio</p>
                                            <h4>{{$fitnesstrainer->bio}}</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include("inc/footer");