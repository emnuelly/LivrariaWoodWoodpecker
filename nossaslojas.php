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
                <div id="caixa_lojas">
                   <div id="titulo_loja"> Encontre uma de nossas lojas: </div>
                   <!-- CAIXA QUE FICA AS INFORMAÇÕES DA LOJA -->
                   <div class="caixa_local">
                    <div class="loja_local">Loja 1</div>
                    <div class="nome_local">Av Carlos Alberto, Jd FLores - São Paulo, SP</div>
                    <div class="telefone_local">Fone: (11) 92929-2323</div>
                   </div>
                    <!-- CAIXA QUE FICA AS INFORMAÇÕES DA LOJA -->
                   <div class="caixa_local">
                   <div class="loja_local">Loja 2</div>
                    <div class="nome_local">Av Carlos Alberto, Jd FLores - São Paulo, SP</div>
                    <div class="telefone_local">Fone: (11) 92929-2323</div>
                   </div>
                   <!-- CAIXA QUE FICA A FOTO DO MAPA, para mais tarde ficar o Google Maps -->
                   <div id="caixa_mapa">
                    
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