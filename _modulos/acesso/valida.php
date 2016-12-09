<?php
session_start();

require ("../funcaoBD/acesso.class.php");



// Recupera o login 
$login = isset($_POST["UserName"]) ? addslashes(trim($_POST["UserName"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["Password"]) ? md5(trim($_POST["Password"])) : FALSE; 


if(!$login || !$senha) 
{ 
header("Location: login.php?errorid=1");

}else{

$valida = ValidaLogin($login,$senha);



        if($valida == 1)
        {
           
            $_SESSION['user'] = $login;
            $_SESSION['password'] = $senha;

            header("Location: ../principal/main.php"); 
        }else
        {
       header("Location: login.php?errorid=1");
        }  

} 



?> 






