/**** Declare variables ****/
var elForm;     // Form
var elUsername; // username element
var elPassword; // password element
var elUserFB;   // username feedback
var elPassFB;   // password feedback

/*** Get DOM elements *****/
elForm = document.getElementById('form');
elUsername = document.querySelector('#user');
elPassword = document.querySelector('#pass');
elUserFB = document.querySelector('#userfb');
elPassFB = document.querySelector('#passfb');

/******* Function Definitions *****/
function checkUsername(e, length) {
    let minLength = false;

    // Check Length
    if(elUsername.value.length > length) {
        minLength = true;
    }

    // Output feedback
    if (minLength == true) {
        elUserFB.innerHTML = "Username OK";
    } else {
        elUserFB.innerHTML = "Username length must be more than 7 characters";
        e.preventDefault();                  // Prevents the page from submitting
    }

}

function checkPassword(e, length) {
    let minLength = false;
    let upperCase = false;
    let isNumber = false;
    let i; 
    let character; 

    // Check Length
    if(elPassword.value.length > length) {
        minLength = true;
    }

    // CHeck for Upper case and Number
    for(i = 0; i < elPassword.value.length; i++) {
        character = elPassword.value.charAt(i);     // Character in the password
        if(character == character.toUpperCase() && isNaN(character * 1) ) {
            upperCase = true;
        }
        if(!isNaN(character * 1)) {
            isNumber = true;
        }
    }

    // Create error message
    let ermsg = "Password must contain: ";
    if(minLength == false){
        ermsg = ermsg + "At least 7 characters ...";
    } 
    if(upperCase == false) {
        ermsg = ermsg + "At least one uppercase character ... ";
    } 
    if (isNumber == false) {
        ermsg = ermsg + "At least one number ...";
    } 
    
    // Output feedback
    if (minLength == true && upperCase == true && isNumber == true) {
        elPassFB.innerHTML = "Password OK";
    } else {
        elPassFB.innerHTML = ermsg;
        e.preventDefault();                  // Prevents the page from submitting
    }
}

/****** Event listeners ******/

elUsername.addEventListener('blur', function(e) {checkUsername(e,7);}, false);
elPassword.addEventListener('blur', function(e) {checkPassword(e,7);}, false);
elForm.addEventListener('submit', function(e) {checkPassword(e,7); checkUsername(e,7);}, false);