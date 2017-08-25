<?php
	// include("init.php");
	require_once('headerPreto.php');

	$modelos = array(

		//1
		array("Gabriele C.",6, "Cabelo: Castanho | Olhos: Castanhos |	Altura: 1,17 |	Manequim: 5 | Sapato: 29"),

		//2
		array("Laura T.",4, "Cabelo: Castanho | Escuro Olhos: Azuis | Altura: 1,21 |	Manequim: 10 |	Busto: 57 | Cintura: 54 |	Quadril: 60 |	Sapato: 30"),

		//3
		array("Maria A.",5, "Cabelo: Castanho |  Olhos: Verdes |	Manequim: 8 |	Busto: 67 | Cintura: 56 |	Quadril: 72 |	Sapato: 34"),

		//4
		array("Bernardo P.",3 , "Cabelo: Loiro | Olhos: Azuis | Altura: 0,62	| Manequim: 6 | Sapato: 15"),

		//5
		array("Matheus O.", 4 , "Cabelo: Loiro |	Olhos: Verdes |	Altura: 1,44 |	Manequim: 12 |	Sapato: 35" ),

		//6
		array("Rafaella P.",4, 	"Cabelo: Loiro | Olhos: Castanhos esverdeado | Altura: 1,00 |	Manequim: 4 |	Busto:0 | Cintura: 0 |	Quadril: 0 |	Sapato: 25"),

		//7
		array("Julia R.",4,		"Cabelo: Loiro |	Olhos: Castanhos | Altura: 1,10	| Manequim: 6	| Sapato: 26"),

		//8
		array("Yuri N.",5, "Cabelo: Loiros	| Olhos: Castanhos | Altura: 1,36	| Manequim: 10	| Sapato: 34"),

		//9
		array("André R.", 5, "Cabelo: Castanho Claro | Olhos: Castanhos | Altura:0,98	| Manequim:4 | Sapato:25"),

		//10
		array("Izabella V.", 5, "Cabelo: Castanho Claro	| Olhos: Azuis | Altura: 1,56	| Manequim: 36	| Busto: 76 | Cintura: 64	| Quadril: 82	| Sapato: 37" ),

		//11
		array("Luana C.", 4, "Cabelo: Loiros	| Olhos: Azuis | Altura: 1,30	| Manequim: 10 | Sapato: 29" ),

		//12
		array("Lorenzo E.", 4 , "Cabelo: Loiro | Olhos: Castanhos | Altura: 0,98 | Manequim: 3 | Quadril: 53 | Sapato: 23"),

		//13
		array("Danilo C.", 4, "Cabelo: Castanho | Olhos: Azuis | Altura: 1,26 |	Manequim: 10" ),

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

	<h1 style="margin-top:5%;">Casting Kids</h1>
	<div class="container" style="">
		<div class="row" style="margin:0px;">
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4">
					<a class="animated casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="kids">
						<img src="img/kids/<?php echo $counter?>.jpg" class="responsive-img" style="max-width:100%; margin-bottom:7.5%;"alt="">
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
