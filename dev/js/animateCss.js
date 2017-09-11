//ANIMATE CSS

//add function to add and remove animateCss clases
$.fn.extend({
    animateCss: function (animationName, callback) {
      // console.log("***ANIMATION EXTEND FN***");
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
      // console.log("***ANIMATION EXTEND FN***");
    },
});
