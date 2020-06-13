<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
	</nav> 
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login Here</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
						<div class="form-group">
							<p>Wanna Sign up first?<a href="signup1.php">Sign up</a></p>
							
						</div>
					</form>	
				</div>
			</div>	
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
		
		

	</script>


</body>
</html>