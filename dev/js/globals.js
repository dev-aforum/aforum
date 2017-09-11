//GLOBALS
//console.log("***GLOBALS***");

//url
//console.log("var url");
var url = $(location).attr("href"); //get the href
//console.log("var url = " + url);
urlSplit = url.split('/'); //split the have only the location
//console.log("var url = "  + urlSplit + " after split");

//console.log("...................");

//name
//console.log("var name ");
var name = urlSplit.slice(-1).pop(); //get the name of the page
//console.log("var name = " + name);

//console.log("...................");

//windowHeight
//console.log("var windowHeight");


  var windowHeight = $(window).height(); //get the height of the window

  //console.log("var windowHeight = " + windowHeight);
//when resizing
$(window).resize(function(){

  windowHeight = $(window).height(); //get again the windowHeight
    //console.log("var windowHeight = " + windowHeight);
});

//console.log("...................");

//windowWidth
//console.log("var windowWidth");


  var windowWidth = $(window).width(); //get the Width of the window
  //console.log("var windowWidth = " + windowWidth);

//when resizing
$(window).resize(function(){

  windowWidth = $(window).width(); //get again the windowWidth
  //console.log("var windowWidth = " + windowWidth);

});

//console.log("...................");


//console.log("***GLOBALS***");
