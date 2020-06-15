<?php
include'connection.php';
session_start();
error_reporting(0);
mysqli_select_db($conn,'foodtag');
$user=$_SESSION['current_farmername'];

$query="SELECT * FROM FARMER where name='$user'";
$result=mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($result);

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
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="omk.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="farmers_purchased_products.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Purchased Product</span></a></li>
                        <li><a href="farmer_find_dealer.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dealers Who Purchased</span></a></li>
                        <li><a href="farmer_logout.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
						</ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search By Id of Product" name="search1" id="search">
								<button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="subbtn">
                        Search </button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="farmer_product_register.php" class="add-project" data-toggle="modal" data-target="#add_project">Add Product</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    
                                            <b class="caret"></b></a>
                                        
                                                
                                                    <span><?php
								$uu=$_SESSION['current_farmer'];
									echo $uu;
									?></span>
                                                    
                                            
                                    
                                </ul>
								
                            </div>
							
                        </div>
                    </header>
					
						<h1 align="center">FARMER DASHBOARD</h1>
                </div>
                <div class="user-dashboard">
                    <h1>Hello <?php
								$uu=$_SESSION['current_farmer'];
									echo $uu;
									?></h1>
					<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>ADDED DATA</h4>
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


            
        </div>
	</div>
</div>



    
    
     
                 




				 
                </div>
            </div>
        </div>

    </div>
	



    
	
	
	</body>
</html>