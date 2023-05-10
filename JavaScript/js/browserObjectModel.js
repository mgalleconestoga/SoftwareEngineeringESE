var msg = '<h2>Browser Window</h2><p>width: ' + window.innerWidth + '</p>';
msg += '<p>height: ' + window.innerHeight + '</p>';
msg += '<h2>history</h2><p>items: ' + window.history.length + '</p>';
msg += '<h2>screen:</h2><p>width: ' + window.screen.width + '</p>';
msg += '<p>height: ' + window.screen.height + '</p>';
msg += '<h2>pointer:</h2><p>x-coord: ' + window.screenX + '</p>';
msg += '<p>y-coord: ' + window.screenY + '</p>';


var elemt = document.getElementById('info');
elemt.innerHTML = msg;
// alert('Current page: ' + window.location);
// open('http://www.google.com');   // pop-up blocker may block this
// print();   						// opens up the print dialog


