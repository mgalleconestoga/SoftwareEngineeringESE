// keyboardEvent example
var el; 

function charCount(e) {
	var textEntered, charDisplay, counter, lastkey;
	textEntered = document.getElementById('message').value;    	// text input by user 
	charDisplay = document.getElementById('charactersLeft');  	// Get element that displays remaining chars 
	
	counter = (180 - (textEntered.length));						// remaining chars
	charDisplay.innerHTML = 'Characters remaining: ' + counter; // Show remaining chars
	
	lastkey = document.getElementById('lastkey'); 				// Get element that displays lastkey input by user
	lastkey.innerHTML = 'Lasy key input: ' + String.fromCharCode(e.keyCode);  // Output last key 
}

el = document.getElementById('message');			// Get the message element <textarea>
el.addEventListener('keypress', charCount, false);  // Listen for keypress event inside <textarea> element and call charCount



