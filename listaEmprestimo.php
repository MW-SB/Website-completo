<?php
    ////Inicializa a variável SESSION para que possa ser usada na página
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
        <!--Formulário que exibe a lista de itens que foram emprestados-->
        <form name="formDados" method="POST" action="processaListaphp">
            <div class="divisao">
                <p>
                    <?php
                        //Exibe as informações processadas no documento processaLista.php
                        include("processaLista.php");
                    ?>
                </p>
            </div>
        </form>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>