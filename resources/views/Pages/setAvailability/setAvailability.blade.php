<?php
$base_url = URL::to('/');
?>
@include("inc/header");
@include("inc/trainer_login_header");
<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('public/assets/calender/mobiscroll.jquery.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/calender/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/calender/simple-calendar.css')}}">
        <section class="main_content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="page_head align-items-center  d-flex justify-content-between">
                            <h4 class="secondary mb-0 fb">Set Availability</h4>
                            <!-- <a href="#" class="btn-outline fm"> <span class="fii-edit-d"></span>Edit Profile</a> -->
                        </div>
                    </div>

                </div>
                <div class="set_av">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="set_av_left">
                                <div class="woking_days">
                                    <div class="working_days_top">
                                        <h4>Working time</h4>
                                        <h5 data-toggle="modal" data-target="#addtime"><span><img
                                                    src="{{asset('public/assets/images/dashbaord/add-time.svg')}}" alt=""></span> Add Time
                                            Slot</h5>
                                    </div>
                                    @if($setavailabilitydata)
                                    <div class="slot_box">
                                    <div class="slotbox">
                                        @foreach($setavailabilitydata as $key=>$val)
                                        <h4>SLOT - {{$key+1}}</h4>
                                        <div class="time_box">
                                            <p>{{$val->from_time}} </p>-
                                            <p>{{$val->to_time}} </p>
                                            <span class="fii-edit-d edittime_slot" data-id = "{{$val->id}}" data-from="{{$val->efrom_time}}" data-to="{{$val->eto_time}}" ></span>
                                       <!--data-toggle="modal" data-target="#edittime"-->
                                        </div>
                                        
                                        @endforeach
                                        
                                        </div>
                                    </div>
                                    @endif
                                 
                                </div>

                                <div class="woking_days">
                                    <div class="working_days_top">
                                        <h4>Working Day</h4>
                                        <h5 data-toggle="modal" data-target="#workingday"><span><img
                                                    src="{{asset('/public/assets/images/dashbaord/set-day.svg')}}" alt=""></span> Set Working
                                            Day</h5>
                                    </div>
                                    <div class="set_box slot_box">
                                        <div class="week_box">
                                            <h4>Monday</h4>
                                        @if($working_days)
                                         @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='1')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                        <div class="week_box">
                                            <h4>Tuesday</h4>
                                            @if($working_days)
                                            @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='2')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                        <div class="week_box border-0">
                                            <h4>Wednesday</h4>
                                            @if($working_days)
                                            @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='3')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                        <hr />
                                        <div class="week_box">
                                            <h4>Thursday</h4>
                                            @if($working_days)
                                            @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='4')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                        <div class="week_box">
                                            <h4>Friday</h4>
                                            @if($working_days)
                                            @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='5')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                        <div class="week_box border-0">
                                            <h4>Saturday</h4>
                                            @if($working_days)
                                            @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='6')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                        <hr />
                                        <div class="week_box">
                                            <h4>Sunday</h4>
                                            @if($working_days)
                                            @foreach($working_days as $key =>$val)
                                            @if($val['day'.$key]=='7')
                                                @if($val['status'.$key]=='1')
                                                    <span>open</span>
                                                @else
                                                <span class="close_d">Close</span>
                                                @endif
                                            @endif
                                         @endforeach
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="woking_days">
                                    <div class="working_days_top">
                                        <h4>Leave Manage</h4>
                                        <h5 data-toggle="modal" data-target="#manageleave" id="clickleavemanage"><span ><img src="{{asset('public/assets/images/dashbaord/set-day.svg')}}" alt=""></span> Manage Leave
                                        </h5>
                                    </div>
                                    <div class="slot_box">

                                        <div class="week_box leave_box mb-3">
                                           
                                            @if($leave_date)
                                                @foreach($leave_date as $key =>$val)
                                               
                                                 <h4>{{date("F", mktime(0, 0, 0, $val->Months, 10))}} {{date("Y")}}</h4>
                                                  <div class="leave_sec">
                                                    @foreach(explode(",",  $val->Days) as $key =>$value)
                                                      <span>{{$value}}</span>
                                                   @endforeach
                                                 </div>
                                                 <br>
                                                @endforeach
                                            @endif
                                           
                                        </div>
                                        <hr />
                                     

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div style="width:100%; display:inline-block;">
                                <div id='calendar'></div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer>
        <!-- Footer First -->
        <div class="footer-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-5">
                        <h4 class="footer-title f-22 fm white ttu">Contact Us</h4>
                        <p class="f-16 fm white mb-3">Call Us 24/7</p>
                        <a href="tel:1800 97 97 69" class="f-28 fb primary mb-4 d-block">1800 97 97 69</a>
                        <p class="f-16 fr white mb-0">502 New Design Str, Merco Building opposite <br />
                            Melbourne, Australia
                        </p>
                    </div>
                    <div class="col-md-5 mb-md-0 mb-5">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="footer-title f-22 fm white ttu">Important Link</h4>

                                <ul class="footer-menus">
                                    <li><a href="../Be-a-Trainer.html">Be a Trainer</a></li>
                                    <li><a href="../offers.html">Offers</a></li>
                                    <li><a href="../terms-conditions.html">Terms & Condition</a></li>
                                    <li><a href="#">Cancellation</a></li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <h4 class="footer-title f-22 fm white ttu">About Us</h4>

                                <ul class="footer-menus">
                                    <li><a href="../aboutus.html">About Us</a></li>
                                    <li><a href="../contactus.html">Contact Us</a></li>
                                    <li><a href="../trainers-profile.html">Trainers Information</a></li>
                                    <li><a href="../faq.html">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h4 class="footer-title f-22 fm white ttu">Quick links</h4>

                        <ul class="quick-links-list d-flex flex-wrap">
                            <li><a href="#">Yoga</a></li>
                            <li><a href="#">Body weight</a></li>
                            <li><a href="#">Hands-free</a></li>
                            <li><a href="#">HIIT training</a></li>
                            <li><a href="#">Strength training </a></li>
                            <li><a href="#">Dynamic training</a></li>
                            <li><a href="#">Follow along </a></li>
                            <li><a href="#">Yoga</a></li>
                            <li><a href="#">Body weight </a></li>
                            <li><a href="#">Hands-free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Second -->
        <div class="footer-second">
            <div class="container">
                <div class="row aic">
                    <div class="col-md-4 text-md-left text-center mb-md-0 mb-4">
                        <p class="f-16 flight white mb-0">© 2021 Fitness.com. All Rights Reserved</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 mb-sm-0 mb-4">
                        <ul class="card-btns d-flex aic jcc">
                            <li><a href="#"><img class="paypal-logo" src="{{asset('public/assets/images/paypal-logo.png')}}" alt=""></a></li>
                            <li><a href="#"><img class="visa-logo" src="{{asset('public/assets/images/visa-logo.png')}}" alt=""></a></li>
                            <li><a href="#"><img class="mastercard-logo" src="{{asset('public/assets/images/master-card-logo.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <ul class="footer-social-icons d-flex aic justify-content-sm-end justify-content-center">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- add time modal box  -->
    <div class="modal fade set_modal" id="addtime" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
            <form id="time_slot" action ="javascript:void(0)" method ="Post">
               @csrf
                <div class="modal-header pl-5">
                    <h5 class="modal-title" id="exampleModalLongTitle">Time Slot</h5>

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fii-close-gray-d"> Close</span>
                </button>
                <div class="modal-body pr-5 pl-5">
                    <p>Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem</p>
                        <span id="message" style="color:red"></span>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="">From</label>
                                <input type="time" name="from_time" id="from_time" class="form-control" value="13:30">
                                <!-- <span class="fii-clock-d"></span> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="">To</label>
                                <input type="time" name="to_time" id="to_time" class="form-control" value="13:30">
                                <!-- <span class="fii-clock-d"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary add_more" >Add Time Slot</button>
                    <input type="hidden" id="slot_time_id" value="1"/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Edit time modal box  -->
    <div class="modal fade set_modal" id="edittime" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="etime_slot" action="javascript:void(0)" method="post">
          @csrf
            <div class="modal-content">
                <div class="modal-header pl-5">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Time Slot</h5>

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fii-close-gray-d"> Close</span>
                </button>
                <div class="modal-body pr-5 pl-5">
                    <p>Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <input type="hidden" name="id" value=""/>
                                <label for="">From</label>
                                <input type="time" name="from_time" id="efrom_time" class="form-control">
                                <!-- <input type="text" name="f_time" id="ef_time"/> -->

                                <!-- <span class="fii-clock-d"></span> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="">To</label>
                                <input type="time" name="to_time" id="eto_time" class="form-control" >
                                <!-- <input type="text" name="t_time" id="et_time"/> -->
                                <!-- <span class="fii-clock-d"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btnsubmittimeslot"  data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                </div>
            </div>
            </form>
        </div>
    </div>


    <!-- set working day modal box  -->
    <div class="modal fade set_modal" id="workingday" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-header pl-5">
                    <h5 class="modal-title" id="exampleModalLongTitle">Set Working Day</h5>

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fii-close-gray-d"> Close</span>
                </button>
              
                <form id="set_working_day" action="javascript:void(0)" method="post">
                 @csrf

                <div class="modal-body pr-5 pl-5">
                    <table>
                        <tr>
                            <td></td>
                            <td class="on">On</td>
                            <td class="off">Off</td>
                        </tr>
                        <tr>
                            <td class="days_name">
                                <p>Monday</p> 
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[0]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                            </td>
                            <td>
                                <input type="hidden"  name="monday_working_day" value="1"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[0]==1)
                                    <input type="radio" id="customCheck" name="monday" value="1">
                                  @else
                                  <input type="radio" id="customCheck" name="monday" value="1">
                                    @endif
                                    @else 
                                    <input type="radio" id="customCheck" name="monday" value="1">
                                @endif
                               
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[0]==2)
                                    <input type="radio" checked id="customCheck" name="monday" value="2">
                                  @else
                                  <input type="radio"  id="customCheck" name="monday" value="2">
                                    @endif
                                    @else 
                                    <input type="radio" checked id="customCheck" name="monday" value="2">
                                @endif
                              
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="days_name">
                                <p>Tuesday</p> 

                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[1]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                            </td>
                            <td>
                                <input type="hidden"  name="tuesday_working_day" value="2"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[1]=='1')
                                    <input type="radio" checked id="customCheck" name="tuesday" value="1">
                                  @else
                                  <input type="radio" id="customCheck" name="tuesday" value="1">
                                    @endif
                                    @else
                                    <input type="radio" id="customCheck" name="tuesday" value="1">
                                @endif
                              
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[1]=='2')
                                    <input type="radio" checked id="customCheck" name="tuesday" value="2">
                                  @else
                                  <input type="radio"  id="customCheck" name="tuesday" value="2">
                                    @endif
                                    @else
                                    <input type="radio" checked id="customCheck" name="tuesday" value="2">
                                @endif
                             
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                            <tr>
                                <td class="days_name">
                                    <p>Wednesday</p> 
                                    @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[2]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                                </td>
                                <td>
                                <input type="hidden"  name="wednesday_working_day" value="3"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[2]=='1')
                                    <input type="radio" checked id="customCheck" name="wednesday" value="1">
                                  @else
                                  <input type="radio" id="customCheck" name="wednesday" value="1">
                                    @endif
                                    @else
                                    <input type="radio" id="customCheck" name="wednesday" value="1">
                                @endif
                                
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[2]=='2')
                                    <input type="radio" checked id="customCheck" name="wednesday" value="2">
                                  @else
                                  <input type="radio"  id="customCheck" name="wednesday" value="2">
                                    @endif
                                    @else
                                    <input type="radio" checked id="customCheck" name="wednesday" value="2">
                                @endif
                              
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                            </tr>
                            <tr>
                                <td class="days_name">
                                    <p>Thursday</p> 
                                    @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[3]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                                </td>
                                <td>
                                <input type="hidden"  name="thursday_working_day" value="4"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[3]=='1')
                                    <input type="radio" checked id="customCheck" name="thursday" value="1">
                                  @else
                                  <input type="radio" id="customCheck" name="thursday" value="1">
                                    @endif
                                    @else
                                    <input type="radio" id="customCheck" name="thursday" value="1">
                                @endif
                               
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                               
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[3]=='2')
                                    <input type="radio" checked id="customCheck" name="thursday" value="2">
                                  
                                  @else
                                  <input type="radio"  id="customCheck" name="thursday" value="2">
                                    @endif
                                    @else
                                    <input type="radio" checked id="customCheck" name="thursday" value="2">
                                @endif
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                            </tr>
                            <tr>
                                <td class="days_name">
                                    <p>Friday</p> 
                                    @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[4]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                                </td>
                                <td>
                                <input type="hidden"  name="friday_working_day" value="5"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[4]=='1')
                                    <input type="radio" checked id="customCheck" name="friday" value="1">
                                  
                                  @else
                                  <input type="radio" id="customCheck" name="friday" value="1">
                                    @endif
                                    @else
                                    <input type="radio" id="customCheck" name="friday" value="1">
                                @endif
                              
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[4]=='2')
                                    <input type="radio" checked id="customCheck" name="friday" value="2">
                                  
                                  @else
                                  <input type="radio"  id="customCheck" name="friday" value="2">
                                    @endif
                                    @else
                                    <input type="radio" checked id="customCheck" name="friday" value="2">
                                @endif
                              
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                            </tr>
                            <tr>
                                <td class="days_name">
                                    <p>Saturday</p>  
                                    @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[5]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                                </td>
                                <td>
                                <input type="hidden"  name="saturday_working_day" value="6"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                              
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[5]=='1')
                                    <input type="radio" checked id="customCheck" name="saturday" value="1">
                                  
                                  @else
                                  <input type="radio" id="customCheck" name="saturday" value="1">
                                    @endif
                                    @else
                                    <input type="radio" id="customCheck" name="saturday" value="1">
                                @endif
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[5]=='2')
                                    <input type="radio" checked id="customCheck" name="saturday" value="2">
                                  
                                  @else
                                  <input type="radio"  id="customCheck" name="saturday" value="2">
                                    @endif
                                    @else
                                    <input type="radio" checked id="customCheck" name="saturday" value="2">
                                @endif

                                
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                            </tr>
                            <tr class="border-0">
                                <td class="days_name">
                                    <p>Sunday</p> 
                                    @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[6]==2)
                                    <span>close</span>
                                        @else
                                    <span>open</span>
                                    @endif
                                  @else
                                    <span>close</span>
                                    @endif
                                </td>
                                <td>
                                <input type="hidden"  name="sunday_working_day" value="7"/>
                                <div class="custom-control  custom-checkbox custom-checkbox-white">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[6]=='1')
                                    <input type="radio" checked id="customCheck" name="sunday" value="1">
                                  
                                  @else
                                  <input type="radio" id="customCheck" name="sunday" value="1">
                                    @endif
                                    @else
                                    <input type="radio" id="customCheck" name="sunday" value="1">
                                @endif
                               
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>

                         
                            <td>
                                <!-- <div class="custom-control  custom-checkbox custom-checkbox-white"> -->
                                <div class="custom-control  ">
                                @if(!empty($working_day_statusshow))
                                    @if($working_day_statusshow[6]=='2')
                                    <input type="radio" checked id="customCheck" name="sunday" value="2">
                                  
                                  @else
                                  <input type="radio"  id="customCheck" name="sunday" value="2">
                                    @endif
                                    @else
                                    <input type="radio" checked id="customCheck" name="sunday" value="2">
                                @endif
                               
                                    <!-- <label class="custom-control-label" for="customCheck1"></label> -->
                                </div>
                            </td>
                            </tr>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btsubmitnset_working_day"  data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                </div>
                </form>
            </div>
        </div>
    </div>


  <!-- Manage Leave modal box  -->
    <div class="modal fade set_modal" id="manageleave" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-header pl-5">
                    <h5 class="modal-title" id="exampleModalLongTitle">Manage Leave</h5>

                </div>
                    <form id="calendar_form" id="calendar-form" method="Post" action="javascript:void(0)">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fii-close-gray-d"> Close</span>
                </button>
                <div class="modal-body pr-md-5 pl-md-5">
                    <p>Add and remove leave to click on date</p>
                    <div class="row">
                        <div class="mbsc-col-sm-12 mbsc-col-md-4">
                            <div class="mbsc-form-group m-0">
                                <!-- <div class="mbsc-form-group-title">Multi-day</div> -->
                                <!-- <div id="mdp-demo"></div> -->
                            
                                <div id="container" class="calendar-container"></div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="selectedDate" />
                    <button type="submit" class="btn btn-primary btsubmitleavemanagement" >Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                </div>
            </form>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>

    <!-- Select 2 Js -->
    <script src="{{asset('public/assets/js/select2.min.js')}}"></script>

    <!-- Slick slider -->
    <script src="{{asset('public/assets/js/slick.js')}}"></script>

    <!-- Custom Js -->
