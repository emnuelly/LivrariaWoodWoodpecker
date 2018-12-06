<?php 
    session_start();
    if(!$_SESSION['nome']){
         header("location:../index.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        header("location:../index.php");
        
    }
        
    // o botão ja vai iniciar com esse nome
    $botao = "INSERIR";

    require_once('conexao.php');

    $conexao = conexaoDb();

    
    //verificando se o botao de salvar foi clicado
    if(isset($_POST['btnSalvar'])){
        $txtCategoria = $_POST['txtCategoria'];
        $sltStatus = $_POST['sltStatus'];
        
        //fazendo a verifiaçõ com a variável de sessão
        if($_POST['btnSalvar']=="INSERIR"){
            $sql = "INSERT INTO tbl_categoria(nomeCategoria, status) VALUES ('".$txtCategoria."','".$sltStatus."')";

        }else if($_POST['btnSalvar']=="ATUALIZAR"){
            $sql = "UPDATE tbl_categoria SET nomeCategoria='".$txtCategoria."', status='".$sltStatus."' where idCategoria=".$_SESSION['idCategoria'];

        }

        mysqli_query($conexao,$sql);
        header('location:admCategoria.php');
        
    }

    //AÇÃO DO CLICK NO MODO ECLUIR/EDITAR
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        //modo de exclusão
        if($modo == 'excluir'){
            $id = $_GET['id'];
            $sql = "delete from tbl_categoria where idCategoria=".$id;

            mysqli_query($conexao, $sql);
            header('location:admCategoria.php');
        
        //modo de editar
        }else if($modo == 'editar'){
            $botao = "EDITAR";
            $id = $_GET['id'];
            $_SESSION['idCategoria']=$id;
            
            $sql = "select * from tbl_categoria where idCategoria=".$id;

            $select = mysqli_query($conexao, $sql);

            while($rsConexao = mysqli_fetch_array($select)){
                $nivel = $rsConexao['idCategoria'];
            }

        }else if($modo == "ativo"){
            
            $id = $_GET['id'];
            $status = $_GET['status'];
            
            if($status == 1){
                $sql = "UPDATE tbl_categoria SET status==0 WHERE idCategoria=".$id;
            }
            
            if($status == 0){
                $sql = "UPDATE tbl_categoria SET status==1 WHERE idCategoria=".$id;
            }
            
            mysqli_query($conexao, $sql);
            header('location:admCategoria.php');
            
        }
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
                        <h1><a href="admProdutosInicio.php?logout">Logout</a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- TODO O CONTEUDO -->
        <div id="content">
        <div id="caixa_adm_usuario">
        <div id="cont_nivel">
                    <div id="caixa_nivel">
                        <form name="frmCategoria" action="admCategoria.php" method="post">
                            <h1>Cadastro de categoria</h1>
                                <div class="nivel">
                                <h2>Digite uma nova categoria:</h2>

                                <input type="text" value="<?php echo(@$nivel)?>" class="input_nivel" name="txtCategoria">
                                <select name="sltStatus">
                                    <option selected value="0">Desativado</option>
                                    <option value="1">Ativado</option>
                                </select>

                                <input type="submit"  name="btnSalvar" value="<?php echo($botao)?>">

                                </div>
                        </form>
                                <div class="lista_niveis">
                                    <h1>Categorias</h1>
                                    <div class="niveis">
                                        <div class="item_nivel">Nome:</div>
                                        <div class="item_nivel">Opções:</div>
                                        <div class="item_nivel">Ativação:</div>
                                    </div>
                                    <?php
                                        $sql = "SELECT * FROM tbl_categoria";

                                        $select = mysqli_query($conexao, $sql);

                                        while($rsConexao = mysqli_fetch_array($select)){

                                    ?>
                                    <div class="niveis">
                                        <div class="item_resp"><?php echo($rsConexao['nomeCategoria'])?></div>
                                        <div class="item_resp">
                                            <a href="admCategoria.php?modo=excluir&id=<?php echo($rsConexao['idCategoria'])?>"><img src="image/file.png" width="10" heigth="10"></a>
                                            <a href="admCategoria.php?modo=atualizar&id=<?php echo($rsConexao['idCategoria'])?>"><img src="image/edit.png" width="10" heigth="10"></a>
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
        <!-- RODAPÉ -->
        <footer id="footer">
            Desenvolvido por Emanuelly Marinho ❤  
        </footer>
       </div>
    </body>
</html>