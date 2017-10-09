$(document).ready(function(){
  //console.log("***PAGE ANIMATIONS");
  //if the its the index page
  $(".loading-animation").removeClass('hide');

  setTimeout(function(){

    $(".loading-animation").addClass('hide');

    if( name === "index.php" || name === "") {
      $("nav").addClass("animated fadeInDown").css({"z-index":"2"});
      // .animateCss("fadeInDown"); //hive nav and add fadeInDown
      console.log($("nav"));
      $("body").addClass("fadeIn").removeClass("hide"); //add fadeIn to body and show it
      $(".tabs").css({"overflow":"hidden"}); //hide overflow for animation
      $(".custom-icon").addClass("hide animated fadeIn"); //hide and add fadeIn animation to custom-icon icons
      $(".tabs .left").addClass("animated fadeInLeft"); //animate left tabs to show from the left
      $(".tabs .right").addClass("animated fadeInRight"); //animte right tabs to show from the right
      $(".brand-logo-img").addClass("animated fadeIn"); //animate logo to fade in
      $("nav").removeClass("hide"); //show nav to animate it and it's childs
      $(".custom-icon").each(function (index) { //show custom-icons slightly one after another
        $(this).removeClass("hide");
      });
      $("#nav-mobile-socialLinks").removeClass('hide');



      //going to site pages animation
      $("a").click(function (ev) { //when clicking links
        //console.log("***navigate from index animation click***");
        ev.preventDefault(); //preventDefault
        var href = $(this).attr("href"); //console.log("the href is: " + href); // assign the href to a variable
        var target = $(this).attr("target"); //console.log("the target is: " + target); //assing the target to a variable

        if(href !== "#menu") {    //if the link href is not empity, as in the menu icon from materialize framework
          if(target !== "_blank") { //if the target is not _black to open in new window
            $("body").addClass("fadeOutDown"); //fadeOutDown the body
            setTimeout(function(){ //timout to change the href as the animateCss function still has no callback
              $(location).attr("href", href);
            },750);
          } else {// if the target is blank, to open in new window
            window.open(href,"_blank"); //open a new window with the href
          } //end of if else
        } //end of if
        //console.log("***navigate from index animation click***");
      });

      // $(".animated").each(function(){
      //   $.fn.extend({
      //     animateCss: function (animationName, callback) {
      //       var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      //       $(this).one(animationEnd, function() {
      //           $(this).removeClass('animated ' + animationName);
      //       });
      //     },
      //   });
      // });
      //
      //remover classes de animação para garantir comportamento normal
      setTimeout(function(){
        $("body").removeClass('fadeIn');
        $(".custom-icon").removeClass('fadeIn');
        $("nav").removeClass('fadeInDown');
        $(".tabs .left").removeClass('fadeInLeft');
        $(".tabs .right").removeClass('fadeInRight');
        $("#nav-mobile-socialLinks").removeClass('fadeIn');
      },2000);

    } else {

      //onLoad casting-gallery animation
      var i = 1; //initialize a counter variable
      //
      // $(".casting-gallery-item, .yt-container").each(function(index){ //for each casting-gallery-item
      //
      //   $(this).css({ "animation-delay" : i/4 + "s" }); //add a delay longer as one quarter of the counter
      //   i++; //add to counter
      //
      // }); //animate  casting-gallery-itens

      $("nav").addClass("animated fadeInDown");
      $("body").addClass("fadeIn").removeClass("hide"); //add fadeIn to body and show it
      $(".tabs").css({"overflow":"hidden"}); //hide overflow for animation
      $(".custom-icon").addClass("hide animated fadeIn"); //hide and add fadeIn animation to custom-icon icons
      $(".tabs .left").addClass("animated fadeInLeft"); //animate left tabs to show from the left
      $(".tabs .right").addClass("animated fadeInRight"); //animte right tabs to show from the right
      $(".brand-logo").addClass("animated fadeIn"); //animate logo to fade in
      $("nav").removeClass("hide"); //show nav to animate it and it's childs
      $("#nav-mobile-socialLinks").removeClass('hide');
    // //  container animation for standart page load
      $(".casting-title, .portfolio-title").removeClass('hide');
      $(".container").removeClass('hide');

      $(".custom-icon").each(function (index) { //show custom-icons slightly one after another
        $(this).removeClass("hide");
      });
      // $(".yt-container").removeClass('fadeInUp'); //remove animation class from yt container


      //remover classes de animação para garantir comportamento normal
      setTimeout(function(){
        $("body").removeClass('fadeIn');
        $(".custom-icon").removeClass('fadeIn');
        $("nav").removeClass('fadeInDown');
        $(".tabs .left").removeClass('fadeInLeft');
        $(".tabs .right").removeClass('fadeInRight');
        $("#nav-mobile-socialLinks").removeClass('fadeIn');
      },2000);



    } //end of if else

    // SCROLLMAGIC

    var controller = new ScrollMagic.Controller();

    $(".casting-gallery-item").each(function(index) {

      var scene = new ScrollMagic.Scene({
        triggerElement: this,
        reverse:false,
        triggerHook:0.8 ,
        offset:"-50%",
      })
        .setClassToggle(this, "fadeInUp")
        // .addIndicators()
        .addTo(controller);
    });

    $(".yt-container").each(function(index) {

      var scene = new ScrollMagic.Scene({
        triggerElement: this,
        reverse:false,
        triggerHook:0.8 ,
        offset:"-50%",
      })
        .setClassToggle(this, "fadeInUp")
        // .addIndicators()
        .addTo(controller);
    });




  },2000);
  //console.log("***PAGE ANIMATIONS");
}); //end of doc ready fn