<style type="text/css">
    .calendar .day.has-event {
    background: #b11;
    border-color: #b11;
    color: #fff;
}
.calendar .day.has-event:after {
    display: none;
}
</style>


    <script src="{{asset('public/assets/js/custom.js')}}"></script>
    <script src="{{asset('public/assets/calender/main.js')}}"></script>
    <script src="{{asset('public/assets/calender/mobiscroll.jquery.min.js')}}"></script>
        <script src="{{asset('public/assets/calender/jquery.simple-calendar.min.js')}}"></script>
    <script>

 var $calendar;
  $(document).ready(function () {

 var array = @json($list);
      events=[];
               $(array).each(function(index, item){           
              
                let offdate = {
                    startDate:new Date(item).toDateString(),
                     endDate: new Date(item).getTime(),
                     summary: 'Visit of the Eiffel Tower '+index
                 }; 
                 events.push(offdate);
               });
            console.log(events);

            let container = $("#container").simpleCalendar({
      fixedStartDay: 0, // begin weeks by sunday
      disableEmptyDetails: true,
      events: events,

    });
//------------------------------------------------------------------------------
           host_url = "/development/fitness/";
            jQuery.ajax({
           url: host_url+"leaveonoff",
            type: "get",
            cache: false,
            data: '',
            processData: false,
            contentType: false,
            success:function(data) { 
                 var obj = JSON.parse(data);
              //   console.log(obj.leavemanages);
               if(obj.status==true)
               {
                simpleCalendar(obj.daylist);
                
               }
            }//successs close     
        });//ajax close
           

            function simpleCalendar(daylist)
            { 
               events=[];
               $(daylist).each(function(index, item){           
              
                let offdate = {
                    startDate:new Date(item).toDateString(),
                     endDate: new Date(item).getTime(),
                     summary: 'Visit of the Eiffel Tower '+index
                 }; 
                 events.push(offdate);
               });
           // console.log($.type(events));
            let container = $("#container").simpleCalendar({
              fixedStartDay: 0, // begin weeks by sunday
              disableEmptyDetails: true,
              events: events,

            });
            //   console.log(container);
              $calendar = container.data('plugin_simpleCalendar')
            }
    console.log("=====================================");
 //   console.log(new Date(new Date().setHours(new Date().getHours() + 24)).toDateString());
  /*  let container = $("#container").simpleCalendar({
      fixedStartDay: 0, // begin weeks by sunday
      disableEmptyDetails: true,
      events: [
        // generate new event after tomorrow for one hour
        {
          startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
          endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
          summary: 'Visit of the Eiffel Tower'
        },
        // generate new event for yesterday at noon  Fri Oct 15 2021
        {
          startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
          endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
          summary: 'Restaurant'
        },
        // generate new event for the last two days 
        {
          startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
          endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
          summary: 'Visit of the Louvre'
        },
        {
          startDate: new Date("2021-10-18").toDateString(),
          endDate: new Date("2021-10-18").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-19").toDateString(),
          endDate: new Date("2021-10-19").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-20").toDateString(),
          endDate: new Date("2021-10-20").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-21").toDateString(),
          endDate: new Date("2021-10-21").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-22").toDateString(),
          endDate: new Date("2021-10-22").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-23").toDateString(),
          endDate: new Date("2021-10-23").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-24").toDateString(),
          endDate: new Date("2021-10-24").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-27").toDateString(),
          endDate: new Date("2021-10-27").getTime(),
          summary: 'Visit of the Louvre'  
        },
        {
          startDate: new Date("2021-10-28").toDateString(),
          endDate: new Date("2021-10-28").getTime(),
          summary: 'Visit of the Louvre'  
        },


      ],

    });*/
    console.log(container);
    
  });

      </script>

