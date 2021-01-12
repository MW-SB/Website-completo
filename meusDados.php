<?php
    //Inicializa a variável SESSION para que possa ser usada na página
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloDados.css">
    <title>Loja de Empréstimos</title>
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
        <!--Formulário para a exibição dos dados do usuário-->
        <form name="formDados" method="POST" action="processaDados.php">
            <div class="divisao">
            <p>Nome:</p>
            <p>
                <strong>
                    <?php
                        echo $_SESSION['nome'];
                    ?>
                </strong>
            </p>
            <p>Sexo</p>
            <p>
                <strong>
                    <?php
                        echo $_SESSION['sexo'];
                    ?>  
                </strong>
            </p>
            <p>E-mail</p>
            <p>
                <strong>
                    <?php
                        echo $_SESSION['usuario'];
                    ?>
                </strong>  
            </p>
            <p>Data de nascimento</p>
            <p>
                <strong>
                    <?php
                        echo $_SESSION['dataNasc'];
                    ?>
                </strong>
            </p>
            <p>Telefone</p>
            <p>
                <strong>
                    <?php
                        echo $_SESSION['telefone'];
                    ?>
                </strong>
            </p>
            <!--Link para a página de atualização dos dados cadastrais-->
            <p>
                <a href="alterarDados.php">Alterar Dados</a>
            </p>
            <!--Link para a página que lista os itens emprestados-->
            <p>
                <a href="listaEmprestimo.php">Minha lista de empréstimos</a>
            </p>
            <!--Link que realiza o logout do usuário-->
            <p>
                <a href="logout.php">Sair</a>
            </p>
        </div>
        </form>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>