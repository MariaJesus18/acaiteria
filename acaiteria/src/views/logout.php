<?php
// Logout para destruir os cookies gerados

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {

//inicia ou recupera a sessao atual
	session_start();
	//destroi variaveis da sessao
	session_destroy();

	//limpa os cookies gerados
	setcookie(session_name(), '', 0, '/');

	//manda para o index
	header("location: /");
	exit();
}