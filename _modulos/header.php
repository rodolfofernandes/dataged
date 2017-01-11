

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
    <link rel="shortcut icon" href="/Style%20Library/sitename/favicon.ico" type="image/vnd.microsoft.icon">

    <!-- link para o normalize.css -->
    <link rel="stylesheet" href="../../arquivosMain/normalize.css">

    <!-- all OOTB css -->
    <link rel="stylesheet" type="text/css" href="../../arquivosMain/search.css">
<link rel="stylesheet" type="text/css" href="../../arquivosMain/corev4.css">


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
document.write('<script type="text/javascript" src="../../arquivos/jquery-file-upload-9.11.2/js/jquery.iframe-transport.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/jquery-file-upload-9.11.2/js/jquery.fileupload.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/main/page.js"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/1033/init.debug.js?rev=%2FOmktAG7ectPWwTJWj46Jg%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/ScriptResource.axd?d=XvvOo7W8vztjXeS3rN4QshK7dJ9Rf64cIYNEf7yRvL0pq-xzXzZfJ-m7k3hFS1JcBiHJVIeNJhvMEBBhkDPW-8mrmwxx5Ef6eeuFDq067dCvuBXn6mKLufmw375pgT3aFFKcGDo_g8ZgXAQ3nnd4mkigSYDJ30eFqakFxh9YszcC9-Sq0&amp;t=2e2045e2"></' + 'script>');
document.write('<script type="text/javascript" src="/_layouts/blank.debug.js?rev=jE3bS2JFTB63z3iWgauX9w%3D%3D"></' + 'script>');
document.write('<script type="text/javascript" src="/ScriptResource.axd?d=P29XPZimyuWYZwUctD5YCMrRCV6pv9w_1DvZuC05yKDniml0iAr1G7sKr3ruhV0yxBWqOj2Sz4grAcHn5NTxEz7-cUQDi-vVa_iVt-BIMpFaOtmx9BSDHaLkza8YuEEGAVOTmnj6vN_kxg994bfu2X3UyMCQh-iWe0sUNkjFEk_pbnlq0&amp;t=2e2045e2"></' + 'script>');
// ]]>
</script><script type="text/javascript" src="../../arquivosMain/jquery.js.download"></script><script src="../../arquivosMain/jquery-1.12.3.min.js.download"></script><script type="text/javascript" src="../../arquivosMain/jquery-ui.js.download"></script><script src="../../arquivosMain/jquery-ui.min.js.download"></script><script type="text/javascript" src="../../arquivosMain/jquery.iframe-transport.js.download"></script><script type="text/javascript" src="../../arquivosMain/jquery.fileupload.js.download"></script><script type="text/javascript" src="../../arquivosMain/page.js.download"></script><script type="text/javascript" src="../../arquivosMain/init.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/ScriptResource.axd"></script><script type="text/javascript" src="../../arquivosMain/blank.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/ScriptResource(1).axd"></script>


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
                url: '"./../arquivos/js/Upload.ashx',
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
    <link rel="stylesheet" href="../../arquivosMain/site.css" media="all">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../arquivosMain/col.css" media="all"><link rel="stylesheet" href="../../arquivosMain/2cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/3cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/4cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/5cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/6cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/7cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/8cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/9cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/10cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/11cols.css" media="all"><link rel="stylesheet" href="../../arquivosMain/12cols.css" media="all">

    <!-- link para o css de plugins -->
    <link rel="stylesheet" type="text/css" href="../../arquivosMain/jquery.fileupload.css"><link rel="stylesheet" type="text/css" href="../../arquivosMain/jquery.mCustomScrollbar.css">

    <!-- Responsive Stylesheets -->
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="../../arquivosMain/1024.css"><link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="../../arquivosMain/768.css"><link rel="stylesheet" media="only screen and (max-width: 480px)" href="../../arquivosMain/480.css">

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
    

    

    

    

    


    <link rel="stylesheet" type="text/css" href="../../arquivosMain/tabs.css">

    <!-- CSS do Layout Padrão -->
    <link rel="stylesheet" href="../../arquivosMain/page.css">
    <link rel="alternate stylesheet" title="default-list" href="../../arquivos/styles/main/list.css" disabled="">


    <!-- CSS do Layout Simplificado -->
    
    <link rel="stylesheet" href="../../arquivosMain/page(1).css">
    <link rel="stylesheet" title="simplified-grid" href="../../arquivosMain/grid.css" disabled="">
    <link rel="alternate stylesheet" type="text/css" title="simplified-list" href="../../arquivosMain/list.css" disabled="">

    <!-- Responsivo do Layout Simplificado  -->
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="../../arquivosMain/1024(1).css">
    <link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 622px)" href="../../arquivosMain/768(1).css">
    <link rel="stylesheet" media="only screen and (max-width: 621px) and (min-width: 481px)" href="../../arquivosMain/621.css">
    <link rel="stylesheet" media="only screen and (max-width: 480px)" href="../../arquivosMain/480(1).css">

    <link rel="alternate stylesheet" media="only screen and (max-width: 621px) and (min-width: 481px)" title="simplified-list" href=../../arquivos/styles/simplified-layout/_621.css" disabled="">
    <link rel="alternate stylesheet" media="only screen and (max-width: 480px)" title="simplified-list" href=../../arquivos/styles/simplified-layout/_480.css" disabled="">

    

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

