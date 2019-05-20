<?php

// Example from: https://www.w3schools.com/xml/ajax_php.asp

// Array of companies
$a[] = "Amazon";
$a[] = "Amazing";
$a[] = "Best Buy";
$b[] = "Costco";

// get teh q parameter from URL
$q = $_REQUEST["q"];


/*
$hint = "";

// If $q is not empty string "" then lookup all matching substrings in the array
if ($q !== "") {
  $q = strtolower($q);    // Convert request to lower case for comparison
  $len=strlen($q);
  foreach($a as $name){
    if(stristr($q, substr($name, 0, $len))) {
      if($hint ==="") {     // First matching array/database element
        $hint = $name;
      } else {              // Additional matching elements in the array/database
        $hint .= ", $name"; // Concatenate matching elements
      }
    }
  }
}
// Output 'no suggestion' if no hint found or output matching vallues
echo $hint === "" ? "no suggestion": $hint;

*/

// Array implementation
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
// Use json_encode() to convert array to a string and send to function that handles the 'onreadystatechange' event
echo $index === 0 ? "no suggestion": json_encode($hintArr);

?>
