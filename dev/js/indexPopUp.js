$(document).ready(function() {

  $("#modal-indexPopUp").modal({
    ready: function(){
      $(".youtube").trigger("click");
    },
    complete:function(modal){
      $(".modal-close").addClass("hide");
      $(".modal-content").remove();
      $(".modal-overlay").remove();
    }
  });
  $("#modal-indexPopUp").modal("open");


  $(".modal-close").click(function(event) {
    /* Act on the event */
    event.preventDefault();
    $("#modal-indexPopUp").modal("close");
  });
});
