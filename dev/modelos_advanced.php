<?php
	// include("init.php");
	require_once('headerPreto.php');


	$modelos = array(
		//1
		array("Edgar S.",4,	"Cabelo: Branco	| Olhos: Azuis | Altura: 1,85	| Manequim: 40 | Sapato: 43"),

		//2
		array("Elizabeth F.", 4 , "Cabelo: Loiro | Olhos: Azuis | Altura: 1,70 | Manequim: 38	| Busto: 88 | Cintura: 65	| Quadril: 90	| Sapato: 38"),

		//3
		array("Flavio R.",2, 	"Cabelo: Grisalho |	Olhos: Castanhos | Altura: 1,76	| Manequim: 42 | Sapato: 41"),

		//4
		array("Claribel S. ",4, "Cabelo: Loiro | Olhos: Azuis	| Altura: 1,69	| Manequim: 42 | Busto: 98 | Cintura: 82 |	Quadril: 104	| Sapato:38"),
		//5
		array("Sandra M. ",3, 	"Cabelo: Castanho | Olhos: Castanhos | Altura: 1,78	| Manequim:  46 |	Sapato: 40"),

		//6
		array("Arnaldo C. ",3, "Cabelo: Castanho Claro | Olhos: Castanhos esverdeado | Altura: 1,82 | Sapato: 42"),

		//7
		array("Valeria C. ",3, "Cabelo: Loiro | Olhos: Castanhos | Altura: 1,72 | Manequim: 40 | Busto: 91 | Cintura: 77 | Quadril: 105	|Sapato: 39"),

		//8
		array("Rosalind J. ",4,"Cabelo: Loiro |	Olhos: Azuis | Altura: 1,50 |	Manequim: 44 | Busto: 83 | Cintura: 69 |	Quadril: 96 | Sapato:35"),

		//9
		array("Marta C. ",3, "Cabelo: Loiro | Olhos: Azuis | Altura: 1,68 |	Manequim: 40 |	Busto: 92 | Cintura: 77 | Quadril: 97 |	Sapato: 40"),

		//10
		array("Mirian M.",2, "Cabelo: Loiro	| Olhos:Azuis | Altura:1,67 | Manequim:38	| Busto:89 Cintura:75 | Quadril:93	| Sapato:36"),

		//11
		array("Maria C.", 3, "Cabelo: Loiro |	Olhos:Azuis |	Altura:1,68 |	Manequim:44 |	Quadril:0 |	Sapato:36"),

		//12
		array("Ivane M.",4, "Cabelo: Loiro |	Olhos:Castanhos | Altura:1,67 |	Manequim:40 |	Busto:59 | Cintura:72 |	Quadril:103 |	Sapato:36"),

		//13
		array("Suely M.",2,"Cabelo: Preto |	Olhos:Verdes | Altura:1,52 |	Manequim:40 | Sapato:33"),

		//14
		array("Lucia S.",3, "Cabelo: Grisalho |	Olhos:Azuis | Altura:1,71 |	Manequim:48 |	Busto:109 | Cintura:94 |	Quadril:109 |	Sapato:3"),

		//15
		array("Debora R.",3,"Cabelo: Loiro |	Olhos:Verdes | Altura:1,70 |	Manequim:38 |	Busto:84 | Cintura:69 |	Quadril:90 |	Sapato:35"),

		//16
		array("Rosemeri B. ",3,"Cabelo: Grisalho | Olhos:Azuis |	Altura:1,62 |	Manequim:40 |	Busto:0 | Cintura:0 |	Quadril:0 |	Sapato:37"
)


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