<script type="text/javascript">
    $(function(){
        $("#clickleavemanage").on("click",function(){
        host_url = "/development/fitness/";
            jQuery.ajax({
           url: host_url+"getAllleave_manage",
            type: "get",
            cache: false,
            data: '',
            processData: false,
            contentType: false,
            success:function(data) { 
                 var obj = JSON.parse(data);
              //   console.log(obj.leavemanages);
               if(obj.status==true)
               {
                   //  window.location.reload();
                   $(".calendar").find("table tbody tr").each(function(){
                    console.log($(this).data("data"));
                   });
                     // $("#container").each(function(){
                     //    console.log($(this).data("data"));
                     // });
               }
            }//successs close     
        });//ajax close
        });



    });
</script>

<script type="text/javascript">
    $(function(){
    })
</script>

      <script type="text/javascript">
          $(document).ready( function(){
var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

var output = d.getFullYear() + '-' +
    (month<10 ? '0' : '') + month + '-' +
    (day<10 ? '0' : '') + day;
    $("#selectedDate").val(output);

            $(".btsubmitleavemanagement").on("click",function(event){
                event.preventDefault();
               host_url = "/development/fitness/";
               var formData= new FormData(jQuery('#calendar_form')[0]);
                    formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
            
                    formData.append("date",$("#selectedDate").val());

                    jQuery.ajax({
                   url: host_url+"leave_manage",
                    type: "post",
                    cache: false,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success:function(data) { 
                         var obj = JSON.parse(data);
                      
                       if(obj.status==true)
                       {
                             window.location.reload();
                       }
                    }//successs close     
                });//ajax close
               

            });
        
            $(".calendar-container").find(".day").on("click",function(){
                 data = $(this).data("date");
                 $(this).css({
                    "background":"#0088FF" ,
                    "color": "white"
                 });
                   splits = data.split("-");
               year = splits[0];
               month = splits[1];
               day = splits[2].split("T")[0];
               convert_date = year+"-"+month+"-"+(parseInt(day)+1);
              datestr = "";
              if(convert_date!='')
              {
                    oldselectedDate=$("#selectedDate").val();
                    if(oldselectedDate!='')
                    {
                         datestr+= oldselectedDate +","+convert_date;
                        $("#selectedDate").val(datestr);
                        
                    }
                   
                    // if(oldselectedDate=='')
                    // {
                    //      datestr+= convert_date+",";
                    //      $("#oldselectedDate").val(datestr);
                    // } 
                    // else
                    // {
                    //     datestr+= oldselectedDate+","+convert_date+",";
                    //     $("#oldselectedDate").val(datestr);
                    // }
               
               //  $("#selectedDate").val(datestr);
              }
               
            });

  //           $(".calendar-container").find(".day").on("click",function(){
  //                 host_url = "/development/fitness/";

  //               data = $(this).data("date");
  //           //  console.log(data);
  //           token=$('meta[name="csrf-token"]').attr('content');

  // var formData= new FormData(jQuery('#calendar_form')[0]);
  //  formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
  //              splits = data.split("-");
  //              year = splits[0];
  //              month = splits[1];
  //              day = splits[2].split("T")[0];
  //              convert_date = year+"-"+month+"-"+(parseInt(day)+1);
  //           formData.append("date",convert_date);

  //                   jQuery.ajax({
  //                  url: host_url+"leave_manage",
  //                   type: "post",
  //                   cache: false,
  //                   data: formData,
  //                   processData: false,
  //                   contentType: false,
  //                   success:function(data) { 
  //                        var obj = JSON.parse(data);
  //                        console.log(obj.status);
  //                      if(obj.status==true)
  //                      {
  //                            window.location.reload();
  //                      }
  //                   }//successs close     
  //               });//ajax close
               

  //           });
          });
      </script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                dayMaxEvents: true, // allow "more" link when too many events

                events: [
                    {
                        title: 'Event',
                        start: '2021-09-01',
                        //   image_url: '../images/dashbaord/u2.png',
                    },


                    {
                        title: 'Holiday',
                        start: '2021-09-03',
                        //   image_url: '../images/dashbaord/u2.png',
                    },
                    {
                        title: 'hello',
                        start: '2021-09-02',
                        image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                    },
                    {
                        title: 'sad',
                        start: '2021-09-02',
                        image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                    },
                    {
                        title: 'Event',
                        start: '2021-09-02',
                        image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                    },
                    {
                        title: 'dsaf',
                        start: '2021-09-02',
                        image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                    },
                ],
                eventContent: function (arg) {
                    let arrayOfDomNodes = []
                    // title event
                    let titleEvent = document.createElement('div')
                    if (arg.event._def.title) {
                        titleEvent.innerHTML = arg.event._def.title
                        titleEvent.classList = "fc-event-title fc-sticky"
                    }

                    // image event
                    let imgEventWrap = document.createElement('span')
                    if (arg.event.extendedProps.image_url) {
                        let imgEvent = '<img src="' + arg.event.extendedProps.image_url + '" >'
                        imgEventWrap.classList = "fc-event-img"
                        imgEventWrap.innerHTML = imgEvent;
                    }

                    arrayOfDomNodes = [titleEvent, imgEventWrap]

                    return { domNodes: arrayOfDomNodes }
                },
            });
            calendar.render();

        });
    </script>

     <script>
        var $calendar;
        $(document).ready(function () {
          var container = $("#container").simpleCalendar({
            fixedStartDay: 0, // begin weeks by sunday
            disableEmptyDetails: true,
           
      
          });
          $calendar = container.data('plugin_simpleCalendar')
        });
      </script>

