<?
	/*
	 * Proteção contra SQL Injection
	 */

	$path_imagens = "./sistema/modelos/site/";
	//$path_imagens = "./sistema/modelos/site/";
	date_default_timezone_set('America/Sao_Paulo');
	require_once("./class/dataprotection.php");
	$dp = new EurekaDataProtection();
	$dp->parseRequest();

	/*
	Sistema Administrador FORUM MODEL
	Sistema de uso privado exclusivamente FORUM MODEL
	*/

	ini_set("display_errors", E_ERROR);
	error_reporting(E_ERROR);
	
	require_once("./class/sqlapi.php");
	$cnxObj = new SQLAPI("mysql", "mysql01.aforum.hospedagemdesites.ws", "aforum", "aF0rum98", "aforum");
//	$cnxObj = new SQLAPI("mysql", "localhost", "root", "", "teste");
	if(!$cnxObj->isOk){
		echo utf8_encode("Erro de configuração com a classe de conexão. ".$cnxObj->error);
	}

	// classe para gerenciamento dos modelos
	require_once("./class/modelos.php");
	$modelObj = new MODELOS($cnxObj);
	if(!$modelObj){
		echo "Erro de configuração da classe de modelos";
	}

	// classe para gerenciamento dos modelos
	require_once("./class/videos.php");
	$vidObj = new VIDEOS($cnxObj);
	if(!$vidObj){
		echo "Erro de configuração da classe de videos";
	}

?>