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
	if(($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){
		echo '<script type="text/javascript">';
		echo ' alert("please fill All Details")';  //not showing an alert box.
		echo '</script>';
	}
	else{
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];
	$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email','$message')";
	if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript">';
		echo ' alert("Your Message has Been Successfully Sent")';  //not showing an alert box.
		echo '</script>';
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Full Stack Developer</title>
<!-- add icon link -->
        <link rel = "icon" href =  
"https://cdn2.iconfinder.com/data/icons/ux-and-ui-astute-vol-1/512/Full_Stack_Developer-512.png" 
        type = "image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  width: 25%;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
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
  background-color: #75a3a3;
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
.message {
        width: 100%;
        min-height: 199px;
        padding: 15px 0px;
      }
      .message textarea {
        appearance: none;
        -webkit-appearance: none;
        width: 100%;
        border: 1px solid #d7d7d7;
        display: block;
        width: 100%;
        background: white;
        font-size: 15px;
        color: #0767d4;
        /* line-height: 1.2; */
        padding: 10px 20px;
        box-sizing: border-box;
      }

      .message textarea:focus {
        /* border: none; */
        outline: none;
      }
</style>
</head>
<body>

<div class="w3-display-container" style="margin-left:200px; margin-top: 50px; margin-bottom: 60px;">
     <img src="https://niditechsolutions.in/wp-content/uploads/2019/07/website.gif">
  </div>
  
   <div class="w3-display-container w3-center w3-margin-bottom">
  <h1 class="w3-text-black"> Hello I'm <span class="w3-text-pink"> Vikas Mandal </span></h1>
  <h3> I'm A Full Stack Web Developer </h3>
  <a href="#nav"><button class="w3-button w3-round-large w3-large w3-border w3-border-black w3-hover-pink"> View My Work <i class="fa fa-long-arrow-right"></i></button></a>
  </div>
      
  <div class="navbar" id="nav">
  <a href="#">Home</a>
  <a href="#about">About</a>
  <a href="#project">Project</a>
  <a href="#contact">Contact</a>
  </div>

<div class="w3-container w3-sand">

<div class="w3-content w3-margin-top" style="max-width:1200px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-half">
    
        <div class="w3-display-container w3-animate-left">
          <h1 class="w3-text-black"><b> ABOUT </b></h1>
    <p class="w3-large">I'm Vikas Mandal Currently Pursuing Computer Engineering From Lokmanya Tilak College Of Engineering (Mumbai University).</p>
	<p class="w3-large">I Professionally want to Connect with Web Development Technology As A Full Stack Web Developer.</p>
	<p class="w3-large">I'm Interested in the entire FrontEnd Spectrum and Working On Ambitious Projects With Positive People.</p>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-half">
    
      <div class="w3-container w3-margin-bottom w3-animate-right">
	<div class="w3-container" style="margin-left: 150px;">
        <img src="avatar.png" alt="photo" style="width: 250px; height: 250px;">
	</div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
	<hr>

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-half">
    
        <div class="w3-display-container w3-animate-left">
          <h1 class="w3-text-black"><b> SKILLS </b></h1>
    <p class="w3-large">The main area of my expertise is front end development (Client Side of the Website)</p>
	<p class="w3-large">HTML,CSS,Javascript,PHP,Mysql Building Small And Medium Web Apps With Features,Animations and Coding Responsive and interactive Layouts.</p>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-half">
    
      <div class="w3-container w3-margin-bottom w3-animate-right">
        <h1 class="w3-text-black"><b>  TECHNICAL SKILLS </b></h1>
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
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <p> C LANGUAGE </p>
          <div class="w3-white w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>
        </div>
        </div>
    <!-- End Right Column -->
    </div>
   
   <div class="w3-container w3-margin-bottom">
  <div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-round-xxlarge w3-large w3-section"><i class="fa fa-download"></i>  Download Resume </button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge  w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>
      <form class="w3-container" action="resume.php" method="POST">
        <div class="w3-section w3-paddind-16">
          <label><b> Enter Your Name </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Your Name" name="name" required>
         <label><b> Enter Your Email id</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Your Email id" name="email" required>
          <div class="w3-container w3-center">
          <button class="w3-button w3-large w3-round-xxlarge w3-blue w3-section" type="submit" name="submit" ><i class="fa fa-download"></i> Download</button>
          </div>
        </div>
      </form>
	  
	  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>
	  
    </div>
  </div>
</div>
   </div>
    
  <!-- End Grid -->
  </div>

  </div>
</div>	

</div>
</div>

<div class="w3-container w3-center  w3-light-grey" id="project">
  <h1 class="w3-text-pink w3-animate-left"><b> Projects </h1>
  
  <!-- Project Container -->
	<!--------Projects------------->
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
      <button onclick="document.getElementById('id1').style.display='block'" class="w3-button w3-blue">View Project</button>

  <div id="id1" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id1').style.display='none'" 
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
</div>
</div>

	<div class="w3-container w3-grey" id="contact">
	<h1 class="w3-text-pink w3-animate-left w3-center w3-padding-32"><b> Contact </h1>
	<!-- Contact Section -->
  <div Class="w3-display-container w3-margin-bottom w3-animate-right">
  <div class="w3-content w3-padding-large w3-blue-grey">
    <form action="" method ="POST">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" >
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" >
      </div>
      <div class="w3-section">
        <label>Message</label>
        <div class="message">
          <textarea
            class="input100"
            name="message"
            id=""
            cols="30"
            rows="10"
            placeholder=""
          ></textarea>
          <span class="focus-input100-1"></span>
          <span class="focus-input100-2"></span>
        </div>
      </div>
      <button type="submit" name="submit" class="w3-button w3-black w3-margin-bottom "><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
  <div class="w3-container" style="margin-right: 250px;">
  <button onclick="topFunction()" class="w3-button w3-pink w3-circle w3-center" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
  </div>
</div>
</div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
  
	<!-- Footer section-->
  <footer class="w3-display-container w3-padding-32 w3-dark-grey" style="height: 200px;">
    
    <div class="w3-display-top-middle">
 	<h3 style="text-align: center;"> Follow Me On </h3>
	<div class="w3-display-middle w3-margin">
 	<div class="w3-bar">
 	 <button class="w3-button w3-blue"><i class="fa fa-twitter"></i></button>
 	 <button class="w3-button w3-blue"><i class="fa fa-linkedin"></i></button>
 	 <button class="w3-button w3-blue"><i class="fa fa-facebook"></i></button>
 	 <button class="w3-button w3-blue"><i class="fa fa-instagram"></i></button>
 	 <button class="w3-button w3-blue"><i class="fa fa-github"></i></button>
	</div>
	</div>
    </div>
    
    <div class="w3-display-bottommiddle w3-text-white">
    <p> copyright&copy <span class="w3-text-pink"> 2020 </span>. All Rights Reserved .</p>
    </div>
  </div>
  </footer>

</body>
</html>
