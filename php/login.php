<?php
$Username =$_POST['Username'];
$Password =$_POST['Password'];

// Database connection
$conn = mysqli_connect('localhost','root','','image_voult');
$check = " SELECT * FROM registration WHERE username = '$Username' && password = '$Password' ";

$result = mysqli_query($conn, $check);
$num = mysqli_num_rows($result);
if ($num>0) {
    session_start();
    $_SESSION['username']= $Username;
    header('location:index.php');

if (!$conn) {
	echo "Connection failed!";
	exit();
}

}

else {

    header('location:../log-in.php');

}

?>
