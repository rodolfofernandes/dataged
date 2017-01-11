


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
    
    <?php   /* Vai veificar qual a mensagem de erro se houver.*/

        switch ($erro) {
            case '0':
                $msg = "Usuário Exluído";
                $style = 'style="color:red;"';
                break;
            case '1':
                $msg = "Usuário e Senha Inválidos";
                $style = 'style="color:red;"';
                break;
            case '2':
                $msg = "Usuário Bloqueado";
                $style = 'style="color:red;"';
                break;
            case '4':
                $msg = "Usuário Inativo";
                $style = 'style="color:red;"';
                break;
            default:
                $msg = "Bem Vindo";
                $style = "";
                break;
        }



    ?>



    <h4 class="form-signin-heading"<?=$style?> > <?=$msg?></h4><hr>    
   
 

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
        <a id="pageDemo4" href="login.php?errorid=e">Esqueci minha senha</a>
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
    <script src="../../arquivos/scripts/_plugins/jquery.blockUI/jquery.blockUI.js"></script>
    <script src="../../arquivos/scripts/_plugins/jquery.mask/jquery.mask.min.js"></script>   
    
    <script src="../../arquivos/js/_site.js"></script>
    <script src="../../arquivos/js/page.js"></script>   
    


</div>



</body></html>