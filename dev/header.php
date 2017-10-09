<?php

// // FORÇANDO O HTTPS
// {
// $new_url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
// header("Location: $new_url");
// exit;
// }
//
// ForceHTTPS(); //para chamar a função

//SESSÃO
session_start();

if ( !isset($_SESSION["modal"]) ) {

  $_SESSION["modal"] = true;
}

?>
<!DOCTYPE html>
<html class="">
<head>

  <!-- meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta http-equiv="Content-Language" content="pt-br" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="EXPIRES" content="Sat, 01 Jan 2000 11:12:01 GMT" />
  <meta http-equiv="PRAGMA" content="NO-CACHE" />

  <!-- SEO TAGS -->
  <meta name="Keywords" content="forum, forum model, forum models, modelos, modelos curitiba, modelo passarela, casting, seleção de modelos, como ser modelo, formação de casting, new face, modelo feminino, modelo masculino, modelo infantil, new face curitiba, modelo curitiba, agencia de modelos, agencia de modelo, agencia new face, modelo infantil curitiba, modelo masculino curitiba, modelo faminino curitiba, seja forum, sejaforum, SEJA FORUM">
  <meta name="Description" content="Agência de modelos de 3 a 65 anos, comerciais e fashion em Curitiba. Conhecemos e atendemos a expectativa das empresas." />

  <meta name="robots" content="index, follow" />

  <title>FORUM MODEL MANAGEMENT | AGÊNCIA DE MODELOS</title>

  <!-- css -->

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- folhas de estilo css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?rd5re8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css"/>
  <!-- // Add the new slick-theme.css if you want the default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css"/>

  <!-- folha de estilo compilada -->
  <link rel="stylesheet" href="style.css">

  <noscript>
    Infelizment esse site não é suportado pelo seu navegador. Para acessar o site da Forum por favor faça o download de um navegador mais moderno.
    O navegador com melhor funcionamento para esse site é o Google Chrome.
  </noscript>

  <!-- assets -->

  <!-- jquery -->


     <!-- Google analytics -->
     <!-- <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
       ga('create', 'UA-62606403-1', 'auto');
       ga('send', 'pageview');
     </script> -->

     <!-- FACEBOOK-->
     <!-- Facebook Pixel Code -->
       <!-- <script>
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
       /></noscript> -->
     <!-- DO NOT MODIFY -->
     <!-- End Facebook Pixel Code -->


    </head>

    <body class="animated">

      <!-- Google Tag Manager -->
      <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PTGVDK" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PTGVDK');
      </script>

      <!-- navigation menu -->
      <nav class="nav-extended white hide">
        <div class="nav-wrapper">

          <!-- logo -->
          <a href="index.php" class="brand-logo"><img class="brand-logo-img"src="img/logos/logo-preta.png" alt=""></a>

          <!-- mobile button -->
          <a href="#menu" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

          <!-- social media links -->
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!-- Facebook -->
            <li class="custom-icon" ><a href="https://www.facebook.com/forummgt" target="_blank" class="icon-sociocon" ><i class="socicon-facebook" ></i></a></li>
            <!-- instagram -->
            <li class="custom-icon" ><a href="https://instagram.com/forummgt/" target="_blank" class="icon-sociocon" ><i class="socicon-instagram" ></i></a></li>
            <!-- Youtube -->
            <li class="custom-icon" ><a href="https://www.youtube.com/aForumBrCuritiba/" target="_blank" class="icon-sociocon"><i class="socicon-youtube" ></i></a></li>

          </ul> <!-- end of social media links -->

          <!-- mobile menu -->
          <ul class="side-nav" id="mobile-demo">

            <!-- casting -->
            <!-- casting advanced link -->
            <li><a href="casting-advanced">Advanced</a></li>
            <!-- casting masculino link -->
            <li><a href="casting-masculino">Masculino</a></li>
            <!-- casting feminino link -->
            <li><a href="casting-feminino">Feminino</a></li>
            <!-- casting development link -->
            <li><a href="casting-comercial">Comercial</a></li>
            <!-- casting kids link -->
            <li><a href="casting-kids">Kids</a></li>

            <div class="divider">

            </div>
            <!-- info -->
            <!-- portfolio -->
            <li><a href="portfolio">Portfólio</a></li>
            <!-- register form link -->
            <li><a href="seja-forum">Seja Forum</a></li>
            <!-- about us link  -->
            <li><a href="agencia-forum">A Forum</a></li>
            <!-- blog link  -->
            <li><a href="htpp://aforum.com.br/blog">Blog</a></li>
            <!-- contact info link -->
            <li><a href="contato">Contato</a></li>
          </ul>
        </div> <!-- end of mobile menu -->

        <!-- desktop menu -->
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
              <!-- casting -->
              <!-- casting advanced link -->
              <li class="tab left"><a target="_self" href="casting-advanced" class="black-text">Advanced</a></li>
              <!-- casting masculino link -->
              <li class="tab left"><a target="_self" href="casting-masculino" class="black-text">Masculino</a></li>
              <!-- casting feminino link -->
              <li class="tab left"><a target="_self" href="casting-feminino" class="black-text">Feminino</a></li>
              <!-- casting development link -->
              <li class="tab left"><a target="_self" href="casting-comercial" class="black-text">Comercial</a></li>
              <!-- casting kids link -->
              <li class="tab left"><a target="_self" href="casting-kids" class="black-text">Kids</a></li>
              <!-- info -->

              <!-- portfolio -->
              <li class="tab right"><a target="_self" href="portfolio" class="black-text">portfólio</a></li>
              <!-- register form link -->
              <li class="tab right"><a target="_self" href="seja-forum" class="black-text">Seja Forum</a></li>
              <!-- about us link  -->
              <li class="tab right"><a target="_self" href="agencia-forum" class="black-text">A Forum</a></li>
              <!-- blog link  -->
              <li class="tab right"><a target="_self" href="http://www.aforum.com.br/blog" class="black-text">Blog</a></li>
              <!-- contact info link -->
              <li class="tab right"><a target="_self" href="contato" class="black-text">Contato</a></li>
          </ul>
        </div> <!-- end of tabs desktop menu-->

      </nav>

      <!-- mobile social links -->
      <ul id="nav-mobile-socialLinks" class="center animated fadeIn hide">
        <!-- Facebook -->
        <li class="custom-icon" ><a href="https://www.facebook.com/forummgt" target="_blank"class="icon-sociocon" ><i class="socicon-facebook"></i></a></li>
        <!-- instagram -->
        <li class="custom-icon" ><a href="https://instagram.com/forummgt/" target="_blank" class="icon-sociocon" ><i class="socicon-instagram"></i></a></li>
        <!-- Youtube -->
        <li class="custom-icon" ><a href="https://www.youtube.com/aForumBrCuritiba/" target="_blank" class="icon-sociocon"><i class="socicon-youtube"></i></a></li>



      </ul>   <!-- end of mobile social links -->


      <div class="loading-animation hide animated fadeIn">
      		<div class="lds-css ng-scope">
      	  <div style="width:100%;height:100%" class="lds-rolling">
      	    <div></div>
      	  </div>
      	</div>
      </div>