<script>
// $("input[type=time]").on("change", function() {
//   console.log(this.valueAsDate)
// })

// $("#to_time").on("change",function(){
//     from_time =$("#from_time").val();
//     to_time =$(this).val();
//     if(from_time > to_time)
//     {
//         $("#message").text("to Time More Then form time");
//        return false;
//     }

// });
$("#from_time").on("change",function(){
    to_time =$("#to_time").val();
    from_time =$(this).val();
    if(to_time >from_time)
    {
        $("#message").text("from Time More Then to time");
       return false;
    }
});

// $("#efrom_time").change(function(){
//     console.log($("#efrom_time").val());
//     $("#ef_time").val($("#efrom_time").val());
//     $("#et_time").val($("#eto_time").val());
// });
// $("#eto_time").change(function(){
    
    
     
//     //  $("#ef_time").val( $("#efrom_time").val());
//     //  $("#et_time").val( $("#eto_time").val());
//  });
$(".edittime_slot").on("click",function(){
    id = $(this).attr("data-id");
    from_time = $(this).attr("data-from");
    
    // var startTime = Date();
    // Date.parseExact(from_time, "hh:mm tt");
    //     alert(startTime);

    // var startDate = new Date( from_time);
  
    to_time = $(this).attr("data-to");
  //console.log(typeOf(from_time));
    $("#id").val(id);
    $("#efrom_time").val(from_time.substr(0, 5));
    $("#eto_time").val(to_time.substr(0, 5));
    $("#edittime").modal('toggle');
});

