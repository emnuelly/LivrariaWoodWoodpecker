<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Livraria Woody Woodpecker</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <!-- final da formatação -->
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
                 <div id="caixa_promocoes">
                     <!-- TITULO DA PAGINA -->
                    <div id="titulo_promocoes">Promoções do mês:</div>
                     <!-- IMAGEM -->
                    <div class="livro_promocao">
                        <img src="image/produto1.jpg" width="250" height="350" alt="Livro">
                     </div>
                     <!-- CAIXA DA DESCRIÇÃO -->
                    <div class="descricao_promocao">
                        <div class="caixa_descricao">
                            <!-- TITULO DO LIVRO -->
                            <div class="titulo_promocao"> Como Eu Era Antes de Você </div>
                            <!-- DESCRIÇAO DO LIVRO -->
                            <div class="sobre_promocao">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. Entretanto, sua atitude alegre é testada quando se torna cuidadora de Will Traynor. </div>
                            <!-- PREÇO ANTIGO -->
                            <div class="preco_antigo">de R$ 69,99</div>
                            <!-- PREÇO NOVO PARA FAZER A PROMOÇAO -->
                            <div class="preco_novo"> por R$ 24,99</div>
                            <!-- BOTÃO DE COMPRA -->
                            <div class="botao_compre">COMPRE</div>
                        </div>
                    </div>
                    <!-- IMAGEM -->
                    <div class="livro_promocao">
                        <img src="image/produto2.jpg" width="250" height="350" alt="Livro">
                     </div>
                     <!-- CAIXA DA DESCRIÇÃO -->
                    <div class="descricao_promocao">
                        <div class="caixa_descricao">
                            <!-- TITULO DO LIVRO -->
                            <div class="titulo_promocao"> Querido John </div>
                            <!-- DESCRIÇAO DO LIVRO -->
                            <div class="sobre_promocao">Quando o soldado John Tyree conhece Savannah Curtis, universitária idealista, um forte romance nasce entre eles. Durante sete anos de um tumultuado relacionamento, o casal se encontra apenas esporadicamente e mantém contato por meio de cartas de amor. </div>
                            <!-- PREÇO ANTIGO -->
                            <div class="preco_antigo">de R$ 54,99</div>
                            <!-- PREÇO NOVO PARA FAZER A PROMOÇAO -->
                            <div class="preco_novo"> por R$ 19,99</div>
                            <!-- BOTÃO DE COMPRA -->
                            <div class="botao_compre">COMPRE</div>
                        </div>
                     </div>
                    <!-- IMAGEM -->
                    <div class="livro_promocao">
                        <img src="image/produto3.jpg" width="250" height="350" alt="Livro">
                     </div>
                     <!-- CAIXA DA DESCRIÇÃO -->
                    <div class="descricao_promocao">
                        <div class="caixa_descricao">
                            <!-- TITULO DO LIVRO -->
                            <div class="titulo_promocao"> Um Porto Seguro </div>
                            <!-- DESCRIÇAO DO LIVRO -->
                            <div class="sobre_promocao">Uma mulher misteriosa se muda para uma pequena cidade e recomeça sua vida. Apesar da estar determinada a não formar laços afetivos, ela não consegue e acaba levantando questionamentos sobre seu passado, que esconde um terrível segredo </div>
                            <!-- PREÇO ANTIGO -->
                            <div class="preco_antigo">de R$ 29,99</div>
                            <!-- PREÇO NOVO PARA FAZER A PROMOÇAO -->
                            <div class="preco_novo"> por R$ 9,99</div>
                            <!-- BOTÃO DE COMPRA -->
                            <div class="botao_compre">COMPRE</div>
                        </div>
                     </div>
                </div>
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