<?php session_start(); 

if($_SESSION['user'] == null)
   {
       header("Location: ../acesso/login.php");     
   }

   if ($_SESSION['tp_acesso'] != '1' )

    {
            header("location: ../principal/main.php");
    }

    else

    {
    require("../funcaoBD/usuario.class.php");
    $usuario = consultaUsuario($_SESSION["id_usuario"]);   

    $resetaSenha = isset($_GET['param']) ? $_GET['param'] : '';
    }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0072)https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Expires" content="0"><meta http-equiv="X-UA-Compatible" content="IE=8"><meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- robots -->
	
	
	<!-- page title - overridden by asp:content on pages or page layouts -->
	<title>
	
    NOVO USUÁRIO

</title>
	
	<!-- favicon -->
	<link rel="shortcut icon" href="https://dtc-server01/Style%20Library/sitename/favicon.ico" type="image/vnd.microsoft.icon">
	
	<!-- all OOTB css -->
	<link rel="stylesheet" type="text/css" href="../../arquivosNovoUsuario/layouts.css">
<link rel="stylesheet" type="text/css" href="../../arquivosNovoUsuario/Menu.css">
<link id="CssRegistration1" rel="stylesheet" type="text/css" href="../../arquivosNovoUsuario/page.css">
<link rel="stylesheet" type="text/css" href="../../arquivosNovoUsuario/search.css">
<link id="CssRegistration2" rel="stylesheet" type="text/css" href="../../arquivosNovoUsuario/settings-page-1.css">
<link rel="stylesheet" type="text/css" href="../../arquivosNovoUsuario/corev4.css">

	
	<!-- page manager interacts with script and the sharepoint object model -->
	
	
	<!-- unified logging service -->
	
	
	<!-- identifies to scripting elements that this is a v4 master page. required for scrolling? -->
	<script type="text/javascript">
		var _fV4UI = true;
	</script>
	
	<!-- load SharePoint javascript -->
    <script type="text/javascript">
