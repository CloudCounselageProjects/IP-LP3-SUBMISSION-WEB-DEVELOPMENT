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

if(isset($_REQUEST['submit'])){
	//checking for empty fields
	if(($_REQUEST['name'] == "") || ($_REQUEST['email'] == "")){
		echo '<script type="text/javascript">';
		echo ' alert("please fill All Details")';  //not showing an alert box.
		echo '</script>';
	}
	else{
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$sql = "INSERT INTO resume (name, email) VALUES ('$name', '$email')";
	if (mysqli_query($conn, $sql)) {
		
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
}
?>

<!DOCTYPE html>
<html>
<title> Resume </title>
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

	<div class="w3-display-container w3-dark-grey" style="height:50px;">
  </div>
  
  <div class="w3-content w3-section w3-card-4" style="width: 1000px;">
    <h1 Class="w3-center"> Resume PDF</h1>
    <embed src="resume.pdf" width="100%" height="1000px" />
  </div>
  
  <footer class="footer">

  <div class="w3-display-container w3-dark-grey  " style="height:50px;">
    <div class="w3-display-middle">
    <p> copyright&copy <span class="w3-text-pink"> 2020 </span>. All Rights Reserved .</p>
    </div>
  </div>
</footer>

</body>
</html>
