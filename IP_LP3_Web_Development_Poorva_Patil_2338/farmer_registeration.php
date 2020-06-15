<?php
include'connection.php';
session_start();
?>
<html>
	<head>
		<title>Registeration</title>
		<link href="reg.css" type="text/css" rel="stylesheet">
			<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	</head>
	<body>
	<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="" method="GET" accept-charset="utf-8" class="form" role="form">   <legend align="center">Farmer Registeration</legend>
                    
                    
                            <input type="text" name="name1" value="" class="form-control input-lg" placeholder="Name"  />                  
                                           
                    
                    <input type="text" name="username1" value="" class="form-control input-lg" placeholder="User Name"  />
					<input type="password" name="password1" value="" class="form-control input-lg" placeholder="Password"  />
					<input type="number" name="phoneno1" value="" class="form-control input-lg" placeholder="Phone No"  />
                    <input type="text" name="address1" value="" class="form-control input-lg" placeholder="Address"  />
                     
                    <br />
              
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="subbtn">
                        Create Account </button>
            </form>          
          </div>
</div>            
</div>
</div><?php
		if(isset($_GET['subbtn']))
		{
				include"connection.php";
				mysqli_select_db($conn,'foodtag');
				error_reporting(0);

				$name=$_GET['name1'];
				$phone=$_GET['phoneno1'];
				$username=$_GET['username1'];
				$userpass=$_GET['password1'];
				$addr=$_GET['address1'];
				
				$da=mysqli_query($conn,"SELECT * FROM farmerlogin WHERE (username='$username' AND password='$userpass')");
				$rows=mysqli_num_rows($da);
				if($rows==0){
					if($name!=''&&$phone!=''&&$username!=''&&$userpass!=''&&$addr!='')
					{
						
						if(strlen($phone)==10){
							$query="INSERT INTO  farmerlogin VALUES('','$name','$username','$userpass','$addr','$phone')";
							
							
							$data=mysqli_query($conn,$query);
						
							if($data)
							{
								 $_SESSION['current_farmer']=$username;
								 $_SESSION['current_farmer_mobile']=$phone;
									echo'<script>';
									echo"alert('Registeration Succesfully Done!!!!')";
									echo'</script>';
									header('location:farmer_login.php');
								
							}
							else
								echo"Not Done!!!!";
						}
						else{
							echo"<script>";
						echo"alert('Phone No Must Be Of 10 Digits')";
						echo"</script>";
						}
					}
					else{
						echo"<script>";
						echo"alert('All Field Are Necessary')";
						echo"</script>";
					}
				}
				else{
					echo"<script>";
					echo"alert('Username And Password Are Existing So Pls take Another One')";
					echo"</script>";
				}
		}
			?> 
	</body>
</html>                   
					