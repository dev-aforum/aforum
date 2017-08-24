<?php
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
$mail->AddAddress("guilherme@aforum.com.br", 'CONTATO');
$mail->AddBcc("andre@agenciaeureka.com.br", 'CONTATO');
$mail->AddBcc('monalisa@aforum.com.br', 'MONALISA'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "CONTATO DO SITE AFORUM.COM.BR"; // Assunto da mensagem
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$nomeremetente  = $_POST['nome'];
$emailremetente = $_POST['email'];
$mensagemHTML = '<P>CONTATO DO SITE AFORUM.COM.BR</P><Br>
Nome: '.$nomeremetente.'<br />
E-mail: '.$emailremetente.'<br />
Telefone: '.$_POST['telefone'].'<br />
Cidade: '.$_POST['cidade'].'<br />
Mensagem: '.nl2br($_POST['mensagem']).'

<hr>';
 
$mail->Body = $mensagemHTML;
$mail->AltBody = $mensagemHTML;
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
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
<title>Forum Model Management | Contato</title>
<link href="./css/estrutura_principal.css" rel="stylesheet" type="text/css" charset="utf-8">
</head>
<body class="contato">
<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PTGVDK"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PTGVDK');</script>

<!-- End Google Tag Manager -->
	Obrigado pelo seu contato.<br>Nossa equipe entrar&aacute; em contato.
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
<title>Forum Model Management | Contato</title>
<link href="./css/estrutura_principal.css" rel="stylesheet" type="text/css" charset="utf-8">
</head>
<body class="contato">
	N&atildeo foi poss&iacute;vel enviar o e-mail.<br>Tente novamente mais tarde.
</body>
</html>
<?
}
?>