<?php

 $base_url =  URL::to('/');
?>
@include("inc/header");
<meta name="csrf-token" content="{{ csrf_token() }}" />
   <!-- main -->
    
    <!-- main -->
    @foreach($workoutplan as $c)

    <main>
        <!-- Payment Section -->
        <section class="payment-section">
            <div class="container">
                <h2 class="pagetitle f-60 fblack secondary text-center">Payment</h2>

                <div class="payment-row-block mx-auto">
                    <div class="payment-row row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-left">
                            <div class="d-flex justify-content-between mb-4">
                                <h6 class="f-24 fb secondary mb-0">Selected Fit Plan</h6>
                                <p class="f-18 fr primary mb-0"><a href="#"><span class="fii-edit mr-2"></span>Edit Fit Plan</a></p>
                            </div>

                            <div class="featured-plan-col">
                                <div class="image-block">
                                    <img src="{{asset('assets/images/payment-fitplan-img.png')}}" alt="">
                                    <div class="name-block d-flex aic">
                                        <span class="name-img"><img src="{{asset('assets/images/featured-plan-user-img02.jpg')}}" alt=""></span>
                                        <span class="name f-24 fr white">{{$c->fitness_trainers_name}}</span>
                                    </div>
                                    <div class="tag f-16 fr white d-inline-flex aic">
                                        <span class="fii-tick-round"></span>
                                        Workout By Yourself
                                    </div>
                                </div>
        
                                <div class="content">
                                    <h4 class="title f-26 fb secondary"><a href="#">{{$c->name}}</a><span class="toottips">{{$c->level}}</span></h4>
                                    <div class="d-flex justify-content-between">
                                        <div class="col px-0 text-left">
                                            <h6 class="f-16 fb subhead ttu">Workout frequency</h6>
                                            <p class="f-24 fb black-100 mb-0">{{$c->frequency}}x/Week</p>
                                        </div>
                                        <div class="col px-0 text-right">
                                            <h6 class="f-16 fb subhead ttu">Workout type</h6>
                                            <p class="f-24 fb black-100 mb-0">{{$c->type}}</p>
                                        </div>
                                    </div>

                                    <ul class="list">
                                        <li class="d-flex">
                                            <span class="fii-tick-round-green mr-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                            <p class="f-22 fr black mb-0">Tracks reps, sets and right time in website</p>
                                        </li>
                                        <li class="d-flex">
                                            <span class="fii-tick-round-green mr-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                            <p class="f-22 fr black mb-0">Video instruction for every exercise</p>
                                        </li>
                                        <li class="d-flex">
                                            <span class="fii-tick-round-green mr-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                            <p class="f-22 fr black mb-0">Download Workout Fit Plan Videos</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-right">
                            <h6 class="f-24 fb secondary mb-4">Pay Amount</h6>
                            <div class="promo-form h-87 d-flex aic px-4">
                                <p class="f-36 fb primary mb-0">$ {{$c->amount}}</p>
                            </div>

                            <form action="javascript:void(0)">
                                <h6 class="f-24 fb secondary mb-4">Choose Payment Option</h6>

                                <div class="payment-option-block">
                                    <div class="head d-flex justify-content-between active">
                                        <div class="custom-control custom-radio custom-radio-red02">
                                            <input type="radio" class="custom-control-input" id="paymentcustomRadio1" name="paymentoption" value="" checked>
                                            <label class="custom-control-label" for="paymentcustomRadio1">Credit or Debit Card</label>
                                        </div>

                                        <img src="{{asset('assets/images/credit-card-ic.svg')}}" alt="">
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group form-group-gray">
                                                    <label class="text-left w-100">Card Number</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="1234 1234 1234 1234">
                                                        <span class="icon-right"><img src="{{asset('assets/images/mastercard-ic.svg')}}" alt=""></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group form-group-gray">
                                                    <label class="text-left w-100">Cardholder Name</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Enter Cardholder Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-8">
                                                <div class="form-group form-group-gray">
                                                    <label class="text-left w-100">Expiry Date</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="MM / YYYY">
                                                        <span class="icon-right"><img src="{{asset('asset/images/calendar-ic.svg')}}" alt=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group form-group-gray">
                                                    <label class="text-left w-100">CVV</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="CVV">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            

                                        
                                    </div>
                                </div>

                                <div class="payment-option-block">
                                    <div class="head d-flex justify-content-between">
                                        <div class="custom-control custom-radio custom-radio-red02">
                                            <input type="radio" class="custom-control-input" id="paymentcustomRadio2" name="paymentoption" value="">
                                            <label class="custom-control-label" for="paymentcustomRadio2">Paypal</label>
                                        </div>

                                        <img src="{{asset('assets/images/paypal-ic.svg')}}" alt="">
                                    </div>
                                </div>

                                <div class="row mt-5 aic">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
                                        <div class="custom-control custom-checkbox custom-checkbox-white">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                            <label class="custom-control-label black" for="customCheck">I agree to the <a href="#" class="black d-inline-block tdu">Terms & Condition</a></label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-sm-right">
                                        <button type="submit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#paymentmodal">Payment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    @include("inc/footer");
    <!-- Payment Modal -->
<div class="modal fade paymentmodal" id="paymentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content text-center">
		<img class="success-icon" src="{{asset('assets/images/success-ic.svg')}}" alt="">
		<h2 class="f-22 fr title"></h2>
		<p class="para f-18 fr black-300">
			Your payment has been processed <br/>
			successfully
		</p>
		<a href="{{url('/fit-plan-by-yourself-after-payment')}}/{{$c->id}}" class="btn btn-xs btn-primary mx-auto">Done</a>
	  </div>
	</div>
  </div>

  @endforeach