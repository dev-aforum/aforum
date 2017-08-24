<?php
	// include("init.php");
	require_once('headerPreto.php');


	$modelos = array(
		//1
		array("Edgar S.",4),
		//2
		array("Elizabeth F.",4),
		//3
		array("Flavio R.",2),
		//4
		array("Claribel S. ",4),
		//5
		array("Sandra M. ",3),
		//6
		array("Arnaldo C. ",3),
		//7
		array("Valeria C. ",3),
		//8
		array("Rosalind J. ",4),
		//9
		array("Marta C. ",3),
		//10
		array("Mirian M.",2),
		//11
		array("Maria C.", 3),
		//12
		array("Ivane M.",4),
		//13
		array("Suely M.",2),
		//14
		array("Lucia S.",3),
		//15
		array("Debora R.",3),
		//16
		array("Rosemeri B. ",3)
	);

?>



	<i class="material-icons large modal-close hide" style="font-size:35px;color:white;margin-top:5%;position:fixed;top:5%;right:5%;z-index:99999999999999999999999999999999!important;">close</i>
	<!-- Modal Structure -->
	<div id="modal" class="modal modal-fixed-footer" style="z-index:99999!important;">
		<div class="modal-content">
			<div class="row" style="height:100%;">
				<div id="slider-prev-arrow" class="slider-arrow col s1 hide-on-med-and-down" style="display:flex;align-items:center;height:80%;cursor:pointer;">

					<i class="material-icons large" style="font-size:50px; color:white;">chevron_left</i>
				</div>

				<div  class="col s12 m12 l10 modal-caro carousel carousel-slider">

				</div>


				<div id="slider-next-arrow" class=" slider-arrow col s1 hide-on-med-and-down" style="display:flex;align-items:center;height:80%;cursor:pointer;">
					<i class="material-icons large" style="font-size:50px; color:white;" >chevron_right</i>
				</div>
			</div>
		</div>
	</div>

	<h1 style="margin-top:5%;">Casting Advanced</h1>
	<div class="container" style="">
		<div class="row" style="margin:0px;">
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4">
					<a class="animated casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="advanced">
						<img src="img/advanced/<?php echo $counter?>.jpg" class="responsive-img" style="max-width:100%; margin-bottom:7.5%;"alt="">
					</a>
				</div>
		<?php
			$counter++;
			}
		 ?>

		</div>
	</div>
	<div class="clear"></div>
	<script>
		fbq('track', 'ViewContentMasc', {
		value: 3.50,
		currency: 'USD'
		});
	</script>
<?php require_once('footer.php') ?>
