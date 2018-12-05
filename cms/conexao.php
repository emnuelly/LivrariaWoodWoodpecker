<?php


function conexaoDb(){
    
     //variaveis do banco de dados
   $host ="localhost";
   $database ="db_livrariaww";
   $user="root";
   $password ="bcd127";

   //conexao
   if(!$conexao = mysqli_connect($host,$user,$password,$database)){
      echo('erro na conexao com o banco de dados');
   }
    
    return $conexao;
}

?>