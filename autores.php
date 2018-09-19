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
                <div id="caixa_autores">
                    <section class="sobre_autor">
                        <h2>Rupi Kaur</h2>
                        <p>É uma poetisa feminista contemporânea, escritora e artista da palavra falada. Ela é popularmente conhecida como Instapoet pela atenção que ela ganha online com seus poemas no Instagram. Ela publicou um livro de poesia e prosa intitulado "milk and honey" (Outros jeitos de usar a boca, no Brasil) em 2015. O livro aborda os temas violência, abuso, amor, perda e feminilidade.</p>
                    </section>
                    <div class="livros_autor">
                        <div class="caixa_poema">
                            "Você me diz para ficar quieta porque minhas opiniões me deixam menos bonita, mas não fui feita com um incêndio na barriga para que pudessem me apagar. Não fui feita com leveza na língua para que fosse fácil de engolir. Fui feita pesada, metade lâmina, metade seda. Difícil de esquecer e não tão fácil de entender."
                            </div>
                    </div>
                </div>
                    <!-- começo das redes sociais-->
                    <div class="redes_sociais">
                    <img src="image/instagram.png" alt="instagram icone">
                    <img src="image/facebook.png" alt="facebook icone">
                    <img src="image/twitter.png" alt="twitter icone">
				</div>
                <footer class="footer">
                    <img src="image/footer.png" alt="logo do rodapé">
                    <div class="titulo_footer">Livraria Woody Woodpecker 2018</div>
                </footer>
            </div>
        </div>
    </body>
</html>