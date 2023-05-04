class Car {
    constructor(color, doors, make, model, fuel) {
        this.clr = color;
        this.drs = doors;
        this.mk = make; 
        this.mod = model;
        this.fl = fuel; 
    }

    getColor() {
        return this.clr;
    }

    setColor(color) {
        this.clr = color;
    }

    getDoors() {
        let doors = new Number(); 
        doors = this.drs; 
        return doors.toPrecision(3);
    }

    giveMePI() {
        return Math.PI; 
    }
}


