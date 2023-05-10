<?php 
	/*
	$submitted = !empty($_POST);	 // Form submit sucessful if POST array not empty  
	if ($submitted == 1) {			 // If user acceses page for first time
		$username = $_POST['username'];  
		$password = $_POST['password'];	 
		setcookie('username', $username);
		setcookie('password', $password);
	} else {						 // After first login get, login info from $_COOKIE array
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];
	}	
	
	echo "<p>Form sumitted sucessfully (1 for true): $submitted </p>"; 
	echo "<p>Username received: $username </p>"; 
	echo "<p>Password received: $password </p>"; 
	*/
?>

<?php 
	// authenticate.php (modified to use sessions)
	session_start(); // starts a session and creates a session variable
	$username = $_POST['username'];  
	$password = $_POST['password'];	 

	if($username&&$password){
		$_SESSION['username']=$username;
		echo "<p>Congratulations, you are now logged into the site.</p>";
		echo "<p>Please click <a href=\"member.php\">here</a> to be taken to our members only page</p>";
	} else {
		echo "<p>Please enter a username and password</p>";
	}
	// Note: we have not checked to see if the username and password are valid
	// we will add this functionality when we study databases later
?>

