<?php include('header.php') ?>


      <!-- MODAL -->

      <!-- if the user has seen the modal in this session we don't show it again -->

      <!-- if modal variable is not set -->
      <?php if($_SESSION["modal"]=== true) {?>

      <!-- show the modal -->

      <!-- Modal Trigger -->
      <a class="waves-effect waves-light btn modal-trigger" style="display:none" href="#modal-indexPopUp">Modal</a>
			<!-- botão de fechar a modal -->
			<i class="material-icons large modal-close" style="">close</i>
      <!-- modal -->
      <div id="modal-indexPopUp" class="modal" style="">
        <div class="modal-content"  id="content-video">
          <div class="opiniao_slider_item">
            <div class="youtube" id="popup" data-embed="M2YufTXQz9M">
              <div class="play-button"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- set modal variable -->
      <?php $_SESSION["modal"] = false; ?>

      <?php } ?> <!-- end if -->

<!-- background slider -->
<div class="slider-block">

</div>
<div class="slider fullscreen" id="slider-index">
	<ul class="slides">

<li class="slider1" alt="" ></li>
<li class="slider2" alt="" ></li>
<li class="slider3" alt="" ></li>
<li class="slider4" alt="" ></li>
<li class="slider5" alt="" ></li>
<li class="slider6" alt="" ></li>
<li class="slider7" alt="" ></li>
<li class="slider8" alt="" ></li>
<li class="slider9 hide-on-small-only" alt="" ></li>

	</ul>
</div>


<video autoplay loop id="slider-index-video-background" muted plays-inline>
	<source src="img/dirt.mp4" type="video/mp4">
</video>


	<?php require_once('footer.php') ?>
