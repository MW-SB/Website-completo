<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloContato.css">
    <title>Loja de Empréstimos</title>
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <section>
        <!--Formulário referente a mensagens enviadas a loja-->
        <form name="formContato" action="processaContato.php" method="POST">
            <div>
                <p>Nome Completo</p>
                <input type="text" name="nome" required="" placeholder="Digite o seu nome">
                <p>Digite seu Email</p>
                <input type="email" name="email" id="idEmail" required="" placeholder="Digite seu email">
                <p>Comentário:</p>
                <textarea name="coment" id="idComent" cols="40" rows="20"></textarea>
                <!--Realiza um submit para confirmar o envio da mensagem-->
                <p>
                    <input type="submit" name="Enviar" id="idEnviar">
                </p>
                <a href="paginaInicial.html">Voltar</a>
                <?php
                if(isset($_SESSION['mensagem_enviada'])):
                ?>
                <div class="sDiv">
                    <p>Mensagem enviada</p>    
                </div>
                <?php
                endif;
                unset($_SESSION['mensagem_enviada']);
                ?>
            </div>
        </form>
    </section>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>