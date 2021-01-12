<?php
	//Inicializa a variável SESSION
	session_start();

	//Todas as informações passadas pelo usuário são atribuídas a uma determinada variável, utilizando o método post
	$nome = $_POST['txtNome'];
    $sexo = $_POST['sexo'];
    $dataNasc = $_POST['data'];
    $telefone = $_POST['telefone'];
    $email = $_POST['nmEmail'];

    //Realiza um novo cálculo da idade do usuário
    $atual = date('Y');
    list($ano, $mes, $dia) = explode('-', $dataNasc);
    $idade = $atual - $ano;

    //São criadas variáveis com o nome do host, do usuário, senha do banco de dados, assim como a base de dados
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'lojaemprestimo';

	//Realiza a conexão com o banco de dados
	$conexao = mysqli_connect($host, $user, $password, $db_name);

	//Verifica se a conexão com o banco de dados funcionou, senão funcionar será apresentado uma mensagem de erro
	if(!$conexao){
		die('Erro na conexão com banco de dados!');
	}

	//Cria uma variável com as atualizações que devem ser feitas na tabela Cadastro da base de dados
	$atualizar = "UPDATE cadastro SET nome = '$nome', idade = '$idade', nascimento = '$dataNasc', sexo = '$sexo', telefone = 'telefone', email = '$email' WHERE email = $_SESSION['usuario']";

	//Realiza a atualização
	$update = mysqli_query($conexao, $atualizar);

	//Verifica se a atualização funcionou, senão funcionar é apresentado uma mensagem de erro
	if(!$update){
		die("Erro na atualização dos dados");
	}

	//Redireciona o usuário para a sua página
	header("Location: paginaUsuario.php");
?>