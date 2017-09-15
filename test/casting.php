<?php

	require_once('header.php');

  $casting = $_GET["categoria"];

	// colocamos os dados dos modelos em uma modal a ser percorrida por um laço

	$modelos = array(

    "advanced" => array(
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
    		array("Monica T.",5, "Cabelo: Loiros	| Olhos: Castanhos | Altura: 1,75 | Manequim: 38 | Busto: 86 | Cintura: 58 | Quadril: 91 | Sapato: 37"),

    		//13
    		array("Suely M.",2,"Cabelo: Preto |	Olhos:Verdes | Altura:1,52 |	Manequim:40 | Sapato:33"),

    		//14
    		array("Lucia S.",3, "Cabelo: Grisalho |	Olhos:Azuis | Altura:1,71 |	Manequim:48 |	Busto:109 | Cintura:94 |	Quadril:109 |	Sapato:3"),

    		//15
    		array("Divangela M.",4,"Cabelo: Castanhos Escuro | Olhos: Castanhos | Altura: 1,69 | Manequim: 36 | Busto: 80 | Cintura: 60 | Quadril: 88 | Sapato: 38"),

    		//16
    		array("Rosemeri B. ",3,"Cabelo: Grisalho | Olhos:Azuis |	Altura:1,62 |	Manequim:40 |	Busto:0 | Cintura:0 |	Quadril:0 |	Sapato:37")
      ),

    "comercial" =>  array(

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
      array("Gabi A.", 5, "Altura: 1,73	| Manequim: 34	| Busto: 74 | Cintura: 61 | Quadril: 90	| Sapato: 37"),

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
    ),

    "feminino" => array(

				//1
				array("Julia P.", 8, "Cabelo: Castanho Claro	| Olhos: Castanhos |Altura: 1,75 |	Manequim: 36 | Busto: 88 | Cintura: 63 |	Quadril: 91	| Sapato: 37"),

    		//2
				array("Larissa P.", 8, "Cabelo: Castanhos Claro | Olhos: Verdes | Altura: 1,73	| Manequim: 36	| Busto: 78 | Cintura: 62 |	Quadril: 94	| Sapato: 39"),

    		//3
    		array("Dulce", 4, "Cabelo: Preto | Olhos: Castanhos | Altura: 1,76	| Manequim: 36 | Sapato: 38"),

    		//4
				array("Leticia C.", 12, "Cabelo: Castanhos Escuro |	Olhos: Verdes | Altura: 1,77	| Manequim: 38	| Busto: 82 | Cintura: 68	| Quadril: 97	| Sapato: 38"),

    		//5
    		array("Emily M.", 12, "Cabelo: Castanho Escuro |	Olhos: Castanhos | Altura: 1,85 |	Manequim: 36	| Busto: 81 | Cintura: 60	| Quadril: 87	| Sapato: 37"),

    		//6
    		array("Francyne M.",13, "Cor do cabelo: Castanhos Claro | Cor dos olhos: Castanhos | Altura: 1,77 |	Manequim: 36 | Busto: 86 | Cintura: 63	| Quadril: 90 |	Sapato: 38"),

    		//7
    		array("Gabi A.", 5, "Altura: 1,73	| Manequim: 34	| Busto: 74 | Cintura: 61 | Quadril: 90	| Sapato: 37"),

    		//8
    		array("Gabi S.", 5, "Cor do cabelo: Loiro |	Olhos: Verdes | Altura: 1,77	| Manequim: 36	| Busto: 82 | Cintura: 61	| Quadril: 91	| Sapato: 37"),

    		//9
    		array("Gabi T.", 3, "Cabelo: Loiro	| Olhos: Azuis | Altura:1,78	| Manequim:38 |	Busto:65 | Cintura:65	| Quadril:93	| Sapato:38"),

    		//10
    		array("Gaby V.", 12, "Cabelo: Castanho Claro	| Olhos: Castanhos | Altura: 1,74	| Manequim: 36	| Busto: 79 | Cintura: 61	| Quadril: 90	| Sapato: 37"),

    		//11
    		array("Isabely Y.", 9, "Cabelo: Castanhos Claro | Olhos: Verdes | Altura: 1,75 |	Manequim: 34 | Busto: 74 | Cintura: 62	| Quadril: 86	| Sapato: 38"),

    		//12
    		array("Julia G.", 11, "Cabelo: Castanho Claro	| Olhos: Castanhos | Altura:  1,79 | Manequim: 36 |	Busto: 87  | Cintura: 61 |	Quadril:  88 |	Sapato: 37"),

	  		//13
	  		array("Ana L.", 3, "Cabelo: Castanho Claro |	Cor dos olhos: Castanho | Altura: 1,79 |	Manequim: 38 |	Busto: 80 | Cintura: 61 |	Quadril: 92 |	Sapato: 37" ),

    		//14
				array("Claire S.", 6, "Cabelo: Loiro	| Olhos: Verdes	| Altura: 1,72	| Manequim: 38 | Busto: 85 | Cintura: 69 | Quadril: 98 | Sapato: 38"),

    		//15
    		array("Laysla L.", 3, "Cabelo: Castanhos Escuro	| Olhos: Castanhos | Altura: 1,77	| Manequim: 38	| Busto: 86 | Cintura: 66	| Quadril: 94	| Sapato: 37"),

				//16
				array("Emanuely D.", 5, "Cabelo: Loiro	| Cor dos olhos: Verdes	 | Altura: 1,76 |	Manequim: 34	| Busto: 78 | Cintura: 58	| Quadril: 85 | Sapato: 37"),

    		//17
    		array("Nicolle I.", 10, "Cabelo: Castanho Escuro |	Olhos: Castanhos | Altura: 1,74 |	Manequim: 36	| Busto: 76 | Cintura: 62 | Quadril: 92	| Sapato: 38"),

    		//18
    		array("Tharyne Z.",6,"Cabelo: Castanhos Escuro	| Olhos: Castanhos | Altura: 1,75	| Manequim: 36	| Busto: 81 | Cintura: 64	| Quadril: 92 |	Sapato: 37"),
    	),

      "masculino" => array(
				//1
    		array("Daniel A.",13,"Cabelo: Castanho Escuro | Olhos: Castanhos | Altura: 1,83 | Manequim: 38 | Busto: 91 | Cintura: 48 | Quadril: 95 "),

				//2
				array("Evandro M.", 5,"Cabelo: Loiro | Olhos: Verdes | Altura: 1,85 | Manequim: 40 | Sapato: 42  | Torax: 92"),

				//3
				array("Fabricio B.",11,"Altura: 1,88	| Manequim: 38	| Busto: 87 | Cintura: 42	| 	Sapato: 42"),

				//4
				array("Jhonatan T.",7,"Altura: 1,89	| Manequim: 38 | Busto: 91 | Cintura: 44 | Sapato: 41"),

				//5
				array("Leo P.",12, "Altura:1,93	| Manequim:42	| Busto:96 | Cintura: 48	| Sapato: 42"),

				//6
				array("Lucas G.", 13, "Cabelo: Cast. Claro | Olhos: Azuis | Altura: 1,94 | Manequim: 44 | Busto: 98 | Cintura:50 | Sapato: 43"),

				//7
				array("Pedro S.",2,	"Cabelo: Loiros	| Olhos: Azuis	| Altura: 1,86	| Manequim: 40 | Sapato: 43"),

				//8
				array("Ygor N.",3,"Cabelo: Cast. Claro	| Olhos: Azuis	|  Altura: 1,85	| Manequim: 38	| Sapato: 40"),

				//9
				array("Jessie B.",6,"Cabelo: Cast. Escuro | Olhos: Castanhos | Altura: 1,89 | Manequim: 38	| Busto: 87 | Cintura: 73 |	Quadril: 93	| Sapato: 42"),

				//10
				array("André M.",7,	"Cabelo: Cast. Claro |	Olhos: Castanho esverdeado | Altura: 1,89	| Manequim:40	| Busto: 90 | Cintura: 44	| Sapato:42"),

				//11
				array("Guilherme S.",6,"Altura: 1,86	| Manequim: 42 | Busto: 95 | Sapato: 42"),

				//10
				array("André M.",7,	"Cabelo: Cast. Claro |	Olhos: Castanho esverdeado | Altura: 1,89	| Manequim:40	| Busto: 90 | Cintura: 44	| Sapato:42"),

				//11
				array("Guilherme S.",6,"Altura: 1,86	| Manequim: 42 | Busto: 95 | Sapato: 42")
    	),

      "kids" => array(

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

      )
  );



