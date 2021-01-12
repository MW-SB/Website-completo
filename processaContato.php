<?php
	session_start();

	//Todas as informações passadas pelo usuário são atribuídas a uma determinada variável, utilizando o método post
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$coment = $_POST['coment']; 

	//São criadas variáveis com o nome do host, do usuário, senha do banco de dados, assim como a base de dados
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db_name = 'lojaemprestimo';

	//Realiza a conexão com o banco de dados
	$conexao = mysqli_connect($host, $username, $password, $db_name);

	//Verifica se a conexão com o banco de dados funcionou
	if(!$conexao){
		die ('Erro na conexao;');
	}

	//Cria uma variável com as inserções que devem ser feitas na tabela Mensagem da base de dados
	$insertTable = "INSERT INTO mensagem(nome, email, msg) VALUES ('$nome', '$email', '$coment')";

	//Realiza a inserção dos dados na tabela. Se caso algo der errado é apresentado uma mensagem de erro
	$insercao = mysqli_query($conexao, $insertTable);

	if(!$insercao){
		die('Erro na transmissão da mensagem!');
	} else {
		//Redireciona o usuário para a mesma página para que uma nova mensagem possa ser enviada
		header("Location: contato.php");
		//Uma mensagem de envio será exibida
		$_SESSION['mensagem_enviada'] = true;
		exit();
	}	
?>