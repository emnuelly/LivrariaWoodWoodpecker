<?php 
   require_once('conexao.php');

    $conexao = conexaoDb();
?>
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
                    <div id="titulo_promocoes">Promoções do mês:</div>                      <?php 
                    
                    $sql = "SELECT * FROM tbl_promocoes WHERE status=1 limit 3";
                
                    $select = mysqli_query($conexao, $sql);
       
                    while($rs = mysqli_fetch_array($select)){
                   
                    ?>
                     <!-- IMAGEM -->
                    <div class="livro_promocao">
                        <img src="cms/<?php echo($rs['fotoPromo']) ?>" width="250" height="350" alt="Livro">
                     </div>
                     <!-- CAIXA DA DESCRIÇÃO -->
                    <div class="descricao_promocao">
                        <div class="caixa_descricao">
                            <!-- TITULO DO LIVRO -->
                            <div class="titulo_promocao"> <?php echo($rs['titulo']) ?> </div>
                            <!-- DESCRIÇAO DO LIVRO -->
                            <div class="sobre_promocao"><?php echo($rs['descricao']) ?>  </div>
                            <!-- PREÇO ANTIGO -->
                            <div class="preco_antigo">de R$<?php echo($rs['precoAntigo']) ?> </div>
                            <!-- PREÇO NOVO PARA FAZER A PROMOÇAO -->
                            <div class="preco_novo"> por R$<?php echo($rs['precoNovo']) ?> </div>
                            
                            <!-- BOTÃO DE COMPRA -->
                            <div class="botao_compre">COMPRE</div>
                        </div>
                    </div>
                     <?php } ?>
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