$(".add_more").on("click",function(){

    // from_time =$("#from_time").val();
    // to_time =$("#to_time").val();
    // if(from_time > to_time)
    // {
    //     $("#message").text("to Time More Then form time");
    //    return false;
    // }

//     id = parseInt($("#slot_time_id").val());
   
//     ids = id+1;
//     $("#slot_time_id").val(ids);
//     from_time = $("#from_time").val();
//     to_time =$("#to_time").val();
//    f_time = from_time.substring(0, from_time.indexOf(':'));
//    st = ""; 
//    if(f_time>12)
//     {
//         st+="PM";
//     }
//     else
//     {
//         st+="AM";
//     }
   // $(".slotbox").append('<h4>SLOT - '+ids+'</h4><div class="time_box"><p>'+from_time+ ' '+ st+'  </p>-<p>'+to_time+ ' '+ st+'  </p><span class="fii-edit-d dayedittime" data-from="'+from_time+'" data-to="'+to_time+'" data-toggle="modal" data-target="#edittime"></span></div>');
 
  $('#addtime').modal('toggle');
  $(".modal-backdrop").remove();
  host_url = "/development/fitness/";

  from_time = $("#from_time").val();
  to_time = $("#to_time").val();
//   if(to_time >from_time)
//   {
//     $("#message").text("to Time More Then form time");
//       return false;
//   }
  var formData= new FormData(jQuery('#time_slot')[0]);
  formData.append("fitness_trainner_id",{{Session::get('fitness_tranner_id')}});
  formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
  formData.append("from_time",from_time);
  formData.append("to_time",to_time);
    jQuery.ajax({
            url: host_url+"firness_trainer_time_slot",
            type: "post",
            cache: false,
            data: formData,
            processData: false,
            contentType: false,
            
            success:function(data) { 
            var obj = JSON.parse(data);
            if(obj.status==true){
                console.log(obj.data);
                window.location.href= host_url+"Set-Availability";
            }

            }
        });
});
$(".btnsubmittimeslot").on("click",function(){
    from_time = $("#efrom_time").val();
    to_time = $("#eto_time").val();
   
    // if(from_time > to_time)
    // {
    //     $("#message").text("to Time More Then form time");
    //    return false;
    // }
    // else
    // {

    // }
    host_url = "/development/fitness/";
  var formData= new FormData(jQuery('#etime_slot')[0]);
  formData.append("fitness_trainner_id",{{Session::get('fitness_tranner_id')}});
  formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
  formData.append("from_time",from_time);
  formData.append("to_time",to_time);
    jQuery.ajax({
            url: host_url+"edit_firness_trainer_time_slot",
            type: "post",
            cache: false,
            data: formData,
            processData: false,
            contentType: false,
            
            success:function(data) { 
            var obj = JSON.parse(data);
            if(obj.status==true){
                console.log(obj.data);
                window.location.reload();
            }

            }
        });
});

