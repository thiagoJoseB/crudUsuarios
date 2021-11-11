<?php

//require_once('../funcoes/config.php');
require_once(SRC.'bd/conexaoMysql.php');


function listar(){
    
    $sql = "select * from tblusuarios order by
    idusuarios desc";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao , $sql)){
        
        return $select;
    }
    
    else{
        return false;
    }
    
    
    
}

function buscar ($idusuarios){
    
    $sql = "select * from tblusuarios 
     where idusuarios = ".$idusuarios;
    
    
    
    
    $conexao = conexaoMysql();
   
    $select = mysqli_query($conexao, $sql);
    
    return $select;
    
}






?>