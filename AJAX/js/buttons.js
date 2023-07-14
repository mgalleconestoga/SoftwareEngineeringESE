// Select the DOM element
var floor1 = document.querySelector("#floor1");
var floor2 = document.querySelector("#floor2");
var floor3 = document.querySelector("#floor3");
var floorIndicator = document.querySelector("#floorIndicator"); 

// AJAX function calls
function showFloor() {
      var xmlhttpShow = new XMLHttpRequest();     // Instantiate a XMLHttpRequest object
      // Function to be executed when readyState changes (server response ready)
      xmlhttpShow.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          // readyState holds the status of the XMLHttpRequest (4 means finished request and server response is ready)
          // status hold 200 for OK
          floorIndicator.innerHTML = this.responseText;                                             
                                              // responseText string returned from server in 'echo' statement
                                              // THIS IS A GLOBAL VARIABLE SINCE DECLARED IN HTML FILE - Convert text string to javascript array in JSON format 
                                              // 'this' refers to the xmlhttp object and responseText is the property that contains the text returned from the server
        } };
        xmlhttpShow.open("GET", "../php/buttons.php?q=", true);  // Open connection
        xmlhttpShow.send();                                      // Send request
          
}
function showFloorTimeout() {  
  // Button updates 250 ms after any button is pressed 
  // to give the back end server time to respond and update the value   
  setTimeout(showFloor, 250); 
}

function showFloorInterval() {    // Automatic updates every 5 s
    setInterval(showFloor, 5000);
}

function setFloor(flr) {
    var xmlhttpShow = new XMLHttpRequest();     // Instantiate a XMLHttpRequest object
      // Function to be executed when readyState changes (server response ready)
      xmlhttpShow.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          // readyState holds the status of the XMLHttpRequest (4 means finished request and server response is ready)
          // status hold 200 for OK
          floorIndicator.innerHTML = this.responseText; 
        } };
        xmlhttpShow.open("GET", "../php/buttons.php?floor=" + flr, true);  // Open connection
        xmlhttpShow.send();                                                // Send request
}


// Event listeners 
// Get value of floor from back end server after 250ms
floor1.addEventListener("click", function() {setFloor(1); showFloorTimeout();}, false);    
floor2.addEventListener("click", function() {setFloor(2); showFloorTimeout();}, false);    
floor3.addEventListener("click", function() {setFloor(3); showFloorTimeout();}, false);    

window.addEventListener('load', function() {showFloorInterval(3000)}, false);  // Button updates 250 ms after pressed