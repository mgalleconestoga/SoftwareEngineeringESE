<?php 
	// logout.php
	session_start(); // Required for every page where you call or declare a session
	session_destroy();

	echo "You have been logged out. Click <a href='login.html'>here</a> to log in again";
?>


