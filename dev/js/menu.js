// MENU
//console.log("***MENU***");
$(document).ready(function(){

    // INDEX MENU
    if( name == "index.php" || name === "" ) { //if the page is the index
      //console.log("THIS IS THE INDEX");
      //remove and add classes, and change css
      $(".nav-extended").removeClass("white").addClass("transparent"); //add nav the bg color class
      $('.nav-wrapper').css({'border-bottom':'1px solid white'}); //add a border to the wrapper
      $('.button-collapse').css({'color':'white'}); //change the font color to white

      //change icons src to white
      $('.brand-logo-img').attr('src','img/logos/logo-branca.png'); //logo Forum
      $(".icon-sociocon").css({"color":"white","font-size":"2em"});

      $(".nav-content li a").removeClass("black-text"); //remove the black font color class

      //remove the active class from whatever object has it
      $(".active").removeClass("active"); // remove the active class
      $(".indicator").addClass("hide"); // hide the active indicator

    } else {  //if the page is not the index

      $(".icon-sociocon").css({"color":"black","font-size":"2em"});

     //console.log("THIS IS THE " + name );
      //add class active
      $("li.tab a").each(function(index){
        //if the link is equal to the url global
        if (this == url ){
          $(this).addClass("active"); //add the class actve
        } else { //if not
          $(this).removeClass("active");//remove class ative
        } //end of if else
      }); //end of each
    } //end of if else

  //init materialize css
  $(".button-collapse").sideNav();

  $(".nav-extended").find("a").click(function(event) {

    if (
        $(this).attr("href") !== "#menu" &&
        $(this).attr("href") !== "https://instagram.com/forummgt/" &&
        $(this).attr("href") !== "https://www.youtube.com/aForumBrCuritiba/" &&
        $(this).attr("href") !== "https://www.facebook.com/forummgt" &&
        $(this).attr("href") !== "https://twitter.com/Forummgt"
      )
      {
        /* Act on the event */
        event.preventDefault();
        var href =  $(this).attr("href");

        $("body").addClass('fadeOut');
        setTimeout(function(){
          location = href;
        },1000);
      }
  });
});//end of doc ready fn
//console.log("***END OF MENU***");
