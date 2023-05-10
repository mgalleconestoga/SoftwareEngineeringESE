<?php
	// member.php
	session_start();  // Required for every page where you call or declare a session

	// Make sure users that are not logged in do not have access to this page
	if (isset($_SESSION['username'])) {
		echo "Welcome, " . $_SESSION['username'] . "!<br />";
	
		// Add 'members only' content here 
		echo "<p>Members only content - for your eyes only</p>";
		
		echo "Click to <a href='logout.php'>Logout</a>";
	} else {
		echo "<p>You must be logged in!</p>";
	}
?>

