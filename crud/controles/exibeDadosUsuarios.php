<?php



require_once('../crud/bd/listarUsuarios.php');


function exibirUsuarios(){
    
    ///  chama funcao que pega os dados no banco e recebe os registros
    
    $dados = listar();
    
    return $dados;
    
}




?>