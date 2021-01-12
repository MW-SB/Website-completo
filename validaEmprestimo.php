<?php
    //Inicializa a variável SESSION
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloValidaEmprestimo.css">
    <title>Document</title>
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <section>
        <!--Exibe o nome do item, assim como a quantidade e as datas do empréstimo e da devolução-->
        <h2>Item emprestado</h2>
        <p>
            Nome do item:
        </p>
        <p>
            <strong>
                <?php
                    echo $_SESSION['produtos']; 
                ?>
            </strong>     
        </p>
        <p>
            Quantidade:
        </p> 
        <p>
            <strong>
                <?php
                    echo $_SESSION['txtnumber'];
                ?>
            </strong>
        </p>
        <p>
            Data do empréstimo:
        </p>
        <p>
            <strong>
                <?php
                    echo $_SESSION['dataEmp'];
                ?>
            </strong>
        </p>
        <p>
            Data de devolução:
        </p>
        <p>
            <strong>
                <?php
                    echo $_SESSION['dataDevol'];
                ?>
            </strong> 
        </p>
        <a href="emprestimo.php">Voltar</a>
    </section>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>