// <![CDATA[
document.write('<script type="text/javascript" src="../../arquivos/scripts/jquery.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/jquery-ui.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/load-image.all.min.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/_plugins/jquery-file-upload-9.11.2/js/jquery.fileupload.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/_plugins/jquery-file-upload-9.11.2/js/jquery.iframe-transport.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/_plugins/jquery-file-upload-9.11.2/js/jquery.fileupload-process.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/_plugins/jquery.mask/dist/jquery.mask.min.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/plugins/jquery.blockui/custom/jquery.blockui.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/plugins/prettycheckboxes/compressed.1.1/prettycheckboxes.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/plugins/jquery.watermark/3.1.4/jquery.watermark.min.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/plugins/jquery.maskmoney/3.0.2/jquery.maskmoney.min.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/site.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/_site.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/controls.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/1033/init.debug.js?rev=%2FOmktAG7ectPWwTJWj46Jg%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/1033/msstring.debug.js?rev=%2FBVJveHLTRPyAS7JcY4oHw%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/1033/menu.debug.js?rev=8Ug9xUnLHRem%2BNTg9KlN3A%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/ScriptResource.axd?d=XvvOo7W8vztjXeS3rN4QshK7dJ9Rf64cIYNEf7yRvL0pq-xzXzZfJ-m7k3hFS1JcBiHJVIeNJhvMEBBhkDPW-8mrmwxx5Ef6eeuFDq067dCvuBXn6mKLufmw375pgT3aFFKcGDo_g8ZgXAQ3nnd4mkigSYDJ30eFqakFxh9YszcC9-Sq0&amp;t=2e2045e2"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/blank.debug.js?rev=jE3bS2JFTB63z3iWgauX9w%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/ScriptResource.axd?d=P29XPZimyuWYZwUctD5YCMrRCV6pv9w_1DvZuC05yKDniml0iAr1G7sKr3ruhV0yxBWqOj2Sz4grAcHn5NTxEz7-cUQDi-vVa_iVt-BIMpFaOtmx9BSDHaLkza8YuEEGAVOTmnj6vN_kxg994bfu2X3UyMCQh-iWe0sUNkjFEk_pbnlq0&amp;t=2e2045e2"></' + 'script>');
// ]]>
</script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.js.download"></script><script src="../../arquivosNovoUsuario/jquery-1.12.3.min.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery-ui.js.download"></script><script src="../../arquivosNovoUsuario/jquery-ui.min.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/load-image.all.min.js.download"></script><script src="../../arquivosNovoUsuario/load-image.all.min.js(1).download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.fileupload.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.iframe-transport.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.fileupload-process.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.mask.min.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.blockui.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/prettycheckboxes.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.watermark.min.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/jquery.maskmoney.min.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/site.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/_site.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/controls.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/init.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/msstring.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/menu.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/ScriptResource.axd"></script><script type="text/javascript" src="../../arquivosNovoUsuario/blank.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/ScriptResource(1).axd"></script>


    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    

    <!-- The basic File Upload plugin -->
    
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    
    
    <!-- The File Upload processing plugin -->
    

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
                url: '../../arquivos/Upload.ashx',
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

                        var node = $('<span clas="fileName" />').text(name + ' (' + size + 'KB)');

                        file.uploadID = file

                        node.appendTo(data.context);

                        $.each(data.originalFiles, function (i, originalFile) {
                            if (file.name === originalFile.name) {
                                node = $('<div class="cancel item' + i + '" />').append($('<a id="' + i + '" />').append($('<img />').prop("src", "../../arquivos/img/dataxdoc/site/cancel.png")));

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

    

    <script type="text/javascript">

        $(function () {

            $('#showUploadForm').click(function () {
                $.blockUI({
                    message: $('#uploadForm'),
                    css: {
                        top: ($(window).height() - 350) / 2 + 'px',
                        left: ($(window).width() - 500) / 2 + 'px',
                        width: '500px',
                        cursor: 'default'
                    },
                    overlayCSS: {
                        cursor: 'default'
                    }
                });
            });

            $('#closeUploadForm').click(function () {
                $.unblockUI();

                window.location.reload(true);
            });

            function disableMyDocumentsCommands() {
                $("[id*='ibtnIndexDocument']").prop("disabled", true);
                $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-salvararqdocoff.png");
                $("[id*='ibtnPreviewDocument']").prop("disabled", true);
                $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/ico-view-off.png");
                $("[id*='ibtnDownloadDocument']").prop("disabled", true);
                $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-downloaddocoff.png");
                $("[id*='ibtnRenameDocument']").prop("disabled", true);
                $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/32tp-renomear3.png");
                $("[id*='ibtnDeleteDocument']").prop("disabled", true);
                $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-excluirarqdocoff.png");
            }

            $("#lstDocs [id*='cbSelectAllDocuments']").change(function () {
                $("[id*='cblDocuments'] input:checkbox").prop('checked', $(this).prop("checked"));

                if ($("#lstDocs [id*='cbSelectAllDocuments']").prop('checked')) {
                    $("[id*='ibtnIndexDocument']").prop("disabled", false);
                    $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-salvararqdoc.png");
                    $("[id*='ibtnPreviewDocument']").prop("disabled", true);
                    $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/ico-view-off.png");
                    $("[id*='ibtnDownloadDocument']").prop("disabled", false);
                    $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-downloaddoc.png");
                    $("[id*='ibtnRenameDocument']").prop("disabled", true);
                    $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/32tp-renomear3.png");
                    $("[id*='ibtnDeleteDocument']").prop("disabled", false);
                    $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-excluirarqdoc.png");
                }
                else {
                    disableMyDocumentsCommands();
                }
            });

            $("[id*='cblDocuments'] input:checkbox").change(function () {
                var checked = $("[id*='cblDocuments'] input:checkbox:checked").length;

                if (checked == 0) {
                    disableMyDocumentsCommands();
                }

                if (checked == 1) {
                    $("[id*='ibtnIndexDocument']").prop("disabled", false);
                    $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-salvararqdoc.png");
                    $("[id*='ibtnPreviewDocument']").prop("disabled", false);
                    $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/ico-view-on.png");
                    $("[id*='ibtnDownloadDocument']").prop("disabled", false);
                    $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-downloaddoc.png");
                    $("[id*='ibtnRenameDocument']").prop("disabled", false);
                    $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/32cl-renomear3.png");
                    $("[id*='ibtnDeleteDocument']").prop("disabled", false);
                    $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-excluirarqdoc.png");
                }

                if (checked > 1) {
                    $("[id*='ibtnIndexDocument']").prop("disabled", false);
                    $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-salvararqdoc.png");
                    $("[id*='ibtnPreviewDocument']").prop("disabled", true);
                    $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/ico-view-off.png");
                    $("[id*='ibtnDownloadDocument']").prop("disabled", false);
                    $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-downloaddoc.png");
                    $("[id*='ibtnRenameDocument']").prop("disabled", true);
                    $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/32tp-renomear3.png");
                    $("[id*='ibtnDeleteDocument']").prop("disabled", false);
                    $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/dataxdoc/workarea/bt-excluirarqdoc.png");
                }

                if (checked == $("[id*='cblDocuments'] input:checkbox").length)
                    $("#lstDocs [id*='cbSelectAllDocuments']").prop('checked', true);
                else
                    $("#lstDocs [id*='cbSelectAllDocuments']").prop('checked', false);
            });

        });

    </script>
 
 	<style type="text/css">
		/* fix scrolling on list pages */
		#s4-bodyContainer {
			position: relative;
		}

		/* hide body scrolling (SharePoint will handle) */
		/*body {
			height:100%;
			overflow:hidden;
			width:100%;
		}*/
				
		/* popout breadcrumb menu needs background color for firefox */
		.s4-breadcrumb-menu {
			background:#F2F2F2;
		}

		/* if you want to change the left nav width, change this and the margin-left in .s4-ca */
		body #s4-leftpanel {
			/* width:155px; */
		}		
		
		/* body area normally has a white background */
		.s4-ca {
			background:transparent none repeat scroll 0 0;
			/* margin-left:155px; */
		}	
	</style>
 
	<!-- link to our custom css  -->
	
    <!-- link para o nosso css da página mestra -->
    <link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/custommaster.css">

    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="../../arquivos/styles/masterpages/ie-custommaster.css" />
	<![endif]-->

    <!-- novo layout -->
    <link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/_site.css">

    <!-- link do Responsive Grid System -->
    <link rel="stylesheet" href="../../arquivosNovoUsuario/col.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/2cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/3cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/4cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/5cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/6cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/7cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/8cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/9cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/10cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/11cols.css" media="all"><link rel="stylesheet" href="../../arquivosNovoUsuario/12cols.css" media="all">

    <!-- link para o nosso css comum -->
    <link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/common.css">

    <!-- link para o nosso css dos controles de formulário -->
    <link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/controls.css">

    <!-- link para o css de controles de usuário -->
    <link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/search(1).css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/menucontrol.css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/reportmenu.css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/settingsmenu.css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/welcomemenu.css">

    <!-- link para o css de plugins -->
    <link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/dataxdoc_theme.css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/prettyCheckboxes.css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/simple-modal.css"><link type="text/css" rel="stylesheet" href="../../arquivosNovoUsuario/jquery.fileupload.css">


    <!-- Responsive  -->
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="../../arquivosNovoUsuario/_1024.css"><link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="../../arquivosNovoUsuario/_768.css"><link rel="stylesheet" media="only screen and (max-width: 480px)" href="../../arquivosNovoUsuario/_480.css">

	<!-- javascript to override the active-x message in ie 
		// See http://blog.drisgill.com/2010/02/removing-name-activex-control-warning.html for more info
		// Remove if the IM pressence icons are needed in SharePoint
	-->
	<script type="text/javascript">
		function ProcessImn(){}
		function ProcessImnMarkers(){}	
	</script>
	
	<!-- additional header delegate control -->
	
	
	<!-- additional header placeholder - overridden by asp:content on pages or page layouts -->
	

    
    
    <link type="text/css" href="../../arquivosNovoUsuario/jquery-ui.css" rel="stylesheet">

    <!-- carrega jQuery javascript -->
    <script type="text/javascript" src="../../arquivosNovoUsuario/jquery-1.11.3.js.download"></script>

    <!-- carrega jQuery UI javascript -->
    <script type="text/javascript" src="../../arquivosNovoUsuario/jquery-ui.min.js.download"></script>

    <script type="text/javascript" src="../../arquivosNovoUsuario/prettycheckboxes.js(1).download"></script>

    <script type="text/javascript">
        $(function () {
            $("#vtab").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
            $("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");
        });
  
        $(document).ready(function () {
            $("#divGender input[type=radio]").prettyCheckboxes({
                checkboxWidth: 20, // The width of your custom checkbox
                checkboxHeight: 20, // The height of your custom checkbox
                className: 'prettyCheckbox', // The classname of your custom checkbox
                display: 'list' // The style you want it to be display (inline or list)
            });
        });
   
    </script>

    <style type="text/css">
        .ui-tabs-vertical {
            height: 100%;
        }

            .ui-tabs-vertical .ui-tabs-nav {
                padding: .2em .1em .2em .2em;
                float: left;
                width: 15em;
            }

                .ui-tabs-vertical .ui-tabs-nav li {
                    clear: left;
                    width: 100%;
                    border-bottom-width: 1px !important;
                    border-right-width: 0 !important;
                    margin: 0 -1px .2em 0;
                }

                    .ui-tabs-vertical .ui-tabs-nav li a {
                        display: block;
                    }

                    .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
                        padding-bottom: 0;
                        padding-right: .1em;
                        border-right-width: 1px;
                    }

            .ui-tabs-vertical .ui-tabs-panel { /*border-left: 1px dashed #FFA44E;*/ /*padding: 1em;*/
                float: right; /*width: 40em;*/
            }

        #divAlcada label,
        #layout-type label {
            display: block;
            position: relative;
            padding: 5px 8px 7px 35px;
            cursor: pointer;
            color: #4682b4;
            font-size: 13px;
            text-align: left
        }

        #divAlcada input[type=radio],
        #layout-type input[type=radio] {
            display: none;
        }

        #divAlcada label:before,
        #layout-type label:before{
            content: "";
            display: inline-block;
            width: 18px;
            height: 18px;
            position: absolute;
            left: 0;
            bottom: 0;
            padding: 5px;
            background: url("../../arquivos/Scripts/plugins/prettyCheckboxes/images/radio-disable.png") 106% 40% no-repeat;
        }

        #divAlcada input[type=radio]:checked + label:before,
        #layout-type input[type=radio]:checked + label:before{   
              background: rgba(255,255,255,0.35) url("../../arquivos/Scripts/plugins/prettyCheckboxes/images/radio.png") 5% 153%  no-repeat;
              width: 160px;
              padding-top: 4px;
              padding-bottom: 4px;
              height: 23px;
              position: absolute;
              border: 1px solid #ff931e;
              border-radius: 5px;
        }

         /*#divAlcada table tr td:hover {
              background: #fff;
              border-radius: 5px;
              border: 1px solid #ff931e;
        }*/

        #divAlcada table tr td {
            margin-bottom: 5px;        
        }
    </style>

	

	<!-- microsoft says these should always be inside the head tag. -->
   	<style type="text/css">
	.zz1_menuSettings_0 { background-color:white;visibility:hidden;display:none;position:absolute;left:0px;top:0px; }
	.zz1_menuSettings_1 { text-decoration:none; }
	.zz1_menuSettings_2 {  }
	.zz1_menuSettings_3 { border-style:none; }
	.zz1_menuSettings_4 {  }
	.zz1_menuSettings_5 { border-style:none; }
	.zz1_menuSettings_6 {  }
	.zz2_menuWelcome_0 { background-color:white;visibility:hidden;display:none;position:absolute;left:0px;top:0px; }
	.zz2_menuWelcome_1 { text-decoration:none; }
	.zz2_menuWelcome_2 {  }
	.zz2_menuWelcome_3 { border-style:none; }
	.zz2_menuWelcome_4 {  }
	.zz2_menuWelcome_5 { border-style:none; }
	.zz2_menuWelcome_6 {  }
	.s4-skipribbonshortcut { display:none; }

