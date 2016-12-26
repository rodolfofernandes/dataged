<?php

require("util.class.php");

function consultaUsuario($id_usuario)
{
          require("conexao.php");

    
$query = "SELECT * FROM tbl_usuario where id_usuario = '$id_usuario'";
$dados = mysqli_query($conn,$query);
$row = mysqli_fetch_array($dados);

switch($row['tp_acesso'])
{
    case 1:
            $row['categoria'] = 'administrador';
        break;
    
    case 2:
            $row['categoria'] = 'arquivista';
        break;

    case 3:
            $row['categoria'] = 'operador'; 
        break;

}

$nome = $row['nm_usuario'];
$nome = explode(' ',$nome);

$row['nome'] = $nome[0];
$row['snome']= $nome[1];

$row['dt_nascimento'] = formatadatatela($row['dt_nascimento']); //metodo dentro do util




return $row;
}

function alteraUsuario($id_usuario,$dadosUser)
{

  require("conexao.php");


$nome = $dadosUser['txtFirstName'].' '.$dadosUser['txtLastName'];
$cpf = $dadosUser['txtCpf'];
$dt_nasc = formatadatabanco($dadosUser['txtDateofBirth']);
$email = $dadosUser['txtEmail'];
$sexo = $dadosUser['rblGender'];

$query = "UPDATE tbl_usuario SET cd_cpf = '$cpf',nm_usuario = '$nome', ds_email = '$email', dt_nascimento = '$dt_nasc', tp_sexo ='$sexo' WHERE id_usuario = '$id_usuario'";
$dados = mysqli_query($conn,$query);

return $dados;



}

function alteraSenha($id_usuario,$senha)
{ 
    require("conexao.php");

    $senha = md5(trim($senha));
      
    $query = "UPDATE tbl_usuario SET cd_senha = '$senha' where id_usuario = '$id_usuario'";
    $dados = mysqli_query($conn,$query);

    return $dados;
}

function uploadImagem($imagem, $id_usuario)
{
    require("conexao.php");

 
         
    $query = " UPDATE tbl_usuario SET img_usuario = '$imagem' where id_usuario = $id_usuario";                
    $dados = mysqli_query($conn,$query);

    return $dados;
}

    function consultaImagem($id_usuario)
    {
    require("conexao.php");

    $query = "SELECT img_usuario FROM tbl_usuario where id_usuario = '$id_usuario'";
    $dados = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($dados);
    $image = $row['img_usuario'];
 
    
    return $image;

    }

?>