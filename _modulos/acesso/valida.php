<?php
session_start();

require ("../funcaoBD/acesso.class.php");



// Recupera o login 
$login = isset($_POST["UserName"]) ? addslashes(trim($_POST["UserName"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["Password"]) ? md5(trim($_POST["Password"])) : FALSE; 


$status = verificaStatus($login);
    

if ($status != 1 && $status != 3) 
    {
        header("Location: login.php?errorid=$status");
    }else

    {
        if(!validaLogin($login,$senha))
        {
            header("Location: login.php?errorid=1");
        }

        else
        {
            header("Location:../principal/main.php");
        }

    }   









?> 






