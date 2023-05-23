<?php
	/*
    session_start();        // Critical must start a session!

    $submitted = !empty($_POST);
    $user = $_POST['username'];
    $password = $_POST['password'];

    
    //echo "<p>Form submission success!: $submitted</p>";
    //echo "<p>Username: $user</p>";
    //echo "<p>Password: $password</p>";
    
    echo "<h1>Members only page</h1>";
    if($user === "mike" && $password === "mypassword") {
        $_SESSION['username'] = $user; 
        echo "Hello $user <br>";
        echo "<p>Please click <a href='member.php'>here</a> to go to our exclusive members only page</p>";
    } else {
        echo "<p>You are not authorized</p>";
    }
	*/
?>


<?php 
	/*
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
	*/
?>



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
    // athenticate.php - using sessions to login
    session_start();   
    // Get data submitted in the form
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $authenticated = FALSE; 

    /* 
    // Checking input credentiasl against a flat file (used to store authenticated user credentials)

    if(file_exists('../JSON/users.json')){
        $contents = file_get_contents('../JSON/users.json');
        $usersArray = json_decode($contents, true);                 // true means php array

        foreach ($usersArray as $entry => $data)  {
            echo $data['username'];
            echo ' --> ';
            echo $data['password']; 
            echo '<br/>';


            if (($username == $data['username'])) {
                if($password == $data['password']) {
                    $authenticated = true;
                }
            }
        }

    } else {
        echo "<p>File does not exist</p>";
    }
    */
  

    // Checking input credentials against a database (if using this, comment out the above flat file code) 
    if(TRUE) {
        // Connect to $db
        $db = new PDO(
            'mysql:host=127.0.0.1;dbname=elevator',     // Database name
            'michaelG',                                 // username
            'myPassword'                                // Password
        );
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Query the db to compare to the input username and password
        $query2 = 'SELECT * FROM authorizedUsers'; 
        $rows = $db->query($query2); 
        foreach ($rows as $row) { 
            if($username == $row['username'] && $password == $row['password']) {
                $authenticated = TRUE; 
            }
        }
    }

    
    // Once a user has been authenticated

    if($authenticated) {
        $_SESSION['username'] = $username;   // set some session variables - could set $_SESSION['authenticated'] = true;
        $_SESSION['password'] = $password; 

        echo '<h2>Congrats ' . $username . ' you are authenticated</h2>';
        echo '<p>Please click <a href=\'member.php\'>here</a> to go to the members only page</p>';
    } else {
        echo '<p>You are not authenticated</p>'; 
    }


?>