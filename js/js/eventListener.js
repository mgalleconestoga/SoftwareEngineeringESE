// Variables / elements
var elUser = document.querySelector("#user");
var elPassword = document.getElementById('passwd');
var err = document.getElementById('err');

// Functions

function checkUsername() {
    if(elUser.value.length < 5) {
        err.innerHTML = '<p>Username must be at least 5 characters long</p>';
    } else {
        err.innerHTML = ''; // Clear any error message
    }
}

function checkPasswd(minLength) {
    if(elPassword.value.length < minLength) {
        err.innerHTML = "<p>Error: your password must be longer than " + minLength + " characters</p>";
    } else {
        err.innerHTML = ''; // clear error message
    }
}

function setup() {
    elUser.focus();         // Give Username focus on page load
}

function makeInvisible() {
    document.body.removeChild(elNote);
}

// Listeners
elUser.addEventListener('blur', checkUsername, false);
elPassword.addEventListener('blur', function() {checkPasswd(7) }, false);
window.addEventListener('load', setup, false);


// Other JS functions - adding a dismissable note 
var msg = '<br><br><div class=\"header\"><a id=\"close\" href=\"#\">close X </a></div>'; 
msg += '<div><h2>Click close X to close</h2></div>';

var elNote = document.createElement('div');
elNote.setAttribute('id', 'note');
elNote.innerHTML = msg; 
document.body.appendChild(elNote); 

var elClose = document.getElementById('close');
elClose.addEventListener('click', makeInvisible, false); 