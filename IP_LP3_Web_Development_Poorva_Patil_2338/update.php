<?php
session_start();
include 'connection.php';
error_reporting(0);
mysqli_select_db($conn,'foodtag');
	





?>
<html>
	<head>
		<title> PRODUCT ADD TO CART </title>
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
            <form action="" method="GET" accept-charset="utf-8" class="form" role="form">   <legend>ADD TO CART</legend>
                    
                    
                                           
                    
                    <input type="text" name="product_id" value="<?php echo $_GET['id'];?>" class="form-control input-lg" placeholder="Product Id"  />
                    <input type="text" name="product_name" value="<?php echo $_GET['product'];?>" class="form-control input-lg" placeholder="Product Name"  />
                    <input type="number" name="product_quantity" value="<?php echo $_GET['quantity'];?>" class="form-control input-lg" placeholder="product quantity in KG's"  />
                    <input type="number" name="product_price" value="<?php echo $_GET['price'];?>" class="form-control input-lg" placeholder="Expected Price"  />
                    <input type="text" name="product_loc" value="<?php echo $_GET['adr'];?>" class="form-control input-lg" placeholder="Location Of Pickup"  />
						
                    <br />
              
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="subbtn">
                        Add To Cart </button>
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
				
				$ret_name=$_SESSION['current_retailer'];
				$ret_id=$_SESSION['current_retailerid'];
				
				echo $ret_name;
				echo $ret_id;
				echo $id1;
				
				if($product!=''&&$quantity!=''&&$price!=''&&$addr!='')
				{
					$query="UPDATE FARMER SET association='$ret_name',retailer_id='$ret_id' WHERE id='$id1'";
					echo $query;
					
					if(mysqli_query($conn,$query))
					{
						 
						echo"<script>";
						echo"alert('Updated Successfully')";
						echo"</script>";
						header("location:retailer_data_access.php");
						
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
			?> 
	</body>
</html>                   