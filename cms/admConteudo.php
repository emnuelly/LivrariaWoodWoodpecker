<?php 

session_start();

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

                    <a href="admUsuarios.php">
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
                        <h1><a href="admConteudo.php?logout">Logout</a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- TODO O CONTEUDO -->
        <div id="content">
            <div id="caixa_inicio">
                <!-- LISTAGEM -->
                <div class="lista_menu">
                    <div class="item_menu">
                        <img src="image/gear.png" width="70" heigth="70">
                        <h2>Home</h2>
                    </div>
                    <div class="item_menu">
                        <a href="admSobre.php">
                        <img src="image/gear.png" width="70" heigth="70">
                        <h2>Sobre</h2>
                        </a>
                    </div>
                    <div class="item_menu">
                        <a href="admPromocoes.php">
                        <img src="image/gear.png" width="70" heigth="70">
                        <h2>Promoções</h2>
                        </a>
                    </div>
                    <div class="item_menu">
                        <a href="admDestaques.php">
                        <img src="image/gear.png" width="70" heigth="70">
                        <h2>Destaques</h2>
                        </a>
                    </div>
                    <div class="item_menu">
                         <a href="admLojas.php">
                        <img src="image/gear.png" width="70" heigth="70">
                        <h2>Nossas Lojas</h2>
                        </a>
                    </div>
                    <div class="item_menu">
                         <a href="admAutores.php">
                        <img src="image/gear.png" width="70" heigth="70">
                        <h2>Autores</h2>
                        </a>
                    </div>
                </div>
                <div class="cont_menu">
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