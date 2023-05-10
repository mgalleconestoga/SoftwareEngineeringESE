var originalNumber = 10.23456;

var msg = '<h2>Original number </h2><p>' + originalNumber + '</p>';
msg += '<p>3 decimal places - via toFixed(3): ' + originalNumber.toFixed(3) + '</p>';
msg += '<p>3 digits - via toPrecision(3): ' + originalNumber.toPrecision(3) + '</p>';      
 
var elemt = document.getElementById('info');
elemt.innerHTML = msg;




