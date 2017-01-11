<?php session_start(); ?>

<!DOCTYPE html>
<!-- saved from url=(0051)/sites/demo/sitepages/main.php -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" dir="ltr" style="overflow-x: hidden;">


 <?php
        require("../header.php");
        require("../funcaoBD/acesso.class.php");
        require("../funcaoBD/repositorio.class.php");
    ?>





        <div id="main-content-container">
            <div id="main-content">
                
    <div class="wrapper">
        <div id="ctl00_PlaceHolderMain_upMain">
	              
                    <div id="nav">
                        <span id="ctl00_PlaceHolderMain_lblTrail"><span class="bold">Principal</span></span>

                        <div id="view-option-default">
                            <a href="/sites/demo/sitepages/main.php#" id="list-default" onclick="setActiveStyleSheet(&#39;default-list&#39;); return false;"><img src="../../arquivos/img/main/ico-properties-blue.png"/></a>
                            <a href="/sites/demo/sitepages/main.php#" id="grid-default" onclick="setActiveStyleSheet(&#39;default-grid&#39;); return false; "><img src="../../arquivos/img/main/preview-icon-16x16.png"/>  </a>
                        </div>
                    </div>
                

                <div id="enterprise-content" class="mCustomScrollbar _mCS_1 mCS_no_scrollbar" data-mcs-theme="dark"><div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">

                    
                        <div id="title-list">
                            <div class="title">&nbsp;</div>
                            <div class="title">Nome</div>
                            <div class="title">Data de Modificação</div>
                            <div class="title">Total de Documentos</div>
                            <div class="title">&nbsp;</div>
                        </div>
                    
                    <div id="ctl00_PlaceHolderMain_section0" class="section group"><div id="ctl00_PlaceHolderMain_container108" class="col span_1_of_8">
                        <div class="large-icon"><a id="ctl00_PlaceHolderMain_link108" href="javascript:__doPostBack(&#39;ctl00$PlaceHolderMain$link108&#39;,&#39;&#39;)"><img id="ctl00_PlaceHolderMain_image108" class="icon mCS_img_loaded" src="../../arquivosMain/ws-128x128.png" style="border-width:0px;"></a><ul id="ctl00_PlaceHolderMain_commands108" class="icon-commands"></ul></div><span id="ctl00_PlaceHolderMain_name108" class="icon-name">WS</span></div>
                        
                        <?php  $repositorio = consultaRepositorios($_SESSION['tp_acesso']);
                        
                             $qtdLinha = $repositorio['qtdReg'];  

                                                 
                             if($qtdLinha !=0)
                             {
                                 $i = 0;
                             
                          do{
                         ?>
                         
                        
                         
                        <div id=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> class="col span_1_of_8">
                            <div class="large-icon">
                                <a id="ctl00_PlaceHolderMain_link1" href="javascript:__doPostBack(&#39;ctl00$PlaceHolderMain$link1&#39;,&#39;&#39;)">
                                <img id=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> class="icon mCS_img_loaded" src="../../arquivosMain/root-128x118.png" style="border-width:0px;"></a>
                                <ul id=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> class="icon-commands">
                                <li>                         
                        <input type="image" name=<?='"'.$repositorio[$i]['id_repositorio'].'"';?> id=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> title="Abrir Lista de Documentos" class="doc-icon" src="../../arquivosMain/Ico-documents.png" style="border-width:0px;">
                            </li>
                            <li>
                            <input type="image" name=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> id=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> title="Nova Ficha" class="new-jur-icon" src="../../arquivosMain/card-on-2.png" style="border-width:0px;"></input> 
                            </li>
                            </ul>
                            </div>
                            <span id=<?='"'.$repositorio[$i]['nm_repositorio'].'"';?> class="icon-name"><?=$repositorio[$i]['nm_repositorio'];?></span></div>
                          
                             <?php
                             $i++;

                          }while($i<$qtdLinha);
                              } ?>
     

                    <div id="document-properties" class="modal-wrapper" style="display: none;">
                        <img class="close mCS_img_loaded" src="../../arquivosMain/close.png">
                        <h4>Propriedades</h4>
                        <div id="ctl00_PlaceHolderMain_pnlDocumentProperties">

	</div>
                    </div>
                </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            
