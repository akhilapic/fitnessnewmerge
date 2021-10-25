<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="robots" content="noindex,nofollow">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/admin/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/assets/admin/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/admin/dist/css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('public/assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>
    <div class="main-wrapper">
        
        <!-- -------------------------------------------------------------- -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- -------------------------------------------------------------- -->
        <div class="preloader">
			<div class="spinner-border text-muted"></div>
		</div>
        <!-- -------------------------------------------------------------- -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Login box.scss -->
        <!-- -------------------------------------------------------------- -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(public/assets/admin/images/background/login-register.jpg) no-repeat center center; background-size: cover;">
            
			
		    <div class="auth-box p-4 bg-white rounded">
			    <div class="logo_box_login mb-4">
					<a class="navbar-brand" href="javascript:void(0);">
						<!-- Logo icon -->
						<b class="logo-icon">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="public/assets/admin/images/logo-icon.png"  alt="homepage" class="dark-logo"/>
						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<img src="public/assets/admin/images/logo-text.png" alt="homepage" class="dark-logo" />
						</span>
					</a>
				</div>
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3">Sign In</h3>
                    </div>
                    <!-- Form -->
                    @if (\Session::has('msg'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('msg') !!}</li>
                        </ul>
                    </div>
                @endif
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" class="form-horizontal mt-3 form-material" id="loginform" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                 <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>

                                        <span class="icon-right fa input_icon fa-eye-slash" id="hidden1" data-name="password"></span>
                                        @if ($errors->has('password'))
                                        <span class="alert alert-danger">{{ $errors->first('password') }}</span>
                                        @endif    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="checkbox checkbox-info pt-0">
                                            <input id="checkbox-signup" type="checkbox" class="material-inputs chk-col-indigo">
                                            <label for="checkbox-signup"> Remember me </label>
                                        </div>
                                        <!--<div class="ms-auto">-->
                                        <!--    <a href="javascript:void(0)" id="to-recover" class="link font-weight-medium"><i class="fa fa-lock me-1"></i> Forgot pwd?</a>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="form-group text-center mt-4 mb-3">
                                    <div class="col-xs-12">
                                    <a href="{{ url('/dashboard') }}">
                                        <button class="btn btn-info d-block w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <h3 class="font-weight-medium mb-3">Recover Password</h3>
                        <span class="text-muted">Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row mt-3 form-material">
                        <!-- Form -->
                        <form class="col-12" action="{{ url('/dashboard') }}">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" required="" placeholder="Username">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn d-block w-100 btn-info text-uppercase" type="submit" name="action">Reset</button>
                                </div>
                            </div>
							<div class="form-group mb-0 mt-4">
								<div class="col-sm-12 justify-content-center d-flex">
									<p><a href="{{ url('/login') }}" class="text-info font-weight-medium ms-1">Login</a></p>
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- Login box.scss -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
 
    <script src="{{ asset('public/assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    
    <script src="{{ asset('public/assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- -------------------------------------------------------------- -->
    <!-- This page plugin js -->
    <!-- -------------------------------------------------------------- -->
    
    <script>
        $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
    <script>
  $(".input_icon").on("click",function(){
           type=$("input[name='"+$(this).data("name")+"']").attr("type");
            if(type=='password')
           {

               $("input[name='"+$(this).data("name")+"']").attr("type",'text');
               $("#hidden1").removeClass('fa-eye-slash');
               $("#hidden1").addClass('fa-eye');

           }
           else
           {
               $("input[name='"+$(this).data("name")+"']").attr("type",'password');
                $("#hidden1").addClass('fa-eye-slash');
               $("#hidden1").removeClass('fa-eye');
           }
        });
    </script>
</body>

</html>


