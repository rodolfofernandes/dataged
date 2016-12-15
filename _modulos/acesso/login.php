


<?php

session_start();
error_reporting(0); 

if( $_SESSION['user'] != '')
{
    header("Location: ../principal/main.php");
}

 require("../Loginheader.php");


$erro = $_GET['errorid']; //para saber se o usuario foi digitado ou nao

 ?>

<body>

<div class="container">
    
<form name="login" method="post" action="valida.php" id="login" class="form-signin ng-pristine ng-valid">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" ="/wEPDwUKLTY0NzYxNzMwMQ8WAh4HU2l0ZVVybAUfaHR0cHM6Ly9kdGMtc2VydmVyMDEvc2l0ZXMvZGVtbxYCAgMPZBYCAgUPFgIeBFRleHQFBERlbW9kZNY6yDH0adZD3GrikzBdHpO5OCUB">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['login'];
if (!theForm) {
    theForm = document.login;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="../../arquivos/js/WebResource.axd" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
var MSOWebPartPageFormName = 'login';//]]>
</script>

<script src="../../arquivos/js/ScriptResource.axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="../../arquivos/js/ScriptResource(1).axd" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A2CC1DA6">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBgL/qrbMBwKi4JP5CQKQ2r/rCwKMqr2nAwK4+7bYCAKFzrr8AWA4akKfeSSNbCK2J9EDJbykZXvD">
</div> 
        
    <!-- handles SharePoint scripts -->
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager', document.getElementById('login'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tupRecoverPassword'], [], [], 90);
//]]>
</script>

    
    <div class="page-header">
        <center>
        <img src="../../arquivos/img/dataxdoc-logo.png" style="width:400px;"/><span></span>
        </center>
    </div>   
     <?php
        if($erro ==1)
        {

      ?>
            <h4 class="form-signin-heading" style="color:red;">Usuário ou Senha inválidos</h4>
      <?php
        }else{
            ?>
           
           <h2 class="form-signin-heading">Bem Vindo</h2>
            <?php

        }

     ?>
   
 

    <table id="signIn" class="table" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
	<tbody><tr>
		<td>
            <div class="form-group">
                <input name="UserName" type="text" id="UserName" class="form-control" placeholder="Nome de usuário" ng-model="username">                            
            </div>
            <div class="form-group">
                <input name="Password" type="password" id="Password" class="form-control" placeholder="Senha" ng-model="password">
            </div>
            <div>
                <input type="submit" name="btnSignIn" value="Entrar" id="sbtnSignIn" class="btn btn-primary form-control">
            </div>
        </td>
	</tr>
    </form>
</tbody></table>                       
    <div class="form-group">
        <a id="pageDemo4" href="login.php">Esqueci minha senha</a>
    </div>    	    
    <div>
       <a href="http://www.datacopy.com.br/">Desenvolvido por Datacopy® </a>
    </div>    

    <div id="recover-password" class="modal-wrapper" style="display:none;">
        <img class="close" src="../../arquivos/img/close.png">
        <h4>Esqueci minha senha</h4>
        <p>Receba sua senha pelo e-mail, digitando o número do CPF. Sua senha será enviada para o seu endereço de email cadastrado no sistema.</p>
        <div id="upRecoverPassword" placeholder="Senha" ng-model="password">
	
                <input name="txtCPF" type="text" id="txtCPF" class="cpf" placeholder="CPF">
                <input type="submit" name="btnSend" value="Enviar" id="btnSend" class="button">
            
</div>
    </div>
	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script>window.jQuery || document.write('<script src="../../arquivos/scripts/jquery/jquery-1.11.3.min.js"><\/script>')</script><script src="../../arquivos/js/jquery-1.11.3.min.js"></script>


	<!-- More Scripts-->
    <script src="../../arquivos/js/jquery.blockUI.js"></script>
    <script src="../../arquivos/js/jquery.mask.min.js"></script>   
    
    <script src="../../arquivos/js/_site.js"></script>
    <script src="../../arquivos/js/page.js"></script>   
    


</div>



</body></html>