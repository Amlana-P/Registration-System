<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
	<form method="post" action="login.php">
		<!-- Main Content -->
		<div class="container-fluid">
			<div class="row main-content bg-success text-center">
				<div class="col-md-4 text-center company__info">
					<span class="company__logo"><h2><span class="fa fa-sign-in"></span></h2></span>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
					<div class="container-fluid">
						<div class="row">
							<h2>Log In</h2>
						</div>
						<?php include('errors.php'); ?>
						<div class="row">
							<form control="" class="form-group">
								<div class="row">
									<input type="text" name="username" id="username" class="form__input" placeholder="Username">
								</div>
								<div class="row">
									<!-- <span class="fa fa-lock"></span> -->
									<input type="password" name="password" id="password" class="form__input" placeholder="Password">
								</div>
								<div class="row">
									<input type="checkbox" name="remember_me" id="remember_me" class="">
									<label for="remember_me">Remember Me!</label>
								</div>
								<div class="row">
									<input type="submit" value="Submit" class="btn" name="login_user">
								</div>
							</form>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<p>Don't have an account? <a href="register.php">Register Here</a></p>
							<p>Forgot password? <a href="forgotpassword.php">Click Here</a></p>
							<div class="omb_login">
								<h3 class="omb_authTitle">Login using social media</h3>
								<div class="row omb_row-sm-offset-3 omb_socialButtons">
									<div class="col-xs-4 col-sm-2">
										<a href="#" class="btn btn-lg btn-block omb_btn-facebook">
											<i class="fa fa-facebook visible-xs"></i>
											<span class="hidden-xs">Facebook</span>
										</a>
									</div>
									<div class="col-xs-4 col-sm-2">
										<a href="#" class="btn btn-lg btn-block omb_btn-twitter">
											<i class="fa fa-twitter visible-xs"></i>
											<span class="hidden-xs">Twitter</span>
										</a>
									</div>	
									<div class="col-xs-4 col-sm-2">
										<a href="#" class="btn btn-lg btn-block omb_btn-google">
											<i class="fa fa-google-plus visible-xs"></i>
											<span class="hidden-xs">Google+</span>
										</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>


	</body>
	</html>