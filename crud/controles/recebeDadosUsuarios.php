<?php

require_once('../funcoes/config.php');


require_once(SRC.'bd/inserirUsuarios.php');


/// declaracao de variavel 

$nome = (string) null;
$usuario = (string) null;
$senha = (string) null;


//Validação para saber se o id do registro está chegando 
    // pela URL (modo para "Atualizar" um registro)

if(isset($_GET['id']))
    $id = (int) $_GET['id'];

else
    $id = (int)0;






//$_SERVER['REQUEST_METHOD'] - Verifica qual o tipo de requisição foi encaminhada pelo form (GET / POST)

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Recebe os dados encaminhado pelo Formulário através do metdo POST
    
    $nome = $_POST['txtNome'];
    $usuario = $_POST['txtUsuario'];
    $senha = md5( $_POST['txtSenha']);
    
    
    //Validação de campos obrigatórios
    if($nome == null || $usuario == null || $senha == null)
       echo("<script> 
                alert('". ERRO_CAIXA_VAZIA ."'); 
                window.history.back();    
            </script>");
        //Validação de qtde de caracteres
    //strlen() retorna a qtde de caracteres de uma varaivel
    elseif(strlen($nome)> 100 || strlen($usuario)>100 || strlen($senha)>100)
         echo("<script> 
                alert('". ERRO_MAXLENGHT ."'); 
                window.history.back();    
            </script>");
    else{
        //Local para enviar os dados para o Banco de Dados
        
        //Criação de um Array para encaminhar a função de inserir
        
         
    $usuarios = array(
        
      "nome" => $nome,
       "usuario" => $usuario,
        "senha" => $senha,
        "id"  => $id
        
    );
     //validação para saber se é para inserir um novo registro
        // ou se é para atualizar um registro existente no BD
    if(strtoupper($_GET['modo']) == 'SALVAR')
    {
       
        //Chama a função inserir do arquivo inserir.php, e encaminha o array com os dados do cliente 
        if (inserir($usuarios))
            echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."');
                        window.location.href = '../index.php';
                    </script>
                ");
        else
            echo("
                    <script>
                        alert('". BD_MSG_ERRO ."');
                        window.history.back(); 
                    </script>
                ");
            
         }elseif(strtoupper($_GET['modo']) == 
          'ATUALIZAR')
        {
        
         if(editar($usuarios))
           echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."');
                        window.location.href = '../index.php';
                    </script>
                ");
            else
                echo("
                    <script>
                        alert('". BD_MSG_ERRO ."');
                        window.history.back(); 
                    </script>
                ");
        }
        
        
    }
    
    
}



?>