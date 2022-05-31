<?php

// get the q parameter from URL
$q = $_REQUEST["q"];        // In this case $q == "" empty string

$currfloor = strval(rand(1,20));   // This is what gets sent back to the 'q=' AJAX request

// string sent to function that handles the 'onreadystatechange' event
echo json_encode($currfloor);

?>