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
                <div id="img_menu"></div>
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
                <div id="slider">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                      <!-- Full-width images with number and caption text -->
                      <div class="mySlides fade">
                        <img src="image/livraria1.jpg" height="450" width="1000" alt="image do slider">
                      </div>

                      <div class="mySlides fade">
                        <img src="image/livraria.jpg" height="450" width="1000" alt="image do slider">
                      </div>

                      <div class="mySlides fade">
                        <img src="image/livraria2.jpg" height="450" width="1000" alt="image do slider">
                      </div>

                      <!-- Next and previous buttons -->
                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                </div>
                <!-- MENU LATERAL DE ITENS -->
                <div id="caixa_menu_lateral">
                    <nav id="menu_lateral">
                    <ul>
                        <li>Romance</li>
                        <li>Suspense</li>
                    </ul>
                    </nav>
                </div>
                <!-- CAIXA PRINCIPAL QUE FICARA TODOS OS PRODUTOS-->
                <section id="caixa_itens">
                    <!-- DIV DA CAIXA QUE FIARA UM UNICO PRODUTO -->
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="image/produto1.jpg" width="140" height="200" alt="livro">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre">Como Eu Era Antes de Você</p>
                        </div>
                        <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. </p>
                        </div>
                        <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ 29,99</p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="image/produto4.jpg" width="140" height="200" alt="livro">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre">Uma Noite e Nada Mais</p>
                        </div>
                        <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. </p>
                        </div>
                        <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ 29,99</p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="image/produto5.jpg" width="140" height="200" alt="livro">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre">Novembro 9</p>
                        </div>
                        <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. </p>
                        </div>
                        <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ 29,99</p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="image/produto6.jpg" width="140" height="200" alt="livro">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre">Toda Sua</p>
                        </div>
                         <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. </p>
                        </div>
                        <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ 29,99</p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="image/produto7.jpg" width="140" height="200" alt="livro">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre">Mais Uma Chance ao Amor</p>
                        </div>
                        <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. </p>
                        </div>
                        <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ 29,99</p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="image/produto8.jpg" width="140" height="200" alt="livro">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre">Um Homem de Sorte</p>
                        </div>
                        <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre">A jovem e peculiar Louisa "Lou" Clark transita de emprego a emprego para ajudar a sustentar sua família. </p>
                        </div>
                         <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ 29,99</p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>
                    </div>
                </section>
				<div class="redes_sociais"> 
                    <img src="image/instagram.png" alt="instagram icone">
                    <img src="image/facebook.png" alt="facebook icone">
                    <img src="image/twitter.png" alt="twitter icone">
				</div>
                <footer class="footer">
                    <img src="image/footer.png" alt="logo do rodapé">
                    <div class="titulo_footer">Livraria Woody Woodpecker 2018</div>
                </footer>
                <!-- SCRIPT PARA O SLIDER - colocado depois do footer para carregar depois que o site estiver todo na pagina -->
                    <script>
                        var slideIndex = 1;
                            showSlides(slideIndex);

                            // Next/previous controls
                            function plusSlides(n) {
                              showSlides(slideIndex += n);
                            }

                            // Thumbnail image controls
                            function currentSlide(n) {
                              showSlides(slideIndex = n);
                            }

                            function showSlides(n) {
                              var i;
                              var slides = document.getElementsByClassName("mySlides");
                              var dots = document.getElementsByClassName("dot");
                              if (n > slides.length) {slideIndex = 1} 
                              if (n < 1) {slideIndex = slides.length}
                              for (i = 0; i < slides.length; i++) {
                                  slides[i].style.display = "none"; 
                              }
                              for (i = 0; i < dots.length; i++) {
                                  dots[i].className = dots[i].className.replace(" active", "");
                              }
                              slides[slideIndex-1].style.display = "block"; 
                              dots[slideIndex-1].className += " active";
                            }
                    </script>
            </div>
        </div>
    </body>
</html>