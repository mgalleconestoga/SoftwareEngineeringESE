// Example uses load event to trigger scripts that access contents of a page
// This example gives focus (input selected and ready to type) to the username input 

function setup() {
	var textInput; 
	textInput = document.getElementById('user'); 	// Get username input
	textInput.focus(); 								// Give username focus
}

window.addEventListener('load', setup, false); 		// when page loads call setup()

