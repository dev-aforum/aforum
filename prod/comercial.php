<?php
	// include("init.php");
	require_once('header.php');


	$modelos = array(

		//1
		array("Gabiela A.", 6, "Cabelo: Castanho Escuro | Olhos: Castanhos | Altura: 1,72	| Manequim: 36	| Busto: 73 | Cintura: 57	| Quadril: 82	| Sapato: 39"),
		//2
		array("Valkiria S.", 4, "Cabelo: Loiro |	Olhos: Verdes | Altura: 1,57 |	Manequim: 38 |	Busto: 87 | Cintura: 69 |	Quadril: 95 |	Sapato: 35"),

		//3
		array("Marina T.", 4, "Cabelo: Castanho Claro | Olhos: Castanhos | Altura: 1,80 | 	Manequim: 40 | 	Busto: 84 |  Cintura: 69 | Quadril: 100 | Sapato: 39" ),

		//4
		array("Michel L.", 3, "Cabelo: Castanho Escuro | Olhos: Castanhos | Altura: 1,89 | Manequim: 44 | Sapato: 43"),

		//5
		array("Matheus C.", 5, "Cabelo: Loiro |	Cor dos olhos: Verdes | Altura: 0,87 | Manequim: 3"),

		//6
		array("Sarah L.", 5, "Cabelo: Castanho Escuro	| Olhos: Castanhos | Altura: 1,65	| Manequim: 38	| Busto: 84 | Cintura: 67	| Quadril: 92	| Sapato: 38"),

		//7
		array("Carlos E.", 4, "Cabelo: Castanho Olhos: Castanhos Altura: 1,70	Manequim: 38	Sapato: 39"),

		//8
		array("Ketelyn C.", 4, "Cabelo: Castanho Claro |	Olhos: Verdes | Altura: 1,56 | Manequim: 36 | Busto: 83 | Cintura: 93	| Quadril: 95	| Sapato: 35"),
		//9
		array("Rafael O.", 4,	"Cabelo: Castanho Claro	| Cor dos olhos: Castanhos | Altura:1,79	| Manequim:38 | Quadril:77	| Sapato:41"),

		//10
		array("Alexia G.", 4, "Cabelo: Castanhos Escuro |	Olhos:Castanhos | Altura:1,63 |	Manequim:38 |	Sapato:36"),

		//11
		array("Daiara C.", 3, "Cabelo: Preto	| Olhos: Castanhos | Altura:1,62	Manequim:36	| Busto:84 | Cintura:65	| Quadril:92 |Sapato:35"),

		//12
		array("Gilton C.", 5, "Cabelo: Castanho Escuro | Olhos: Verdes | Altura: 1,84	| Manequim: 42	| Sapato: 42"),

		//13
		array("Gabriela C.", 5, "Cabelo: Ruivo |	Olhos: Castanhos | Altura: 1,73 |	Manequim: 36 |	Busto: 86 | Cintura: 60 |	Quadril: 87 |	Sapato: 37"),

		//14
		array("Marcos P.", 4, "Cabelo: Castanho Escuro | Olhos: Castanhos | Altura: 1,81 |	Manequim: 38 | Sapato: 41"),

		//15
		array("Emmanoel S.", 5, "Cabelo: Castanhos Claro |	Olhos: Castanhos esverdeados | Altura: 1,85 |	Manequim: 38 | Sapato: 44"),

		//16
		array("Ana L.", 5, "Cor do cabelo: Pretos |	Cor dos olhos :Castanhos | Altura: 1,56 |	Sapato: 34" ),

		//17
		array("Gelca R.", 3, "Cabelo: Loiro |	Olhos: Castanho esverdeado | Altura: 1,70 |	Manequim: 38 |	Busto: 92 | Cintura: 68 |	Quadril: 97 |	Sapato: 36"),

		//18
		array("Diego L.", 3, "Cabelo: Loiro	| Olhos: Verdes | Altura: 1,85	| Manequim: 38 | Sapato: 43"),
		//19
		array("Felipe B.", 5, "Cabelo: Castanho Escuro | Olhos: Castanhos | Altura: 1,77 | Manequim: 38 | Sapato:42"),

		//20
		array("Carlos E.", 4, "Cabelo: Castanhos Claro |	Olhos: Castanhos | Altura: 1,72 |	Manequim: 38 | Sapato: 39"),

		//21
		array("Gabi A.", 5, ""),

		//22
		array("Gabi R.",5, "Cabelo: Ruivo |	Olhos:Castanhos | Altura:1,73 |	Manequim:36 |	Busto:86 | Cintura:60 |	Quadril:87 | Sapato:37"),

		//23
		array("Julia B.",10, "Cabelo: Loiro	| Olhos: Azuis | Altura: 1,74	| Manequim: 38	| Busto: 87 | Cintura: 69	| Quadril: 101	| Sapato: 37"),

		//24
		array("Maria B.", 5, "Cabelo: Castanho Escuro | Olhos: Castanhos | Altura: 1,79	| Manequim: 40 |	Busto: 85 | Cintura: 70	| Quadril: 99 |	Sapato: 40"),

		//25
		array("Rafaela V.", 4, "Cor do cabelo: Castanhos Escuro |	Olhos: Castanhos | Altura: 1,63	| Manequim: 36	| Busto: 75 | Cintura: 58	| Quadril: 86	| Sapato: 37" ),

		//26
		array("Renata G.", 3, "Cabelo: Loiros |	Olhos: Verdes | Altura:1,76 |	Manequim:38	 | Sapato:37" )

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

	<div class="container casting-gallery">
		<h1>Casting Comercial</h1>

		<div class="row">
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4 casting-gallery-item animated fadeInUp">
					<a class="animated casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="comercial" data-measure="<?php echo $modelo[2]?>">
						<img src="img/comercial/<?php echo $counter?>.jpg" class="responsive-img" alt="">
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
