<?php

	session_start();
	if($_SESSION['nome'] && $_SESSION['nome'] == $_POST['nome'] && $_SESSION['email'] == $_POST['email']){
		$dont = 1;
	}
	elseif(!$_POST['nome'] || !$_POST['email']){
		$dont = 1;
	}
	else{
		$_SESSION['nome'] = $nomeremetente;
		$_SESSION['email'] = $_POST['email'];
		$dont = 0;
	}

if($dont == 0){
 // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("./class/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.aforum.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->Port       = 587;   
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'site@aforum.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'aForum2015a'; // Senha do servidor SMTP (senha do email usado)
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "site@aforum.com.br"; // Seu e-mail
$mail->Sender = "site@aforum.com.br"; // Seu e-mail
$mail->FromName = "Forum"; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAddress("guilherme@aforum.com.br", 'CONTATO');
//$mail->AddBcc("marketing@aforum.com.br", 'CONTATO');
$mail->AddBcc("marketing01@aforum.com.br", 'CONTATO');
//$mail->AddBcc('monalisa@aforum.com.br', 'MONALISA'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "TRABALHE CONOSCO"; // Assunto da mensagem
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$nomeremetente  = $_POST['nome'];
$emailremetente = $_POST['email'];
$mensagemHTML = '<P>TRABALHE CONOSCO</P><Br>
Nome:'.$nomeremetente.'<br />
E-mail:'.$emailremetente.'<br />
Telefone:'.$_POST['telefone'].'<br />
Celular:'.$_POST['celular'].'<br />
Cargo Pretendido:'.$_POST['cargo'].'<br />
Cidade:'.$_POST['cidade'].'<br />
Estado:'.$_POST['uf'].'<br /><br />

Idade:'.$_POST['idade'].'<br />';
 
$mail->Body = $mensagemHTML;
$mail->AltBody = $mensagemHTML;
 
 //Atualização automatica da página
echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.html'>";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
if($_FILES['p1']["tmp_name"]){
	$mail->AddAttachment($_FILES['p1']["tmp_name"], "curriculo.jpg");  // Insere um anexo
}
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
}
 
// Exibe uma mensagem de resultado
if ($enviado) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Language" content="pt-br" />
<meta name="viewport" content="width=device-width, initial-scalable=1" />
<meta name="Keywords" content="forum, forum model, forum models, modelos, modelos curitiba, modelo passarela, casting, seleção de modelos, como ser modelo, formação de casting, new face, modelo feminino, modelo masculino, modelo infantil, new face curitiba, modelo curitiba, agencia de modelos, agencia de modelo, agencia new face, modelo infantil curitiba, modelo masculino curitiba, modelo faminino curitiba, seja forum, sejaforum, SEJA FORUM">
<meta name="Description" content="Agência de modelos de 3 a 65 anos, comerciais e fashion em Curitiba. Conhecemos e atendemos a expectativa das empresas." />
<meta name="Author" content="Agência Eureka! Agência de publicidade e propaganda em Curitiba" />
<meta http-equiv="EXPIRES" content="Sat, 01 Jan 2000 11:12:01 GMT" />
<meta http-equiv="PRAGMA" content="NO-CACHE" />
<meta name="robots" content="index, follow" />
<title>FORUM MODEL MANAGEMENT | AGÊNCIA DE MODELOS</title>
<link href="./css/estrutura_principal.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style.css" />

<script language="Javascript" src="./js/jquery-1.11.3.min.js"></script>
<script language="Javascript" src="./js/jquery-ui.min.js"></script>
<script language="Javascript" src="./js/jquery-form.js"></script>
<script language="Javascript" src="./js/jquery.maskedinput-1.3.min.js"></script>
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
				<li><a href="sejaforum.html" class="ativo">INSCREVA-SE</a></li>
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

	<div id="conteudo">		
		<center><br><br><br><br><br><br><br><br>Cadastro enviado com sucesso.<br>Nossa equipe entrar&aacute; em contato.</center>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>		

	<div id="author2"><a href="http://www.agenciaeureka.com.br" target="_blank"><img src="img/eureka.png" alt="Agência Eureka! Publicidade e Propaganda em Curitiba" /></a></div>
</body>
</html>
<?
} elseif($dont){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Language" content="pt-br" />
<meta name="viewport" content="width=device-width, initial-scalable=1" />
<meta name="Keywords" content="forum, forum model, forum models, modelos, modelos curitiba, modelo passarela, casting, seleção de modelos, como ser modelo, formação de casting, new face, modelo feminino, modelo masculino, modelo infantil, new face curitiba, modelo curitiba, agencia de modelos, agencia de modelo, agencia new face, modelo infantil curitiba, modelo masculino curitiba, modelo faminino curitiba, seja forum, sejaforum, SEJA FORUM">
<meta name="Description" content="Agência de modelos de 3 a 65 anos, comerciais e fashion em Curitiba. Conhecemos e atendemos a expectativa das empresas." />
<meta name="Author" content="Agência Eureka! Agência de publicidade e propaganda em Curitiba" />
<meta http-equiv="EXPIRES" content="Sat, 01 Jan 2000 11:12:01 GMT" />
<meta http-equiv="PRAGMA" content="NO-CACHE" />
<meta name="robots" content="index, follow" />
<title>FORUM MODEL MANAGEMENT | AGÊNCIA DE MODELOS</title>
<link href="./css/estrutura_principal.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style.css" />

<script language="Javascript" src="./js/jquery-1.11.3.min.js"></script>
<script language="Javascript" src="./js/jquery-ui.min.js"></script>
<script language="Javascript" src="./js/jquery-form.js"></script>
<script language="Javascript" src="./js/jquery.maskedinput-1.3.min.js"></script>
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
				<li><a href="sejaforum.html" class="ativo">SEJA FORUM</a></li>
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
				<li><a href="sejaforum.html">SEJA FORUM</a></li>
				<li><a href="http://agenciaforum.blogspot.com.br/" target="_new">BLOG</a></li>
				<li><a href="contato.html">CONTATO</a></li>
			</ul>
	<div class="clear"></div>

	<div id="conteudo">
		
		
		<center><br><br><br><br><br><br><br><br>Você já enviou um email com estes dados.<br>
		Se você precisa de maiores informações, entre em contato pelo 41. 3077-7288.</center>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>		

	<div id="author2"><a href="http://www.agenciaeureka.com.br" target="_blank"><img src="img/eureka.png" alt="Agência Eureka! Publicidade e Propaganda em Curitiba" /></a></div>
</body>
</html>
<?
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="Content-Language" content="pt-br" />
<meta name="viewport" content="initial-scale=1">
<META NAME="Description" CONTENT="Agência de modelos e new face em Curitiba/PR">
<META NAME="Author" CONTENT="Agência Eureka! - Agência de publicidade e propaganda Curitiba">
<META HTTP-EQUIV="EXPIRES" CONTENT="Sat, 01 Jan 2000 11:12:01 GMT">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META NAME="robots" CONTENT="nofollow">
<title>Forum Model Management | Cadastro não efetuado.</title>
<link href="./css/estrutura_principal.css" rel="stylesheet" type="text/css" charset="utf-8">
</head>
<body class="contato">
	N&atildeo foi poss&iacute;vel enviar o e-mail.<br>Tente novamente mais tarde.
</body>
</html>
<?
}
?>