</style><script type="text/javascript" src="../../arquivosNovoUsuario/core.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/sp.core.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/ScriptResx.ashx"></script><script type="text/javascript" src="../../arquivosNovoUsuario/cui.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/sp.ui.dialog.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/search.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/sp.runtime.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/sp.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/inplview.debug.js.download"></script><script type="text/javascript" src="../../arquivosNovoUsuario/sp.ribbon.debug.js.download"></script></head>

<body scroll="no" onload="javascript:_spBodyOnLoadWrapper();">

<form name="Form" method="post" action="salvarusuario.php" enctype="multipart/form-data">


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


<script src="../../arquivosNovoUsuario/WebResource.axd" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
var MSOWebPartPageFormName = 'aspnetForm';
var g_presenceEnabled = true;
var g_wsaEnabled = false;
var g_wsaLCID = 1033;
var g_wsaSiteTemplateId = 'STS#1';
var g_wsaListTemplateId = null;
var _fV4UI=true;var _spPageContextInfo = {webServerRelativeUrl: "\u002fsites\u002fdemo", webLanguage: 1033, currentLanguage: 1033, webUIVersion:4,userId:9, alertsEnabled:false, siteServerRelativeUrl: "\u002fsites\u002fdemo", allowSilverlightPrompt:'True'};//]]>
</script>
<script type="text/javascript">
<!--
var L_Menu_BaseUrl="/sites/demo";
var L_Menu_LCID="1033";
var L_Menu_SiteTheme="";
//-->
</script>
<script type="text/javascript">
//<![CDATA[
var MSOWebPartPageFormName = 'aspnetForm';//]]>
</script>
<script type="text/javascript">
<!--
//-->
</script>
<script src="../../arquivosNovoUsuario/ScriptResource(2).axd" type="text/javascript"></script>
<script src="../../arquivosNovoUsuario/blank.debug.js.download" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
if (typeof(DeferWebFormInitCallback) == 'function') DeferWebFormInitCallback();//]]>
</script>

<script src="../../arquivosNovoUsuario/WebResource(1).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {

                    var workspaceElem = GetCachedElement("s4-workspace");
                    if (workspaceElem != null)
                    {
                        var scrollElem = GetCachedElement("_maintainWorkspaceScrollPosition");
                        if (scrollElem != null)
                        {
                            scrollElem.value = workspaceElem.scrollTop;
                        }
                    };
                UpdateFormDigest('\u002fsites\u002fdemo', 1440000);return _spFormOnSubmitWrapper();
return true;
}
//]]>
</script>


<!-- handles SharePoint scripts -->
<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['t$ctl00','t$upLayoutType','fctl00$WebPartAdderUpdatePanel'], ['$rblRoles'], ['ctl00$WebPartAdder'], 90);
//]]>
</script>


<!-- controls the web parts and zones -->


    <div id="wrapper">
        <div id="head-container">
            <header class="group">
                <div id="logo">
		            <a href="https://dtc-server01/sites/demo/">
			            <img src="../../arquivosNovoUsuario/logo.png" alt="Demo" style="border-width:0px;">
		            </a>
                </div>
                <a id="nav-toggle">Menu</a>
                <div id="header-items">
                    <div id="header-search">
                        

<div class="search-bar">
    <input name="ctl00$searchControl$txtSearch" type="text" id="ctl00_searchControl_txtSearch">
    <input type="submit" name="ctl00$searchControl$btnSearch" value="Buscar" id="ctl00_searchControl_btnSearch" class="button">
</div>

                    </div>
                    <div id="header-menu">
                        <div id="site-menu">
                            <div id="report-menu">
                                

<div id="divReportMenu">
    <a id="ctl00_ctl63_lbReport" href="javascript:__doPostBack(&#39;ctl00$ctl63$lbReport&#39;,&#39;&#39;)" style="position: absolute; margin: 2px -19px; font-size: 1em;"></a>
    <input type="image" name="ctl00$ctl63$ibReport" id="ctl00_ctl63_ibReport" src="../../arquivosNovoUsuario/report-24x24.png" style="border-width:0px;">

   
                

</div>

                            </div>
                            <div id="settings-menu">
                                <div id="ctl00_ctl64_divSettingsMenu" class="menuSettings">
        
    <script type="text/javascript">

        $(document).ready(function () {
            $("table.SettingsMenu").hover(function () {
                $("table.SettingsMenu").addClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/DataXDOC/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.SettingsMenu").removeClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/DataXDOC/UserControls/static_arrow.png");
            });
        });

        $(document).ready(function () {
            $("table.SettingsMenuItem").hover(function () {
                $("table.SettingsMenu").addClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/DataXDOC/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.SettingsMenu").removeClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/DataXDOC/UserControls/static_arrow.png");
            });
        });

    </script>
    
    <a href="https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx#zz1_menuSettings_SkipLink"><img alt="Skip Navigation Links" src="../../arquivosNovoUsuario/WebResource(2).axd" width="0" height="0" style="border-width:0px;"></a><table id="zz1_menuSettings" class="zz1_menuSettings_2" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn0"><table class="SettingsMenu zz1_menuSettings_4" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tbody><tr>
				<td style="white-space:nowrap;"><a class="zz1_menuSettings_1 SettingsMenu zz1_menuSettings_3" href="https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx#" style="border-style:none;font-size:1em;cursor:text;"><img src="../../arquivosNovoUsuario/settings-24x24.png" alt="" style="border-style:none;vertical-align:middle;"></a></td><td style="width:0;"><img src="../../arquivosNovoUsuario/static_arrow.png" alt="Expand " style="border-style:none;vertical-align:middle;"></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table><div id="zz1_menuSettingsn0Items" class="zz1_menuSettings_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn1">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo../../arquivos/settings/usuarios.php" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/user.png" alt="" style="border-style:none;vertical-align:middle;">Usuários</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn2">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo../../arquivos/old/settings/ManageFiles.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/file.png" alt="" style="border-style:none;vertical-align:middle;">Locais de Guarda</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn3">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo../../arquivos/old/settings/ManageAccesses.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/access.png" alt="" style="border-style:none;vertical-align:middle;">Permissões</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn4">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo../../arquivos/old/settings/ManageContentTypesAndMetadata.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/IconIndexadoresETipoDocumental.png" alt="" style="border-style:none;vertical-align:middle;">Tipos Documentais</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn5">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo../../arquivos/general/general-settings.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/general-settings-icon.png" alt="" style="border-style:none;vertical-align:middle;">Configuração Geral</a></td>
				</tr>
			</tbody></table></td>
		</tr>
	</tbody></table><div class="SettingsMenuItem zz1_menuSettings_6 zz1_menuSettings_0" id="zz1_menuSettingsn0ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosNovoUsuario/WebResource(3).axd" alt="Scroll up">
	</div><div class="SettingsMenuItem zz1_menuSettings_6 zz1_menuSettings_0" id="zz1_menuSettingsn0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosNovoUsuario/WebResource(4).axd" alt="Scroll down">
	</div>
