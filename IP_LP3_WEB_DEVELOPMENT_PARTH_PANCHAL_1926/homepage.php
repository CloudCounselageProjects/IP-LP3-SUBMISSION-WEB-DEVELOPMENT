<?php 

session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<!-- Navigation bar -->
	<div class="title">
		<h1>DreamCourse<span style="color: green">.</span></h1>
	</div>
	<nav>
		<ul class="topnav" id="dropdownclick">
			<li><a href="homepage.php">Home</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="contactus.php">Contact us</a></li>
			<li class="topnav-right"><a href="signup1.php">Sign up</a></li>
			<li class="topnav-right"><a href="logout.php">Logout</a></li>
			<li class="dropdownicon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
		</ul>
		<button id="zonebt">ShowTime</button>
		<div id="zone"></div>
	</nav>
	<!-- <h1>Welcome //<?php echo $_SESSION['username']; ?> </h1> -->
	<div class="container" id="section-1-gradient">
		<div class="row">
			<div class="col-6 " >
				<div class="leftside-col">
					<h1 class="large">Welcome <?php echo $_SESSION['username']; ?> to</h1>
					<h1 class="large">INFO ON CAREER</h1>
					<h1 class="large">FOR YOU</h1>
				</div>
				
			</div>
			
		</div>
	</div>

	<header> 
		<h1 class="section-to-header">Direction which will show you the right career path</h1>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="box">
					<div class="icon">
						<img src="icon.png">
					</div>
					<label>Path career finder</label>
					<p> 
						"Education without values, as useful as it is, seems rather to make man a more clever devil.”
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="box">
					<div class="icon">
						<img src="icon.png">
					</div>
					<label>Career of your choice</label>
					<p>
						"Education is the passport to the future, for tomorrow belongs to those who prepare for it today."
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="box">
					<div class="icon">
						<img src="icon.png">
					</div>
					<label>One place for all</label>
					<p>
						"Education is what remains after one has forgotten what one has learned in school." 
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<a class= "hre" href="courses.php"><button class="learnmore">Learn more</button></a>
				
			</div>
		</div>
	</div>	
	<footer class="footsy">
		<div class="row">
			<div class="col-3 mobilestack">
				<h1>Company</h1>
				<ul>
					<li>About</li>
					<li>Blogs</li>
					<li>Careers</li>
				</ul>
			</div>
			
			<div class="col-3 mobilestack">
				<h1>Contact</h1>
				<ul>
					<li>982390120</li>
					<li>careerinfo@gmail.com</li>
					<li>Careers</li>
				</ul>
			</div>			
		</div>

	</footer>












	<script type="text/javascript">
		
		function dropdownMenu()
		{
			var x = document.getElementById("dropdownclick");

			if(x.className === "topnav") 
			{
				x.className += " responsive";
				// change topnav to topnav responsive which trigram is clicked
			}
			else 
			{
				x.className = "topnav";
			}
		}
		
		$( function (){
			$("#zonebt").click(function(){
				
				$.get("http://api.timezonedb.com/v2.1/get-time-zone?key=EQ8M7LV8S5MM&format=json&by=zone&zone=Asia/Kolkata&fields=formatted")
				.done(function(json){
					console.log(json);
					var time =json.formatted;
					var newtime = new Date(time).toString();
					$("#zone").html(newtime);

					
				});
			});
		});
		

	</script>

</body>
</html>