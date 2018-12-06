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
    <link rel="icon" href="image/chat.png" type="image/x-icon" />
    <link rel="shortcut icon" href="image/chat.png" type="image/x-icon" />
    <!-- final da formatação -->
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
                    <input type="button" value="login" class="botao_menu">
                    </div>
                </div>
            </div>
        </nav>
        <!-- CAIXA PRINCIPAL DEFINIDA PARA OS ITENS-->
        <div id="caixa_principal">
            <div id="principal">
                <div id="caixa_lojas">
                   <div id="titulo_loja"> Encontre uma de nossas lojas: </div>
                   <!-- CAIXA QUE FICA AS INFORMAÇÕES DA LOJA -->
                    <?php 
                     $sql = "SELECT * FROM tbl_lojas where  status=1 limit 2";
                    

                    $select = mysqli_query($conexao, $sql);
       
                    while($rs = mysqli_fetch_array($select)){
                   
                        
                    ?>
                   <div class="caixa_local">
                    <div class="loja_local"><?php echo($rs['tipoLoja']) ?></div>
                    <div class="nome_local"><?php echo($rs['endereco']) ?></div>
                    <div class="telefone_local">Fone: <?php echo($rs['telefone']) ?></div>
                   </div>
                    <!-- CAIXA QUE FICA AS INFORMAÇÕES DA LOJA -->
                   
                    <?php } ?>
                   <!-- CAIXA QUE FICA A FOTO DO MAPA, para mais tarde ficar o Google Maps -->
                   <div id="caixa_mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.005499470569!2d-46.65086288569707!3d-23.56824596773007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59bf2a2dd5f3%3A0xca37f674a69a0c75!2sLivraria+Martins+Fontes!5e0!3m2!1spt-BR!2sbr!4v1541642075734" width="1200" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
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