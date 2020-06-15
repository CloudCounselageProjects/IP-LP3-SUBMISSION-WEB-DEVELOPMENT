<?php
session_start();
$currentuser=$_SESSION['current_farmer'];
?>
<html>
	<head>
		<title>FARMER PRODUCT REGISTERATION</title>
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
            <form action="" method="GET" accept-charset="utf-8" class="form" role="form">   <legend>FARMER PRODUCT REGISTERATION</legend>
                    
                    
                                           
                    
                    <input type="text" name="product_name" value="" class="form-control input-lg" placeholder="Product Name"  />
                    <input type="number" name="product_quantity" value="" class="form-control input-lg" placeholder="product quantity in KG's"  />
                    <input type="number" name="product_price" value="" class="form-control input-lg" placeholder="Expected Price"  />
                    <input type="text" name="product_loc" value="" class="form-control input-lg" placeholder="Location Of Pickup"  />
                     
                    <br />
              
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="subbtn">
                        Submit Data </button>
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


$currentuser=$_SESSION['current_farmername'];

				$name=$currentuser;
				$product=$_GET['product_name'];
				$phone=$_SESSION['currentfarmermobile'];
				$quantity=$_GET['product_quantity'];
				$price=$_GET['product_price'];
				$addr=$_GET['product_loc'];
				if($price>0){
					if($name!=''&&$product!=''&&$phone!=''&&$quantity!=''&&$price!=''&&$addr!='')
					{
						$query="INSERT INTO FARMER VALUES('','$name','$phone','$addr','$product','$quantity','$price','','')";
						
						
						$data=mysqli_query($conn,$query);
					
									if($data)
									{
										 
										echo"<script>";
										echo"alert('Product Added Successfully')";
										echo"</script>";
										header("location:farmer_dashboard.php");
										
									}
									else
										echo"Not Done!!!!";
							}
							else{
								echo"<script>";
								echo"alert('All Record Is Needed')";
								echo"</script>";
								
							}
				}
				else{
					echo"<script>";
								echo"alert('Price Should Not Zero')";
								echo"</script>";
				}
		}
			?> 
	</body>
</html>                   