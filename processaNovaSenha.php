<?php
	//Inicializa a variável SESSION
	session_start();

	//Todas as informações passadas pelo usuário são atribuídas a uma determinada variável, utilizando o método post
	$novaSenha = $_POST['novaSenha'];
	$email = $_SESSION['senhaEmail'];

	//São criadas variáveis com o nome do host, do usuário, senha do banco de dados, assim como a base de dados
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'lojaemprestimo'; 

	//Realiza a conexão com o banco de dados
	$conexao = mysqli_connect($host, $user, $password, $db_name);

	//Verifica se a conexão com o banco de dados funcionou, senão funcionar será apresentado uma mensagem de erro
	if(!$conexao){
		die('Erro na conexão com o banco de dados.');
	}

	//É atribuída a variável $atualiza o update do campo senha da tabela cadastro
	$atualiza = "UPDATE cadastro SET senha = md5('$novaSenha') WHERE email = '$email'";

	//Realiza a atualização do campo senha
	$result = mysqli_query($conexao, $atualiza);

	//Verifica se a atualização funcionou, caso contrário será apresentado uma mensagem de erro
	if($result == true){
		header("Location: atualizacaoSenha.html");
		exit();
	} else {
		die('Erro na atualização.');
	}
?>