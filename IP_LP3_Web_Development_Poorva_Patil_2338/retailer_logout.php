<?php
session_start();
      
      unset($_SESSION['current_retailer']);
			 unset($_SESSION['current_retailername']);
			unset($_SESSION['current_retailermobile']);
			
			unset($_SESSION['current_retailerid']);	 
session_destroy(); 

header('location:login.php')
					
?>