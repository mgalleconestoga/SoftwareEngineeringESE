<?php
// authenticate.php, modified to use sessions
session_start(); // Starts the session and creates the session varaiable
                 // Use on every page where sessions are required

$username = $_POST['username'];
$password = $_POST['password'];

// Hard code a username and password for now - later use databases
if ($username == 'michael' && $password == 'Mypassword1') {
  $_SESSION['username'] = $username;  // set the session variable
  echo 'Congratulations, you have been authenticated';
  echo 'Please click ' . '<a href=member.php>here</a>' . ' to continue to the members only page';


} else {
    echo 'You are not authenticated';
}


?>
