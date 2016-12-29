function ULSfCf(){var o=new Object;o.ULSTeamName="Microsoft SharePoint Foundation";o.ULSFileName="inplview.debug.js";return o;}
function SwapNode(node1, node2)
{ULSfCf:;
	return node1.parentNode.replaceChild(node2, node1);
}
function GetAncestor(elem, tag)
{ULSfCf:;
	while (elem !=null && elem.tagName !=tag)
	{
		elem=elem.parentNode;
	}
	return elem;
}
function CountDictionary(dict)
{ULSfCf:;
	var i=0;
	var k;
	for (k in dict)
		i++;
	return i;
}
function EncodeQueryStringAsHash(str)
{ULSfCf:;
	return str.replace(/-/g, '--').replace(/&/g, '-');
}
function DecodeHashAsQueryString(str)
{ULSfCf:;
	return str.replace(/-/g, '&').replace(/&&/g, '-');
}
function SetUrlHash(str)
{ULSfCf:;
	window.location.hash=str;
}
function CLVP(ctx)
{ULSfCf:;
	this.ctx=ctx;
	this.tab=null;
	this.pagingTab=null;	
	this.tBody=null;
	this.wpq=null;
	this.inplUrl=null;
	this.trEmpty=null;
	this.rootFolder=null;
	this.rootFolderGuid=null;
	this.rgpag=null;
	this.wpid=null;
	this.isEditing=false;
	this.dsrc=null;
	this.isInserting=false;
	this.strGroupName=null;
	this.strGroupCache=null;
	this.bRequestOutstanding=false;
	this.isEcbInfo=false;
	this.queueEcbInfo=new Array();
	this.fnEcbCallback=null;
	ctx.clvp=this;
}
CLVP.prototype.Init=CLVPInit;
function CLVPInit()
{ULSfCf:;
	var isDoclib=this.ctx.listBaseType==1;
	var tabId;
	if (this.ctx.listTemplate=="109")
	{
		this.ctx.clvp=null;
		return;
	}
	tabId=this.ctx.listName+"-"+this.ctx.view;
	var tabs=GetElementsByName(tabId);
	if (tabs.length==0 && isDoclib)
	{
		tabId="onetidDoclibViewTbl0";
		tabs=GetElementsByName(tabId);
	}
	var div=null;
	if (tabs.length==0 && !isDoclib)
	{
		tabs=GetElementsByName("onetidDoclibViewTbl0");		
	}
	if (tabs.length==0)
		tabs=GetElementsByName("onetidDoclibViewTbl"+this.ctx.ctxId)
	if (tabs.length==1)
	{
		this.tab=tabs[0];
		div=this.FindWebPartDiv(this.tab);
		var wpid=div.getAttribute("WebPartID");
		if (wpid==null || this.ctx.view.indexOf(wpid.toUpperCase()) !=1)
			return;
	}
	else
	{
		var i;
		for (i=0; i < tabs.length; i++)
		{
			var tab=tabs[i];
			div=tab;
			var wpid=null;
			while (div !=null
			  && (div.tagName !="DIV" || (wpid=div.getAttribute("WebPartID"))==null)
			  && div.parentNode !=null)
			{
				div=div.parentNode;
			}
			if (div !=null)
			{
				if (wpid !=null && this.ctx.view.indexOf(wpid.toUpperCase())==1)
				{
					this.tab=tab;
					break;
				}
			}
		}
	}	
	if (div==null || this.tab==null)
	{
		return;
	}
	this.wpq=div.id;
	this.pagingTab=document.getElementById("bottomPagingCell"+this.wpq.substr(7));
	this.tab.clvp=this;
	if (this.tab.className=="ms-emptyView")
	{
		var tr=GetAncestor(this.tab, "TR");		
		this.trEmpty=tr.nextSibling;
	}
	if (typeof(this.ctx.isJsGrid) !="undefined" && this.ctx.isJsGrid)
	{
		this.isEditing=true;
		this.SwitchToEdit();
	}
	this.rootFolder=GetUrlKeyValue("RootFolder");
	if (this.rootFolder.length==0)
		this.rootFolder=null;
}
CLVP.prototype.RestoreNavigation=CLVPRestoreNavigation;
function CLVPRestoreNavigation()
{ULSfCf:;
	var strHash=window.location.hash;
	var strInpl=this.InplViewUrl();
	var strCur=this.RefreshCurrent(true);
	strCur=strCur.substr(strInpl.length+1);
	if (strHash.indexOf("InplviewHash=")==1)
	{
		strHash=DecodeHashAsQueryString(strHash);
		var strView=strHash.substr(14, 38);
		if (strView !=this.ctx.view)
			return;
		strHash=strHash.substr(52);
		var strQ='?'+strHash;
		SubmitFormPost(strQ);
	}
}
CLVP.prototype.FindWebPartDiv=CLVPFindWebPartDiv;
function CLVPFindWebPartDiv(tab)
{ULSfCf:;
	var div=tab;
	while (div !=null && div.tagName !="DIV")
	{
		div=div.parentNode;
	}
	return div;
}
CLVP.prototype.SyncPagingTables=CLVPSyncPagingTables;
function CLVPSyncPagingTables()
{ULSfCf:;
	var tab=this.pagingTab;
	var topTab=document.getElementById("topPagingCell"+this.wpq.substr(7));
	if (tab==null)
	{
		if (topTab !=null)
		{
			topTab.style.display="none";
		}
		return;
	}
	if (topTab !=null)
	{
		topTab.style.display="";
		if (GetInnerText(topTab) !=GetInnerText(tab))
			topTab.innerHTML=tab.innerHTML;
		var lnksTop=topTab.getElementsByTagName("A");
		var lnks=tab.getElementsByTagName("A");
		var i=0;
		for (i=0; i < lnks.length; i++)
		{
			lnksTop[i].onclick=lnks[i].onclick;
		}
	}
}
CLVP.prototype.RehookPaging=CLVPRehookPaging;
function CLVPRehookPaging()
{ULSfCf:;
	if (typeof(this.ctx.noAJAX) !="undefined" && this.ctx.noAJAX)
	{
		return;
	}	
	var tab=this.pagingTab;
	if (tab==null)
	{
		this.SyncPagingTables();
		return;
	}
	var lnks=tab.getElementsByTagName("A");
	var i;
	for (i=0; i < lnks.length; i++)
	{
		var lnk=lnks[i];
		var str=""+lnk.onclick;
		str=str.substr(str.indexOf('"')+1);
		str=str.substr(0, str.indexOf('"'));
		if (this.tBody !=null)
			str+="&IsGroupRender=TRUE";
		var clvp=this;	
		if(this.tBody !=null)
			eval("var tBodyId=\""+this.tBody.id+"\";");
		else
			eval("var tBodyId=null");
		eval("var strHref=\""+str+"\";");
		UpdateOnClick(lnk, clvp, strHref, tBodyId);
	}
	if (this.tBody==null)
		this.SyncPagingTables();
	function UpdateOnClick(elem, clvp, addr, bodyId) {ULSfCf:;
		elem.onclick=function() {ULSfCf:; clvp.RefreshPaging(addr, bodyId); return false; }
	}
}
CLVP.prototype.FilterString=CLVPFilterString;
function CLVPFilterString()
{ULSfCf:;
	if (this.rgpaging==null)
		return null;
	var key;
	var val;
	var rg=new Array();
	var isFirst=true;
	for (key in this.rgpaging)
	{
		if (key.indexOf("Filter")==0 || key.indexOf("Sort")==0)
		{
			if (isFirst)
				isFirst=false;
			else
				rg.push("&");
			rg.push(key);
			rg.push("=");
			rg.push(this.rgpaging[key]);
		}
	}
	return rg.join("");
}
CLVP.prototype.RefreshPaging=CLVPRefreshPaging;
function CLVPRefreshPaging(strUrl, tBodyId, fetchUrl)
{ULSfCf:;
	if (tBodyId !=null)
	{
		this.tBody=document.getElementById(tBodyId);
	}
	var cmd=this.isEditing ? "JsGrid" : null;
	return this.RefreshPagingEx(strUrl, true, cmd, fetchUrl);
}
CLVP.prototype.RefreshPagingEx=CLVPRefreshPagingEx;
function CLVPRefreshPagingEx(strUrl, fResetPaging, cmd, fetchUrl)
{ULSfCf:;
	var isFirstRow=GetUrlKeyValue("PageFirstRow", false, strUrl)=="1";
	if (isFirstRow)
		strUrl=RemoveOnlyPagingArgs(strUrl);
	var curl=new CUrl(strUrl);
	var strQuery=curl.query;
	if (strQuery.length > 0)
		strQuery=strQuery.substr(1);
	var rgparams=strQuery.split("&");
	var i;
	var rg=new Array();
	if (cmd !=null)
		rg.push("&Cmd="+cmd);
	else if (this.isEditing)
		rg.push("&Cmd=JsGrid");
	if (this.ctx.HasRelatedCascadeLists==1 &&
		this.ctx.CascadeDeleteWarningMessage==null)
	{
		rg.push("&CascDelWarnMessage=1");
	}
	if (fResetPaging || this.rgpaging=="undefined" || this.rgpaging==null)
	{
		this.rgpaging=new Array();
		for (i=0; i < rgparams.length; i++)
		{
			var rgp=rgparams[i].split("=");
			if (rgp[0]=="List" || rgp[0]=="View" || rgp[0]=="JsGrid" || rgp[0]=="ID")
			{
				delete rgp;
				continue;
			}
			if (rgp.length > 1)
				this.rgpaging[rgp[0]]=rgp[1];
			delete rgp;
			rg.push("&");
			rg.push(rgparams[i]);
		}
	}
	else
	{
		var key;
		for (key in this.rgpaging)
		{
			if (key=="List" || key=="View" || key=="ID")
				continue;
			rg.push("&");
			rg.push(key);
			rg.push("=");
			rg.push(this.rgpaging[key]);
		}
	}
	var hidGrpBy=document.getElementById("GroupByWebPartID"+this.ctx.ctxId);
	if (hidGrpBy !=null)
		rg.push("&WebPartID="+hidGrpBy.getAttribute("webPartID"));
	if (this.strGroupName !=null)
	{
		var strGroupString=GroupStringFromGroupName(this.strGroupName);
		if(strGroupString !=null)
		{
			rg.push("&IsGroupRender=TRUE&DrillDown=1&GroupString="+strGroupString)
		}
	}
	var inplViewCurl=new CUrl(this.InplViewUrl());
	var inplPath=inplViewCurl.path;
	var inplQuery=inplViewCurl.query;
	if (inplQuery.length > 0)
		inplQuery=inplQuery.substr(1);
	var strNewParams=rg.join("");
	delete rg;
	var strInpl=inplPath+"?"+ReconcileQstringFilters(inplQuery, strNewParams);
	if (GetUrlKeyValue("SortField", true, strInpl).length==0)
	{
		var strSortField=GetUrlKeyValue("SortField", true, window.location.href);
		if (strSortField.length > 0)
			strInpl=SetUrlKeyValue("SortField", strSortField, false, strInpl);
		var strSortDir=GetUrlKeyValue("SortDir", true, window.location.href);
		if (strSortDir.length > 0)
			strInpl=SetUrlKeyValue("SortDir", strSortDir, false, strInpl);
	}
	var strRoot=GetUrlKeyValue("RootFolder", true, strUrl);
	if (strRoot.length > 0 && GetUrlKeyValue("RootFolder", true, strInpl).length==0)
		strInpl=SetUrlKeyValue("RootFolder", strRoot, false, strInpl);
	if (fetchUrl)
		return strInpl;
	this.RefreshCore(strInpl);
}
CLVP.prototype.ResetSelection=CLVPResetSelection;
function CLVPResetSelection()
{ULSfCf:;
	var ctxCur=this.ctx;
	var bNeedRefresh=true;
	this.CUIItemInfo=null;
	if (CountSelectedItems(ctxCur) > 0)
	{
		var dict=ctxCur.dictSel;
		ctxCur.dictSel=[];
		ctxCur.CurrentSelectedItems=0;
		var cUrl=window.location.href;
		if((cUrl.indexOf("Filter")==-1) && (cUrl.indexOf("Sort")==-1))
		{
			var tab=this.tab
			if (tab)
			{
				var rows=tab.rows;
				var ReselectRow=function (oneRow) {ULSfCf:;
									  var iid=oneRow.getAttribute("iid");
									  return (iid && dict[iid] !=null);
								  }
				var lastIdx=GetLastSelectableRowIdx(tab, ReselectRow)
				if (rows && lastIdx > 0)
				{
					var i;
					for (i=0; i < lastIdx; i++)
					{
						var r=rows[i];
						var iid=r.getAttribute("iid");
						if (iid && dict[iid] !=null)
							ToggleItemRowSelection2(ctxCur, r, true, false);
					}
					bNeedRefresh=false;
					ToggleItemRowSelection2(ctxCur, rows[lastIdx], true, true);
				}
			}
		}
	}
	UpdateSelectAllCbx(ctxCur, true);
	if (bNeedRefresh)
		RefreshCommandUI();
}
CLVP.prototype.WebPartId=CLVPWebPartId;
function CLVPWebPartId()
{ULSfCf:;
	if (this.wpid==null)
	{
		if (this.tab !=null)
		{
			var div=this.tab;
			div=GetAncestor(div, "DIV");
			if (div !=null)
			{
				if (div.getAttribute("WebPartID2") !=null)
				{
					this.wpid=div.getAttribute("WebPartID2");
					return this.wpid;
				}
				if (div.getAttribute("WebPartID") !=null)
				{
					this.wpid=div.getAttribute("WebPartID");
					return this.wpid;
				}
			}
		}
		this.wpid=this.ctx.view.toLowerCase().substring(1, this.ctx.view.length - 2);
	}
	return this.wpid;
}
CLVP.prototype.RefreshCore=CLVPRefreshCore;
function CLVPRefreshCore(strUrl)
{ULSfCf:;
	MenuHtc_hide();
	var req;
	if (window.XMLHttpRequest)
	{
		req=new XMLHttpRequest();
	}
	else
	{
		req=new ActiveXObject("Microsoft.XMLHTTP");
	}
	var additionalPostData="";
	if (typeof(this.ctx.overrideSelectCommand) !="undefined")
	{
		additionalPostData="&OverrideSelectCommand="+this.ctx.overrideSelectCommand;
		strUrl=SetUrlKeyValue("IgnoreQString", "TRUE", false, strUrl);
	}
	var strRootFolder=GetUrlKeyValue("RootFolder", true, strUrl);
	if (strRootFolder.length > 0)
	{
		additionalPostData=additionalPostData+"&InplRootFolder="+strRootFolder;
		strUrl=RemoveUrlKeyValue("RootFolder", strUrl);
	}
	if (additionalPostData !="")
	{
		req.open("POST", strUrl, true);
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	}
	else
	{
		req.open("GET", strUrl, true);
		additionalPostData=null;
	}
	var clvp=this;
	clvp.focusInfo=null;
	clvp.bRequestOutstanding=true;
	if ((focusAcc !=null) && (focusAcc.focusInCLVPTab !=null))
		clvp.focusInfo=focusAcc;
	var strHash='InplviewHash='+this.ctx.view+this.InplViewUrlTrim(strUrl);
	strHash=EncodeQueryStringAsHash(strHash);
	if (strHash.indexOf('?') >=0)
		debugger;
	req.onreadystatechange=function()
		{ULSfCf:;
			if (req.readyState==4)
			{
				try
				{
					req.onreadystatechange=null;
				}
				catch (e)
				{
				}
				clvp.bRequestOutstanding=false;
				var strInner=req.responseText;
				if (req.status==601)
				{
					alert(req.responseText);
					return;
				}
				if (clvp.isEcbInfo)
				{
					clvp.CacheEcbInfo(strInner);
					clvp.isEcbInfo=false;
					clvp.strGroupName=null;
					if (clvp.queueEcbInfo.length > 0)
					{
						while ((clvp.EnsureEcbInfo(null, null, clvp.queueEcbInfo.shift()) !=null) && (clvp.queueEcbInfo.length > 0)) {}
					}
					return;
				}
				var div=document.createElement("DIV");
				var tid=clvp.tab.id;
				if (clvp.tab.tagName=="DIV")
					tid=clvp.tab.tabid;
				var pid=clvp.pagingTab !=null ? clvp.pagingTab.id : null;
				div.style.visibility="hidden";
				div.innerHTML=strInner;
				var oldFilterIfrm=document.getElementById("FilterIframe"+clvp.ctx.ctxId);
				var newIfrms=div.getElementsByTagName("IFRAME");
				var idx;
				var newFilterIfrm=null;
				for (idx=0; idx < newIfrms.length; idx++)
				{
					if (newIfrms[idx].id=="FilterIframe"+clvp.ctx.ctxId)
					{
						newFilterIfrm=newIfrms[idx];
						break;
					}
				}
				if (oldFilterIfrm !=null && newFilterIfrm !=null)
				{
					var td=oldFilterIfrm.parentNode;
					td.removeChild(oldFilterIfrm);
					td.appendChild(newFilterIfrm);
				}
				document.body.appendChild(div);
				eval("ctx"+clvp.ctx.ctxId+".clvp=clvp;");
				var rgscripts=ExpColGroupScripts(strInner);
				var ppid='previewpanetable'+clvp.ctx.ctxId;
				var ppold=document.getElementById(ppid);
				if (ppold !=null)
					ppold.id='';
				clvp.tab.id="";
				var hid=document.getElementById("hidRootFolder");
				if (hid !=null)
				{
					clvp.rootFolder=hid.value;
					if (hid.value.indexOf('?') >=0)
						debugger;
				}
				var hidFolderGuid=document.getElementById("hidRootFolderGuid");
				if (hidFolderGuid !=null)
					clvp.rootFolderGuid=hidFolderGuid.value;
				var tabs=GetElementsByName(tid);
				if (tabs.length==0)
				{
					if (tid=="onetidDoclibViewTbl0")
						tabs=GetElementsByName(clvp.ctx.listName+"-"+clvp.ctx.view);
					else
						tabs=GetElementsByName("onetidDoclibViewTbl0");				
				}
				var tabNew=null;
				var pagNew=document.getElementById("bottomPagingCell");
				var trNew=null;
				if (tabs.length==1)
					tabNew=tabs[0];
				else
				{
					var i;
					for (i=0; i < tabs.length; i++)
					{
						tabNew=tabs[i];
						var divNew=clvp.FindWebPartDiv(tabNew);
						if (divNew==div)
							break;
					}
					if (i==tabs.length)
						tabNew=null;
				}
				if (tabNew==null)
				{
					SwapNode(clvp.tab, div);
					div.style.visibility="visible";
					return;
				}
				if (tabNew.className=="ms-emptyView")
				{
					trNew=GetAncestor(tabNew, "TR");
					trNew=trNew.nextSibling;
				}
				var groupRender=false;
				if (clvp.tBody !=null)
				{
					groupRender=true;
					if(clvp.tBody.getAttribute("isLoaded") !=null)
					{
						clvp.tBody.setAttribute("isLoaded", "true");
						clvp.tab.id=tid;
						if (!clvp.tab.onmouseover)
							clvp.tab.onmouseover=clvp.ctx.TableMouseoverHandler;
						if (clvp.ctx.SelectAllCbx && !clvp.ctx.SelectAllCbx.onfocus)
							clvp.ctx.SelectAllCbx.onfocus=clvp.ctx.TableCbxFocusHandler;
						if (!clvp.ctx.StateInitDone)
							ctxInitItemState(clvp.ctx);
						var objChildren=clvp.tBody.childNodes;
						for(var i=objChildren.length-1; i >=0; i--)
						{
							var objToRemove=objChildren.item(i);
							if (objToRemove.tagName=="TR" && ItemIsSelectable(objToRemove))
								clvp.ctx.TotalListItems--;
							clvp.tBody.removeChild(objToRemove);
						}
						var selectableNodes=0;
						var tBodyArray=tabNew.getElementsByTagName("TBODY");
						if (tBodyArray.length >=1)
						{
							objChildren=tBodyArray[0].childNodes;
							var node=null;
							for(var i=objChildren.length-1; i >=1; i--)
							{
								var objToInsert=objChildren.item(i);
								if (objToInsert.tagName=="TR" && ItemIsSelectable(objToInsert))
								{
									selectableNodes++;
									clvp.ctx.TotalListItems++;
								}
								node=clvp.tBody.insertBefore(objToInsert, node);
							}
							if (pagNew !=null)
							{
								var pagingTable=GetAncestor(pagNew, "TABLE");
								var curPagTab=clvp.tBody.nextSibling;
								if (curPagTab==null || curPagTab.tagName !="TBODY" ||
									curPagTab.id !=clvp.tBody.id+"page" || curPagTab.firstChild==null ||
									curPagTab.firstChild.tagName !="TR")
								 {
									curPagTab=document.createElement("TBODY");
									curPagTab.id=clvp.tBody.id+"page";
									curPagTab=clvp.tBody.parentNode.insertBefore(curPagTab, clvp.tBody.nextSibling);
									var tr=document.createElement("TR");
									tr=curPagTab.appendChild(tr);
								 }		
								 var trNode=curPagTab.firstChild;
								 if (trNode.firstChild !=null)
									trNode.removeChild(trNode.firstChild);
								 pagNew.colSpan=100;								
								 pagNew.id=pagNew.id+clvp.wpq.substr(7)+clvp.tBody.id;							
								 pagNew=trNode.appendChild(pagNew);
							}
							clvp.tBody.setAttribute("selectableRows", selectableNodes);
							UpdateCtxLastSelectableRow(clvp.ctx, clvp.tab);
						}
						clvp.InvalidateEcbInfo();
						clvp.ResetSelection();
					}
				}
				document.body.removeChild(div);
				if (pagNew !=null)
				{
					var tab=clvp.pagingTab;
					clvp.pagingTab=pagNew;
					clvp.RehookPaging();
					clvp.pagingTab=tab;
				}
				if (typeof(ProcessImn) !="undefined")
				{
					imnCount=0;
					bIMNOnloadAttached=false;
					ProcessImn();
				}
				if (groupRender)
				{
					clvp.tBody=null;
					g_ExpGroupInProgress=false;
					g_ExpInitializing=false;
					if (typeof g_ExpGroupSeparateQueues !="undefined" && g_ExpGroupSeparateQueues)
					{
						if (g_ExpGroupXSLTQueue.length > 0)
						{
							ExpGroupFetchData(g_ExpGroupXSLTQueue.shift(), "true");
						}
					}
					else
					{
						if (g_ExpGroupQueue.length > 0)
						{
							ExpGroupFetchData(g_ExpGroupQueue.shift(), (typeof(clvp.ctx.isXslView) !="undefined" && clvp.ctx.isXslView) ? "true" : null);
						}
					}
				}
				if (!g_ExpGroupInProgress && clvp.queueEcbInfo.length > 0)
				{
					clvp.EnsureEcbInfo(null, null, clvp.queueEcbInfo.shift());
				}
				if((clvp !=null) && (clvp.focusInfo !=null))
				{
					if ((clvp.focusInfo.focusInCLVPTab !=null) && (clvp.focusInfo.focusInCLVPTab==true))
					{
						var focusTabl=clvp.tab;
						var focusBack=null;
						if ((focusTabl !=null) && (clvp.focusInfo.tagName !=null) && (clvp.focusInfo.id !=null))
						{
							var focusArray=focusTabl.getElementsByTagName(clvp.focusInfo.tagName);
							for (var i=0; i < focusArray.length; i++)
							{
								if(focusArray[i].id==clvp.focusInfo.id)
								{
									focusBack=focusArray[i];
									break;
								}
							}
						}
						if((focusBack !=null) && (focusBack.tagName !="A"))
			{
			    var anchorList=focusBack.getElementsByTagName("A");
			    var anchorListLen=anchorList.length;
			    if (anchorListLen > 0)
				focusBack=anchorList[anchorListLen-1];
			}
						if(focusBack !=null)
						{
							if(focusBack.setActive !=null)
								focusBack.setActive();
							else if(focusBack.focus !=null)
								focusBack.focus();
						}
						focusAcc=null;
					}
				}
			}
		}
	req.send(additionalPostData);
}
CLVP.prototype.RefreshCurrent=CLVPRefreshCurrent;
function CLVPRefreshCurrent(fetchUrl)
{ULSfCf:;
	var url=document.URL;
	STSNavigate(url);
}
CLVP.prototype.GetQueryString=CLVPGetQueryString;
function CLVPGetQueryString()
{ULSfCf:;
	if (this.tab !=null && this.tab.getAttribute("FilterLink") !=null)
		return this.tab.getAttribute("FilterLink");
	else
		return document.URL;
}
CLVP.prototype.RefreshEcbInfo=CLVPRefreshEcbInfo;
function CLVPRefreshEcbInfo(strGroupName)
{ULSfCf:;
	var url=this.GetQueryString();
	url=FixUrlFromClvp2(this, url, false);
	this.isEcbInfo=true;
	this.strGroupName=strGroupName;
	var clvp=this;
	this.RefreshPagingEx(url, false, "EcbView");
}
CLVP.prototype.CacheEcbInfo=CLVPCacheEcbInfo;
function CLVPCacheEcbInfo(strHtml)
{ULSfCf:;
	if (this.ctx.HasRelatedCascadeLists==1 &&
		this.ctx.CascadeDeleteWarningMessage==null)
	{
		var cdBeginTag='<CascadeDeleteWarningMessage>';
		var cdEndTag='</CascadeDeleteWarningMessage>';
		if (strHtml.startsWith(cdBeginTag)) {
			var idx=strHtml.indexOf(cdEndTag);
			if (idx !==-1) {
				this.ctx.CascadeDeleteWarningMessage=strHtml.substring(cdBeginTag.length, idx);
				strHtml=strHtml.substring(idx+cdEndTag.length);
			}
		}
	}
	var div=document.createElement("DIV");
	div.innerHTML=strHtml;
	div.style.display='none';
	var tbs=div.getElementsByTagName("TABLE");
	var tb;
	var i;
	var tbOriginal=null;
	if (this.strGroupName !=null)
	{
		var oid="ecbtab_ctx"+this.ctx.ctxId;
		var tbOriginal=document.getElementById(oid);
	}
	for (i=0; i < tbs.length; i++)
	{
		tb=tbs[i];
		if (this.tab !=null && tb.id==this.tab.id)
		{
			if (tbOriginal==null)
				tb.id="ecbtab_ctx"+this.ctx.ctxId;
			else
				tb.id="ecbtab_ctx"+this.ctx.ctxId+"_"+this.strGroupName;
			if (tb.rows.length > 0 && (!tb.rows[0].className.indexOf('ms-viewheadertr')))
				tb.deleteRow(0);
			tb.style.display='none';
			this.tab.appendChild(tb);
			var dict;
			if (tbOriginal==null)
				dict=[];
			else
				dict=tbOriginal.dict;
			var ds=tb.getElementsByTagName("DIV");
			var j;
			for (j=0; j < ds.length; j++)
			{
				var d=ds[j];
				if (d.id !="")
					dict[d.id]=d;
			}
			if (tbOriginal==null)
				tb.dict=dict;
			if (this.strGroupName !=null)
				this.CacheGroupName(this.strGroupName);
			break;
		}
	}
	if (this.fnEcbCallback !=null && this.queueEcbInfo.length==0)
	{
		this.fnEcbCallback(tb);
		this.fnEcbCallback=null;
	}
}
CLVP.prototype.EnsureEcbInfo=CLVPEnsureEcbInfo;
function CLVPEnsureEcbInfo(fn, args, strGroupName)
{ULSfCf:;
	var oid="ecbtab_ctx"+this.ctx.ctxId;
	var o=document.getElementById(oid);
	if (o==null && this.tab !=null && this.tab.parentNode==null)
	{
		var i;
		for (i=0; i < this.tab.childNodes.length; i++)
		{
			var child=this.tab.childNodes[i];
			if (child.id==oid)
				o=child;
		}
	}
	if (o && strGroupName !=null)
	{
		if (!this.IsInGroupCache(strGroupName))
			o=null;
	}
	if (o !=null)
	{
		if (fn && this.NoOutstandingECBRequests())
			fn(args);
		return o;
	}
	if (fn !=null && this.fnEcbCallback==null)
		this.fnEcbCallback=function() {ULSfCf:;fn(args);};
	if (this.isEcbInfo || this.bRequestOutstanding)
	{
		if ((!this.isEcbInfo) || (strGroupName !=null && strGroupName !=this.strGroupName))
			this.EnqueueEcbInfoRequest(strGroupName);
		return null;
	}
	this.RefreshEcbInfo(strGroupName);
	return null;
}
CLVP.prototype.InvalidateEcbInfo=CLVPInvalidateEcbInfo;
function CLVPInvalidateEcbInfo()
{ULSfCf:;
	var oid="ecbtab_ctx"+this.ctx.ctxId;
	var o=document.getElementById(oid);
	if (o !=null)
	{
		this.tab.removeChild(o);
		this.DeleteGroupNameCache();
	}
}
CLVP.prototype.GetEcbInfo=CLVPGetEcbInfo;
function CLVPGetEcbInfo(iid)
{ULSfCf:;
	var tab=this.EnsureEcbInfo();
	if (tab !=null)
	{
		if (tab.dict !=null)
			return tab.dict[iid];
	}
	return null;
}
CLVP.prototype.SwitchToEdit=CLVPSwitchToEdit;
function CLVPSwitchToEdit()
{ULSfCf:;
	var url=document.URL;
	url=FixUrlFromClvp2(this, url, false);
	this.RefreshPagingEx(url, false, "JsGrid");
}
CLVP.prototype.EnsureChangeContext=CLVPEnsureChangeContext;
function CLVPEnsureChangeContext()
{ULSfCf:;
	if (this.cctx==null)
	{
		this.cctx=new SP.ClientContext(null);
	}
}
CLVP.prototype.DeleteItemCore=CLVPDeleteItemCore;
function CLVPDeleteItemCore(itemId, fsobjtype)
{ULSfCf:;
	var isDoclib=this.ctx.listBaseType==1;
	this.EnsureChangeContext();
	var itm=null;
	if (typeof(this.rgehs)=="undefined")
		this.rgehs=[];
	var ehs;
	var iehs;
	ehs=new SP.ExceptionHandlingScope(this.cctx);
	this.rgehs.push(ehs);
	iehs=ehs.startScope();
	this.cctx.get_pendingRequest().set_navigateWhenServerRedirect(true);
	var list=this.cctx.get_web().get_lists().getById(this.ctx.listName);
	if (this.ctx.ExternalDataList)
		itm=list.getItemById(itemId.toString());
	else if (fsobjtype==1)
		itm=list.getItemById(parseInt(itemId));
	else
		itm=list.getItemById(parseInt(itemId));
	if (isDoclib)
	{
		itm.retrieve("FileLeafRef");
		ehs.itmContext=itm;
	}
	var fRecycle=this.ctx.RecycleBinEnabled && !this.ctx.ExternalDataList;
	if (fRecycle)
		itm.recycle();
	else
		itm.deleteObject();
	this.changePending=true;
	iehs.dispose();
}
CLVP.prototype.CheckoutItem=CLVPCheckoutItem;
function  CLVPCheckoutItem(itemId, fsobjtype)
{ULSfCf:;
	this.EnsureChangeContext();
	if (typeof(this.rgehs)=="undefined")
		this.rgehs=[];
	var ehs;
	var iehs;
	var itm=null;
	if (fsobjtype !=0)
		return;
	ehs=new SP.ExceptionHandlingScope(this.cctx);
	this.rgehs.push(ehs);
	iehs=ehs.startScope();
	itm=this.cctx.get_web().get_lists().getById(this.ctx.listName).getItemById(itemId);
	itm.retrieve("FileLeafRef");
	ehs.itmContext=itm;
	var fileObj=itm.get_file();
	fileObj.checkOut();
	iehs.dispose();
	this.changePending=true;
}
CLVP.prototype.DiscardCheckoutItem=CLVPDiscardCheckoutItem;
function  CLVPDiscardCheckoutItem(itemId, fsobjtype)
{ULSfCf:;
	this.EnsureChangeContext();
	if (typeof(this.rgehs)=="undefined")
		this.rgehs=[];
	var itm=null;
	var ehs;
	var iehs;
	if (fsobjtype !=0)
		return;
	ehs=new SP.ExceptionHandlingScope(this.cctx);
	this.rgehs.push(ehs);
	iehs=ehs.startScope();
	itm=this.cctx.get_web().get_lists().getById(this.ctx.listName).getItemById(itemId);
	itm.retrieve("FileLeafRef");
	ehs.itmContext=itm;
	var fileObj=itm.get_file();
	var ecb=this.GetEcbInfo(itemId);
	if (ecb !=null && ecb.getAttribute("COut")=='1')
	{
		try
		{
			var url=this.ctx.HttpRoot+ecb.getAttribute("Url");
			var stsOpen=StsOpenEnsureEx("SharePoint.OpenDocuments.3");
			if (stsOpen !=null)
			{
				stsOpen.DiscardLocalCheckout(url);
			 }
		}
		catch (e)
		{
		}
	}
	else
	{
		fileObj.undoCheckOut();
	}
	this.changePending=true;
	iehs.dispose();
}
CLVP.prototype.CheckinItem=CLVPCheckinItem;
function CLVPCheckinItem(itemId, fsobjtype, args)
{ULSfCf:;
	this.EnsureChangeContext();
	if (typeof(this.rgehs)=="undefined")
		this.rgehs=[];
	var itm=null;
	var ehs;
	var iehs;
	if (fsobjtype !=0)
		return;
	ehs=new SP.ExceptionHandlingScope(this.cctx);
	this.rgehs.push(ehs);
	iehs=ehs.startScope();
	itm=this.cctx.get_web().get_lists().getById(this.ctx.listName).getItemById(itemId);
	itm.retrieve("FileLeafRef");
	ehs.itmContext=itm;
	var fileObj=itm.get_file();
	var ecb=this.GetEcbInfo(itemId);
	if (ecb !=null && ecb.getAttribute("COut")=='1')
	{
		try
		{
			var url=this.ctx.HttpRoot+ecb.getAttribute("Url");
			var stsOpen=StsOpenEnsureEx("SharePoint.OpenDocuments.3");
			if (stsOpen !=null)
			{
				if (args.kco)
					stsOpen.CheckinDocument(url, args.cit, args.cmt, true);
				else
					stsOpen.CheckinDocument(url, args.cit, args.cmt);
			}
		}
		catch (e)
		{
		}
	}
	else
	{
		fileObj.checkIn(args.cmt, args.cit);
		if (args.kco)
			fileObj.checkOut();
		this.changePending=true;
	}
	iehs.dispose();
}
CLVP.prototype.ManageCopies=CLVPManageCopies;
function  CLVPManageCopies(itemId, fsobjtype)
{ULSfCf:;
	if (fsobjtype !=0)
		return;
	var ecb=this.GetEcbInfo(itemId);
	if (ecb !=null &&  ecb.getAttribute("Url") !=null)
	{
		var url=this.ctx.HttpRoot+"/_layouts"+			"/managecopies.aspx?ItemUrl="+ecb.getAttribute("Url")+			"&Source="+GetSource();
		var ctxT=window["ctx"+this.ctx.ctxId];
		if (ctxT !=null && ctxT.clvp !=null)
		{
			var clvp=ctxT.clvp;
			var urlT=FixUrlFromClvp(clvp, url);
			if (FV4UI())
			{
				clvp.ShowPopup(urlT);
				return;
			}
		}
		STSNavigate(url);
	}
}
CLVP.prototype.ShowErrorDialog=CLVPShowErrorDialog;
function CLVPShowErrorDialog(callback)
{ULSfCf:;
	var i;
	var rgerr=[];
	var okButton=null;
	var firstExceptionFound=false;
	for (i in this.rgehs)
	{
		var ehs=this.rgehs[i];
		if (ehs.get_hasException())
		{
			var errorClass="s4-dlg-err-itm";
			if (!firstExceptionFound)
			{
				errorClass="s4-dlg-err-firstitm"
				firstExceptionFound=true;
				rgerr.push(SP.Res.dlgTitleError);
			}
			var emsg=ehs.get_errorMessage();
			rgerr.push("<div class=\""+errorClass+"\">");
			if (typeof(ehs.itmContext) !="undefined")
			{
				try
				{
					rgerr.push("<div class=\"s4-dlg-err-itmName\">");
					rgerr.push(ehs.itmContext.get_item("FileLeafRef"));
					rgerr.push("</div>");
				}
				catch (e)
				{
					rgerr.push("</div>");
				}
			}
			rgerr.push("<div class=\"s4-dlg-err-itmMsg\">");
			rgerr.push(emsg);
			rgerr.push("</div>");
			rgerr.push("</div>");
		}
	}
	if (firstExceptionFound)
	{
		rgerr.push("<div id='dlgDivButton'><button id='ms-OKBtnDismissDlg' class='ms-ButtonHeightWidth' onclick='DismissErrDlg(this)'>");
		rgerr.push(SP.Res.okButtonCaption);
		rgerr.push("</button></div>");
	}
	var str=rgerr.join("");
	if (str.length > 0)
	{
		var divElem=document.createElement("DIV");
		divElem.className="s4-dlg-err";
		divElem.innerHTML=str;
		var dopt={html:divElem, title:SP.Res.errorDialogTitleText, dialogReturnValueCallback:callback};
		var dlg=new SP.UI.ModalDialog.showModalDialog(dopt);
		okButton=document.getElementById('ms-OKBtnDismissDlg');
		if (okButton)
			okButton.focus();
	}
	else
	{
		callback();
	}
	this.rgehs=[];
}
CLVP.prototype.InplViewUrl=CLVPInplViewUrl;
function CLVPInplViewUrl()
{ULSfCf:;
	if (this.inplUrl !=null)
		return this.inplUrl;
	var rg=new Array();	
	var str=escapeUrlForCallback(this.ctx.HttpRoot);
	rg.push(str);
	if (str[str.length - 1] !="/")
		rg.push("/");
	rg.push("_layouts/inplview.aspx?List=");
	rg.push(this.ctx.listName);
	if (this.ctx.view !=null)
	{
		rg.push("&View=");
		rg.push(this.ctx.view);
	}
	rg.push("&ViewCount=");
	rg.push(this.ctx.ctxId);
	rg.push("&ListViewPageUrl=");
	var curl=new CUrl(document.URL);
	rg.push(escapeProperlyCore(curl.path, true));
	if (typeof(this.ctx.isXslView) !="undefined" && this.ctx.isXslView)
	{
		rg.push("&IsXslView=TRUE");
	}
	if (typeof(this.ctx.overrideSelectCommand) !="undefined")
	{
		rg.push("&HasOverrideSelectCommand=TRUE");
	}
	var arrayField=null;
	if (typeof(this.ctx.overrideFilterQstring) !="undefined")
	{
		arrayField=this.ctx.overrideFilterQstring.match("OverrideScope=[^&]*");
	}
	if (typeof(this.ctx.overrideScope) !="undefined" && arrayField==null)
	{
		rg.push("&OverrideScope="+this.ctx.overrideScope);
	}
	if (typeof(this.ctx.overrideFilterQstring) !="undefined")
	{
		rg.push("&");
		rg.push(this.ctx.overrideFilterQstring);
	}
	this.inplUrl=rg.join("");
	delete rg;
	return this.inplUrl;
}
CLVP.prototype.InplViewUrlTrim=CLVPInplViewUrlTrim;
function CLVPInplViewUrlTrim(strInputInplViewUrl)
{ULSfCf:;
	var returnValue=""
	if(strInputInplViewUrl)
	{
		if (typeof(this.ctx.overrideFilterQstring) !="undefined")
		{
			returnValue=strInputInplViewUrl.substr(this.InplViewUrl().length - this.ctx.overrideFilterQstring.length);
		}
		else
		{
			returnValue=strInputInplViewUrl.substr(this.InplViewUrl().length+1);
		}
	}
	return returnValue;
}
CLVP.prototype.ShowPopup=CLVPShowPopup;
function CLVPShowPopup(url)
{ULSfCf:;
	MenuHtc_hide();
	if (typeof(this.fnOnCommitPopup) !="undefined" && this.fnOnCommitPopup !=null)
		OpenPopUpPage(url, this.fnOnCommitPopup);
	else
	{
		OpenPopUpPage(url, RefreshPage);
	}
	return false;
}
CLVP.prototype.ValidateField=CLVPValidateField;
function CLVPValidateField(record, fieldKey, callback, newval)
{ULSfCf:;
	var str=this.FieldCommand("FldValidate", record, fieldKey, callback, newval);
	var ve={ "callback" : callback, "newval" : newval, "strCmd" : str };
	if (this.qvalidate==null)
		this.qvalidate=[];
	this.qvalidate.push(ve);
	if  (!this.isValidating)
	{
		this.isValidating=true;
		this.RefreshCore(str);
	}
}
CLVP.prototype.FieldCommand=CLVPFieldCommand;
function CLVPFieldCommand(cmd, record, fieldKey, callback, newval)
{ULSfCf:;
	var rg=[];
	rg.push(this.InplViewUrl());
	rg.push("&Cmd=");
	rg.push(cmd);
	rg.push("&Field=");
	rg.push(fieldKey);
	rg.push("&FieldValue=");
	var prop=record.GetProp(fieldKey);
	var v;
	var col=this.gridParam.tableViewParams.columns.GetColumnByKey(fieldKey);
	var fld=jsGridParams.tableViewParams.gridFieldMap[fieldKey];
	var pt=prop==null ? fld.GetPropType() : prop.propType;
	if (newval !=null)
	{
		if (pt.ID=="SPUser")
		{
			var rgUsers=newval.split(";");
			var i;
			for (i=0; i < rgUsers.length; i++)
			{
				if (i > 0)
					rg.push(";%23");
				rg.push("-1;%23");
				rg.push(rgUsers[i]);
			}
		}
		else
			rg.push(newval);
	}
	else if (prop !=null && prop.HasDataValue())
	{
		v=prop.GetData();
		if (prop.propType.ID=="SPUser")
			v=v.substr(0, v.indexOf(";#"));
		rg.push(v);
	}
	else if (prop !=null && prop.HasLocalizedValue())
	{
		if (prop.propType.ID=="SPUser")
			rg.push("-1;%23");
		rg.push(prop.GetLocalized());
	}
	var strUrl=rg.join('');
	return strUrl;
}
CLVP.prototype.IsInGroupCache=CLVPIsInGroupCache;
function CLVPIsInGroupCache(strGroupName)
{ULSfCf:;
	if (this.strGroupCache==null)
		return false;
	return (this.strGroupCache.indexOf(strGroupName+"$") !=-1);
}
CLVP.prototype.CacheGroupName=CLVPCacheGroupName;
function CLVPCacheGroupName(strGroupName)
{ULSfCf:;
	if (this.strGroupCache==null)
	{
		this.strGroupCache=strGroupName+"$";
	}
	else
	{
		this.strGroupCache=this.strGroupCache+strGroupName+"$";
	}
}
CLVP.prototype.DeleteGroupNameCache=CLVPDeleteGroupNameCache;
function CLVPDeleteGroupNameCache()
{ULSfCf:;
	if (this.strGroupCache==null)
		return;
	var ichStart=0;
	var ichNext;
	ichNext=this.strGroupCache.indexOf("$", ichStart);
	while (ichNext !=-1)
	{
		var strGroupName=this.strGroupCache.substring(ichStart, ichNext);
		var oid="ecbtab_ctx"+this.ctx.ctxId+"_"+strGroupName;
		var o=document.getElementById(oid);
		if (o)
		{
			this.tab.removeChild(o);
		}
		ichStart=ichNext+1;
		ichNext=this.strGroupCache.indexOf("$", ichStart);
	}
	this.strGroupCache=null;
}
CLVP.prototype.EnqueueEcbInfoRequest=CLVPEnqueueEcbInfoRequest;
function CLVPEnqueueEcbInfoRequest(strGroupName)
{ULSfCf:;
	var i;
	for (i=0; i < this.queueEcbInfo.length; i++)
	{
		if (this.queueEcbInfo[i]==strGroupName)
			return;
	}
	this.queueEcbInfo.push(strGroupName);
}
CLVP.prototype.NoOutstandingECBRequests=CLVPNoOutstandingECBRequests;
function CLVPNoOutstandingECBRequests()
{ULSfCf:;
	if (this.isEcbInfo)
		return false;
	if (this.queueEcbInfo.length > 0)
		return false;
	return true;
}
function SetFocusBack(dialogResult)
{ULSfCf:;
	if ((dialogResult==0) || ((focusAcc !=null) && (focusAcc.focusInCLVPTab !=null) && (focusAcc.focusInCLVPTab !=true)))
	{
		var focusBack=null;
		if ((focusAcc !=null) && (focusAcc.elem !=null))
			focusBack=focusAcc.elem;
		if ((focusBack !=null) && (focusBack.tagName !="A"))
	{
	    var anchorList=focusBack.getElementsByTagName("A");
	    var anchorListLen=anchorList.length;
	    if (anchorListLen > 0)
		focusBack=anchorList[anchorListLen-1];
	}
		if(focusBack !=null)
		{
			if(focusBack.setActive !=null)
				focusBack.setActive();
			else if(focusBack.focus !=null)
				focusBack.focus();
		}
		else if(typeof(SP.Ribbon) !="undefined" && SP.Ribbon && SP.Ribbon.PageManager && focusAcc !=null && focusAcc.fromRibbon)
		{
			SP.Ribbon.PageManager.get_instance().restoreFocusToRibbon();
		}
	focusAcc=null;
	}
}
SPBoolean=function() {};
SPBoolean.prototype={
	ID: "SPBoolean",
	BeginValidateNormalizeConvert: function(recordKey, fieldKey, newValue, bIsLocalized, fnCallback)
	{ULSfCf:;
		return {isValid:true, dataValue:null, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:false};
	},
	FromDynamicUpdate: function(boolObj, originalProp)
	{ULSfCf:;
	   return {dataValue:!!boolObj, locValue:!!boolObj};
	},
	GetBool: function(prop)
	{ULSfCf:;
		var val=prop.HasLocalizedValue() ? prop.GetLocalized() : prop.HasDataValue() ? prop.GetData() : null;
		return !!(1 * val);
	}
};
SPNumber=function () {};
SPNumber.prototype={
	ID: "SPNumber",
	BeginValidateNormalizeConvert: function(recordKey, fieldKey, newValue, bIsLocalized, fnCallback)
	{ULSfCf:;
		return {isValid:true, dataValue:null, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:false};
	},
	FromDynamicUpdate: function(numObj, originalProp)
	{ULSfCf:;
	   return {dataValue:numObj, locValue:numObj};
	}
};
SPChoice=function () {};
SPChoice.prototype={
	ID: "SPChoice",
	BeginValidateNormalizeConvert: function(recordKey, fieldKey, newValue, bIsLocalized, fnCallback)
	{ULSfCf:;
		return {isValid:true, dataValue:null, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:false};
	},
	FromDynamicUpdate: function(choiceObj, originalProp)
	{ULSfCf:;
	   return {dataValue:choiceObj, locValue:choiceObj};
	},
	GetItems: function()
	{ULSfCf:;
		debugger;
		return null;
	}
};
SPIcon=function() {}
SPIcon.prototype={
	ID: "SPIcon",
	BeginValidateNormalizeConvert: function(recordKey, fieldKey, newValue, bIsLocalized, fnCallback)
	{ULSfCf:;
		return {isValid:true, dataValue:null, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:false};
	},
	FromDynamicUpdate: function(imgObj, originalProp)
	{ULSfCf:;
	   return {dataValue:imgObj, locValue:imgObj};
	},
	GetImageSource: function(record, prop)
	{ULSfCf:;
		var str=prop;
		if (str==null)
			return "";
		str=str.substr(0, str.indexOf("|"));
		if (str.length <=1)
			return "";
		return "/_layouts/images/"+str;
	}
};
SPUrl=function () {};
SPUrl.prototype={
	ID: "SPUrl",
	BeginValidateNormalizeConvert: function(recordKey, fieldKey, newValue, bIsLocalized, fnCallback)
	{ULSfCf:;
		if (bIsLocalized)
			return {isValid:true, dataValue:null, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:false};
		else
			return {isValid:true, dataValue:newValue, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:true};
	},
	FromDynamicUpdate: function(numObj, originalProp)
	{ULSfCf:;
	   return {dataValue:numObj, locValue:numObj};
	}
};
SPUser=function () {};
SPUser.prototype={
	ID: "SPUser",
	BeginValidateNormalizeConvert: function(recordKey, fieldKey, newValue, bIsLocalized, fnCallback)
	{ULSfCf:;
		if (bIsLocalized)
		{
			var clvp=this.clvp;
			var record=clvp.tc.GetCachedRecord(recordKey);
			clvp.ValidateField(record, fieldKey, fnCallback, newValue);
			return null;
		}
		else
		{
			return {isValid:true, dataValue:newValue, normalizedLocValue:newValue, hasLocValue:true, hasDataValue:true};
		}
	},
	FromDynamicUpdate: function(numObj, originalProp)
	{ULSfCf:;
	   return {dataValue:numObj, locValue:numObj};
	}
};
function ExpColGroupScripts(strHtml)
{ULSfCf:;
	var rgRet=new Array();
	var re=/<script type="text\/javascript">ExpCollGroup\('[^']*',\s*'[^']*'\);<\/script>/g;
	var rg=re.exec(strHtml);
	while (rg !=null)
	{
		var str=rg[0];
		var ich=str.indexOf("ExpCollGroup");
		var ichEnd=str.indexOf(";");
		rgRet.push(str.substring(ich, ichEnd+1));
		rg=re.exec(strHtml);
	}
	return rgRet;
}
function InitCLVPs()
{ULSfCf:;
	if (typeof(g_ViewIdToViewCounterMap) !="undefined")
	{
		var vid;
		for (vid in g_ViewIdToViewCounterMap)
		{
			var ctxT=window["ctx"+g_ViewIdToViewCounterMap[vid]];
			if (ctxT)
			{
				var clvp=new CLVP(ctxT);
				clvp.Init();
			}
		}
	}
}
function CLVPFromCtx(ctx)
{ULSfCf:;
	if (typeof(ctx.clvp) !="undefined")
		return ctx.clvp;
	return null;
}
function CLVPFromEventReal(evt)
{ULSfCf:;
	if (evt==null)
		return null;
	if (evt.fromRibbon && evt.currentCtx)
		return CLVPFromCtx(evt.currentCtx);
	var sender=GetEventSrcElement(evt);
	var tabTb=null;
	var tablv=null;
	var tabs=null;
	var oPopup=GetEventPopup(evt);
	if (oPopup !=null)
	{
		if (typeof(evt.currentCtx) !='undefined' &&evt.currentCtx !=null)
		{
			var ctxCur=window["ctx"+evt.currentCtx.ctxId];
			return CLVPFromCtx(ctxCur);
		}
		if (typeof(currentCtx) !="undefined" && currentCtx !=null)
		{
			return CLVPFromCtx(currentCtx);
		}
		if (typeof(ctxFilter) !="undefined" && ctxFilter !=null)
		{
			return CLVPFromCtx(ctxFilter);
		}
		var m=oPopup.master;
		if (m==null)
			return null;
		if (m.id !=null && m.id.indexOf("onetViewSelector_menu") > 0)
		{
			var idT=m.id.substr(0, m.id.indexOf("onetViewSelector_menu")+16);
			tabTb=GetAncestor(document.getElementById(idT), "TABLE");
		}
		else
		{
			tabTb=GetAncestor(m, "TABLE");
		}
	}
	else
	{
		tabTb=GetAncestor(sender, "TABLE");
	}
	while (tabTb !=null)
	{
		if (tabTb.className=="ms-menutoolbar")
			break;
		if (tabTb.className=="ms-listviewtable")
		{
			tablv=tabTb;
			tabTb=null;
			break;
		}
		tabTb=tabTb.parentNode;
		if (tabTb !=null)
			tabTb=GetAncestor(tabTb, "TABLE");
	}
	if (tabTb==null && tablv==null)
		return null;	
	if (tablv==null)
	{
	   var tab=tabTb.nextSibling;
	   while (tab !=null && (tab.nodeType !=1 || tab.tagName !="TABLE"))
			tab=tab.nextSibling;
		if (tab==null)
			return null;
		var tabs=tab.getElementsByTagName("TABLE");
		if (tabs.length==0)
			return null;
		tablv=tabs[0];
	}
	var clvp=CLVPFromCtx(tablv);
	if (clvp==null)
	{
		tabs=tab.getElementsByTagName("DIV");
		if (tabs.length==0)
			return null;
		tablv=tabs[0];
		clvp=CLVPFromCtx(tablv);
	}
	return clvp;
}
function SetUrlKeyValue(keyName, keyValue, bEncode, url)
{ULSfCf:;
	if (url==null)
		url=window.location.href+"";
	var val=keyValue;
	var curl=new CUrl(url);
	url=curl.query;
	if (bEncode)
		val=escapeProperly(val);
	if (url.indexOf(keyName+"=") < 0)
	{
		if (url.length > 1)
			url+="&";
		else if (url.length==0)
			url+="?";
		url+=keyName+"="+val;			
	}
	else
	{
		var re=new RegExp(keyName+"=[^&]*");
		url=url.replace(re, keyName+"="+val);
	}
	curl.query=url;
	return curl.ToString();
}
function FixUrlFromClvp(clvp, url)
{ULSfCf:;
	return FixUrlFromClvp2(clvp, url, true);
}
function FixUrlFromClvp2(clvp, url, fSetSource)
{ULSfCf:;
	var rootFolder=clvp.rootFolder;
	if ((rootFolder==null || rootFolder.length==0) && clvp.rgpaging==null && !clvp.isEditing)
		return url;
	if (rootFolder !=null && rootFolder.length > 0)
		if (url.toUpperCase().indexOf("LISTEDIT.ASPX")==-1)
			url=SetUrlKeyValue("RootFolder", rootFolder, true, url);
	if (fSetSource)
	{
		var src=GetSource2(null, clvp);
		url=SetUrlKeyValue("Source", src, true, url);
	}
	return url;
}
function STSNavigateToViewReal(evt, url)
{ULSfCf:;
	STSNavigate(url);
	return true;
}
function STSNavigate2Real(evt, url)
{ULSfCf:;
	STSNavigate(url);
	return true;
}
function GetSource2(defaultSource, clvp)
{ULSfCf:;
	var source=GetUrlKeyValue("Source");
	if (source=="")
	{
		if (defaultSource !=null && defaultSource !="")
			source=defaultSource;
		else
			source=window.location.href;
	}
	if (source.length > 0)
	{
		var curl=new CUrl(source);
		curl.hash="";
		source=curl.ToString();
	}
	if (clvp==null && typeof(currentCtx) !="undefined")
		clvp=(currentCtx !=null) ? currentCtx.clvp : null;
	if (clvp !=null && (clvp.rootFolder !=null || clvp.rgpaging !=null))
	{
		if (source !="")
		{
			if (clvp.rootFolder !=null && clvp.rootFolder !="")
				source=SetUrlKeyValue("RootFolder", clvp.rootFolder, true, source);
			if (clvp.rgpaging !=null)
			{
				var key;
				for (key in clvp.rgpaging)
				{
					source=SetUrlKeyValue(key, clvp.rgpaging[key], false, source);
				}
				if (clvp.rgpaging["PagedPrev"]==null)
				{
					source=RemoveUrlKeyValue("PagedPrev", source);
					source=RemoveUrlKeyValue("PageLastRow", source);
				}
				if (clvp.rgpaging["PageFirstRow"]==null)
				{
					source=RemoveUrlKeyValue("PageFirstRow", source);
				}
			}
		}
	}
	if (clvp !=null && clvp.isEditing && source !="")
		source=SetUrlKeyValue("JsGrid", "1", false, source)
	return STSPageUrlValidation(source);
}
function OnClickFilterV4(obj)
{ULSfCf:;
	var o=FindSTSMenuTable(obj, "CTXNum");
	if (o !=null && o.getAttribute("SortFields") !=null)
	{
		var strSortFields=o.getAttribute("SortFields");
		if (strSortFields.indexOf("?") > 0)
		{
			strSortFields=strSortFields.substr(strSortFields.indexOf("?")+1);
		}
		var url=GetUrlWithNoSortParameters(strSortFields);
		url=RemovePagingArgs(url);
		if (url.indexOf("?") < 0)
			url+="?";
		else
			url+="&";
		url=url+strSortFields;
		SubmitFormPost(url);
	}
	return false;
}
function HandleFilterReal(evt, url)
{ULSfCf:;
	SubmitFormPost(url);
	return false;
}
function InitAllClvps()
{ULSfCf:;
	if (FV4UI() || GroupCollapse())
		InitCLVPs();
}
function FixDroppedOrPastedClvps()
{ULSfCf:;
	if (typeof(g_ViewIdToViewCounterMap) !="undefined")
	{
		var vid;
		for (vid in g_ViewIdToViewCounterMap)
		{
			var ctxT=window["ctx"+g_ViewIdToViewCounterMap[vid]];
			if (ctxT)
			{
				var clvp=ctxT.clvp;
				if (clvp && (!clvp.tab || !clvp.tab.parentNode || 1 !=clvp.tab.parentNode.nodeType))
				{
					var clvp=new CLVP(ctxT);
					clvp.Init();
				}
			}
		}
	}
}
var focusAcc=null;
function GetFocusInfo(evt, clvp)
{ULSfCf:;
	var focusInfo=new Object();
	focusInfo.elem=null;
	focusInfo.id=null;
	focusInfo.tagName=null;
	focusInfo.focusInCLVPTab=null;
	focusInfo.fromRibbon=evt.fromRibbon;
	var focusBack=null;
	if (evt.target)
	{
		focusBack=evt.target;
	}
	else if (evt.srcElement)
	{
		focusBack=evt.srcElement;
	}
	if((typeof(evt.fakeEvent) !='undefined') && evt.fakeEvent)
	{
		if (focusBack.master !=null)
			focusBack=focusBack.master._oParent;
		if ((focusBack !=null) && (focusBack.tagName !="A"))
		{
			focusBack=focusBack.getElementsByTagName("A")[0];
		}
	}
	else
	{
		if (evt.fromRibbon !=true)
		{
			while((focusBack.tagName !="A") && (focusBack.tagName !="BODY"))
			{
				focusBack=focusBack.parentNode;
			}
		}
	}
	var focusBackId=null;
	if (focusBack !=null)
	{
		while((focusBack.id.length==0) && (focusBack.tagName !="BODY"))
		{
			focusBack=focusBack.parentNode;
		}
		focusBackId=focusBack.id;
	}
	var focusBackTag=null;
	if (focusBack !=null)
		focusBackTag=focusBack.tagName;
	var bFocusInCLVPTab=false;
	var focusTabl=null;
	if (clvp !=null)
		focusTabl=clvp.tab;
	if ((focusTabl !=null) && (focusBackTag !=null) && (focusBackId !=null))
	{
		var focusArray=focusTabl.getElementsByTagName(focusBackTag);
		for (var i=0; i < focusArray.length; i++)
		{
			if(focusArray[i].id==focusBackId)
			{
				bFocusInCLVPTab=true;
				break;
			}
		}
	}
	focusInfo.elem=focusBack;
	focusInfo.id=focusBackId;
	focusInfo.tagName=focusBackTag;
	focusInfo.focusInCLVPTab=bFocusInCLVPTab;
	focusAcc=focusInfo;
}
function ExpGroup(evt, groupName)
{ULSfCf:;
	tabBody=document.getElementById("tbod"+groupName+"_");
	if (tabBody !=null)
	{
		tabTb=GetAncestor(tabBody, "TABLE");
	}
	if (tabBody==null || tabBody.tagName !="TBODY" || tabTb==null || tabTb.clvp==null
		|| tabBody.getAttribute("isLoaded")==null)
		return;
	var viewCounter=groupName.substring(0, groupName.indexOf("-"));
	var lookupEntry=document.getElementById("GroupByCol"+viewCounter);
	var queryString="?";
	if (lookupEntry !=null)
	{
		queryString=lookupEntry.getAttribute("queryString");
		if (queryString.substring(queryString.length - 1)=="&")
			queryString=queryString.substr(0, queryString.length - 1);
	}
	queryString=RemoveOnlyPagingArgs(queryString);
	queryString+="&GroupString=";
	if (typeof g_ExpGroupSeparateQueues !="undefined" && g_ExpGroupSeparateQueues)
		queryString+=ExpGroupFetchGroupString(groupName);
	else
		queryString+=titlTbody.getAttribute("groupString");
	queryString+="&IsGroupRender=TRUE";
	tabTb.clvp.tBody=tabBody;
	tabTb.clvp.RefreshPaging(queryString, null);
}
function DeleteSelectedItems(ctx)
{ULSfCf:;
	ctx=FixupCtx(ctx);
	var clvp=ctx.clvp;
	Sys.Debug.assert(clvp.tab.parentNode !=null, "clvp.tab.parentNode !=null");
	var items=GetSelectedItemsDict(ctx);
	var ci=CountDictionary(items);
	if (ci > 0)
	{
		if (ContainsRecurrenceItem(items))
			return;
		var strConfirmMessage=L_STSRecycleConfirm_Text;
		if (!ctx.RecycleBinEnabled || ctx.ExternalDataList)
			strConfirmMessage=L_STSDelConfirm_Text;
		if (ctx.HasRelatedCascadeLists && ctx.CascadeDeleteWarningMessage !=null)
			strConfirmMessage=ctx.CascadeDeleteWarningMessage+strConfirmMessage;
		if (!confirm(strConfirmMessage))
			return;
	}
	var k
	for (k in items)
	{
		var itm=items[k];
		clvp.DeleteItemCore(itm.id, itm.fsObjType, false);
	}
	clvp.pendingItems=[];
	if (ci > 0)
	{
		var noti=L_Notification_Delete;
		var nid=addNotification(noti, true);
		clvp.cctx.executeQueryAsync(
		function () {ULSfCf:;
			if (typeof(clvp.rgehs) !="undefined")
			{
				if (clvp.rgehs.length==1 &&
					clvp.rgehs[0].get_serverErrorCode()==SP.ClientErrorCodes.redirect)
				{
					GoToPage(clvp.rgehs[0].get_serverErrorValue());
					return;
				}
				removeNotification(nid);
				clvp.ShowErrorDialog(RefreshOnDialogClose);
			}
			else
				RefreshPage(SP.UI.DialogResult.OK);
		},
		function () {ULSfCf:;
			removeNotification(nid);
			if (typeof(clvp.rgehs) !="undefined")
				clvp.ShowErrorDialog();
		});
	}
}
function ContainsRecurrenceItem(items) {ULSfCf:;
	for (var key in items) {
		var item=items[key];
		if (item && item.id &&
			(item.id.indexOf(".0.") !=-1 ||
			item.id.indexOf(".1.") !=-1 ||
			item.id.indexOf(".2.") !=-1))
			return true;
	}
	return false;
}
function CheckOutSingleItem(ctx, tab)
{ULSfCf:;
	ctx=FixupCtx(ctx);
	var strUrl=GetAttributeFromItemTable(tab, "Url", "ServerUrl");
	var rg=GetAttributeFromItemTable(tab, "Icon", "DocIcon").split("|");
	var strOpenCtrl=null;
	if (rg.length >=3)
		strOpenCtrl=rg[2];
	if (strOpenCtrl=="SharePoint.OpenDocuments")
		strOpenCtrl="SharePoint.OpenDocuments.3";
	var nid=addNotification(L_Notification_CheckOut, true, null, null, true );
	var promptResult=CheckoutDocument(ctx.HttpRoot, strUrl, strOpenCtrl);
	if (!promptResult)
		removeNotification(nid, true  );
}
function FixupCtx(ctx)
{ULSfCf:;
	if (ctx &&
		typeof(ctx.clvp)=="undefined" &&
		typeof(ctx.ctxId) !="undefined")
	{
		var ctxT=window["ctx"+ctx.ctxId];
		if (ctxT)
		{
			return ctxT;
		}
	}
	return ctx;
}
function CheckInSingleItemFromECB(evt, ctx, tab)
{ULSfCf:;
	ctx=FixupCtx(ctx);
	var clvp=ctx.clvp;
	GetFocusInfo(evt, clvp);
	CheckInSingleItem(ctx, tab);
}
function CheckInSingleItem(ctx, tab)
{ULSfCf:;
	var strUrl=GetAttributeFromItemTable(tab, "Url", "ServerUrl");
	if (strUrl !=null)
		strUrl=escapeProperly(unescapeProperly(strUrl));
	var str=ctx.HttpRoot+"/_layouts/checkin.aspx?"+"List="+ctx.listName+"&FileName="+strUrl;
	OpenPopUpPage(str, CheckInNotifyAndRefreshPage);
}
function CheckInNotifyAndRefreshPage(dialogResult)
{ULSfCf:;
	if (dialogResult==SP.UI.DialogResult.OK)
	{
		var noti=L_Notification_CheckIn;
		addNotification(noti, true);
	}
	RefreshPage(dialogResult);
}
function AttachFile(ctx)
{ULSfCf:;
	var clvp=ctx.clvp;
	var items=GetSelectedItemsDict(ctx);
	var ci=CountDictionary(items);
	var itm;
	var k;
	if (ci==1)
	{
		for (k in items)
		{
			var itm=items[k];
			if (itm.fsObjType==0)
			{
				var url=ctx.HttpRoot+"/_layouts/AttachFile.aspx?"+"ListId="+ctx.listName+					"&ItemId="+itm.id+"&Source="+GetSource();
				if (FV4UI())
					OpenPopUpPage(url, RefreshPage);
				else
					GoToPage(url);
			}
		}
	}
}
function ManageCopies(ctx)
{ULSfCf:;
	var clvp=ctx.clvp;
	var items=GetSelectedItemsDict(ctx);
	var ci=CountDictionary(items);
	var itm;
	var k;
	if (ci==1)
	{
		for (k in items)
		{
			var itm=items[k];
			clvp.ManageCopies(itm.id, itm.fsObjType);
		}
	}
}
function CheckoutSelectedItems(ctx)
{ULSfCf:;
	var clvp=ctx.clvp;
	var items=GetSelectedItemsDict(ctx);
	var ci=CountDictionary(items);
	var itm;
	var k;
	if (ci==1)
	{
		for (k in items)
		{
			itm=items[k];
			var ecbItemTable=clvp.GetEcbInfo(itm.id);
			if (ecbItemTable==null)
				FetchEcbInfo(ctx, itm.id, "DIV", CheckOutSingleItem);
			else
				CheckOutSingleItem(ctx, ecbItemTable);
			return;
		}
	}
	if (!confirm(L_CheckoutConfirm))
		return;
	for (k in items)
	{
		var itm=items[k];
		clvp.CheckoutItem(itm.id, itm.fsObjType);
	}
	if (ci > 0)
	{
		var noti=L_Notification_CheckOut;
		var nid=addNotification(noti, true);
		clvp.cctx.executeQueryAsync(
		function () {ULSfCf:;
			if (typeof(clvp.rgehs) !="undefined")
			{
				removeNotification(nid);
				clvp.ShowErrorDialog(RefreshOnDialogClose);
			}
			else
				RefreshPage(SP.UI.DialogResult.OK);
		},
		function () {ULSfCf:;
			removeNotification(nid);
			if (typeof(clvp.rgehs) !="undefined")
				clvp.ShowErrorDialog();
		});
	}
}
function DiscardCheckoutSelectedItems(ctx)
{ULSfCf:;
	ctx=FixupCtx(ctx);
	var clvp=ctx.clvp;
	var items=GetSelectedItemsDict(ctx);
	var ci=CountDictionary(items);
	var itm;
	var k;
	if (!confirm(L_DiscardCheckoutConfirm))
		return;
	for (k in items)
	{
		var itm=items[k];
		clvp.DiscardCheckoutItem(itm.id, itm.fsObjType);
	}
	if (ci > 0)
	{
		var noti=L_Notification_DiscardCheckOut;
		var nid=addNotification(noti, true);
		clvp.cctx.executeQueryAsync(
		function () {ULSfCf:;
			if (typeof(clvp.rgehs) !="undefined")
			{
				removeNotification(nid);
				clvp.ShowErrorDialog(RefreshOnDialogClose);
			}
			else
				RefreshPage(SP.UI.DialogResult.OK);
		},
		function () {ULSfCf:;
			removeNotification(nid);
			if (typeof(clvp.rgehs) !="undefined")
				clvp.ShowErrorDialog();
		});
	}
}
function CheckinSelectedItems(ctx)
{ULSfCf:;
	var clvp=ctx.clvp;
	var rg=[];
	var items=GetSelectedItemsDict(ctx);
	var ci=CountDictionary(items);
	var itm;
	var k;
	if (ci==1)
	{
		for (k in items)
		{
			itm=items[k];
			var ecbItemTable=clvp.GetEcbInfo(itm.id);
			if (ecbItemTable==null)
				FetchEcbInfo(ctx, itm.id, "DIV", CheckInSingleItem);
			else
				CheckInSingleItem(ctx, ecbItemTable);
			return;
		}
	}
	var str=clvp.ctx.HttpRoot;
	rg.push(str);
	if (str[str.length - 1] !="/")
		rg.push("/");
	rg.push("_layouts/checkin.aspx?List=");
	rg.push(clvp.ctx.listName);
	rg.push("&IsBulk=1");
	var fnCheckinWithEcb=function(args)
	{ULSfCf:;
		var ik;
		var ck=0;
		for (ik in items)
		{
			var itm=items[ik];
			clvp.CheckinItem(itm.id, itm.fsObjType, args);
			ck++;
		}
		if (ck > 0)
		{
			var noti=L_Notification_CheckIn;
			var nid=addNotification(noti, true);
			clvp.cctx.executeQueryAsync(
			function () {ULSfCf:;
				if (typeof(clvp.rgehs) !="undefined")
				{
					removeNotification(nid);
					clvp.ShowErrorDialog(RefreshOnDialogClose);
				}
				else
					RefreshPage(SP.UI.DialogResult.OK);
			},
			function () {ULSfCf:;
				removeNotification(nid);
				if (typeof(clvp.rgehs) !="undefined")
					clvp.ShowErrorDialog();
			});
		}
	};
	var fnOnCommit=function(dialogResult, args)
	{ULSfCf:;
		if (dialogResult==SP.UI.DialogResult.OK)
			clvp.EnsureEcbInfo(fnCheckinWithEcb, args, null);
		else
			RefreshPage(dialogResult);
	};
	OpenPopUpPage(rg.join(""), fnOnCommit);
}
function DismissErrDlg(b)
{ULSfCf:;
	var dlg=window.top.g_childDialog;
	if (dlg)
	{
		dlg.close(0 );
	}
}
function CanNavigateUp(ctx)
{ULSfCf:;
	if (ctx==null || ctx.clvp==null)
	{
		return false;
	}
	var curRootFolder=unescapeProperly(GetRootFolder2(ctx));
	if (curRootFolder==null || curRootFolder==unescapeProperly(ctx.listUrlDir))
	{
		return false;
	}
	return true;
}
function NavigateUp(ctx)
{ULSfCf:;
	if (!CanNavigateUp(ctx))
	{
		return;
	}
	var curRootFolder=unescapeProperly(GetRootFolder2(ctx));
	if (curRootFolder==null)
		return;
	var ich=curRootFolder.lastIndexOf("/");
	var parentFolder="";
	if (ich > 0)
	{
		parentFolder=curRootFolder.substr(0, ich);
	}
	else
	{
		return;
	}
	var url=document.URL;
	url=RemoveParametersFromUrl(url);
	url=url+"?RootFolder="+escapeProperly(parentFolder);
	STSNavigate(url);
}
InitAllClvps();
var inplview={
	CheckOutSingleItem : CheckOutSingleItem,
	InitAllClvps : InitAllClvps,
	HandleFilterReal : HandleFilterReal,
	OnClickFilterV4 : OnClickFilterV4,
	STSNavigate2Real : STSNavigate2Real,
	DeleteSelectedItems : DeleteSelectedItems,
	ExpGroup : ExpGroup,
	STSNavigateToViewReal: STSNavigateToViewReal,
	CheckInSingleItemFromECB : CheckInSingleItemFromECB
};
if( typeof(Sys) !="undefined" && Sys && Sys.Application ){
   Sys.Application.notifyScriptLoaded();
}
NotifyScriptLoadedAndExecuteWaitingJobs("inplview.js");

