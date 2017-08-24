<?php
  //SESSION
  session_start();

  if ( !isset($_SESSION["modal"]) ) {

    $_SESSION["modal"] = true;
  }

?>
<!DOCTYPE html>
<html>
<head>

  <!-- meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta http-equiv="Content-Language" content="pt-br" />
  <meta name="viewport" content="width=device-width, initial-scalable=1" />

  <!-- SEO TAGS -->
  <meta name="Keywords" content="forum, forum model, forum models, modelos, modelos curitiba, modelo passarela, casting, seleção de modelos, como ser modelo, formação de casting, new face, modelo feminino, modelo masculino, modelo infantil, new face curitiba, modelo curitiba, agencia de modelos, agencia de modelo, agencia new face, modelo infantil curitiba, modelo masculino curitiba, modelo faminino curitiba, seja forum, sejaforum, SEJA FORUM">
  <meta name="Description" content="Agência de modelos de 3 a 65 anos, comerciais e fashion em Curitiba. Conhecemos e atendemos a expectativa das empresas." />
  <meta name="Author" content="Agência Eureka! Agência de publicidade e propaganda em Curitiba" />
  <!-- <meta http-equiv="EXPIRES" content="Sat, 01 Jan 2000 11:12:01 GMT" /> -->
  <!-- <meta http-equiv="PRAGMA" content="NO-CACHE" /> -->
  <meta name="robots" content="index, follow" />

  <title>FORUM MODEL MANAGEMENT | AGÊNCIA DE MODELOS</title>

  <!-- styles -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link href="./css/estrutura_principal_220817.css" rel="stylesheet" type="text/css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/casting.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


  <!-- Compiled and minified CSS -->



  <!-- general site JS -->
  <script language="Javascript" src="./js/jquery-1.11.3.min.js"></script>
  <script language="Javascript" src="./js/jquery-ui.min.js"></script>
  <script language="Javascript" src="./js/jquery-form.js"></script>
  <script language="Javascript" src="./js/jquery.maskedinput-1.3.min.js"></script>
  <script language="Javascript" src="./js/site.js"></script>
  <script src="./js/functions.js" charset="utf-8"></script>
  <script src="./js/form.js" charset="utf-8"></script>
  <script src="js/casting.js" charset="utf-8"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script> -->

  <!-- Google analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-62606403-1', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- FACEBOOK-->
  <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '586053591562369'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=586053591562369&ev=PageView&noscript=1"
    /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

</head>
<body id="index">

  <!-- End Google Tag Manager -->
  	<div id="menu" class="white">
  		<a href="index.php" id="ltop"><img src="img/logo-branca.png" id="logo-menu" alt="FORUM Model Management | Agência de modeos em Curitiba" /></a>
  		<div class="socials_menu">
  			<a href="https://www.facebook.com/forummgt" target="_new"><img src="img/logo-face-branca.png" alt="Facebook Forum Model Management" /></a>
  			<a href="https://instagram.com/forummgt/" target="_new"><img src="img/logo-insta-branca.png" alt="Instagram Forum Model Management" /></a>
  			<a href="https://twitter.com/Forummgt" target="_new"><img src="img/logo-twitter-branca.png" alt="Twitter Forum Model Management" /></a>
  			<a href="https://www.youtube.com/aForumBrCuritiba/" target="_new"><img src="img/logo-youtube-branca.png" alt="Youtube Forum Model Management" /></a>
  		</div>
  		<div class="clear" style="width: 100%; border-top: 1px solid #a0a0a0; margin-top: 10px;"></div>
  		<div id="Casting-model">
  			<ul id="menu_cast">
  				<!-- <li><a href="modelos_development.php">DEVELOPMENT</a></li> -->
  				<li><a href="modelos_feminino.php">FEMININO</a></li>
  				<li><a href="modelos_masculino.php">MASCULINO</a></li>
          <li><a href="modelos_comercial.php">COMERCIAL</a></li>
  				<li><a href="modelos_advanced.php">ADVANCED</a></li>
  				<li><a href="modelos_kids.php">KIDS</a></li>
  			</ul>
  			<ul>
  				<li><a href="agenciaforum.php">FORUM</a></li>
  				<li><a href="sejaforum.php">INSCREVA-SE</a></li>
  				<li><a href="http://www.aforum.com.br/blog/" target="_new">BLOG</a></li>
  				<li><a href="contato.php">CONTATO</a></li>
          <li ><a href="portfolio.php">PORTFÓLIO</a></li>

  			</ul>
  			<ul id="menu_cast_cel">
  				<!-- <li><a href="modelos_development.php">DEVELOPMENT</a></li> -->
  				<li><a href="modelos_feminino.php">FEMININO</a></li>
          <li><a href="modelos_masculino.php">MASCULINO</a></li>
          <li><a href="modelos_comercial.php">COMERCIAL</a></li>
  				<li><a href="modelos_advanced.php">ADVANCED</a></li>
  				<li><a href="modelos_kids.php">KIDS</a></li>

          <li ><a href="portfolio.php">PORTFÓLIO</a></li>

  				<li><a href="agenciaforum.php">FORUM</a></li>
  				<li><a href="sejaforum.php">SEJA FORUM</a></li>
  				<li><a href="http://www.aforum.com.br/blog/" target="_new">BLOG</a></li>
  				<li><a href="contato.php">CONTATO</a></li>
  			</ul>
  			<div class="clear"></div>
  		</div>
  	</div>


    	<!-- MODAL -->

    	<!-- if the user has seen the modal in this session we don't show it again -->

    	<!-- if modal variable is not set -->
    	<?php if($_SESSION["modal"]=== true) {?>

    	<!-- show the modal -->

    	<!-- Modal Trigger -->
    	<a class="waves-effect waves-light btn modal-trigger" style="display:none;" href="#modal1">Modal</a>
    	<div class="modalClose" style="color:white;float:right;position:absolute;right:10%;top:5%;z-index:9999999999;cursor:pointer;">
    		 <i class="material-icons" style="font-size:50px">close</i>
    	</div>

    	<!-- modal -->
    	<div id="modal1" class="modal" style="z-index:9999999;">
    		<div class="modal-content" style="margin-left: 5%;  width:80%!important; padding:24px; " id="content-video">
    			<div class="opiniao_slider_item">
    				<div class="youtube" id="popup" data-embed="M2YufTXQz9M">
    					<div class="play-button"></div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<!-- set modal variable -->
    	<?php $_SESSION["modal"] = false; ?>
      <?php var_dump($_SESSION["modal"]); ?>


    	<?php } ?> <!-- end if -->
