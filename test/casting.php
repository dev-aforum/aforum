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
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",

				//ids dos jobs na api do YouTube separados por vírgula
				// nome dos jobs em ordem
				"",

			),

  		//2
  		"2"=>array(
				"Elizabeth F.",
				4 ,
					"<ul>
						<li>
						<span class='medida'>Altura</span><br/>
						1,76
						</li>
					</ul>
					<ul>
						<li>
						<span class='medida'>Manequim</span><br/>
						38
						</li>
					</ul>
					<ul>
						<li>
						<span class='medida'>Busto</span><br/>
						88
						</li>
					</ul>
					<ul>
						<li>
						<span class='medida'>Cintura</span><br/>
						65
						</li>
					</ul>
					<ul>
						<li>
						<span class='medida'>Quadril</span><br/>
						90
						</li>
					</ul>
					<ul>
						<li>
						<span class='medida'>Sapato</span><br/>
						38
						</li>
					</ul>",
					""
			),

  		//3
  		"3"=>array("Flavio R.",
			2,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,76
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				42
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				41
				</li>
				</ul>",
			 ""
		 ),

  		//4
  		"4"=>array(
				"Claribel S. ",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,69
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					42
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					98
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					82
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					104
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",

				""
			),

  		//5
  		"5"=>array(
				"Sandra M. ",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,78
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					46
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					40
					</li>
				</ul>",
				""
			),

  		//6
  		"6"=>array(
				"Arnaldo C. ",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,82
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					42
					</li>
				</ul>",
				""
			),

  		//7
  		"7"=>array(
				"Valeria C. ",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,72
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					91
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					77
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					105
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					39
					</li>
				</ul>",
				""
			),

  		//8
  		"8"=>array(
				"Rosalind J. ",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,50
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					44
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					83
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					69
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					96
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					35
					</li>
				</ul>",
				""
			),

  		//9
  		"9"=>array(
				"Marta C. ",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,68
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					77
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					97
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					40
					</li>
				</ul>",
				""
			),

  		//10
  		"10"=>array(
				"Mirian M.",
				2,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,67
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					89
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					75
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					93
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					36
					</li>
				</ul>",
				""
			),

  		//11
  		"11"=>array(
				"Maria C.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,68
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					44
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					36
					</li>
				</ul>",
				""
			),

  		//12
  		"12"=>array(
				"Monica T.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,75
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					58
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					91
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

  		//13
  		"13"=>array(
				"Suely M.",
				2,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,52
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					33
					</li>
				</ul>",
				""
			),

  		//14
  		"14"=>array(
				"Lucia S.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,71
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					48
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					109
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					94
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					109
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),

  		//15
  		"15"=>array(
				"Divangela M.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,69
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					80
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					60
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					88
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),

  		//16
  		"16"=>array(
				"Rosemeri B. ",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//16
			"17"=>array(
				"Eliane S. ",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,70
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					96
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					36
					</li>
				</ul>",
				""
			),
    ),

    "comercial" =>  array(

      //1
      "1"=>array("Gabiela A.",
			6,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,72
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				36
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Busto</span><br/>
				73
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Cintura</span><br/>
				57
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Quadril</span><br/>
				82
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				39
				</li>
			</ul>",
			""
		),
      //2
      "2"=>array(
				"Valkiria S.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,57
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					69
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					95
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					35
					</li>
				</ul>",
				""
			),

      //4
      "4"=>array(
				"Michel L.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,89
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					44
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",
				""
			),

      //5
      "5"=>array(
				"Matheus C.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					58
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					91
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

      //6
      "6"=>array("Sarah L.",
			5,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,65
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				38
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Busto</span><br/>
				84
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Cintura</span><br/>
				67
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Quadril</span><br/>
				92
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				38
				</li>
			</ul>",
			""
		),

    //7
    "7"=>array(
			"Carlos E.",
			4,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,70
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				38
				</li>
			</ul>

			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				39
				</li>
			</ul>",
			""
		),

      //8
      "8"=>array("Ketelyn C.",
			4,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,65
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				36
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Busto</span><br/>
				83
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Cintura</span><br/>
				93
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Quadril</span><br/>
				95
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				35
				</li>
			</ul>",
			""
		),
      //9
      "9"=>array("Rafael O.",
			4,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,79
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				38
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Quadril</span><br/>
				77
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				41
				</li>
			</ul>",
			""
		),

    //10
    "10"=>array(
			"Alexia G.",
			4,
			"<ul>
				<li>
				<span class='medida'>Altura</span><br/>
				1,63
				</li>
			</ul>
			<ul>
				<li>
				<span class='medida'>Manequim</span><br/>
				38
				</li>
			</ul>
			<ul>
			<ul>
				<li>
				<span class='medida'>Sapato</span><br/>
				36
				</li>
			</ul>",
			""
		),

      //11
      "11"=>array(
				"Daiara C.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					84
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					65
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					35
					</li>
				</ul>",

				""
			),

      //12
      "12"=>array(
				"Gilton C.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,84
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					42
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					42
					</li>
				</ul>",
				""
			),

      //13
      "13"=>array(
				"Gabriela C.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,73
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					60
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

      //14
      "14"=>array(
				"Marcos P.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,81
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					41
					</li>
				</ul>",
				""
			),

      //15
      "15"=>array(
				"Emmanoel S.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					44
					</li>
				</ul>",
				""
			),

      //16
      "16"=>array(
				"Ana L.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,65
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					34
					</li>
				</ul>",
				""
			),

      //17
      "17"=>array(
				"Gelca R.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,70
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					68
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					97
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					36
					</li>
				</ul>",
				""
			),

      //18
      "18"=>array(
				"Diego L.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",
				""
			),

			//19
      "19"=>array(
				"Felipe B.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,77
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					42
					</li>
				</ul>",
				""
			),

      //20
      "20"=>array(
				"Carlos E.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,72
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					39
					</li>
				</ul>",
				""
			),

      //21
      "21"=>array(
				"Gabi A.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,73
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					34
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					74
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					61
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					90
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),



      //22
      "22"=>array(
				"Julia B.",
				10,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,74
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					69
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					101
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

      //23
      "23"=>array(
				"Maria B.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,79
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					70
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					99
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					40
					</li>
				</ul>",
				""
			),

      //24
      "24"=>array(
				"Rafaela V.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,63
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					75
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					58
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

      //25
      "25"=>array(
				"Renata G.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,76
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//26
			"26"=>array(
				"Ana X.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,65
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					34
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					74
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					57
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					35
					</li>
				</ul>",
				""
			),

			//27
			"27"=>array(
				"Bruna S.",
				9,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,70
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					90
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					90
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					36
					</li>
				</ul>",
				""
			),

			//28
			"28"=>array(
				"Victoria C",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,70
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					89
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					66
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					98
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),

			//29
			"29"=>array(
				"Marina S.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,61
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					83
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					68
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					97
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					36
					</li>
				</ul>",
				""
			),


    ),

    "feminino" => array(

			//1
			"1"=>array(
				"Julia P.",
				10,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,75
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					88
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					63
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					91
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//4
			"4"=>array(
				"Leticia C.",
				12,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,77
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					82
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					68
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					97
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),

			//5
			"5"=>array(
				"Emily M.",
				8,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,80
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					81
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					60
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//6
			"6"=>array(
				"Francyne M.",
				13,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,77
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					63
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					90
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),


			//12
			"12"=>array(
				"Julia G.",
				8,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,79
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					61
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					88
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//13
			"13"=>array(
				"Ana L.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,79
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					80
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					61
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),


			//17
			"17"=>array(
				"Nicolle I.",
				10,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,74
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					76
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),

			//18
			"18"=>array(
				"Tharyne Z.",
				6,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,75
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					81
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					64
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//19
			"19"=>array(
				"Alexia S.",
				7,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,79
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					65
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					39
					</li>
				</ul>",
				""
			),

			//20
			"20"=>array(
				"Camila J.",
				9,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,83
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					64
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					94
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					39
					</li>
				</ul>",
				""
			),

			//21
			"21"=>array(
				"Laura B.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,76
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					80
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					69
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					93
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//22
			"22"=>array(
				"Malu F.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,78
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					77
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					91
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

			//23
			"23"=>array(
				"Thabata E.",
				8,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,72
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					34
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					84
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					64
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					38
					</li>
				</ul>",
				""
			),



		),

    "masculino" => array(
			//1
  		"1"=>array(
				"Daniel A.",
				13,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,83
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					91
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					48
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					95
					</li>
				</ul>",

				""
			),



			//3
			"3"=>array(
				"Fabricio B.",
				11,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,88
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					87
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					42
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					42
					</li>
				</ul>",
				""
			),


			//5
			"5"=>array(
				"Leo P.",
				12,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,93
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					42
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					96
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					48
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					42
					</li>
				</ul>",
				""
			),

			//6
			"6"=>array(
				"Lucas G.",
				13,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,94
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					44
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					98
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					50
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",
				""
			),

			//7
			"7"=>array(
				"Pedro S.",
				2,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,86
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",
				""
			),

			//8
			"8"=>array(
				"Ygor N.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					40
					</li>
				</ul>",
				""
			),

			//9
			"9"=>array(
				"Danilo G.",
				9,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					38
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					40
					</li>
				</ul>",
				""
			),

			"10"=>array(
				"Lucas M.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					93
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					46
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					99
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					41
					</li>
				</ul>",
				""
			),

			"11"=>array(
				"Lucca S.",
				9,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,85
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					39
					</li>
				</ul>",
				""
			),


			"12"=>array(
				"Paulo P.",
				8,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,83
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					40
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",
				""
			),


			"13"=>array(
				"Phelipe M.",
				8,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,92
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					50
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					43
					</li>
				</ul>",
				""
			),




  	),

    "kids" => array(

      //1
      "1"=>array(
				"Gabriele C.",
				6,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,71
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					5
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					29
					</li>
				</ul>",
				""
			),

      //2
      "2"=>array(
				"Laura T.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,21
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					10
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					57
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					54
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					60
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					30
					</li>
				</ul>",
				""
			),

      //3
      "3"=>array(
				"Maria A.",
				5,
				"<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					8
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					67
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					56
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					72
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					34
					</li>
				</ul>",
				""
			),

      //4
      "4"=>array(
				"Bernardo P.",
				3,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					0,62
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					6
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					15
					</li>
				</ul>",
				""
			),

      //5
      "5"=>array(
				"Matheus O.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,44
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					12
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					35
					</li>
				</ul>",
				""
			),

      //6
      "6"=>array(
				"Rafaella P.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,00
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					4
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					25
					</li>
				</ul>",
				""
			),

      //7
      "7"=>array(
				"Julia R.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,10
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					6
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					26
					</li>
				</ul>",
				""
			),

      //8
      "8"=>array(
				"Yuri N.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					10
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					34
					</li>
				</ul>",
				""
			),

      //9
      "9"=>array(
				"André R.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					0,98
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					4
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					25
					</li>
				</ul>",
				""
			),

      //10
      "10"=>array(
				"Izabella V.",
				5,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,56
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					36
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					76
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Cintura</span><br/>
					64
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Quadril</span><br/>
					82
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					37
					</li>
				</ul>",
				""
			),

      //11
      "11"=>array(
				"Luana C.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,30
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					10
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					29
					</li>
				</ul>",
				""),

      //12
      "12"=>array(
				"Lorenzo E.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					0,98
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					3
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Busto</span><br/>
					53
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Sapato</span><br/>
					23
					</li>
				</ul>",
				""
			),

      //13
      "13"=>array(
				"Danilo C.",
				4,
				"<ul>
					<li>
					<span class='medida'>Altura</span><br/>
					1,26
					</li>
				</ul>
				<ul>
					<li>
					<span class='medida'>Manequim</span><br/>
					10
					</li>
				</ul>",
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

			<div class="col s12 l9 casting-modal-content">


						<div id="foto-video" class="col s12">

							<!-- carrossel -->
							<div class="carrossel-principal animated transparent"></div>
							<div class="carrossel-nav animated transparent hide-on-med-and-down"></div>

						</div>

			</div>
			<div class="col s12 l3 casting-modal-profile">

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
			foreach ($category as $id => $modelo) {
			?>
				<div class="col s6 m4 xl4 casting-gallery-item animated" style="opacity:0" >
					<a class="casting_link bw" href="#modal" data-jobs="<?php echo $modelo[3] ?>" data-photos="<?php echo $modelo[1]?>" data-id="<?php echo $id?>" data-name="<?php echo $modelo[0]?>" data-category="<?php echo $casting ?>" data-measure="<?php echo $modelo[2]?>">
						<img src="img/<?php echo $casting ?>/<?php echo $id?>.jpg" class="responsive-img" alt="">
					</a>
				</div>
		<?php
			$counter++;
			}
		 ?>

		</div>
	</div>

<?php require_once('footer.php') ?>