?>

<!-- botão de fechar a modal -->
<i class="material-icons large modal-close hide animated zoomIn" style="">close</i>
<!-- moodal -->
<div id="modal" class="modal modal-fixed-footer">
  <!-- modal content -->
  <div class="modal-content">
    <div class="row">
      <!-- seta de anterior -->
      <div id="slider-prev-arrow" class="slider-arrow animated slideInLeft col s1 hide-on-med-and-down">
        <i class="material-icons">chevron_left</i>
      </div><!-- final da seta de anterior -->
      <!-- carrossel -->
      <div class="col s12 m12 l10 modal-caro carousel carousel-slider"></div>
      <!-- seta de próximo -->
      <div id="slider-next-arrow" class=" slider-arrow col animated slideInRight s1 hide-on-med-and-down">
        <i class="material-icons large">chevron_right</i>
      </div> <!-- final da seta de próximo -->
    </div> <!-- final do row -->
  </div> <!-- final da modal-content -->
</div> <!-- final da modal -->

	<!-- animated fadeIn hide -->
	<div class="container casting-gallery">
		<h1 class="casting-title animated hide fadeIn">Casting <?php echo $casting ?></h1>
		<div class="row">


    <?php

    switch ($casting) {
      case 'advanced':
        $category = $modelos["advanced"];
        break;

      case 'comercial':
        $category = $modelos["comercial"];
        break;

      case 'feminino':
        $category = $modelos["feminino"];
        break;

      case 'masculino':
        $category = $modelos["masculino"];
        break;

      case 'kids':
        $category = $modelos["kids"];
        break;

      default:
        # code... criar tela de escolher casting
        break;
    }
		 	$counter = 1;
			foreach ($category as $modelo) {
			?>
				<div class="col s6 m4 xl4 casting-gallery-item animated" style="opacity:0" >
					<a class="casting_link bw" href="#modal" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="<?php echo $casting ?>" data-measure="<?php echo $modelo[2]?>">
						<img src="img/<?php echo $casting ?>/<?php echo $counter?>.jpg" class="responsive-img"alt="">
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
