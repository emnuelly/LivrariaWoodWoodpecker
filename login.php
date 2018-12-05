<?php 

    function login($email, $senha){
        require_once("conexao.php");
        
        $db = conexaoDB();
        $sqlLogin = "select * from tbl_usuarios where email='".$email."' and senha='".$senha."' and statusUsuario = 1";
        $login = mysqli_query($db, $sqlLogin);
        
        
        if($rs = mysqli_fetch_array($login)){
            session_start();
            $_SESSION['nome'] = $rs[nome];
            header("location:cms/admInicio.php");
            
        }else{
            echo("<script>alert('Verifique a senha e o email!')</script>");
        }
        
    }

?>