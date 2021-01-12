<?php
    //Inicializa a variável SESSION
    session_start();

    //Todas as informações passadas pelo usuário são atribuídas a uma determinada variável, utilizando o método post
    $nome = $_POST['txtNome'];
    $sexo = $_POST['sexo'];
    $dataNasc = $_POST['data'];
    $telefone = $_POST['telefone'];
    $email = $_POST['nmEmail'];
    $senha = $_POST['nmSenha'];

    //Realiza o cálculo da idade do usuário
    $atual = date('Y');
    list($ano, $mes, $dia) = explode('-', $dataNasc);
    $idade = $atual - $ano;
    
    //As variáveis são colocadas como globais para que possam ser usadas em outra página
    $_SESSION['nome'] = $nome;
    $_SESSION['sexo'] = $sexo;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['dataNasc'] = $dataNasc;
    $_SESSION['idade'] = $idade; 

    //São criadas variáveis com o nome do host, do usuário, senha do banco de dados, assim como a base de dados
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'lojaemprestimo';

    //Realiza a conexão com o banco de dados
    $conexao = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    //Verifica se a conexão com o banco de dados funcionou, senão funcionar será apresentado uma mensagem de erro
    if(!$conexao){
    	die ("Erro na conexao com o banco de dados.");
    }
    
    //Cria uma variável com as inserções que devem ser feitas na tabela Cadastro da base de dados
    $insert = "INSERT INTO cadastro(nome, idade, nascimento, sexo, telefone, email, senha) VALUES ('$nome', '$idade', '$dataNasc', '$sexo', '$telefone', '$email', md5('$senha'))";

    //Realiza a inserção dos dados na tabela. Se caso algo der errado é apresentado uma mensagem de erro
    mysqli_query($conexao, $insert) or die ("Erro no cadastro");
    
    //Redireciona o usuário para a página de confirmação de cadastro
    header("Location: cadastroCompleto.html");
?>