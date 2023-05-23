var msg = '<h2>Page</h2><p>page title: ' + document.title + '</p>';
msg += '<p>page address: ' + document.URL + '</p>';    // output depends on if you turn on the web server - file:// vs. http://
msg += '<p>last modified: ' + document.lastModified + '</p>';


var elemt = document.getElementById('info');
elemt.innerHTML = msg;

 


