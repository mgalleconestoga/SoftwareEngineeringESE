//alert("working");

/*
$(document).ready(function() {              // Don't need this if jQuery script comes at end of HTML document
    $("h1").css("color","red");
});
*/

// Styles & classes
$("h1").css("color","red");                 // instead of 'querySelectorAll()' - but it is better to change classes and IDs and put styles in css file
console.log($("h1.myClass").css("color"));  // One argument is getter(), two arguments is setter()
$("#title").addClass("newClass awesome");
console.log($("#title").hasClass("awesome"));  // true
$("#title").removeClass("newClass awesome");

// Text
$("h1").text("Goodbye");
$("h1").html("<h1>Welcome</h1>");

// Attributes
$("img").attr("src", "Bike_icon.png").attr("width", "100px");
console.log($("img").attr("class"));         // 'class' is an attribute

// Event listeners
$("h1").click(function() {
    $("h1").css("color", "purple");
});

$("#btn2").click(function(){
    $("img").attr("width", "200px");
});

$("#btn3").click(function(){
    $("img").attr("width", "100px");
});

$("input").keydown(function(e) {
    //console.log(e.key);     // Get key
    console.log($("#textbox1").val().length);
    $("#chars").text(($("#textbox1").val().length + 1) + " characters");
});

$(document).keydown(function(e){         // Press any key
    $("h1").text(e.key);
});

// More general event listener method ('on')  
// Any events: see https://developer.mozilla.org/en-US/docs/Web/Events
$("h1").on("mouseover", function(){
    $("h1").css("color", "green");
});

$("h1").on("mouseout", function(){
    $("h1").css("color", "black");
});

$("h1").on("mousedown", function(){
    $("h1").css("color", "yellow");
});

// Selectors before, after, prepend, append, etc. 
$("#title").before("<button>I am before (outside h1)</button>");
$("#title").after("<button>I am after (outside h1)</button>");
$("#title").prepend("<button>I am prepend (inside h1)</button>");
$("#title").append("<button>I am append (inside h1)</button>");

// removing elements
//$("#title").remove();

// Prebuilt Animations: hide(), show(), etc.
$("#btn4").on("click", function(){
    $(".image").hide();
});

$("#btn5").on("click", function(){
    $(".image").show();
});

$("#btn6").on("click", function(){
    $(".image").toggle();
    
});

$("#btn7").on("click", function(){
    $(".image").fadeIn();
});

$("#btn8").on("click", function(){

    $(".image").fadeOut();
});

$("#btn9").on("click", function(){
    $(".image").fadeToggle();
});

$("#btn10").on("click", function(){
    $(".image").slideUp();
});

$("#btn11").on("click", function(){
    $(".image").slideDown();
});

$("#btn12").on("click", function(){     // Dropdown menu
    $(".image").slideToggle();
});

// CSS animations (via animate())
$("#cssbtn1").on("click", function(){     // Dropdown menu
    $(".image").animate({
        opacity: 0.5,
        width: "200px",
    }); // Any NUMERIC VALUED css property here
});


// Chaining animation methods (in order)
$("#cssbtn2").on("click", function(){     // Dropdown menu
    $(".image").slideUp().slideDown().addClass("bgGreen").animate({
        opacity: 0.5,
        width: "200px",
    }); // Any NUMERIC VALUED css property here
});