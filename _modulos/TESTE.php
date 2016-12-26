<?php

print"ola mundo";

 $resetaSenha = isset($_GET['param']) ? $_GET['param'] : '';


?>

<form id="teste" action="salvarteste.php">

<input type="text" id="txt"/>
<a href="teste.php?param=1">param </a>
<button type="submit"  id="salvar">salvar</button>

</form>