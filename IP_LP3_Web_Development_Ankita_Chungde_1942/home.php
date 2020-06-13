<!--Create a personal website using full-stack development which uses a REST API to tell system date and time by an API call.The website should work on the localhost-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/ac32208355.js"crossorigin="anonymous"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
<!--Subscribe form-->

<!--subscribe end-->

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}



.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}



body
{
background-color:#bfbfbf;
width:100%;

}
<!--navbar started-->
#navbar {
  overflow: hidden;
  background-color: black;
  margin-left:30px;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  background-color:black;
  margin-top:30px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
<!--navbar ended-->

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #ff6666;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: 700px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ffb3b3;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color:#333300;}
<!--Alert button started-->
.alert
{
padding:20px;
background-color:#f44336;
color:white;
}
.closebtn
{
margin-left:15px;
color:white;
font-weight:bold;
float:right;
font-size:22px;
line-height:20px;
cursor:pointer;
transition:0.3s;
}
.closebtn:hover
{
color:black;
}
<!--Alert button ended-->
<!--Covid updates table started-->
#updates
{
font-family:"Trebuchet MS", Arial,Helvetica,sans-serif;
border-collapse:collapse;
width:100%;
}
#updates td,#customer th
{
border:1px solid #ddd;
padding:8px;
}
#updates tr:nth-child(even)
{
background-color:#f2f2f2;
}
#updates th
{
padding-top12px;
padding-bottom:12px;
text-align:left;
background-color:#4CAF50;
color:white;
}
<!--Covid updates table ended-->
<!--footer started-->
footer p{margin:-50px 0;}

footer { 
            width: 100%; 
            bottom: 50px;
            left:0;
            bottom:0; 
            background-color:black; 
            color: #333; 
            position:relative; 
            padding-top:20px; 
            padding-bottom:50px; 
            text-align:center; 
            font-size:30px; 
            font-weight:bold; 
            height:500px;
            margin-top:600px;
        } 
#left{
       width:60%;
       float:left;
       padding:10px;
       margin-top:20px;
      }
#middle{
       width:30%;
       float:left;
	   margin-left:10px;
       padding:10px;
       margin-top:10px;
      }

<!--footer ended-->

