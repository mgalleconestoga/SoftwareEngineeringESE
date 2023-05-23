/*
// Create a message
var msg = '<div class=\"header\"><a id=\"close\" href=\"#\">close X</a></div>';
msg += '<div><h2>Click close X to close</h2></div>';

var elNote = document.createElement('div');   // Create new element 
elNote.setAttribute('id', 'note');			  // Add id to new element
elNote.innerHTML = msg; 					  // Add the message
document.body.appendChild(elNote);			  // Add to page

function dismissNote() {
	document.body.removeChild(elNote);		   // Remove the note
}

var elClose = document.getElementById('close'); // Select the close X element
elClose.addEventListener('click', dismissNote, false); // clear note when clicked

*/

// Uses the EVENT object to show position of mouse relative to the 3 coordinate systems 
var sx = document.getElementById('sx'); 	// Element to hold screenX 
var sy = document.getElementById('sy'); 	// Element to hold screenY 
var px = document.getElementById('px'); 	// Element to hold pageX 
var py = document.getElementById('py'); 	// Element to hold pageY 
var cx = document.getElementById('cx'); 	// Element to hold clientX 
var cy = document.getElementById('cy'); 	// Element to hold clientY

function showPosition(event) {
	sx.innerHTML = event.screenX ;	
	sy.innerHTML = event.screenY; 					
	px.innerHTML = event.pageX;						
	py.innerHTML = event.pageY;						
	cx.innerHTML = event.clientX;					
	cy.innerHTML = event.clientY;					
} 

var el = document.getElementById('body'); 	// Get the body element to register mouse movement
el.addEventListener('mousemove', showPosition, false);  // Mouse movement updates position



