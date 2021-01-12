<?php
    //Verifica se o método post está vazio, se caso estiver, realiza a primeira inserção
	if(empty($_POST)){
       	$itens = array($_SESSION['produtos'], $_SESSION['txtnumber'], $_SESSION['dataEmp']);
    	foreach ($itens as $i) {
        echo $i."</br>";
    	}
    } else {
    	$novoItem = array($_SESSION['produtos'], $_SESSION['txtnumber'], $_SESSION['dataEmp']);
    	foreach ($itens as $i) {
        echo $i."</br>";
    	}
    }
?>