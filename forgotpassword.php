<?php

include_once 'server.php';
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $result = mysqli_query($db,"SELECT * FROM `users` WHERE email='".$email."'");
  $row = mysqli_fetch_assoc($result);
  $fetch_email=$row['email'];
  $email_id=$row['email'];
  $password=$row['password'];
  if($email==$fetch_email) {
    $to = $email_id;
    $subject = "Password";
    $txt = "Your password is : $password.";
    $headers = "From: recovery@cogentwebservices.com" . "\r\n" .
    "CC: amlana.pattnayak@gamil.com";
    mail($to,$subject,$txt,$headers);
  }
  else{
   echo 'invalid email';
 }
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Forgot password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <form action='forgotpassword.php' method='post'>
    <!-- Main Content -->
    <div class="container-fluid">
      <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
          <span class="company__logo"><h2><span class="fa fa-key"></span></h2></span>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
          <div class="container-fluid">
            <div class="row">
              <h2>Forgot Password</h2>
            </div>
            <?php include('errors.php'); ?>
            <div class="row">
              <form control="" class="form-group">
                <div class="row">
                  <input type="text" name="email" id="email" class="form__input" placeholder="Email" value="<?php echo $email; ?>">
                </div>
                <div class="row">
                  <input type="submit" value="Submit" class="btn" name="submit">
                </div><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>