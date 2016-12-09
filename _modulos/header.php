

<?php
 

   if($_SESSION['user'] == null)
   {
       header("Location: ../acesso/login.php");
   }

   
?>



<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Expires" content="0"><meta http-equiv="X-UA-Compatible" content="IE=8"><meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- robots -->
    

    <!-- page title - overridden by asp:content on pages or page layouts -->
    <title>
	
    Principal - DataXDOC

</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="https://dtc-server01/Style%20Library/sitename/favicon.ico" type="image/vnd.microsoft.icon">

    <!-- link para o normalize.css -->
    <link rel="stylesheet" href="../../arquivos/css/normalize.css">

    <!-- all OOTB css -->
    <link rel="stylesheet" type="text/css" href="../../arquivos/css/search.css">
<link rel="stylesheet" type="text/css" href="../../arquivos/css/corev4.css">


    <!-- page manager interacts with script and the sharepoint object model -->
    

    <!-- unified logging service -->
    

    <!-- identifies to scripting elements that this is a v4 master page. required for scrolling? -->
    <script type="text/javascript">
        var _fV4UI = true;
    </script>

    <!-- load SharePoint javascript -->
    <script type="text/javascript">
// <![CDATA[
document.write('<script type="text/javascript" src="/_layouts/dataxdoc/scripts/jquery.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/dataxdoc/scripts/jquery-ui.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/dataxdoc/scripts/_plugins/jquery-file-upload-9.11.2/js/jquery.iframe-transport.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/dataxdoc/scripts/_plugins/jquery-file-upload-9.11.2/js/jquery.fileupload.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/dataxdoc/scripts/main/page.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/1033/init.debug.js?rev=%2FOmktAG7ectPWwTJWj46Jg%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/ScriptResource.axd?d=XvvOo7W8vztjXeS3rN4QshK7dJ9Rf64cIYNEf7yRvL0pq-xzXzZfJ-m7k3hFS1JcBiHJVIeNJhvMEBBhkDPW-8mrmwxx5Ef6eeuFDq067dCvuBXn6mKLufmw375pgT3aFFKcGDo_g8ZgXAQ3nnd4mkigSYDJ30eFqakFxh9YszcC9-Sq0&amp;t=2e2045e2"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/blank.debug.js?rev=jE3bS2JFTB63z3iWgauX9w%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/ScriptResource.axd?d=P29XPZimyuWYZwUctD5YCMrRCV6pv9w_1DvZuC05yKDniml0iAr1G7sKr3ruhV0yxBWqOj2Sz4grAcHn5NTxEz7-cUQDi-vVa_iVt-BIMpFaOtmx9BSDHaLkza8YuEEGAVOTmnj6vN_kxg994bfu2X3UyMCQh-iWe0sUNkjFEk_pbnlq0&amp;t=2e2045e2"></' + 'script>');
// ]]>
</script><script type="text/javascript" src="../../arquivos/js/jquery.js"></script><script src="../../arquivos/js/jquery-1.12.3.min.js"></script><script type="text/javascript" src="../../arquivos/js/jquery-ui.js"></script><script src="../../arquivos/js/jquery-ui.min.js"></script><script type="text/javascript" src="../../arquivos/js/jquery.iframe-transport.js"></script><script type="text/javascript" src="../../arquivos/js/jquery.fileupload.js"></script><script type="text/javascript" src="../../arquivos/js/page.js"></script><script type="text/javascript" src="../../arquivos/js/init.debug.js"></script><script type="text/javascript" src="../../arquivos/js/ScriptResource.axd"></script><script type="text/javascript" src="../../arquivos/js/blank.debug.js"></script><script type="text/javascript" src="../../arquivos/js/ScriptResource(1).axd"></script>


    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    
    <!-- The basic File Upload plugin -->
        

    <script type="text/javascript">

        var siteUrl = window.location.href;

        $(function () {
            var exceeded = false
            var validateLimit = true;
            var totalSize = 0;

            $("#fileupload").fileupload({
                replaceFileInput: false,
                formData: function (form) {
                    return [{ name: "siteUrl", value: siteUrl }, { name: "userId", value: _spPageContextInfo.userId }];
                },
                dataType: 'json',
                autoUpload: false,
                url: '/_layouts/dataxdoc/Upload.ashx',
                limitMultiFileUploadSize: 20480000,
                add: function (e, data) {
                    if (exceeded === false && validateLimit === true) {
                        $("button.start").prop("disabled", false);

                        $.each(data.originalFiles, function (index, file) {
                            var result = totalSize + file.size;

                            if (result > 51200000) {
                                exceeded = true;
                                return false;
                            }

                            totalSize += file.size;

                        });

                        validateLimit = false;
                    }

                    if (exceeded === true) {
                        if (data.originalFiles[data.originalFiles.length - 1].name === data.files[0].name) {
                            for (var index = data.originalFiles.length - 1; data.originalFiles.length > 0; index--) {
                                data.originalFiles.splice(index, 1);
                            }

                            exceeded = false;

                            alert("O tamanho do(s) documento(s) selecionado(s) excede o limite permitido de 50MB por envio.");

                            data.files.splice(0, 1);
                        }

                        return;
                    }
                    else {
                        if (data.originalFiles[data.originalFiles.length - 1].name === data.files[0].name) {
                            validateLimit = true;
                        }
                    }

                    $(".uploaded").remove();

                    data.context = $('<div class="fileUploadQueueItem" />').appendTo('#fileUploadQueue');

                    $.each(data.files, function (index, file) {
                        var size = parseFloat(Math.round(file.size / 1024)).toFixed(2);
                        var name = file.name.substring(0, 30) + "...";
                        var invalidChars = '[&{}#%]';

                        var node = $('<span class="fileName" />').text(name + ' (' + size + 'KB)');


                        if (name.match(invalidChars)) {
                            node.html(name + '<span class="msgError"> Contém caracter inválido: & { } # %</span>');
                        }

                        file.uploadID = file

                        node.appendTo(data.context);

                        $.each(data.originalFiles, function (i, originalFile) {
                            if (file.name === originalFile.name) {
                                node = $('<div class="cancel item' + i + '" />').append($('<a id="' + i + '" />').append($('<img />').prop("src", "/_layouts/images/dataxdoc/site/cancel.png")));

                                node.appendTo(data.context);

                                //node = $('<div class="fileUploadProgress item' + i + '" />').append($('<div class="fileUploadProgressBar progress-bar-success" />'));

                                node.appendTo(data.context);

                                $(".fileUploadQueueItem .cancel.item" + i + " a").click(function () {
                                    id = $(this).prop("id");

                                    data.originalFiles.splice(i, 1);
                                    data.files.splice(0, 1);

                                    $(this).parent().parent().remove();

                                    if (data.originalFiles.length === 0) {
                                        $("button.start").prop("disabled", true);

                                    }
                                });
                            }

                        });
                    });

                    $('#progress .progress-bar').css('width', '0%');
                  
                    $("button.start").click(function () {

                        if (data.files.length > 0) {
                            data.submit();

                            $("button.start").prop("disabled", true);

                            totalSize = 0;

                            data.files.length = 0;
                            //data.context.remove();
                        }

                        return false;
                    });
                },
                progress: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);

                    $.each(data.files, function (index, file) {

                        $.each(data.originalFiles, function (i, originalFile) {

                            if (file.name === originalFile.name) {
                                $('.fileUploadProgress.item' + i + ' .progress-bar-success').css(
                                    'width',
                                    progress + '%'
                                );
                            }
                        });
                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);

                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );

                    $(".fileUploadQueueItem").addClass("uploaded");
                    $(".fileUploadQueueItem .cancel").remove();

                    //if (progress == 100) {
                    //    data.files.splice(0, 1);
                    //}
                },
                fail: function (e, data) {

                }
            });

        });

    </script>

    

    <style type="text/css">
        /* fix scrolling on list pages */
        #s4-bodyContainer {
            position: relative;
        }

        /* hide body scrolling (SharePoint will handle) */
        body {
            height: 100%;
            overflow: hidden;
            width: 100%;
        }

        /* popout breadcrumb menu needs background color for firefox */
        .s4-breadcrumb-menu {
            background: #F2F2F2;
        }

        /* if you want to change the left nav width, change this and the margin-left in .s4-ca */
        body #s4-leftpanel {
            /* width:155px; */
        }

        /* body area normally has a white background */
        .s4-ca {
            background: transparent none repeat scroll 0 0;
            /* margin-left:155px; */
        }
    </style>

    <!-- link to our custom css  -->


    <!-- link para o nosso css do site -->
    <link rel="stylesheet" href="../../arquivos/css/site.css" media="all">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../arquivos/css/col.css" media="all"><link rel="stylesheet" href="../../arquivos/css/2cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/3cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/4cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/5cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/6cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/7cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/8cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/9cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/10cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/11cols.css" media="all"><link rel="stylesheet" href="../../arquivos/css/12cols.css" media="all">

    <!-- link para o css de plugins -->
    <link rel="stylesheet" type="text/css" href="../../arquivos/css/jquery.fileupload.css"><link rel="stylesheet" type="text/css" href="../../arquivos/css/jquery.mCustomScrollbar.css">

    <!-- Responsive Stylesheets -->
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="../../arquivos/css/1024.css"><link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="../../arquivos/css/768.css"><link rel="stylesheet" media="only screen and (max-width: 480px)" href="../../arquivos/css/480.css">

    <!-- javascript to override the active-x message in ie 
		// See http://blog.drisgill.com/2010/02/removing-name-activex-control-warning.html for more info
		// Remove if the IM pressence icons are needed in SharePoint
	-->
    <script type="text/javascript">
        function ProcessImn() { }
        function ProcessImnMarkers() { }
    </script>

    <!-- additional header delegate control -->
    

    <!-- additional header placeholder - overridden by asp:content on pages or page layouts -->
    

    

    

    

    


    <link rel="stylesheet" type="text/css" href="../../arquivos/css/tabs.css">

    <!-- CSS do Layout Padrão -->
    <link rel="stylesheet" href="../../arquivos/css/page.css">
    <link rel="alternate stylesheet" title="default-list" href="https://dtc-server01/_layouts/dataxdoc/styles/main/list.css" disabled="">


    <!-- CSS do Layout Simplificado -->
    <link rel="stylesheet" href="../../arquivos/css/page(1).css">
    <link rel="stylesheet" title="simplified-grid" href="../../arquivos/css/grid.css" disabled="">
    <link rel="alternate stylesheet" type="text/css" title="simplified-list" href="../../arquivos/css/list.css" disabled="">

    <!-- Responsivo do Layout Simplificado  -->
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="../../arquivos/css/1024(1).css">
    <link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 622px)" href="../../arquivos/css/768(1).css">
    <link rel="stylesheet" media="only screen and (max-width: 621px) and (min-width: 481px)" href="../../arquivos/css/621.css">
    <link rel="stylesheet" media="only screen and (max-width: 480px)" href="../../arquivos/css/480(1).css">

    <link rel="alternate stylesheet" media="only screen and (max-width: 621px) and (min-width: 481px)" title="simplified-list" href="https://dtc-server01/_layouts/dataxdoc/styles/simplified-layout/_621.css" disabled="">
    <link rel="alternate stylesheet" media="only screen and (max-width: 480px)" title="simplified-list" href="https://dtc-server01/_layouts/dataxdoc/styles/simplified-layout/_480.css" disabled="">

    

    <script>
        $(document).ready(function () {
            $('table tbody tr:odd').addClass('zebraUm');
            $('table tbody tr:even').addClass('zebraDois');
        });
    </script>


    <!-- microsoft says these should always be inside the head tag. -->
    <style type="text/css">
	.ctl00_PlaceHolderTabArea_tvFolders_0 { text-decoration:none; }
	.ctl00_wpz_0 { border-color:Black;border-width:1px;border-style:Solid; }

