<?php 

session_start();

// Check if submitBtn exists
if(isset($_POST['loginBtn'])) {

	// Get the first name from index.php
	$Username = $_POST['Username'];

	// Get the password from the input field
	$password = md5($_POST['password']);

	// Set the session variables
	$_SESSION['Username'] = $Username;
	$_SESSION['password'] = $password;

	// Go back to index.php
	header('Location: index.php');
}

?>