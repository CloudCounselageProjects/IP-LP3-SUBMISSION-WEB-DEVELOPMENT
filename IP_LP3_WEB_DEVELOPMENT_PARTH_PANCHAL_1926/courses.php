<!DOCTYPE html>
<html>
	<head>
		<title>Courses</title>
		<link rel="stylesheet" type="text/css" href="courses.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="title">
		<h1>DreamCourse<span style="color: green">.</span></h1>
	</div>
		<!-- Navigation bar -->
	<nav>
		<ul class="topnav" id="dropdownclick">
			<li><a href="homepage.php">Home</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="contactus.php">Contact us</a></li>
			<li class="dropdownicon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
		</ul>
		<button id="zonebt">ShowTime</button>
		<div id="zone"></div>
	</nav>
		<!-- Courses links with details -->
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="science">
						<a href="#" class="science-a"><img src="courses.jfif" width="100%" height="300px"></img></a>
						<h1 class="science-h1">Science</h1>
					</div> 
					<p>
						<!-- <h2>Science</h2> -->
						Want to know more about careers sciences? Browse through detailed information on dozens of careers to discover what scientists, engineers, and other STEM professionals really do and what it takes to prepare for these careers. Each career profile provides basic career information such as salary, job outlook, degree requirements, and more. We have also included videos featuring interviews with real scientists or on-the-job profiles.
					</p>
				</div>
				<div class="col-6">
					<div class="commerce">
						<a href="#" class="commerce-a"><img src="download (1).jfif" width="100%" height="300px"></img></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<p>
						<!-- <h2>Science</h2> -->
						Want to know more about careers in science? Browse through detailed information on dozens of careers to discover what scientists, engineers, and other professionals really do and what it takes to prepare for these careers. Each career profile provides basic career information such as salary, job outlook, degree requirements, and more. We have also included videos featuring interviews with real scientists or on-the-job profiles.<a href="science.php">know more</a>
					</p>
				</div>
				<div class="col-6">
					<p>
						<!-- <h2>Commerce</h2> -->
						Want to know more about careers in earth and physical sciences? Browse through detailed information on dozens of careers to discover what C.A,Bankers and other professionals really do and what it takes to prepare for these careers. Each career profile provides basic career information such as salary, job outlook, degree requirements, and more. We have also included videos featuring interviews with real scientists or on-the-job profiles.<a href="commerce.php">know more</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="arts">
						<a href="#" class="arts-a"><img src="arts.jfif" width="100%" height="300px"></img></a>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-6">
					<p>
						<!-- <h2>Arts</h2> -->
						Want to know more about careers in arts? Browse through detailed information on dozens of careers to discover what artist professionals really do and what it takes to prepare for these careers. Each career profile provides basic career information such as salary, job outlook, degree requirements, and more. We have also included videos featuring interviews with real scientists or on-the-job profiles.<a href="arts.php">know more</a>
					</p>
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