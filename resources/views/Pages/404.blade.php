
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">
		
		<title>404</title>
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		
		
	</head>
	
	<style>
		.section_padding {
		padding-top: 110px;
		padding-bottom: 110px;
		}
		.error_section .error_box {
		margin: 0 auto;
		text-align: center; 
		font-family: 'Poppins', sans-serif;
		}
		.error_section .error_box h1 {
		font-size: 100px;
		font-weight: bold;
		}
		.error_section .error_box h4 {
		text-transform: uppercase;
		font-size: 24px;
		font-weight: 600;
		margin: 15px 0px 10px 0px; 
		}
		.error_section .error_box p {
		font-size: 15px;
		font-weight: 400;
		}
		.theme_button {
		background: #0c7bb7 !important;
		color: #fff !important;
		border-radius: 12px;
		padding: 10px 30px;
		}
	</style>
	
	<body>
		<section class="error_section section_padding">
			<div class="container">
				<div class="error_box col-md-5">
					<h1>Oops!</h1>
					<h4>404 - Page Not Found</h4>
					<p>The page you are looking for might have been removed had its name changed or us temporaily unavailable.</p>
					<a href="{{ url('/dashboard') }}" class="btn theme_button">Back to Home</a>
				</div>
			</div>
		</section>
	</body>
</html>