<!--news started-->
.news{
    border-top: 1px solid #00aeef;
    border-bottom: 1px solid #00aeef;
    padding: 0;
    display: flex;
    align-content: center;
    justify-content: center;
    margin-bottom: 1rem;
}
.news p{
    background: #ff5050;
    width: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0.4rem 3rem 0.4rem 2.5rem;
    margin: -1px;
    color: white;
    clip-path: polygon(80% 0, 100% 50%, 80% 100%, 0 100%, 0 0);
}
.news marquee{
    font-size: 0.8rem!important;
    display: flex;
    align-items: center;
}
.news{
font-size:16px;
padding:15px 20px;
color:black
bgcolor:#ffffff;
}
<!--news ended-->
<!--know more started-->
.modal {
  display: none; /* Hidden by default */
  position: static; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 80%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color:black;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  color:white;
  width:70%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
<!--know more ended-->
</style>
<body>
<div class="header">
<h1>COVID-19 Updates</h1>
<span><i class=""></i></span>
<div class="container">
        <div id="content">
            <div id="dt">
                <h1 id="t"></h4>
                <p id="d"></p>
            </div>
        </div>
</div>
</div>
<div id="navbar">
  <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="#PM">Precautionary Measures</a>
  <a href="#updates"> COVID-19 updates</a>
  <a href="javascript:void(0)"style="height:53px;"><input type="text" name="search" placeholder="Search.."></a>
  <!--Registration form ended-->
  <a href="register.php">Volunteer's Registration</a>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<br>
<br>
<br>
<br>
<div class="border-div news">
<p>Important</p>
<marquee>
<span style="font-size:20px;"><i class="fas fa-angle-double-right"style='color:#ff9900'></i> It is compulsory for indian citizen to download the<a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu&hl=hi"> Aarogya Setu App</a> to stay tune with corona details!!!<i class="fas fa-angle-double-right"style='color:#ff9900'></i> If you are suffering from cold, Fever and sneezing then please immediatly go for checkup to the near Health Center!!!<i class="fas fa-angle-double-right"style='color:#ff9900'>
</i>If You wish to work as volunteer for corona then please fill our <a href="register.php">volunteer registration </a>form and we will contact you
<i class="fas fa-angle-double-right"style='color:#ff9900'></i>Do not be a part of Rumors!!!... Believe only Those message which is propsed by government!!!</span></marquee>
</div>
<hr>
<div id = "middlebox"style="float:left; 
				background:white; 
				width:70%; 
				height:650px; 
				background-color:white;margin-top:10px;padding:10px;margin-left:20px;"> 
                          <p style="text-align:justify"><b><i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.
The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.
You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth</p><b>
<hr>
<h2>--Symptoms Of Coronavirus--</h2>
<h3>Most common symptoms</h3>
<ol style="margin-left:10px;">
<li>Fever</li><br>
<li>Dry Cough</li><br>
<li>Tiredness</li>
</ol>
<h3>Less common symptoms</h3>
<ol style="margin-left:10px;">
<li>aches and pains</li><br>
<li>sore throat</li><br>
<li>diarrhoea</li><br>
<li>conjunctivitis</li><br>
</ol>
<br>
<br>
</div>	
<div id="right" style="float:left;width:20%;margin-left:10px;">	
<h2 style="color:white;background-color:black;width:200px;height:40px;">Know More:-</h2>
<a href=""><button id="myBtn"class="button button2"style="width:250px;height:50px;">Why to stay Home???</button></a>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public"><button class="button button3"style="width:250px;height:50px;">Preventions to take</button></a>
<a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"><button class="button button4"style="width:250px;height:50px;">Help Desk</button></a>
</div>
<br><br><br><br>
<!--carousel started-->
<div class="slideshow-container"style="margin-top:600px;background-color:#ff6666;">
<h1 style="text-align:center;top-margin:10px;">Message From Government to Nation</h1>
<div class="mySlides">
  <q>This pandemic is being fought collectively by all of us.In such times,it's always important for nations to work together and do  as much as possible to make our world healthier and free from COVID-19</q>
  <p class="author">- Narendra Modi</p>
</div>

<div class="mySlides">
  <q>If required the central government must make its manpower available tooreduce the burden on the police.<br>Making available hospitals and ICU beds in central government
  establishments like the army and mumbai port trusts etc will aid the battle against the corona</q>
  <p class="author">- CMO Maharashtra</p>
</div>

<div class="mySlides">
  <q>While we stay indoors,#wildlife roam our streets,#birds sing in our balconies there,s #blueskies&#cleanair.But we have to make sure
  this continues.</q>
  <p class="author">- NEWS 24</p>
</div>

<div class="mySlides">
  <q>The current count of COVID-19 patients in the country is 90,937.Today more than 1606 patients have been identified as positive.
  <br>To stop corona from spreadig We have to stay at home...!</q>
  <p class="author">- Rajesh Tope</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<div>

</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>			
<!--carousel ended-->
<h1 id="PM" style="text-align:center;color:blue;top-margin:10px;text-decoration:none;">Precautionary Measures</h1>
<div class="alert"style="background-color:red;width:50%;margin-left:300px;position:sticky;">
<span class="closebtn"onclick="this.parentElement.style.display='none';">&times;</span>
<strong>Alert!<strong>Older adults and people who have severe underlying medical conditions like heart or lung 
disease or diabetes seem to be at higher risk for developing serious complications from COVID-19 illness.
</div>
<div id="precaution"style="width:45%;height:500px;background-color:white;text-align:justify;padding:10px;float:left;">
<h1>Know how it spreads:-</h1>
<p>1.There is currently no vaccine to prevent coronavirus disease 2019 (COVID-19).<br><br>
2.The best way to prevent illness is to avoid being exposed to this virus.<br><br>
3.The virus is thought to spread mainly from person-to-person.<br><br>
  a.Between people who are in close contact with one another (within about 6 feet).<br><br>
  b.Through respiratory droplets produced when an infected person coughs, sneezes or talks.<br><br>
  c.These droplets can land in the mouths or noses of people who are nearby or possibly be inhaled into the lungs.<br><br>
  d.Some recent studies have suggested that COVID-19 may be spread by people who are not showing symptoms.</p>
  </div>
  <div id="right"style="width:50%;background-color:white;color:black;float:right;height:1200px;margin-left:10px;padding:10px;border-radius:12px;">
  <h1 style="left-margin:20px;">Everyone Should</h1>
  <h3><i class="fas fa-square"></i>Wash Your Hand</h3>
  <p>* Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.<br><br>
* If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of your hands and rub them together until they feel dry.<br><br>
* Avoid touching your eyes, nose, and mouth with unwashed hands</p>
<br><br>
  <h3><i class="fas fa-square"></i>Avoid Close Contact</h3>
  <p>* Avoid close contact with people who are sick, even inside your home. If possible, maintain 6 feet between the person who is sick and other household members.<br><br>
*Put distance between yourself and other people outside of your home<br><br>
Remember that some people without symptoms may be able to spread virus.<br><br>
Stay at least 6 feet (about 2 arms’ length) from other people.<br><br>
Do not gather in groups.<br><br>
Stay out of crowded places and avoid mass gatherings.<br><br>
Keeping distance from others is especially important for people who are at higher risk of getting very sick.<br><br>
* Avoid touching your eyes, nose, and mouth with unwashed hands</p>
<br><br>
<h3><i class="fas fa-square"></i>Cover coughs and sneezes</h3>
  <p>* If you are in a private setting and do not have on your cloth face covering, remember to always cover your mouth and nose with a tissue when you cough or sneeze or use the inside of your elbow.<br><br>
* Throw used tissues in the trash.<br><br>
* Immediately wash your hands with soap and water for at least 20 seconds. If soap and water are not readily available, clean your hands with a hand sanitizer that contains at least 60% alcohol.</p>
<br><br>
  </div>
  <div id="video"style="margin-top:10px;text-align:center;margin-left:10px;">
  <h1 style="color:red;">Must watch!!!</h1>
  <iframe width="420"height="250"src="https://youtu.be/9Ay4u7OYOhA"></iframe>
  </div>
  <div class="covidupdates"style="margin-top:430px;text-align:center;">
  <h1 id="updates" style="color:white;background-color:#00b3b3;width:20%;margin-left:40%;"><b><i>COVID-19 Updates</i></b></h1>
  <table id="updates"style="margin-left:20px;width:50%;float:left;">
  <tr>
  <th>Location</th>
  <th>Confirmed</th>
  <th>Recovered</th>
  <th>Deceased</th>
  </tr>
  <tr>
  <td>Maharashtra</td>
  <td>35058</td>
  <td>8437</td>
  <td>1249</td>
  </tr>
  <tr>
  <td>Tamil Nadu</td>
  <td>11760</td>
  <td>4406</td>
  <td>81</td>
  </tr>
  <tr>
  <td>Gujrat</td>
  <td>11745</td>
  <td>4804</td>
  <td>694</td>
  </tr>
  <tr>
  <td>NCT of Delhi</td>
  <td>10054</td>
  <td>4485</td>
  <td>168</td>
  </tr>
  <tr>
  <td>Rajasthan</td>
  <td>35058</td>
  <td>8437</td>
  <td>1249</td>
  </tr>
  <tr>
  <td>Rajasthan</td>
  <td>35058</td>
  <td>8437</td>
  <td>1249</td>
  </tr>
  <tr>
  <td>Rajasthan</td>
  <td>35058</td>
  <td>8437</td>
  <td>1249</td>
  </tr>
  <tr>
  <td>Madhya Pradesh</td>
  <td>5236</td>
  <td>2435</td>
  <td>252</td>
  </tr>
  <tr>
  <td>Uttar Pradesh</td>
  <td>4605</td>
  <td>2783</td>
  <td>118</td>
  </tr>
  <tr>
  <td>West bengal</td>
  <td>2825</td>
  <td>1006</td>
  <td>244</td>
  </tr>
  <tr>
  <td>Andhra Pradesh</td>
  <td>2474</td>
  <td>8437</td>
  <td>1249</td>
  </tr>
  <tr>
  <td>Punjab</td>
  <td>1980</td>
  <td>1547</td>
  <td>37</td>
  </tr>
  <tr>
  <td>Telgana</td>
  <td>1597</td>
  <td>1000</td>
  <td>35</td>
  </tr>
  <tr>
  <td>Bihar</td>
  <td>1391</td>
  <td>494</td>
  <td>9</td>
  </tr>
  <tr>
  <td>Jammu and Kashmir</td>
  <td>1289</td>
  <td>609</td>
  <td>15</td>
  </tr>
  </table>
  </div>
  <div id="piechart"style="width:20%;float:left;margin-left:30px;margin-top:100px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Deceased', 2],
  ['Recovered', 8],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Statistical  Rate Of Covid-19', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<br><br><br>
<section>
<footer style="height:400px;">
<div id="left">
<form action="" method="post"> 
<label>Enter Email to Subscribe:</label><br><input type="text" name="email" />
<input type='submit' name='submit'/>
</form>
<?php
include("config_of_subscribe.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
$email=$_POST['email'];
$stmt = $con->prepare("insert into emails (email) values (?)");
$stmt->bind_param("s", $email);
if($stmt->execute()){
echo "subscribe successfully.<br/>";
}else{
echo "subscribe failed<br/>";
}
}
?>
<br>
<form action="" method="POST"> 
<label>Enter Your Email to Unsubscribe :</label>
<input type="text"id="email" name="email"/>
<input type="submit" name="submit" value="Submit"/> 
</form> 
<?php 
include("config_of_subscribe.php");
if (isset($_POST['submit'])){
$email= $_POST['email']; 
$stmtdelete = $con->prepare("delete from emails where email=?");
$stmtdelete->bind_param('s', $_POST['email']);
$stmtdelete->execute();
if($stmtdelete->execute()){
echo "Your email is Unsubscribed";
   }
}
?> 
</div>
<div id="middle">
<h2 style="color:white;">Contact Us</h2>
                    <hr>
					
                    <h3 style="font-size:30px;color:white;">ankitachungde09@gmail.com</h3>
                    <h3 style="font-size:30px;color:white;">+91 9130****74</h3> 
                    <div>
                        <a href="#"><img src="./assets/social/facebook.png" alt="" class="img-fluid" width="20px"></a>
                        <a href="#"><img src="./assets/social/instagram.png" alt="" class="img-fluid" width="20px"></a>
                        <a href="#"><img src="./assets/social/twitter.png" alt="" class="img-fluid" width="20px"></a>
                        <a href="#"><img src="./assets/social/youtube.png" alt="" class="img-fluid" width="20px"></a>
                        <a href="#"><img src="./assets/social/gmail.png" alt="" class="img-fluid" width="20px"></a>
						<p style="float:left;margin-left:100px;margin-top:10px;color:white;font-size:30px;">PM Cares Fund</p>
<a href="https://www.pmcares.gov.in/en/"><button style="width:300px;height:70px;margin-top:10px;float:right;margin-left:10px;">Donate Now</button></a>
                    </div>
</div>
</footer>
<p style="background-color:white;margin-bottom:-0px;margin-left:0px;">&copy; Mini Project</p>
</section>

</body>
</html>