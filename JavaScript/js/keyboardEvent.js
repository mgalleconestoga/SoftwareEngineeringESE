// Variables / element selectors
var elChars = document.getElementById("charactersLeft");
var lastKey = document.getElementById("lastkey"); 
var text = document.getElementById("message");

// Functions

function charCount(e) {
    // Characters left
    var textEntered, lengthOfText, charDisplay, counter, lastkey;
    textEntered = text.value; 
    lengthOfText = textEntered.length;
    counter = 180 - lengthOfText; 
    elChars.innerHTML = "CHaracters left = " + counter; 

    // Last key entered
    lastKey.innerHTML = 'Last key input: ' + String.fromCharCode(e.keyCode);

}



// Event listeners
text.addEventListener('keypress', charCount, false); 