<?php

	require_once('header.php');
	
	// colocamos os dados dos modelos em uma modal a ser percorrida por um laço

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

<?php require_once("modal-caro.php") ?>

	<div class="container casting-gallery">
		<h1>Casting Advanced</h1>
		<div class="row">

		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4 casting-gallery-item animated fadeInUp" >
					<a class="casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="advanced" data-measure="<?php echo $modelo[2]?>">
						<img src="img/advanced/<?php echo $counter?>.jpg" class="responsive-img"alt="">
					</a>
				</div>
		<?php
			$counter++;
			}
		 ?>

		</div>
	</div>

	<!-- pixel script -->
	<script>
		fbq('track', 'ViewContentMasc', {
		value: 3.50,
		currency: 'USD'
		});
	</script>

<?php require_once('footer.php') ?>
