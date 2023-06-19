<?php 
    // Authenticate.php
    session_start();
    $username= $_POST['username'];      // michael
    $password = $_POST['password'];     // ese
    $authenticated = FALSE;
    echo "Authenticating...\n";

    $db = new PDO('mysql:host=127.0.0.1;dbname=authorizedUsers', 'michael', 'ese');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Authenticate against the database
    echo "Searching database for user $username";
    $query = "SELECT * FROM authorizedUsers WHERE username = '$username'"; 
    $rows = $db->query($query);
    foreach ($rows as $row) {
        echo $row['username'];
        if($username === $row['username'] && $password === $row['password']) {
            $authenticated = TRUE;
            echo "\n Found User";
        }
    }

    if($authenticated) {
        $_SESSION['username'] = $username;  
        echo "<p>Congrats, you a logged in</p>"; 
        echo "<p>Click <a href='member.php'> here </a> to go to the members only page</p>";
    } else {
        echo "<p>You are not authenticated!!!!</p>"; 
    }
?>