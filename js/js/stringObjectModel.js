var saying = 'Home sweet home ';

var msg = '<h2>Home sweet home </h2><p>saying.length: ' + saying.length + '</p>';
msg += '<p>saying.toUpperCase(): ' + saying.toUpperCase() + '</p>';    
msg += '<p>saying.toLowerCase(): ' + saying.toLowerCase() + '</p>'; 
msg += '<p>saying.charAt(12): ' + saying.charAt(12) + '</p>';   
msg += '<p>saying.indexOf(\'ee\'): ' + saying.indexOf('ee') + '</p>';  
msg += '<p>saying.substring(8, 14): ' + saying.substring(8, 14) + '</p>';  
msg += '<p>saying.trim(): ' + saying.trim() + '</p>';  				// remove trailing space
msg += '<p>saying.replace(\'me\', \'w\'): ' + saying.replace('me', 'w') + '</p>';  
  
var array = saying.split(' ');
msg += '<p>saying.split(\' \'): ' + array[0] + '</p>';    // result is an array
  
  var elemt = document.getElementById('info');
elemt.innerHTML = msg;




