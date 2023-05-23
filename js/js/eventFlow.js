// Event flow
var elLink = document.getElementById('link');						
var elItem = document.getElementById('item'); 

// Bubbling - 'Link' alert box shown first on click event
elLink.addEventListener('click', function() {alert('Link')}, false);  
elItem.addEventListener('click', function() {alert('Item')}, false);  

// Capturing - 'Item' alert box shown first on click event
//elLink.addEventListener('click', function() {alert('Link')}, true);  
//elItem.addEventListener('click', function() {alert('Item')}, true);  

