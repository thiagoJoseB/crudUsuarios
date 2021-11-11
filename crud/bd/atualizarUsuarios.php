<?php

require_once('../bd/conexaoMysql.php');

function editar ($arrayUsuarios)
{
    
 $sql = "update tblusuarios set 
         nome = '".$arrayUsuarios['nome']."',
         usuario = '".$arrayUsuarios['usuario']."',
         senha = '".$arrayUsuarios['senha']."'
         where idusuarios = ".$arrayUsuarios['id'];
         
 
 
       //Chamando a função que estabelece a conexão com o BD 
    
      $conexao = conexaoMysql();
    
    if(mysqli_query($conexao , $sql))
        return true;
    
    else
        return false;
 
        
    
}




?>