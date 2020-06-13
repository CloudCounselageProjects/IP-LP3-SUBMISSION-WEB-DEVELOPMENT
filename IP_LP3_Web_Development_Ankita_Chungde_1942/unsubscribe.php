<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unsubscribe</title>
</head>
<body>
<?php 
include("config.php");
if (isset($_POST['submit'])){
$email= $_POST['email']; 
$stmtdelete = $con->prepare("delete from emails where email=?");
$stmtdelete->bind_param('s', $_POST['email']);
$stmtdelete->execute();
if($stmtdelete->execute()){
echo "Unsubscribed";
   }
}
?> 
<form action="" method="POST"> 
<label>Enter Your Email to Unsubscribe :</label>
<input type="text"id="email" name="email"/> <br> 
<input type="submit" name="submit" value="Submit"/> 
</form> 
</body>
</html>