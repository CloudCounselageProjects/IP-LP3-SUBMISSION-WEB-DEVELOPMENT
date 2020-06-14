<?php
session_start();
$message="";
if(count($_POST)>0) {
$con = mysqli_connect('localhost','root','','personal') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM adminlogin WHERE userid='" . $_POST["userid"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["userid"] = $row['userid'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["userid"])) {
header("Location:admin.php");
}
?>

<!DOCTYPE html>
<html>
<title>Admin Login</title>
<!-- add icon link -->
        <link rel = "icon" href =  
"https://cdn2.iconfinder.com/data/icons/ux-and-ui-astute-vol-1/512/Full_Stack_Developer-512.png" 
        type = "image/x-icon"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
 /* Add styles to the form container */
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -50px;
  margin-right: 10px;
  position: relative;
  z-index: 2;
}

.container{
  margin: auto;
}
</style>
</head>

<body>

	<div class="w3-display-container w3-dark-grey" style="height:50px;">
  </div>
  
  <div class="w3-display-container w3-text-white">
    <img src="background.jpg" class="w3-opacity" alt="Lights" style="width:100%">
    <div class="w3-display-middle w3-large">
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Admin Login</h1>
            <form action="" method="post">
            <p>UserID</p>
            <input type="text" name="userid" placeholder="Enter User ID">
            <p>Password</p>
            <input type="password" id="password-field" name="password" placeholder="Enter Password"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			<div class="message"><?php if($message!="") { echo "<h6>". $message."</h6>" ;} ?></div>
            <input type="submit" name="submit" value="Login">   
            </form>
        </div>
    </div>
  </div>
  <script>
$(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

  <footer class="footer">

  <div class="w3-display-container w3-dark-grey" style="height:50px;">
    <div class="w3-display-middle">
    <p> copyright&copy <span class="w3-text-pink"> 2020 </span>. All Rights Reserved .</p>
    </div>
  </div>
</footer>

</body>
</html>
