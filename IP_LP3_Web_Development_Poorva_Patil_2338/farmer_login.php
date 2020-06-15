<?php
session_start();
 
error_reporting(0);
if($_SESSION['current_farmer']!=''&&$_SESSION['current_farmername']!=''&&$_SESSION['currentfarmermobile']!='')
{
	header('location:farmer_dashboard.php');
}

?>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="farmer_login1.css" type="text/css" rel="stylesheet">

	</head>
	<body>
	<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>LOGIN</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" name="username" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="userpass" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="submit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="farmer_registeration.php" class="ForgetPwd">Don't Have Account?</a>
                        </div>
						<div class="form-group">
                            <a href="mainhome.php" class="ForgetPwd">Main Home Page...</a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
	</body>
	<?php
if(isset($_GET['submit'])){
	include'connection.php';
$database=mysqli_select_db($conn,'foodtag');
$username=$_GET['username'];
$pass=$_GET['userpass'];
if($username!=''&&$pass!='')
{
		$query="SELECT * FROM farmerlogin WHERE (username='$username' AND password='$pass')";
		$data=mysqli_query($conn,$query);
		$rows=mysqli_num_rows($data);
	
		if($rows>='1')
		{
			$res=mysqli_fetch_array($data);
			
			 $_SESSION['current_farmer']=$username;
			 $_SESSION['current_farmername']=$res['name'];
			$_SESSION['currentfarmermobile']=$res['phoneno'];
				
				
				
				
			 
				
				
				
				
			header('location:farmer_dashboard.php');
			
		}
		else{
			echo"<script>";
			echo"alert('User Not Exist')";
			echo"</script>";
		}
		

}
else{
	echo"<script>";
	echo"alert('All Fields Are Necessary')";
	echo"</script>";
	
}
}
?>
</html>