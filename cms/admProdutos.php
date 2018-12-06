<?php

// Ativar o uso de variaveis de sessão 
   session_start();

   if(!$_SESSION['nome']){
    header("location:../index.php");
}

if(isset($_GET['logout'])){
   session_destroy();
   header("location:../index.php");
   
}
        
   // o botão ja vai iniciar com esse nome
   $botao = "SALVAR";

   require_once('conexao.php');

    $conexao = conexaoDb();

    if(isset($_POST['btnSalvar'])){
        
        $txtTitulo = $_POST['txtTitulo'];
        $txtDescricao = $_POST['txtDescricao'];
        $sltAutor = $_POST['sltAutor'];
        $sltCategoria = $_POST['sltCategoria'];
        $sltSubCategoria = $_POST['sltSubCategoria'];
        $sltStatus = $_POST['sltStatus'];
        $foto = $_POST['txtFoto'];
        $preco = $_POST['txtPreco'];
        
        if($_POST['btnSalvar'] == "SALVAR"){
            
            $sql = "INSERT INTO tbl_livro(tituloLivro,idAutor, sobre, fotoLivro, idCategoria, idSubCategoria, status, preco) 
            VALUES ('".$txtTitulo."','".$sltAutor."', '".$txtDescricao."', '".$foto."', '".$sltCategoria."', '".$sltSubCategoria."',".$sltStatus.",".$preco.");";
        }else if($_POST['btnSalvar'] == "ATUALIZAR"){
            $sql = "UPDATE tbl_livro SET tituloLivro='".$txtTitulo."', idAutor='".$sltAutor."', sobre='".$txtDescricao."', fotoLivro='".$foto."', idCategoria='".$sltCategoria."', idSubCategoria='".$sltSubCategoria."', status='".$sltStatus."', preco='".$preco."', WHERE idLivro=".$_SESSION['id'];
        }
        
        mysqli_query($conexao,$sql);
        header('location:admProdutos.php');
        echo($sql);


        
        
    }

if(isset($_GET['modo'])){
        $modo = $_GET['modo'];
        
        if($modo == 'atualizar'){
            $botao = "ATUALIZAR";
            $id = $_GET['id'];
            $_SESSION['id']=$id;
            
            $sql = "select * from tbl_livro;";
            
            $select = mysqli_query($conexao, $sql);
            
            while($rsConexao = mysqli_fetch_array($select)){
                $titulo = $rsConexao['tituloLivro'];
                $sltAutor = $rsConexao['idAutor'];
                $descricao = $rsConexao['sobre'];
                $foto = $rsConexao['fotoLivro'];
                $sltCategoria = $rsConexao['idCategoria'];
                $sltSubCategoria = $rsConexao['idSubCategoria'];
                $sltStatus = $rsConexao['status'];
                $preco = $rsConexao['preco'];
            }
            
        }else if($modo = 'excluir'){
            $id = $_GET['id'];
            $sql = "delete from tbl_livro where idLivro=".$id;
            
            mysqli_query($conexao,$sql);
            header('location:admProdutos.php');
            
        }
    }