</style><script src="../../arquivos/js/jquery.mousewheel.min.js"></script><script type="text/javascript" src="../../arquivos/js/core.debug.js"></script><script type="text/javascript" src="../../arquivos/js/sp.core.debug.js"></script><script type="text/javascript" src="../../arquivos/js/ScriptResx.ashx"></script><script type="text/javascript" src="../../arquivos/js/cui.debug.js"></script><script type="text/javascript" src="../../arquivos/js/search.js"></script><script type="text/javascript" src="../../arquivos/js/sp.ui.dialog.debug.js"></script><script type="text/javascript" src="../../arquivos/js/sp.runtime.debug.js"></script><script type="text/javascript" src="../../arquivos/js/sp.debug.js"></script><script type="text/javascript" src="../../arquivos/js/inplview.debug.js"></script><script type="text/javascript" src="../../arquivos/js/sp.ribbon.debug.js"></script></head>

<body scroll="no" onload="javascript:_spBodyOnLoadWrapper();">

<form name="aspnetForm" method="post" action="https://dtc-server01/sites/demo/sitepages/main.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="aspnetForm">


<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
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
var MSOWebPartPageFormName = 'aspnetForm';
var g_presenceEnabled = true;
var g_wsaEnabled = false;
var g_wsaLCID = 1033;
var g_wsaSiteTemplateId = 'STS#1';
var g_wsaListTemplateId = null;
var _fV4UI=true;var _spPageContextInfo = {webServerRelativeUrl: "\u002fsites\u002fdemo", webLanguage: 1033, currentLanguage: 1033, webUIVersion:4,userId:18, alertsEnabled:false, siteServerRelativeUrl: "\u002fsites\u002fdemo", allowSilverlightPrompt:'True'};//]]>
</script>
<script type="text/javascript">
<!--
var L_Menu_BaseUrl="/sites/demo";
var L_Menu_LCID="1033";
var L_Menu_SiteTheme="";
//-->
</script><script type="text/javascript">
<!--
//-->
</script>
<script src="../../arquivos/js/ScriptResource(2).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[

    function TreeView_PopulateNodeDoCallBack(context,param) {
        WebForm_DoCallback(context.data.treeViewID,param,TreeView_ProcessNodeData,context,TreeView_ProcessNodeData,false);
    }
