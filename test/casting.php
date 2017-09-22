<?php

	require_once('header.php');

  $casting = $_GET["categoria"];

	// colocamos os dados dos modelos em uma modal a ser percorrida por um laço

	$modelos = array(

  "advanced" => array(
  		//1
  		"1"=>array(
				//nome
				"Edgar S.",

				//numero de fotos
				4,

				//medidas
				"Altura: 1,85	<br/> Manequim: 40 <br/> Sapato: 43",

				//ids dos jobs na api do YouTube separados por vírgula
				// nome dos jobs em ordem
				"i92zZBo-VW4,M8SmpZ7LzjQ,8C2BZjvGqwQ,3Ie95l9Yp6g",

			),

  		//2
  		"2"=>array(
				"Elizabeth F.",
				4 ,
				"Altura: 1,70 <br />Manequim: 38	<br /> Busto: 88 <br />Cintura: 65	<br />Quadril: 90	<br />Sapato: 38",
				""
			),

  		//3
  		"3"=>array("Flavio R.",
			2,
			 "Altura: 1,76	<br />Manequim: 42 <br />Sapato: 41",
			 ""
		 ),

  		//4
  		"4"=>array(
				"Claribel S. ",
				4,
				"Altura: 1,69	<br />Manequim: 42 <br />Busto: 98 <br />Cintura: 82 <br />	Quadril: 104	<br />Sapato:38",
				""
			),

  		//5
  		"5"=>array(
				"Sandra M. ",
				3,
				"Altura: 1,78	<br />Manequim:  46 <br />	Sapato: 40",
				""
			),

  		//6
  		"6"=>array(
				"Arnaldo C. ",
				3,
				"Altura: 1,82 <br />Sapato: 42",
				""
			),

  		//7
  		"7"=>array(
				"Valeria C. ",
				3,
				"Altura: 1,72 <br />Manequim: 40 <br />Busto: 91 <br />Cintura: 77 <br />Quadril: 105	<br />Sapato: 39",
				""
			),

  		//8
  		"8"=>array(
				"Rosalind J. ",
				4,
				"Altura: 1,50 <br />	Manequim: 44 <br />Busto: 83 <br />Cintura: 69 <br />	Quadril: 96 <br />Sapato:35",
				""
			),

  		//9
  		"9"=>array(
				"Marta C. ",
				3,
				"Altura: 1,68 <br />	Manequim: 40 <br />	Busto: 92 <br />Cintura: 77 <br />Quadril: 97 <br />	Sapato: 40",
				""
			),

  		//10
  		"10"=>array(
				"Mirian M.",
				2,
				"Altura:1,67 <br />Manequim:38	<br />Busto:89 Cintura:75 <br />Quadril:93	<br />Sapato:36",
				""
			),

  		//11
  		"11"=>array(
				"Maria C.",
				3,
				"Altura:1,68 <br />	Manequim:44 <br />	Quadril:0 <br />	Sapato:36",
				""
			),

  		//12
  		"12"=>array(
				"Monica T.",
				5,
				"Altura: 1,75 <br />Manequim: 38 <br />Busto: 86 <br />Cintura: 58 <br />Quadril: 91 <br />Sapato: 37",
				""
			),

  		//13
  		"13"=>array(
				"Suely M.",
				2,
				"Altura:1,52 <br />	Manequim:40 <br />Sapato:33",
				""
			),

  		//14
  		"14"=>array(
				"Lucia S.",
				3,
				"Altura:1,71 <br />	Manequim:48 <br />	Busto:109 <br />Cintura:94 <br />	Quadril:109 <br />	Sapato:3",
				""
			),

  		//15
  		"15"=>array(
				"Divangela M.",
				4,
				"Altura: 1,69 <br />Manequim: 36 <br />Busto: 80 <br />Cintura: 60 <br />Quadril: 88 <br />Sapato: 38",
				""
			),

  		//16
  		"16"=>array(
				"Rosemeri B. ",
				3,
				"Altura:1,62 <br />	Manequim:40 <br />Cintura:0 <br />	Quadril:0 <br />	Sapato:37",
				""
			),
    ),

    "comercial" =>  array(

      //1
      "1"=>array("Gabiela A.",
			6,
			"Altura: 1,72	<br />Manequim: 36	<br />Busto: 73 <br />Cintura: 57	<br />Quadril: 82	<br />Sapato: 39",
			""
		),
      //2
      "2"=>array(
				"Valkiria S.",
				4,
				"Altura: 1,57 <br />	Manequim: 38 <br />	Busto: 87 <br />Cintura: 69 <br />	Quadril: 95 <br />	Sapato: 35",
				""
			),

      //3
      "3"=>array("Marina T.",
			4,
			"Altura: 1,80 <br />	Manequim: 40 <br />	Busto: 84 <br /> Cintura: 69 <br />Quadril: 100 <br />Sapato: 39",
			""
		),

      //4
      "4"=>array(
				"Michel L.",
				3,
				"Altura: 1,89 <br />Manequim: 44 <br />Sapato: 43",
				""
			),

      //5
      "5"=>array(
				"Matheus C.",
				5,
				"Altura: 0,87 <br />Manequim: 3",
				""
			),

      //6
      "6"=>array("Sarah L.",
			5,
			"Altura: 1,65	<br />Manequim: 38	<br />Busto: 84 <br />Cintura: 67	<br />Quadril: 92	<br />Sapato: 38",
			""
		),

      //7
      "7"=>array(
				"Carlos E.",
				4,
				"Altura: 1,70	Manequim: 38	Sapato: 39",
				""
			),

      //8
      "8"=>array("Ketelyn C.",
			4,
			"Altura: 1,56 <br />Manequim: 36 <br />Busto: 83 <br />Cintura: 93	<br />Quadril: 95	<br />Sapato: 35",
			""
		),
      //9
      "9"=>array("Rafael O.",
			4,
			"Altura:1,79	<br />Manequim:38 <br />Quadril:77	<br />Sapato:41",
			""
		),

      //10
      "10"=>array(
				"Alexia G.",
				4,
				"Altura:1,63 <br />	Manequim:38 <br />	Sapato:36",
				""
			),

      //11
      "11"=>array(
				"Daiara C.",
				3,
				"Altura:1,62	Manequim:36	<br />Busto:84 <br />Cintura:65	<br />Quadril:92 <br />Sapato:35",
				""
			),

      //12
      "12"=>array(
				"Gilton C.",
				5,
				"Altura: 1,84	<br />Manequim: 42	<br />Sapato: 42",
				""
			),

      //13
      "13"=>array(
				"Gabriela C.",
				5,
				"Altura: 1,73 <br />	Manequim: 36 <br />	Busto: 86 <br />Cintura: 60 <br />	Quadril: 87 <br />	Sapato: 37",
				""
			),

      //14
      "14"=>array(
				"Marcos P.",
				4,
				"Altura: 1,81 <br />	Manequim: 38 <br />Sapato: 41",
				""
			),

      //15
      "15"=>array(
				"Emmanoel S.",
				5,
				"Altura: 1,85 <br />	Manequim: 38 <br />Sapato: 44",
				""
			),

      //16
      "16"=>array(
				"Ana L.",
				5,
				"Altura: 1,56 <br />	Sapato: 34",
				""
			),

      //17
      "17"=>array(
				"Gelca R.",
				3,
				"Altura: 1,70 <br />	Manequim: 38 <br />	Busto: 92 <br />Cintura: 68 <br />	Quadril: 97 <br />	Sapato: 36",
				""
			),

      //18
      "18"=>array(
				"Diego L.",
				3,
				"Altura: 1,85	<br />Manequim: 38 <br />Sapato: 43",
				""
			),

			//19
      "19"=>array(
				"Felipe B.",
				5,
				"Altura: 1,77 <br />Manequim: 38 <br />Sapato:42",
				""
			),

      //20
      "20"=>array(
				"Carlos E.",
				4,
				"Altura: 1,72 <br />	Manequim: 38 <br />Sapato: 39",
				""
			),

      //21
      "21"=>array(
				"Gabi A.",
				5,
				"Altura: 1,73	<br />Manequim: 34	<br />Busto: 74 <br />Cintura: 61 <br />Quadril: 90	<br />Sapato: 37",
				""
			),

      //22
      "22"=>array(
				"Gabi R.",
				5,
				"Altura:1,73 <br />	Manequim:36 <br />	Busto:86 <br />Cintura:60 <br />	Quadril:87 <br />Sapato:37",
				""
			),

      //23
      "23"=>array(
				"Julia B.",
				10,
				"ltura: 1,74	<br />Manequim: 38	<br />Busto: 87 <br />Cintura: 69	<br />Quadril: 101	<br />Sapato: 37",
				""
			),

      //24
      "24"=>array(
				"Maria B.",
				5,
				"Altura: 1,79	<br />Manequim: 40 <br />	Busto: 85 <br />Cintura: 70	<br />Quadril: 99 <br />	Sapato: 40",
				""
			),

      //25
      "25"=>array(
				"Rafaela V.",
				4,
				"Altura: 1,63	<br />Manequim: 36	<br />Busto: 75 <br />Cintura: 58	<br />Quadril: 86	<br />Sapato: 37" ,
				""
			),

      //26
      "26"=>array(
				"Renata G.",
				3,
				"Altura:1,76 <br />	Manequim:38	 <br />Sapato:37",
				""
			),
    ),

    "feminino" => array(

			//1
			"1"=>array(
				"Julia P.",
				8,
				"Altura: 1,75 <br />	Manequim: 36 <br />Busto: 88 <br />Cintura: 63 <br />	Quadril: 91	<br />Sapato: 37",
				""
			),

			//2
			"2"=>array(
				"Larissa P.",
				8,
				"Altura: 1,73	<br />Manequim: 36	<br />Busto: 78 <br />Cintura: 62 <br />	Quadril: 94	<br />Sapato: 39",
				""
			),

			//3
			"3"=>array(
				"Dulce",
				4,
				"Altura: 1,76	<br />Manequim: 36 <br />Sapato: 38",
				""
			),

			//4
			"4"=>array(
				"Leticia C.",
				12,
				"Altura: 1,77	<br />Manequim: 38	<br />Busto: 82 <br />Cintura: 68	<br />Quadril: 97	<br />Sapato: 38",
				""
			),

			//5
			"5"=>array(
				"Emily M.",
				12,
				"Altura: 1,85 <br />	Manequim: 36	<br />Busto: 81 <br />Cintura: 60	<br />Quadril: 87	<br />Sapato: 37",
				""
			),

			//6
			"6"=>array(
				"Francyne M.",
				13,
				"Altura: 1,77 <br />	Manequim: 36 <br />Busto: 86 <br />Cintura: 63	<br />Quadril: 90 <br />	Sapato: 38",
				""
			),

			//7
			"7"=>array(
				"Gabi A.",
				5,
				"Altura: 1,73	<br />Manequim: 34	<br />Busto: 74 <br />Cintura: 61 <br />Quadril: 90	<br />Sapato: 37",
				""
			),

			//8
			"8"=>array(
				"Gabi S.",
				5,
				"Altura: 1,77	<br />Manequim: 36	<br />Busto: 82 <br />Cintura: 61	<br />Quadril: 91	<br />Sapato: 37",
				""
			),

			//9
			"9"=>array(
				"Gabi T.",
				3,
				"Altura:1,78	<br />Manequim:38 <br />	Busto:65 <br />Cintura:65	<br />Quadril:93	<br />Sapato:38",
				""
			),

			//10
			"10"=>array(
				"Gaby V.",
				 12,
				"Altura: 1,74	<br />Manequim: 36	<br />Busto: 79 <br />Cintura: 61	<br />Quadril: 90	<br />Sapato: 37",
				""
			 ),

			//11
			"11"=>array(
				"Isabely Y.",
				9,
				"Altura: 1,75 <br />	Manequim: 34 <br />Busto: 74 <br />Cintura: 62	<br />Quadril: 86	<br />Sapato: 38",
				""
			),

			//12
			"12"=>array(
				"Julia G.",
				11,
				"Altura:  1,79 <br />Manequim: 36 <br />	Busto: 87  <br />Cintura: 61 <br />	Quadril:  88 <br />	Sapato: 37",
				""
			),

			//13
			"13"=>array(
				"Ana L.",
				3,
				"Altura: 1,79 <br />	Manequim: 38 <br />	Busto: 80 <br />Cintura: 61 <br />	Quadril: 92 <br />	Sapato: 37",
				""
			),

			//14
			"14"=>array(
				"Claire S.",
				6,
				"Altura: 1,72	<br />Manequim: 38 <br />Busto: 85 <br />Cintura: 69 <br />Quadril: 98 <br />Sapato: 38",
				""
			),

			//15
			"15"=>array(
				"Laysla L.",
				3,
				"Altura: 1,77	<br />Manequim: 38	<br />Busto: 86 <br />Cintura: 66	<br />Quadril: 94	<br />Sapato: 37",
				""
			),

			//16
			"16"=>array(
				"Emanuely D.",
				5,
				"Altura: 1,76 <br />	Manequim: 34	<br />Busto: 78 <br />Cintura: 58	<br />Quadril: 85 <br />Sapato: 37",
				""
			),

			//17
			"17"=>array(
				"Nicolle I.",
				10,
				"Altura: 1,74 <br />	Manequim: 36	<br />Busto: 76 <br />Cintura: 62 <br />Quadril: 92	<br />Sapato: 38",
				""
			),

			//18
			"18"=>array(
				"Tharyne Z.",
				6,
				"Altura: 1,75	<br />Manequim: 36	<br />Busto: 81 <br />Cintura: 64	<br />Quadril: 92 <br />	Sapato: 37",
				""
			),
		),

    "masculino" => array(
			//1
  		"1"=>array(
				"Daniel A.",
				13,
				"Altura: 1,83 <br />Manequim: 38 <br />Busto: 91 <br />Cintura: 48 <br />Quadril: 95 ",
				""
			),

			//2
			"2"=>array(
				"Evandro M.",
				5,
				"Altura: 1,85 <br />Manequim: 40 <br />Sapato: 42  <br />Torax: 92",
				""
			),

			//3
			"3"=>array(
				"Fabricio B.",
				11,
				"Altura: 1,88	<br />Manequim: 38	<br />Busto: 87 <br />Cintura: 42	<br />	Sapato: 42",
				""
			),

			//4
			"4"=>array(
				"Jhonatan T.",
				7,
				"Altura: 1,89	<br />Manequim: 38 <br />Busto: 91 <br />Cintura: 44 <br />Sapato: 41",
				""
			),

			//5
			"5"=>array(
				"Leo P.",
				12,
				"Altura:1,93	<br />Manequim:42	<br />Busto:96 <br />Cintura: 48	<br />Sapato: 42",
				""
			),

			//6
			"6"=>array(
				"Lucas G.",
				13,
				"Altura: 1,94 <br />Manequim: 44 <br />Busto: 98 <br />Cintura:50 <br />Sapato: 43",
				""
			),

			//7
			"7"=>array(
				"Pedro S.",
				2,
				"Altura: 1,86	<br />Manequim: 40 <br />Sapato: 43",
				""
			),

			//8
			"8"=>array(
				"Ygor N.",
				3,
				"Altura: 1,85	<br />Manequim: 38	<br />Sapato: 40",
				""
			),

			//9
			"9"=>array(
				"Jessie B.",
				6,
				"Altura: 1,89 <br />Manequim: 38	<br />Busto: 87 <br />Cintura: 73 <br />	Quadril: 93	<br />Sapato: 42",
				""
			),

			//10
			"10"=>array(
				"André M.",
				7,
				"Altura: 1,89	<br />Manequim:40	<br />Busto: 90 <br />Cintura: 44	<br />Sapato:42",
				""
			),

			//11
			"11"=>array(
				"Guilherme S.",
				6,
				"Altura: 1,86	<br />Manequim: 42 <br />Busto: 95 <br />Sapato: 42",
				""
			),

			//10
			"12"=>array(
				"André M.",
				7,
				"Altura: 1,89	<br />Manequim:40	<br />Busto: 90 <br />Cintura: 44	<br />Sapato:42",
				""
			),

			//11
			"13"=>array(
				"Guilherme S.",
				6,
				"Altura: 1,86	<br />Manequim: 42 <br />Busto: 95 <br />Sapato: 42",
				""
			),
  	),

    "kids" => array(

      //1
      "1"=>array(
				"Gabriele C.",
				6,
				"Altura: 1,17 <br />	Manequim: 5 <br />Sapato: 29",
				""
			),

      //2
      "2"=>array(
				"Laura T.",
				4,
				"Altura: 1,21 <br />	Manequim: 10 <br />	Busto: 57 <br />Cintura: 54 <br />	Quadril: 60 <br />	Sapato: 30",
				""
			),

      //3
      "3"=>array(
				"Maria A.",
				5,
				"Manequim: 8 <br />	Busto: 67 <br />Cintura: 56 <br />	Quadril: 72 <br />	Sapato: 34",
				""
			),

      //4
      "4"=>array(
				"Bernardo P.",
				3,
				"Altura: 0,62	<br />Manequim: 6 <br />Sapato: 15",
				""
			),

      //5
      "5"=>array(
				"Matheus O.",
				4,
				"Altura: 1,44 <br />	Manequim: 12 <br />	Sapato: 35",
				""
			),

      //6
      "6"=>array(
				"Rafaella P.",
				4,
				"Altura: 1,00 <br />	Manequim: 4 <br />	Busto:0 <br />Cintura: 0 <br />	Quadril: 0 <br />	Sapato: 25",
				""
			),

      //7
      "7"=>array(
				"Julia R.",
				4,
				"Altura: 1,10	<br />Manequim: 6	<br />Sapato: 26",
				""
			),

      //8
      "8"=>array(
				"Yuri N.",
				5,
				"Altura: 1,36	<br />Manequim: 10	<br />Sapato: 34",
				""
			),

      //9
      "9"=>array(
				"André R.",
				5,
				"Altura:0,98	<br />Manequim:4 <br />Sapato:25",
				""
			),

      //10
      "10"=>array(
				"Izabella V.",
				5,
				"Altura: 1,56	<br />Manequim: 36	<br />Busto: 76 <br />Cintura: 64	<br />Quadril: 82	<br />Sapato: 37" ,
				""
			),

      //11
      "11"=>array(
				"Luana C.",
				4,
				"Altura: 1,30	<br />Manequim: 10 <br />Sapato: 29" ,
				""),

      //12
      "12"=>array(
				"Lorenzo E.",
				4,
				"Altura: 0,98 <br />Manequim: 3 <br />Quadril: 53 <br />Sapato: 23",
				""
			),

      //13
      "13"=>array(
				"Danilo C.",
				4,
				"Altura: 1,26 <br />	Manequim: 10" ,
				""
			),

    )
  );



