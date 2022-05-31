<?php

// Example adapted from: https://www.w3schools.com/xml/ajax_php.asp

// Array of companies
$a = array("Amazon", "Apple", "Alcatel", "BestBuy", "Bravo", "Cambria", "Dell", "FaceBook", "Netflix", "Google");

// get the q parameter from URL
$q = $_REQUEST["q"];

// If $q is not empty string "" then lookup all matching substrings in the array
$index = 0;  // index for hintArr which holds elements with matching substrings
if ($q !== "") {
  $q = strtolower($q);    // Convert request to lower case for comparison
  $len=strlen($q);
  foreach($a as $name){
    if(stristr($q, substr($name, 0, $len))) {
      // substring match to elements in array
      $hintArr[$index] = $name;
      $index = $index + 1;
    }
  }
}

// string sent to function that handles the 'onreadystatechange' event
// Use json_encode() to convert array to a (JSON encoded) string and send to function that handles the 'onreadystatechange' event
echo $index === 0 ? "no suggestion": json_encode($hintArr);

?>