<?php

    require_once('conexao.php');

    $conexao = conexaoDb();

    //executa no bd o script
    header('faleconosco.php');

    //VERIFICANDO O EXCLUIR NA URL
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        
        //excluir
        if($modo == 'excluir'){
            $id = $_GET['id'];
            $sql = "delete from tbl_faleconosco where idFaleConosco=".$id;

            mysqli_query($conexao, $sql);
            header('location:faleconosco.php');
        }

        
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
                //funcão para abrir o modal
                $(".vizualizar").click(function(){
                    $("#caixa_modal").fadeIn(1100);
                })

            });

            function modal(idItem){
                $.ajax({
                    type: "POST",
                    url: "modalFaleConosco.php",
                    data:{idRegistro:idItem},
                    success: function(dados){
                        $('#modal').html(dados)
                    }
                })
            }
        </script>

    </head>
    <body>
        
        <!-- CONTEUDO DO MODAL -->
        <div id="caixa_modal">
            <div id="modal"></div>
        </div>
        <!-- CONTAINER PRICIPAL -->
      <div class="principal">
          <!-- CABEÇALHO -->
        <header id="header">
            <div id="header_logo">
                <!-- TITULO DO CABEÇALHO-->
                <div id="header_titulo">
                    Sistema de Gerenciamento
                </div>
                <!-- IMAGEM DO CABEÇALHO -->
                <div id="header_imagem">
                    <img src="image/logo2.png" alt="logo" width="160" height="150">
                </div>
            </div> 
            <!-- MENU COM ICONES -->
            <div id="header_menu">
                <!-- ICONES -->
                <div id="menus">
                    <div class="item">
                        <a href="admConteudo.php">
                        <img src="image/cont.png" width="100" heigth="100" alt="icone">
                        <p>Adm. de Conteúdo</p>
                        </a>
                    </div>

                    <div class="item">
                        <img src="image/livro.png" width="100" heigth="100" alt="icone">
                        <p>Adm. dos Produtos</p>
                    </div>

                    <a href="faleconosco.php">
                    <div class="item">
                        <img src="image/fale.png" width="100" heigth="100" alt="icone">
                        <p>Adm. Fale Conosco</p>
                    </div>
                    </a>

                    <a href="admUsuariosInicio.php">
                    <div class="item">
                        <img src="image/user.png" width="100" heigth="100" alt="icone">
                        <p>Adm. de Usuarios</p>
                    </div>
                    </a>
                </div>
                <!-- LOGIN E SAIR -->
                <div id="login">
                    <div id="nome">
                        <h1>Bem vindo, Adalto</h1>
                    </div>
                    <div id="sair">
                        <h1>Logout</h1>
                    </div>
                </div>
            </div>
        </header>


        <!-- TODO O CONTEUDO -->
        <div id="content">
        <div id="caixa_faleconosco">
                <table width="1000" heigth="500">
                    <tr bgcolor="#000"                   height="30" size="53" align="center">
                        <td colspan="4"><p>Mensagens</p></td>
                    </tr>
                    <tr  bgcolor="#c7e8e7" align="center" height="40">
                        <td width="30%">Nome</td>
                        <td width="30%">Telefone</td>
                        <td width="30%">Email</td>
                        <td width="20%">opções</td>
                    </tr>

                    <?php
                        //comando do banco de dados
                        $sql = "SELECT * FROM tbl_faleconosco";

                        $select = mysqli_query($conexao, $sql);

                        while($rsContatos=mysqli_fetch_array($select)){
                    ?>
                    <tr>
                        <td><?php echo($rsContatos['nome'])?></td>
                        <td><?php echo($rsContatos['telefone'])?></td>
                        <td><?php echo($rsContatos['email'])?></td>
                        <td>
                        <a href="#" class="vizualizar" onclick="modal(<?php echo($rsContatos['idFaleConosco'])?>)"><img class="vizualizar" src="image/search.png" width="25" heigth="25"></a>
                        <a href="faleconosco.php?modo=excluir&id=<?php echo($rsContatos['idFaleConosco']) ?>"><img src="image/file.png" width="25" heigth="25"></a>
                        </td>
                    </tr>
                        <?php } ?>
                </table>
            </div>   
        </div>
        <!-- RODAPÉ -->
        <footer id="footer">
            Desenvolvido por Emanuelly Marinho ❤  
        </footer>
       </div>
    </body>
</html>