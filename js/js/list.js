//let nutel = document.getElementById('two');
let nutel = document.querySelector('#two');
nutel.setAttribute('class', 'hot');

let newel = document.createElement('li');
let newText = document.createTextNode('Frozen Mangoes');
newText.textContent = 'Frozen strawberries';
newel.className = 'cold';
newel.removeAttribute('class');
newel.setAttribute('class', 'cold');

newel.appendChild(newText);

let position = document.querySelector('ul');
let pos2 = document.getElementById('one');

// Place at end of list
position.appendChild(newel)

// Place at beginning of list
//position.insertBefore(newel, pos2);


// Show all li elements
let nutel2 = document.querySelectorAll('li');
nutel2[0].setAttribute('class', 'cold');

nutel2.forEach(element => {             // foreach in JS
    console.log(element);
});
nutel2[4].id = 'five';   //setAttribute('id', 'five');



