
<?php

session_start();

require("../funcaoBD/usuario.class.php");
require("../funcaoBD/acesso.class.php");
$dados = $_POST;
$senha = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
$senhaconf = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';

if($senha != '' && $senhaconf != '')
{

    if($senha != $senhaconf)
    {
    header("location: dadospessoais.php?errorid=1");
    }

    else
    {
        if(alteraSenha($_SESSION['id_usuario'],$senha)) 
        {
           $senhalterada = 1;
        } 

        
    }

}
if(alteraUsuario($_SESSION['id_usuario'],$dados) && $senhalterada == '1')
{
    $desconecta = desconecta();
}else
{
 
    if ($_FILES['fuPhoto']['size'] != 0) {

        $image = file_get_contents($_FILES['fuPhoto'] ['tmp_name']);
        $image_name = addslashes($_FILES['fuPhoto']['name']);
        $image_syze = getimagesize($_FILES['fuPhoto'] ['tmp_name']);
        $image = base64_encode($image);
        $upload = uploadImagem($image,$_SESSION['id_usuario']);
    }


    header("location: dadospessoais.php");

}

  

 
 




        ?>









