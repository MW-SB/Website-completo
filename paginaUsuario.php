<?php
    //Inicializa a variável SESSION para que possa ser usada na página
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Empréstimos</title>
    <link rel="stylesheet" href="estiloUsuario.css">
</head>
<body>
	<div class="pdivisao">
        <h1>Loja de Empréstimos</h1>
    </div>
    <div class="sdivisao">
    	<h2>Itens</h2>
        <!--Links para as páginas principais.(Nessa página já é possível realizar os empréstimos dos produtos)-->
    	<a href="emprestimo.php" id="link">Realizar Empréstimos</a>
    	<a href="contato.php" id="link1">Contato</a>
        <a href="sobre.html" id="link2">Sobre nós</a>
        <a href="meusDados.php" id="link3">Meus dados</a>	
    </div>
    <div id="tabcontent1"> 
        <ul class="separator">
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro1.png">
                    </div>
                    <div class="texto">
                        <p id="item1">
                            <strong>HTML & CSS: Projete e Construa Websites</strong>
                        </p>
                        <p>
                            Esse livro ensina como utilizar a lingugem de hipertexto Html e a linguagem de estilos Css, 
                            de forma prática e bem estruturada. 
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro2.png">
                    </div>
                    <div class="texto">
                        <p id="item2">
                            <strong>Introdução a programação com Python</strong>
                        </p>
                        <p>
                            Esse livro ajudrá aqueles que estão começando a trajetória de programção, ensinando, 
                            através da linguagem python, os conceitos básicos.  
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro3.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>O Algoritmo Mestre</strong>
                        </p>
                        <p>
                            Esse livro é o guia essencial para qualquer pessoa que
                            queira saber não só como a revolução ocorrerá, mas como estar na dianteira.
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>            
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro4.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>JavaScript: O Guia Definitivo</strong>
                        </p>
                        <p>
                            Esse livro é recomendado para aquelas pessoas que desejam conhecer e se aprofundar na linguagem JavaScript.
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro5.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Código Limpo</strong>
                        </p>
                        <p>
                            Esse livro ajudará no desenvolvimento de códigod limpos, bem estruturados e com uma boa legibilidade.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro6.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Java: Como Programar</strong>
                        </p>
                        <p>
                            Esse livro é destinado para pessoas que querem conhecer a linguagem Java, desde o básico até o avançado, 
                            trazendo exemplos práticos e um conteúdo fácil de entender. 
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro7.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Sistemas Embarcados</strong>
                        </p>
                        <p>
                            Esse livro é indicado para diversos profissionais da área de TI. Traz conceitos fundamentais sobre 
                            desenvolvimento de firmware, processamentos digitais e outras questões envolvendo esse tema.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro8.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Segurança em Redes</strong>
                        </p>
                        <p>
                            esse livro traz concitos de segurança da informaçõa, integridade, confiabilidade e outros temas envolvendo a 
                            área de segurança na internet.   
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro9.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Redes: Guia Prático</strong>
                        </p>
                        <p>
                            Esse livro é destinado para aqueles que querem conhecer mais sobre montagens de redes e configuração de servidores.
                            Traz diversos conceitos sobre os temas de forma prática e objetiva.
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/livro10.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Robótica Industrial</strong>
                        </p>
                        <p>
                            Esse livro traz os principios e fundamentos tecnológicos que envolvem a área de robótica industrial.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/filmadora.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Filmadora Sony</strong>
                        </p>
                        <p>
                            É uma boa opção para quem quer gravar os melhores momentos da vida e com uma boa qualidade.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>    
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/caixa-amplificadora.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Caixa Amplificadora</strong>
                        </p>
                        <p>
                            É ideal para quem vai ir tocar em um evento porém não tem uma caixa amplificadora na mão.     
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>    
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/caixa-de-som.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Caixa de som</strong>
                        </p>
                        <p>
                            É uma boa opção para quem quer realizar uma festa, ou incrementar seus eventos acústicos.   
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>    
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/cadeira-de-plastico.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Cadeira de Plástico</strong>
                        </p>
                        <p>
                            É uma ótima opção para quem quer usar em algum evento, como festa de aniversário, ou um encontro de familia, 
                            e são bem resistentes.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/mesa-de-plastico.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Mesa de Plástico</strong>
                        </p>
                        <p>
                            É uma ótima opção para quem quer usar em algum evento, como festa de aniversário, ou um encontro de familia, 
                            e acompanha ou não as cadeiras.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="estrutura">
                    <div class="imagem">
                        <img src="Imagens/carretinha.png">
                    </div>
                    <div class="texto">
                        <p>
                            <strong>Carretinha</strong>
                        </p>
                        <p>
                            É uma ótima opção para transportar cargas que não cabem em um carro, ou que pode estragá-lo.    
                        </p>
                    </div>
                    <div class="obs">
                        <p>
                            OBS: A loja mantém todos os objetos em bom estado para que possam ser usados por um longo tempo.
                        </p> 
                    </div>
                </div>
            </li>
        </ul>    
    </div>
    <p id="pdiv">
        Aqui vai as propagandas. 
    </p>
    </div>
<footer>
    <p>&copy; Murilo Bianco</p>
</footer>
</body>
</html>