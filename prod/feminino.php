<?php
	require_once('header.php');

	$modelos = array(
		//1
		array("Ana L.", 3, "Cabelo: Castanho Claro |	Cor dos olhos: Castanho | Altura: 1,79 |	Manequim: 38 |	Busto: 80 | Cintura: 61 |	Quadril: 92 |	Sapato: 37" ),

		//2
		array("Claire S.", 6, "Cabelo: Loiro	| Olhos: Verdes	| Altura: 1,72	| Manequim: 38 | Busto: 85 | Cintura: 69 | Quadril: 98 | Sapato: 38"),

		//3
		array("Dulce", 4, ""),

		//4
		array("Emanuely D.", 5, "Cabelo: Loiro	| Cor dos olhos: Verdes	 | Altura: 1,76 |	Manequim: 34	| Busto: 78 | Cintura: 58	| Quadril: 85 | Sapato: 37"),

		//5
		array("Emily M.", 12, "Cabelo: Castanho Escuro |	Olhos: Castanhos | Altura: 1,85 |	Manequim: 36	| Busto: 81 | Cintura: 60	| Quadril: 87	| Sapato: 37"),

		//6
		array("Francyne M.",13, "Cor do cabelo: Castanhos Claro | Cor dos olhos: Castanhos | Altura: 1,77 |	Manequim: 36 | Busto: 86 | Cintura: 63	| Quadril: 90 |	Sapato: 38"),

		//7
		array("Gabi A.", 5, ""),

		//8
		array("Gabi S.", 5, "Cor do cabelo: Loiro |	Olhos: Verdes | Altura: 1,77	| Manequim: 36	| Busto: 82 | Cintura: 61	| Quadril: 91	| Sapato: 37"),
		//9
		array("Gabi T.", 3, "Cabelo: Loiro	| Olhos: Azuis | Altura:1,78	| Manequim:38 |	Busto:65 | Cintura:65	| Quadril:93	| Sapato:38"),

		//10
		array("Gaby V.", 12, "Cabelo: Castanho Claro	| Olhos: Castanhos | Altura: 1,74	| Manequim: 36	| Busto: 79 | Cintura: 61	| Quadril: 90	| Sapato: 37"),

		//11
		array("Isabely Y.", 9, "Cabelo: Castanhos Claro | Olhos: Verdes | Altura: 1,75 |	Manequim: 34 | Busto: 74 | Cintura: 62	| Quadril: 86	| Sapato: 38"),

		//12
		array("Julia G.", 11, ""),

		//13
		array("Julia P.", 8, "Cabelo: Castanho Claro	| Olhos: Castanhos |Altura: 1,75 |	Manequim: 36 | Busto: 88 | Cintura: 63 |	Quadril: 91	| Sapato: 37"),

		//14
		array("Larissa P.", 8, "Cabelo: Castanhos Claro | Olhos: Verdes | Altura: 1,73	| Manequim: 36	| Busto: 78 | Cintura: 62 |	Quadril: 94	| Sapato: 39"),

		//15
		array("Laysla L.", 3, "Cabelo: Castanhos Escuro	| Olhos: Castanhos | Altura: 1,77	| Manequim: 38	| Busto: 86 | Cintura: 66	| Quadril: 94	| Sapato: 37"),
		//16
		array("Leticia C.", 12, "Cabelo: Castanhos Escuro |	Olhos: Verdes | Altura: 1,77	| Manequim: 38	| Busto: 82 | Cintura: 68	| Quadril: 97	| Sapato: 38"),
		//17
		array("Lilian Z.", 14, ""),
		//18
		array("Nicole I.", 10, ""),
		//19
		array("Tharyne Z.",6,"Cabelo: Castanhos Escuro	| Olhos: Castanhos | Altura: 1,75	| Manequim: 36	| Busto: 81 | Cintura: 64	| Quadril: 92 |	Sapato: 37"),
	);

?>



	<i class="material-icons animated fadeIn large modal-close hide">close</i>

	<!-- Modal Structure -->
	<div id="modal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row">

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

	<div class="container casting-gallery">
		<h1>Casting Feminino</h1>

		<div class="row">
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>

				<div class="col s6 m4 l3 xl4 animated fadeInUp casting-gallery-item">
					<a class="casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="feminino" data-measure="<?php echo $modelo[2]?>">
						<img src="img/feminino/<?php echo $counter?>.jpg" class="responsive-img" style="max-width:100%; margin-bottom:7.5%;"alt="">
					</a>
				</div>

		<?php
			$counter++;
			}
		 ?>

		</div>
	</div>

	<script>
		fbq('track', 'ViewContentMasc', {
		value: 3.50,
		currency: 'USD'
		});
	</script>

<?php require_once('footer.php') ?>