</div><a id="zz1_menuSettings_SkipLink"></a>
</div>
        
                            </div>
                            <div id="welcome-menu">
                                

<div id="divWelcomeMenu">
    
    <script type="text/javascript">

        $(document).ready(function () {
            $("table.WelcomeMenu").hover(function () {
                $("table.WelcomeMenu").addClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/DataXDOC/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.WelcomeMenu").removeClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/DataXDOC/UserControls/static_arrow.png");
            });
        });

        $(document).ready(function () {
            $("table.WelcomeMenuItem td").hover(function () {
                $("table.WelcomeMenu").addClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/DataXDOC/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.WelcomeMenu").removeClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/DataXDOC/UserControls/static_arrow.png");
            });
        });

    </script>

    <span id="user-icon"><img alt="" src="../../arquivosNovoUsuario/user(1).png" style="margin-left: 8px;"></span>
    
    <a href="https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx#zz2_menuWelcome_SkipLink"><img alt="Skip Navigation Links" src="../../arquivosNovoUsuario/WebResource(2).axd" width="0" height="0" style="border-width:0px;"></a><table id="zz2_menuWelcome" class="divWelcomeMenu zz2_menuWelcome_2" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen0"><table class="WelcomeMenu zz2_menuWelcome_4" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tbody><tr>
				<td style="white-space:nowrap;"><a class="zz2_menuWelcome_1 WelcomeMenu zz2_menuWelcome_3" href="https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx#" style="border-style:none;font-size:1em;cursor:text;">Olá, <?=$_SESSION['user']?></a></td><td style="width:0;"><img src="../../arquivosNovoUsuario/static_arrow.png" alt="Expand Olá, <?=$_SESSION['user']?>" style="border-style:none;vertical-align:middle;"></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table><div id="zz2_menuWelcomen0Items" class="zz2_menuWelcome_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen1">
			<td><table class="WelcomeMenuItem zz2_menuWelcome_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz2_menuWelcome_1 WelcomeMenuItem zz2_menuWelcome_5" href="https://dtc-server01/sites/demo../../arquivos/old/my/LastIndexedDocuments.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/lastdocs.png" alt="" style="border-style:none;vertical-align:middle;">Meus Últimos Documentos Indexados</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen2">
			<td><table class="WelcomeMenuItem zz2_menuWelcome_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz2_menuWelcome_1 WelcomeMenuItem zz2_menuWelcome_5" href="https://dtc-server01/sites/demo../../arquivos/my/personal-info.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/personalinfo.png" alt="" style="border-style:none;vertical-align:middle;">Meus Dados Pessoais</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen3">
			<td><table class="WelcomeMenuItem zz2_menuWelcome_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz2_menuWelcome_1 WelcomeMenuItem zz2_menuWelcome_5" href="javascript:__doPostBack(&#39;ctl00$ctl65$menuWelcome&#39;,&#39;Olá, <?=$_SESSION['user']?>\\logoutWelcome&#39;)" style="border-style:none;font-size:1em;"><img src="../../arquivosNovoUsuario/siginout.png" alt="" style="border-style:none;vertical-align:middle;">Sair</a></td>
				</tr>
			</tbody></table></td>
		</tr>
	</tbody></table><div class="WelcomeMenuItem zz2_menuWelcome_6 zz2_menuWelcome_0" id="zz2_menuWelcomen0ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosNovoUsuario/WebResource(3).axd" alt="Scroll up">
	</div><div class="WelcomeMenuItem zz2_menuWelcome_6 zz2_menuWelcome_0" id="zz2_menuWelcomen0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosNovoUsuario/WebResource(4).axd" alt="Scroll down">
	</div>
</div><a id="zz2_menuWelcome_SkipLink"></a>

</div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        
       

        <div id="main-container">
            <div id="content">
			    

    <div id="form-container">
        <h1>
            <img alt="NOVO USUÁRIO" src="../../arquivosNovoUsuario/new-userheading.png">
           <input type="image" name="close" title="Fechar" src="../../arquivosDadosPessoais/close-button.png" class="close-button" onclick="javascript:history.back()">
        </h1>
        <div class="content-form-container">
            <div class="content-form">
                <div id="vtab" class="ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-vertical ui-helper-clearfix">
                    <!-- Abas -->
                    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                        <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Dados Pessoais</a></li>
                        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="https://dtc-server01/sites/demo../../arquivos/settings/new-user.aspx#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Dados Gerenciais</a></li>
                    </ul>
                    <!-- Aba: Dados Pessoais -->
                    <div id="tabs-1" class="tab ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                        <h2 class="TabTitle">Dados Pessoais</h2>
                        <!-- Conteúdo Esquerdo -->
                        <div id="divLeftSidePersonalData">
                            <div id="divUploadPhoto">
                                <span class="photo-container">
                                    <img id="Main_imgUserPhoto" class="photo" src="../../arquivosNovoUsuario/no-photo.png" style="border-width:0px;"></span>
                                <div class="fileupload">
                                    <span class="fileinput-button">
                                        <img id="Main_imgUploadPhoto" src="../../arquivosNovoUsuario/image-upload.png" style="border-width:0px;">
                                        <input type="file" name="fuPhoto" id="Main_fuPhoto" title="Upload de imagem" onchange="readImageURL(this, &#39;.photo&#39;, 121, 93, &#39;.filename&#39;)">
                                    </span>
                                </div>
                                <input name="$txtFileName" type="text" id="Main_txtFileName" disabled="disabled" class="filename">
                            </div>
                            <div id="divGender">
                                <table id="Main_rblGender" class="gender-container" border="0">
	<tbody><tr>
		<td><input id="Main_rblGender_0" type="radio" name="rblGender" value="f" checked="checked" class="hiddenCheckbox"><label for="Main_rblGender_0" class="checked prettyCheckbox radio list"><span class="holderWrap" style="width: 20px; height: 20px;"></span>Feminino</label></td>
	
    
    
    </tr><tr>





        <td><input id="Main_rblGender_1" type="radio" name="rblGender" value="m" class="hiddenCheckbox"><label for="Main_rblGender_1" class="prettyCheckbox radio list"><span class="holderWrap" style="width: 20px; height: 20px;"></span>Masculino</label></td>
	</tr>
