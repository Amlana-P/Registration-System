<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<form method="post" action="register.php">
		<!-- Main Content -->
		<div class="container-fluid">
			<div class="row main-content bg-success text-center">
				<div class="col-md-4 text-center company__info">
					<span class="company__logo"><h2><span class="fa fa-user-plus"></span></h2></span>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
					<div class="container-fluid">
						<div class="row">
							<h2>Sign up</h2>
						</div>
						<?php include('errors.php'); ?>
						<div class="row">
							<form control="" class="form-group">
								<div class="row">
									<input type="text" name="username" id="username" class="form__input" placeholder="Username" value="<?php echo $username; ?>">
								</div>
								<div class="row">
									<input type="text" name="email" id="email" class="form__input" placeholder="Email" value="<?php echo $email; ?>">
								</div>
								<div class="row">
									<!-- <span class="fa fa-lock"></span> -->
									<input type="password" name="password_1" id="password1" class="form__input" placeholder="Password">
								</div>
								<div class="row">
									<!-- <span class="fa fa-lock"></span> -->
									<input type="password" name="password_2" id="password2" class="form__input" placeholder="Confirm Password">
								</div>
								<div class="row">
									<input type="submit" value="Submit" class="btn" name="reg_user" placeholder="Register">
								</div>
							</form>
						</div>
						<div class="row">
							<p>Already a member? <a href="login.php">Sign in</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>