<?php



require_once('../funcoes/config.php');

require_once('../bd/excluirUsuarios.php');



//O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
$idusuarios = $_GET['id'];


if(excluir($idusuarios))
    echo(BD_MSG_EXCLUIR);
    else
        echo("
                <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");



?>