</tbody></table>
                            </div>
                        </div>
                        <!-- Conteúdo Direito -->
                        <div id="divRightSidePersonalData">
                            <input name="txtFirstName" type="text" id="Main_txtFirstName" disabled="disabled" class="htmlInputText220 InlineElement" placeholder="Nome">
                            <input name="txtLastName" type="text" id="Main_txtLastName" disabled="disabled" class="htmlInputText220 LeftSpacing5 InlineElement" placeholder="Sobrenome">
                            <input name="txtCpf" type="text" id="Main_txtCpf" disabled="disabled" class="cpf htmlInputText220 TopSpacing20 InlineElement" placeholder="CPF">
                            <input name="txtDateofBirth" type="text" id="Main_txtDateofBirth" disabled="disabled" class="date htmlInputText220 TopSpacing20 LeftSpacing5 InlineElement" placeholder="Data de Nascimento">
                            <input name="txtEmail" type="text" id="Main_txtEmail" disabled="disabled" class="htmlInputText460 TopSpacing20" placeholder="E-mail">
                            <input name="txtConfirmEmail" type="text" id="Main_txtConfirmEmail" disabled="disabled" class="htmlInputText460 TopSpacing20" placeholder="Confirmar E-mail">
                            <input name="txtPassword" type="txtpassword" maxlength="18" id="Main_txtPassword" class="htmlInputText220 TopSpacing20 InlineElement" placeholder="Senha">
                            <input name="txtConfirmPassword" type="password" maxlength="18" id="Main_txtConfirmPassword" class="htmlInputText220 TopSpacing20 LeftSpacing5 InlineElement" placeholder="Confirmar Senha">
                            <input name="txtLogin" type="text" id="Main_txtLogin" class="htmlInputText220 TopSpacing20 InlineElement" placeholder="Login">
                        </div>
                    </div>

                    <!-- Aba: Dados Gerenciais -->
                    <div id="tabs-2" class="tab tab2 ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
                        <h2 class="TabTitle">Dados Gerenciais</h2>
                        <!-- Conteúdo Esquerdo -->
                        <div id="Main_ctl00">
	
                                <div id="divLeftSideManagerialData">
                                    <div id="divAlcada">
                                        <span id="Main_lblSelectAlcada" class="alcada" style="font-family:Century Gothic;font-size:Medium;"></span>
                                        <table id="Main_rblRoles" border="0">
		<tbody><tr>
            <td><input id="Main_rblRoles_0" type="radio" name="rblRoles" value="1" checked="checked"><label for="Main_rblRoles_0">Administrador</label></td>
		</tr><tr>
            <td><input id="Main_rblRoles_1" type="radio" name="rblRoles" value="2" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;$rblRoles$1\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="Main_rblRoles_1">Arquivista</label></td>
		</tr><tr>
            <td><input id="Main_rblRoles_2" type="radio" name="rblRoles" value="3" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;$rblRoles$2\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="Main_rblRoles_2">Operador</label></td>
		</tr>
	</tbody></table>
                                    </div>
                                </div>
                                <div id="divFuncao">
                                    
                                </div>
                                <!-- Conteúdo Abaixo -->
                                <div id="divRightSideManagerialData">
                                    <div id="divAlcadaInfo">
                                        <p class="infobox">
                                            <span id="Main_lblAlcadaDescriptionPanel">Operador – Controle de Documentos: O Operador é aquele que detém o direito de utilização no documento.</span>
                                        </p>
                                    </div>
                                </div>
                            
</div>
                        <!-- Tipo Layout-->
                        <div id="layout-type">
                            <h2 class="TabTitle">Tipo de Layout</h2>
                            <div id="container-layout-type">
                                <div id="Main_upLayoutType">
	
                                        <ul>
                                            <li>
                                                </li>
                                            <li>
                                                </li>
                                        </ul>
                                    
</div>
                            </div>
                        </div>
                    </div>
                    <!-- Comandos -->
                    <div class="FormActions">
                        <input type="submit" name="$btnSaveNewUser" value="Salvar" id="Main_btnSaveNewUser" class="button">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="simplemodal" class="simplemodal"></div>


            </div>
            
            <span id="version">Versão 2.0.967.4277</span>
        </div>

        <div id="footer-container">
            <footer></footer>
        </div>

        

    </div>

<!-- =====  Begin Ribbon ============================================================ -->

<div id="s4-ribbonrow" class="s4-pr s4-ribbonrowhidetitle" style="height: 44px;">
	<div id="s4-ribboncont">
	
		<!-- ribbon starts here -->
		<div class="ms-cui-ribbonTopBars"><div class="ms-cui-topBar1"></div><div class="ms-cui-topBar2"><div id="RibbonContainer-TabRowLeft" class="ms-cui-TabRowLeft ms-siteactionscontainer s4-notdlg">
					
					<!-- site actions -->
					<span class="ms-siteactionsmenu" id="siteactiontd">
					
						
						<span style="display:none"><menu type="ServerMenu" id="zz3_SiteActionsMenuMain" largeiconmode="true"><ie:menuitem id="ctl00_SiteActionsMenuMain_ctl00_MenuItem_TakeOffline" type="option" iconsrc="../../arquivos/img/connecttospworkspace32.png" onmenuclick="javaScript:CoreInvoke(&#39;TakeOfflineToClientReal&#39;,1, 1, &#39;https:\u002f\u002fdtc-server01\u002fsites\u002fdemo&#39;, -1, -1, &#39;&#39;, &#39;&#39;)" hidden="TakeOfflineDisabled(1, 1, -1, -1)" text="Sync to SharePoint Workspace" description="Create a synchronized copy of this site on your computer." menugroupid="100"></ie:menuitem>
