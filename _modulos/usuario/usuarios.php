    <?php

        require("../funcaoBD/usuario.class.php");
        require_once("../funcaoBD/util.class.php");
        error_reporting(E_WARNING);
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0069)https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Expires" content="0"><meta http-equiv="X-UA-Compatible" content="IE=8"><meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- robots -->

	
	<!-- page title - overridden by asp:content on pages or page layouts -->
	<title>
	
  Usuários

</title>
	
	<!-- favicon -->
	<link rel="shortcut icon" href="https://dtc-server01/Style%20Library/sitename/favicon.ico" type="image/vnd.microsoft.icon">
	
	<!-- all OOTB css -->
	<link rel="stylesheet" type="text/css" href="../../arquivosusuarios/layouts.css">
<link rel="stylesheet" type="text/css" href="../../arquivosusuarios/Menu.css">
<link rel="stylesheet" type="text/css" href="../../arquivosusuarios/search.css">
<link rel="stylesheet" type="text/css" href="../../arquivosusuarios/corev4.css">

	
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
</script><script type="text/javascript" src="../../arquivosusuarios/jquery.js.download"></script><script src="../../arquivosusuarios/jquery-1.12.3.min.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery-ui.js.download"></script><script src="../../arquivosusuarios/jquery-ui.min.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/load-image.all.min.js.download"></script><script src="../../arquivosusuarios/load-image.all.min.js(1).download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.fileupload.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.iframe-transport.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.fileupload-process.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.mask.min.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.blockui.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/prettycheckboxes.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.watermark.min.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/jquery.maskmoney.min.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/site.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/_site.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/controls.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/init.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/msstring.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/menu.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/ScriptResource.axd"></script><script type="text/javascript" src="../../arquivosusuarios/blank.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/ScriptResource(1).axd"></script>


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

                        var node = $('<span clas="fileName" />').text(name + ' (' + size + 'KB)');

                        file.uploadID = file

                        node.appendTo(data.context);

                        $.each(data.originalFiles, function (i, originalFile) {
                            if (file.name === originalFile.name) {
                                node = $('<div class="cancel item' + i + '" />').append($('<a id="' + i + '" />').append($('<img />').prop("src", "../../arquivos/img/site/cancel.png")));

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
                $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/workarea/bt-salvararqdocoff.png");
                $("[id*='ibtnPreviewDocument']").prop("disabled", true);
                $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/workarea/ico-view-off.png");
                $("[id*='ibtnDownloadDocument']").prop("disabled", true);
                $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/workarea/bt-downloaddocoff.png");
                $("[id*='ibtnRenameDocument']").prop("disabled", true);
                $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/workarea/32tp-renomear3.png");
                $("[id*='ibtnDeleteDocument']").prop("disabled", true);
                $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/workarea/bt-excluirarqdocoff.png");
            }

            $("#lstDocs [id*='cbSelectAllDocuments']").change(function () {
                $("[id*='cblDocuments'] input:checkbox").prop('checked', $(this).prop("checked"));

                if ($("#lstDocs [id*='cbSelectAllDocuments']").prop('checked')) {
                    $("[id*='ibtnIndexDocument']").prop("disabled", false);
                    $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/workarea/bt-salvararqdoc.png");
                    $("[id*='ibtnPreviewDocument']").prop("disabled", true);
                    $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/workarea/ico-view-off.png");
                    $("[id*='ibtnDownloadDocument']").prop("disabled", false);
                    $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/workarea/bt-downloaddoc.png");
                    $("[id*='ibtnRenameDocument']").prop("disabled", true);
                    $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/workarea/32tp-renomear3.png");
                    $("[id*='ibtnDeleteDocument']").prop("disabled", false);
                    $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/workarea/bt-excluirarqdoc.png");
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
                    $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/workarea/bt-salvararqdoc.png");
                    $("[id*='ibtnPreviewDocument']").prop("disabled", false);
                    $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/workarea/ico-view-on.png");
                    $("[id*='ibtnDownloadDocument']").prop("disabled", false);
                    $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/workarea/bt-downloaddoc.png");
                    $("[id*='ibtnRenameDocument']").prop("disabled", false);
                    $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/workarea/32cl-renomear3.png");
                    $("[id*='ibtnDeleteDocument']").prop("disabled", false);
                    $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/workarea/bt-excluirarqdoc.png");
                }

                if (checked > 1) {
                    $("[id*='ibtnIndexDocument']").prop("disabled", false);
                    $("[id*='ibtnIndexDocument']").prop("src", "../../arquivos/img/workarea/bt-salvararqdoc.png");
                    $("[id*='ibtnPreviewDocument']").prop("disabled", true);
                    $("[id*='ibtnPreviewDocument']").prop("src", "../../arquivos/img/workarea/ico-view-off.png");
                    $("[id*='ibtnDownloadDocument']").prop("disabled", false);
                    $("[id*='ibtnDownloadDocument']").prop("src", "../../arquivos/img/workarea/bt-downloaddoc.png");
                    $("[id*='ibtnRenameDocument']").prop("disabled", true);
                    $("[id*='ibtnRenameDocument']").prop("src", "../../arquivos/img/workarea/32tp-renomear3.png");
                    $("[id*='ibtnDeleteDocument']").prop("disabled", false);
                    $("[id*='ibtnDeleteDocument']").prop("src", "../../arquivos/img/workarea/bt-excluirarqdoc.png");
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
    <link type="text/css" rel="stylesheet" href="../../arquivosusuarios/custommaster.css">

    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="/_layouts/dataxdoc/styles/masterpages/ie-custommaster.css" />
	<![endif]-->

    <!-- novo layout -->
    <link type="text/css" rel="stylesheet" href="../../arquivosusuarios/_site.css">

    <!-- link do Responsive Grid System -->
    <link rel="stylesheet" href="../../arquivosusuarios/col.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/2cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/3cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/4cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/5cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/6cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/7cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/8cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/9cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/10cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/11cols.css" media="all"><link rel="stylesheet" href="../../arquivosusuarios/12cols.css" media="all">

    <!-- link para o nosso css comum -->
    <link type="text/css" rel="stylesheet" href="../../arquivosusuarios/common.css">

    <!-- link para o nosso css dos controles de formulário -->
    <link type="text/css" rel="stylesheet" href="../../arquivosusuarios/controls.css">

    <!-- link para o css de controles de usuário -->
    <link type="text/css" rel="stylesheet" href="../../arquivosusuarios/search(1).css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/menucontrol.css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/reportmenu.css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/settingsmenu.css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/welcomemenu.css">

    <!-- link para o css de plugins -->
    <link type="text/css" rel="stylesheet" href="../../arquivosusuarios/dataxdoc_theme.css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/prettyCheckboxes.css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/simple-modal.css"><link type="text/css" rel="stylesheet" href="../../arquivosusuarios/jquery.fileupload.css">


    <!-- Responsive  -->
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="../../arquivosusuarios/_1024.css"><link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="../../arquivosusuarios/_768.css"><link rel="stylesheet" media="only screen and (max-width: 480px)" href="../../arquivosusuarios/_480.css">

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
	

    <link rel="stylesheet" type="text/css" href="../../arquivosusuarios/page.css">
    <link rel="stylesheet" type="text/css" href="../../arquivosusuarios/settings-page.css">

  <script type="text/javascript">

    function UserDelete() {
      if (confirm("Deseja Excluir Este Usuário?") == true)
        return true;
      else
        return false;
    }

  </script>
	

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

</style><script type="text/javascript" src="../../arquivosusuarios/core.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/sp.core.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/ScriptResx.ashx"></script><script type="text/javascript" src="../../arquivosusuarios/cui.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/sp.ui.dialog.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/sp.runtime.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/sp.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/search.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/inplview.debug.js.download"></script><script type="text/javascript" src="../../arquivosusuarios/sp.ribbon.debug.js.download"></script></head>

<body scroll="no" onload="javascript:_spBodyOnLoadWrapper();">

<form name="aspnetForm" method="post" action="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="aspnetForm">
<div>
<input type="hidden" name="MSOWebPartPage_PostbackSource" id="MSOWebPartPage_PostbackSource" value="">
<input type="hidden" name="MSOTlPn_SelectedWpId" id="MSOTlPn_SelectedWpId" value="">
<input type="hidden" name="MSOTlPn_View" id="MSOTlPn_View" value="0">
<input type="hidden" name="MSOTlPn_ShowSettings" id="MSOTlPn_ShowSettings" value="False">
<input type="hidden" name="MSOGallery_SelectedLibrary" id="MSOGallery_SelectedLibrary" value="">
<input type="hidden" name="MSOGallery_FilterString" id="MSOGallery_FilterString" value="">
<input type="hidden" name="MSOTlPn_Button" id="MSOTlPn_Button" value="none">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="MSOSPWebPartManager_DisplayModeName" id="MSOSPWebPartManager_DisplayModeName" value="Browse">
<input type="hidden" name="MSOSPWebPartManager_ExitingDesignMode" id="MSOSPWebPartManager_ExitingDesignMode" value="false">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="MSOWebPartPage_Shared" id="MSOWebPartPage_Shared" value="">
<input type="hidden" name="MSOLayout_LayoutChanges" id="MSOLayout_LayoutChanges" value="">
<input type="hidden" name="MSOLayout_InDesignMode" id="MSOLayout_InDesignMode" value="">
<input type="hidden" name="MSOSPWebPartManager_OldDisplayModeName" id="MSOSPWebPartManager_OldDisplayModeName" value="Browse">
<input type="hidden" name="MSOSPWebPartManager_StartWebPartEditingName" id="MSOSPWebPartManager_StartWebPartEditingName" value="false">
<input type="hidden" name="MSOSPWebPartManager_EndWebPartEditing" id="MSOSPWebPartManager_EndWebPartEditing" value="false">
<input type="hidden" name="_maintainWorkspaceScrollPosition" id="_maintainWorkspaceScrollPosition" value="0">

</div>

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


<script src="../../arquivosusuarios/WebResource.axd" type="text/javascript"></script>


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
<script src="../../arquivosusuarios/ScriptResource(2).axd" type="text/javascript"></script>
<script src="../../arquivosusuarios/blank.debug.js.download" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
if (typeof(DeferWebFormInitCallback) == 'function') DeferWebFormInitCallback();//]]>
</script>

<script src="../../arquivosusuarios/WebResource(1).axd" type="text/javascript"></script>
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

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="D7A2A191">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWLQLo+YfPBQKI0eLECgKEmrzaDwK167L+AgLQ6LL+AgK4kZWDDgLzi/qnBwKVgOj4CwKOzeGrCwL67pPSCwKprqL1BwLLopDGDALE74n5CwKwkbyfDALf0MrCCAKp+8npCwL6kbLGDAKO6vXCCwL1raOpBwK/2KLQCgKQ74qtCwKkx86pCgLt/JqACAK0p4raDwKIvoKEDAKZlrazDwLzi+b5BQKSgMT9DgKOzc39CQL37u/WDgKpro7HBgLIouzKDwLE7/XKCgKtkZikDwLf0LaUBwKm+6XuDgL6kZ6YCwKL6tHHDgL1rY/7BQK82P7UDQKQ7/b+CQKhx6quDQKpn5bCCwLNrvW5AwK9+p7tAm/tVr4xX0HNIFbaYkQ5yL3gULrx">
</div>

<!-- handles SharePoint scripts -->
<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['fctl00$WebPartAdderUpdatePanel'], [], ['ctl00$WebPartAdder'], 90);
//]]>
</script>


<!-- controls the web parts and zones -->


    <div id="wrapper">
        <div id="head-container">
            <header class="group">
                <div id="logo">
		            <a href="https://dtc-server01/sites/demo/">
			            <img src="../../arquivosusuarios/logo.png" alt="Demo" style="border-width:0px;">
		            </a>
                </div>
                <a id="nav-toggle">Menu</a>
                <div id="header-items">
                    <div id="header-search">
                        

<div class="search-bar">
    <input name="ctl00$searchControl$txtSearch" type="text" id="ctl00_searchControl_txtSearch" placeholder="Busca">
    <input type="submit" name="ctl00$searchControl$btnSearch" value="Buscar" id="ctl00_searchControl_btnSearch" class="button">
</div>

                    </div>
                    <div id="header-menu">
                        <div id="site-menu">
                            <div id="report-menu">
                                

<div id="divReportMenu">
    <a id="ctl00_ctl63_lbReport" href="javascript:__doPostBack(&#39;ctl00$ctl63$lbReport&#39;,&#39;&#39;)" style="position: absolute; margin: 2px -19px; font-size: 1em;"></a>
    <input type="image" name="ctl00$ctl63$ibReport" id="ctl00_ctl63_ibReport" src="../../arquivosusuarios/report-24x24.png" style="border-width:0px;">

   
                

</div>

                            </div>
                            <div id="settings-menu">
                                <div id="ctl00_ctl64_divSettingsMenu" class="menuSettings">
        
    <script type="text/javascript">

        $(document).ready(function () {
            $("table.SettingsMenu").hover(function () {
                $("table.SettingsMenu").addClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.SettingsMenu").removeClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/UserControls/static_arrow.png");
            });
        });

        $(document).ready(function () {
            $("table.SettingsMenuItem").hover(function () {
                $("table.SettingsMenu").addClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.SettingsMenu").removeClass("SelectedMenu");
                $("table.SettingsMenu img").attr("src", "../../arquivos/img/UserControls/static_arrow.png");
            });
        });

    </script>
    
    <a href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx#zz1_menuSettings_SkipLink"><img alt="Skip Navigation Links" src="../../arquivosusuarios/WebResource(2).axd" width="0" height="0" style="border-width:0px;"></a><table id="zz1_menuSettings" class="zz1_menuSettings_2" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn0"><table class="SettingsMenu zz1_menuSettings_4" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tbody><tr>
				<td style="white-space:nowrap;"><a class="zz1_menuSettings_1 SettingsMenu zz1_menuSettings_3" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx#" style="border-style:none;font-size:1em;cursor:text;"><img src="../../arquivosusuarios/settings-24x24.png" alt="" style="border-style:none;vertical-align:middle;"></a></td><td style="width:0;"><img src="../../arquivosusuarios/static_arrow.png" alt="Expand " style="border-style:none;vertical-align:middle;"></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table><div id="zz1_menuSettingsn0Items" class="zz1_menuSettings_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn1">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/user.png" alt="" style="border-style:none;vertical-align:middle;">Usuários</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn2">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/old/settings/ManageFiles.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/file.png" alt="" style="border-style:none;vertical-align:middle;">Locais de Guarda</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn3">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/old/settings/ManageAccesses.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/access.png" alt="" style="border-style:none;vertical-align:middle;">Permissões</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn4">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/old/settings/ManageContentTypesAndMetadata.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/IconIndexadoresETipoDocumental.png" alt="" style="border-style:none;vertical-align:middle;">Tipos Documentais</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz1_menuSettingsn5">
			<td><table class="SettingsMenuItem zz1_menuSettings_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz1_menuSettings_1 SettingsMenuItem zz1_menuSettings_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/general/general-settings.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/general-settings-icon.png" alt="" style="border-style:none;vertical-align:middle;">Configuração Geral</a></td>
				</tr>
			</tbody></table></td>
		</tr>
	</tbody></table><div class="SettingsMenuItem zz1_menuSettings_6 zz1_menuSettings_0" id="zz1_menuSettingsn0ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosusuarios/WebResource(3).axd" alt="Scroll up">
	</div><div class="SettingsMenuItem zz1_menuSettings_6 zz1_menuSettings_0" id="zz1_menuSettingsn0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosusuarios/WebResource(4).axd" alt="Scroll down">
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
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.WelcomeMenu").removeClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/UserControls/static_arrow.png");
            });
        });

        $(document).ready(function () {
            $("table.WelcomeMenuItem td").hover(function () {
                $("table.WelcomeMenu").addClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/UserControls/dynamic_arrow.png");
            }, function () {
                $("table.WelcomeMenu").removeClass("SelectedMenu");
                $("table.WelcomeMenu td > img").attr("src", "../../arquivos/img/UserControls/static_arrow.png");
            });
        });

    </script>

    <span id="user-icon"><img alt="" src="../../arquivosusuarios/user(1).png" style="margin-left: 8px;"></span>
    
    <a href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx#zz2_menuWelcome_SkipLink"><img alt="Skip Navigation Links" src="../../arquivosusuarios/WebResource(2).axd" width="0" height="0" style="border-width:0px;"></a><table id="zz2_menuWelcome" class="divWelcomeMenu zz2_menuWelcome_2" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen0"><table class="WelcomeMenu zz2_menuWelcome_4" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tbody><tr>
				<td style="white-space:nowrap;"><a class="zz2_menuWelcome_1 WelcomeMenu zz2_menuWelcome_3" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/settings/users.aspx#" style="border-style:none;font-size:1em;cursor:text;">Olá, Gledson</a></td><td style="width:0;"><img src="../../arquivosusuarios/static_arrow.png" alt="Expand Olá, Gledson" style="border-style:none;vertical-align:middle;"></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table><div id="zz2_menuWelcomen0Items" class="zz2_menuWelcome_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen1">
			<td><table class="WelcomeMenuItem zz2_menuWelcome_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz2_menuWelcome_1 WelcomeMenuItem zz2_menuWelcome_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/old/my/LastIndexedDocuments.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/lastdocs.png" alt="" style="border-style:none;vertical-align:middle;">Meus Últimos Documentos Indexados</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen2">
			<td><table class="WelcomeMenuItem zz2_menuWelcome_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz2_menuWelcome_1 WelcomeMenuItem zz2_menuWelcome_5" href="https://dtc-server01/sites/demo/_layouts/dataxdoc/my/personal-info.aspx" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/personalinfo.png" alt="" style="border-style:none;vertical-align:middle;">Meus Dados Pessoais</a></td>
				</tr>
			</tbody></table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="zz2_menuWelcomen3">
			<td><table class="WelcomeMenuItem zz2_menuWelcome_6" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td style="white-space:nowrap;width:100%;"><a class="zz2_menuWelcome_1 WelcomeMenuItem zz2_menuWelcome_5" href="javascript:__doPostBack(&#39;ctl00$ctl65$menuWelcome&#39;,&#39;Olá, Gledson\\logoutWelcome&#39;)" style="border-style:none;font-size:1em;"><img src="../../arquivosusuarios/siginout.png" alt="" style="border-style:none;vertical-align:middle;">Sair</a></td>
				</tr>
			</tbody></table></td>
		</tr>
	</tbody></table><div class="WelcomeMenuItem zz2_menuWelcome_6 zz2_menuWelcome_0" id="zz2_menuWelcomen0ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosusuarios/WebResource(3).axd" alt="Scroll up">
	</div><div class="WelcomeMenuItem zz2_menuWelcome_6 zz2_menuWelcome_0" id="zz2_menuWelcomen0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="../../arquivosusuarios/WebResource(4).axd" alt="Scroll down">
	</div>
