<?php
	require_once('header.php');


	$modelos = array(

		array("Daniel A.",13,""),
		array("Evandro M.",6,""),
		array("Fabricio B.",11,""),
		array("Jhonatan T.",7,"Altura: 1,89	| Manequim: 38 | Busto: 91 | Cintura: 44 | Sapato: 41"),
		array("Leo P.",12, "Altura:1,93	| Manequim:42	| Busto:96 | Cintura: 48	| Sapato: 42"),
		array("Lucas G.", 13, "Cabelo: Cast. Claro | Olhos: Azuis | Altura: 1,94 | Manequim: 44 | Busto: 98 | Cintura:50 | Quadril:0 | Sapato: 43"),
		array("Pedro S.",2,""),
		array("Ygor N.",3,""),
		array("Jessie B.",6,""),
		array("André M.",7,""),
		array("Guilherme S.",6,"Altura: 1,86	| Manequim: 42 | Busto: 95 | Sapato: 42"),
	);


?>

	<?php require_once("modal-caro.php") ?>

	<div class="container" style="">
		<h1>Casting Masculino</h1>
		<div class="row casting-gallery" >
		<?php
		 	$counter = 1;
			foreach ($modelos as $modelo) {
			?>
				<div class="col s6 m4 l3 xl4 casting-gallery-item">
					<a class="animated casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="masculino" data-measure="<?php echo $modelo[2]?>">
						<img src="img/masculino/<?php echo $counter?>.jpg" class="responsive-img" alt="">
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
