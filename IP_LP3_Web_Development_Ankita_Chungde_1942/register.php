<?php include('server_of_registerform.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style_of_registerform.css">
</head>
<body>
	<div class="header">
	<h4><marquee>You will automatically redirected to the website after successful registration</marquee></h4>
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors_in_registrationform.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
	</form>
</body>
</html>