<?php
	$nomeremetente  = $_POST['user_name'];

	// var_dump($_POST);
	session_start();
	// var_dump($_SESSION);

	if($_SESSION['nome'] && $_SESSION['nome'] == $_POST['user_name'] && $_SESSION['email'] == $_POST['email']){
		$dont = 1;

	}
	elseif(!$_POST['user_name'] || !$_POST['email']){
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
// $mail->AddAddress("guilherme@aforum.com.br", 'CONTATO');
$mail->AddAddress("web@aforum.com.br", 'CONTATO');
// $mail->AddBcc("marketing@aforum.com.br", 'CONTATO');
// $mail->AddBcc("marketing01@aforum.com.br", 'CONTATO');
// $mail->AddBcc('monalisa@aforum.com.br', 'MONALISA'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "CADASTRO #SEJAFORUM"; // Assunto da mensagem
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$emailremetente = $_POST['email'];
if ( $_POST['gender'] == 'form_inscription_masc_hidden'){
	$genero = ' Masculino';
} else if ( $_POST['gender'] == 'form_inscription_fem_hidden') {
	 $genero = ' Feminino';
} else if ( $_POST['gender'] == 'form_inscription_trans_hidden') {
	$genero = ' Transgênero';
} else {
	$genero = "não escolhido";
}

$mensagemHTML = '<h1>CADASTRO #SEJAFORUM</h1>
<h2>Dados pessoais</h2>
Nome: '.$nomeremetente.'<br />
RG: '.$_POST['ID'].'<br />
Responsável: '.$_POST['tutorName'].'<br />
RG Responsável: '.$_POST['tutorId'].'<br />
Idade: '.$_POST['age'].'<br />
Gênero: '.$genero .'<br /><br />

<h2>Endereço</h2>
Endereço: '.$_POST['adress'].'<br />
Cidade: '.$_POST['city'].'<br />
Estado: '.$_POST['state'].'<br />


<h2>Medidas</h2>
Altura: '.$_POST['height'].'<br />
Sapato: '.$_POST['shoe'].'<br />
Manequim: '.$_POST['manequim'].'<br />';

//se for genero feminino, masculino ou transgernero
if($_POST['gender'] == "form_inscription_fem_hidden"){
	$mensagemHTML .= 'Busto:'.$_POST['bust'].'<br />
	Cintura: '.$_POST['waist'].'<br />
	Quadril: '.$_POST['hips'].'<br />';
}
elseif($_POST['gender'] == "form_inscription_masc_hidden"){
	$mensagemHTML .= 'Torax:'.$_POST['torax'].'<br />
	Terno: '.$_POST['suit'].'<br />
	Camisa: '.$_POST['shirt'].'<br />';
}elseif($_POST['gender'] == "form_inscription_trans_hidden"){
	$mensagemHTML .= 'Busto/Toráx:'.$_POST['bust'].'<br />
	Cintura/Terno: '.$_POST['waist'].'<br />
	Quadril: '.$_POST['hips'].'<br />';
}
$mensagemHTML .= 'Olhos: '.$_POST['eyeColor'].'<br />
Cabelos: '.$_POST['hair'].'<br />

<h2>Contato</h2>
E-mail: '.$emailremetente.'<br />
Telefone: '.$_POST['telephone'].'<br />
Celular: '.$_POST['celphone'].'<br />

<hr>';

$mail->Body = $mensagemHTML;
$mail->AltBody = $mensagemHTML;

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
if($_FILES['photo_1']["tmp_name"]){
	$mail->AddAttachment($_FILES['photo_1']["tmp_name"], "fotorosto.jpg");  // Insere um anexo
}
if($_FILES['photo_2']["tmp_name"]){
	$mail->AddAttachment($_FILES['photo_2']["tmp_name"], "fotocorpo.jpg");
}

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
}

// Exibe uma mensagem de resultado
if (isset($enviado) && $enviado ) {
?>

<?php require_once('headerPreto.php') ?>

	<div id="conteudo">
		<center><br><br><br><br><br><br><br><br>Cadastro enviado com sucesso.<br>Nossa equipe entrar&aacute; em contato.</center>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>


<?php require_once('footer.php') ?>
<?php
} else if($dont){
?>
<?php require_once('headerPreto.php') ?>

	<div id="conteudo">
		<center><br><br><br><br><br><br><br><br>Você já enviou um email com estes dados.<br>
		Se você precisa de maiores informações, entre em contato pelo 41. 3077-7288.</center>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
<?php require_once('footer.php') ?>
</html>
<?php
} else {
?>
<?php require_once('headerPreto.php') ?>
<body class="contato">
	N&atildeo foi poss&iacute;vel enviar o e-mail.<br>Tente novamente mais tarde.
<?php require_once('footer.php') ?>
<?php } ?>
