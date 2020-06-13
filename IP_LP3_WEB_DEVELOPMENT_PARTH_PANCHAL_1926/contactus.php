<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="contactus.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div class="name">
		<h2>DreamCourse<span style="color: green">.</span></h2>
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
	<!-- <div class="container" width="100%" max-height="300px"> -->
	<img class="container-img" src="contactus.jpg">
	<!-- </div> -->
	<h1 class="contactus-h1">Contact us</h1>
	<div class="row">
		<div class="col-6">
			<div class="form-group" id="contact-1">
				<!-- <div class="form-group"> -->
					<form action="#" method="post" class="contact">
						<div class="row">
							<div class="col-3">
								<label>Name</label>
							</div>
							<div class="col-9">
								<input type="text" name="name" placeholder="Enter you name">
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<label>Email</label>
							</div>
							<div class="col-9">
								<input type="email" name="email" placeholder="Enter you Email">
							</div>						
						</div>
						<div class="row">
							<div class="col-3">
								<label>Message</label>
							</div>
							<div class="col-9">
								<input type="text" name="subject" placeholder="Enter your message">
							</div>
						</div>	
						
						<div class="row" id="submit-button">
							<button type="submit" class="btn-btn-primary">Submit</button>
						</div>
					</form>

				<!-- </div> -->
			</div>
		</div>
		<div class="col-6">
			<div class="right-side">
				<div class="row info">
					<img src="https://img.icons8.com/ios-glyphs/60/000000/gmail.png">
					<p>careerinfo@gmail.com</p>
				</div>
				<div class="row info">
					<img src="https://img.icons8.com/wired/64/000000/phone.png">
					<p>982390120</p>
				</div>
				<div class="row info">
					<img src="https://img.icons8.com/pastel-glyph/64/000000/worldwide-location--v1.png">
					<p> 3, Murlimal Compound, Near Keshav bldg Powai(W )</p>
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