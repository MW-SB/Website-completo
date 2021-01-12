<?php
//Inicializa a variável SESSION 
session_start();
//Destroí os dados das variáveis SESSION
session_destroy();
//Redireciona o usuário para a página inicial
header("Location: paginaInicial.html");
?>