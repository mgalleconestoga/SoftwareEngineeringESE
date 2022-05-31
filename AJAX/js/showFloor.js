// Select the DOM element
var elbutton = document.getElementById("myButton");
var elfloor = document.getElementById("floor");

// AJAX function call
function showFloor() {
      var xmlhttpShow = new XMLHttpRequest();     // Instantiate a XMLHttpRequest object
      // Function to be executed when readyState changes (server response ready)
      xmlhttpShow.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          // readyState holds the status of the XMLHttpRequest (4 means finished request and server response is ready)
          // status hold 200 for OK
          document.getElementById("floor").innerHTML = this.responseText;                                             
                                              // responseText string returned from server in 'echo' statement
                                              // THIS IS A GLOBAL VARIABLE SINCE DECLARED IN HTML FILE - Convert text string to javascript array in JSON format 
                                              // 'this' refers to the xmlhttp object and responseText is the property that contains the text returned from the server
        } };
        xmlhttpShow.open("GET", "../php/showFloor.php?q=", true);  // Open connection
        xmlhttpShow.send();                                       // Send request
          
}

function showFloorTimeout() {     // Button updates 250 ms after pressed
  setTimeout(showFloor, 250); 
}

function showFloorInterval() {    // Automatic updates every 250 ms
  setInterval(showFloor, 5000);
}

// Event listeners 
window.addEventListener('load', function() {showFloorInterval(3000)}, false);  // Button updates 250 ms after pressed
elbutton.addEventListener("click", showFloorTimeout(), false);               // Automatic updates every 5 seconds