//==============btsubmitnset_working_day start add============================

$(".btsubmitnset_working_day").on("click",function(){
    


host_url = "/development/fitness/";
  var formData= new FormData(jQuery('#set_working_day')[0]);
  formData.append("fitness_trainner_id",{{Session::get('fitness_tranner_id')}});
  formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
    jQuery.ajax({
            url: host_url+"add_firness_trainer_set_working_day",
            type: "post",
            cache: false,
            data: formData,
            processData: false,
            contentType: false,
            
            success:function(data) { 
            var obj = JSON.parse(data);
            if(obj.status==true){
                console.log(obj.data);
                window.location.reload();
            }

            }
        });
    });
//==============btsubmitnset_working_day end add============================

$(".dayedittime").on("click",function(){
    from_time = $(this).attr("data-from");
  //  alert(from_time);
});
    mobiscroll.setOptions({
        locale: mobiscroll.localeEn,         // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                        // Specify theme like: theme: 'ios' or omit setting to use default
            themeVariant: 'light'            // More info about themeVariant: https://docs.mobiscroll.com/5-9-1/calendar#opt-themeVariant
    });
    
    $(function () {
        // Mobiscroll Calendar initialization
        $('#demo-multi-day').mobiscroll().datepicker({
            controls: ['calendar'],          // More info about controls: https://docs.mobiscroll.com/5-9-1/calendar#opt-controls
            display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
            selectMultiple: true
        });
    });
