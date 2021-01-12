<?php
  //Inicializa a variável SESSION
	session_start();

  //Todas as informações passadas pelo usuário são atribuídas a uma determinada variável, utilizando o método post
	$opcao = $_POST['produtos'];
	$quant = $_POST['txtnumber'];
  //O nome do usuário é colocado como global
  $nomeUsuario = $_SESSION['nome'];
  //É criado uma variável com a data atual do sistema
  $dataEmp = date('d/m/Y');
  //É calculado a próxima data de entrega do item
  $nextWeek = time() + (7 * 24 * 60 * 60);
  $dataDevol = date('d/m/Y', $nextWeek);

  //Verrifica qual o item escolhido pelo usuário e atrbuí um nome a esse item 
  if($opcao == 'valor1'){
  	$nomeItem = 'HTML&CSS: Projete e Construa Websites';
  } elseif ($opcao == 'valor2') {
  	$nomeItem = 'Introdução a programação com Python';
  } elseif ($opcao == 'valor3') {
  	$nomeItem = 'O Algoritmo Mestre';
  } elseif ($opcao == 'valor4') {
  	$nomeItem = 'JavaScript: O Guia Definitivo';
  } elseif ($opcao == 'valor5') {
  	$nomeItem = 'Código Limpo';
  } elseif ($opcao == 'valor6') {
  	$nomeItem = 'Java: Como Programar';
  } elseif ($opcao == 'valor7') {
  	$nomeItem = 'Sistemas Embarcados';
  } elseif ($opcao == 'valor8') {
  	$nomeItem = 'Segurança em Redes';
  } elseif ($opcao == 'valor9') {
  	$nomeItem = 'Redes: Guia Prático';
  } elseif ($opcao == 'valor10') {
  	$nomeItem = 'Robótica Industrial';
  } elseif ($opcao == 'valor11') {
  	$nomeItem = 'Filmadora Sony';
  } elseif ($opcao == 'valor12') {
  	$nomeItem = 'Caixa Amplificadora';
  } elseif ($opcao == 'valor13') {
  	$nomeItem = 'Caixa de som';
  } elseif ($opcao == 'valor14' ) {
  	$nomeItem = 'Cadeira de Plástico';
  } elseif ($opcao == 'valor15') {
  	$nomeItem = 'Mesa de Plástico';
  } else {
  	$nomeItem = 'Carretinha';
  }

  //As variáveis são colocadas como globais para que possam ser usadas em outra página
  $_SESSION['produtos'] = $nomeItem;
  $_SESSION['txtnumber'] = $quant;
  $_SESSION['dataEmp'] = $dataEmp;
  $_SESSION['dataDevol'] = $dataDevol;

  //São criadas variáveis com o nome do host, do usuário, senha do banco de dados, assim como a base de dados
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'lojaemprestimo';

  //Realiza a conexão com o banco de dados
	$conexao = mysqli_connect($host, $user, $password, $db_name);

  //Verifica se a conexão com o banco de dados funcionou, senão funcionar será apresentado uma mensagem de erro
	if(!$conexao){
		die('Erro na coneão com o banco de dados');
	}

  //Cria uma variável com as inserções que devem ser feitas na tabela Empréstimo da base de dados
	$query = "INSERT INTO emprestimo (nomeUsuario, nomeItem, quantidade, dataEmprestimo, dataDevolucao) VALUES ('$nomeUsuario', '$nomeItem', '$quant', '$dataEmp', '$dataDevol')";

  //Realiza a inserção dos dados na tabela
	$insert = mysqli_query($conexao, $query);

  //Se caso algo der errado é apresentado uma mensagem de erro
	if(!$insert){
		die('Erro ao inserir os dados');
	}

  //Redireciona o usuário para a página de validação de empréstimo
	header("Location: validaEmprestimo.php");
?>