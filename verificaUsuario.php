<?php
	//Inicializa a variável SESSION
	session_start();
	//Verifica a variavel SESSION que foi atrbuída ao campo usuário
	if(!$_SESSION['usuario']){
		header("Location: login.php");
    	exit();
	}
?>