<?php

    require_once('conexao.php');

    $conexao = conexaoDb();

    $codigo = $_POST['idRegistro'];

    $sql = "select * from tbl_faleconosco where idFaleConosco=".$codigo;

    $select = mysqli_query($conexao, $sql);

    if($rs=mysqli_fetch_array($select)){
        $nome = $rs['nome'];
        $sexo = $rs['sexo'];
        $profissao = $rs['profissao'];
        $telefone = $rs['telefone'];
        $email = $rs['email'];
        $site = $rs['homePage'];
        $facebook = $rs['linkFacebok'];
        $produto = $rs['informacaoProduto'];
        $sugestao = $rs['sugestoes'];
        
    }
    


?>
<!DOCTYPE HMTL5>
<html lang="pt-br">
    <head>
        <title>Sistema de Gerenciamento</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- IMPORT DA BIBLIOTECA DO JQUERY-->
        <script src="js/jquery.js"></script>

        <script>
            $(document).ready(function(){
                //funcão para fechar o modal
                $(".fechar").click(function(){
                    $("#caixa_modal").fadeOut(400);
                })

            })
        </script>

    </head>
    <body>
        
        <!-- CONTEUDO DO MODAL -->
        <div id="conteudo_modal">
            <div id="cont_modal">
                <div id="item_modal">
                    <h1>Informações da mensagem: </h1>
                    <div class="item_m">
                        <p class="titulo_modal">Nome:</p>
                        <p class="resp_modal"><?php echo($nome) ?></p>
                    </div>
                    <div class="item_m">
                        <p class="titulo_modal">Email:</p>
                         <p class="resp_modal"><?php echo($email) ?></p>
                    </div>
                    <div class="item_m">
                        <p class="titulo_modal">Mensagem:</p> 
                        <br><div class="msg"><?php echo($sugestao) ?></div>
                    </div>
                </div>
                <a href="#" class="fechar">
                    <img src="image/sair.png" width="25" height="25">
                </a>
            </div>
        </div>
        
    </body>
</html>