</script>


<script>
/*
document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'dayGridMonth',
              dayMaxEvents: true, // allow "more" link when too many events

              events: [
              {
                  title: 'Event',
                  start: '2021-09-01',
                //   image_url: '../images/dashbaord/u2.png',
                },
                

                {
                  title: 'Holiday',
                  start: '2021-09-03',
                //   image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                },
                {
                  title: 'hello',
                  start: '2021-09-02',
                  image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                },
                {
                  title: 'sad',
                  start: '2021-09-02',
                  image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                },
                {
                  title: 'Event',
                  start: '2021-09-02',
                  image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                },
                {
                  title: 'dsaf',
                  start: '2021-09-02',
                  image_url: '{{asset("public/assets/images/dashbaord/u2.png")}}',
                },
              ],
              eventContent: function(arg) {
                let arrayOfDomNodes = []
                // title event
                let titleEvent = document.createElement('div')
                if(arg.event._def.title) {
                  titleEvent.innerHTML = arg.event._def.title
                  titleEvent.classList = "fc-event-title fc-sticky"
                }
    
                // image event
                let imgEventWrap = document.createElement('span')
                if(arg.event.extendedProps.image_url) {
                  let imgEvent = '<img src="'+arg.event.extendedProps.image_url+'" >'
                  imgEventWrap.classList = "fc-event-img"
                  imgEventWrap.innerHTML = imgEvent;
                }
    
                arrayOfDomNodes = [ titleEvent,imgEventWrap ]
    
                return { domNodes: arrayOfDomNodes }
              },
            });
            calendar.render();
 
         });
  */


  </script>

  


</body>

</html>

