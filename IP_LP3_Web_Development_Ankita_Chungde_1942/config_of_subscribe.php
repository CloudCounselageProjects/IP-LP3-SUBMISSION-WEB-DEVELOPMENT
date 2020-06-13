 <?php
$hostname = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "subscribe";
$con = new mysqli($hostname, $dbuser, $dbpass, $dbname);
if($con->connect_error){
die("Error connect to db");
}
?>