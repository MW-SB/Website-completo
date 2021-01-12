<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Empréstimos</title>
    <link rel="stylesheet" href="estiloCadastro.css">
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <header>
        <h2>Alteração de Dados</h2>
    </header>
    <section>
        <!--Formulário para alteração de dados-->
        <form name="formAlterar" id="formAlterar" method="POST" action="processaDados.php">
			<p>Nome Completo:</p>
            <input type="text" name="txtNome" required="" placeholder="Digite seu nome"></input>
			<p>Sexo</p>
			<input type="radio" name="sexo" id="masc" value="masculino" required=""></input>
			<label>Masculino</label>
			<input type="radio" name="sexo" id="fem" value="feminino" required=""></input>
            <label>Feminino</label>
            <p>Data de Nascimento</p>
            <input type="date" name="data" id="idData" required=""></input>
            <p>Telefone</p>
            <input type="tel" name="telefone" required="" placeholder="0XX 11111-2222"></input>
            <p>E-mail</p>
            <input type="email" name="nmEmail" required="" placeholder="Digite seu email"></input>
            <!--Realiza um submit para confirma a alteração dos dados-->
			<p>
				<input type="submit" value="Confirmar"></input>
			</p>
		</form>
    </section>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
</body>
</html>