<?php
$conn = mysqli_connect('localhost','root','','image_voult');
if (isset($_POST['insert'])) {
  $Fullname =$_POST['Full-name'];
 $Email =$_POST['Email'];
 $Username =$_POST['Username'];
 $Password =$_POST['Password'];
 $error = array();
 $message = array();
 $user = "SELECT username FROM registration WHERE username='$Username' ";
 $usercheck=mysqli_query($conn,$user);
 $ema = "SELECT email FROM registration WHERE email='$Email' ";
 $emailcheck=mysqli_query($conn,$ema);
 if (mysqli_num_rows($usercheck)>0) {
  $error['u']="(---Username Exist---)";

 }
 if (mysqli_num_rows($emailcheck)>0) {
  $error['e']="(---Email already taken!---)";

 }
if (count($error)==0) {
    $quary= "INSERT INTO registration (fullname, email, username, password) values('$Fullname', '$Email' , '$Username' ,'$Password')";
    $result = mysqli_query($conn,$quary);
    if ($result) {
      $message['s']="(---Regristration Successfull ;)---)";
      $newdb="CREATE TABLE $Username($Username VARCHAR(30),image_url TEXT)";
      // $newdb="CREATE TABLE `$Username`. (`id` INT NOT NULL AUTO_INCREMENT , `image_url` VARCHAR NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
      $do=mysqli_query($conn,$newdb);
    }else{
      $message['f']="(---Unknown error!'fail'---)";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="log.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
        <form  method="post" class="form-2" id="signform">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Full-name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Username" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="pass" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" value="insert" name="insert" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class="sign-in">

            <div class="container">
                <div class="signin-content">

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form id="loginform" action="php/login.php" method="POST" class="form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Username" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="get" value="get" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                                            </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>