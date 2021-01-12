<?php
	//Inicializa a variável SESSION
	session_start();

	//São criadas variáveis com o nome do host, do usuário, senha do banco de dados, assim como a base de dados
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'lojaemprestimo';

	//Realiza a conexão com o banco de dados
	$conexao = mysqli_connect($host, $user, $password, $db_name);

	//Verifica se a conexão com o banco de dados funcionou, senão funcionar será apresentado uma mensagem de erro
	if(!$conexao){
		die("Falha na conexão com o banco de dados.");
	}
 	
 	//Verifica se os campos usuário e senha estão preeencidos
	if(empty($_POST['usuario'] || empty($_POST['senha']))){
		header("Location: login.php");
		exit();
	}

	//Atrbuí os dados digitados pelo usuário as duas variáveis
	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	//É atribuido a variável $query um select a tabela cadastro
	$query = "SELECT nome FROM cadastro WHERE email = '{$usuario}' AND senha = md5('{$senha}')";

	//Realiza a pesquisa na tabela
	$result = mysqli_query($conexao, $query);

	//É atrbuída a variável $row o resultado dessa pesquisa
	$row = mysqli_num_rows($result);

	//Se o usuário existir, esse é redirecionado para a sua página, caso contrário é apresentado uma mensagem de usuário inválido
	if($row == 1){
		$_SESSION['usuario'] = $usuario;
		header("Location: paginaUsuario.php");
		exit();
	} else {
		$_SESSION['invalido'] = true;
		header("Location: login.php");
		exit();
	}
?>