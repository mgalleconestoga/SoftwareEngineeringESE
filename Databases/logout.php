<?php 
    session_start(); 
    session_destroy(); 

    echo "<h1>You have been logged out successfully</h1>";
    echo "<p>Please click <a href='login.html'>here</a> to log in again</p>";

?>