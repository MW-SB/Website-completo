<?php
    //Inicializa a variável SESSION para que possa ser usada na página
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8"> 
    <title>Loja de Empréstimos</title>
    <link rel="stylesheet" href="estiloLogin.css">
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <!--Formulário para auticação do usuário-->
    <form name="formLogin" method="POST" action="processaLogin.php">
        <div class="sDiv">
            <div>
                <img src="Imagens/icone-de-usuario.png">
            </div>    
            <div>
                <p>E-mail</p>
                <input type="email" name="usuario" placeholder="Digite seu email" required=""></input>
                <p>Senha</p>
                <input type="password" name="senha" placeholder="Digite a senha" required=""></input>
                <p>
                    <input type="submit" value="Entrar"></input>
                </p>
                <!--Link para redirecionamento para a página de inserção de email para realizar a atualização da senha-->
                <p>
                    <a href="inserirEmail.php">Esqueci minha senha</a>
                </p>
                <!--Link para a página de cadastramento de usuário-->
                <p>
                    <a href="cadastro.php">Cadastrar</a>
                </p>
            </div>
        </div>    
    </form>
    <?php
    if(isset($_SESSION['invalido'])):
    ?>
    <div class="tDiv">
        <p>Usuário ou senha inválidos</p>
    </div>
    <?php
    endif;
    unset($_SESSION['invalido']);
    ?>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>