// Events on the login Page
/* ********************************* */

// Select the DOM elements
var elUsername = document.getElementById('user'); // form text input
var elPassword = document.getElementById('pass'); // form text input
var elUsernameMsg = document.getElementById('userfeedback'); // Text feedback on user name input
var elPasswordMsg = document.getElementById('passwordfeedback')// Text feedback on password input
var elLogin = document.getElementById('login'); // The login form - want to prevent form submission if input values do not meet minimum standards


// Functions to call
function checkUsername(minlength) {   // Function with parameter, without event object passed
  if(elUsername.value.length < minlength && elUsername.value.length > 0) {
    elUsernameMsg.innerHTML = 'min ' + minlength.toString() + ' characters';
  } else if (elUsername.value.length >= minlength){
    elUsernameMsg.innerHTML = 'Username: OK'; // OK message
  } else {
    elUsernameMsg.innerHTML = ''; // Clear any previous error message

  }
}

function checkPassword(event, minlength) {
  var i = 0;
  var character = '';
  var upperCase = false;
  var number = false;

  if(elPassword.value.length < minlength && elPassword.value.length > 0) {
    elPasswordMsg.innerHTML = 'min ' + minlength.toString() + ' characters';
  } else if (elPassword.value.length >= minlength) {
    // If Password is at least minlength characters long,
    // check to make sure it has at least one upper case character
    // and one number
    for(i = 0; i < elPassword.value.length; i++) {
      character = elPassword.value.charAt(i);
      if (character == character.toUpperCase()) {
        upperCase = true;
      }
      if (!isNaN(character * 1)) {
        number = true;
      }
    }
    if (upperCase == false || number == false) {
      elPasswordMsg.innerHTML = '1 upper case, 1 number';
    } else {
      elPasswordMsg.innerHTML = 'Password: OK';
    }

  } else {  // Password field is clear
    elPasswordMsg.innerHTML = ''; // Clear any previous error message
  }
}

function checkInputs(event) {
  if ((elUsernameMsg.innerHTML != 'Username: OK') || (elPasswordMsg.innerHTML != 'Password: OK')) {
    event.preventDefault();  // Prevent form submission
  }
}

// Add event listeners to the elements
elUsername.addEventListener('blur', function() {checkUsername(5)}, false);  // Blur event occurs when user click off this element
elPassword.addEventListener('blur', function(event){checkPassword(event, 7)}, false);
elLogin.addEventListener('submit', function(event) {checkInputs(event), false}); // Prevent form submission if inputs do not meet minimum standards