</div><a id="zz2_menuWelcome_SkipLink"></a>

</div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        

        <?php

            $usuarios = consultaTodosUsuarios();

            var_dump($usuarios);

             $desativado = 0;
             $bloqueado = 0;

            for ($i=0; $i < $usuarios['qtdReg'] ;$i++ ) 
            { 

              $ic_ativo =  $usuarios[$i]['ic_ativo'];
            
             switch ($ic_ativo)
              {

                case '0':
                    $inativo = $inativo++;
                    $usuarios[$i]['imgon'] = "16-usuario-offline.png";
                    $status = "Inativo";
                    
                     break;

                 case '1':
                     $ativos = 1 + $ativos ;
                     $status = "Ativo";
                     $usuarios[$i]['imgon'] =  "16-usuario-offline.png";
                     break;
                
                case '2':
                    $bloqueado = $bloqueado++;
                    $status = "Bloqueado";
                    $usuarios[$i]['imgon'] =  "16-usuario-offline.png";
                     break;
                case '3':
                     $ativos = 1 + $ativos ;
                     $status = "Online";
                     $usuarios[$i]['imgon'] =  "16-usuario-online.png";
                     break;



             }

            }

           


        ?>


       

        <div id="main-container">
            <div id="content">
			    
  <div id="simplemodal" class="simplemodal"></div>
  
  <div id="form-container">
    <h1>
      <img alt="USUÁRIOS" src="../../arquivosusuarios/manage-usersheading.png">
      <input type="image" name="close" title="Fechar" src="../../arquivosusuarios/close-button.png" class="close-button" onclick="return Redirect(&#39;/sitepages/main.aspx&#39;);">
    </h1>
    <div class="content-form-container">
      <div class="content-form">
        <div id="header_user" class="header_user">
          <input type="submit" name="new-user" value="Novo Usuário" class="button" onclick="return Redirect(&#39;/_layouts/dataxdoc/settings/new-user.aspx&#39;);">          
          <span id="ctl00_PlaceHolderMain_lblTotal" class="users_cadastrados"><?=$usuarios['qtdReg'];?> Usuário(s)</span>
          <span id="ctl00_PlaceHolderMain_lblDeactivated" class="users_desativados"><?=$desativado;?> Desativado(s)</span>
          <span id="ctl00_PlaceHolderMain_lblBlocked" class="users_bloqueados"><?=$bloqueado?> Bloqueado(s)</span>
        </div>
        <div id="grid-position">
         
          <div id="ctl00_PlaceHolderMain_Panel1" class="tabelagrid" style="overflow:auto;">
	
            <div class="grid">
              <div>
		
        <table cellspacing="0" border="0" id="ctl00_PlaceHolderMain_gvUsers" style="font-family:century gothic;border-collapse:collapse;">
			<tbody>
            <tr style="background-color:#F0F0F0;border-style:None;">
				<th scope="col">&nbsp;</th><th scope="col">Login</th><th scope="col">Nome</th><th scope="col">Alçada</th><th scope="col">Data de Criação</th><th scope="col">Último Acesso</th><th scope="col">Status</th>
			</tr>



            <?php
                for ($i=0; $i < $usuarios['qtdReg']; $i++) { 
                    if($i%2 == 0)
                    {
                        $background = "#F0F0F0";
                    }else
                    {
                        $background = "white";
                    }

                    switch ($usuarios[$i]['tp_acesso']) {
                        case '1':
                            $alcada = 'Administrador';
                            break;
                        
                        case '2':
                            $alcada = 'Arquivista';
                            break;
                        case '3':
                            $alcada = 'Operador';
                            break;
                    }

                     $usuarios[$i]['dt_cadastro'] = formatadatatela($usuarios[$i]['dt_cadastro']);
                     $usuarios[$i]['dt_ultimoAcesso'] = formatadatatela($usuarios[$i]['dt_ultimoAcesso']);
                   
                    
              ?>  

            <tr style="background-color:<?=$background;?>; border-style:None;">
				<td style="width:80px;">                        
                        <input type="image" name="ctl00$PlaceHolderMain$gvUsers$ctl02$ibtnEdit" id="ctl00_PlaceHolderMain_gvUsers_ctl02_ibtnEdit" src="../../arquivosusuarios/16CL_EDITAR.png" alt="Editar" style="border-width:0px;">
                        <input type="image" name="ctl00$PlaceHolderMain$gvUsers$ctl02$ibtnDelete" id="ctl00_PlaceHolderMain_gvUsers_ctl02_ibtnDelete" src="../../arquivosusuarios/16CL_EXCLUIR.png" alt="Excluir" onclick="return ConfirmMessage(&#39;Deseja realmente excluir este usuário?&#39;);" style="border-width:0px;">                     
                    </td><td style="width:168px;"><?=$usuarios[$i]['nm_login'] ?></td><td style="width:168px;"><?=$usuarios[$i]['nm_usuario'];?></td><td style="width:106px;"><?=$alcada;?></td><td style="width:114px;"><?=$usuarios[$i]['dt_cadastro']; ?></td><td style="width:114px;"><?=$usuarios[$i]['dt_ultimoAcesso']; ?></td><td style="width:150px;">
                      <img id="ctl00_PlaceHolderMain_gvUsers_ctl02_ImgStatus" title="<?=$status;?>" class="ibtnGrid" src="../../arquivosusuarios/<?=$usuarios[$i]['imgon'];
                    ;?>" style="border-width:0px;">
                      <img id="ctl00_PlaceHolderMain_gvUsers_ctl02_imgBlocked" title="Desbloqueado" class="ibtnGrid" src="../../arquivosusuarios/16cl-cadeado-gray.png" style="border-width:0px;">
                      <img id="ctl00_PlaceHolderMain_gvUsers_ctl02_imgDesativado" title="Ativo" class="ibtnGrid" src="../../arquivosusuarios/16-desativado-gray.png" style="border-width:0px;">
                    </td>
		</tr>

            <?php } ?>
            
            
		</tbody></table>
	</div>
            </div>
          
