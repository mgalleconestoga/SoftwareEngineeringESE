// Variables / elements
var elUser = document.querySelector("#user");
var elPassword = document.getElementById('passwd');
var err = document.getElementById('err');

var msg = '<br><br><div class=\"header\"><a id=\"close\" href=\"#\">close X </a></div>'; 
msg += '<div><h2>Click close X to close</h2></div>';

var elNote = document.createElement('div');
elNote.setAttribute('id', 'note');
elNote.innerHTML = msg; 

document.body.appendChild(elNote); 

// Functions
function checkPasswd(minLength) {
    if(elPassword.value.length < minLength) {
        err.innerHTML = "<p>Error: your password must be longer than " + minLength + " characters</p>";
    } else {
        err.innerHTML = ''; // clear error message
    }
}

function setup() {
    elUser.focus();
}

function makeInvisible() {
    document.body.removeChild(elNote);
}


// Listeners
elPassword.addEventListener('blur', function() {checkPasswd(7) }, false);
window.addEventListener('load', setup, false);

var elClose = document.getElementById('close');
elClose.addEventListener('click', makeInvisible, false); 