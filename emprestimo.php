<?php
    //inicializa a variavel SESSION para que possa ser usada na página
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Empréstimos</title>
    <link rel="stylesheet" href="estiloEmprestimo.css">
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <header>
        <h2>Realizar Empréstimo</h2> 
    </header>
    <section>
        <!--Formulário para empréstimos-->
        <form name="formEmprestimo" id="formEmprestimo" method="POST" action="processaEmprestimo.php">
            <div class="pdiv">
                <p>Selecione o produto desejado:</p>
                <select name="produtos" id="produtos">
                <option>Selecione</option>
                <option value="valor1">HTML&CSS:Projete e Contrua WebSites</option>
                <option value="valor2">Introdução a programação com Python</option>
                <option value="valor3">O Algoritmo Mestre</option>
                <option value="valor4">JavaScript: O Guia Definitivo</option>
                <option value="valor5">Código Limpo</option>
                <option value="valor6">Java: Como Programar</option>
                <option value="valor7">Sistemas Embarcados</option>
                <option value="valor8">Segurança em Redes</option>
                <option value="valor9">Redes: Guia Prático</option>
                <option value="valor10">Robótica Industrial</option>
                <option value="valor11">Filmadora Sony</option>
                <option value="valor12">Caixa Amplificadora</option>
                <option value="valor13">Caixa de som</option>
                <option value="valor14">Cadeira de Plástico</option> 
                <option value="valor15">Mesa de Plástico</option>
                <option value="valor16">Carretinha</option>
            </select>
            <p>
                OBS: O limite máximo de empréstimos por item é de 5. 
            </p>
            <p>
                OBS: O prazo para devolução é de 1 semana, sendo esse contado a partir da data do empréstimo. Haverá uma multa de 5,00/dia de atraso. Caso o produto seja danificado, será cobrado o valor de mercado do item emprestado. 
            </p>
            </div>
            <div class="sdiv">
                <!--Indica um limite para a quantidade a ser emprestada-->
                <label>Indique a quantidade(limite 5): </label>
                <input type="number" name="txtnumber" min=0 max=5></input>
                <!--Esse submit realiza a confirmação do empréstimo--> 
                <p>
                    <input type="submit" value="Confirmar"></input>
                </p>
                <!--Esse link retorna para a página do usuário-->
                <p>
                    <a href="paginaUsuario.php">Voltar</a>
                </p>
            </div>
		</form>
    </section>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>