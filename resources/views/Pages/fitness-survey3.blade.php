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
			<img src="{{asset('/assets/images/fitness-survey-sideimg03.jpg')}}" alt="">
		</div>

		<!-- Header -->
		<div class="fitness-header">
			<div class="container">
				<div class="d-flex justify-content-between">
					<a href="index.html" class="logo"><img src="{{asset('/assets/images/logo.svg')}}" alt=""></a>

					<a href="membership" class="f-18 fr white">Skip</a>
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
							<li class="is-completed d-flex">
								<span class="icon fii-tick-round"></span>
								<div>
									<h2 class="title fm ttu mb-0">Step 2</h2>
									<p class="para fm ttu mb-0">Fill your body details</p>
								</div>
							</li>
							<li class="is-active d-flex">
								<span class="icon fii-tick-round"></span>
								<div>
									<h2 class="title fm ttu mb-0">Step 3</h2>
									<p class="para fm ttu mb-0">Fill your body details</p>
								</div>
							</li>
						</ul>
					</div>

					<div class="col-right">
						<form action="{{route('fitness_survey_three')}}" id="fitness_survey" method="post">
						@csrf
							<div class="panel">
								<label class="fm black">Length of training / day</label>
								<div class="form-group form-group-gray">
									<div class="input-group d-flex justify-content-between">
										<select id="trainingday" name="length_training">
											<option value="">Select Option</option>
											<option value="1">Once A Day</option>
											<option value="2">Twice A Day</option>
											<option value="3">Week</option>
										</select>
									</div>
								</div>
							</div>

							<div class="panel">
								<label class="fm black">Your fitness goal</label>
								<div class="form-group form-group-gray">
									<div class="input-group d-flex justify-content-between">
										<select id="fitnessgoal" name="fitness_goal">
                                            <option value="">Select Option</option>
											<option value="Triangle">Triangle or “pear”</option>
											<option value="Spoon">Spoon</option>
											<option value="Hourglass">Hourglass</option>
                                            <option value="Top hourglass">Top hourglass</option>
                                            <option value="Bottom hourglass">Bottom hourglass</option>
                                            <option value="Inverted triangle or “apple">Inverted triangle or “apple”</option>
                                            <option value="Round or oval">Round or oval</option> 
                                            <option value="Diamond">Diamond</option>   
                                            <option value="Others">Others</option>         
                                            
										</select>
									</div>
								</div>
							</div>

							<div class="panel">
								<label class="fm black">Area diet should have particular impact</label>
								<div class="form-group form-group-gray">
									<div class="input-group d-flex justify-content-between">
										<select id="dietselect" name="diedt_impact">
											<option value="">Select Option</option>
											<option value="Body">Body </option>
											<option value="Mind">Mind</option>
											<option value="Libido">Libido</option>
										</select>
									</div>
								</div>
							</div>

							<div class="btn-group d-flex aic justify-content-between">
								<a href="" class="fm primary" > <span class="arrow-ic fii-angle-arrow-left mr-1"></span>Back</a>
								<button type="submit" onclick="" class="fm primary" >Finish <span class="arrow-ic fii-angle-arrow-right ml-1"></span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>
    

    <div class="modal fade done_message" id="b_trainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content pt-5 pb-5">
        <div class="modal-body text-center ">
          <img src="{{asset('assets/images/extra/check.png')}}" alt="">
          <h4>Success!</h4>
          <p>Fitness Survey Successfully.</p>
        </div>
        <div class="modal-footer justify-content-center border-0">
          <button type="button" data-dismiss="modal" class="btn btn-xs btn-primary  fr" onclick="">Done</button>
        </div>
      </div>
    </div>
  </div>


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

    <script>
	$("#fitness_survey3").validate(
		
	rules: {
		gender: {required: true,},
		weight: {required: true,},  
	
		// password:{required:true},
		// // specialization:{required:true},
		// phone:{ 
		// required:true,
		// minlength:10,
		// maxlength:10}, 
		// address:{required:true},
	
		},
	
	messages: {
		gender: {required: "Please enter gender",},weight: {required: "Please enter valid weight"},   
		// phone: {required: "Please enter Mobile Number",},
		// password: {required: "Please enter password",},
		// specialization: {required: "Please enter specialization",},
		// gender: {required: "Please select gender",},
		// upload_doc:{required:"Please Upload Document"},
	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#fitness_survey')[0]);
		   formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
		   u ="development/fitness/";
		  
		jQuery.ajax({
				url: u+"fitness_survey_three",
				type: "post",
				cache: false,
				data: formData,
				processData: false,
				contentType: false,
				
				success:function(data) { 
				var obj = JSON.parse(data);
				
				if(obj.status==true){
					$(".result").text(obj.message);
					setTimeout(function(){
						 $("#b_trainer").modal('show');
						 window.location.href = "";
					}, 1000);
				}
				else{
					if(obj.statusmobile_number==false){
						jQuery('#mobile_number_error').html(obj.message);
						jQuery('#mobile_number_error').css("display", "block");
					}
					else if(obj.statusemail==false){
						jQuery('#email_error').html('');
						jQuery('#email_error').html(obj.message);
						jQuery('#email_error').css("display", "block");
					}
					else{
						jQuery('#mobile_number_error').html('');
						jQuery('#email_error').html('');
					}
				}
				}
			});
		}
	});

</script>

</body>

</html>