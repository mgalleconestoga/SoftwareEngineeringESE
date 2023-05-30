/******** Selecting elements *******************/
//$ === jQuery
// $() is equivalent to document.querySelectorAll()


/******** Manipulating styles *******************/
//$("h1").css("color", "red");      // directly change CSS properties (not usually the best way to do things (want to separate concerns) - better to add and remove classes defined by css files)
console.log($("h1").css("color"));  // css() methods with one argument is a getter(), with two arguments it is a setter()
//$("h1").addClass("myClass");
$("h1").addClass("myClass margin-50"); // Adding multiple classes at once (use a space)
//$("h1").removeClass("myClass");
console.log($("h1").hasClass("margin-50"));


/******** Manipulating text/html *******************/
$("h1").text("Goodbye");
$("button").text("Hit me");             // equivalent to textContent
$("h1").html("<em>Goodbye</em>");       // equivalent to .innerHTML


/******** Manipulating attributes *******************/
console.log($("a").attr("href"));                   // Get attribute
$("a").attr("href", "http://www.yahoo.com");        // Set attribute (two values is for setting)
console.log($("h1").attr("class"));                   // Get class attributes (all classes element has)


/******** Adding event listeners *******************/
$("h1").on("click", function() { alert("You clicked on Hello"); $("h1").removeClass("myClass"); });     // example with anonymous function
//$("button").on("click", function() { alert("You clicked one of the buttons"); });
$("input").on("keypress", function(e) { console.log(e.key); $("h1").text(e.key); } );


/******** Adding / removing elements *******************/
$("h1").before("<button>before</button>");      
$("h1").after("<button>after</button>");        
$("h1").prepend("<button>prepend</button>");    
$("h1").append("<button>append</button>");      


/******** Website animations *******************/
$("button").on("click", function() {
    //$("h1").hide();
    //$("h1").show();
    //$("h1").toggle();       // hide then show then hide ...
    //$("h1").fadeOut();
    //$("h1").fadeIn();
    //$("h1").fadeToggle();
    //$("h1").slideUp();
    //$("h1").slideDown();
    //$("h1").slideToggle();

    //$("h1").animate({opacity: 0.5});        // Only use css rules with numeric value
    //$("h1").animate({margin: "100px"});

    /** Chaining the animation */
    $("h1").slideUp().slideDown().animate({opacity: 0.5});

});


