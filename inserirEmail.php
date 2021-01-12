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
    <!--Formulário para a inserção de email, referente a atualização de senha-->
    <form name="formEmail" method="POST" action="processaEmail.php">
        <div class="sDiv">
            <p>Informe seu email</p>
            <input type="email" name="email" required="">
            <!--Esse submit realiza a confirmação do email-->
            <p>
                <input type="submit" name="Enviar"></input>
            </p>
        </div>
        <?php
        //verifica se a variável $_SESSION['email_invalido'] foi inicializada e se caso foi, mostra a mensagem 'email inválido'
        if(isset($_SESSION['email_invalido'])):
        ?>
        <div class="tDiv">
            <p>Email inválido</p>
        </div> 
        <?php
        endif;
        unset($_SESSION['email_invalido']);
        ?>   
    </form>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>