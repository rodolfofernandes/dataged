
<?php
session_start();
/* 
    OBJETIVO DA FUNÇAO

    -- ALTERAR DADOS DE USUARIOS

    -- Esta fuNçao é utilizada pelas paginas, dadospessoais e  editarusuario */

/*
~~Observações

    Dentro do html há um input hidden para pegar o nome da pagina.

    somente na alterar dados eu tenho um outro campo hidden para pegar o user id.


*/





/* usando as clases*/ 
require("../funcaoBD/usuario.class.php");
require("../funcaoBD/acesso.class.php");



$dados = $_POST; /* todos os dados do post serao armazenados para passar como parametro para a classe */
$page = $_POST['nomePagina']; /* Descobrindo de onde veio a requisiçao se da dados pessoais ou editar usuario*/

$senha = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : ''; /*Verificando se a senha veio vazia*/
$senhaconf = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';/*Verificando se a condfirmaçao de senha veio vazia*/
$dados['chkActivated'] = isset($_POST['chkActivated']) ? $_POST['chkActivated']: ''; /* Verifica se o checkbox foi ativo*/
if($dados['chkActivated'] == '')
{
    $dados['chkActivated'] = 2;

}else
{
    $dados['chkActivated'] = 1;
}





if ($page == 'dadospessoais') {/* Aqui verifica de qual pagina veio as informaçoes. Caso venha das dados pessoais, o id será do usuario que esta logado */
       $id_usuario = $_SESSION['id_usuario'];
       $dados['tp_acesso'] = $_SESSION['tp_acesso'];

}else
{
    $id_usuario = $dados['id_usuario'];/* Aqui verifica de qual pagina veio as informaçoes. Caso venha das alteradados, o id será do usuario que foi selecionado */
    $dados['tp_acesso'] = isset($_POST['rblRoles']) ? $_POST['rblRoles']: '';
}

if($senha != '' && $senhaconf != '') /* Aqui verifica se os campos vieram em branco, se nao vieram em branco, significa que o usuario quer trocar a senha */
{

    if($senha != $senhaconf) /* Verifica que o usuario digitou as senhas iguais, caso nao, o sitema retorna um ERRORID */
    {
    header("location: dadospessoais.php?errorid=1");

    }

    else  /* com os dados das senhas iguais, a funçao de troca de senha é chamada */
    {
        $senhaAlterada = alteraSenha($id_usuario,$senha) ; /* Funçao que altera a senha "usuario.class" */
        $senhalterada = 1;
        
    }
}







if(alteraUsuario($id_usuario,$dados) && $senhalterada == 1 && $page != "editausuario.php") /* Aqui a funçao vai pegar todos os dados enviados via post e fará o update na base, Se caso a senha foi alterada tambem ele  vai desconectar e redirecionar para a pagina de login */
{
    $desconecta = desconecta();
}else

{
 
    if ($_FILES['fuPhoto']['size'] != 0) { /* Essa funçao verifica se o usuario enviou alguma imagem, caso sim ele faz o processo de update */

     $image = file_get_contents($_FILES['fuPhoto'] ['tmp_name']);
        $image_name = addslashes($_FILES['fuPhoto']['name']);
        $image_syze = getimagesize($_FILES['fuPhoto'] ['tmp_name']);
        $image = base64_encode($image);
        $upload = uploadImagem($image,$_SESSION['id_usuario']);
    }


    if ($page == 'editausuario.php') {
        header("location: editausuario.php?id=$id_usuario");
        
    }else
    {
        header("location: dadospessoais.php");
    }


}

  


        ?>









