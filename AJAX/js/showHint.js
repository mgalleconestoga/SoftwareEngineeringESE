function showHint(str) {
    if(str.length == 0) {
      document.getElementById('txtHint').innerHTML = ''; // Clear suggested text
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();     // Instantiate a XMLHttpRequest object
      // Function to be executed when readyState changes (server response ready)
      xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          // readyState holds the status of the XMLHttpRequest (4 means finished request and server response is ready)
          // status hold 200 for OK
          var resp = this.responseText;   // Text string returned from server in 'echo' statement
          hintArray = JSON.parse(resp);   // THIS IS A GLOBAL VARIABLE/ARRAY SINCE VAR IS NOT DECLARED - Convert text string to javascript array in JSON format 
          printHint();
        }
      };
      xmlhttp.open("GET", "../php/gethint.php?q=" + str, true); // Open connection
      xmlhttp.send();                                        // Send request
    }
  }
  
  function printHint() {
    document.querySelector('#txtHint').innerHTML = '<p>' + hintArray[0] + '</p>' + '<p>' + hintArray[1] + '</p>' + '<br />' ;
  }