
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
            <form action="" method="GET" accept-charset="utf-8" class="form" role="form">   <legend>Retailer Registeration</legend>
                    <h4>It's free and always will be.</h4>
                    
                            <input type="text" name="name1" value="" class="form-control input-lg" placeholder="Name"  />                  
                                           
                    
                    <input type="text" name="username" value="" class="form-control input-lg" placeholder="User Name"  />
					<input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
					<input type="number" name="phoneno" value="" class="form-control input-lg" placeholder="Phone No"  />
                    <input type="text" name="address" value="" class="form-control input-lg" placeholder="Address"  />
                    <input type="email" name="email" value="" class="form-control input-lg" placeholder="Email Id"  />
                     
                    <br />
              
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="subbtn">
                        Create Account </button>
            </form>          
          </div>
</div>            
</div>
</div>
		<?php
		if(isset($_GET['subbtn']))
		{
				include"connection.php";
				mysqli_select_db($conn,'foodtag');
				error_reporting(0);

				$name=$_GET['name1'];
				$email=$_GET['email'];
				$phone=$_GET['phoneno'];
				$username=$_GET['username'];
				$userpass=$_GET['password'];
				$addr=$_GET['address'];
				
				$da=mysqli_query($conn,"SELECT * FROM retailerlogin WHERE (username='$username' AND password='$userpass')");
				$rows=mysqli_num_rows($da);
				if($rows==0){
					if($name!=''&&$email!=''&&$phone!=''&&$username!=''&&$userpass!=''&&$addr!='')
					{
						
						if(strlen($phone)==10)
						{
							$query="INSERT INTO RETAILERLOGIN VALUES('$name','$email','$phone','$addr','$username','$userpass','')";
							
							
							$data=mysqli_query($conn,$query);
						
							if($data)
							{
								 
									echo'<script>';
									echo"alert('Registeration Succesfully Done!!!!')";
									echo'</script>';
									header('location:login.php');
								
							}
							else
								echo"Not Done!!!!";
						}
						else{
							echo"<script>";
						echo"alert('Phone no Must Be Of 10 Digits')";
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