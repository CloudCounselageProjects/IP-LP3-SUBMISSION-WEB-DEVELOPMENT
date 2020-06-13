<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>

	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="signup1.css">
</head>
<body>
	<div class="title">
		<h1>DreamCourse<span style="color: green">.</span></h1>
	</div>
	<nav>
		<ul class="topnav" id="dropdownclick">
			<li><a href="">Home</a></li>
			<li><a href="">Courses</a></li>
			<li><a href="">Contact us</a></li>
			<li class="dropdownicon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
			
		</ul>
	<button id="zonebt">ShowTime</button>
	<div id="zone"></div>
		
	</nav> 
	<div id="zone"></div>
	<div class="container">
		<div class="row"></div>		
			<div class="col-md-4 offset-md-4 form-div">

				<form action="registration.php" method="post">
					<h3 class="text-center">Register</h3>
					
					<!-- <div class="alert alert-danger">
						<li>Username required</li>
					</div> -->

					<div class="form-group">
						<label>Username</label>
						  <input type="text" name="user" class="form-control form-control lg">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						  <input type="password" name="password" class="form-control form-control lg">
					</div>
					<button type="submit" class="btn-btn-primary">Register</button>
				
						
					<p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
				</form>

			</div>
	</div>
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