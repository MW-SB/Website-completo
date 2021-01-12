<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8"> 
    <title>Sign in</title>
    <link rel="stylesheet" href="estiloAlterar.css">
</head>
<body>
    <div id="pdivisao"> 
        <h1>Loja de Empréstimos</h1>
    </div>
    <!--Formulário para atualização de senha-->
    <form name="formNovaSenha" method="POST" action="processaNovaSenha.php">
        <h2>Alteração de Senha</h2>
        <div class="sDiv">
            <p>Digite sua nova senha:</p>
            <input type="password" name="novaSenha"></input>
            <p>Confirme sua senha:</p>
            <input type="password" name="novaSenha"></input>
            <!--Realiza a confirmação da nova senha-->
            <p>
                <input type="submit" name="confirmar" value="Confirmar"></input>
            </p>
        </div>    
    </form>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>