<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Livraria Woody Woodpecker</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <body>
        <nav id="menu_principal">
            <div id="caixa_menu">
                <!-- LOGO DO MENU -->
                <a href="home.php"><div id="img_menu"></div></a>
                <!-- MENU EM FORMA DE LISTA-->
                <div id="menu">
                    <ul>
                        <li> <a href="sobre.php">sobre</a> </li>
                        <li> <a href="autores.php">autores</a></li>
                        <li> <a href="destaque.php">destaques</a></li>
                        <li> <a href="nossaslojas.php">Nossas Lojas</a></li>
                        <li> <a href="promocoes.php">promocoes</a></li>
                        <li> <a href="contato.php">contato</a></li>
                    </ul>
                </div>
                <!-- LOGIN DO USUÁRIO NO MENU -->
                <div class="caixas_autenticacao">
                    <div class="caixa_usuario">
                        <p>Usuario:</p>
                        <input type="text" name="txtUsuario">
                    </div>
                    <div class="caixa_senha">
                        <p>Senha:</p>
                        <input type="text" name="txtSenha">
                    </div>
                    <div class="caixa_botao">
                    <input type="button" value="login" class="botao_menu">
                    </div>
                </div>
            </div>
        </nav>
        <!-- CAIXA PRINCIPAL DEFINIDA PARA OS ITENS-->
        <div id="caixa_principal">
            <div id="principal">
                <section id="caixa_sobre_principal">
                    <!-- CAIXA DE TEXTO SOBRE -->
                    <div class="texto_sobre"> 
                        <h1> O que é a Woody Woodpecker?</h1>
                        <p>Uma história de sucesso que se inicia com o sonho de Eva Herz: construir uma livraria para promover o encontro de pessoas com os mais variados interesses. E foi em busca desse sonho que, há 70 anos, Dona Eva fundou a Livraria Woody Woodpecker. A empresa teve um início tímido na casa da família Herz e, atualmente, é referência nacional com 18 lojas distribuídas pelo Brasil. Atualmente, a Livraria Woody Woodpecker se dedica a oferecer um espaço multimídia, onde a busca pelo produto é apenas o início de uma jornada enriquecedora: nossas lojas dão vida à cultura por meio de seu extenso acervo e também de seus teatros, auditórios, cafés
e eventos gratuitos.</p>
                    </div>
                    <!-- IMAGEM -->
                    <div class="imagem_sobre"></div>
                </section>
                <footer class="footer">
                    <img src="image/footer.png" alt="logo do rodapé">
                    <div class="titulo_footer">Livraria Woody Woodpecker 2018</div>
                </footer>
            </div>
        </div>
    </body>
</html>