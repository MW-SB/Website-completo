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
		die('Erro na conexão com o banco de dados.');
	}

	//Atribuí a uma variavel o valor de email
	$email = mysqli_real_escape_string($conexao, $_POST['email']);

	//A variavel pesquisa recebe um select para a verificação de existencia do email
	$pesquisa = "SELECT email FROM cadastro WHERE email = '{$email}'";

	//Realiza a pesquisa do email digitado pelo usuário
	$valida = mysqli_query($conexao, $pesquisa);

	//Recebe o valor retornado, se for 0, o email não existe, se for 1, ele existe 
	$row = mysqli_num_rows($valida);

	//Se o email existir realiza o redirecionamento para a página de atualização de senha, caso contrário apresentará uma mensagem de email inválido
	if($row == 1){
		$_SESSION['senhaEmail'] = $email;
		header("Location: mudarSenha.php");
		exit();
	} else {
		$_SESSION['email_invalido'] = true;
		exit();
	}
?>