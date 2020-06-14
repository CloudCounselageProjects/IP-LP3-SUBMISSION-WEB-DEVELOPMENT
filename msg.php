<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "personal";

// check connection 
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
 $query="select * FROM contact WHERE id='" . $_GET["id"] . "'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)){
     
        while($row=mysqli_fetch_assoc($result)){
     	
     	$name=$row['name'];
        $email=$row['email'];
        $message=$row['message'];
        ?>
<!--chalu--> 

<!DOCTYPE html>
<html>
<title> Messages </title>
<!-- add icon link -->
        <link rel = "icon" href =  
"https://cdn2.iconfinder.com/data/icons/ux-and-ui-astute-vol-1/512/Full_Stack_Developer-512.png" 
        type = "image/x-icon"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
</style>
</head>

<body>
<!-- Navbar (sit on top) -->
<header>
<div class="w3-display-container w3-dark-grey" style="height:50px;">
  </div>
</header>

<div class="w3-content w3-card w3-margin-top" style="width: 800px;">
  <div class="w3-container w3-margin-top">
  <img class="w3-round  w3-animate-top w3-margin-top" src="https://image.freepik.com/free-vector/businessman-character-avatar-icon-vector-illustration-design_24877-18271.jpg" style="width:20%;">
  <h4><i class="fa fa-clock-o"></i> From <?php echo $name; ?></h4>
  <h4><i class="fa fa-envelope"></i> <?php echo $email; ?></h4>
  <hr>
  </div>
  
  <div class="w3-container">
  <p> <?php echo $message; ?> </p>
  </div>
  
  <div class="w3-container w3-padding-32">
  <a class="w3-button w3-light-grey" href="reply.php">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
  <a class="w3-button w3-light-grey" href="#"> Delete<i class="w3-margin-left fa fa-arrow-right"></i></a>
  </div>
</div>


<footer class="footer">

  <div class="w3-display-container w3-dark-grey w3-bottom" style="height:50px;">
    <div class="w3-display-middle">
    <p> copyright&copy <span class="w3-text-pink"> 2020 </span>. All Rights Reserved .</p>
    </div>
  </div>
</footer>

</body>
</html>

<?php  
  
   }
}
?>