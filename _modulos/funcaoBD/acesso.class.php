
<?php

function ValidaLogin($login,$senha)
{
    require ("conexao.php");

$query = "SELECT * FROM tbl_usuario where nm_login = '$login'";
$dados = mysqli_query($conn,$query);
$row = mysqli_fetch_array($dados);

if($senha == $row['cd_senha'] )
{
    
    $_SESSION["id_usuario"]= $row["id_usuario"]; //pega o id do usuario e coloca na sessão 
    $_SESSION["nm_usuario"] = stripslashes($row["nm_usuario"]); //Guarda o nome do usuario da sessao
    $_SESSION["tp_usuario"]= $row["tp_usuario"]; // Pega o tipo de usuario para poder definir as permissoes dentro do sistema

    
    return '1';

}else{
    
    return '0';
}



}


?>