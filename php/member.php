<?php
// member.php contains members only content
session_start(); // Required for every page that uses session_start

// Ensure that users not logged in do not have access to this page
if (isset($_SESSION['username'])) {

  // Page content goes here
  echo 'Welcome, ' . $_SESSION['username'] . '!<br />';
  echo 'This is where our members only content will go';


  echo "Click to <a href='logout.php'>logout</a>";










} else {
  echo 'You are not authorized and must be logged in to see this content';
}

?>
