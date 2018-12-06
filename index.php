<?php
    require_once("conexao.php");
    require_once("login.php");

    if(isset($_POST['btnLogin'])){
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];
        login($email, $senha);
    }

    $conexao = conexaoDb();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Livraria Woody Woodpecker</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="icon" href="image/chat.png" type="image/x-icon" />
    <link rel="shortcut icon" href="image/chat.png" type="image/x-icon" />
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
                        <li> <a href="faleconosco.php">contato</a></li>
                        
                    </ul> 
                </div>
                <!-- LOGIN DO USUÁRIO NO MENU -->
                <div class="caixas_autenticacao">
                    <form action="index.php" method="post" name="frmLogin" >
                    <div class="caixa_usuario">
                        <p>Usuario:</p>
                        <input type="text" name="txtEmail">
                    </div>
                    <div class="caixa_senha">
                        <p>Senha:</p>
                        <input type="password" name="txtSenha">
                    </div>
                    <div class="caixa_botao">
                    <input type="submit" value="login" name="btnLogin" class="botao_menu">
                    </div>
                        </form>
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
                    <?php 
                     $sql = "SELECT * FROM tbl_categoria where status=1";

                    $select = mysqli_query($conexao, $sql);
       
                    while($rs = mysqli_fetch_array($select)){
                   
                        
                    ?>
                        <li><?php echo($rs['nomeCategoria']) ?></li>
                    </ul>
                    <?php } ?>
                    </nav>
                </div>
                <!-- CAIXA PRINCIPAL QUE FICARA TODOS OS PRODUTOS-->
                <section id="caixa_itens">
                    <!-- DIV DA CAIXA QUE FIARA UM UNICO PRODUTO -->
                    <?php 
                     $sql = "SELECT * FROM tbl_livro where status=1 ORDER BY RAND( )";

                    $select = mysqli_query($conexao, $sql);
       
                    while($rs = mysqli_fetch_array($select)){
                   
                        
                    ?>
                    <div class="caixa_produto">
                        <!-- IMAGEM -->
                        <div class="img_produto">
                            <img src="cms/<?php echo($rs['fotoLivro']) ?>" width="140" height="200" alt="Desculpe, iremos resolver!">
                        </div>
                        <!-- NOME DO LIVRO -->
                        <div class="titulo_produto">
                            <h4 class="titulo_livro">Nome:</h4>
                            <p class="sobre"><?php echo($rs['tituloLivro']) ?></p>
                        </div>
                        <!-- DESCRIÇÃO DO LIVRO -->
                        <div class="titulo_descricao">
                            <h4 class="titulo_livro">Descrição:</h4>
                            <p class="sobre"><?php echo($rs['sobre']) ?> </p>
                        </div>
                        <!-- PREÇO DO LIVRO -->
                        <div class="titulo_preco">
                            <h4 class="titulo_livro">Preço:</h4>
                            <p class="sobre">R$ <?php echo($rs['preco']) ?></p>
                        </div>
                        <!-- BOTÃO PARA MAIS DETALHES -->
                        <div class="titulo_mais">
                            Detalhes
                        </div>

                    </div>
                    <?php } ?> 
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