?>
<!DOCTYPE HMTL5>
<html lang="pt-br">
    <head>
        <title>Sistema de Gerenciamento</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.form.js"></script>
       
        <script>
            $(document).ready(function(){
            
            $('#foto').live('change',function(){
   
                $('#visualizar').html("<img src='image/ajax-loader.gif'>");
                
                setTimeout(function(){
                 $('#frmFoto').ajaxForm({
                     // passando um parametro para o ajax, (quero que vc mostre dentro da div)
                     target:'.visualizar'
                 }).submit(); 
                    
                },2000);   
            });
        });
            
        </script>
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
                        <h1><a href="admProdutos.php?logout">Logout</a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- TODO O CONTEUDO -->
        <div id="content">
            <div id="cad_caixa_prom">
                
                <div class="cad_prom">
                    <h1 class="h1_sobre">Cadastre um livro:
                    </h1>
                    <form name="frmFoto" method="post" action="upload.php" id="frmFoto" enctype="multipart/form-data">
                        <p><input class="file" type="file" name="filefoto" id="foto" > </p>
                        
                    </form>
                   <form name="frmConteudo" method="post" action="admProdutos.php">
                   <select name="sltCategoria">
                                <option selected value="0">Selecione uma categoria</option>
                                <?php 
                                    $sql = "SELECT * FROM tbl_categoria";

                                    $select = mysqli_query($conexao, $sql);
       
                                    while($rs = mysqli_fetch_array($select)){
                                
                                ?>
                                <option value="<?php echo($rs['idCategoria']) ?>"><?php echo($rs['nomeCategoria']) ?></option>

                                <?php } ?> 
                    </select>

                    <select name="sltSubCategoria">
                                <option selected value="0">Selecione uma sub categoria</option>
                                <?php 
                                    $sql = "SELECT * FROM tbl_subcategoria";

                                    $select = mysqli_query($conexao, $sql);
       
                                    while($rs = mysqli_fetch_array($select)){
                                
                                ?>
                                <option value="<?php echo($rs['idSubCategoria']) ?>"><?php echo($rs['nomeSubCategoria']) ?></option>

                                <?php } ?> 
                                 </select>
                    <select name="sltAutor">
                                <option selected value="0">Selecione um autor</option>
                                <?php 
                                    $sql = "SELECT * FROM tbl_autor";

                                    $select = mysqli_query($conexao, $sql);
       
                                    while($rs = mysqli_fetch_array($select)){
                                
                                ?>
                                <option value="<?php echo($rs['idAutor']) ?>"><?php echo($rs['nome']) ?></option>

                                <?php } ?> 
                    </select>
                    <div class="item_cad_loja"><p class="titulo_p">Título: </p> <input placeholder="Digite o título do livro" type="text" name="txtTitulo" value="<?php echo(@$titulo)?>"></div>
                       <input type="text" name="txtFoto" hidden="hidden">

                    <div  class="item_cad_loja"> 
                    <p class="titulo_p">Sobre: </p> 
                    <input  maxlength="160" placeholder="Digite no máximo 160 caracteres" class="text" name="txtDescricao" value="<?php echo(@$descricao)?>">
                    </input> </div>
                    <div class="item_cad_loja"><p class="titulo_p">Preço: </p> <input type="text" name="txtPreco"  value="<?php echo(@$preco)?>"></div>
                        <div  class="item_cad_loja">Ativação:
                    <select name="sltStatus">
                                <option selected value="0" >Desativado</option>
                                <option value="1">Ativo</option>
                    </select>
                    </div>
                    <br><input type="submit" class="btn_loja" name="btnSalvar" value="<?php echo($botao)?>">
                        </form>
                </div>
                
                <div class="visualizar">
                </div>  
                <div class="resp_prom">
                <h1  class="h1_sobre">Livros:</h1>
                    <div class="item_loja">Titulo:</div>
                    <div class="item_loja">Opções: </div>
                    <?php 
                             $sql = "SELECT * FROM tbl_livro";

                             $select = mysqli_query($conexao, $sql);

                             while($rsConexao = mysqli_fetch_array($select)){
                     ?>
                    <div class="scroll_sobre">
                    <div class="item_loja"><?php echo($rsConexao['tituloLivro'])?></div>
                    <div class="item_loja">
                        <a href="admProdutos.php?modo=atualizar&id=<?php echo($rsConexao['idLivro']) ?>"><img class="vizualizar" src="image/edit.png" width="20" heigth="20"></a>
                        <a href="admProdutos.php?modo=excluir&id=<?php echo($rsConexao['idLivro']) ?>"><img class="vizualizar" src="image/file.png" width="20" heigth="20"></a>
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