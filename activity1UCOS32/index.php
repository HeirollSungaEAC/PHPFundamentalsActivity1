<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<form action="handleForm.php" method="POST">
		<p>Username  <input type="text" placeholder="" name="Username"></p>
		<p>Password  <input type="password" placeholder="" name="password"></p>
		<p><input type="submit" value="Login" name="loginBtn"></p>
	</form>
    <a href="unset.php"><p><input type="submit" value="logout" name="logoutBtn"></p></a>

	<h2>
		<?php
		if(isset($_SESSION['Username'])) {
			echo "User logged in: ";
			echo $_SESSION['Username'];
		}
		?>		
	</h2>

	<h2>
		<?php
		if(isset($_SESSION['password'])) {
			echo "User password: ";
			echo $_SESSION['password'];
		}
		?>		
	</h2>
	
</body>
</html>