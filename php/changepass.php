<?php
$conn = mysqli_connect("localhost", "root", "", "image_voult") or die("Connection Error: " . mysqli_error($conn));
if (isset($_POST['submit'])) {
$currentPassword =$_POST['currentPassword'];
$newpassword =$_POST['confirmPassword'];
session_start();
$user=$_SESSION['username'];
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT password FROM `registration` WHERE username='$user'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE registration set password='$newpassword' WHERE username='$user'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
}
?>
<html>
    <link rel="stylesheet" href="../style1.css">
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
}
return output;
}
</script>
</head>
<body>
    <style>
        body{
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            background-color: aliceblue;

        }
        .form12{
            align-items: center;
            height: fit-content;
            padding: 20px;
        }
        h1{
            margin-bottom: 30px;
        }
        .form-label{
            font-size: 20px;
        }
        .messagess{
            height: 20px;
            padding-top: 10px;
            padding-bottom: 30px;
            font-size: 15px;
            color: red;

        }
    </style>
            <form name="frmChange" method="POST" class="form12" onSubmit="return validatePassword()">
                    <h1 >Change Password</h1>
                <div class="form-group" >
                  <input type="password" required name="currentPassword" id="currentPassword" class="form-control">
                  <label for="name" class="form-label" autocomplete="off">Current Password</label>
                </div>
                <div class="form-group fp">
                    <input type="password" required name="newPassword" id="newPassword" class="form-control">
                    <label for="name" class="form-label">New Password</label>
                </div><div class="form-group fp">
                    <input type="password" required name="confirmPassword" id="confirmPassword" class="form-control">
                    <label for="name" class="form-label">Conform Password</label>
                </div>
                <div class="messagess"><?php if(isset($message)) { echo $message; } ?></div>
              <button type="submit" name="submit" value="Submit" class="btn fp" style="margin-top: 0;" href="#signIn">submit</button>
            </form>
    <!-- <form name="frmChange" method="POST" onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="submit"
                        value="Submit" class="main-btn"></td>
                </tr>
            </table>
        </div>
    </form> -->
</body>
</html>