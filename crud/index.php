<?php

//Ativa a utilização de variaveis de sessão
    session_start();




$nome = (string) null;

$usuario = (string) null;

$senha = (string) null;

$id = (int) 0;


$modo = (string) "Salvar";

require_once('funcoes/config.php');

require_once('../crud/controles/exibeDadosUsuarios.php');



//require_once('../crud/bd/conexaoMysql.php');


if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario']['idusuarios'];
   $nome = $_SESSION['usuario']['nome'];  
   $usuario = $_SESSION['usuario']['usuario'];  
   $senha = $_SESSION['usuario']['senha'];  
     
    
    unset($_SESSION['usuario']);
    
}




    
?>



          
<html>
    
    <head>
        <link rel="stylesheet"
        type="text/css"
        href="css/style.css">
        <meta charset="utf-8">
        
    
    </head>
    
    
    

    
    
  <body>
      
      <form action="controles/recebeDadosUsuarios.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post">
      
        <div id="cadastro">
            
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">NOME</label>
        <input type="text"  name="txtNome" class="inputCadastro" value="<?=$nome?>">
            
        </div> 
            
       <div class="cadastroUsuario">
            
        <label class="labelRegistro">USUARIO</label>
        <input type="text" name="txtUsuario" class="inputCadastro" value="<?=$usuario?>">
            
        </div>  
        
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">SENHA</label>
        <input  type="password" name="txtSenha" class="inputCadastro" value="">
                              
        </div>
            
     <button id="botao"type="submit" value="<?=$modo?>" name="btnEnviar"> SALVAR</button>
        
        
        
        </div>
          
    </form>
      
      
 
      
    
            
      <table class="tblRegistro" >
          <tr>
              <td class="colunasRegistro">
              NOME
              </td>
              <td class="colunasRegistro">
              USUARIO
              </td>
            <!--  <td class="colunasRegistro">
              SENHA
              </td>-->
              <td class="clnRegistro"></td>
          
          
          </tr>
          
          <?php
    
         $dadosUsuarios = exibirUsuarios();
            while($rsUsuarios=mysqli_fetch_assoc($dadosUsuarios))
            {
    
    
      ?>
          
           <tr>
              <td class="colunasResultado"><?=$rsUsuarios['nome']?></td>
              <td class="colunasResultado"><?=$rsUsuarios['usuario']?></td>
              
               <td class="clnRegistro">
               
                <a href="controles/editaDadosUsuarios.php?id=<?=$rsUsuarios['idusuarios']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
                        <a onclick="return confirm
                           ('Tem certeza que deseja ecluir?');" href="controles/excluiDadosUsuarios.php?id=<?=$rsUsuarios['idusuarios']?>">
                            
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                   
                   
               </td>
          
          
          </tr>
         <?php 
                
                    }
            
            
                ?>
           
      
      </table>
      
     
    
    
    
    
    
    
    </body>

</html>