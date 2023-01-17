<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Upload image</title>
</head>
<body>
<div class="header">
    <div class="component">
        <a href="">Welcome <?php session_start(); echo $_SESSION['username']?> </a>
        <div class="button">
        <a class="main-btn" href="changepass.php">Change Password</a>
        <a class="main-btn" href="logout.php">Log-Out</a>
        </div>
    </div>
</div>
<div style="display:flex;justify-content:center;">


<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="my_image">
    <input type="submit" name="submit" value="upload">
    <?php if (isset($_GET['error'])):  ?>
    <p><?php echo $_GET['error']; ?></p> <?php endif ?>
</div>
<div class="view" style="display:flex; justify-content: center; align-items: center;flex-wrap:wrap; min-height: 100vh;">
    <?php
    // session_start();
    include "db_conn.php";
	$db_name = $_SESSION['username'];
    $sql="SELECT * FROM $db_name ORDER BY image_url DESC";
    $res = mysqli_query($conn,$sql);
    if (mysqli_num_rows($res)>0) {
        while ($images =mysqli_fetch_assoc($res)) { ?>
            <div class="alb" >
                <img src="../uploads/<?=$images['image_url']?>">
            </div>
       <?php } }?>
</div>

</form>
</body>
</html>