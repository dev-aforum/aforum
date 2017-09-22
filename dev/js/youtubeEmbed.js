
  function youtubeEmbed (link){
    var embed = $(link).attr("data-embed");
    var image = new Image();
    image.src =  "https://img.youtube.com/vi/" + embed + "/sddefault.jpg";
    $(link).append(image);
    $(image).addClass('yt-embed-img');

    $(link).click(function(){
      var iframe = document.createElement("iframe");
      $(iframe).attr({
        frameborder: "0",
        allowfullscreen: "",
        src: "https://www.youtube.com/embed/"+ embed +"?autoplay=1&rel=0&showinfo=0&controls=1&enablejsapi=1",
      });

      $(link).html("").append(iframe);
    });
  }

  function youtubeThumb (link){
    var embed = $(link).attr("data-embed");
    var image = new Image();
    image.src =  "https://img.youtube.com/vi/" + embed + "/sddefault.jpg";
    $(link).append(image);
    $(image).addClass('yt-embed-img');
  }
