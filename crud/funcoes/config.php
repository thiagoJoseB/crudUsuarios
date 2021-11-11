<?php

define('SRC',
$_SERVER['DOCUMENT_ROOT'].'/ds2t20212/thiago/adm/crud/');


   


    //Mensagens de Erro do sistema
const ERRO_CONEXAO_BD = "Não foi possivel realizar a conexão com o Banco de Dados, entre em contato com o Administrador do sistema.";

const ERRO_CAIXA_VAZIA = "Não foi possivel realizar a operção, pois existem campos obrigatórios a serem preenchidos";

const ERRO_MAXLENGHT = "Não foi possivel realizar a operção, pois a quantidade de caracteres ultrapassa o permitido no Banco de Dados";

//Mensagens de aceitação e validação de dados no BD
const BD_MSG_INSERIR = "Registro salvo com sucesso no Banco de Dados!";
const BD_MSG_EXCLUIR = "
            <script>
                alert('Registro excluido com sucesso do Banco de Dados');
                window.location.href='../index.php';
            </script>";
const BD_MSG_ERRO = "ERRO: Não foi possivel manipular os dados no Banco de Dados!";
   

    
   


?>