var ctl00_PlaceHolderTabArea_tvFolders_Data = null;//]]>
</script>

<script src="../../arquivos/js/blank.debug.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
if (typeof(DeferWebFormInitCallback) == 'function') DeferWebFormInitCallback();function WebForm_OnSubmit() {
UpdateFormDigest('\u002fsites\u002fdemo', 1440000);
                    var workspaceElem = GetCachedElement("s4-workspace");
                    if (workspaceElem != null)
                    {
                        var scrollElem = GetCachedElement("_maintainWorkspaceScrollPosition");
                        if (scrollElem != null)
                        {
                            scrollElem.value = workspaceElem.scrollTop;
                        }
                    };
                return _spFormOnSubmitWrapper();
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="DBB9D338">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWGQKvzMbGCQL/6516AtP5wYoBAvmlu4ACApTtuYYEAoLT3pcHAquW4fUDAqG6rccIAoLT+pcHAquWhfYDAsOxtIoMAojalS4CgcKS1gwC2rXVkwMCy6Sc0AMCqv72uwgC6cuCnwoC9sSAwAsCzM3MDgKx5K75BQLH+rePDgLg3pu4CwKpn5bCCwLNrvW5AwK9+p7tApQPjWF1dLs/t/LUGLxJAzm7IshL">
</div>

    <!-- handles SharePoint scripts -->
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl00$PlaceHolderMain$upMain','tctl00$PlaceHolderTabArea$upFolders','tctl00$PlaceHolderTabArea$upDocuments','fctl00$WebPartAdderUpdatePanel','tctl00$panelZone'], ['ctl00$PlaceHolderTabArea$lbtnIndexDocument','ctl00$PlaceHolderTabArea$lbtnDeleteDocument'], ['ctl00$WebPartAdder'], 90);
//]]>
</script>


    <!-- controls the web parts and zones -->
    

    <div id="wrapper">

        <div id="head-container">
            <header class="group">
                <div id="logo">
                    <a href="main.php">
                        <img src="../../arquivos/img/logo.png" alt="Demo" style="border-width:0px;">
                    </a>
                </div>
                <a id="nav-toggle">Menu</a>
                <div id="header-items">
                    <div id="header-search">
                        

<div class="search-bar">
    <input name="ctl00$Search$txtSearch" type="text" id="ctl00_Search_txtSearch" placeholder="Busca">
    <input type="submit" name="ctl00$Search$btnSearch" value="Buscar" id="ctl00_Search_btnSearch" class="button">
</div>

                    </div>
                    <div id="header-menu">
                        

<div id="site-menu">
    <div id="zz1_mnuSite" class="menu-container">
	<div class="menu horizontal menu-horizontal">
		<ul class="root static">
			<li class="static"><a class="static menu-item" title="Relatório" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/report.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/report-24x24.png" alt=""><span class="menu-item-text">Relatório</span></span></a></li><li class="static dynamic-children"><a class="static dynamic-children menu-item" title="Configurações do Site"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/settings-24x24.png" alt=""><span class="menu-item-text">Configurações do Site</span></span></a><ul class="dynamic">
				<li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/users-24x24.png" alt=""><span class="menu-item-text">Usuários</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/old/settings/managefiles.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/file-cabinet-24x24.png" alt=""><span class="menu-item-text">Locais de Guarda</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/permissions.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/access-24x24.png" alt=""><span class="menu-item-text">Permissões</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/content-types-and-indexers.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/content-type-24x24.png" alt=""><span class="menu-item-text">Tipos Documentais</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/general/general-settings.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/general-settings-icon.png" alt=""><span class="menu-item-text">Geral</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/settings.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/configuracao-site.png" alt=""><span class="menu-item-text">Configurações do Site</span></span></a></li>
			</ul></li><li class="static dynamic-children"><a class="static dynamic-children menu-item"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/user-24x24.png" alt=""><span class="menu-item-text">Olá, <?=$_SESSION['user'];  ?> </span></span></a><ul class="dynamic">
				<li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/old/my/lastindexeddocuments.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/last-indexed-docs-24x24.png" alt=""><span class="menu-item-text">Meus Últimos Documentos Indexados</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/my/personal-info.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/personal-info-24x24.png" alt=""><span class="menu-item-text">Meus Dados Pessoais</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="../acesso/logout.php"><span class="additional-background"><img class="menu-item-image" src="../../arquivos/img/sign-out-24x24.png" alt=""><span class="menu-item-text">Sair</span></span></a></li>
			</ul></li>
		</ul>
	</div>
</div>
</div>


                    </div>
                </div>
            </header>  
        </div>