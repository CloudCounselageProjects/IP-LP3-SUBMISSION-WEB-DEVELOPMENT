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
// session
session_start(); 

// to view messages and to delete messages
$result1 = mysqli_query($conn,"SELECT * FROM contact");
// to view resume downloaded
$result2 = mysqli_query($conn,"SELECT * FROM resume");
?>
<!--chalu--> 

<!DOCTYPE html>
<html>
<title> Admin Dashboard </title>
<!-- add icon link -->
        <link rel = "icon" href =  
"https://cdn2.iconfinder.com/data/icons/ux-and-ui-astute-vol-1/512/Full_Stack_Developer-512.png" 
        type = "image/x-icon"> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
.container {
  position: relative;
  width: 100%;
  height: 100%;
}

.image {
  display: block;
  width: 100%;
  height: 200px;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: lightgray;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
#msg{
	padding-top: 50px;
}
#resume{
	padding-top: 50px;
}
#project{
	padding-top: 50px;
}
#skills{
	padding-top: 50px;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-dark-grey w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right w3-text-white">Full Stack Developer</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
   <div class="w3-container">
         <p class="w3-center"><img src="avatar.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
		 <?php
		if($_SESSION["userid"]) {
		?>
		 <h4 class="w3-center"> <span>Welcome, <strong> <?php echo $_SESSION["userid"]; ?>. </strong></span> </h4>
	</div>	 
  <hr>
  <div class="w3-container">
    <h5><b><i class="fa fa-dashboard"></i>Dashboard</b></h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#msg" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-comment fa-fw"></i>  Messages</a>
    <a href="#resume" class="w3-bar-item w3-button w3-padding"><i class="fa fa-download fa-fw"></i>  Resume Downloaded</a>
    <a href="#project" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-code-o fa-fw"></i>  Projects</a>
    <a href="#skills" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Skills</a>
    <a href="setting.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
	<div class="w3-center">
         <a href="logout.php"><button class="w3-button w3-blue w3-round-xxlarge w3-padding-large w3-ripple w3-center" style="width: 150px" > <i class="fa fa-sign-out fa-fw w3-margin-right w3-text-theme"></i> logout </button></a>
		 <?php
		}else echo "<h1>Please login first .</h1>";
		?>
         </div>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
		
		<!--- count msg ---------->
		<?php
		$sql="select count('id') from contact";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$sql="select count('id') from resume";
		$result=mysqli_query($conn,$sql);
		$row1=mysqli_fetch_array($result);
	
		mysqli_close($conn);
		?>
		<!-------------------->
		
        <div class="w3-right">
          <h3><?php echo "$row[0]"; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4> Messages </h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-download w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo "$row1[0]"; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Resume Downloaded</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-file-code-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>6</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Projects</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-bar-chart w3-xxxlarge"></i></div>
		<div class="w3-right">
          <h3>5</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Skills</h4>
      </div>
    </div>
  </div>

   <!----- page contents ---------------->
   
   <!------------ msg------------------->
   <h5 class="w3-margin-left" id="msg"><b><i class="fa fa-comment fa-fw"></i> Messages</b></h5>
   <div class="w3-container" >
   <?php
	if (mysqli_num_rows($result1) > 0) {
	?>
	
	<table class="w3-table-all w3-hoverable w3-card-4 w3-margin-top w3-centered">
	<colgroup>
    <col style="width: 50px;">
	<col style="width: 200px;">
	<col style="width: 200px;">
	<col style="width: 100px;">
	<col style="width: 100px;">
    </colgroup>
    <thead>
      <tr class="w3-light-grey">
		<th> Sr.No </th>
        <th> Name</th>
        <th> Email ID</th>
        <th> View</th>
        <th> Delete</th>
      </tr>
    </thead>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result1)) {
	?>
    <tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td>
		<div class="w3-container">
		<a href="msg.php?id=<?php echo $row["id"]; ?>"><button class="w3-button w3-blue w3-round-xxlarge"><i Class="fa fa-eye"></i> View </button></a>
		</div>
		</td>
		<td>
		<a href="delete.php?id=<?php echo $row["id"]; ?>"><button class="w3-button w3-blue w3-round-xxlarge"><i class="fa fa-trash"></i> Delete </button></a>
		</td>
		<?php
$i++;
}
?>
  </table>
  <?php
}
else{
    echo "No result found";
}
?>
    </tr>
  </table>
</div>
<hr>
<!-------End of msg ------------->

<!--------Views------------->
   <h5 class="w3-margin-left" id="resume"><b><i class="fa fa-download fa-fw"></i> Resume Downloaded</b></h5>
<div class="w3-container" >

	<?php
	if (mysqli_num_rows($result2) > 0) {
	?>

  <table class="w3-table-all w3-hoverable w3-card-4 w3-margin-top w3-centered">
    <thead>
      <tr class="w3-light-grey">
		<th> Sr.No </th>
        <th> Name</th>
        <th> Email ID</th>
      </tr>
    </thead>
    <?php
$i=0;
while($row = mysqli_fetch_array($result2)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}
?>
  </table>
  <?php
}
else{
    echo "No result found";
}
?>
</div>
<hr>
<!---------End of Views------------->

<!--------Projects------------->
   <h5 class="w3-margin-left" id="project"><b><i class="fa fa-file-code-o fa-fw"></i> project</b></h5>
