<?php
      session_start();
	  
error_reporting(0);
      unset($_SESSION['current_farmer']);
			 unset($_SESSION['current_farmername']);
			unset($_SESSION['currentfarmermobile']);
			
		
session_destroy(); 
header('location:farmer_login.php')
					
?>