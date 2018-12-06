<?php

   // Ativar o uso de variaveis de sessão 
   session_start();
        
   // o botão ja vai iniciar com esse nome
   $botao = "SALVAR";

  require_once('conexao.php');

    $conexao = conexaoDb();

   if(isset($_POST['btnSalvar'])){

        $txtNome = $_POST['txtNome'];
        $txtEmail = $_POST['txtEmail'];
        $txtSenha = $_POST['txtSenha'];
        $sltNivel = $_POST['sltNivel'];
        $sltStatus = $_POST['sltStatus'];

        if($_POST['btnSalvar'] == 'SALVAR'){
            $sql = "INSERT INTO tbl_usuarios(nome,email,senha, idNivel, statusUsuario) VALUES ('".$txtNome."','".$txtEmail."','".$txtSenha."','".$sltNivel."','".$sltStatus."')";
        }else if($_POST['btnSalvar'] == 'EDITAR'){
            $sql = "UPDATE tbl_usuarios SET nome='".$txtNome."', email='".$txtEmail."', senha='".$txtSenha."', idNivel='".$sltNivel."', statusUsuario='".$sltStatus."' WHERE idUsuario=".$_SESSION['idUsuario'];
        }
    
        mysqli_query($conexao,$sql);
        header('location:admUsuarios.php');
        
        
   }

   //AÇÃO DO CLICK NO MODO ECLUIR/EDITAR
    if(isset($_GET['modo'])){
        $modo = $_GET['modo'];

        //modo de exclusão
        if($modo == 'excluir'){
            $id = $_GET['id'];
            $sql = "delete from tbl_usuarios where idUsuario=".$id;

            mysqli_query($conexao, $sql);
            header('location:admUsuarios.php');
            
        //modo de edição
        }else if($modo == 'editar'){
            $botao = "EDITAR"; 
            $id = $_GET['id'];
            $_SESSION['idUsuario']=$id;

            $sql = "select u.nome, u.email, u.senha, n.idNivel, n.nomeNivel 
            from tbl_usuarios as u, tbl_niveis as n 
            where u.idNivel = n.idNivel;";

            $select = mysqli_query($conexao, $sql);

            while($rsConexao = mysqli_fetch_array($select)){
                $nome = $rsConexao['nome'];
                $email = $rsConexao['email'];
                $senha = $rsConexao['senha'];
                $sltNivel = $rsConexao['idNivel'];
                $nomeNivel = $rsConexao['nomeNivel'];
            }

        }else if($modo == "ativo"){
            
            $id = $_GET['id'];
            $status = $_GET['status'];
            
            if($status == 1){
                $sql = "UPDATE tbl_niveis SET statusUsuario==0 WHERE idNivel=".$id;
            }
            
            if($status == 0){
                $sql = "UPDATE tbl_niveis SET statusUsuario==1 WHERE idNivel=".$id;
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
                        <h1><a href="admUsuarios.php?logout">Logout</a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- TODO O CONTEUDO -->
        <div id="content">
        <div id="cad_caixa_user">
                
                <div class="cad_user">
                    <h1 class="h1_sobre">Cadastre um novo usuario:</h1>
                   <form name="frmConteudo" method="post" action="admAutores.php">
                    <div class="item_cad_loja"><p class="titulo_p">Nome: </p> <input type="text" name="txtNome" value="<?php echo(@$nome)?>"></div>
                    <div class="item_cad_loja"><p class="titulo_p">Email: </p> <input type="text" name="txtEmail" value="<?php echo(@$email)?>"></div>
                    <div class="item_cad_loja"><p class="titulo_p">Senha: </p> <input type="text" name="txtSenha" value="<?php echo(@$senha)?>"></div>
                        <div  class="item_cad_loja">Ativação:
                    <select name="sltStatus">
                                <option  value="0" >Desativado</option>
                                <option value="1">Ativo</option>
                    </select>
                    </div>
                       <div  class="item_cad_loja">Função:
                    <select name="sltNivel">
                                <option selected>Selecione um nível</option>
                                <?php 
                                    $sql = "SELECT * FROM tbl_niveis";

                                    $select = mysqli_query($conexao, $sql);
       
                                    while($rsNivel = mysqli_fetch_array($select)){
                                
                                ?>
                                <option value="<?php echo($rsNivel['idNivel']) ?>"><?php echo($rsNivel['nomeNivel']) ?></option>

                                <?php } ?> 
                    </select>
                    </div>
                    <br><input type="submit" class="btn_loja" name="btnSalvar" value="<?php echo($botao)?>">
                        </form>
                </div>
             
                <div class="resp_prom">
                <h1  class="h1_sobre">Autores cadastrados:</h1>
                    <div class="item_loja">Nome:</div>
                    <div class="item_loja">Opções: </div>
                    <?php 
                             $sql = "SELECT * FROM tbl_usuarios as u, tbl_niveis as n WHERE u.idNivel = n.idNivel;";

                             $select = mysqli_query($conexao, $sql);

                             while($rsConexao = mysqli_fetch_array($select)){
                        ?>
                    <div class="scroll_sobre">
                    <div class="item_loja"><?php echo($rsConexao['nome'])?></div>
                    <div class="item_loja">
                        <a href="admUsuarios.php?modo=excluir&id=<?php echo($rsConexao['idUsuario']) ?>"><img src="image/file.png" width="10" heigth="10"></a>
                        <a href="admUsuarios.php?modo=editar&id=<?php echo($rsConexao['idUsuario']) ?>"><img src="image/edit.png" width="10" heigth="10"></a>
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