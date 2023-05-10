<?php
    session_start();        // Critical must start a session!

    $submitted = !empty($_POST);
    $user = $_POST['username'];
    $password = $_POST['password'];

    /*
    echo "<p>Form submission success!: $submitted</p>";
    echo "<p>Username: $user</p>";
    echo "<p>Password: $password</p>";
    */
    echo "<h1>Members only page</h1>";
    if($user === "mike" && $password === "mypassword") {
        $_SESSION['username'] = $user; 
        echo "Hello $user <br>";
        echo "<p>Please click <a href='member.php'>here</a> to go to our exclusive members only page</p>";
    } else {
        echo "<p>You are not authorized</p>";
    }

?>
