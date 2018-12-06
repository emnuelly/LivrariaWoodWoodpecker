<?php 
   require_once('conexao.php');

    $conexao = conexaoDb();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Livraria Woody Woodpecker</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="image/chat.png" type="image/x-icon" />
    <link rel="shortcut icon" href="image/chat.png" type="image/x-icon" />
</head>
    <body>
        <nav id="menu_principal">
            <div id="caixa_menu">
                <!-- LOGO DO MENU -->
                <a href="index.php"><div id="img_menu"></div></a>
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
                    <input type="button" value="entrar" class="botao_menu">
                    </div>
                </div>
            </div>
        </nav>
        <!-- CAIXA PRINCIPAL DEFINIDA PARA OS ITENS-->
        <div id="caixa_principal">
            <div id="principal">
                <div id="principal_destaque">
                    <!-- TITUTLO DA PAGINA-->
                    <div id="titulo_destaque"> Livro em destaque </div>
                    <?php 
                    
                    $sql = "SELECT * FROM tbl_destaque WHERE status=1 limit 1";
                
                    $select = mysqli_query($conexao, $sql);
       
                    while($rs = mysqli_fetch_array($select)){
                   
                    ?>
                    <!-- PRODUTO-->
                    <div class="livro_destaque">
                        <img src="cms/<?php echo($rs['fotoDestaque']) ?>" alt="livro" width="400" height="510">
                    </div>
                    <!-- DIV DO VEJA MAIS-->
                    <div class="descricao_livro">
                        <div class="titulo_dest">
                         <h3>Livro:</h3><?php echo($rs['titulo']) ?>
                        </div>
                        <div class="titulo_dest">
                        <h3>Autor(a):</h3><?php echo($rs['autor']) ?>
                        </div>
                        <div class="desc_destaque">
                       <?php echo($rs['descricao']) ?>
                        </div>
                    </div>
                     <?php } ?>
                    
                </div>
                <div class="redes_sociais">
                    <img src="image/instagram.png" alt="instagram">
                    <img src="image/facebook.png" alt="facebook">
                    <img src="image/twitter.png" alt="twiiter">
				</div>
                <footer class="footer">
                    <img src="image/footer.png" alt="logo do rodapé">
                    <div class="titulo_footer">Livraria Woody Woodpecker 2018</div>
                </footer>
            </div>
        </div>
    </body>
</html>