<div class="w3-container w3-margin" >
  <div class="w3-content">
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'All');" id="myLink">
        <div class="w3-col s3 tablink">All</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'DBMS');">
        <div class="w3-col s3 tablink">DBMS</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Website');">
        <div class="w3-col s3 tablink">Website</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Programming');">
        <div class="w3-col s3 tablink">Programming</div>
      </a>
    </div>

    <div id="All" class="w3-container menu w3-padding-48 w3-card">
      <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <!------------- first project--------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="quiz.jpg" alt="quiz" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Online Quiz And Feedback Webportal</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="quiz.jpg" alt="quiz background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> An Online Quiz And Feedback Webportal Based On Html,Css,Php,Mysql And Javascript.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
  <!----------------------------------------->
    <!------------- Second project--------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="ecommerce.png" alt="ecommerce" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2> E-Commerce Website</h2>
      </header>
       <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="ecommerce.png" alt="ecommerce background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p>Developed Frontend Of E-comm. website and worked with framework such as bootsrap,jquery. </p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
	<!----------------------------------------->
   <!------------- Third project--------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="dbms.jpeg" alt="Avatar" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-blue">View project</button>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Database For Car Manufacturing Plant</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="dbms.jpeg" alt="dbms background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> Designed And Developed database management system for car manfacturing plant based on Mysql and Phpmyadmin.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <!------------------- Fourth project----------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="java.jpg" alt="java" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id04').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Student Management System Using Java</h2>
      </header>
     <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="java.jpg" alt="ecommerce background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> An Student Management System Using Java.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
	<!------------------------------------------>
    <!------------------- Fifth project----------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="python.jpg" alt="python" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id05" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id05').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Clock Using Python Turtle</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="python.jpg" alt="python background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> An Dynamic Clock Using Python Turtle.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
	<!----------------------------------------->
    <!------------------- Sixth project----------------->
   <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="cproject.png" alt="Avatar" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id06" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id06').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Library management system using C</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="cproject.png" alt="C background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> Library management system using C</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------->
</div>
</div>
  </div>
    </div>

    <div id="DBMS" class="w3-container menu w3-padding-48 w3-card">
     <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="dbms.jpeg" alt="Avatar" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id07').style.display='block'" class="w3-button w3-blue">View project</button>

  <div id="id07" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id07').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Database For Car Manufacturing Plant</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="dbms.jpeg" alt="dbms background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> Designed And Developed database management system for car manfacturing plant based on Mysql and Phpmyadmin.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
    </div>
    </div>  
    
    <div id="Website" class="w3-container menu w3-padding-48 w3-card">
     <div class="w3-row-padding">
    <!------------- first project--------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="quiz.jpg" alt="quiz" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id08').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id08" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id08').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Online Quiz And Feedback Webportal</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="quiz.jpg" alt="quiz background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> An Online Quiz And Feedback Webportal Based On Html,Css,Php,Mysql And Javascript.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
  <!----------------------------------------->
   <!------------- Second project--------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="ecommerce.png" alt="ecommerce" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id09').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id09" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id09').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2> E-Commerce Website</h2>
      </header>
       <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="ecommerce.png" alt="ecommerce background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p>Developed Frontend Of E-comm. website and worked with framework such as bootsrap,jquery. </p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
	<!----------------------------------------->
    </div>
    </div> 
    
    <div id="Programming" class="w3-container menu w3-padding-48 w3-card">
     <div class="w3-row-padding">
    <!------------------- Fourth project----------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="java.jpg" alt="java" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id10').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id10" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id10').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Student Management System Using Java</h2>
      </header>
     <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="java.jpg" alt="ecommerce background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> An Student Management System Using Java.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
	<!------------------------------------------>
	<!------------------- Fifth project----------------->
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="python.jpg" alt="python" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id11').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id11" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id11').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Clock Using Python Turtle</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="python.jpg" alt="python background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> An Dynamic Clock Using Python Turtle.</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
    </div>
	<!----------------------------------------->
	<!------------------- Sixth project----------------->
   <div class="w3-third w3-container w3-margin-bottom">
      <div class="container">
  <img src="cproject.png" alt="Avatar" class="image">
  <div class="overlay">
		<div class="w3-container w3-center w3-padding-32">
      <button onclick="document.getElementById('id12').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id12" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id12').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Library management system using C</h2>
      </header>
      <div class="w3-container">
        <div class="w3-display-container w3-margin-top">
		<img src="cproject.png" alt="C background" style="width: 860px;height:400px;">
		</div>
		<hr>
        <div class="w3-container">
		<p> Library management system using C</p>
		</div>
      </div>
      <footer class="w3-container w3-teal" Style="height:50px;">
        <p></p>
      </footer>
    </div>
  </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------->
    </div>
    </div> 
  </div>
</div>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
<!---------End of Projects------------->

<!--------Skills------------->
<h5 class="w3-margin-left" id="skills"><b><i class="fa fa-file-code-o fa-fw"></i> skills</b></h5>
<div class="w3-container w3-margin" >
 <div class="w3-container w3-margin-bottom w3-animate-right">
        <h3 class="w3-text-black"><b>  TECHNICAL SKILLS </b></h3>
          <p> HTML</p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p> CSS</p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p> JAVASCRIPT </p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p> PHP </p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <p>MYSQL</p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:70%">70%</div>
          </div>
          <p> C LANGUAGE </p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>
        </div>
        </div>
		</div>
<!---------End of Skills------------->

<!--------------------------------->
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-dark-grey">
    <p> copyright&copy <span class="w3-text-pink"> 2020 </span>. All Rights Reserved .</p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>

<!--khatam-->
