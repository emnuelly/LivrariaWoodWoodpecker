<?php
    
    require_once('conexao.php');

    $conexao = conexaoDb();

    //pegando os valores digitados dentro da caixa de texto
    if(isset($_POST['btnEnviar'])){
        $txtNome = $_POST['txtNome'];
        $txtProfissao = $_POST['txtProfissao'];
        $txtTelefone = $_POST['txtTelefone'];
        $txtEmail = $_POST['txtEmail'];
        $txtHomePage = $_POST['txtHomePage'];
        $txtLinkFacebook = $_POST['txtLinkFacebok'];
        $txtProduto = $_POST['txtProduto'];
        $txtSugestoes = $_POST['txtSugestoes'];
        $txtSexo = $_POST['sltSexo'];
        
    //inserindo os dados dentro do banco de dados por linha de comando
        $sql ="INSERT INTO tbl_faleconosco (nome, telefone, email, homePage, linkFacebok, sugestoes, informacaoProduto, sexo, profissao) VALUES('".$txtNome."', '".$txtTelefone."', '".$txtEmail."', '".$txtHomePage."', '".$txtLinkFacebook."', '".$txtSugestoes."', '".$txtProduto."', '".$txtSexo."','".$txtProfissao."')";
        
        mysqli_query($conexao,$sql);
        header('location:contato.php');//para não gravar o mesmo dado varias vezes
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Livraria Woody Woodpecker</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- FORMATANDO O QUE ENTRA OU NÃO DENTRO DAS INPUT-->
    <script>
            function validar(caracter, blockType, campo){
                //deixa o campo já em branco, para que quando o usuario digitar algo certo, continua a cor original
                document.getElementById(campo).style="background-color:#000;";
                //
                if(window.event){
                    var letra = caracter.charCode;
                    // charCode pega o caracter que foi digitado e vê com o if/else e trata se e
                }else{
                    var letra = caracter.which;
                }
                
                // esse if/else verifica com o blockType se é pra bloquear numero ou texto. Esse paramentro é colocado tbm dentro do input.
                if(blockType == 'number'){
                    if(letra>=47 && letra <=57){
                        //deixa a borda do campo vermelha para indicar ao usuario que o q esta sendo  digitado está errado
                        document.getElementById(campo).style="border: 1px solid red;";
                        //bloqueando com a tabela ASCII
                        /*quando usa o return false, cancela a ação da tecla dos numeros, que é o que 
                        ta sendo bloqueado, quando o usuário digitar. */
                        return false;
                    
                    }
                }else if(blockType == 'caracter'){
                    if(letra < 48 || letra > 57){
                        document.getElementById(campo).style="border: 1px solid red;";
                        return false;
                    }
                }
            }
            
            
   </script>
</head>
    <body>
        <nav id="menu_principal">
            <div id="caixa_menu">
                <!-- LOGO DO MENU -->
                <a href="home.php"><div id="img_menu"></div></a>
                <!-- MENU EM FORMA DE LISTA-->
                <div id="menu">>
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
                    <div class="caixa_formulario">
            <div class="titulo"> Fale conosco</div>
            <form name="frmFaleConosco" method="post" action="contato.php" >
            <div class="formulario">
                <!-- INPUTS DO FORMULARIO -->
                <div class="caixa_input">
                    <input class="form" onkeypress="return validar(event, 'number', this.id);" required type="text" name="txtNome" maxlength="200" placeholder="Nome" size="60" id="nome">
                </div>
                <div class="caixa_input">
                    <select name="sltSexo" class="form">
                            <option value="" selected>Sexo</option>
                            <option value="f">Feminino</option>
                            <option value="m">Masculino</option>
                        </select>
                </div>
                <div class="caixa_input">
                    <input class="form" type="text" name="txtProfissao" maxlength="200" placeholder="Profissão" size="60" onkeypress="return validar(event, 'number', this.id);" required id="profissao">
                </div>
                <div class="caixa_input">
                    <input class="form" type="text" name="txtTelefone" maxlength="200" placeholder="Telefone" size="60" onkeypress="return validar(event, 'caracter', this.id);" required id="telefone">
                </div>
                <div class="caixa_input">
                    <input class="form" type="email" name="txtEmail" maxlength="200" placeholder="Email" size="60">
                </div>
                <div class="caixa_input">
                    <input class="form" type="url" name="txtHomePage" maxlength="200" placeholder="Site" size="60">
                </div>
                <div class="caixa_input">
                    <input class="form" type="url" name="txtLinkFacebook" maxlength="200" placeholder="Link do Facebook" size="60">
                </div>
                <div class="caixa_input">
                    <input class="form" type="text" name="txtProduto" maxlength="200" placeholder="Produto" size="60" id="produto">
                </div>
                <div class="caixa_input">
                    <textarea placeholder="Sugestões/Críticas" name="txtSugestoes"  id="sugestao"></textarea>
                </div>
                <div class="botao">
                    <input class="formatacao_botao" type="submit" name="btnEnviar" value="Enviar mensagem">
                </div>
                
            </div>
            </form>
        </div>
                </section>
                <div class="redes_sociais">
                    <img src="image/instagram.png">
                    <img src="image/facebook.png">
                    <img src="image/twitter.png">
				</div>
                <footer class="footer">
                    <img src="image/footer.png" alt="logo do rodapé">
                    <div class="titulo_footer">Livraria Woody Woodpecker 2018</div>
                </footer>
            </div>
        </div>
    </body>
</html>