<ie:menuitem id="zz4_MenuItem_CreateDocLib" type="option" iconsrc="../../arquivos/img/NewDocLibHH.png" onmenuclick="if (LaunchCreateHandler(&#39;DocLib&#39;)) { GoToPage(&#39;\u002fsites\u002fdemo\u002f_layouts/new.aspx?FeatureId={00bfea71-e717-4e80-aa17-d0c71b360101}&amp;ListTemplate=101&#39;) }" text="New Document Library" description="Create a place to store and share documents." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz5_MenuItem_CreateSite" type="option" iconsrc="../../arquivos/img/newweb32.png" onmenuclick="if (LaunchCreateHandler(&#39;Site&#39;)) { STSNavigate(&#39;\u002fsites\u002fdemo\u002f_layouts/newsbweb.aspx&#39;) }" text="New Site" description="Create a site for a team or project." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz6_MenuItem_Create" type="option" onmenuclick="if (LaunchCreateHandler(&#39;All&#39;)) { STSNavigate(&#39;\u002fsites\u002fdemo\u002f_layouts/create.aspx&#39;) }" text="More Options..." description="Create other types of pages, lists, libraries, and sites." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz7_MenuItem_ViewAllSiteContents" type="option" iconsrc="../../arquivos/img/allcontent32.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/viewlsts.aspx&#39;);" text="View All Site Content" description="View all libraries and lists in this site." menugroupid="300"></ie:menuitem>
<ie:menuitem id="zz8_MenuItem_EditSite" type="option" iconsrc="../../arquivos/img/SharePointDesigner32.png" onmenuclick="EditInSPD(&#39;\u002fsites\u002fdemo\u002f&#39;,true);" text="Edit in SharePoint Designer" description="Create or edit lists, pages, and workflows, or adjust settings." menugroupid="300"></ie:menuitem>
<ie:menuitem id="zz9_MenuItem_SitePermissions" type="option" iconsrc="../../arquivos/img/Permissions32.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/user.aspx&#39;);" text="Site Permissions" description="Give people access to this site." menugroupid="300"></ie:menuitem>
<ie:menuitem id="zz10_MenuItem_Settings" type="option" iconsrc="../../arquivos/img/settingsIcon.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/settings.aspx&#39;);" text="Site Settings" description="Access all settings for this site." menugroupid="300"></ie:menuitem>
</menu></span><span id="zz11_SiteActionsMenu_t" class="ms-siteactionsmenuinner" title="Open Menu" onmouseover="MMU_PopMenuIfShowing(this);MMU_EcbTableMouseOverOut(this, true)" hoveractive="ms-siteactionsmenuhover" hoverinactive="ms-siteactionsmenuinner" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz3_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;),event,false, null, 0); return false;" foa="MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;)" oncontextmenu="ClkElmt(this); return false;" style="white-space:nowrap"><a class="ms-menu-a" id="zz11_SiteActionsMenu" accesskey="/" href="javascript:;" style="cursor:pointer;white-space:nowrap;" onfocus="MMU_EcbLinkOnFocusBlur(byid(&#39;zz3_SiteActionsMenuMain&#39;), this, true);" onkeydown="MMU_EcbLinkOnKeyDown(byid(&#39;zz3_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;), event);" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz3_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;),event,false, null, 0); return false;" oncontextmenu="ClkElmt(this); return false;" menutokenvalues="MENUCLIENTID=zz11_SiteActionsMenu,TEMPLATECLIENTID=zz3_SiteActionsMenuMain" serverclientid="zz11_SiteActionsMenu"><span>Site Actions</span><img src="../../arquivosNovoUsuario/blank.gif" style="border:0px" alt="Use SHIFT+ENTER to open the menu (new window)."></a><span style="height:3px;width:5px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust ms-viewselector-arrow"><img src="../../arquivosNovoUsuario/fgimg.png" alt="Open Menu" style="border-width:0px;position:absolute;left:-0px !important;top:-491px !important;"></span></span></span>
			
			  <!-- global navigation dhtml popout menu -->
			  
					<span class="s4-breadcrumb-anchor"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust"><a id="GlobalBreadCrumbNavPopout-anchor" onclick="CoreInvoke(&#39;callOpenBreadcrumbMenu&#39;, event, &#39;GlobalBreadCrumbNavPopout-anchor&#39;, &#39;GlobalBreadCrumbNavPopout-menu&#39;, &#39;GlobalBreadCrumbNavPopout-img&#39;, &#39;s4-breadcrumb-anchor-open&#39;, &#39;ltr&#39;, &#39;&#39;, false); return false;" onmouseover="" onmouseout="" title="Navigate Up" href="javascript:;" style="display:inline-block;height:16px;width:16px;"><img src="../../arquivosNovoUsuario/fgimg.png" alt="Navigate Up" style="border:0;position:absolute;left:-0px !important;top:-112px !important;"></a></span></span><div class="ms-popoutMenu s4-breadcrumb-menu" id="GlobalBreadCrumbNavPopout-menu" style="display:none;">
						<div class="s4-breadcrumb-top">
							<span class="s4-breadcrumb-header">This page location is:</span>
						</div>
						
							<ul class="s4-breadcrumb">
	<li class="s4-breadcrumbCurrentNode"><span class="s4-breadcrumb-arrowcont"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust s4-breadcrumb"><img src="../../arquivosNovoUsuario/fgimg.png" alt="" style="border-width:0px;position:absolute;left:-0px !important;top:-353px !important;"></span></span><span class="s4-breadcrumbCurrentNode">Demo</span></li>
</ul>
						
					</div>
				
				
			<!-- save button at top of ribbon -->
			</div><div id="RibbonContainer-TabRowRight" class="ms-cui-TabRowRight s4-trc-container s4-notdlg">
				
				<!-- GlobalSiteLink0 delegate - the variation selector / shows nothing by default otherwise -->
				
				
				<!-- Welcome / Login control -->
				<div class="s4-trc-container-menu">
					 <div>
						
	 
	<span style="display:none"><menu type="ServerMenu" id="zz12_ID_PersonalActionMenu" largeiconmode="true"><ie:menuitem id="zz13_ID_PersonalInformation" type="option" iconsrc="../../arquivos/img/menuprofile.gif" onmenuclick="javascript:GoToPage(&#39;\u002fsites\u002fdemo\u002f_layouts\u002fuserdisp.aspx?Force=True\u0026ID=&#39; + _spUserId);return false;" text="My Settings" description="Update your user information, regional settings, and alerts." menugroupid="100"></ie:menuitem>
<ie:menuitem id="zz14_ID_LoginAsDifferentUser" type="option" onmenuclick="javascript:LoginAsAnother(&#39;\u002fsites\u002fdemo\u002f_layouts\u002fcloseConnection.aspx?loginasanotheruser=true&#39;, 0)" text="Sign in as Different User" description="Login with a different account." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz15_ID_Logout" type="option" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/SignOut.aspx&#39;);" text="Sign Out" description="Logout of this site." menugroupid="200"></ie:menuitem>
</menu></span><span id="zz16_Menu_t" class="ms-SPLink ms-SpLinkButtonInActive ms-welcomeMenu" title="Open Menu" onmouseover="MMU_PopMenuIfShowing(this);MMU_EcbTableMouseOverOut(this, true)" hoveractive="ms-SPLink ms-SpLinkButtonActive ms-welcomeMenu" hoverinactive="ms-SPLink ms-SpLinkButtonInActive ms-welcomeMenu" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz12_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;),event,false, null, 0); return false;" foa="MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;)" oncontextmenu="ClkElmt(this); return false;" style="white-space:nowrap"><a class="ms-menu-a" id="zz16_Menu" accesskey="W" href="javascript:;" style="cursor:pointer;white-space:nowrap;" onfocus="MMU_EcbLinkOnFocusBlur(byid(&#39;zz12_ID_PersonalActionMenu&#39;), this, true);" onkeydown="MMU_EcbLinkOnKeyDown(byid(&#39;zz12_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;), event);" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz12_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;),event,false, null, 0); return false;" oncontextmenu="ClkElmt(this); return false;" menutokenvalues="MENUCLIENTID=zz16_Menu,TEMPLATECLIENTID=zz12_ID_PersonalActionMenu" serverclientid="zz16_Menu"><span>dem.admin</span><img src="../../arquivosNovoUsuario/blank.gif" style="border:0px" alt="Use SHIFT+ENTER to open the menu (new window)."></a><span style="height:3px;width:5px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust ms-viewselector-arrow"><img src="../../arquivosNovoUsuario/fgimg.png" alt="Open Menu" style="border-width:0px;position:absolute;left:-0px !important;top:-491px !important;"></span></span><script type="text/javascript">
//<![CDATA[
var _spUserId=9;
//]]>
</script>


						<!-- MultiLingual User Interface menu -->
						
<script type="text/javascript">
// <![CDATA[
function OnSelectionChange(value)
{
	var today = new Date();
	var oneYear = new Date(today.getTime() + 365 * 24 * 60 * 60 * 1000);
	var url = window.location.href;
	document.cookie = "lcid=" + value + ";path=/;expires=" + oneYear.toGMTString();
	window.location.href = url;
}
// ]]>
</script>

						
					</div>
				</div>
			
				<!-- GlobalSiteLink2 delegate default shows nothing -->
				
				
				<!-- link to launch developer dashboard if its activated by admin -->
				<span>
					<span class="s4-devdashboard">
					
					</span>
				</span>
			</div></div></div>
<script type="text/javascript">
//<![CDATA[
var g_commandUIHandlers = {"name":"CommandHandlers","attrs":{},"children":[]};
//]]>
</script>
	  
	  <!-- end main ribbon control -->
	</div>

    <!-- dynamic notification area -->
	<div id="notificationArea" class="s4-noti"></div>

    <!-- old navigation delegate? -->
	
			
	
	
	<!-- top web part panel -->
	<div id="WebPartAdderUpdatePanelContainer">
		<div id="ctl00_WebPartAdderUpdatePanel">
	
				<span id="ctl00_WebPartAdder"></span>
			
</div>
	</div>
</div>

<!-- =====  End Ribbon and other Top Content ============================================================ -->


<!-- =====  Start Scrolling Body Area ============================================================ -->

<!-- these two div id's are used to setup the main scrolling page area, they should stay if you are sticking the ribbon to the top -->
<div id="s4-workspace" class="s4-nosetwidth" style="height: 609px;">  <!-- NOTE: s4-nosetwidth is used when you are setting a fixed page width in css, remove for 100% -->
  <div id="s4-bodyContainer">
  
  <!-- id="mso_contentdiv" required, helps SharePoint put the web part editing pane in the main body on the right, you can move the ID if needed -->
  <div id="ctl00_MSO_ContentDiv">

	<!-- link back to homepage, SiteLogoImage gets replaced by the Site Icon, you can hard code this so that its not overridden by the Site Icon or even remove -->
	<div class="s4-notdlg"><!-- NOTE: any time you see s4-notdlg, this element will be hidden from SharePoint dialog windows  -->
		<a href="https://dtc-server01/sites/demo/">
			<img src="../../arquivosNovoUsuario/logo.png" alt="Demo" style="border-width:0px;">
		</a>	
	</div>
		
	<!-- search box loads from delegate, style with CSS -->
	<div class="s4-notdlg">
		
			<table class="s4-wpTopTable" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
		<td valign="top"><div webpartid="00000000-0000-0000-0000-000000000000" haspers="true" id="WebPartWPQ1" width="100%" class="noindex" onlyformepart="true" allowdelete="false" style=""><div id="SRSB"> <div>
            
				<tbody><tr class="ms-sbrow">
					<td class="ms-sbcell"></td>
				</tr>
			</tbody></table>
		</div></div></div></td>
	</tr>
</tbody></table>
		
	</div>

	<!-- top navigation area -->
	<div class="s4-notdlg">
		<!-- top navigation menu (set to use the new Simple Rendering) -->
		<div id="zz17_TopNavigationMenuV4" class="s4-tn">
	<div class="menu horizontal menu-horizontal">
		<ul class="root static">
			<li class="static selected"><a class="static selected menu-item" href="https://dtc-server01/sites/demo/" accesskey="1"><span class="additional-background"><span class="menu-item-text">Home</span><span class="ms-hidden">Currently selected</span></span></a></li>
		</ul>
	</div>
</div>
		  
		
				
			
	
	</div>

	<!-- page editing status bar -->
	<div class="s4-notdlg">
		<div id="s4-statusbarcontainer" class="s4-notdlg">
			<div id="pageStatusBar" class="s4-status-s1"></div>
		</div>
	</div>

	<!-- styles needed to have left nav to the left of the main area -->
	<div id="s4-leftpanel" class="s4-notdlg">
		<!-- The quick launch bar / left navigation -->
		
						
		  <div id="zz18_V4QuickLaunchMenu" class="s4-ql">
	<div class="menu vertical menu-vertical">
		<ul class="root static">
			<li class="static"><a class="static menu-item" href="https://dtc-server01/sites/demo/_layouts/viewlsts.aspx?BaseType=1"><span class="additional-background"><span class="menu-item-text">Libraries</span></span></a></li><li class="static"><a class="static menu-item" href="https://dtc-server01/sites/demo/_layouts/viewlsts.aspx?BaseType=0"><span class="additional-background"><span class="menu-item-text">Lists</span></span></a></li><li class="static"><a class="static menu-item" href="https://dtc-server01/sites/demo/_layouts/viewlsts.aspx?BaseType=0&amp;ListTemplate=108"><span class="additional-background"><span class="menu-item-text">Discussions</span></span></a></li>
		</ul>
	</div>
</div>			
		
		
		<!-- The small menu attached Quick Launch bar. Used only on very specific pages -->
		
	</div>
	
	<!-- s4-ca is the main body div -->
	<div class="s4-ca">

		<div class="s4-notdlg">
			<!-- page title -->
						
		</div>
		
		<!-- place a table around this to handle funky markup in _Layouts/areacachesettings.aspx (if you want) -->
		
		
		<div>
			<!-- page content loads from the pages and pages layout -->

		</div>
	</div>

	<!-- footer - this is purely optional -->
	<div class="s4-notdlg" style="clear: both;">
		© Copyright 2010 SiteName
	</div>

	<!-- the developer dashboard can be turned on by administrators and shows debuging and performance info for the page -->
	<div id="DeveloperDashboard" class="ms-developerdashboard">
		
	</div>

  </div>
  </div>
</div>

<!-- =====  End scrolling body area with these two previous div's ============================================================ -->

<!-- The form digest security control used to for security validation on forms -->

	


<!-- =====  Hidden Placeholders ============================================================ -->


<!-- Handle Search "enter" key and back button -->




<script type="text/javascript">
//<![CDATA[
var _fV4UI = true;var _fV4UI = true;var __wpmExportWarning='This Web Part Page has been personalized. As a result, one or more Web Part properties may contain confidential information. Make sure the properties contain information that is safe for others to read. After exporting this Web Part, view properties in the Web Part description file (.WebPart) by using a text editor such as Microsoft Notepad.';var __wpmCloseProviderWarning='You are about to close this Web Part.  It is currently providing data to other Web Parts, and these connections will be deleted if this Web Part is closed.  To close this Web Part, click OK.  To keep this Web Part, click Cancel.';var __wpmDeleteWarning='You are about to permanently delete this Web Part.  Are you sure you want to do this?  To delete this Web Part, click OK.  To keep this Web Part, click Cancel.';var zz1_menuSettings_Data = new Object();
zz1_menuSettings_Data.disappearAfter = 500;
zz1_menuSettings_Data.horizontalOffset = 0;
zz1_menuSettings_Data.verticalOffset = 0;
zz1_menuSettings_Data.iframeUrl = '/WebResource.axd?d=E-Tr6EIMBg01tdiS28YVZ0gAuPKULNmqWu6urXLZMNfPPv9AfElm6CItmgLmuTR4VDp-rTK0wxmXZxuY_qFoGnVBNhs1&t=635588552026805809';
if (typeof(overrideMenu_HoverStatic) == 'function' && typeof(Menu_HoverStatic) == 'function')
{
_spBodyOnLoadFunctionNames.push('enableFlyoutsAfterDelay');
Menu_HoverStatic = overrideMenu_HoverStatic;
}
var zz2_menuWelcome_Data = new Object();
zz2_menuWelcome_Data.disappearAfter = 500;
zz2_menuWelcome_Data.horizontalOffset = 0;
zz2_menuWelcome_Data.verticalOffset = 0;
zz2_menuWelcome_Data.iframeUrl = '/WebResource.axd?d=E-Tr6EIMBg01tdiS28YVZ0gAuPKULNmqWu6urXLZMNfPPv9AfElm6CItmgLmuTR4VDp-rTK0wxmXZxuY_qFoGnVBNhs1&t=635588552026805809';
var _spWebPermMasks = {High:2147483647,Low:4294967295};//]]>
</script>
<script type="text/javascript" language="JavaScript" defer="defer">
<!--
function SearchEnsureSOD() { EnsureScript('search.js',typeof(GoSearch)); } _spBodyOnLoadFunctionNames.push('SearchEnsureSOD');function S3031AEBB_Submit() {if (document.getElementById('SearchArea_ctl01_ctl04').value == '0') { document.getElementById('SearchArea_ctl01_S3031AEBB_InputKeywords').value=''; }SearchEnsureSOD();GoSearch('SearchArea_ctl01_ctl04','SearchArea_ctl01_S3031AEBB_InputKeywords',null,true,false,null,'SearchArea_ctl01_ctl00',null,null,'This Site','\u002f_layouts\u002fOssSearchResults.aspx', 'This Site','This List', 'This Folder', 'Related Sites', '\u002fsites\u002fdemo\u002f_layouts\u002fOSSSearchResults.aspx', '', 'Please enter one or more search words.');if (document.getElementById('SearchArea_ctl01_ctl04').value == '0') { document.getElementById('SearchArea_ctl01_S3031AEBB_InputKeywords').value=''; }}
// -->
</script><script type="text/javascript" language="JavaScript">
// append an onload event handler
var S3031AEBB__onload= document.body.onload;
if(typeof document.body.onload == 'function')
{
 document.body.onload = function()
 {
S3031AEBB__onload();        
  document.getElementById('SearchArea_ctl01_S3031AEBB_InputKeywords').name = 'InputKeywords';
 }
}
else
{
 document.body.onload = function()
 {
  eval(S3031AEBB__onload);        
  document.getElementById('SearchArea_ctl01_S3031AEBB_InputKeywords').name = 'InputKeywords';
 }
}

function S3031AEBB_OSBEK(event1) { 
if((event1.which == 10) || (event1.which == 13))
{   
S3031AEBB_Submit();return false;
}
}
{ var searchTextBox = document.getElementById('SearchArea_ctl01_S3031AEBB_InputKeywords');if (searchTextBox.className.indexOf('s4-searchbox-QueryPrompt') == -1) searchTextBox.className += searchTextBox.className?' s4-searchbox-QueryPrompt':'s4-searchbox-QueryPrompt'; }// -->
</script>
<script type="text/javascript">
//<![CDATA[
var _spFormDigestRefreshInterval = 1440000;//]]>
</script>
<script type="text/javascript">
// <![CDATA[
// ]]>
</script>
<script type="text/javascript">RegisterSod("sp.core.js", "\u002f_layouts\u002fsp.core.debug.js?rev=Qp5K7ycU\u00252FEY9IvE0KOi7zQ\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("sp.res.resx", "\u002f_layouts\u002fScriptResx.ashx?culture=en\u00252Dus\u0026name=SP\u00252ERes\u0026rev=b6\u00252FcRx1a6orhAQ\u00252FcF\u00252B0ytQ\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("sp.ui.dialog.js", "\u002f_layouts\u002fsp.ui.dialog.debug.js?rev=I4RtkztzINg\u00252B\u00252BPCPe\u00252FeQlw\u00253D\u00253D");RegisterSodDep("sp.ui.dialog.js", "sp.core.js");RegisterSodDep("sp.ui.dialog.js", "sp.res.resx");</script>
<script type="text/javascript">RegisterSod("core.js", "\u002f_layouts\u002f1033\u002fcore.debug.js?rev=iUJUh\u00252BLHTqLkL2NzuKJyqg\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("sp.runtime.js", "\u002f_layouts\u002fsp.runtime.debug.js?rev=f2An00kVlALdMLzcBc1cug\u00253D\u00253D");RegisterSodDep("sp.runtime.js", "sp.core.js");RegisterSodDep("sp.runtime.js", "sp.res.resx");</script>
<script type="text/javascript">RegisterSod("sp.js", "\u002f_layouts\u002fsp.debug.js?rev=Bd43zMKp55FEd0Bf\u00252F942XA\u00253D\u00253D");RegisterSodDep("sp.js", "sp.core.js");RegisterSodDep("sp.js", "sp.runtime.js");RegisterSodDep("sp.js", "sp.ui.dialog.js");RegisterSodDep("sp.js", "sp.res.resx");</script>
<script type="text/javascript">RegisterSod("cui.js", "\u002f_layouts\u002fcui.debug.js?rev=\u00252BhQl2NTQMTydPivdG\u00252Bq\u00252FdA\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("inplview", "\u002f_layouts\u002finplview.debug.js?rev=h6yfT\u00252Bj9a17aH0kDklbCVg\u00253D\u00253D");RegisterSodDep("inplview", "core.js");RegisterSodDep("inplview", "sp.js");</script>
<script type="text/javascript">RegisterSod("ribbon", "\u002f_layouts\u002fsp.ribbon.debug.js?rev=lc6eCMZP6gL5LnuSYh0S6Q\u00253D\u00253D");RegisterSodDep("ribbon", "core.js");RegisterSodDep("ribbon", "sp.core.js");RegisterSodDep("ribbon", "sp.js");RegisterSodDep("ribbon", "cui.js");RegisterSodDep("ribbon", "sp.res.resx");RegisterSodDep("ribbon", "sp.runtime.js");RegisterSodDep("ribbon", "inplview");</script>
<script type="text/javascript">RegisterSod("browserScript", "\u002f_layouts\u002f1033\u002fie55up.debug.js?rev=oCEOggnhuSwHq5tsedonXw\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("WPAdderClass", "\u002f_layouts\u002fwpadder.debug.js?rev=ShI6HpbWyfAFLqD4udjnjw\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("search.js", "\u002f_layouts\u002fsearch.js?rev=3pPWp493ZcP8RyBeS4aKSQ\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSodDep("browserScript", "msstring.js");</script>
<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('ctl00_ctl63_lbReport');Sys.Application.initialize();
function init_zz17_TopNavigationMenuV4() {$create(SP.UI.AspMenu, null, null, null, $get('zz17_TopNavigationMenuV4'));}ExecuteOrDelayUntilScriptLoaded(init_zz17_TopNavigationMenuV4, 'sp.js');
function init_zz18_V4QuickLaunchMenu() {$create(SP.UI.AspMenu, null, null, null, $get('zz18_V4QuickLaunchMenu'));}ExecuteOrDelayUntilScriptLoaded(init_zz18_V4QuickLaunchMenu, 'sp.js');
//]]>
</script>
</form>

<!-- extra form for some instances -->


    <script type="text/javascript" src="../../arquivosNovoUsuario/page.js.download"></script>

    <script type="text/jscript">

    </script>



<!-- warn users of old browsers that they need to upgrade -->


<!-- Starter Master Page by Randy Drisgill (http://blog.drisgill.com) - Oct. 7, 2010 -->
<!-- Remove this credit if you want, but if you leave it in I will appreciate it! -->

</body></html>
