<?php
session_start();
include 'connection.php';
error_reporting(0);
mysqli_select_db($conn,'foodtag');
	include"connection.php";
				mysqli_select_db($conn,'foodtag');
				error_reporting(0);





?>
<html>
	<head>
		<title> PRODUCT UPDATION</title>
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
            <form action="" method="GET" accept-charset="utf-8" class="form" role="form">   <legend>FARMER PRODUCT UPDATION</legend>
                    
                    
                                           
                    
                    <input type="text" name="product_id" value="<?php echo $_GET['id'];?>" class="form-control input-lg" placeholder="Product Id"  />
                    <input type="text" name="product_name" value="<?php echo $_GET['product'];?>" class="form-control input-lg" placeholder="Product Name"  />
                    <input type="number" name="product_quantity" value="<?php echo $_GET['quantity'];?>" class="form-control input-lg" placeholder="product quantity in KG's"  />
                    <input type="number" name="product_price" value="<?php echo $_GET['price'];?>" class="form-control input-lg" placeholder="Expected Price"  />
                    <input type="text" name="product_loc" value="<?php echo $_GET['adr'];?>" class="form-control input-lg" placeholder="Location Of Pickup"  />
						
                    <br />
					<?php
					$rrrr=$_GET['id'];
					?>
              
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="subbtn">
                        Update Data </button>
            </form>          
          </div>
</div>            
</div>
</div>
		<?php
		if(isset($_GET['subbtn']))
		{
			
			

				$product=$_GET['product_name'];
				$quantity=$_GET['product_quantity'];
				$price=$_GET['product_price'];
				$addr=$_GET['product_loc'];
				$id1=$_GET['product_id'];

				$query="SELECT * FROM FARMER where id='$id1'";
			$result=mysqli_query($conn,$query);
			$aa=mysqli_fetch_array($result);
			if($aa['association']==''&&$aa['retailer_id']==0){
				
				if($product!=''&&$quantity!=''&&$price!=''&&$addr!='')
				{
					$query="UPDATE FARMER SET product='$product',price='$price',quantity='$quantity',address='$addr' WHERE id='$id1'";
					echo $query;
					
					if(mysqli_query($conn,$query))
					{
						 
						echo"<script>";
						echo"alert('Updated Successfully')";
						echo"</script>";
						header("location:farmer_dashboard.php");
						
					}
					else
						echo"Not Done!!!!";
				}
				else{
					echo"<script>";
					echo"alert('Updation Is Not Done!!!')";
					echo"</script>";
							
				}
			}
			else{
				echo"<script>";
					echo"alert('you Can Not Update Information As Product Is Purchased!!!')";
					echo"</script>";
			}
		}
			?> 
	</body>
</html>                   