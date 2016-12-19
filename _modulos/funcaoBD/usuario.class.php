<?php


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

$dtnasc = $row['dt_nascimento'];
$dtnasc = explode('-',$dtnasc);
$dtnasc = $dtnasc[2].'/'.$dtnasc[1].'/'.$dtnasc[0];
$row['dt_nascimento'] = $dtnasc;


return $row;
}






?>