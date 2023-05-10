var originalNumber = Math.PI;

var msg = '<p>Original number ' + originalNumber + '</p>';
msg += '<p>Round to nearest integer: ' + Math.round(originalNumber) + '</p>';
msg += '<p>Round up to nearest integer: ' + Math.ceil(originalNumber) + '</p>';     
msg += '<p>Round down to nearest integer: ' + Math.floor(originalNumber) + '</p>';   
msg += '<p>Square root: ' + Math.sqrt(originalNumber) + '</p>';  
msg += '<p>Random number between 0 and 1: ' + Math.random() + '</p>';  
 
var elemt = document.getElementById('info');
elemt.innerHTML = msg;




