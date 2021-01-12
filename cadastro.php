<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Empréstimo</title>
    <link rel="stylesheet" href="estiloCadastro.css">
</head>
<body>
    <div id="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <header>
        <h2>Cadastro do Usuário</h2>
    </header>
    <section>
        <!--Formulário para cadastrar o usuário-->
        <form name="formCadastro" id="formCadastro" method="POST" action="processaCadastro.php">
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
			<p>Senha(minimo 8 caracteres)</p>
            <input type="password" name="nmSenha" id="idSenha" minlength="8" required="" placeholder="Digite a senha"></input>
			<p>Confirme a senha</p>
			<input type="password" name="nmConfirma" id="idConfirma" required="" placeholder="Digite a senha novamente" onblur="confirmaSenha()"></input>
            <!--O submit realiza a confirmação do cadastro do usuário-->
			<p>
				<input type="submit" value="Confirmar"></input>
			</p>
		</form>
    </section>
    <footer>
        <p>&copy; Murilo Bianco</p>
    </footer>
    <!--Esse script compara os campos de senha e confirmação de senha para ver se são iguais-->
    <script type="text/javascript">
        function confirmaSenha(){
            senha = document.getElementById("idSenha").value;
            confirma = document.getElementById("idConfirma").value;
            if(senha != confirma){
                alert("confirme sua senha novamente!");
            }
        }
    </script>
</body>
</html>