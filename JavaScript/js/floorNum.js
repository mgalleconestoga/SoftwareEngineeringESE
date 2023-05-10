// AJAX call for getting the current floor number of the Elevator - AJAX call using XMLHttpRequest() constructor as described on w3schools.com
function showFloor() {
  var xmlhttpShow = new XMLHttpRequest();
  // Function to execute whenever readyState changes (e.g. server response ready)
  xmlhttpShow.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      // readyState holds the status of the XMLHttpRequest (4 means finished request and server response is ready)
      // status hold 200 for OK
      var resp = this.responseText;   // Text string returned from server in 'echo' statement
      //hintArray = JSON.parse(resp);   // Convert text string to javascript array in JSON format
      document.getElementById('floor').innerHTML = resp;
      // Alternative object selector
      //document.querySelector('#floor').innerHTML = resp;
      // Could call a function to show text
    }
  };
  xmlhttpShow.open("GET", "../php/showFloor.php?q=", true);
  xmlhttpShow.send();
}


function showFloorInterval(millisec) {
    setInterval(showFloor, millisec);
}
