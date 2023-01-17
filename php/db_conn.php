<?php
// session_start();
$sname = "localhost";
$uname = "root";
$password = "";
// $db_name = $_SESSION['username'];
// echo $db_name;

$conn = mysqli_connect($sname, $uname, $password, "image_voult");

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>
