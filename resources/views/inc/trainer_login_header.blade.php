<main class="trainer_page trainer_page_margin">
    <section class="user_deatils">
        <div class="container">
            <div class="u_bg trainer_page_bg">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-9">
                        <div class="user_details_left d-flex align-items-center">
                            <div class="mr-4 user_img">
                                <span> 
        @if(!empty($fitnesstrainer))
         <img src="{{asset('public/images/'.$fitnesstrainer->image)}}" alt=""> 
        @else
 <img src="{{asset('public/images/1.png')}}" alt=""> 
        @endif                        

                                       
                                        
                                     
                                </span>
                                <i class="fii-edit-d"></i>
                            </div>
                            <div class="user_name">
                                <h3 class="secondary font-26 fb mb-3">{{$fitnesstrainer->name}}</h3>
                                <h5 class="fm font-16">{{$fitnesstrainer->email}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-3">
                        <a href="../index.html" class="secondary"> <span
                                class="fii-logut-blue-d ml-auto d-block trainer_lgout_icon text-right font-24"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dashbaord_menu">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="dash_menu_list">
                            <!-- <span class="fii-more-d dash_menu_btn"></span> -->
                        <div class="dash_menu_btn d-sm-none d-block">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul class="dash_menus_li triner_dash_menu">
                            <li>
                                <a href="{{url('/fitness_trainer_login_my_profile_view')}}" class="active">
                                    <span class="fii-user-d"></span>
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Set-Availability')}}">
                                    <span class="fii-date-d"></span>
                                    Set Availability
                                </a>
                            </li>
                            <li>
                                <a href="booking.html">
                                    <span class="fii-booking-d"></span>
                                    Bookings
                                </a>
                            </li>
                            <li>
                                <a href="bank-account.html">
                                    <span class="fii-bank-d"></span>
                                    Bank Account
                                </a>
                            </li>
                            <li>
                                <a href="Transactions.html">
                                    <span class="fii-transaction-d"></span>
                                    Transactions
                                </a>
                            </li>
                            <li>
                                <a href="notification.html">
                                    <span class="fii-notification"></span>
                                    Notifications
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>