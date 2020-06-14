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
$sql = "DELETE FROM contact WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   echo '<script type="text/javascript">';
		echo ' alert("Record has Been Deleted Successfully ")';  //not showing an alert box.
		echo '</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>