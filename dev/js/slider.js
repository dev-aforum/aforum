// SLIDER
//console.log("***SLIDER***");
$(document).ready(function(){


  //#slider-index
  //console.log("SLIDER INDEX");
  //start the materialize slider
  $("#slider-index").slider({
    indicators: false, //hide indicators
    transition:1000, //transition duration
    interval:5000, //changing interval
  });
  $("#slider-index").css({"touch-action":"none"});


});
//console.log("***SLIDER***");
 
