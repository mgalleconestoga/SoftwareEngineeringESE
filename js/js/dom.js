var nutel = document.getElementById('two');
nutel.setAttribute('class', 'hot');

var newel = document.createElement('li');
var newText = document.createTextNode('Frozen Mangoes');
newel.appendChild(newText);

var position = document.querySelector('ul');
var pos2 = document.getElementById('one');

// Place at end of list
//position.appendChild(newel)

// Place at beginning of list
position.insertBefore(newel, pos2);




