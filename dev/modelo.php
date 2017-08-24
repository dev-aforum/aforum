<?
	include("init.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Language" content="pt-br" />
<meta name="viewport" content="width=device-width, initial-scalable=1" />
<meta name="Keywords" content="forum, forum model, forum models, modelos, modelos curitiba, modelo passarela, casting, seleção de modelos, como ser modelo, formação de casting, new face, modelo feminino, modelo masculino, modelo infantil, new face curitiba, modelo curitiba, agencia de modelos, agencia de modelo, agencia new face, modelo infantil curitiba, modelo masculino curitiba, modelo faminino curitiba, seja forum, sejaforum, #sejaforum">
<meta name="Description" content="Agência de modelos de 3 a 65 anos, comerciais e fashion em Curitiba. Conhecemos e atendemos a expectativa das empresas." />
<meta name="Author" content="Agência Eureka! Agência de publicidade e propaganda em Curitiba" />
<meta http-equiv="EXPIRES" content="Sat, 01 Jan 2000 11:12:01 GMT" />
<meta http-equiv="PRAGMA" content="NO-CACHE" />
<meta name="robots" content="index, follow" />
<title>FORUM MODEL MANAGEMENT | AGÊNCIA DE MODELOS</title>
<link href="./css/estrutura_principal.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script language="Javascript" src="./js/jquery-1.11.3.min.js"></script>
<script language="Javascript" src="./js/jquery-form.js"></script>
<script language="Javascript" src="./js/mouse.parallax.js"></script>
<script language="Javascript" src="./js/jquery.montage.min.js"></script>

<script language="Javascript" src="./js/site.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62606403-1', 'auto');
  ga('send', 'pageview');

</script>


<script type="text/javascript">     
	function PreviewImage(no) {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);
		oFReader.onload = function (oFREvent) {
			document.getElementById("uploadPreview"+no).src = oFREvent.target.result;         
		};     
	} 


	$(document).ready(function(){

		var $container 	= $('#lista_modelos'),
			$imgs		= $container.find('img').hide(),
			totalImgs	= $imgs.length,
			cnt			= 0;
				
		$imgs.each(function(i) {
			var $img	= $(this);
			$('<img/>').load(function() {
				++cnt;
				if( cnt === totalImgs ) {
					$imgs.show();
					$container.montage({
						fillLastRow				: true,
						alternateHeight			: true,
						alternateHeightRange	: {
							min	: 270,
							max	: 730
						},
						margin: 1
					});
				}
			}).attr('src',$img.attr('src'));
		});	

		$('#lista_modelos a').css({opacity: 0});
		var total = 0;

		$('#lista_modelos a').each(function(){
			var t = total * 200;
			$(this).delay(t).animate({ opacity: 1 }, 600);
			total++;
		});


		
		
	}); 

	$(window).load(function(){
		$('.foto').each(function(){
			if($(this).width() > $(this).height()){
				$(this).css({ width: 96.5+'%' });
			}
			else{
				$(this).css({ width: 47.5+'%' });
			}
		});
	});
</script>
<!--[if IE]>   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->


</head>
<body class="show">
<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PTGVDK"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PTGVDK');</script>