</div>
    </div>


            </div>              

            <span id="version">Versão 2.0.967.4277</span>
        </div>

        <div id="footer-container">
            <footer></footer>
        </div>

        

    
        <div class="slide-out-div01 open" style="line-height: 1; position: absolute; height: 394px; top: 100px; left: -3px;">
            <a class="handle01" href="http://link-for-non-js-users.html/"> <img src="../../arquivosMain/structure.png" style="no-repeat; width: 40px; height: 130px; display: block; text-indent: -99999px; outline: none; position: absolute; top: 0px;">Estrutura de Pastas</a>
            <h3>Estrutura</h3>
            <div class="tab-content">
                <div id="ctl00_PlaceHolderTabArea_upFolders">
	
                        <a href="/sites/demo/sitepages/main.php#ctl00_PlaceHolderTabArea_tvFolders_SkipLink"><img alt="Skip Navigation Links." src="../../arquivosMain/WebResource(1).axd" width="0" height="0" style="border-width:0px;"></a><div id="ctl00_PlaceHolderTabArea_tvFolders" class="tree">
		<table cellpadding="0" cellspacing="0" style="border-width:0;">
			<tbody><tr class="zebraDois">
				<td><a id="ctl00_PlaceHolderTabArea_tvFoldersn0" href="javascript:TreeView_ToggleNode(ctl00_PlaceHolderTabArea_tvFolders_Data,0,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn0&#39;),&#39; &#39;,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn0Nodes&#39;))"><img src="../../arquivosMain/WebResource(2).axd" alt="Collapse Principal" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a class="ctl00_PlaceHolderTabArea_tvFolders_0" href="/sites/demo/sitepages/main.php" id="ctl00_PlaceHolderTabArea_tvFolderst0">Principal</a></td>
			</tr>
		</tbody></table><div id="ctl00_PlaceHolderTabArea_tvFoldersn0Nodes" style="display:block;">
			<table cellpadding="0" cellspacing="0" style="border-width:0;">
				<tbody><tr class="zebraUm">
					<td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn1" href="javascript:TreeView_ToggleNode(ctl00_PlaceHolderTabArea_tvFolders_Data,1,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn1&#39;),&#39; &#39;,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn1Nodes&#39;))"><img src="../../arquivosMain/WebResource(2).axd" alt="Collapse " style="border-width:0;"></a></td><td><a href="/sites/demo"./../arquivos/js/old/modules/ws/general.aspx?pid=108&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst1i" tabindex="-1"><img src="../../arquivosMain/filecabinet.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a class="ctl00_PlaceHolderTabArea_tvFolders_0" href="/sites/demo"./../arquivos/js/old/modules/ws/general.aspx?pid=108&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst1">WS</a></td>
				</tr>
			</tbody></table><div id="ctl00_PlaceHolderTabArea_tvFoldersn1Nodes" style="display: block;">
	<table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn5" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,5,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn5&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst5&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst5i&#39;),&#39; &#39;,&#39;Desenvolvimento&#39;,&#39;\\108,1\\170,6,108&#39;,&#39;f&#39;,&#39;&#39;,&#39;tff&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Desenvolvimento" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=170&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst5i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=170&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst5" style="text-decoration:none;">Desenvolvimento</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn6" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,6,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn6&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst6&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst6i&#39;),&#39; &#39;,&#39;Financeiro&#39;,&#39;\\108,1\\121,6,108&#39;,&#39;f&#39;,&#39;&#39;,&#39;tff&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Financeiro" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=121&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst6i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=121&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst6" style="text-decoration:none;">Financeiro</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn7" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,7,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn7&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst7&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst7i&#39;),&#39; &#39;,&#39;RH&#39;,&#39;\\108,1\\110,6,108&#39;,&#39;f&#39;,&#39;&#39;,&#39;tff&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand RH" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=110&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst7i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=110&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst7" style="text-decoration:none;">RH</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn8" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,8,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn8&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst8&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst8i&#39;),&#39; &#39;,&#39;TI&#39;,&#39;\\108,1\\109,6,108&#39;,&#39;f&#39;,&#39;&#39;,&#39;tft&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand TI" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=109&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst8i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=109&amp;type=6&amp;fid=108" id="ctl00_PlaceHolderTabArea_tvFolderst8" style="text-decoration:none;">TI</a></td>
		</tr>
	</tbody></table>
</div><table cellpadding="0" cellspacing="0" style="border-width:0;">
				<tbody><tr class="zebraDois">
					<td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn2" href="javascript:TreeView_ToggleNode(ctl00_PlaceHolderTabArea_tvFolders_Data,2,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn2&#39;),&#39; &#39;,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn2Nodes&#39;))"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand " style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=1&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst2i" tabindex="-1"><img src="../../arquivosMain/filecabinet.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a class="ctl00_PlaceHolderTabArea_tvFolders_0" href="/sites/demo/sitepages/main.php?pid=1&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst2">Condomínios</a></td>
				</tr>
			</tbody></table><div id="ctl00_PlaceHolderTabArea_tvFoldersn2Nodes" style="display: none;">
	<table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn9" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,9,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn9&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst9&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst9i&#39;),&#39; &#39;,&#39;Condomínio Y&#39;,&#39;\\1,1\\178,6,1&#39;,&#39;f&#39;,&#39;&#39;,&#39;tff&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Condomínio Y" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=178&amp;type=6&amp;fid=1" id="ctl00_PlaceHolderTabArea_tvFolderst9i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=178&amp;type=6&amp;fid=1" id="ctl00_PlaceHolderTabArea_tvFolderst9" style="text-decoration:none;">Condomínio Y</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn10" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,10,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn10&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst10&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst10i&#39;),&#39; &#39;,&#39;Pasta Teste 1&#39;,&#39;\\1,1\\102,6,1&#39;,&#39;f&#39;,&#39;&#39;,&#39;tft&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Pasta Teste 1" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=102&amp;type=6&amp;fid=1" id="ctl00_PlaceHolderTabArea_tvFolderst10i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=102&amp;type=6&amp;fid=1" id="ctl00_PlaceHolderTabArea_tvFolderst10" style="text-decoration:none;">Pasta Teste 1</a></td>
		</tr>
	</tbody></table>
</div><table cellpadding="0" cellspacing="0" style="border-width:0;">
				<tbody><tr class="zebraUm">
					<td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn3" href="javascript:TreeView_ToggleNode(ctl00_PlaceHolderTabArea_tvFolders_Data,3,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn3&#39;),&#39; &#39;,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn3Nodes&#39;))"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand " style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=8&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst3i" tabindex="-1"><img src="../../arquivosMain/filecabinet.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a class="ctl00_PlaceHolderTabArea_tvFolders_0" href="/sites/demo/sitepages/main.php?pid=8&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst3">Contabilidade</a></td>
				</tr>
			</tbody></table><div id="ctl00_PlaceHolderTabArea_tvFoldersn3Nodes" style="display: none;">
	<table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn11" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,11,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn11&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst11&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst11i&#39;),&#39; &#39;,&#39;Pasta T1&#39;,&#39;\\8,1\\354,6,8&#39;,&#39;f&#39;,&#39;&#39;,&#39;tff&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Pasta T1" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=354&amp;type=6&amp;fid=8" id="ctl00_PlaceHolderTabArea_tvFolderst11i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=354&amp;type=6&amp;fid=8" id="ctl00_PlaceHolderTabArea_tvFolderst11" style="text-decoration:none;">Pasta T1</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn12" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,12,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn12&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst12&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst12i&#39;),&#39; &#39;,&#39;Pasta1&#39;,&#39;\\8,1\\9,6,8&#39;,&#39;f&#39;,&#39;&#39;,&#39;tff&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Pasta1" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=9&amp;type=6&amp;fid=8" id="ctl00_PlaceHolderTabArea_tvFolderst12i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=9&amp;type=6&amp;fid=8" id="ctl00_PlaceHolderTabArea_tvFolderst12" style="text-decoration:none;">Pasta1</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn13" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,13,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn13&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst13&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst13i&#39;),&#39; &#39;,&#39;Pasta3&#39;,&#39;\\8,1\\11,6,8&#39;,&#39;f&#39;,&#39;&#39;,&#39;tft&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Pasta3" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=11&amp;type=6&amp;fid=8" id="ctl00_PlaceHolderTabArea_tvFolderst13i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=11&amp;type=6&amp;fid=8" id="ctl00_PlaceHolderTabArea_tvFolderst13" style="text-decoration:none;">Pasta3</a></td>
		</tr>
	</tbody></table>
</div><table cellpadding="0" cellspacing="0" style="border-width:0;">
				<tbody><tr class="zebraDois">
					<td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn4" href="javascript:TreeView_ToggleNode(ctl00_PlaceHolderTabArea_tvFolders_Data,4,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn4&#39;),&#39; &#39;,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn4Nodes&#39;))"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand " style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=23&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst4i" tabindex="-1"><img src="../../arquivosMain/filecabinet.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a class="ctl00_PlaceHolderTabArea_tvFolders_0" href="/sites/demo/sitepages/main.php?pid=23&amp;type=1" id="ctl00_PlaceHolderTabArea_tvFolderst4">Jurídico</a></td>
				</tr>
			</tbody></table><div id="ctl00_PlaceHolderTabArea_tvFoldersn4Nodes" style="display: none;">
	<table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn14" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,14,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn14&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst14&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst14i&#39;),&#39; &#39;,&#39;Contratos&#39;,&#39;\\23,1\\25,6,23&#39;,&#39;f&#39;,&#39;&#39;,&#39;ttf&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Contratos" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=25&amp;type=6&amp;fid=23" id="ctl00_PlaceHolderTabArea_tvFolderst14i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=25&amp;type=6&amp;fid=23" id="ctl00_PlaceHolderTabArea_tvFolderst14" style="text-decoration:none;">Contratos</a></td>
		</tr>
	</tbody></table><table cellpadding="0" cellspacing="0" style="border-width:0;">
		<tbody><tr>
			<td><div style="width:20px;height:1px"></div></td><td><div style="width:20px;height:1px"></div></td><td><a id="ctl00_PlaceHolderTabArea_tvFoldersn15" href="javascript:TreeView_PopulateNode(ctl00_PlaceHolderTabArea_tvFolders_Data,15,document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFoldersn15&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst15&#39;),document.getElementById(&#39;ctl00_PlaceHolderTabArea_tvFolderst15i&#39;),&#39; &#39;,&#39;Processos&#39;,&#39;\\23,1\\24,6,23&#39;,&#39;f&#39;,&#39;&#39;,&#39;ttt&#39;)"><img src="../../arquivosMain/WebResource(3).axd" alt="Expand Processos" style="border-width:0;"></a></td><td><a href="/sites/demo/sitepages/main.php?pid=24&amp;type=6&amp;fid=23" id="ctl00_PlaceHolderTabArea_tvFolderst15i" tabindex="-1"><img src="../../arquivosMain/folder.png" alt="" style="border-width:0;"></a></td><td style="white-space:nowrap;"><a href="/sites/demo/sitepages/main.php?pid=24&amp;type=6&amp;fid=23" id="ctl00_PlaceHolderTabArea_tvFolderst15" style="text-decoration:none;">Processos</a></td>
		</tr>
	</tbody></table>
</div>
		</div>
	</div><a id="ctl00_PlaceHolderTabArea_tvFolders_SkipLink"></a>
                    
</div>
            </div>
        </div>
    

    
        <div class="slide-out-div03" style="line-height: 1; position: absolute; height: 394px; top: 155px; right: -444px;">
            <a class="handle03" href="http://link-for-non-js-users.html/"><img src="../../arquivosMain/workarea.png" style="no-repeat; width: 40px; height: 130px; display: block; text-indent: -99999px; outline: none; position: absolute; top: 0px;">Meus Documentos</a>
            <h3>Documentos</h3>
            <div class="tab-content">
                <div id="ctl00_PlaceHolderTabArea_upDocuments">
	
                        <div class="check-all">
                            <input id="ctl00_PlaceHolderTabArea_cbSelectAllDocuments" type="checkbox" name="ctl00$PlaceHolderTabArea$cbSelectAllDocuments"><label for="ctl00_PlaceHolderTabArea_cbSelectAllDocuments">Selecionar Todos</label>
                        </div>
                        <table id="ctl00_PlaceHolderTabArea_cblDocuments" class="list" border="0">
		<tbody><tr class="zebraUm">
			<td><input id="ctl00_PlaceHolderTabArea_cblDocuments_0" type="checkbox" name="ctl00$PlaceHolderTabArea$cblDocuments$0"><label for="ctl00_PlaceHolderTabArea_cblDocuments_0">classes1.pdf</label></td>
		</tr><tr class="zebraDois">
			<td><input id="ctl00_PlaceHolderTabArea_cblDocuments_1" type="checkbox" name="ctl00$PlaceHolderTabArea$cblDocuments$1"><label for="ctl00_PlaceHolderTabArea_cblDocuments_1">carnaval.xlsx</label></td>
		</tr>
	</tbody></table>
                    
</div>
            </div>

            <ul id="tab-commands">
                <li class="icon">
                    <a id="showUploadForm">
                        <img src="../../arquivosMain/IconFileUpload24x24.png" alt="Subir Documento">
                    </a>
                </li>
                <li class="icon">
                    <a id="ctl00_PlaceHolderTabArea_lbtnIndexDocument" href="javascript:__doPostBack(&#39;ctl00$PlaceHolderTabArea$lbtnIndexDocument&#39;,&#39;&#39;)" disabled="disabled">
                        <img src="../../arquivosMain/bt-salvararqdocoff.png" alt="Indexar Documento">
                    </a>
                </li>
                <li class="icon">
                    <a onclick="return ConfirmMessage(&#39;Deseja realmente excluir este documento?&#39;);" id="ctl00_PlaceHolderTabArea_lbtnDeleteDocument" href="javascript:__doPostBack(&#39;ctl00$PlaceHolderTabArea$lbtnDeleteDocument&#39;,&#39;&#39;)" disabled="disabled">
                        
                        <img src="../../arquivosMain/delete-doc-off-4-24x24.png" alt="Excluir Documento">
                    </a>
                </li>
            </ul>

            <div id="uploadForm" style="display: none;">
                <img id="closeUploadForm" src="../../arquivosMain/close(1).png" alt="Fechar">

                <span class="btn fileinput-button" style="display: none;">
                    <span>Adicionar</span>
                    <input id="fileuploadtest" type="file" name="file" data-url=""./../arquivos/js/Upload.ashx" multiple="multiple">
                </span>

                <!-- The file upload form used as target for the file upload widget -->
                <div id="fileupload">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript>
                        &lt;input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"&gt;
                    </noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                        <div class="buttonbar">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                <span>Adicionar</span>
                                <input type="file" name="file" multiple="multiple">
                            </span>
                            <button type="submit" class="btn btn-primary start" disabled="disabled">
                                <span>Enviar</span>
                            </button>
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress bar -->
                        <div class="fileupload-progress fade">
                            <div id="progress" class="progress">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>
                        </div>

                    </div>
                    <!-- The container for the uploaded files -->
                    <div id="fileUploadQueue" class="fileUploadQueue"></div>
                </div>

            </div>
        </div>
    





    </div>

    <!-- =====  Begin Ribbon ============================================================ -->

    <div id="s4-ribbonrow" class="s4-pr s4-ribbonrowhidetitle" style="height: 44px;">
        <div id="s4-ribboncont">

            <!-- ribbon starts here -->
            <input id="RibbonContainer_activeTabId" name="ctl00$ctl48" type="hidden" value=""><div id="RibbonContainer"><div class="ms-cui-ribbon" id="Ribbon" unselectable="on" aria-describedby="ribboninstructions" oncontextmenu="return false" role="toolbar"><span class="ms-cui-hidden" id="ribboninstructions" unselectable="on">To navigate through the Ribbon, use standard browser navigation keys. To skip between groups, use Ctrl+LEFT or Ctrl+RIGHT. To jump to the first Ribbon tab use Ctrl+[. To jump to the last selected command use Ctrl+]. To activate a command, use Enter.</span><div class="ms-cui-ribbonTopBars" unselectable="on"><div class="ms-cui-topBar1" unselectable="on" style="display:none"><div class="ms-cui-qat-container" unselectable="on"></div></div><div class="ms-cui-topBar2" unselectable="on"><div class="ms-cui-jewel-container" id="jewelcontainer" unselectable="on" style="display:none"></div><div class="ms-cui-TabRowLeft ms-siteactionscontainer s4-notdlg" id="RibbonContainer-TabRowLeft" unselectable="on">

                    <!-- site actions -->
                    <span class="ms-siteactionsmenu" id="siteactiontd">
                       
                                
                            <span style="display:none"><menu type="ServerMenu" id="zz2_SiteActionsMenuMain" largeiconmode="true"><ie:menuitem id="ctl00_SiteActionsMenuMain_ctl00_MenuItem_TakeOffline" type="option" iconsrc=" ../../arquivos/img/connecttospworkspace32.png" onmenuclick="javaScript:CoreInvoke(&#39;TakeOfflineToClientReal&#39;,1, 1, &#39;https:\u002f\u002fdtc-server01\u002fsites\u002fdemo&#39;, -1, -1, &#39;&#39;, &#39;&#39;)" hidden="TakeOfflineDisabled(1, 1, -1, -1)" text="Sync to SharePoint Workspace" description="Create a synchronized copy of this site on your computer." menugroupid="100"></ie:menuitem>
<ie:menuitem id="zz3_MenuItem_ViewAllSiteContents" type="option" iconsrc="../../arquivos/img/allcontent32.png" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/viewlsts.aspx&#39;);" text="View All Site Content" description="View all libraries and lists in this site." menugroupid="300"></ie:menuitem>
</menu></span><span id="zz4_SiteActionsMenu_t" class="ms-siteactionsmenuinner" title="Open Menu" onmouseover="MMU_PopMenuIfShowing(this);MMU_EcbTableMouseOverOut(this, true)" hoveractive="ms-siteactionsmenuhover" hoverinactive="ms-siteactionsmenuinner" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz2_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz4_SiteActionsMenu&#39;),event,false, null, 0); return false;" foa="MMU_GetMenuFromClientId(&#39;zz4_SiteActionsMenu&#39;)" oncontextmenu="ClkElmt(this); return false;" style="white-space:nowrap"><a class="ms-menu-a" id="zz4_SiteActionsMenu" accesskey="/" href="javascript:;" style="cursor:pointer;white-space:nowrap;" onfocus="MMU_EcbLinkOnFocusBlur(byid(&#39;zz2_SiteActionsMenuMain&#39;), this, true);" onkeydown="MMU_EcbLinkOnKeyDown(byid(&#39;zz2_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz4_SiteActionsMenu&#39;), event);" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz2_SiteActionsMenuMain&#39;), MMU_GetMenuFromClientId(&#39;zz4_SiteActionsMenu&#39;),event,false, null, 0); return false;" oncontextmenu="ClkElmt(this); return false;" menutokenvalues="MENUCLIENTID=zz4_SiteActionsMenu,TEMPLATECLIENTID=zz2_SiteActionsMenuMain" serverclientid="zz4_SiteActionsMenu"><span>Site Actions</span><img src="../../arquivosMain/blank.gif" style="border:0px" alt="Use SHIFT+ENTER to open the menu (new window)."></a><span style="height:3px;width:5px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust ms-viewselector-arrow"><img src="../../arquivosMain/fgimg.png" alt="Open Menu" style="border-width:0px;position:absolute;left:-0px !important;top:-491px !important;"></span></span>
                    </span>

                    <!-- global navigation dhtml popout menu -->
                    
                        <span class="s4-breadcrumb-anchor"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust"><a id="GlobalBreadCrumbNavPopout-anchor" onclick="CoreInvoke(&#39;callOpenBreadcrumbMenu&#39;, event, &#39;GlobalBreadCrumbNavPopout-anchor&#39;, &#39;GlobalBreadCrumbNavPopout-menu&#39;, &#39;GlobalBreadCrumbNavPopout-img&#39;, &#39;s4-breadcrumb-anchor-open&#39;, &#39;ltr&#39;, &#39;&#39;, false); return false;" onmouseover="" onmouseout="" title="Navigate Up" href="javascript:;" style="display:inline-block;height:16px;width:16px;"><img src="../../arquivosMain/fgimg.png" alt="Navigate Up" style="border:0;position:absolute;left:-0px !important;top:-112px !important;"></a></span></span><div class="ms-popoutMenu s4-breadcrumb-menu" id="GlobalBreadCrumbNavPopout-menu" style="display:none;">
                            <div class="s4-breadcrumb-top">
                                <span class="s4-breadcrumb-header">This page location is:</span>
                            </div>
                            
                                <ul class="s4-breadcrumb">
	<li class="s4-breadcrumbRootNode"><span class="s4-breadcrumb-arrowcont"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust s4-breadcrumb"><img src="../../arquivosMain/fgimg.png" alt="" style="border-width:0px;position:absolute;left:-0px !important;top:-353px !important;"></span></span><a class="s4-breadcrumbRootNode" href="/sites/demo">Demo</a><ul class="s4-breadcrumbRootNode"><li class="s4-breadcrumbCurrentNode"><span class="s4-breadcrumb-arrowcont"><span style="height:16px;width:16px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust s4-breadcrumb"><img src="../../arquivosMain/fgimg.png" alt="" style="border-width:0px;position:absolute;left:-0px !important;top:-353px !important;"></span></span><span class="s4-breadcrumbCurrentNode">Home</span></li></ul></li>
</ul>
                            
                        </div>
                    

                    <!-- save button at top of ribbon -->
                    
                </div><ul class="ms-cui-tts" unselectable="on" role="tablist"><li class="ms-cui-tt ms-browseTab ms-cui-tt-s" id="Ribbon.Read-title" unselectable="on" role="tab"><a class="ms-cui-tt-a" unselectable="on" href="javascript:;" onclick="_ribbonStartInit(&#39;Ribbon.Read&#39;,false, event);" title="Browse" onkeypress="if(event != null &amp;&amp; event.keyCode == 13){ if(typeof(_ribbon) != &#39;undefined&#39;) _ribbon.launchedByKeyboard = true; _ribbonStartInit(&#39;Ribbon.Read&#39;,false, event);  }"><span class="ms-cui-tt-span" unselectable="on">Browse</span><span class="ms-cui-hidden" unselectable="on">Tab 1 of 2.</span></a></li><li class="ms-cui-tt" id="Ribbon.WebPartPage-title" unselectable="on" role="tab"><a class="ms-cui-tt-a" unselectable="on" href="javascript:;" onclick="_ribbonStartInit(&#39;Ribbon.WebPartPage&#39;,false, event);" title="Page" onkeypress="if(event != null &amp;&amp; event.keyCode == 13){ if(typeof(_ribbon) != &#39;undefined&#39;) _ribbon.launchedByKeyboard = true; _ribbonStartInit(&#39;Ribbon.WebPartPage&#39;,false, event);  }"><span class="ms-cui-tt-span" unselectable="on">Page</span><span class="ms-cui-hidden" unselectable="on">Tab 2 of 2.</span></a></li></ul><div class="ms-cui-TabRowRight s4-trc-container s4-notdlg" id="RibbonContainer-TabRowRight" unselectable="on" style="display: block;">

                    <!-- GlobalSiteLink0 delegate - the variation selector / shows nothing by default otherwise -->
                    

                    <!-- Welcome / Login control -->
                    <div class="s4-trc-container-menu">
                        <div>
                            
	 
	<span style="display:none"><menu type="ServerMenu" id="zz5_ID_PersonalActionMenu" largeiconmode="true"><ie:menuitem id="zz6_ID_PersonalInformation" type="option" iconsrc="../../arquivos/img/menuprofile.gif" onmenuclick="javascript:GoToPage(&#39;\u002fsites\u002fdemo\u002f_layouts\u002fuserdisp.aspx?Force=True\u0026ID=&#39; + _spUserId);return false;" text="My Settings" description="Update your user information, regional settings, and alerts." menugroupid="100"></ie:menuitem>
<ie:menuitem id="zz7_ID_LoginAsDifferentUser" type="option" onmenuclick="javascript:LoginAsAnother(&#39;\u002fsites\u002fdemo\u002f_layouts\u002fcloseConnection.aspx?loginasanotheruser=true&#39;, 0)" text="Sign in as Different User" description="Login with a different account." menugroupid="200"></ie:menuitem>
<ie:menuitem id="zz8_ID_Logout" type="option" onmenuclick="STSNavigate2(event,&#39;/sites/demo/_layouts/SignOut.aspx&#39;);" text="Sign Out" description="Logout of this site." menugroupid="200"></ie:menuitem>
</menu></span><span id="zz9_Menu_t" class="ms-SPLink ms-SpLinkButtonInActive ms-welcomeMenu" title="Open Menu" onmouseover="MMU_PopMenuIfShowing(this);MMU_EcbTableMouseOverOut(this, true)" hoveractive="ms-SPLink ms-SpLinkButtonActive ms-welcomeMenu" hoverinactive="ms-SPLink ms-SpLinkButtonInActive ms-welcomeMenu" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz5_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz9_Menu&#39;),event,false, null, 0); return false;" foa="MMU_GetMenuFromClientId(&#39;zz9_Menu&#39;)" oncontextmenu="ClkElmt(this); return false;" style="white-space:nowrap"><a class="ms-menu-a" id="zz9_Menu" accesskey="W" href="javascript:;" style="cursor:pointer;white-space:nowrap;" onfocus="MMU_EcbLinkOnFocusBlur(byid(&#39;zz5_ID_PersonalActionMenu&#39;), this, true);" onkeydown="MMU_EcbLinkOnKeyDown(byid(&#39;zz5_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz9_Menu&#39;), event);" onclick=" CoreInvoke(&#39;MMU_Open&#39;,byid(&#39;zz5_ID_PersonalActionMenu&#39;), MMU_GetMenuFromClientId(&#39;zz9_Menu&#39;),event,false, null, 0); return false;" oncontextmenu="ClkElmt(this); return false;" menutokenvalues="MENUCLIENTID=zz9_Menu,TEMPLATECLIENTID=zz5_ID_PersonalActionMenu" serverclientid="zz9_Menu"><span>dem.sysadmin</span><img src="../../arquivosMain/blank.gif" style="border:0px" alt="Use SHIFT+ENTER to open the menu (new window)."></a><span style="height:3px;width:5px;position:relative;display:inline-block;overflow:hidden;" class="s4-clust ms-viewselector-arrow"><img src="../../arquivosMain/fgimg.png" alt="Open Menu" style="border-width:0px;position:absolute;left:-0px !important;top:-491px !important;"></span></span><script type="text/javascript">
//<![CDATA[
var _spUserId=18;
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
                </div></div></div></div></div>
<script type="text/javascript">
//<![CDATA[
    
    var _ribbon = new Object();
    _ribbon.initialTabId = 'Ribbon.Read';
    _ribbon.buildMinimized = true;
    _ribbon.initStarted = false;
    _ribbon.initialTabSelectedByUser = false;
    _ribbon.launchedByKeyboard = false;

    function _ribbonInitFunc1()
    {
        try
        {
            var temp = new CUI.RibbonBuildOptions();
        }
        catch(e)
        {
            return;
        }

        var options = new CUI.RibbonBuildOptions();
        options.lazyTabInit = true;
        options.shallowTabs = true;
        options.lazyMenuInit = true;
        options.attachToDOM = false;
        options.initialScalingIndex = 0;
        options.validateServerRendering = false;
        options.showQATId = '';
        options.showJewelId = '';
        options.minimized = _ribbon.buildMinimized;
        options.shownTabs = {'Ribbon.Read':true,'Ribbon.WebPartPage':true};;
        options.shownContextualGroups = null;
        options.initiallyVisibleContextualGroups = null;
        options.normalizedContextualGroups = null;
        options.trimmedIds = {'Ribbon.WebPartInsert.InsertRelatedDataToListForm':true};;
        options.enabledVisibilityContexts = null;
        options.fixedPositioningEnabled = false;
        options.clientID = 'RibbonContainer';
        options.trimEmptyGroups = true;
        options.dataExtensions = null;
        options.scalingHint = '798511870';
        options.initialTabSelectedByUser = _ribbon.initialTabSelectedByUser;
        options.launchedByKeyboard = _ribbon.launchedByKeyboard;

        try
        {
            var temp = SP.Ribbon.PageManager.get_instance();
        }
        catch(e)
        {
            return;
        }

        g_builder = new CUI.RibbonBuilder(options, document.getElementById('RibbonContainer'), SP.Ribbon.PageManager.get_instance());
        var dataSource = new CUI.DataSource('\u002fsites\u002fdemo\u002f_layouts\u002fcommandui.ashx', '-1985844624', '1033');
        g_builder.set_dataSource(dataSource);

        g_builder.buildRibbonAndInitialTab(_ribbon.initialTabId);
    }

    function _ribbonStartInit(initialTabId, buildMinimized, e)
    {
        if (true && typeof(_ribbonReadyForInit) == 'function' && !_ribbonReadyForInit())
            return;

        if (e)
        {
            _ribbon.initialTabSelectedByUser = true;
        }

        var firstTabId = null;
        var evt = e || window.event;
        if (evt)
        {
            if (!evt.preventDefault)
                evt.returnValue = false;
            else
                evt.preventDefault();
        }

        if (_ribbon.initStarted)
            return;
        _ribbon.initStarted = true;
        if(typeof(CUI) != 'undefined' && typeof(CUI.PMetrics) != 'undefined')
            CUI.PMetrics.perfMark(CUI.PMarker.perfCUIRibbonInitStart);
        if (initialTabId)
        {
            firstTabId = _ribbon.initialTabId;
            _ribbon.initialTabId = initialTabId;
        }
        if (typeof(buildMinimized) != 'undefined')
            _ribbon.buildMinimized = buildMinimized;

        if(initialTabId && initialTabId != "undefined" && _ribbonOnStartInit)
        {
            _ribbonOnStartInit(_ribbon);
            
            var oldTab = document.getElementById(firstTabId + "-title");
            if (oldTab)
                oldTab.className = "ms-cui-tt";

            var newTab = document.getElementById(initialTabId + "-title");
            if (newTab)
                newTab.className = "ms-cui-tt ms-cui-tt-s";
        }
        

        var _spRibbonInstantiateByRibbonControl = true;

        function _registerCommonComponents()
        {  
            SP.Ribbon.HelpPageComponent.registerWithPageManager();
            SP.Ribbon.UserInterfacePageComponent.registerWithPageManager();
        }
        ExecuteOrDelayUntilScriptLoaded(_registerCommonComponents, "sp.ribbon.js");

        
        function _registerCUIEComponent()
        {  
            var instance = SP.Ribbon.CommandUIExtensionPageComponent.get_instance();
            instance.set_dataUrl('\u002fsites\u002fdemo\u002f_layouts\u002fcommandui.ashx');
            instance.set_dataLCID('1033');
            instance.set_dataVersion('-1985844624');
            SP.Ribbon.CommandUIExtensionPageComponent.registerWithPageManager();
        }
        ExecuteOrDelayUntilScriptLoaded(_registerCUIEComponent, "sp.ribbon.js");

        var defd;
        try
        {
            defd = typeof(SP.Ribbon.PageManager);
        }
        catch (e)
        {
            defd = "undefined";
        }
        EnsureScript("ribbon", defd, _ribbonInitFunc1);


    }

    function _ribbonKeyboardTitleShortcut(e)
    {
        var evt = e || window.event;
        if (evt)
        {
            var key = (evt.ctrlKey) ? 't' : 'f';
            key += (evt.altKey) ? 't' : 'f';
            key += (evt.shiftKey) ? 't' : 'f';
            try
            {
                key += String.fromCharCode(_processKeyCodes(evt.keyCode));
            }
            catch (error)
            {
                return;
            }

            if(key == 'tff[')
            {
                if(document.selection && document.selection.type == 'Control')
                {
                    var r = document.selection.createRange();
                    var len = r.length;
                    for (; len > 0; len--)
                    {
                        r.remove(len - 1);
                    }
                    r.select();
                }

                var tabHead = document.getElementById('Ribbon.Read-title');
                if(tabHead)
                {
                    tabHead = tabHead.firstChild.focus();
                }
            }
        }
    }

    if (false)
        _spBodyOnLoadFunctionNames.push("_ribbonStartInit");


    function _ribbonOnWindowResizeForHeaderScaling(evt)
    {
        if (_ribbon.initStarted)
            return;
        _ribbonScaleHeader(document.getElementById('RibbonContainer').firstChild.childNodes[1], false);
    }
    if (typeof(_ribbonScaleHeader) == 'function' && true)
    {        
        _ribbonScaleHeader(document.getElementById('RibbonContainer').firstChild.childNodes[1], false);
        if (window.addEventListener)
            window.addEventListener('resize', _ribbonOnWindowResizeForHeaderScaling, false);
        else if(window.attachEvent)
            window.attachEvent('onresize', _ribbonOnWindowResizeForHeaderScaling);            
    }
    

    if(document.addEventListener)
        document.addEventListener('keydown', _ribbonKeyboardTitleShortcut, false);
    else
        document.attachEvent('onkeydown', _ribbonKeyboardTitleShortcut);
//]]>
</script>
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
    <div id="s4-workspace" class="s4-nosetwidth" style="height: 609px;">
        <!-- NOTE: s4-nosetwidth is used when you are setting a fixed page width in css, remove for 100% -->
        <div id="s4-bodyContainer">

            <!-- id="mso_contentdiv" required, helps SharePoint put the web part editing pane in the main body on the right, you can move the ID if needed -->
            <div id="ctl00_MSO_ContentDiv">

                <!-- link back to homepage, SiteLogoImage gets replaced by the Site Icon, you can hard code this so that its not overridden by the Site Icon or even remove -->
                <div class="s4-notdlg">
                    <!-- NOTE: any time you see s4-notdlg, this element will be hidden from SharePoint dialog windows  -->
                    <a href="main.php">
                        <img src="../../arquivosMain/logo.png" alt="Demo" style="border-width:0px;">
                    </a>
                </div>

                <!-- search box loads from delegate, style with CSS -->
                <div class="s4-notdlg">
                    
                        <table class="s4-wpTopTable" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr class="zebraUm">
		<td valign="top"><div webpartid="00000000-0000-0000-0000-000000000000" haspers="true" id="WebPartWPQ1" width="100%" class="noindex" onlyformepart="true" allowdelete="false" style=""><div id="SRSB"> <div>
			<input name="ctl00$PlaceHolderSearchArea$ctl01$ctl00" type="hidden" id="ctl00_PlaceHolderSearchArea_ctl01_ctl00" value="/sites/demo"><table class="ms-sbtable ms-sbtable-ex s4-search" cellpadding="0" cellspacing="0" border="0">
				<tbody><tr class="ms-sbrow zebraDois">
					<td class="ms-sbcell"><input name="InputKeywords" type="text" value="Search this site..." maxlength="200" id="ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_InputKeywords" accesskey="S" title="Search..." class="ms-sbplain s4-searchbox-QueryPrompt" alt="Search..." onkeypress="javascript: return S3031AEBB_OSBEK(event);" onfocus="if (document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value ==&#39;0&#39;) {this.value=&#39;&#39;; if (this.className == &#39;s4-searchbox-QueryPrompt&#39;) this.className = &#39;&#39;; else this.className = this.className.replace(&#39; s4-searchbox-QueryPrompt&#39;,&#39;&#39;); document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value=1;}" onblur="if (this.value ==&#39;&#39;) {this.value=&#39;Search this site...&#39;; if (this.className.indexOf(&#39;s4-searchbox-QueryPrompt&#39;) == -1) this.className += this.className?&#39; s4-searchbox-QueryPrompt&#39;:&#39;s4-searchbox-QueryPrompt&#39;; document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value = &#39;0&#39;} else {document.getElementById(&#39;ctl00_PlaceHolderSearchArea_ctl01_ctl04&#39;).value=&#39;1&#39;;}" style="width:170px;"></td><td class="ms-sbgo ms-sbcell"><a id="ctl00_PlaceHolderSearchArea_ctl01_S3031AEBB_go" title="Search" href="javascript:S3031AEBB_Submit()"><img title="Search" onmouseover="this.src=&#39;\u002f_layouts\u002fimages\u002fgosearchhover15.png&#39;" onmouseout="this.src=&#39;\u002f_layouts\u002fimages\u002fgosearch15.png&#39;" class="srch-gosearchimg" alt="Search" src="../../arquivosMain/gosearch15.png" style="border-width:0px;"></a></td><td class="ms-sbLastcell"></td>
				</tr>
			</tbody></table><input name="ctl00$PlaceHolderSearchArea$ctl01$ctl04" type="hidden" id="ctl00_PlaceHolderSearchArea_ctl01_ctl04" value="0">
		</div></div></div></td>
	</tr>
</tbody></table>
                    
                </div>

                <!-- top navigation area -->
                <div class="s4-notdlg">
                    <!-- top navigation menu (set to use the new Simple Rendering) -->
                    <div id="zz10_TopNavigationMenuV4" class="s4-tn">
	<div class="menu horizontal menu-horizontal">
		<ul class="root static">
			<li class="static selected"><a class="static selected menu-item" href="/_modulos/" accesskey="1"><span class="additional-background"><span class="menu-item-text">Home</span><span class="ms-hidden">Currently selected</span></span></a></li>
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
                    
                        
                        <div id="zz11_V4QuickLaunchMenu" class="s4-ql">
	<div class="menu vertical menu-vertical">
		<ul class="root static">
			<li class="static"><a class="static menu-item" href="/sites/demo/_layouts/viewlsts.aspx?BaseType=1"><span class="additional-background"><span class="menu-item-text">Libraries</span></span></a></li><li class="static"><a class="static menu-item" href="/sites/demo/_layouts/viewlsts.aspx?BaseType=0"><span class="additional-background"><span class="menu-item-text">Lists</span></span></a></li><li class="static"><a class="static menu-item" href="/sites/demo/_layouts/viewlsts.aspx?BaseType=0&amp;ListTemplate=108"><span class="additional-background"><span class="menu-item-text">Discussions</span></span></a></li>
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
    <input type="text" name="__spDummyText1" style="display: none;" size="1">
    <input type="text" name="__spDummyText2" style="display: none;" size="1">

<div id="ctl00_panelZone">
	<div style="display:none" id="hidZone"><menu class="ms-SrvMenuUI">
		<ie:menuitem id="MSOMenu_Help" iconsrc="../../arquivos/img/HelpIcon.gif" onmenuclick="MSOWebPartPage_SetNewWindowLocation(MenuWebPart.getAttribute(&#39;helpLink&#39;), MenuWebPart.getAttribute(&#39;helpMode&#39;))" text="Help" type="option" style="display:none">

		</ie:menuitem>
	</menu></div>
</div><input type="hidden" id="_wpcmWpid" name="_wpcmWpid" value=""><input type="hidden" id="wpcmVal" name="wpcmVal" value="">
<script type="text/javascript">
//<![CDATA[
var ctl00_PlaceHolderTabArea_tvFolders_ImageArray =  new Array('', '', '', '/WebResource.axd?d=1Unb9Vo6K1SZr1mzEmKGca8ssY-Yqw7rwQt5G76phyyXsyLBwNoEf8sR4OzojV6sFwaSZJCT_YlYWU5VbCWaIZmkXdP7kaZ84YYXqKSyxH6AKYT_0&t=635588552026805809', '/WebResource.axd?d=bmKqjbgbWEpjEYJnZWN4RQH1DXAiKJwbNzb2ROMvLde-G6uY2EK83isky04GryF-hpI73XIT3kX9kgAjZM4bFM6FU8vPD_RylKV91z1McE8kzqCq0&t=635588552026805809', '/WebResource.axd?d=Yyg1vopEGjFKMsByNywWvqbTZsZJZ5cO3H6LuPMT2Ej9DcP8IFWCF-9U6YAYWhMdv5mM7T7Hw-GSUo3tSD1nMbFmKsLdmxQN1W8fJLt0Vdb_4h8h0&t=635588552026805809');
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
var _spFormDigestRefreshInterval = 1440000;var _fV4UI = true;
function _RegisterWebPartPageCUI()
{
    var initInfo = {editable: false,isEditMode: false,allowWebPartAdder: false};
    SP.Ribbon.WebPartComponent.registerWithPageManager(initInfo);
    var wpcomp = SP.Ribbon.WebPartComponent.get_instance();
    var hid;
    hid = document.getElementById("_wpSelected");
    if (hid != null)
    {
        var wpid = hid.value;
        if (wpid.length > 0)
        {
            var zc = document.getElementById(wpid);
            if (zc != null)
                wpcomp.selectWebPart(zc, false);
        }
    }
    hid = document.getElementById("_wzSelected");
    if (hid != null)
    {
        var wzid = hid.value;
        if (wzid.length > 0)
        {
            wpcomp.selectWebPartZone(null, wzid);
        }
    }
}
ExecuteOrDelayUntilScriptLoaded(_RegisterWebPartPageCUI, "sp.ribbon.js"); var __wpmExportWarning='This Web Part Page has been personalized. As a result, one or more Web Part properties may contain confidential information. Make sure the properties contain information that is safe for others to read. After exporting this Web Part, view properties in the Web Part description file (.WebPart) by using a text editor such as Microsoft Notepad.';var __wpmCloseProviderWarning='You are about to close this Web Part.  It is currently providing data to other Web Parts, and these connections will be deleted if this Web Part is closed.  To close this Web Part, click OK.  To keep this Web Part, click Cancel.';var __wpmDeleteWarning='You are about to permanently delete this Web Part.  Are you sure you want to do this?  To delete this Web Part, click OK.  To keep this Web Part, click Cancel.';
var callBackFrameUrl='/WebResource.axd?d=E-Tr6EIMBg01tdiS28YVZ0gAuPKULNmqWu6urXLZMNfPPv9AfElm6CItmgLmuTR4VDp-rTK0wxmXZxuY_qFoGnVBNhs1&t=635588552026805809';
WebForm_InitCallback();var ctl00_PlaceHolderTabArea_tvFolders_Data = new Object();
ctl00_PlaceHolderTabArea_tvFolders_Data.images = ctl00_PlaceHolderTabArea_tvFolders_ImageArray;
ctl00_PlaceHolderTabArea_tvFolders_Data.collapseToolTip = "Collapse {0}";
ctl00_PlaceHolderTabArea_tvFolders_Data.expandToolTip = "Expand {0}";
ctl00_PlaceHolderTabArea_tvFolders_Data.expandState = theForm.elements['ctl00_PlaceHolderTabArea_tvFolders_ExpandState'];
ctl00_PlaceHolderTabArea_tvFolders_Data.selectedNodeID = theForm.elements['ctl00_PlaceHolderTabArea_tvFolders_SelectedNode'];
for (var i=0;i<6;i++) {
var preLoad = new Image();
if (ctl00_PlaceHolderTabArea_tvFolders_ImageArray[i].length > 0)
preLoad.src = ctl00_PlaceHolderTabArea_tvFolders_ImageArray[i];
}
ctl00_PlaceHolderTabArea_tvFolders_Data.lastIndex = 5;
ctl00_PlaceHolderTabArea_tvFolders_Data.populateLog = theForm.elements['ctl00_PlaceHolderTabArea_tvFolders_PopulateLog'];
ctl00_PlaceHolderTabArea_tvFolders_Data.treeViewID = 'ctl00$PlaceHolderTabArea$tvFolders';
ctl00_PlaceHolderTabArea_tvFolders_Data.name = 'ctl00_PlaceHolderTabArea_tvFolders_Data';
Sys.WebForms.PageRequestManager.getInstance()._registerDisposeScript("ctl00_PlaceHolderTabArea_upFolders", "ctl00_PlaceHolderTabArea_tvFolders_ImageArray.length = 0;\r\nctl00_PlaceHolderTabArea_tvFolders_Data = null;");
var _spWebPermMasks = {High:176,Low:138612833};//]]>
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
</script><script type="text/javascript">
// <![CDATA[
document.write('<script type="text/javascript" src="../../arquivosjquery.blockui/custom/jquery.blockui.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/jquery.mask/dist/jquery.mask.min.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/jquery.mcustomscrollbar/jquery.mcustomscrollbar.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/_site.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/jquery.tabslideout/jquery.tabslideout.v1.3.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/tabs.js"></' + 'script>');
document.write('<script type="text/javascript" src="../../arquivos/scripts/main/cookies.js"></' + 'script>');
// ]]>
</script><script type="text/javascript" src="../../arquivosMain/jquery.blockui.js.download"></script><script type="text/javascript" src="../../arquivosMain/jquery.mask.min.js.download"></script><script type="text/javascript" src="../../arquivosMain/jquery.mcustomscrollbar.js.download"></script><script type="text/javascript" src="../../arquivosMain/_site.js.download"></script><script type="text/javascript" src="../../arquivosMain/jquery.tabslideout.v1.3.js.download"></script><script type="text/javascript" src="../../arquivosMain/tabs.js.download"></script><script type="text/javascript" src="../../arquivosMain/cookies.js.download"></script>
<script type="text/javascript">RegisterSod("sp.core.js", "\u002f_layouts\u002fsp.core.debug.js?rev=Qp5K7ycU\u00252FEY9IvE0KOi7zQ\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("sp.res.resx", "\u002f_layouts\u002fScriptResx.ashx?culture=en\u00252Dus\u0026name=SP\u00252ERes\u0026rev=b6\u00252FcRx1a6orhAQ\u00252FcF\u00252B0ytQ\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("sp.ui.dialog.js", "\u002f_layouts\u002fsp.ui.dialog.debug.js?rev=I4RtkztzINg\u00252B\u00252BPCPe\u00252FeQlw\u00253D\u00253D");RegisterSodDep("sp.ui.dialog.js", "sp.core.js");RegisterSodDep("sp.ui.dialog.js", "sp.res.resx");</script>
<script type="text/javascript">RegisterSod("core.js", "\u002f_layouts\u002f1033\u002fcore.debug.js?rev=iUJUh\u00252BLHTqLkL2NzuKJyqg\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("sp.runtime.js", "\u002f_layouts\u002fsp.runtime.debug.js?rev=f2An00kVlALdMLzcBc1cug\u00253D\u00253D");RegisterSodDep("sp.runtime.js", "sp.core.js");RegisterSodDep("sp.runtime.js", "sp.res.resx");</script>
<script type="text/javascript">RegisterSod("sp.js", "\u002f_layouts\u002fsp.debug.js?rev=Bd43zMKp55FEd0Bf\u00252F942XA\u00253D\u00253D");RegisterSodDep("sp.js", "sp.core.js");RegisterSodDep("sp.js", "sp.runtime.js");RegisterSodDep("sp.js", "sp.ui.dialog.js");RegisterSodDep("sp.js", "sp.res.resx");</script>
<script type="text/javascript">RegisterSod("cui.js", "\u002f_layouts\u002fcui.debug.js?rev=\u00252BhQl2NTQMTydPivdG\u00252Bq\u00252FdA\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("inplview", "\u002f_layouts\u002finplview.debug.js?rev=h6yfT\u00252Bj9a17aH0kDklbCVg\u00253D\u00253D");RegisterSodDep("inplview", "core.js");RegisterSodDep("inplview", "sp.js");</script>
<script type="text/javascript">RegisterSod("ribbon", "\u002f_layouts\u002fsp.ribbon.debug.js?rev=lc6eCMZP6gL5LnuSYh0S6Q\u00253D\u00253D");RegisterSodDep("ribbon", "core.js");RegisterSodDep("ribbon", "sp.core.js");RegisterSodDep("ribbon", "sp.js");RegisterSodDep("ribbon", "cui.js");RegisterSodDep("ribbon", "sp.res.resx");RegisterSodDep("ribbon", "sp.runtime.js");RegisterSodDep("ribbon", "inplview");</script>
<script type="text/javascript">RegisterSod("msstring.js", "\u002f_layouts\u002f1033\u002fmsstring.debug.js?rev=\u00252FBVJveHLTRPyAS7JcY4oHw\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("browserScript", "\u002f_layouts\u002f1033\u002fie55up.debug.js?rev=oCEOggnhuSwHq5tsedonXw\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("WPAdderClass", "\u002f_layouts\u002fwpadder.debug.js?rev=ShI6HpbWyfAFLqD4udjnjw\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSod("search.js", "\u002f_layouts\u002fsearch.js?rev=3pPWp493ZcP8RyBeS4aKSQ\u00253D\u00253D");</script>
<script type="text/javascript">RegisterSodDep("browserScript", "msstring.js");</script>
<script type="text/javascript">
//<![CDATA[
Sys.Application.initialize();
function init_zz1_mnuSite() {$create(SP.UI.AspMenu, null, null, null, $get('zz1_mnuSite'));}ExecuteOrDelayUntilScriptLoaded(init_zz1_mnuSite, 'sp.js');
function init_zz10_TopNavigationMenuV4() {$create(SP.UI.AspMenu, null, null, null, $get('zz10_TopNavigationMenuV4'));}ExecuteOrDelayUntilScriptLoaded(init_zz10_TopNavigationMenuV4, 'sp.js');
function init_zz11_V4QuickLaunchMenu() {$create(SP.UI.AspMenu, null, null, null, $get('zz11_V4QuickLaunchMenu'));}ExecuteOrDelayUntilScriptLoaded(init_zz11_V4QuickLaunchMenu, 'sp.js');
//]]>
</script>
</form>

    <!-- extra form for some instances -->
    


    <!-- warn users of old browsers that they need to upgrade -->
    

    <!-- Starter Master Page by Randy Drisgill (http://blog.drisgill.com) - Oct. 7, 2010 -->
    <!-- Remove this credit if you want, but if you leave it in I will appreciate it! -->




</body></html>