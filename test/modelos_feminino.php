<?php
	// include("init.php");
	require_once('headerPreto.php');


	$modelos = array(
		//1
		array("Ana L.",3),
		//2
		array("Claire S.",6),
		//3
		array("Dulce",4),
		//4
		array("Emanuely D.",5),
		//5
		array("Emily M.",12),
		//6
		array("Francyne M.",13),
		//7
		array("Gabi A.",5),
		//8
		array("Gabi S.",5),
		//9
		array("Gabi T.",3),
		//10
		array("Gaby V.",12),
		//11
		array("Isabely Y.", 9),
		//12
		array("Julia G.",11),
		//13
		array("Julia P.",8),
		//14
		array("Larissa P.",8),
		//15
		array("Laysla L.",3),
		//16
		array("Leticia C.",12),
		//17
		array("Lilian Z.",14),
		//18
		array("Nicole I.",10),
		//19
		array("Tharyne Z.",6),
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

	<h1 style="margin-top:5%;">Casting Feminino</h1>
	<div class="container" style="">
		<div class="row" style="margin:0px;">
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4">
					<a class="animated casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="feminino">
						<img src="img/feminino/<?php echo $counter?>.jpg" class="responsive-img" style="max-width:100%; margin-bottom:7.5%;"alt="">
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