<!-- End Google Tag Manager -->
	<div id="menu" class="black">
		<a href="index.html" id="ltop"><img src="img/logo-preta.png" id="logo-menu" alt="FORUM Model Management | Agência de modeos em Curitiba" /></a>
		<div class="socials_menu">
			<a href="https://www.facebook.com/forummgt" target="_new"><img src="img/logo-face-preta.png" alt="Facebook Forum Model Management" /></a>
			<a href="https://instagram.com/forummgt/" target="_new"><img src="img/logo-insta-preta.png" alt="Instagram Forum Model Management" /></a>
			<a href="https://twitter.com/ForumMmgt" target="_new"><img src="img/logo-twitter-preta.png" alt="Twitter Forum Model Management" /></a>
			<a href="https://www.youtube.com/aForumBrCuritiba/" target="_new"><img src="img/logo-youtube-preta.png" alt="Youtube Forum Model Management" /></a>
			<a href="https://plus.google.com/+AforumBrCuritiba/" target="_new"><img src="img/logo-gplus-preta.png" alt="Google+ Forum Model Management" /></a>
		</div>
		<div class="clear risco"></div>
		<div id="Casting-model">
			<ul id="menu_cast">
				<li><a href="modelos_development.php">DEVELOPMENT</a></li>
				<li><a href="modelos_feminino.php">FEMININO</a></li>
				<li><a href="modelos_masculino.php">MASCULINO</a></li>
				<li><a href="modelos_kids.php">KIDS</a></li>
			</ul>
			<ul>
				<li><a href="agenciaforum.html">FORUM</a></li>
				<li><a href="sejaforum.html">INSCREVA-SE</a></li>
				<li><a href="http://agenciaforum.blogspot.com.br/" target="_new">BLOG</a></li>
				<li><a href="contato.html">CONTATO</a></li>
			</ul>

			
			<div class="clear"></div>
		</div>
		<div id=menu_cel>MENU</div>
	</div>
	<ul id="menu_cast_cel2">
				<li><a href="modelos_development.php">DEVELOPMENT</a></li>
				<li><a href="modelos_feminino.php">FEMININO</a></li>
				<li><a href="modelos_masculino.php">MASCULINO</a></li>
				<li><a href="modelos_kids.php">KIDS</a></li>
				<li><a href="agenciaforum.html">FORUM</a></li>
				<li><a href="sejaforum.html">INSCREVA-SE</a></li>
				<li><a href="http://agenciaforum.blogspot.com.br/" target="_new">BLOG</a></li>
				<li><a href="contato.html">CONTATO</a></li>
			</ul>
	<div class="clear"></div>

	<div id="det_modelo">
		<?
			$modelObj->get_dados_modelo($_REQUEST['modelo']);
			$dados = $modelObj->dados;
			$vidObj->get_videos_modelo($_REQUEST['modelo']);
			$videos = $vidObj->videos;
			if($dados['development']){
				$nome = "";
			}
			elseif($dados['idade'] < 13){
				$nome = $dados['nome'];
			}
			else{
				$nome = $modelObj->encurta($dados['nome']);
			}
		?>
		<img src="<?=$path_imagens;?><?=$_REQUEST['modelo'];?>/p1.jpg" class="principal" alt="Modelo <?=$nome;?>" />
		<div class="detalhes">
			<h3><?=$nome;?></h3>
			&nbsp;&nbsp;Idade <?=$modelObj->calc_idade($dados['nascimento']);?> anos<br>
			<?
				if($dados['idade'] < 13){

				}
				elseif($dados['sexo'] == 1){
			?>
			&nbsp;&nbsp;Altura <?=number_format($dados['altura'],2,",",".");?> m<br>
			&nbsp;&nbsp;Tórax <?=number_format($dados['busto'],2,",",".");?> cm<br>
			&nbsp;&nbsp;Terno <?=$dados['cintura'];?><br>
			&nbsp;&nbsp;Manequim <?=$dados['manequim'];?><br>
			<?
				}

				elseif($dados['sexo'] == 2){
			?>
			&nbsp;&nbsp;Altura <?=number_format($dados['altura'],2,",",".");?> m<br>
			&nbsp;&nbsp;Busto <?=number_format($dados['busto'],2,",",".");?> cm<br>
			&nbsp;&nbsp;Cintura <?=$dados['cintura'];?><br>
			&nbsp;&nbsp;Quadril <?=$dados['quadril'];?><br>
			&nbsp;&nbsp;Manequim <?=$dados['manequim'];?><br>
			<?
				}
			?>

			&nbsp;&nbsp;Sapato <?=$dados['sapato'];?><br>
			&nbsp;&nbsp;Olhos <?=$dados['olhos'];?><br>
			&nbsp;&nbsp;Cabelos <?=$dados['cabelos'];?><br>
		</div>
		<div class="clear"></div>
		<?
			for($i = 2; $i <= 15; $i++){
				if(is_file($path_imagens.$_REQUEST['modelo']."/p".$i.".jpg")){
		?>
		<img src="<?=$path_imagens;?><?=$_REQUEST['modelo'];?>/p<?=$i;?>.jpg" class="foto">
		<?
				}
				elseif(is_file($path_imagens.$_REQUEST['modelo']."/p".$i.".png")){
		?>
		<img src="<?=$path_imagens;?><?=$_REQUEST['modelo'];?>/p<?=$i;?>.png" class="foto">
		<?
				}
				elseif(strlen($videos[$i])){
		?>
		<iframe height="500" width="47%" src="https://www.youtube.com/embed/<?=$videos[$i];?>" frameborder="0" allowfullscreen class="video"></iframe>
		<?
				}
			}
		?>
		
		<div class="clear"></div>
		<a href="javascript:history.back();" style="float: right; margin-right: 20px; margin-top: 20px; margin-bottom: 20px;">Voltar</a>
	</div>
	<div class="clear"></div>		

	<div id="author2"><a href="http://www.agenciaeureka.com.br" target="_blank"><img src="img/eureka.png" alt="Agência Eureka! Publicidade e Propaganda em Curitiba" /></a></div>
</body>
</html>