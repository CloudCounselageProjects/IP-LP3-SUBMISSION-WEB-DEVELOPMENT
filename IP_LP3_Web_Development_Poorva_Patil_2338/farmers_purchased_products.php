
<?php
include'connection.php';
session_start();
error_reporting(0);
mysqli_select_db($conn,'foodtag');
$user=$_SESSION['current_farmername'];

$query="SELECT * FROM FARMER where name='$user' and association!=''";
$result=mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{
	echo"<script>";
	echo"alert('Some Data Exist')";
	echo"</script>";
}
else
{
	echo"<script>";
	echo"alert('Data is Not Exist')";
	echo"</script>";
}

?>

<html>
	<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="farmer_dashboard.css" type="text/css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>PURCHASED DATA BY RETAILER</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  <th>ID</th>
                   <th>PRODUCT NAME</th>
                    <th>PRODUCT QUANTITY</th>
                     <th>PRODUCT COST</th>
                     <th>LOCATION</th>
                      
                       <th>DELETE</th>
					   <th>UPDATE</th>
                   </thead>
    <tbody>
    
    

<?php
for($i=0;$i<$rowcount;$i++)
{
	$res=mysqli_fetch_array($result);
	?>
	
	
	 <tr>
   
    <td><?php echo $res["id"]?></td>
	<td><?php echo $res["product"]?></td>
    <td><?php echo $res["quantity"]?></td>
    <td><?php echo $res["price"]?></td>
    <td><?php echo $res["address"]?></td>
	<?php
    echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><a href='delete_product.php?id=$res[id]&quantity=$res[quantity]&product=$res[product]&price=$res[price]&adr=$res[address]'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></a></p></td>";
	echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><a href='update_product_data.php?id=$res[id]&quantity=$res[quantity]&product=$res[product]&price=$res[price]&adr=$res[address]''><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></a></p></td>";
    ?></tr>
	
	
	<?php
}

 ?>
   
    
   
    
    </tbody>
        
</table>

	</body>
</html>