</style><script src="../../arquivosMain/jquery.mousewheel.min.js.download"></script><script type="text/javascript" src="../../arquivosMain/core.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/sp.core.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/ScriptResx.ashx"></script><script type="text/javascript" src="../../arquivosMain/cui.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/sp.ui.dialog.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/sp.runtime.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/sp.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/search.js.download"></script><script type="text/javascript" src="../../arquivosMain/inplview.debug.js.download"></script><script type="text/javascript" src="../../arquivosMain/sp.ribbon.debug.js.download"></script></head>

<body scroll="no" onload="javascript:_spBodyOnLoadWrapper();">

<form name="formPrincipal" method="post" action="main.php" onsubmit="javascript:return WebForm_OnSubmit();" id="formPrincipal">
<div>
<input type="hidden" name="MSOWebPartPage_PostbackSource" id="MSOWebPartPage_PostbackSource" value="">
<input type="hidden" name="MSOTlPn_SelectedWpId" id="MSOTlPn_SelectedWpId" value="">
<input type="hidden" name="MSOTlPn_View" id="MSOTlPn_View" value="0">
<input type="hidden" name="MSOTlPn_ShowSettings" id="MSOTlPn_ShowSettings" value="False">
<input type="hidden" name="MSOGallery_SelectedLibrary" id="MSOGallery_SelectedLibrary" value="">
<input type="hidden" name="MSOGallery_FilterString" id="MSOGallery_FilterString" value="">
<input type="hidden" name="MSOTlPn_Button" id="MSOTlPn_Button" value="none">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__REQUESTDIGEST" id="__REQUESTDIGEST" value="0x51C94F89AC5E5B4765585E82DEE0E547466560D6D5FB0B16BE553D8766B5CD2484AAC28250E1A6A769667671A898AEF8232877052277752139480C1A62B84FDC,13 Dec 2016 19:24:47 -0000">
<input type="hidden" name="MSOSPWebPartManager_DisplayModeName" id="MSOSPWebPartManager_DisplayModeName" value="Browse">
<input type="hidden" name="MSOSPWebPartManager_ExitingDesignMode" id="MSOSPWebPartManager_ExitingDesignMode" value="false">
<input type="hidden" name="MSOWebPartPage_Shared" id="MSOWebPartPage_Shared" value="">
<input type="hidden" name="MSOLayout_LayoutChanges" id="MSOLayout_LayoutChanges" value="">
<input type="hidden" name="MSOLayout_InDesignMode" id="MSOLayout_InDesignMode" value="">
<input type="hidden" name="_wpSelected" id="_wpSelected" value="">
<input type="hidden" name="_wzSelected" id="_wzSelected" value="">
<input type="hidden" name="MSOSPWebPartManager_OldDisplayModeName" id="MSOSPWebPartManager_OldDisplayModeName" value="Browse">
<input type="hidden" name="MSOSPWebPartManager_StartWebPartEditingName" id="MSOSPWebPartManager_StartWebPartEditingName" value="false">
<input type="hidden" name="MSOSPWebPartManager_EndWebPartEditing" id="MSOSPWebPartManager_EndWebPartEditing" value="false">
<input type="hidden" name="ctl00_PlaceHolderTabArea_tvFolders_ExpandState" id="ctl00_PlaceHolderTabArea_tvFolders_ExpandState" value="eecccccccccccccc">
<input type="hidden" name="ctl00_PlaceHolderTabArea_tvFolders_SelectedNode" id="ctl00_PlaceHolderTabArea_tvFolders_SelectedNode" value="">
<input type="hidden" name="ctl00_PlaceHolderTabArea_tvFolders_PopulateLog" id="ctl00_PlaceHolderTabArea_tvFolders_PopulateLog" value="1,2,3,4,">
<input type="hidden" name="_maintainWorkspaceScrollPosition" id="_maintainWorkspaceScrollPosition" value="0">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTY1NzkwMjcyNA8WBB4SRW50ZXJwcmlzZUNvbnRlbnRzMroMAAEAAAD/////AQAAAAAAAAAMAgAAAFJEYXRhWERPQy5Eb21haW4sIFZlcnNpb249MS4wLjAuMCwgQ3VsdHVyZT1uZXV0cmFsLCBQdWJsaWNLZXlUb2tlbj1iYjQ1OTg4Yjk2OGIwMzQzBAEAAACgAVN5c3RlbS5Db2xsZWN0aW9ucy5HZW5lcmljLkxpc3RgMVtbRGF0YVhET0MuRG9tYWluLk1vZGVsLkVudGVycHJpc2VDb250ZW50LCBEYXRhWERPQy5Eb21haW4sIFZlcnNpb249MS4wLjAuMCwgQ3VsdHVyZT1uZXV0cmFsLCBQdWJsaWNLZXlUb2tlbj1iYjQ1OTg4Yjk2OGIwMzQzXV0DAAAABl9pdGVtcwVfc2l6ZQhfdmVyc2lvbgQAAClEYXRhWERPQy5Eb21haW4uTW9kZWwuRW50ZXJwcmlzZUNvbnRlbnRbXQIAAAAICAkDAAAABAAAAAQAAAAHAwAAAAABAAAABAAAAAQnRGF0YVhET0MuRG9tYWluLk1vZGVsLkVudGVycHJpc2VDb250ZW50AgAAAAkEAAAACQUAAAAJBgAAAAkHAAAABQQAAAA6RGF0YVhET0MuRG9tYWluLk1vZGVsLlN0b3JhZ2VMb2NhdGlvbnMuUm9vdFN0b3JhZ2VMb2NhdGlvbgoAAAAOdG90YWxEb2N1bWVudHMYU3RvcmFnZUxvY2F0aW9uK3NwTGlzdElEJVN0b3JhZ2VMb2NhdGlvbitpc1Jvb3RTdG9yYWdlTG9jYXRpb24ZU3RvcmFnZUxvY2F0aW9uK2RvY3VtZW50cyBTdG9yYWdlTG9jYXRpb24rc3RvcmFnZUxvY2F0aW9ucxtTdG9yYWdlTG9jYXRpb24rcGVybWlzc2lvbnMWRW50ZXJwcmlzZUNvbnRlbnQrbmFtZRZFbnRlcnByaXNlQ29udGVudCt0eXBlHUVudGVycHJpc2VDb250ZW50K3Blcm1pc3Npb25zDkVudGl0eUJhc2Ura2V5AwMABAQEAQQEAm5TeXN0ZW0uTnVsbGFibGVgMVtbU3lzdGVtLkludDMyLCBtc2NvcmxpYiwgVmVyc2lvbj0yLjAuMC4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPWI3N2E1YzU2MTkzNGUwODldXQtTeXN0ZW0uR3VpZAEyRGF0YVhET0MuRG9tYWluLk1vZGVsLkRvY3VtZW50cy5Eb2N1bWVudENvbGxlY3Rpb24CAAAARkRhdGFYRE9DLkRvbWFpbi5Nb2RlbC5TdG9yYWdlTG9jYXRpb25zLkNvbW1vblN0b3JhZ2VMb2NhdGlvbkNvbGxlY3Rpb24CAAAAKkRhdGFYRE9DLkRvbWFpbi5Nb2RlbC5QZXJtaXNzaW9uQ29sbGVjdGlvbgIAAAArRGF0YVhET0MuRG9tYWluLk1vZGVsLkVudGVycHJpc2VDb250ZW50VHlwZQIAAAAqRGF0YVhET0MuRG9tYWluLk1vZGVsLlBlcm1pc3Npb25Db2xsZWN0aW9uAgAAAAIAAAAKBPj///8LU3lzdGVtLkd1aWQLAAAAAl9hAl9iAl9jAl9kAl9lAl9mAl9nAl9oAl9pAl9qAl9rAAAAAAAAAAAAAAAIBwcCAgICAgICAgYKuR5JMuxHpI8Q/SksCOYBCgoKBgkAAAAIX2dlbmVyYWwF9v///ytEYXRhWERPQy5Eb21haW4uTW9kZWwuRW50ZXJwcmlzZUNvbnRlbnRUeXBlAQAAAAd2YWx1ZV9fAAgCAAAAAQAAAAoICGwAAAABBQAAAAQAAAAKAfX////4////Dk6bBxvb3UGLWkCn9t4CUwEKCgoGDAAAAAxDb25kb23DrW5pb3MB8/////b///8BAAAACggIAQAAAAEGAAAABAAAAAoB8v////j////kV9QweECNQ5C8kiwc72aJAQoKCgYPAAAADUNvbnRhYmlsaWRhZGUB8P////b///8BAAAACggICAAAAAEHAAAABAAAAAoB7/////j///9BjBlZ1EQ0Q7z4kzFwWYMNAQoKCgYSAAAACUp1csOtZGljbwHt////9v///wEAAAAKCAgXAAAACx4GQ2xpZW50MucLAAEAAAD/////AQAAAAAAAAAMAgAAAFlEYXRhWERPQy5EYXRhQ29udHJhY3RzLCBWZXJzaW9uPTEuMC4wLjAsIEN1bHR1cmU9bmV1dHJhbCwgUHVibGljS2V5VG9rZW49ZDVjMDFiMDViNTI5Y2E3YQwDAAAAUkRhdGFYRE9DLkRvbWFpbiwgVmVyc2lvbj0xLjAuMC4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPWJiNDU5ODhiOTY4YjAzNDMFAQAAACVEYXRhWERPQy5EYXRhQ29udHJhY3RzLkNsaWVudENvbnRyYWN0BAAAABU8TmFtZT5rX19CYWNraW5nRmllbGQVPFNpdGU+a19fQmFja2luZ0ZpZWxkGzxDbGllbnRUeXBlPmtfX0JhY2tpbmdGaWVsZBBDb250cmFjdEJhc2Ura2V5AQQEAiNEYXRhWERPQy5EYXRhQ29udHJhY3RzLlNpdGVDb250cmFjdAIAAAAoRGF0YVhET0MuRG9tYWluLk1vZGVsLkNsaWVudHMuQ2xpZW50VHlwZQMAAAACAAAABgQAAAAERGVtbwkFAAAABfr///8oRGF0YVhET0MuRG9tYWluLk1vZGVsLkNsaWVudHMuQ2xpZW50VHlwZQEAAAAHdmFsdWVfXwAIAwAAAAEAAAAJBwAAAAUFAAAAI0RhdGFYRE9DLkRhdGFDb250cmFjdHMuU2l0ZUNvbnRyYWN0BAAAAAdtb2R1bGVzGTxTUFNpdGVJRD5rX19CYWNraW5nRmllbGQfPFVzZXJOYW1lUHJlZml4PmtfX0JhY2tpbmdGaWVsZBBDb250cmFjdEJhc2Ura2V5AwMBAqkBU3lzdGVtLkNvbGxlY3Rpb25zLkdlbmVyaWMuTGlzdGAxW1tEYXRhWERPQy5EYXRhQ29udHJhY3RzLlNpdGVNb2R1bGVDb250cmFjdCwgRGF0YVhET0MuRGF0YUNvbnRyYWN0cywgVmVyc2lvbj0xLjAuMC4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPWQ1YzAxYjA1YjUyOWNhN2FdXQtTeXN0ZW0uR3VpZAIAAAAJCAAAAAT3////C1N5c3RlbS5HdWlkCwAAAAJfYQJfYgJfYwJfZAJfZQJfZgJfZwJfaAJfaQJfagJfawAAAAAAAAAAAAAACAcHAgICAgICAgJjcZHhU7TSQKvDUGzne8Q1BgoAAAADZGVtCQsAAAABBwAAAPf///+sFiBdKGEaTZYlzq6TEbLQBAgAAACpAVN5c3RlbS5Db2xsZWN0aW9ucy5HZW5lcmljLkxpc3RgMVtbRGF0YVhET0MuRGF0YUNvbnRyYWN0cy5TaXRlTW9kdWxlQ29udHJhY3QsIERhdGFYRE9DLkRhdGFDb250cmFjdHMsIFZlcnNpb249MS4wLjAuMCwgQ3VsdHVyZT1uZXV0cmFsLCBQdWJsaWNLZXlUb2tlbj1kNWMwMWIwNWI1MjljYTdhXV0DAAAABl9pdGVtcwVfc2l6ZQhfdmVyc2lvbgQAACtEYXRhWERPQy5EYXRhQ29udHJhY3RzLlNpdGVNb2R1bGVDb250cmFjdFtdAgAAAAgICQwAAAACAAAAAgAAAAELAAAA9////wHiLCXgI+JHigsGtxTzcrsHDAAAAAABAAAABAAAAAQpRGF0YVhET0MuRGF0YUNvbnRyYWN0cy5TaXRlTW9kdWxlQ29udHJhY3QCAAAACQ0AAAAJDgAAAA0CBQ0AAAApRGF0YVhET0MuRGF0YUNvbnRyYWN0cy5TaXRlTW9kdWxlQ29udHJhY3QCAAAAGjxNb2R1bGVLZXk+a19fQmFja2luZ0ZpZWxkEENvbnRyYWN0QmFzZStrZXkCAgIAAAAKCQ8AAAABDgAAAA0AAAAKCRAAAAABDwAAAPf/////7WtVZ7ulR7hyXGrd0+8aARAAAAD3////ldTN2G6xV0aH8a2QYKlOfQsWAmYPZBYCAgEPZBYCAgMPZBYKAgkPZBYCAgEPPCsADQEMFCsABAULMDowLDA6MSwwOjIUKwACFgoeBFRleHQFClJlbGF0w7NyaW8eBVZhbHVlZR4ISW1hZ2VVcmwFLy9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS9yZXBvcnQtMjR4MjQucG5nHgtOYXZpZ2F0ZVVybAUyL3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2Mvc2V0dGluZ3MvcmVwb3J0LmFzcHgeB1Rvb2xUaXAFClJlbGF0w7NyaW9kFCsAAhYKHwIFF0NvbmZpZ3VyYcOnw7VlcyBkbyBTaXRlHwNlHwQFMS9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS9zZXR0aW5ncy0yNHgyNC5wbmcfBgUXQ29uZmlndXJhw6fDtWVzIGRvIFNpdGUeClNlbGVjdGFibGVnFCsABwUXMDowLDA6MSwwOjIsMDozLDA6NCwwOjUUKwACFggfAgUJVXN1w6FyaW9zHwNlHwQFLi9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS91c2Vycy0yNHgyNC5wbmcfBQUxL3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2Mvc2V0dGluZ3MvdXNlcnMuYXNweGQUKwACFggfAgUQTG9jYWlzIGRlIEd1YXJkYR8DZR8EBTUvX2xheW91dHMvaW1hZ2VzL2RhdGF4ZG9jL3NpdGUvZmlsZS1jYWJpbmV0LTI0eDI0LnBuZx8FBTsvc2l0ZXMvZGVtby9fbGF5b3V0cy9kYXRheGRvYy9vbGQvc2V0dGluZ3MvbWFuYWdlZmlsZXMuYXNweGQUKwACFggfAgULUGVybWlzc8O1ZXMfA2UfBAUvL19sYXlvdXRzL2ltYWdlcy9kYXRheGRvYy9zaXRlL2FjY2Vzcy0yNHgyNC5wbmcfBQU3L3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2Mvc2V0dGluZ3MvcGVybWlzc2lvbnMuYXNweGQUKwACFggfAgURVGlwb3MgRG9jdW1lbnRhaXMfA2UfBAU1L19sYXlvdXRzL2ltYWdlcy9kYXRheGRvYy9zaXRlL2NvbnRlbnQtdHlwZS0yNHgyNC5wbmcfBQVGL3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2Mvc2V0dGluZ3MvY29udGVudC10eXBlcy1hbmQtaW5kZXhlcnMuYXNweGQUKwACFggfAgUFR2VyYWwfA2UfBAU7L19sYXlvdXRzL2ltYWdlcy9kYXRheGRvYy9nZW5lcmFsL2dlbmVyYWwtc2V0dGluZ3MtaWNvbi5wbmcfBQU7L3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2MvZ2VuZXJhbC9nZW5lcmFsLXNldHRpbmdzLmFzcHhkFCsAAhYIHwIFF0NvbmZpZ3VyYcOnw7VlcyBkbyBTaXRlHwNlHwQFPC9fbGF5b3V0cy9pbWFnZXMvRGF0YVhET0MvVXNlckNvbnRyb2xzL2NvbmZpZ3VyYWNhby1zaXRlLnBuZx8FBSIvc2l0ZXMvZGVtby9fbGF5b3V0cy9zZXR0aW5ncy5hc3B4ZBQrAAIWCB8CBRNPbMOhLCBBZG1pbmlzdHJhZG9yHwNlHwQFLS9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS91c2VyLTI0eDI0LnBuZx8HZxQrAAQFCzA6MCwwOjEsMDoyFCsAAhYIHwIFIk1ldXMgw5psdGltb3MgRG9jdW1lbnRvcyBJbmRleGFkb3MfA2UfBAU6L19sYXlvdXRzL2ltYWdlcy9kYXRheGRvYy9zaXRlL2xhc3QtaW5kZXhlZC1kb2NzLTI0eDI0LnBuZx8FBT4vc2l0ZXMvZGVtby9fbGF5b3V0cy9kYXRheGRvYy9vbGQvbXkvbGFzdGluZGV4ZWRkb2N1bWVudHMuYXNweGQUKwACFggfAgUTTWV1cyBEYWRvcyBQZXNzb2Fpcx8DZR8EBTYvX2xheW91dHMvaW1hZ2VzL2RhdGF4ZG9jL3NpdGUvcGVyc29uYWwtaW5mby0yNHgyNC5wbmcfBQUzL3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2MvbXkvcGVyc29uYWwtaW5mby5hc3B4ZBQrAAIWCB8CBQRTYWlyHwNlHwQFMS9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS9zaWduLW91dC0yNHgyNC5wbmcfBQUqL3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2Mvc2lnbm91dC5hc3B4ZGQCCw9kFgICAw9kFgJmD2QWAgIDD2QWAgIBDw8WAh8CBSM8c3BhbiBjbGFzcz0iYm9sZCI+UHJpbmNpcGFsPC9zcGFuPmRkAg0PZBYEAgEPZBYCAgEPZBYCZg9kFgICAQ88KwAJAgAPFggeC0V4cGFuZERlcHRoAgEeDU5ldmVyRXhwYW5kZWRkHgxTZWxlY3RlZE5vZGVkHglMYXN0SW5kZXgCBWQIFCsAAgUDMDowFCsAAhYIHwIFCVByaW5jaXBhbB8DZR8FBR8vc2l0ZXMvZGVtby9zaXRlcGFnZXMvbWFpbi5hc3B4HghFeHBhbmRlZGcUKwAFBQ8wOjAsMDoxLDA6MiwwOjMUKwACFgofAgUCV1MfAwUFMTA4LDEfBAUuL19sYXlvdXRzL2ltYWdlcy9kYXRheGRvYy9zaXRlL2ZpbGVjYWJpbmV0LnBuZx4QUG9wdWxhdGVPbkRlbWFuZGcfBQVIL3NpdGVzL2RlbW8vX2xheW91dHMvZGF0YXhkb2Mvb2xkL21vZHVsZXMvd3MvZ2VuZXJhbC5hc3B4P3BpZD0xMDgmdHlwZT0xZBQrAAIWCh8CBQxDb25kb23DrW5pb3MfAwUDMSwxHwQFLi9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS9maWxlY2FiaW5ldC5wbmcfDWcfBQUsL3NpdGVzL2RlbW8vc2l0ZXBhZ2VzL21haW4uYXNweD9waWQ9MSZ0eXBlPTFkFCsAAhYKHwIFDUNvbnRhYmlsaWRhZGUfAwUDOCwxHwQFLi9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS9maWxlY2FiaW5ldC5wbmcfDWcfBQUsL3NpdGVzL2RlbW8vc2l0ZXBhZ2VzL21haW4uYXNweD9waWQ9OCZ0eXBlPTFkFCsAAhYKHwIFCUp1csOtZGljbx8DBQQyMywxHwQFLi9fbGF5b3V0cy9pbWFnZXMvZGF0YXhkb2Mvc2l0ZS9maWxlY2FiaW5ldC5wbmcfDWcfBQUtL3NpdGVzL2RlbW8vc2l0ZXBhZ2VzL21haW4uYXNweD9waWQ9MjMmdHlwZT0xZGQCAw9kFgICAQ9kFgJmD2QWAgIDDxAPFgYeDURhdGFUZXh0RmllbGQFBE5hbWUeDkRhdGFWYWx1ZUZpZWxkBQhVbmlxdWVJZB4LXyFEYXRhQm91bmRnZBAVAgxjbGFzc2VzMS5wZGYNY2FybmF2YWwueGxzeBUCJGJhZjAzNTUyLTk5OTctNDYzZC05YTgxLTAyMDdlYmQ1ZDgxNSRkNDIwYzAyNS03YjA2LTQyNzUtOTE4NC1kZGZjYmE2OWMyN2MUKwMCZ2dkZAIPD2QWBGYPZBYEAgEPZBYCZg9kFgQCAg9kFhQCAQ8WAh4HVmlzaWJsZWhkAgMPFggeE0NsaWVudE9uQ2xpY2tTY3JpcHQFfGphdmFTY3JpcHQ6Q29yZUludm9rZSgnVGFrZU9mZmxpbmVUb0NsaWVudFJlYWwnLDEsIDEsICdodHRwczpcdTAwMmZcdTAwMmZkdGMtc2VydmVyMDFcdTAwMmZzaXRlc1x1MDAyZmRlbW8nLCAtMSwgLTEsICcnLCAnJykeGENsaWVudE9uQ2xpY2tOYXZpZ2F0ZVVybGQeKENsaWVudE9uQ2xpY2tTY3JpcHRDb250YWluaW5nUHJlZml4ZWRVcmxkHgxIaWRkZW5TY3JpcHQFIVRha2VPZmZsaW5lRGlzYWJsZWQoMSwgMSwgLTEsIC0xKWQCBQ8WAh8RaGQCBw8WAh8RaGQCCQ8WAh8RaGQCCw8WAh8RaGQCDw8WAh8RaGQCEQ8WAh8RaGQCEw8WAh8RaGQCFQ8WAh8RaGQCAw8PFgoeCUFjY2Vzc0tleQUBLx4PQXJyb3dJbWFnZVdpZHRoAgUeEEFycm93SW1hZ2VIZWlnaHQCAx4RQXJyb3dJbWFnZU9mZnNldFhmHhFBcnJvd0ltYWdlT2Zmc2V0WQLrA2RkAgMPZBYCAgEPZBYCAgMPZBYCAgEPPCsABQEADxYCHg9TaXRlTWFwUHJvdmlkZXIFEVNQU2l0ZU1hcFByb3ZpZGVyZGQCAQ9kFgYCBQ9kFgICAQ8QFgIfEWhkFCsBAGQCBw9kFgJmD2QWAmYPFCsAA2RkZGQCCQ8PFgIfEWhkZAIVD2QWAgIED2QWAgIBD2QWAmYPZBYCAgEPD2QWBh4FY2xhc3MFIm1zLXNidGFibGUgbXMtc2J0YWJsZS1leCBzNC1zZWFyY2geC2NlbGxwYWRkaW5nBQEwHgtjZWxsc3BhY2luZwUBMGQYAgUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgsFHmN0bDAwJFBsYWNlSG9sZGVyTWFpbiRkb2NMaXN0MQUuY3RsMDAkUGxhY2VIb2xkZXJNYWluJG5ld0p1cmlkaWNhbFByb2Nlc3NGb3JtMQUeY3RsMDAkUGxhY2VIb2xkZXJNYWluJGRvY0xpc3Q4BS5jdGwwMCRQbGFjZUhvbGRlck1haW4kbmV3SnVyaWRpY2FsUHJvY2Vzc0Zvcm04BR9jdGwwMCRQbGFjZUhvbGRlck1haW4kZG9jTGlzdDIzBS9jdGwwMCRQbGFjZUhvbGRlck1haW4kbmV3SnVyaWRpY2FsUHJvY2Vzc0Zvcm0yMwUiY3RsMDAkUGxhY2VIb2xkZXJUYWJBcmVhJHR2Rm9sZGVycwUtY3RsMDAkUGxhY2VIb2xkZXJUYWJBcmVhJGNiU2VsZWN0QWxsRG9jdW1lbnRzBSdjdGwwMCRQbGFjZUhvbGRlclRhYkFyZWEkY2JsRG9jdW1lbnRzJDAFJ2N0bDAwJFBsYWNlSG9sZGVyVGFiQXJlYSRjYmxEb2N1bWVudHMkMQUnY3RsMDAkUGxhY2VIb2xkZXJUYWJBcmVhJGNibERvY3VtZW50cyQxBRljdGwwMCRUb3BOYXZpZ2F0aW9uTWVudVY0Dw9kBQRIb21lZGOlOLcWrEMwwDV4qQE+aBwW5FDm">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['formPrincipal'];
if (!theForm) {
    theForm = document.formPrincipal;
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


<script src="../../arquivosMain/WebResource.axd" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
var MSOWebPartPageFormName = 'formPrincipal';
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
<script src="../../arquivosMain/ScriptResource(2).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[

    function TreeView_PopulateNodeDoCallBack(context,param) {
        WebForm_DoCallback(context.data.treeViewID,param,TreeView_ProcessNodeData,context,TreeView_ProcessNodeData,false);
    }
var ctl00_PlaceHolderTabArea_tvFolders_Data = null;//]]>
</script>

<script src="../../arquivosMain/blank.debug.js.download" type="text/javascript"></script>
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
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWJAKvzMbGCQL/6516AtP5wYoBAvmlu4ACApTtuYYEAoLT3pcHAquW4fUDAqG6rccIAoLT+pcHAquWhfYDAsOxtIoMAojalS4CgcKS1gwC2rXVkwMCy6Sc0AMCqv72uwgC6cuCnwoC9sSAwAsCzM3MDgKx5K75BQLH+rePDgLg3pu4CwKpn5bCCwLNrvW5AwK9+p7tAgLfiqPRBQL5nK24CwLwpqSiCQKWyO2tCALiwaLLCQLh9dXPCgKalP/eBAK7lIbMBQLL76b2AwLcq9H0DALbpPOOBdiMkNkMxHovn28RZSbiVH5yNSQ8">
</div>

    <!-- handles SharePoint scripts -->
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', document.getElementById('formPrincipal'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl00$PlaceHolderMain$upMain','tctl00$PlaceHolderTabArea$upFolders','tctl00$PlaceHolderTabArea$upDocuments','fctl00$WebPartAdderUpdatePanel','tctl00$panelZone'], ['ctl00$PlaceHolderTabArea$lbtnIndexDocument','ctl00$PlaceHolderTabArea$lbtnDeleteDocument'], ['ctl00$WebPartAdder'], 90);
//]]>
</script>


    <!-- controls the web parts and zones -->
    

    <div id="wrapper">

        <div id="head-container">
            <header class="group">
                <div id="logo">
                    <a href="main.php">
                        <img src="../../arquivosMain/logo.png" alt="Demo" style="border-width:0px;">
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
			<li class="static"><a class="static menu-item" title="Relatório" href="/sites/demo"./../arquivos/js/settings/report.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/report-24x24.png" alt=""><span class="menu-item-text">Relatório</span></span></a></li><li class="static dynamic-children"><a class="static dynamic-children menu-item" title="Configurações do Site"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/settings-24x24.png" alt=""><span class="menu-item-text">Configurações do Site</span></span></a><ul class="dynamic">
				<li class="dynamic"><a class="dynamic menu-item" href="../usuario/usuarios.php"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/users-24x24.png" alt=""><span class="menu-item-text">Usuários</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="/sites/demo"./../arquivos/js/old/settings/managefiles.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/file-cabinet-24x24.png" alt=""><span class="menu-item-text">Locais de Guarda</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="/sites/demo"./../arquivos/js/settings/permissions.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/access-24x24.png" alt=""><span class="menu-item-text">Permissões</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="/sites/demo"./../arquivos/js/settings/content-types-and-indexers.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/content-type-24x24.png" alt=""><span class="menu-item-text">Tipos Documentais</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="/sites/demo"./../arquivos/js/general/general-settings.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/general-settings-icon.png" alt=""><span class="menu-item-text">Geral</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="/sites/demo/_layouts/settings.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/configuracao-site.png" alt=""><span class="menu-item-text">Configurações do Site</span></span></a></li>
			</ul></li><li class="static dynamic-children"><a class="static dynamic-children menu-item"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/user-24x24.png" alt=""><span class="menu-item-text">Olá <?=$_SESSION['user'];?></span></span></a><ul class="dynamic" style="">
				<li class="dynamic"><a class="dynamic menu-item" href="/sites/demo"./../arquivos/js/old/my/lastindexeddocuments.aspx"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/last-indexed-docs-24x24.png" alt=""><span class="menu-item-text">Meus Últimos Documentos Indexados</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="../usuario/dadospessoais.php"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/personal-info-24x24.png" alt=""><span class="menu-item-text">Meus Dados Pessoais</span></span></a></li><li class="dynamic"><a class="dynamic menu-item" href="../acesso/logout.php"><span class="additional-background"><img class="menu-item-image" src="../../arquivosMain/sign-out-24x24.png" alt=""><span class="menu-item-text">Sair</span></span></a></li>
			</ul></li>
		</ul>
	</div>
</div>
</div>


                    </div>
                </div>
            </header>
        </div>