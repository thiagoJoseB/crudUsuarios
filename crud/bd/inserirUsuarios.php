<?php

require_once(SRC.'bd/conexaoMysql.php');


function inserir($arrayUsuarios){
    
    
    $sql = "insert into tblusuarios
          (
          nome,
          usuario,
          senha
          
          )
          
          values
          (
          '".$arrayUsuarios['nome']."',
          '".$arrayUsuarios['usuario']."',
          '".$arrayUsuarios['senha']."'
          
          
          )
    
       ";
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao , $sql))
        return true;
    
    else
        return false;
    
    
}








?>