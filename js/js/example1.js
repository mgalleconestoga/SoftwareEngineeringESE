const today = new Date('June 1 2022, 13:21:56');
const hourNow = today.getHours();
var greeting; 

function func1(height) {
    //console.log("Hello world");
    return height;
}

function func2(width) {
    //alert("You have won a prize!");
    return width;
}

function func3(length) {
    //console.log("Don't fall for it");
    return length; 
}

function callAll() {
    var length, width, height; 
    length = func1(10);
    width = func2(20);
    height = func3(30);
    var arr = [length, width, height, length*width*height ];
    return arr;
}

console.log(callAll()); 

document.write('<h2>' + greeting +'</h2>')