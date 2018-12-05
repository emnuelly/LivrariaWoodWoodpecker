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
                    <?php 
                    
                    $sql = "SELECT * FROM tbl_sobre WHERE status=1 limit 1";
                
                    $select = mysqli_query($conexao, $sql);
       
                    while($rs = mysqli_fetch_array($select)){
                   
                    ?>
                    <div class="texto_sobre"> 
                        <h1><?php echo($rs['titulo']) ?></h1>
                        <p><?php echo($rs['descricao']) ?></p>
                    </div>
                   
                    <!-- IMAGEM -->
                    <div class="imagem_sobre">
                        <img src="cms/<?php echo($rs['fotoSobre']) ?>" width="1200" height="650">
                    </div>
                     <?php } ?>
                </section>
                <footer class="footer">
                    <img src="image/footer.png" alt="logo do rodapé">
                    <div class="titulo_footer">Livraria Woody Woodpecker 2018</div>
                </footer>
            </div>
        </div>
    </body>
</html>