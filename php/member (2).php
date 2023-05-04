<?php
    session_start();            // Keep session valid!

    // Protect the content of this page
    if(isset($_SESSION['username'])) {
        // Protected content 
        echo "Welcome, " . $_SESSION['username'] . "<br>";
    
        echo "<p>Please click <a href='logout.php'>here</a> to log out</p>";
    } else {
        echo "<p>You are not authorized. Click <a href='login.html'>here</a> to log in</p>";
    }

?>
