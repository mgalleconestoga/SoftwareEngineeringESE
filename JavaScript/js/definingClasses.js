class Hotel {
	constructor(name, rooms, booked) {
		this.name = name;
		this.rooms = rooms;
		this.booked = booked;
	}
	
	checkAvailability () {
		console.log(this.rooms - this.booked)  // output result to console
		return this.rooms - this.booked;	   // return result
	}
	
	getname() {
		console.log(this.name);				   // output result to console
		return this.name;					   // return result
	}
}



