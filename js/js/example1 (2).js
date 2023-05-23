var today = new Date(); 
var hourNow = today.getHours();
var greeting; 

if (hourNow > 18) {
	greeting = 'Good evening';
} else if (hourNow > 12) {
	greeting = 'Good afternoon';
} else if (hourNow > 0) {
	greeting = 'Good morning';
} else {
	greeting = 'Welcome!';
}
document.write('<h3>' + greeting + '</h3>');


/* Objects - Literal Notation   */
var hotel = {
	name: 'Quay', 							// Properties
	rooms: 40, 
	booked: 25, 
	
	checkAvailability: function() {			// Method
		return this.rooms - this.booked;
	}
};

var hotelName = hotel.name; 				// Accessing properties and methods
var roomsFree = hotel.checkAvailability();


/* Objects - Constructor Notation   */
var hotel = new Object();		// First create a new object using the Object() constructor function
								// Alternatively can create empty object using literal notation:  var hotel = {}; 
								
// After creating a blank / empty object add properties and methods via dot notation
hotel.name = 'Quay';
hotel.rooms = 40;
hotel.booked = 25; 				// Can use this notation to add properties and methods regardless of the notation 

hotel.checkAvailability = function() {
	return this.rooms - this.booked; 
};

/* Creating multiple objects - Constructor Functions */
function Hotel(name, rooms, booked) {			// First letter of constructor functions are capitalized - reminder to use 'new'
	this.name = name;							// 'this' keyword used instead of the object name to indicate that the property
	this.rooms = rooms;							// or method belongs to the object created by this particular instance of the function 
	this.booked = booked; 
	
	this.checkAvailability = function() {
		return this.rooms - this.booked;
	};
}

var quayHotel = new Hotel('Quay', 50, 35);   	// Object that represents the Quay hotel --> uses 'new' keyword
var parkHotel = new Hotel('Park', 100, 60);		// Object the represents the Park hotel	

































