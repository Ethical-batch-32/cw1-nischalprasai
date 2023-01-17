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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Radius - Signin/Signup</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container" id="signupsection">
              <form  method="post" class="form-2" id="signform">
                    <h1 style="padding-bottom:20px ;">Register Here</h1>
                <div class="form-group" >
                  <input id="Name" type="text"  required class="form-control" name="Full-name">
                  <label for="name" class="form-label" autocomplete="off">Full-name</label>
                </div>
                <div class="form-group">
                  <input id="signup-email" type="email" required class="form-control" name="Email">
                  <label for="signup-email" class="form-label">E-mail</label>
                  <p class="message"><?php if (isset($error['e'])) echo $error['e']; ?></p>
                </div>
                <div class="form-group">
                    <input id="Username" type="text" required class="form-control" name="Username">
                    <label for="name" class="form-label">Username</label>
                </div>
                <div class="form-group">
                  <input id="signup-password" type="password" required class="form-control input-2"  name="Password">
                  <label for="signup-password" class="form-label">Password</label>
                  <div class="progress-bar_wrap">
                    <span class="progress-bar_text" style="color:red ;"></span>
                  </div>
                </div>

              <button type="submit" name="insert" value="insert" class="btn" id="signup-button" style="margin-top: 0;" href="#signIn">submit</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <div class="form-login">
                <!-- <div class="panda">
                  <div class="ear"></div>
                  <div class="face">
                    <div class="eye-shade"></div>
                    <div class="eye-white">
                      <div class="eye-ball"></div>
                    </div>
                    <div class="eye-shade rgt"></div>
                    <div class="eye-white rgt">
                      <div class="eye-ball"></div>
                    </div>
                    <div class="nose"></div>
                    <div class="mouth"></div>
                  </div>
                  <div class="body"> </div>
                  <div class="foot">
                    <div class="finger"></div>
                  </div>
                  <div class="foot rgt">
                    <div class="finger"></div>
                  </div> -->
                </div>
                <form id="loginform" action="php/login.php" method="POST" class="form">
                  <div class="hand"></div>
                  <div class="hand rgt"></div>
                  <h1>Nischal Login</h1>
                  <div class="form-group">
                    <input id="Username" type="text" required class="form-control" name="Username">
                    <label for="name" class="form-label">Username</label>
                  </div>
                  <div class="form-group">
                    <input id="password" name="Password" type="password" required="required" class="form-control"/>
                    <label for="password" class="form-label">Password</label>
                    <p class="alert">Invalid Credentials..!!</p>
                    <button class="btn" name="get" value="get">Login </button>
                  </div>
                </form>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-left">
                <div >
                <h1><?php if (isset($error['u'])) echo $error['u']; ?></h1>
                <h1><?php if (isset($error['e'])) echo $error['e']; ?></h1>
                <h1><?php if (isset($message['s'])) echo $message['s']; ?></h1>
                <h1><?php if (isset($message['f'])) echo $message['f']; ?></h1>
                </div>
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="main1.js"></script>
</body>

</html>