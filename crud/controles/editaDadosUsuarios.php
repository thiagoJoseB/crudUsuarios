<?php

require_once('../funcoes/config.php');

require_once(SRC.'bd/listarUsuarios.php');


$idUsuarios = $_GET['id'];

$dadosUsuarios = buscar($idUsuarios);

//converte o resultado do BD em um array 
    //através mysqli_fetch_assoc
if($rsUsuarios=mysqli_fetch_assoc($dadosUsuarios))
 { 
    
    //Ativa a utilização de variaveis de sessão 
        //(são varaivels) globais
    session_start();


//Criamos uma variavel de sessão para guardar o array
//com os dados do cliente que retornou do BD
$_SESSION['usuario'] = $rsUsuarios;

 //Permite chamar um arquivo como se fosse um link,
        //através do php
        header('location:../index.php');
    }
    else
        echo("
                <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");







?>