<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'parth');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where username = '$name'";
// echo $s; this line was written to solve the error
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Username already taken";
}
else 
{
	$reg = "insert into login(username, password) values ('$name', '$pass')";
	echo $reg;
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>