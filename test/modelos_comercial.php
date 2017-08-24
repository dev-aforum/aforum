<?php
	// include("init.php");
	require_once('headerPreto.php');


	$modelos = array(
		//1
		array("Gabiela A.",6),
		//2
		array("Valkiria S.",4),
		//3
		array("Marina T.",4),
		//4
		array("Michel L.",3),
		//5
		array("Matheus C.",5),
		//6
		array("Sarah L.",5),
		//7
		array("Carlos E.",4),
		//8
		array("Ketelyn C.",4),
		//9
		array("Rafael O.",4),
		//10
		array("Alexia G.",4),
		//11
		array("Daiara C.",3),
		//12
		array("Gilton C.",5),
		//13
		array("Gabriela C.",5),
		//14
		array("Marcos P.",4),
		//15
		array("Emmanoel S.",5),
		//16
		array("Ana L.",5),
		//17
		array("Gelca R.",3),
		//18
		array("Diego L.",3),
		//19
		array("Felipe B.",5),
		//20
		array("Carlos E.",4),
		//21
		array("Gabi A.",5),
		//22
		array("Gabi R.",5),
		//23
		array("Julia B.",10),
		//24
		array("Maria B.",5),
		//25
		array("Fabricio B.",3),
		//26
		array("Rafaela V.",4)
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

	<h1 style="margin-top:5%;">Casting Comercial</h1>
	<div class="container" style="">
		<div class="row" style="margin:0px;">
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4">
					<a class="animated casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="comercial">
						<img src="img/comercial/<?php echo $counter?>.jpg" class="responsive-img" style="max-width:100%; margin-bottom:7.5%;"alt="">
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