</div>
        </div>
      </div>
    </div>
  </div>


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
					
						
						<span style="display:none"><menu type="ServerMenu" id="zz3_SiteActionsMenuMain" largeiconmode="true"><ie:menuitem id="ctl00_SiteActionsMenuMain_ctl00_MenuItem_TakeOffline" type="option" iconsrc="../../arquivos/imgconnecttospworkspace32.png" onmenuclick="javaScript:CoreInvoke(&#39;TakeOfflineToClientReal&#39;,1, 1, &#39;https:\u002f\u002fdtc-server01\u002fsites\u002fdemo&#39;, -1, -1, &#39;&#39;, &#39;&#39;)" hidden="TakeOfflineDisabled(1, 1, -1, -1)" text="Sync to SharePoint Workspace" description="Create a synchronized copy of this site on your computer." menugroupid="100"></ie:menuitem>
<ie:menuitem id="zz4_MenuItem_CreateDocLib" type="option" iconsrc="../../arquivos/imgNewDocLibHH.png" onmenuclick="if (LaunchCreateHandler(&#39;DocLib&#39;)) { GoToPage(&#39;\u002fsites\u002fdemo\u002f_layouts/new.aspx?FeatureId={00bfea71-e717-4e80-aa17-d0c71b360101}&amp;ListTemplate=101&#39;) }" text="New Document Library" description="Create a place to store and share documents." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz5_MenuItem_CreateSite" type="option" iconsrc="../../arquivos/imgnewweb32.png" onmenuclick="if (LaunchCreateHandler(&#39;Site&#39;)) { STSNavigate(&#39;\u002fsites\u002fdemo\u002f_layouts/newsbweb.aspx&#39;) }" text="New Site" description="Create a site for a team or project." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz6_MenuItem_Create" type="option" onmenuclick="if (LaunchCreateHandler(&#39;All&#39;)) { STSNavigate(&#39;\u002fsites\u002fdemo\u002f_layouts/create.aspx&#39;) }" text="More Options..." description="Create other types of pages, lists, libraries, and sites." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz7_MenuItem_ViewAllSiteContents" type="option" iconsrc="../../arquivos/imgallcontent32.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/viewlsts.aspx&#39;);" text="View All Site Content" description="View all libraries and lists in this site." menugroupid="300"></ie:menuitem>
<ie:menuitem id="zz8_MenuItem_EditSite" type="option" iconsrc="../../arquivos/imgSharePointDesigner32.png" onmenuclick="EditInSPD(&#39;\u002fsites\u002fdemo\u002f&#39;,true);" text="Edit in SharePoint Designer" description="Create or edit lists, pages, and workflows, or adjust settings." menugroupid="300"></ie:menuitem>
<ie:menuitem id="zz9_MenuItem_SitePermissions" type="option" iconsrc="../../arquivos/imgPermissions32.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/user.aspx&#39;);" text="Site Permissions" description="Give people access to this site." menugroupid="300"></ie:menuitem>
<ie:menuitem id="zz10_MenuItem_Settings" type="option" iconsrc="../../arquivos/imgsettingsIcon.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/settings.aspx&#39;);" text="Site Settings" description="Access all settings for this site." menugroupid="300"></ie:menuitem>
</menu></span><span id="zz11_SiteActionsMenu_t" class="ms-siteactionsmenuinner" title="Open Menu" onmouseover="MMU_PopMenuIfShowing(this);MMU_EcbTableMouseOverOut(this, true)" hoveractive="ms-siteactionsmenuhover" hoverinactive="ms-siteactionsmenuinner" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz3_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;),event,false, null, 0); return false;" foa="MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;)" oncontextmenu="ClkElmt(this); return false;" style="white-space:nowrap"><a class="ms-menu-a" id="zz11_SiteActionsMenu" accesskey="/" href="javascript:;" style="cursor:pointer;white-space:nowrap;" onfocus="MMU_EcbLinkOnFocusBlur(byid(&#39;zz3_SiteActionsMenuMain&#39;), this, true);" onkeydown="MMU_EcbLinkOnKeyDown(byid(&#39;zz3_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;), event);" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz3_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz11_SiteActionsMenu&#39;),event,false, null, 0); return false;" oncontextmenu="ClkElmt(this); return false;" menutokenvalues="MENUCLIENTID=zz11_SiteActionsMenu,TEMPLATECLIENTID=zz3_SiteActionsMenuMain" serverclientid="zz11_SiteActionsMenu"><span>Site Actions</span><img src="../../arquivosusuarios/blank.gif" style="border:0px" alt="Use SHIFT+ENTER to open the menu (new window)."></a><span style="height:3px;width:5px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust ms-viewselector-arrow"><img src="../../arquivosusuarios/fgimg.png" alt="Open Menu" style="border-width:0px;position:absolute;left:-0px !important;top:-491px !important;"></span></span></span>
			
			  <!-- global navigation dhtml popout menu -->
			  
					<span class="s4-breadcrumb-anchor"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust"><a id="GlobalBreadCrumbNavPopout-anchor" onclick="CoreInvoke(&#39;callOpenBreadcrumbMenu&#39;, event, &#39;GlobalBreadCrumbNavPopout-anchor&#39;, &#39;GlobalBreadCrumbNavPopout-menu&#39;, &#39;GlobalBreadCrumbNavPopout-img&#39;, &#39;s4-breadcrumb-anchor-open&#39;, &#39;ltr&#39;, &#39;&#39;, false); return false;" onmouseover="" onmouseout="" title="Navigate Up" href="javascript:;" style="display:inline-block;height:16px;width:16px;"><img src="../../arquivosusuarios/fgimg.png" alt="Navigate Up" style="border:0;position:absolute;left:-0px !important;top:-112px !important;"></a></span></span><div class="ms-popoutMenu s4-breadcrumb-menu" id="GlobalBreadCrumbNavPopout-menu" style="display:none;">
						<div class="s4-breadcrumb-top">
							<span class="s4-breadcrumb-header">This page location is:</span>
						</div>
						
							<ul class="s4-breadcrumb">
	<li class="s4-breadcrumbCurrentNode"><span class="s4-breadcrumb-arrowcont"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust s4-breadcrumb"><img src="../../arquivosusuarios/fgimg.png" alt="" style="border-width:0px;position:absolute;left:-0px !important;top:-353px !important;"></span></span><span class="s4-breadcrumbCurrentNode">Demo</span></li>
</ul>
						
					</div>
				
				
			<!-- save button at top of ribbon -->
			</div><div id="RibbonContainer-TabRowRight" class="ms-cui-TabRowRight s4-trc-container s4-notdlg">
				
				<!-- GlobalSiteLink0 delegate - the variation selector / shows nothing by default otherwise -->
				
				
				<!-- Welcome / Login control -->
				<div class="s4-trc-container-menu">
					 <div>
						
	 
	<span style="display:none"><menu type="ServerMenu" id="zz12_ID_PersonalActionMenu" largeiconmode="true"><ie:menuitem id="zz13_ID_PersonalInformation" type="option" iconsrc="../../arquivos/imgmenuprofile.gif" onmenuclick="javascript:GoToPage(&#39;\u002fsites\u002fdemo\u002f_layouts\u002fuserdisp.aspx?Force=True\u0026ID=&#39; + _spUserId);return false;" text="My Settings" description="Update your user information, regional settings, and alerts." menugroupid="100"></ie:menuitem>
<ie:menuitem id="zz14_ID_LoginAsDifferentUser" type="option" onmenuclick="javascript:LoginAsAnother(&#39;\u002fsites\u002fdemo\u002f_layouts\u002fcloseConnection.aspx?loginasanotheruser=true&#39;, 0)" text="Sign in as Different User" description="Login with a different account." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz15_ID_Logout" type="option" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/SignOut.aspx&#39;);" text="Sign Out" description="Logout of this site." menugroupid="200"></ie:menuitem>
</menu></span><span id="zz16_Menu_t" class="ms-SPLink ms-SpLinkButtonInActive ms-welcomeMenu" title="Open Menu" onmouseover="MMU_PopMenuIfShowing(this);MMU_EcbTableMouseOverOut(this, true)" hoveractive="ms-SPLink ms-SpLinkButtonActive ms-welcomeMenu" hoverinactive="ms-SPLink ms-SpLinkButtonInActive ms-welcomeMenu" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz12_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;),event,false, null, 0); return false;" foa="MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;)" oncontextmenu="ClkElmt(this); return false;" style="white-space:nowrap"><a class="ms-menu-a" id="zz16_Menu" accesskey="W" href="javascript:;" style="cursor:pointer;white-space:nowrap;" onfocus="MMU_EcbLinkOnFocusBlur(byid(&#39;zz12_ID_PersonalActionMenu&#39;), this, true);" onkeydown="MMU_EcbLinkOnKeyDown(byid(&#39;zz12_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;), event);" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz12_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz16_Menu&#39;),event,false, null, 0); return false;" oncontextmenu="ClkElmt(this); return false;" menutokenvalues="MENUCLIENTID=zz16_Menu,TEMPLATECLIENTID=zz12_ID_PersonalActionMenu" serverclientid="zz16_Menu"><span>dem.admin</span><img src="../../arquivosusuarios/blank.gif" style="border:0px" alt="Use SHIFT+ENTER to open the menu (new window)."></a><span style="height:3px;width:5px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust ms-viewselector-arrow"><img src="../../arquivosusuarios/fgimg.png" alt="Open Menu" style="border-width:0px;position:absolute;left:-0px !important;top:-491px !important;"></span></span><script type="text/javascript">
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
			<img src="../../arquivosusuarios/logo.png" alt="Demo" style="border-width:0px;">
		</a>	
	</div>
		
	<!-- search box loads from delegate, style with CSS -->
	<div class="s4-notdlg">
		
			<table class="s4-wpTopTable" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
		<td valign="top"><div webpartid="00000000-0000-0000-0000-000000000000" haspers="true" id="WebPartWPQ1" width="100%" class="noindex" onlyformepart="true" allowdelete="false" style=""><div id="SRSB"> <div>
			<input name="ctl00$PlaceHolderSearchArea$ctl01$ctl00" type="hidden" id="ctl00_PlaceHolderSearchArea_ctl01_ctl00" value="https://dtc-server01/sites/demo"><table class="ms-sbtable ms-sbtable-ex s4-search" cellpadding="0" cellspacing="0" border="0">
				<tbody><tr class="ms-sbrow">
					<td class="ms-sbcell"><input name="InputKeywords" type="text" value="Search this site..." maxlength="200" id="ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords" accesskey="S" title="Search..." class="ms-sbplain s4-searchbox-QueryPrompt" alt="Search..." onkeypress="javascript: return S3031AEBB_OSBEK(event);" onfocus="if (document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value ==&#39;0&#39;) {this.value=&#39;&#39;; if (this.className == &#39;s4-searchbox-QueryPrompt&#39;) this.className = &#39;&#39;; else this.className = this.className.replace(&#39; s4-searchbox-QueryPrompt&#39;,&#39;&#39;); document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value=1;}" onblur="if (this.value ==&#39;&#39;) {this.value=&#39;Search this site...&#39;; if (this.className.indexOf(&#39;s4-searchbox-QueryPrompt&#39;) == -1) this.className += this.className?&#39; s4-searchbox-QueryPrompt&#39;:&#39;s4-searchbox-QueryPrompt&#39;; document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value = &#39;0&#39;} else {document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value=&#39;1&#39;;}" style="width:170px;"></td><td class="ms-sbgo ms-sbcell"><a id="ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_go" title="Search" href="javascript:S3031AEBB_Submit()"><img title="Search" onmouseover="this.src=&#39;\u002f_layouts\u002fimages\u002fgosearchhover15.png&#39;" onmouseout="this.src=&#39;\u002f_layouts\u002fimages\u002fgosearch15.png&#39;" class="srch-gosearchimg" alt="Search" src="../../arquivosusuarios/gosearch15.png" style="border-width:0px;"></a></td><td class="ms-sbLastcell"></td>
				</tr>
			</tbody></table><input name="ctl00$PlaceHolderSearchArea$ctl01$ctl04" type="hidden" id="ctl00_PlaceHolderSearchArea_ctl01_ctl04" value="0">
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
<input type="text" name="__spDummyText1" style="display:none;" size="1">
<input type="text" name="__spDummyText2" style="display:none;" size="1">



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
function SearchEnsureSOD() { EnsureScript('search.js',typeof(GoSearch)); } _spBodyOnLoadFunctionNames.push('SearchEnsureSOD');function S3031AEBB_Submit() {if (document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_ctl04').value == '0') { document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords').value=''; }SearchEnsureSOD();GoSearch('ctl00_PlaceHolderSearchArea_ctl01_ctl04','ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords',null,true,false,null,'ctl00_PlaceHolderSearchArea_ctl01_ctl00',null,null,'This Site','\u002f_layouts\u002fOssSearchResults.aspx', 'This Site','This List', 'This Folder', 'Related Sites', '\u002fsites\u002fdemo\u002f_layouts\u002fOSSSearchResults.aspx', '', 'Please enter one or more search words.');if (document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_ctl04').value == '0') { document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords').value=''; }}
// -->
</script><script type="text/javascript" language="JavaScript">
// append an onload event handler
var S3031AEBB__onload= document.body.onload;
if(typeof document.body.onload == 'function')
{
 document.body.onload = function()
 {
S3031AEBB__onload();        
  document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords').name = 'InputKeywords';
 }
}
else
{
 document.body.onload = function()
 {
  eval(S3031AEBB__onload);        
  document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords').name = 'InputKeywords';
 }
}

function S3031AEBB_OSBEK(event1) { 
if((event1.which == 10) || (event1.which == 13))
{   
S3031AEBB_Submit();return false;
}
}
{ var searchTextBox = document.getElementById('ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords');if (searchTextBox.className.indexOf('s4-searchbox-QueryPrompt') == -1) searchTextBox.className += searchTextBox.className?' s4-searchbox-QueryPrompt':'s4-searchbox-QueryPrompt'; }// -->
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


  <script type="text/javascript" src="../../arquivosusuarios/page.js.download"></script>

  <script type="text/jscript">

  </script>



<!-- warn users of old browsers that they need to upgrade -->


<!-- Starter Master Page by Randy Drisgill (http://blog.drisgill.com) - Oct. 7, 2010 -->
<!-- Remove this credit if you want, but if you leave it in I will appreciate it! -->

</body></html>