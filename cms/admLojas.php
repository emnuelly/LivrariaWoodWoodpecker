<?php

// Ativar o uso de variaveis de sessão 
   session_start();
        
   // o botão ja vai iniciar com esse nome
   $botao = "SALVAR";

   require_once('conexao.php');

    $conexao = conexaoDb();

        
    if(isset($_POST['btnSalvar'])){
        
        $txtEndereco = $_POST['txtEndereco'];
        $txtTelefone = $_POST['txtTelefone'];
        $txtNLoja = $_POST['txtNLoja'];
        $sltStatus = $_POST['sltStatus'];
        
        if($_POST['btnSalvar'] == "SALVAR"){
            
            $sql = "INSERT INTO tbl_lojas(endereco, telefone, tipoLoja, status) VALUES ('".$txtEndereco."','".$txtTelefone."','".$txtNLoja."','".$sltStatus."');";
        }else if($_POST['btnSalvar'] == "EDITAR"){
            $sql = "UPDATE tbl_lojas SET endereco='".$txtEndereco."', telefone='".$txtTelefone."', tipoLoja='".$txtNLoja."', status='".$sltStatus."' WHERE idLojas=".$_SESSION['id'];
        }
        
        mysqli_query($conexao,$sql);
        header('location:admLojas.php');
        
    }

    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        
        if($modo == 'editar'){
            $botao = "EDITAR";
            $id = $_GET['id'];
            $_SESSION['id']=$id;
            
            $sql = "select * from tbl_lojas;";
            
            $select = mysqli_query($conexao, $sql);
            
            while($rsConexao = mysqli_fetch_array($select)){
                $endereco = $rsConexao['endereco'];
                $telefone = $rsConexao['telefone'];
                $tipoLoja = $rsConexao['tipoLoja'];
                $sltStatus = $rsConexao['status'];
            }
            
        }else if($modo = 'excluir'){
            $id = $_GET['id'];
            $sql = "delete from tbl_lojas where idLojas=".$id;
            
            mysqli_query($conexao,$sql);
            header('location:admLojas.php');
            
        }
    }

    if(!$_SESSION['nome']){
         header("location:../home.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        header("location:../home.php");
        
    }
?>
<!DOCTYPE HMTL5>
<html lang="pt-br">
    <head>
        <title>Sistema de Gerenciamento</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
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
                        <h1>Bem vindo, <?php echo($_SESSION['nome']) ?></h1>
                    </div>
                    <div id="sair">
                        <h1><a href="admLojas.php?logout">Logout</a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- TODO O CONTEUDO -->
        <div id="content">
            <div id="caixa_lojas">
                <form name="frmLojas" method="post" action="admLojas.php">
                <div class="cad_lojas">
                    <h1>Cadastre um novo endereço:</h1>
                    <div class="item_cad_loja">Endereço: <input type="text" name="txtEndereco"  value="<?php echo(@$endereco)?>"></div>
                    <div  class="item_cad_loja">  Telefone:  <input type="text" name="txtTelefone"  value="<?php echo(@$telefone)?>"></div>
                    <div  class="item_cad_loja">Tipo da loja: <input type="text" name="txtNLoja"  value="<?php echo(@$tipoLoja)?>"></div>
                    <div  class="item_cad_loja">Ativação:
                    <select name="sltStatus">
                                <option selected value="0" >Desativado</option>
                                <option value="1">Ativo</option>
                    </select>
                    </div>
                    <br><input type="submit" class="btn_loja" name="btnSalvar" value="<?php echo($botao)?>">
                </form>
                </div>
                <div class="resp_lojas">
                    <h1>Endereços Cadastrados:</h1>
                    <div class="item_loja">Loja:</div>
                    <div class="item_loja">Opções: </div>
                    <?php 
                             $sql = "SELECT * FROM tbl_lojas;";

                             $select = mysqli_query($conexao, $sql);

                             while($rsConexao = mysqli_fetch_array($select)){
                     ?>
                    <div class="scroll_loja">
                    <div class="item_loja"><?php echo($rsConexao['tipoLoja'])?></div>
                    <div class="item_loja">
                        <a href="admLojas.php?modo=editar&id=<?php echo($rsConexao['idLojas']) ?>"><img class="vizualizar" src="image/edit.png" width="20" heigth="20"></a>
                        <a href="admLojas.php?modo=excluir&id=<?php echo($rsConexao['idLojas']) ?>"><img class="vizualizar" src="image/file.png" width="20" heigth="20"></a>
                    </div>
                    
                 <?php } ?> 
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- RODAPÉ -->
        <footer id="footer">
            Desenvolvido por Emanuelly Marinho ❤  
        </footer>
      </div>  
    </body>
</html>