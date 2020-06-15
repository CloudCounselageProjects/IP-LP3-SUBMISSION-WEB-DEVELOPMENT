<?php
session_start();
include 'connection.php';
error_reporting(0);
mysqli_select_db($conn,'foodtag');
		

				$product=$_GET['product_name'];
				$quantity=$_GET['product_quantity'];
				$price=$_GET['product_price'];
				$addr=$_GET['product_loc'];
				$id1=$_GET['product_id'];
				
				$req_id=$_GET['id'];
				
				
				
					$query="UPDATE FARMER SET association='',retailer_id='0' WHERE id='$req_id'";
				
					
					if(mysqli_query($conn,$query))
					{
						 
						echo"<script>";
						echo"alert('Removed Successfully')";
						echo"</script>";
						header("location:retailers_purchased_products.php");
					}
				
				
			?> 
	</body>
</html>                   