<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'parth');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from login where username = '$name' && password ='$pass'";

//echo $s; //this line was written to solve the error

$result = mysqli_query($con, $s);

$num = mysqli_num_rows( $result );

if($num == 1)
{
	$_SESSION['username'] = $name;
	header('location:homepage.php');
}
else 
{
	
	echo '<script type="text/javascript">';
    //echo 'window.alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
    echo 'window.onload = function() {
      alert("Create an account");}';

    echo '</script>';
 //   header('location:login.php');
}

?>