<?php
    session_start();   // Use session array to store current floor between page loads 
                       // Don't need to do this if using databases to store data 
     
    if(!empty($_GET['floor'])) {
        // Set the value of the floor if receive the 'floor' key to the value sent here
        $_SESSION['floor'] = $_GET['floor'];        // Store this in the database later
    } 

    if(!empty($_SESSION['floor'])) {
        echo json_encode($_SESSION['floor']);       // Get this from database later
    } else {
        echo json_encode("No floor selected yet");
    }
    
?>