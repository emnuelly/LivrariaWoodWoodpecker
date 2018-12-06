<?php

    // Ativar o uso de variaveis de sessão 
    session_start();
        
    // o botão ja vai iniciar com esse nome
    $botao = "INSERIR";

    require_once('conexao.php');

    $conexao = conexaoDb();

    //verificando se o botao de salvar foi clicado
    if(isset($_POST['btnSalvar'])){
        $txtNivel = $_POST['txtNivel'];
        $sltStatus = $_POST['sltStatus'];
        
        //fazendo a verifiaçõ com a variável de sessão
        if($_POST['btnSalvar']=="INSERIR"){
            $sql = "INSERT INTO tbl_niveis(nomeNivel, status) VALUES ('".$txtNivel."','".$sltNivel."')";

        }else if($_POST['btnSalvar']=="EDITAR"){
            $sql = "UPDATE tbl_niveis SET nomeNivel='".$txtNivel."', status='".$sltStatus."' where idNivel=".$_SESSION['idNivel'];

        }

        mysqli_query($conexao,$sql);
        header('location:admUsuariosNivel.php');
        
    }

    //AÇÃO DO CLICK NO MODO ECLUIR/EDITAR
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        //modo de exclusão
        if($modo == 'excluir'){
            $id = $_GET['id'];
            $sql = "delete from tbl_niveis where idNivel=".$id;

            mysqli_query($conexao, $sql);
            header('location:admUsuariosNivel.php');
        
        //modo de editar
        }else if($modo == 'editar'){
            $botao = "EDITAR";
            $id = $_GET['id'];
            $_SESSION['idNivel']=$id;
            
            $sql = "select * from tbl_niveis where idNivel=".$id;

            $select = mysqli_query($conexao, $sql);

            while($rsConexao = mysqli_fetch_array($select)){
                $nivel = $rsConexao['nomeNivel'];
            }

        }else if($modo == "ativo"){
            
            $id = $_GET['id'];
            $status = $_GET['status'];
            
            if($status == 1){
                $sql = "UPDATE tbl_niveis SET status==0 WHERE idNivel=".$id;
            }
            
            if($status == 0){
                $sql = "UPDATE tbl_niveis SET status==1 WHERE idNivel=".$id;
            }
            
            mysqli_query($conexao, $sql);
            header('location:admUsuariosNivel.php');
            
        }
    }

    if(!$_SESSION['nome']){
         header("location:../index.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        header("location:../index.php");
        
    }

?>

<!DOCTYPE HMTL5>
<html lang="pt-br">
    <head>
        <title>Sistema de Gerenciamento</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
                        <h1>Bem vindo, <?php echo($_SESSION['nome']) ?></h1>
                    </div>
                    <div id="sair">
                        <h1><a href="admUsuariosNivel.php?logout">Logout</a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- TODO O CONTEUDO -->
        <div id="content">
        <div id="caixa_adm_usuario">
                <!-- LISTAGEM -->
                <div id="cont_nivel">
                    <div id="caixa_nivel">
                        <form name="frmNiveis" action="admUsuariosNivel.php" method="post">
                            <h1>Cadastro de Níveis</h1>
                                <div class="nivel">
                                <h2>Digite um novo nível de usuário:</h2>

                                <input type="text" value="<?php echo(@$nivel)?>" class="input_nivel" name="txtNivel">
                                <select name="sltStatus">
                                    <option selected value="0">Desativado</option>
                                    <option value="1">Ativado</option>
                                </select>

                                <input type="submit"  name="btnSalvar" value="<?php echo($botao)?>">

                                </div>
                        </form>
                                <div class="lista_niveis">
                                    <h1>Niveis</h1>
                                    <div class="niveis">
                                        <div class="item_nivel">Nivel:</div>
                                        <div class="item_nivel">Opções:</div>
                                        <div class="item_nivel">Ativação:</div>
                                    </div>
                                    <?php
                                        $sql = "SELECT * FROM tbl_niveis";

                                        $select = mysqli_query($conexao, $sql);

                                        while($rsConexao = mysqli_fetch_array($select)){

                                    ?>
                                    <div class="niveis">
                                        <div class="item_resp"><?php echo($rsConexao['nomeNivel'])?></div>
                                        <div class="item_resp">
                                            <a href="admUsuariosNivel.php?modo=excluir&id=<?php echo($rsConexao['idNivel'])?>"><img src="image/file.png" width="10" heigth="10"></a>
                                            <a href="admUsuariosNivel.php?modo=editar&id=<?php echo($rsConexao['idNivel'])?>"><img src="image/edit.png" width="10" heigth="10"></a>
                                        </div>
                                        <div class="item_resp">
                                            <?php
                                                
                                                if($rsConexao['status']== 1){
                                                    $nomeStatus = 'ativado';
                                                }else if($rsConexao['status']==0){
                                                    $nomeStatus = 'desativado';
                                                }
                                            
                                                echo($nomeStatus);
                                            ?>
                                        </div>
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