?>

<!-- botão de fechar a modal -->
<!-- moodal -->
<div id="modal" class="modal modal-fixed-footer">
  <!-- modal content -->
  <div class="modal-content">
		<i class="material-icons large modal-close  animated zoomIn" style="">close</i>
    <div class="row">
			<div class="col s12 l3 casting-modal-profile">

			</div>
			<div class="col s12 l9 casting-modal-content">

				    <div class="col s12">
				      <ul class="tabs animated fadeIn" style="background-color:black;">
				        <li class="tab col s12"><a style="color:white;" href="#test1">Fotos & Jobs</a></li>
				      </ul>
				    </div>

				    <div id="foto-video" class="col s12">
						<!-- seta de anterior -->

							<!-- carrossel -->
							<div class="modal-caro animated transparent"></div>
							<div class="modal-caro-nav animated transparent hide-on-med-and-down"></div>

				    </div>

			</div>

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
					<a class="casting_link bw" href="#modal" data-jobs="<?php echo $modelo[3] ?>" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $counter?>" data-name="<?php echo $modelo[0]?>" data-category="<?php echo $casting ?>" data-measure="<?php echo $modelo[2]?>">
						<img src="img/<?php echo $casting ?>/<?php echo $counter?>.jpg" class="responsive-img" alt="">
					</a>
				</div>
		<?php
			$counter++;
			}
		 ?>

		</div>
	</div>

<?php require_once('footer.php') ?>
