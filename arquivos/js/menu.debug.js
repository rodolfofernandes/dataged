function ULS0ug(){var o=new Object;o.ULSTeamName="Microsoft SharePoint Foundation";o.ULSFileName="menu.debug.js";return o;}
// _lcid="1033" _version="14.0.4762"
// _localBinding
// Version: "14.0.4762"
// Copyright (c) Microsoft Corporation.  All rights reserved.
function FNEmpWz(wz)
{ULS0ug:;
	return (wz&&wz!="");
}
function AChld(p,c)
{ULS0ug:;
	if(p&&c)p.appendChild(c);
}
function AImg(mi,wzISrc,wzIAlt)
{ULS0ug:;
	if(!mi)return;
	if(FNEmpWz(wzISrc))mi.setAttribute("iconSrc",wzISrc);
	if(FNEmpWz(wzIAlt))
		mi.setAttribute("iconAltText",wzIAlt);
	else
		mi.setAttribute("iconAltText","");
}
function CMenu(wzID)
{ULS0ug:;
	var m=document.getElementById(wzID);
	if (m)
	{
		m._initialized=false;
		m._oContents=null;
		m.innerHTML="";
		return m;
	}
	m=document.createElement("MENU");
	if(!m)return null;
	if(wzID)m.id=wzID;
	m.className="ms-SrvMenuUI";
	AChld(document.body,m);
	return m;
}
function CMItm(wzType)
{ULS0ug:;
	var mi=document.createElement("SPAN");
	if(!mi)return null;
	mi.setAttribute("type",wzType);
	return mi;
}
function SetInnerText(oNode, wzText)
{ULS0ug:;
	if (document.createTextNode !=null)
	{
		var parsedText=document.createTextNode(wzText);
		oNode.innerHTML="";
		oNode.appendChild( parsedText );
	}
	else
	{
		oNode.innerText=wzText;
	}
}
function CMOpt(wzText,wzAct,wzISrc,wzIAlt,wzISeq,wzDesc)
{ULS0ug:;
	var mo=CMItm("option");
	if(!mo)return null;
	mo.setAttribute("text", wzText);
	mo.setAttribute("onMenuClick", wzAct);
	if (wzDesc)mo.setAttribute("description", wzDesc);
	AImg(mo,wzISrc,wzIAlt);
	if(FNEmpWz(wzISeq))mo.setAttribute("sequence",wzISeq);
	return mo;
}
function CAMOpt(p,wzText,wzAct,wzISrc,wzIAlt,wzISeq,wzDesc)
{ULS0ug:;
	var mo=CMOpt(wzText,wzAct,wzISrc,wzIAlt,wzISeq,wzDesc);
	if(!mo)return null;
	AChld(p,mo);
	return mo;
}
function CIMOpt(p,wzText,wzAct,wzISrc,wzIAlt,wzISeq)
{ULS0ug:;
	var mo=CMOpt(wzText,wzAct,wzISrc,wzIAlt,wzISeq);
	if(!mo)return null;
	for (var i=0;i<p.childNodes.length;i++)
	{
		var iSeq=p.childNodes[i].getAttribute("sequence");
		if (iSeq)
		{
			if (iSeq > wzISeq)
			{
				p.childNodes[i].parentNode.insertBefore(mo, p.childNodes[i]);
				return mo;
			}
		}
	}
	AChld(p,mo);
	return mo;
}
function CMSep()
{ULS0ug:;
	var sep=CMItm("separator");
	SetInnerText(sep, "");
	return sep;
}
function CAMSep(p)
{ULS0ug:;
	var ms=CMSep();
	if(!ms)return null;
	AChld(p,ms);
	return ms;
}
function CSubM(wzText,wzISrc,wzIAlt,wzISeq,wzDesc)
{ULS0ug:;
	var sm=CMItm("submenu");
	if(!sm)return null;
	sm.setAttribute("text", wzText);
	if (wzDesc)sm.setAttribute("description", wzDesc);
	AImg(sm,wzISrc,wzIAlt);
	if(FNEmpWz(wzISeq))sm.setAttribute("sequence",wzISeq);
	return sm;
}
function CASubM(p,wzText,wzISrc,wzIAlt,wzISeq,wzDesc)
{ULS0ug:;
	var sm=CSubM(wzText,wzISrc,wzIAlt,wzISeq,wzDesc);
	if(!sm)return null;
	AChld(p,sm);
	return sm;
}
function FRdy(o)
{ULS0ug:;
	if (!o) return false;
	if (o.readyState==null)
		return true;
	switch (o.readyState)
		{
		case "loaded": case "interactive": case "complete": return true;
		default: return false;
		}
}
function OMenu(m,r,fr,ft,yoff)
{ULS0ug:;
	if(typeof(m)=="string")m=document.getElementById(m);
	if(m)
		{
			OMenuInt(m,r,fr,ft,yoff);
		}
	return false;
}
function OMenuInt(m,r,fr,ft,yoff)
{ULS0ug:;
	if((m&&!MenuHtc_isOpen(m)) || (m&&fr)) MenuHtc_show(m,r,fr,ft,yoff);
}
function OMenuEvnt()
{ULS0ug:;
	var m=event.srcElement;
	if(m&&FRdy(document)&&FRdy(m))
		{
		var r=m.getAttribute("relativeTo");
		var fr=m.getAttribute("forceRefresh");
		var ft=m.getAttribute("flipTop");
		var yoff=m.getAttribute("yOffsetTop");
		if(r!=null)m.removeAttribute("relativeTo");
		if(fr!=null)m.removeAttribute("forceRefresh");
		if(ft!=null)m.removeAttribute("flipTop");
		if(yoff!=null)m.removeAttribute("yOffsetTop");
		m.onreadystatechange=null;
		OMenuInt(m,r,fr,ft,yoff);
		}
}
var kfnDisableEvent=new Function("return false");
var g_menuHtc_lastMenu=null;
var g_uniqueNumber=0;
var g_MenuEndOfDOM=false;
function RenderECBBackwardCompatibilityMode(fEndOfDOM)
{ULS0ug:;
	g_MenuEndOfDOM=fEndOfDOM;
}
function IsAccessibilityFeatureEnabledProxy()
{ULS0ug:;
	if (typeof(IsAccessibilityFeatureEnabled) !="undefined")
		return IsAccessibilityFeatureEnabled();
	return false;
}
function MenuHtc_show(oMaster, oParent, fForceRefresh, fFlipTop, yOffset)
{ULS0ug:;
	if (!(browseris.ie55up || browseris.nav6up || browseris.safari125up))
		return false;
	MenuHtc_hide();
	MenuHtc_init(oMaster);
	oMaster._oParent=oParent;
	oMaster._fIsRtL=IsElementRtl(oMaster._oParent);
	if ((browseris.ie || browseris.nav) && IsAccessibilityFeatureEnabledProxy())
	{
		var menu=null;
		if(oParent.foa !=null)
		{
			menu=byid(oParent.foa);			
			if(menu==null)
			{
				menu=eval(oParent.foa);	
			}
		}
		if (menu !=null && menu.onblur !=null)
		{
			menu.onblur();
		}
		RenderAccessibleMenu(oMaster, fForceRefresh);
		g_menuHtc_lastMenu=oMaster;
	}
	else
	{
		SetBodyEventHandlers(null);
		AssureId(oParent);
		var result=ShowRoot(oMaster, oParent, fForceRefresh, fFlipTop, yOffset);
		g_menuHtc_lastMenu=oMaster;
		if (!(typeof(_fV4UI) !="undefined" && _fV4UI))
			NavigateToMenu(oMaster);
		SetBodyEventHandlers(HandleDocumentBodyClick);
	}
	if (browseris.ie)
	{
		if (window.event !=null)
			window.event.cancelBubble=true;
	}
	return false;
}
function MenuHtc_hide()
{ULS0ug:;
	ClearTimeOutToHideMenu();
	var oMaster=g_menuHtc_lastMenu;
	if (oMaster !=null)
	{
		if (oMaster._accessibleMenu !=null)
		{
			CloseAccessibleMenu(oMaster);
		}
		else
		{
			HideMenu(oMaster);
		}
	}
	g_menuHtc_lastMenu=null;
}
function MenuHtc_isOpen(oMaster)
{ULS0ug:;
	if (!oMaster || !oMaster._initialized)
		return false;
	var result=IsOpen(oMaster);
	return result;
}
function MenuHtc_item(oMaster, nLevel, nIndex)
{ULS0ug:;
	MenuHtc_init(oMaster);
	var result=GetItem(oMaster, nLevel, nIndex);
	return result;
}
function TrapMenuClick(e)
{ULS0ug:;
	if (e !=null)
		e.cancelBubble=true;
	return false;
}
function SetBodyEventHandlers(h)
{ULS0ug:;
	document.body.onclick=h;
}
function HandleDocumentBodyClick(e)
{ULS0ug:;
	if (g_menuHtc_lastMenu !=null)
	{
		var oMaster=g_menuHtc_lastMenu;
		if (oMaster !=null)
		{
			HideMenu(oMaster);
		}
	}
	return false;
}
function GetEventPopup(e)
{ULS0ug:;
	var obj=GetEventSrcElement(e);
	while (obj !=null)
	{
		if (obj.master !=null)
			return obj;
		obj=obj.parentNode;
	}
	return null;
}
function GetUniqueNumber()
{ULS0ug:;
	g_uniqueNumber++;
	return g_uniqueNumber;
}
function MenuHtc_init(oMaster)
{ULS0ug:;
	if (oMaster._initialized)
		return;
	oMaster._initialized=true;
	oMaster._wzPrefixID="mp"+GetUniqueNumber();
	if (oMaster.id==null)
		oMaster.id=oMaster._wzPrefixID+"_id";
	oMaster._nLevel=0;
	oMaster._arrPopup=new Array();
	oMaster._arrSelected=new Array();
	if (typeof(oMaster._onDestroy)=="undefined")
		oMaster._onDestroy=null;
	oMaster._fLargeIconMode=false;
	oMaster._fCompactItemsWithoutIcons=false;
}
function PrepContents(oMaster)
{ULS0ug:;
	oMaster._fLargeIconMode=(oMaster.getAttribute("largeIconMode")=="true");
	oMaster._fCompactItemsWithoutIcons=(oMaster.getAttribute("CompactMode")=="true");
	if (!browseris.safari)
	{
		oMaster._oContents=document.createElement("span");
		oMaster._oContents.style.display="none";
		var str=oMaster.innerHTML;
		if (str.indexOf("<IE:MENUITEM ") < 0 && str.indexOf("<MENUITEM ") >=0)
		{
			str="<?XML:NAMESPACE PREFIX=IE />"+str;
			str=str.replace(/<MENUITEM/g, "<IE:MENUITEM");
			str=str.replace(/<\/MENUITEM/g, "</IE:MENUITEM");
		}
		oMaster._oContents.innerHTML=str;
	}
	else
	{
		oMaster._oContents=oMaster.cloneNode(true);
		oMaster._oContents.style.display="none";
	}
	if (oMaster._fLargeIconMode)
	{
		if (oMaster._fIsRtL)
			oMaster._wzMenuStyle="ms-MenuUILargeRtL";
		else
			oMaster._wzMenuStyle="ms-MenuUILarge";
	}
	else
	{
		if (oMaster._fIsRtL)
			oMaster._wzMenuStyle="ms-MenuUIRtL";
		else
			oMaster._wzMenuStyle="ms-MenuUI";
	}
	oMaster._wzChkMrkPath="../../arquivos/img/ChkMrk.gif";
	oMaster._wzMArrPath="../../arquivos/img/MArr.gif";
	oMaster._wzMArrPathRtL="../../arquivos/img/MArrRtL.gif";
}
function FixUpMenuStructure(oMaster)
{ULS0ug:;
	var menuNodes=oMaster._oRoot.childNodes;
	var lastGroupId=null;
	var lastMenuSeparatorRow=null;
	var separatorExplicit=false;
	for (var nIndex=0; nIndex < menuNodes.length; nIndex++)
	{
		var menuRow=menuNodes[nIndex];
		if (menuRow.nodeType !=1)
			continue;
		var deleteRow=false;
		var displayNone=menuRow.style !=null && menuRow.style.display=='none';
		var jsHidden=FIsIHidden(menuRow);
		if (displayNone || jsHidden)
		{
			deleteRow=true;
		}
		else if (FIsIType(menuRow, "separator"))
		{
			if (lastMenuSeparatorRow !=null || nIndex==0)
				deleteRow=true;
			else
			{
				lastMenuSeparatorRow=menuRow;
				separatorExplicit=true;
			}
		}
		else
		{
			var cGroupId=menuRow.getAttribute("menuGroupId");
			if (cGroupId !=lastGroupId &&
				lastMenuSeparatorRow==null &&
				nIndex !=0)
			{
				var lastMenuSeparatorRow=document.createElement("ie:menuitem");
				lastMenuSeparatorRow.setAttribute("type","separator");
				oMaster._oRoot.insertBefore(lastMenuSeparatorRow,menuRow);
			}
			else if (FIsIType(menuRow, "submenu") && lastMenuSeparatorRow !=null && !separatorExplicit)
			{
				menuRow.parentNode.removeChild(lastMenuSeparatorRow);
				lastMenuSeparatorRow=null;
			}
			else
			{
				lastMenuSeparatorRow=null;
			}
			lastGroupId=cGroupId;
			separatorExplicit=false;
		}
		if (deleteRow)
		{
			menuRow.parentNode.removeChild(menuRow);
			nIndex--;
		}
	}
	if(lastMenuSeparatorRow !=null)
		lastMenuSeparatorRow.parentNode.removeChild(lastMenuSeparatorRow);
}
function IsElementRtl(oCurrent)
{ULS0ug:;
	while (oCurrent !=null && oCurrent.tagName !=null)
	{
		var dir=oCurrent.getAttribute("dir");
		if ((dir==null || dir=="") && oCurrent.style !=null)
		{
			dir=oCurrent.style.direction;
		}
		if (dir=="rtl")
			return true;
		else if (dir=="ltr")
			return false;
		oCurrent=oCurrent.parentNode;
	}
	return false;
}
function getElementOverFlowStyle(element)
{ULS0ug:;
	try
	{
		var currentStyle=element.currentStyle;
		if (currentStyle=='undefined' || currentStyle==null)
		{
			return document.defaultView.getComputedStyle(element, null).getPropertyValue("overflow").toLowerCase();
		}
		else
		{
			return currentStyle.overflow.toLowerCase();
		}
	}
	catch(e)
	{
		return "";
	}
}
function AdjustScrollPosition(element, relativeToElement, result)
{ULS0ug:;
	var oCurrent=element;
	while (oCurrent !=null &&
		oCurrent !=relativeToElement &&
		oCurrent !=element.offsetParent &&
		oCurrent.tagName !=null &&
		oCurrent.tagName.toLowerCase() !="body" &&
		oCurrent.tagName.toLowerCase() !="html" &&
		!(getElementOverFlowStyle(oCurrent)=="hidden"))
	{
		if (oCurrent.scrollWidth > oCurrent.clientWidth &&
			oCurrent.offsetWidth >=oCurrent.clientWidth &&
			oCurrent.clientWidth !=0)
		{
			if (!IsElementRtl(oCurrent))		
			{
				if (oCurrent.scrollLeft > 0)
					result.x -=oCurrent.scrollLeft;
			}
			else					
			{
				if (browseris.ie8standard) 	
				{
					result.x+=oCurrent.scrollLeft;
				}	
				else
				{
					if (browseris.firefox) 	
					{
						result.x -=oCurrent.scrollLeft;
					}
					else  			
					{
						var oCurrentOverFlowStyle=getElementOverFlowStyle(oCurrent);
						if (browseris.ie || (browseris.safari && (oCurrentOverFlowStyle=="auto" || oCurrentOverFlowStyle=="scroll")))
							result.x+=(oCurrent.scrollWidth - oCurrent.clientWidth - oCurrent.scrollLeft);
					}
				}
			}
		}
		if (oCurrent.scrollTop > 0)
			result.y -=oCurrent.scrollTop;
		oCurrent=oCurrent.parentNode;
	}
}
function MenuHtc_GetElementPosition(element, relativeToElement)
{ULS0ug:;
	var result=new Object();
	result.x=0;
	result.y=0;
	result.width=0;
	result.height=0;
	if (element.offsetParent) {		
		var parent=element;
		while (parent !=null &&
			parent !=relativeToElement)
		{
			result.x+=parent.offsetLeft;
			result.y+=parent.offsetTop;
			AdjustScrollPosition(parent, relativeToElement, result);
			var parentTagName=parent.tagName.toLowerCase();
			if (parentTagName !="body" &&
				parentTagName !="html" &&
				parent.clientTop !=null &&
				parent.clientLeft !=null &&
				parent !=element) {
				result.x+=parent.clientLeft;
				result.y+=parent.clientTop;
			}
			parent=parent.offsetParent;
		}
	}
	else if (element.offsetLeft || element.offsetTop) {
		result.x=element.offsetLeft;
		result.y=element.offsetTop;
	}
	else {
		if (element.x) {
			result.x=element.x;
		}
		if (element.y) {
			result.y=element.y;
		}
	}
	if (element.offsetWidth && element.offsetHeight) {
		result.width=element.offsetWidth;
		result.height=element.offsetHeight;
	}
	else if (element.style && element.style.pixelWidth && element.style.pixelHeight) {
		result.width=element.style.pixelWidth;
		result.height=element.style.pixelHeight;
	}
	return result;
}
function MenuTag(tagName, className)
{ULS0ug:;
	this.tagName=tagName;
	this.className=className;
}
function CreateMenuTag(menuTag)
{ULS0ug:;
	if (menuTag.tagName !=null)
	{
		var tag=document.createElement(menuTag.tagName);
		if (menuTag.className !=null)
			tag.className=menuTag.className;
		return tag;
	}
	return null;
}
function TransferEventToMenu(oPopup, event)
{ULS0ug:;
	var evt;
	if (browseris.ie)
		evt={"srcElement" : oPopup, "keyCode" : event.keyCode };
	else
		evt={"target" : oPopup, "which" : event.which};
	PopupKeyDown(evt);	
}
function MenuHtcInternal_Show(oMaster, oParent, y, fFlipTop)
{ULS0ug:;
	var MenuTagArray=new Object();
	if (!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		MenuTagArray.popup=new MenuTag("div", "ms-MenuUIPopupBody");
		MenuTagArray.inner=new MenuTag("div", null);
		MenuTagArray.section=new MenuTag("table", null);
		MenuTagArray.menubody=new MenuTag("tbody", null);
	}
	else
	{
		MenuTagArray.popup=new MenuTag("div", "ms-MenuUIPopupBody ms-MenuUIPopupScreen");
		MenuTagArray.inner=new MenuTag("div", "ms-MenuUIPopupInner");
		MenuTagArray.section=new MenuTag("div", null);
		MenuTagArray.menubody=new MenuTag("ul", "ms-MenuUIUL");
	}
	var oPopup=oMaster._arrPopup[oMaster._nLevel];	
	var oInner;
	if (!oMaster._oContents) PrepContents(oMaster);
	if (!oMaster._oContents || IsOpen(oMaster)) return;
	if (!oPopup && !oMaster._oRoot)
	{
		oMaster._nLevel=0;
		oMaster._oRoot=oMaster._oContents;
	}
	var fTopLevel=oMaster._nLevel==0;
	fFlipTop=fFlipTop && fTopLevel;
	if (!oPopup)
	{
		oPopup=CreateMenuTag(MenuTagArray.popup);
		if (browseris.ie || browseris.safari)
			oPopup.title="";
		else
			if (browseris.nav)
				oPopup.title=" ";		
		oMaster._arrPopup[oMaster._nLevel]=oPopup;
		oPopup.isMenu=true;
		oPopup.master=oMaster;
		oPopup.level=oMaster._nLevel;
		oInner=CreateMenuTag(MenuTagArray.inner);
		var oSection=CreateMenuTag(MenuTagArray.section);
		var oMenubody=CreateMenuTag(MenuTagArray.menubody);
		oInner.isInner=true;
		oPopup.style.position="absolute";
		if (oMaster._fIsRtL)
			oPopup.setAttribute("dir", "rtl");
		else
			oPopup.setAttribute("dir", "ltr");
		oPopup.style.visibility="hidden";
		oInner.style.overflow="visible";
		oSection.className=oMaster._wzMenuStyle;
		if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		{
			oSection.cellSpacing=0;
			oSection.cellPadding=0;
		}
		oSection.appendChild(oMenubody);
		oInner.appendChild(oSection);
		oPopup.appendChild(oInner);
		if((!(typeof(_fV4UI) !="undefined" && _fV4UI)) || (g_MenuEndOfDOM==true))
		{
			document.body.appendChild(oPopup);
		}
		else
		{
			if(oParent.tagName=="TABLE")
				oParent.parentNode.appendChild(oPopup);
			else
				oParent.appendChild(oPopup);
		}
		FixUpMenuStructure(oMaster);
		var id=0;
		var childNodeLength=oMaster._oRoot.childNodes.length;
		for (var nIndex=0; nIndex < childNodeLength; nIndex++)
		{
			var oNode=oMaster._oRoot.childNodes[nIndex];
			if (oNode.nodeType !=1)
				continue;
			if (!FIsIType(oNode, "label"))
			{
				var oItem=CreateMenuItem(oMaster, oNode, MakeID(oMaster, oMaster._nLevel, id));
				if (oItem)
				{
					oMenubody.appendChild(oItem);
				}
				id++;
			}
		}
		if ((typeof(_fV4UI) !="undefined" && _fV4UI) && (!oMaster._fLargeIconMode))
		{
			var menuItemWidth=0;
			var anchors=oMenubody.getElementsByTagName("a");
			var itemIndex=null;
			var anchorWidth=0;
			for (var i=0; i < anchors.length; i++)
			{
				anchorWidth=anchors[i].childNodes[1].offsetWidth;
				if (anchorWidth > menuItemWidth)
				{
					itemIndex=i;
					menuItemWidth=anchorWidth;
				}
			}
			menuItemWidth=0;
			if(itemIndex==null) menuItemWidth=200;
			else
			{
			    var anchor=anchors[itemIndex];
			    var childLen=anchor.childNodes.length;
			    for (var j=0; j < childLen; j++)
				    menuItemWidth+=anchor.childNodes[j].offsetWidth;
			}
			menuItemWidth+=16+5;
			oMenubody.style.width=menuItemWidth+"px";
			oSection.style.width=menuItemWidth+4+"px";
		}
		oPopup.oncontextmenu=kfnDisableEvent;
		oPopup.ondragstart=kfnDisableEvent;
		oPopup.onselectstart=kfnDisableEvent;
		if (oParent._onmouseover==null)
			oParent._onmouseover=oParent.onmouseover;
		if (oParent._onmouseout==null)
			oParent._onmouseout=oParent.onmouseout;
		if (oParent._onmousedown==null)
			oParent._onmousedown=oParent.onmousedown;
		if (oParent._onclick==null)
			oParent._onclick=oParent.onclick;
		if (oParent._oncontextmenu==null)
			oParent._oncontextmenu=oParent.oncontextmenu;
		if ((typeof(_fV4UI) !="undefined" && _fV4UI) && fTopLevel)
		{
			if (oParent._onkeydown==null)
				oParent._onkeydown=oParent.onkeydown;
		}
		if (browseris.nav)
		{
			oPopup.onkeypress=function(e) {ULS0ug:;return false; };
			oPopup.onkeyup=function(e) {ULS0ug:;return false; };
			oPopup.onkeydown=function(e) {ULS0ug:;PopupKeyDown(e); e.cancelBubble=true; return false; };
			oPopup.onmousedown=function(e) {ULS0ug:;TrapMenuClick(e); return false; };
			oPopup.onmouseover=function(e) {ULS0ug:;PopupMouseOver(e); return false; };
			oPopup.onmouseout=function(e) {ULS0ug:;PopupMouseLeave(e); return false; };
			oPopup.onclick=function(e) {ULS0ug:;PopupMouseClick(e); TrapMenuClick(e); return false; };
			oParent.onmouseover=function (e) {ULS0ug:;PopupMouseOverParent(e); return false; };
			oParent.onmouseout=function(e) {ULS0ug:;PopupMouseLeaveParent(e); return false; };
			oParent.onmousedown=function(e) {ULS0ug:;TrapMenuClick(e); return false; };
			oParent.onclick=function(e) {ULS0ug:;TrapMenuClick(e); return false; };
			oParent.oncontextmenu=function(e) {ULS0ug:;TrapMenuClick(e); return false; };
			if ((typeof(_fV4UI) !="undefined" && _fV4UI) && fTopLevel)
			{
				oParent.onkeydown=function (e) {ULS0ug:;TransferEventToMenu(oPopup, e); return false; };
			}
		}
		else
		{
			oPopup.onkeydown=new Function("PopupKeyDown(event); event.cancelBubble=true; return false;");
			oPopup.onmousedown=new Function("TrapMenuClick(event); return false;");
			oPopup.onmouseover=new Function("PopupMouseOver(event); return false;");
			oPopup.onmouseout=new Function("PopupMouseLeave(event); return false;");
			oPopup.onclick=new Function("PopupMouseClick(event); TrapMenuClick(event); return false;");
			oParent.onmouseover=new Function("PopupMouseOverParent(event); return false;");
			oParent.onmouseout=new Function("PopupMouseLeaveParent(event); return false;");
			oParent.onmousedown=new Function("TrapMenuClick(event); return false;");
			oParent.onclick=new Function("TrapMenuClick(event); return false;");
			oParent.oncontextmenu=new Function("TrapMenuClick(event); return false;");
			if ((typeof(_fV4UI) !="undefined" && _fV4UI) && fTopLevel)
			{
				oParent.onkeydown=function () {ULS0ug:;TransferEventToMenu(oPopup, event); return false; };
			}
		}
		if (fTopLevel)
		{
			var wzOnUnload=oMaster.getAttribute("onunloadtext");
			if (wzOnUnload) oPopup.onunload=new Function(wzOnUnload);
		}
	}
	else
	{
		var oOld=oMaster._arrSelected[oMaster._nLevel];
		if (oOld) UnselectItem(oOld);
	}
	oMaster._arrSelected[oMaster._nLevel]=null;
		var oBackFrame;
	if (browseris.ie)
	{
		var originalScrollLeft=document.body.scrollLeft;
		oBackFrame=document.createElement("iframe");
		AssureId(oBackFrame);
		oBackFrame.src="/_layouts/blank.htm";
		oBackFrame.style.position="absolute";
		oBackFrame.style.display="none";
		oBackFrame.scrolling="no";
		oBackFrame.frameBorder="0";
		if((!(typeof(_fV4UI) !="undefined" && _fV4UI)) || (g_MenuEndOfDOM==true))
			document.body.appendChild(oBackFrame);
		else
		{
			if(oParent.tagName=="TABLE")
				oParent.parentNode.appendChild(oBackFrame);
			else
				oParent.appendChild(oBackFrame);
		}
		oPopup.style.zIndex=103;
		oPopup._backgroundFrameId=oBackFrame.id;
		if (originalScrollLeft !=document.body.scrollLeft)
		{
			document.body.scrollLeft=originalScrollLeft;
		}
	}
	SetMenuPosition(oMaster, oParent, oPopup, oInner, fFlipTop, fTopLevel);	
	oPopup.style.visibility="visible";
	if (browseris.ie)
	{
		SetBackFrameSize(null, oPopup);
		oPopup.onresize=new Function("SetBackFrameSize(event, null);");
		oBackFrame.style.display="block";
		oBackFrame.style.zIndex=101;
	}
}
function SetMenuPosition(oMaster, oParent, oPopup, oInnerDiv, fFlipTop, fTopLevel)
{ULS0ug:;
	var maxWidth=window.screen.width;
	var maxHeight=window.screen.height;
	if (self.innerHeight)
	{
		maxWidth=self.innerWidth;
		maxHeight=self.innerHeight;
	}	
	else if (document.documentElement && document.documentElement.clientHeight)
	{
		maxWidth=document.documentElement.clientWidth;
		maxHeight=document.documentElement.clientHeight;
	}
	else if (document.body)
	{
		maxWidth=document.body.clientWidth;
		maxHeight=document.body.clientHeight;
	}
	var nRealWidth=oPopup.offsetWidth;
	var nRealHeight=oPopup.offsetHeight;
	var widthTooBig=false;
	var heightTooBig=false;
	if (nRealWidth > maxWidth - 50)
	{
		widthTooBig=true;
		nRealWidth=(maxWidth - 50) < 0 ? 0 : (maxWidth - 50);
	}
	if (oMaster._fCompactItemsWithoutIcons && nRealHeight >=375)
	{
		heightTooBig=true;
		nRealHeight=375;
	}
	if (nRealHeight >=maxHeight - 50)
	{
		heightTooBig=true;
		nRealHeight=(maxHeight - 50) < 0 ? 0 : (maxHeight - 50);
	}
	if (!widthTooBig && !heightTooBig)
	{
		oInnerDiv.style.overflow="visible";
	}
	else
	{
		if (browseris.ie)
		{
			if (widthTooBig)
			{
				oPopup.style.width=nRealWidth+"px";
				oInnerDiv.style.width=nRealWidth+"px";
				oInnerDiv.style.overflowX="scroll";
			}
			else
			{
				oInnerDiv.style.width=nRealWidth+"px";
				oInnerDiv.style.overflowX="visible";
			}
			if (heightTooBig)
			{
				oPopup.style.height=nRealHeight+"px";
				oInnerDiv.style.height=nRealHeight+"px";
				oInnerDiv.style.overflowY="scroll";
			}
			else
			{
				oInnerDiv.style.height=nRealHeight+"px";
				oInnerDiv.style.overflowY="visible";
			}
		}
		else
		{
			oPopup.style.height=nRealHeight+"px";
			oInnerDiv.style.height=nRealHeight+"px";
			oPopup.style.width=nRealWidth+"px";
			oInnerDiv.style.width=nRealWidth+"px";
			oInnerDiv.style.overflow="auto";
		}
	}
	nRealWidth=oPopup.offsetWidth;
	nRealHeight=oPopup.offsetHeight;
	var EdgeLeft=0;
	var EdgeRight=maxWidth;
	var ParentLeft=0;
	var EdgeTop=0;
	var ParentTop=0;
	var oCurrent=oParent;
	if (browseris.safari)
	{
		if (oCurrent.tagName=="TR" && oCurrent.childNodes.length > 0)
			oCurrent=oCurrent.childNodes[0];
	}
	var p=MenuHtc_GetElementPosition(oCurrent);
	ParentLeft=p.x;
	ParentTop=p.y;
	var nParentWidth;
	if (fTopLevel)
	{
		nParentWidth=p.width;
		ParentTop+=p.height;
	}
	else
	{
		nParentWidth=p.width+1;
	}
	var fTryGoDefault=!fFlipTop && !document.body.getAttribute("flipped");
	var fFlippedDefault, fFlippedNonDefault;
	var xDefault, xFlipped;
	if (!oMaster._fIsRtL)
	{
		var MenuRightDefault;
		var MenuLeftFlipped;
		if (fTopLevel)
		{
			xDefault=ParentLeft;
			MenuRightDefault=ParentLeft+nRealWidth;
			MenuLeftFlipped=ParentLeft+nParentWidth - nRealWidth;
		}
		else
		{
			xDefault=ParentLeft+nParentWidth;
			MenuRightDefault=ParentLeft+nParentWidth+nRealWidth;
			MenuLeftFlipped=ParentLeft - nRealWidth;
		}
		xFlipped=MenuLeftFlipped;
		fFlippedDefault=MenuRightDefault > EdgeRight && MenuLeftFlipped > EdgeLeft;
		fFlippedNonDefault=!(MenuLeftFlipped < EdgeLeft && MenuRightDefault < EdgeRight);
	}
	else
	{
		var MenuLeftDefault;
		var MenuRightFlipped;
		if (fTopLevel)
		{
			MenuLeftDefault=ParentLeft+nParentWidth - nRealWidth;
			MenuRightFlipped=ParentLeft+nRealWidth;
			xFlipped=ParentLeft;
		}
		else
		{
			MenuLeftDefault=ParentLeft - nRealWidth;
			MenuRightFlipped=ParentLeft+nParentWidth+nRealWidth;
			xFlipped=ParentLeft+nParentWidth;
		}
		xDefault=MenuLeftDefault;
		fFlippedDefault=MenuLeftDefault < EdgeLeft && MenuRightFlipped < EdgeRight;
		fFlippedNonDefault=!(MenuRightFlipped > EdgeRight && MenuLeftDefault > EdgeLeft);
	}
	var fFlipped=fTryGoDefault ? fFlippedDefault : fFlippedNonDefault;
	var x=fFlipped ? xFlipped : xDefault;
	var xOffset;
	var yOffset;
	if (browseris.firefox)
	{
		xOffset=window.pageXOffset;
		yOffset=window.pageYOffset;
	}
	else
	{
		var htmlElement=document.body.parentElement;
		if (!IsElementRtl(document.body))		
		{
			xOffset=document.body.scrollLeft;
			xOffset+=htmlElement.scrollLeft;
		}
		else						
		{
			if (browseris.ie8standard)		
			{
				xOffset=-document.body.scrollLeft;
				xOffset+=-htmlElement.scrollLeft;				
			}
			else					
			{
				var bodyOverFlowStyle=getElementOverFlowStyle(document.body);
				if (browseris.ie || (browseris.safari && (bodyOverFlowStyle=="auto" || bodyOverFlowStyle=="scroll")))
					xOffset=-document.body.scrollWidth+document.body.clientWidth+document.body.scrollLeft;
				xOffset+=-htmlElement.scrollWidth+htmlElement.offsetWidth+htmlElement.scrollLeft;
			}
		}
		yOffset=document.body.scrollTop;
		yOffset+=htmlElement.scrollTop;
	}
	if (nRealWidth >=maxWidth)
	{
		x=xOffset;
	}
	else if (x - xOffset+nRealWidth >=maxWidth)
	{
		x=xOffset+maxWidth - nRealWidth;
	}
	var y;
	if (nRealHeight >=maxHeight)
	{
		y=yOffset;
	}
	else if (ParentTop+nRealHeight - yOffset >=maxHeight)
	{
		y=yOffset+maxHeight - nRealHeight;
	}
	else
	{
		y=ParentTop;
	}
	if (browseris.safari)
		y+=window.pageYOffset;
	else
		y+=document.documentElement.scrollTop;
	oPopup.setAttribute("flipped", fFlipTop ? fFlipped && fFlippedDefault : fFlipped);
	var posLeft=x;
	var posTop=y;
	if (browseris.safari)
		posTop -=window.pageYOffset;
	else
		posTop -=document.documentElement.scrollTop;
	if (((typeof(_fV4UI) !="undefined" && _fV4UI)) && (g_MenuEndOfDOM==false))
	{
		if (!fTopLevel)
		{
			if (oMaster._fIsRtL)
			{
				if (browseris.ie)
				{
					if (fFlipped)
						posLeft=posLeft - ParentLeft;
					else
						posLeft=posLeft - ParentLeft+1;
				}				
				else
				{
					if (fFlipped)
						posLeft=posLeft - ParentLeft;
					else
						posLeft=posLeft - ParentLeft+3;
				}	
			}
			else
			{
				if (browseris.ie)
				{
					if (fFlipped)
						posLeft=posLeft - ParentLeft+1;
					else
						posLeft=posLeft - ParentLeft;
				}
				else
				{
					if (fFlipped)
						posLeft=posLeft - ParentLeft+3;
					else
						posLeft=posLeft - ParentLeft;
				}					
			}
			if (posTop==0)
				posTop=oParent.offsetTop - oPopup.offsetParent.firstChild.scrollTop;
			else
				posTop=posTop - ParentTop+oParent.offsetTop - oPopup.offsetParent.firstChild.scrollTop;
			if (browseris.ie8standard)
				posTop=posTop - 1;	
		}
		else
		{
			if ((oPopup.offsetParent !=null) && (oPopup.offsetParent.tagName.toLowerCase() !="body"))
			{
				var offsetParentLeft;
				var offsetParentTop;
				var offsetParentP=MenuHtc_GetElementPosition(oPopup.offsetParent);			
				offsetParentLeft=offsetParentP.x;
				offsetParentTop=offsetParentP.y;
				posTop=posTop - offsetParentTop;
				posLeft=posLeft - offsetParentLeft;
				if (!oMaster._fLargeIconMode)
					posTop=posTop -1;
			}
		}
	}	
	oPopup.style.left=posLeft+"px";
	oPopup.style.top=posTop+"px";
	oPopup.LeftForBackIframe=posLeft;
	oPopup.TopForBackIframe=posTop;
}
function SetBackFrameSize(e, oPopup)
{ULS0ug:;
	if (oPopup==null)
		oPopup=GetEventSrcElement(e);
	var nRealWidth=oPopup.offsetWidth;
	var nRealHeight=oPopup.offsetHeight;
	var oBackFrame=document.getElementById(oPopup._backgroundFrameId);
	if (oBackFrame !=null)
	{
		oBackFrame.style.left=oPopup.LeftForBackIframe+"px";
		oBackFrame.style.top=oPopup.TopForBackIframe+"px";
		oBackFrame.style.width=nRealWidth+"px";
		oBackFrame.style.height=nRealHeight+"px";
	}
}
function HideMenu(oMaster, nPhase)
{ULS0ug:;
	ClearTimeOutToHideMenu();
	if (nPhase==null)
		nPhase=0;
	if (nPhase==2)
	{
		if (oMaster._onDestroy !=null)
		{
			oMaster._onDestroy();
			oMaster._onDestroy=null;
		}
		return;
	}
	if (IsOpen(oMaster) && !IsAccessibilityFeatureEnabledProxy())
	{
		if (oMaster._oParent !=null)
		{
			oMaster._oParent.onclick=oMaster._oParent._onclick;
			oMaster._oParent.onmouseover=oMaster._oParent._onmouseover;
			oMaster._oParent.onmouseout=oMaster._oParent._onmouseout;
			oMaster._oParent.onmousedown=oMaster._oParent._onmousedown;
			oMaster._oParent.oncontextmenu=oMaster._oParent._oncontextmenu;
			if ((typeof(_fV4UI) !="undefined" && _fV4UI))
			{
				oMaster._oParent.onkeydown=oMaster._oParent._onkeydown;
			}
		}
		SetBodyEventHandlers(null);
		UpdateLevel(oMaster, 0);
		var oPopup=oMaster._arrPopup[0];
		if (oPopup !=null)
		{
			var oBackFrame=document.getElementById(oPopup._backgroundFrameId);
			if (oBackFrame !=null)
				oBackFrame.parentNode.removeChild(oBackFrame);
			if (oPopup.parentNode !=null)
				oPopup.parentNode.removeChild(oPopup);
			oMaster._arrPopup[0]=null;
			if (nPhase==0)
			{
				if (oMaster._onDestroy !=null && typeof(oMaster._onDestroy)=="function")
				{
					oMaster._onDestroy();
					oMaster._onDestroy=null;
				}
			}
		}
		g_menuHtc_lastMenu=null;
		RenderECBBackwardCompatibilityMode(false);
	}
}
function IsOpen(oMaster)
{ULS0ug:;
	if ((oMaster._accessibleMenuInProgress) || (oMaster._accessibleMenu && !oMaster._accessibleMenu.closed))
		return true;
	if (!oMaster._arrPopup)
		return false;
	var oPopup=oMaster._arrPopup[oMaster._nLevel];
	return oPopup;
}
function FindLabel(oParent)
{ULS0ug:;
	var arrNodes=oParent ? oParent.childNodes : null;
	if (arrNodes)
		{
		for (var nIndex=0; nIndex < arrNodes.length; nIndex++)
			{
			var oNode=arrNodes[nIndex];
			if (oNode.nodeType !=1)
				continue;
			if (FIsIType(oNode, "label")) return oNode;
			}
		}
	return null;
}
function ShowRoot(oMaster, oParent, fForceRefresh, fFlipTop, yOffset)
{ULS0ug:;
	UpdateLevel(oMaster, 0);
	if (fForceRefresh)
		{
		oMaster._oContents=null;
		oMaster._oRoot=null;
		oMaster._nLevel=0;
		oMaster._arrPopup=new Array();
		oMaster._arrSelected=new Array();
		}
	else
		{
		oMaster._oRoot=oMaster._oContents;
		}
	var y=0;
	if (oParent) y+=oParent.offsetHeight;
	if (browseris.safari)
	{
		if (oParent.tagName=="TR" && oParent.childNodes.length > 0)
		{
			y+=(oParent.childNodes[0].offsetTop+oParent.childNodes[0].offsetHeight
				- oParent.offsetTop);
		}
	}
	if (yOffset) y+=yOffset;
	fFlipTop=fFlipTop !=false;
	MenuHtcInternal_Show(oMaster, oParent, y, fFlipTop);
}
function ShowSubMenu(oMaster, nLevel, oParent)
{ULS0ug:;
	if (!oParent) return;
	if (oParent.submenuRoot==null) return;
	UpdateLevel(oMaster, nLevel);
	oMaster._oRoot=oParent.submenuRoot;
	oMaster._nLevel=oMaster._nLevel+1;
	MenuHtcInternal_Show(oMaster, oParent, -1);
}
function ShowSubMenuEvnt(oMaster)
{ULS0ug:;
	if (oMaster !=null)
	{
		var oPopup=oMaster._arrPopup[oMaster._nLevel];
		if (oPopup)
		{
			oPopup.removeAttribute("timeoutID");
			ShowSubMenu(oMaster, oMaster._nLevel, oMaster._arrSelected[oMaster._nLevel]);
		}
	}
}
function SetShowSubMenuEvnt(oMaster)
{ULS0ug:;
	var oPopup=oMaster._arrPopup[oMaster._nLevel];
	if (oPopup)
	{
		ClearTimeOut("timeoutID");
		document.body.setAttribute("timeoutID", window.setTimeout(function(){ULS0ug:;ShowSubMenuEvnt(oMaster);}, 100));
	}
}
function ClearTimeOut(oAttribute)
{ULS0ug:;
	var id=document.body.getAttribute(oAttribute);
	if (id !=null)
	{
		window.clearTimeout(id);
	}
	document.body.removeAttribute(oAttribute);
}
function ClearShowSubMenuEvnt(oPopup)
{ULS0ug:;
	ClearTimeOut("timeoutID");
}
function GetEventSrcItem(oMaster, srcElement)
{ULS0ug:;
	var tag=null;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		tag="tr";
	else
	{
		if ((srcElement !=null) && FIStringEquals(srcElement.tagName, "div") && srcElement.className.indexOf("ms-MenuUIPopupInner") !=-1)
			return null;
		tag="li";
	}
	for (var oSrc=srcElement;
		oSrc && !FIStringEquals(oSrc.tagName, "body");
		oSrc=oSrc.parentNode)
	{
		if (FIStringEquals(oSrc.tagName, tag) &&
			oSrc.id.substring(0, oMaster._wzPrefixID.length)==oMaster._wzPrefixID)
		{
			return oSrc;
		}
	}
	return null;
}
function UpdateLevel(oMaster, nLevel)
{ULS0ug:;
	var oPopup;
	while (oMaster._nLevel > nLevel)
		{
		if (oMaster._arrPopup !=null)
			oPopup=oMaster._arrPopup[oMaster._nLevel];
		if (oPopup)
			{
			ClearShowSubMenuEvnt(oPopup);
			var oBackFrame=document.getElementById(oPopup._backgroundFrameId);
			if (oBackFrame !=null)
				oBackFrame.parentNode.removeChild(oBackFrame);
			oPopup.parentNode.removeChild(oPopup);
			}
		oMaster._arrPopup[oMaster._nLevel]=null;
		oMaster._arrSelected[oMaster._nLevel]=null;
		oMaster._oRoot=oMaster._oRoot.parentNode;
		oMaster._nLevel--;
		}
	if (oMaster._arrPopup !=null)
		oPopup=oMaster._arrPopup[oMaster._nLevel];
	if (oPopup) ClearShowSubMenuEvnt(oPopup);
}
function PopupMouseOver(e)
{ULS0ug:;
	var oPopup=GetEventPopup(e);
	if (oPopup !=null)
	{
		var oMaster=oPopup.master;
		var nLevel=oPopup.level;
		if (nLevel < 0) return;
		var oSrcElem=GetEventSrcItem(oMaster, GetEventSrcElement(e));
		if (oSrcElem)
		{
			if (oSrcElem !=oMaster._arrSelected[nLevel])
			{
				if (FIsIType(oSrcElem, "separator"))
					return;
				ToggleMenuItem(oMaster, nLevel, oSrcElem);
				if (FIsIType(oSrcElem, "submenu"))
					EngageSelection(oMaster, true, true, false);
			}
			else if (nLevel < oMaster._nLevel)
			{
				UnselectCurrentOption(oMaster);
			}
		}
		ClearTimeOutToHideMenu();
	}
}
function PopupMouseLeave(e)
{ULS0ug:;
	var oPopup;
	oPopup=GetEventPopup(e);
	if (oPopup !=null)
	{
		UnselectCurrentOption(oPopup.master);
		SetTimeOutToHideMenu();
	}
	return false;
}
function PopupMouseOverParent(e)
{ULS0ug:;
	if (g_menuHtc_lastMenu !=null)
	{
		ClearTimeOutToHideMenu();
		if (g_menuHtc_lastMenu._oParent !=null && g_menuHtc_lastMenu._oParent._onmouseover !=null && typeof(g_menuHtc_lastMenu._oParent._onmouseover)=="function")
		{
			g_menuHtc_lastMenu._oParent._onmouseover();
		}
	}
}
function PopupMouseLeaveParent(e)
{ULS0ug:;
	if (g_menuHtc_lastMenu !=null)
	{
		if (g_menuHtc_lastMenu._oParent !=null && g_menuHtc_lastMenu._oParent._onmouseout !=null && typeof(g_menuHtc_lastMenu._oParent._onmouseout)=="function")
		{
				g_menuHtc_lastMenu._oParent._onmouseout();
		}		
		SetTimeOutToHideMenu();		
	}
}
function ClearTimeOutToHideMenu()
{ULS0ug:;
	if (document.body.getAttribute("HideMenuTimeOut") !=null)
	{
		ClearTimeOut("HideMenuTimeOut");
	}
}
function SetTimeOutToHideMenu()
{ULS0ug:;
	ClearTimeOut("HideMenuTimeOut");
	document.body.setAttribute("HideMenuTimeOut", window.setTimeout(MenuHtc_hide, 5000));
}
function PopupMouseClick(e)
{ULS0ug:;
	var oPopup=GetEventPopup(e);
	var oMaster=oPopup.master;
	var nLevel=oPopup.level;
	if (nLevel < 0) return;
	var oItem=oMaster._arrSelected[nLevel];
	var oSrcItem=GetEventSrcItem(oMaster, GetEventSrcElement(e));
	if (oItem !=oSrcItem)
	{
		if(oSrcItem)
			oMaster._arrSelected[nLevel]=oSrcItem;		
	}
	UpdateLevel(oMaster, nLevel);
	var onExpand;
	var fExpand;
	if (browseris.nav)
	{
		fExpand=(e && e.target && e.target.className=="hierarchy");
		onExpand=(e && e.target && e.target.getAttribute("onExpand"));
	}
	else
	{
		fExpand=(e && e.srcElement && e.srcElement.className=="hierarchy");
		onExpand=(e && e.srcElement && e.srcElement.getAttribute("onExpand"));
	}	
	EngageSelection(oMaster, true, false, false, fExpand, onExpand );
}
function PopupKeyDown(e)
{ULS0ug:;
	var oPopup=GetEventPopup(e);
	var oMaster=oPopup.master;
	var nLevel=oPopup.level;
	if (nLevel < 0)
		return;
	var nKeyCode=GetEventKeyCode(e);
	var shiftKey=e.shiftKey;
	if (oMaster._fIsRtL)
		{
		if (nKeyCode==37) nKeyCode=39;
		else if (nKeyCode==39) nKeyCode=37;
		}
	if (nKeyCode==9) nKeyCode=!shiftKey ? 40 : 38;
	ClearShowSubMenuEvnt(oPopup);
	switch (nKeyCode)
		{
	case 38:	
		MoveMenuSelection(oMaster, -1);
		break;
	case 40:	
		MoveMenuSelection(oMaster, 1);
		break;
	case 37:	
	case 27:	
		CloseCurrentLevel(oMaster, nKeyCode==27);
		break;
	case 39:	
	case 13:	
		EngageSelection(oMaster, nKeyCode==13, false, true);
		break;
		}
	e.returnValue=false;
}
function SetNewId(obj)
{ULS0ug:;
	obj.id="msomenuid"+GetUniqueNumber();
	return obj.id;
}
function AssureId(obj)
{ULS0ug:;
	if (obj.id==null || obj.id=="")
		obj.id="msomenuid"+GetUniqueNumber();
	return obj.id;
}
function NavigateToMenu(oMaster)
{ULS0ug:;
	if (IsAccessibilityFeatureEnabledProxy())
		return;
	var oMenu=null;
	oMenu=oMaster._arrPopup[oMaster._nLevel].firstChild;
	AssureId(oMenu);
	try
	{		
		var oFirstItem=oMenu.firstChild.firstChild.firstChild;
		if (!(typeof(_fV4UI) !="undefined" && _fV4UI))
			oFirstItem.tabIndex=0;
		else
			oFirstItem=oFirstItem.getElementsByTagName("A")[0];
		if (oFirstItem !=null)
		{
			if (oFirstItem.setActive !=null)
				oFirstItem.setActive();
			else if (oFirstItem.focus !=null)
				oFirstItem.focus();
		}		
	}
	catch (e)
	{
	}
}
function ExecuteOnClick(fnOnClick, oMaster)
{ULS0ug:;
	try
	{
		if (browseris.safari)
		{
			if (FIStringEquals(typeof(fnOnClick), "string"))
				eval("var document=window.document; {"+fnOnClick+"}");
			else
				fnOnClick();
		}
		else
		{
			if (FIStringEquals(typeof(fnOnClick), "string"))
			{
				fnOnClick=new Function("event", "var document=window.document; {"+fnOnClick+"}");
			}
			var oTemp=window.document.body.appendChild(window.document.createElement("span"));
			oTemp.master=oMaster;
			oTemp.onclick=fnOnClick;
			var evt;
			var ctx=null;
			if (typeof(currentCtx) !='undefined' && currentCtx !=null)
				ctx=currentCtx;
			else if (typeof(ctxFilter) !='undefined' && ctxFilter !=null)
					ctx=ctxFilter;
			if (browseris.ie)
				evt={ "srcElement" : oTemp , "fakeEvent" : 1, "currentCtx" : ctx};
			else
				evt={ "target" : oTemp , "fakeEvent" : 1, "currentCtx" : ctx};			
			oTemp.onclick(evt);
			oTemp.parentNode.removeChild(oTemp);
		}
	}
	catch (e)
	{
	}
}
function EngageSelection(oMaster, fDoSelection, fDelayExpandSM, fEnterSM, fExpand, fCommand)
{ULS0ug:;
	var oItem=oMaster._arrSelected[oMaster._nLevel];
	if (!oItem || oItem.optionDisabled) return;
	if (FIsIType(oItem, "submenu"))
	{
		if (fDelayExpandSM)
		{
			SetShowSubMenuEvnt(oMaster);
		}
		else
		{
			ShowSubMenu(oMaster, oMaster._nLevel, oItem);
			if (fEnterSM) MoveMenuSelection(oMaster, 1);
		}
	}
	else if (fDoSelection)
	{
		var fEnabled=oItem.getAttribute("enabled");
		if (fEnabled !="false")
		{
			if (!fExpand)
			{
				var fnOnClick=oItem.getAttribute("onMenuClick");
				if (fnOnClick)
				{
					HideMenu(oMaster, 1);
					ExecuteOnClick(fnOnClick, oMaster);
					HideMenu(oMaster, 2);
				}
			}
			else
			{
				eval(fCommand);
			}
		}
	}
}
function CloseCurrentLevel(oMaster, fAllowHideRoot)
{ULS0ug:;
	if (oMaster._nLevel > 0)
	{
		UpdateLevel(oMaster, oMaster._nLevel - 1);
		var obj=oMaster._arrSelected[oMaster._nLevel];
		if (obj !=null && obj.onclick !=null)
			obj.onclick=obj._onclick;
		if (obj !=null)
		{
			if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
			{
				if (browseris.nav)
				{
					obj=obj.firstChild.firstChild.firstChild.firstChild.firstChild.nextSibling.firstChild.firstChild;
					if (obj.focus !=null)
						obj.focus();
				}
				else
				{
					if (obj.focus !=null)
						obj.focus();
				}
			}
			else
			{
				obj=obj.getElementsByTagName("a")[0];
				if (obj !=null)
				{	
					if (obj.setActive !=null)
					{
						obj.setActive();
					}
					else
			 		{
						if (obj.focus !=null)
							obj.focus();
					}
				}
			}
		}
	}
	else if (fAllowHideRoot)
	{
		HideMenu(oMaster);
		var oParent=oMaster._oParent;
		while (oParent !=null &&
			oParent.tagName=="SPAN" &&
			oParent.getAttribute("contentEditable")=="true")
		{
			oParent=oParent.parentElement;
		}
		if (oParent !=null)
		{
			var focusElement=oParent;
			var foastr=oParent.getAttribute("foa");
			if (foastr !=null)
			{
				var foa=null;
				foa=eval(foastr);
				if(foa==null)
				{
					foa=byid(foastr);
				}
				if (foa !=null)
				{
					focusElement=foa;
				}
			}
			else
			{
				if (focusElement.tagName !="A")
				{
					var anchorList=focusElement.getElementsByTagName("a");
					var anchorListLen=anchorList.length;
					if (anchorListLen > 0)
						focusElement=anchorList[anchorListLen-1];
				}
			}
			if (focusElement !=null)
			{
				if (focusElement.setActive !=null)
				{
					focusElement.setActive();
				}
				else if (focusElement.focus !=null)
				{
					focusElement.focus();
				}
			}
		}
	}
}
function UnselectCurrentOption(oMaster)
{ULS0ug:;
	if (oMaster._nLevel >=0)
		{
		var oItem=oMaster._arrSelected[oMaster._nLevel];
		if (FIsIType(oItem, "option"))
			{
			UnselectItem(oItem);
			oMaster._arrSelected[oMaster._nLevel]=null;
			}
		}
}
function MakeID(oMaster, nLevel, nIndex)
{ULS0ug:;
	return oMaster._wzPrefixID+"_"+nLevel+"_"+nIndex;
}
function GetItem(oMaster, nLevel, nIndex)
{ULS0ug:;
	var oPopup=oMaster._arrPopup[nLevel];
	return oPopup ? document.getElementById(MakeID(oMaster, nLevel, nIndex)) : null;
}
function MoveMenuSelection(oMaster, iDir)
{ULS0ug:;
	var nIndex=-1;
	var nNumItems=oMaster._oRoot.childNodes.length;
	var oSelected=oMaster._arrSelected[oMaster._nLevel];
	if (oSelected)
	{
		var wzSelectedID=oSelected ? oSelected.id : null;
		if (wzSelectedID)
		{
			var nCurIndex=parseInt(wzSelectedID.substring(wzSelectedID.lastIndexOf("_")+1, wzSelectedID.length));
			nIndex=(nCurIndex+nNumItems+iDir) % nNumItems;
		}
	}
	if (nIndex < 0)
		nIndex=iDir > 0 ? 0 : (nNumItems - 1);
	var oItem;
	var nIndexStart=nIndex;
	do
	{
		oItem=GetItem(oMaster, oMaster._nLevel, nIndex);
		nIndex=(nIndex+nNumItems+iDir) % nNumItems;
	}
	while (nIndex !=nIndexStart &&
			 (!oItem || oItem.style.display=="none" ||
			  !(FIsIType(oItem, "option") || FIsIType(oItem, "submenu"))));
	ToggleMenuItem(oMaster, oMaster._nLevel, oItem);
}
function ToggleMenuItem(oMaster, nLevel, oItem)
{ULS0ug:;
	var oOld=oMaster._arrSelected[nLevel];
	if (!oItem || (oOld && oItem.id==oOld.id)) return;
	if (oOld)
	{
		UnselectItem(oOld);
		oOld.onkeydown=null;
		oOld.onmousedown=null;
		oOld.onmouseover=null;
		oOld.onmouseout=null;
		oOld.oncontextmenu=null;
	}
	UpdateLevel(oMaster, nLevel);
	SelectItem(oItem);
	oMaster._arrSelected[nLevel]=oItem;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		oItem.tabIndex=0;
		if (oItem.setActive !=null)
			oItem.setActive();
		else if (oItem.focus !=null)
			oItem.focus();
	}
	else	
	{
		var oItemAnchor=oItem.firstChild.firstChild;
		if (oItemAnchor !=null)
		{
			if (oItemAnchor.setActive !=null)
				oItemAnchor.setActive();
			else if (oItemAnchor.focus !=null)
				oItemAnchor.focus();
		}
	}
}
function SelectItem(oItem)
{ULS0ug:;
	if (!oItem) return;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		var oItemTableCell=oItem.firstChild;
		var oItemTable=oItemTableCell.firstChild;
		if (oItemTableCell.className=="ms-MenuUIItemTableCellCompact")
			oItemTableCell.className="ms-MenuUIItemTableCellCompactHover";	
		else
			oItemTableCell.className="ms-MenuUIItemTableCellHover";
		oItemTable.className="ms-MenuUIItemTableHover";
	}
	else
	{
		var oDiv=oItem.firstChild;
		if (oDiv.className.indexOf("ms-MenuUISeparator")==-1)
		{
			oDiv.className="ms-MenuUIULItemHover";
		}
	}
}
function UnselectItem(oItem)
{ULS0ug:;
	if (!oItem) return;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		var oItemTableCell=oItem.firstChild;
		var oItemTable=oItemTableCell.firstChild;
		if (oItemTableCell.className=="ms-MenuUIItemTableCellCompactHover")
			oItemTableCell.className="ms-MenuUIItemTableCellCompact";
		else
			oItemTableCell.className="ms-MenuUIItemTableCell";
		oItemTable.className="ms-MenuUIItemTable";
	}
	else
	{
		var oDiv=oItem.firstChild;
		if (oDiv.className.indexOf("ms-MenuUISeparator")==-1)
		{
			oDiv.className="ms-MenuUIULItem";
		}
	}
}
function SetImageSize(oMaster, oImg, oSize)
{ULS0ug:;
	if (oSize==null)
	{
		if (oMaster._fLargeIconMode)
			oSize=32;
		else
			oSize=16;
	}
	oImg.width=oSize;
	oImg.height=oSize;
}
function CreateMenuOption(oMaster, oMenuitem, oNode, wzID, wzHtml)
{ULS0ug:;
	var MenuTagArray=new Object();
	if (!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		MenuTagArray.icon=new MenuTag("td", null);
		MenuTagArray.label=new MenuTag("td", null);
		MenuTagArray.accKey=new MenuTag("td", null);
		MenuTagArray.arrow=new MenuTag("td", null);
	}
	else
	{
		MenuTagArray.icon=new MenuTag("span", null);
		MenuTagArray.label=new MenuTag("span", null);
		MenuTagArray.accKey=new MenuTag("span", null);
		MenuTagArray.arrow=new MenuTag("span", null);
	}
	var oAnchor=null;
	var oIcon=CreateMenuTag(MenuTagArray.icon);
	var oLabel=CreateMenuTag(MenuTagArray.label);
	var oAccKey=CreateMenuTag(MenuTagArray.accKey);
	var oArrow=CreateMenuTag(MenuTagArray.arrow);
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		oMenuitem.appendChild(oIcon);
		oMenuitem.appendChild(oLabel);
		oMenuitem.appendChild(oAccKey);
		oMenuitem.appendChild(oArrow);
	}
	else
	{
		oAnchor=document.createElement("a");
		oAnchor.className="ms-MenuUIULLink";
		oAnchor.id=wzID+"_"+"Anchor";
		oAnchor.appendChild(oIcon);
		oAnchor.appendChild(oLabel);
		oAnchor.appendChild(oAccKey);
		oAnchor.appendChild(oArrow);
		if(!oMaster._fIsRtL)
			oAccKey.style.cssFloat="left";
		else
			oAccKey.style.cssFloat="right";
		oAccKey.style.width="auto";
		oAnchor.href="javascript:;";
		oAnchor.setAttribute("onclick", "return false;");
	}
	if (oMaster._fLargeIconMode)
		oIcon.className=!oMaster._fIsRtL ? "ms-MenuUIIconLarge" : "ms-MenuUIIconLargeRtl";
	else
		oIcon.className=!oMaster._fIsRtL ? "ms-MenuUIIcon" : "ms-MenuUIIconRtL";
	oIcon.align="center";
	if (oMaster._fCompactItemsWithoutIcons && !oNode.getAttribute("iconSrc"))
		oLabel.className=!oMaster._fIsRtL ? "ms-menuuilabelcompact" : "ms-menuuilabelcompactRtl";
	else
		oLabel.className=!oMaster._fIsRtL ? "ms-MenuUILabel" : "ms-MenuUILabelRtL";
	oAccKey.className="ms-MenuUIAccessKey";
	oArrow.className="ms-MenuUISubmenuArrow";
	if (!oMaster._fLargeIconMode)
	{
		oLabel.style.whiteSpace="nowrap";
	}
	oIcon.style.whiteSpace="nowrap";
	oAccKey.style.whiteSpace="nowrap";
	oArrow.style.whiteSpace="nowrap";
	oArrow.style.display="none";
	oLabel.id=oNode.id;
	if (oNode.getAttribute("enabled")=="false")
	{
		oMenuitem.disabled=true;
		if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
			oLabel.className+=" ms-MenuUIItemTableCellDisabled";
	}
	var wzIconSrc=null, wzIconAlt=null;
	if (oNode.getAttribute("checked")=="true")
	{
		wzIconSrc=oMaster._wzChkMrkPath;
		wzIconAlt="*";
	}
	else
	{
		wzIconSrc=EvalAttributeValue(oNode, "iconSrc", "iconScript");
		wzIconAlt=oNode.getAttribute("iconAltText");
	}
	var innerHtml;
	if (wzHtml)
		innerHtml=wzHtml;
	else
		innerHtml="";
	var sText=EvalAttributeValue(oNode, "text", "textScript");
	if ((sText==null) || (sText==""))
	{
		var innerNode=oNode.firstChild;
		if ((innerNode !=null) && (innerNode.nodeType==3))
			sText=innerNode.nodeValue;
	}
	var sDescription=EvalAttributeValue(oNode, "description", "descriptionScript");
	var oMenuItemBody=null;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		oMenuItemBody=document.createElement("div");
	if (sDescription !=null && oMaster._fLargeIconMode)
	{
		var oTextSpan=document.createElement("span");
		var oTextNode=document.createTextNode(sText);
		var oBr=document.createElement("br");
		var oDescSpan=document.createElement("span");
		var oDescNode=document.createTextNode(sDescription);
		oTextSpan.style.whiteSpace="normal";
		oDescSpan.className="ms-menuitemdescription";
		oDescSpan.style.whiteSpace="normal";
		if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		{
			oMenuItemBody.appendChild(oTextSpan);
			oTextSpan.appendChild(oTextNode);
			oMenuItemBody.appendChild(oBr);
			oMenuItemBody.appendChild(oDescSpan);
			oDescSpan.appendChild(oDescNode);
		}
		else
		{
			oLabel.appendChild(oTextSpan);
			oTextSpan.appendChild(oTextNode);			
			oLabel.appendChild(oBr);
			oLabel.appendChild(oDescSpan);
			oDescSpan.appendChild(oDescNode);
		}
	}
	else if (sText !=null)
	{
		var oTextSpan=document.createElement("span");
		var hierarchy=oNode.getAttribute("hierarchy");
		if (hierarchy !=null)
		{
			var myTextSpan=document.createElement("span");
			myTextSpan.setAttribute("style","white-space: nowrap;");
			var command=oNode.getAttribute("onExpand");
			if (command !=null)
			{
				myTextSpan.setAttribute("onExpand", command);
			}
			myTextSpan.className="hierarchy";
			if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
			{
				oMenuItemBody.appendChild(myTextSpan);
				myTextSpan.innerHTML=hierarchy;
				oTextSpan.setAttribute("style","white-space: nowrap;");
				oMenuItemBody.appendChild(oTextSpan);
				oTextSpan.innerHTML=sText;
			}
			else
			{
				oLabel.appendChild(myTextSpan);
				myTextSpan.innerHTML=hierarchy;
				oTextSpan.setAttribute("style","white-space: nowrap;");
				oLabel.appendChild(oTextSpan);
				oTextSpan.innerHTML=sText;
			}
		}
		else
		{
			var oTextNode=document.createTextNode(sText);
			oTextSpan.setAttribute("style","white-space: nowrap;");
			if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
				oMenuItemBody.appendChild(oTextSpan);
			else
				oLabel.appendChild(oTextSpan);
			oTextSpan.appendChild(oTextNode);
		}
	}
	var htmlSpan=document.createElement("span");
	htmlSpan.innerHTML=innerHtml;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		oMenuItemBody.appendChild(htmlSpan);
	else
		oLabel.appendChild(htmlSpan);
	var wzIconId=wzID+"_"+"ICON";
	var oImg=document.createElement("img");
	oImg.className="ms-MenuUIULImg";
	SetImageSize(oMaster, oImg);
	oIcon.appendChild(oImg);
	oImg.id=wzIconId;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		var oImgLbl=document.createElement("LABEL");
		oLabel.appendChild(oImgLbl);
		oImgLbl.htmlFor=wzIconId;
		oImgLbl.appendChild(oMenuItemBody);
	}
	if (wzIconSrc)
	{
		oImg.src=wzIconSrc;
		oImg.alt=wzIconAlt ? wzIconAlt : "";
		oImg.title=wzIconAlt ? wzIconAlt : "";
	}
	else
	{
		oImg.src="../../arquivos/img/blank.gif";
		oImg.alt="";
		oImg.title="";
	}
	var wzAccKey=oNode.getAttribute("accessKeyText");
	if (wzAccKey)
		oAccKey.innerHTML=wzAccKey;
	else
		oAccKey.style.display="none";
	SetIType(oMenuitem, "option");
	if ((typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		oMenuitem.appendChild(oAnchor);
	}
}
function CreateMenuSeparator(oMaster, oMenuitem)
{ULS0ug:;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		var oCell=document.createElement("td");
		var oDiv=document.createElement("div");
		oMenuitem.appendChild(oCell);
		oCell.appendChild(oDiv);
		if (oMaster._fLargeIconMode)
			oDiv.className=!oMaster._fIsRtL ? "ms-MenuUISeparatorLarge" : "ms-MenuUISeparatorLargeRtl";
		else
			oDiv.className=!oMaster._fIsRtL ? "ms-MenuUISeparator" : "ms-MenuUISeparatorRtL";
		oDiv.innerHTML="&nbsp;";
	}
	else
	{
		if (oMaster._fLargeIconMode)
			oMenuitem.className=!oMaster._fIsRtL ? "ms-MenuUISeparatorLarge" : "ms-MenuUISeparatorLargeRtl";
		else
			oMenuitem.className=!oMaster._fIsRtL ? "ms-MenuUISeparator" : "ms-MenuUISeparatorRtL";
		oMenuitem.innerHTML="&nbsp;";
	}
	SetIType(oMenuitem, "separator");
}
function CreateSubmenu(oMaster, oMenuitem, oNode, wzID)
{ULS0ug:;
	var oLabelNode=FindLabel(oNode);
	CreateMenuOption(oMaster, oMenuitem, oNode, wzID, oLabelNode ? oLabelNode.innerHTML : null);
	var oArrow=null;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		oArrow=oMenuitem.childNodes[3];
	else
		oArrow=oMenuitem.childNodes[0].childNodes[3];	
	oArrow.style.display="inline";
	var oArrowImg=document.createElement("img");
	oArrowImg.className="ms-MenuUIULImg";
	SetImageSize(oMaster, oArrowImg, 16);
	oArrow.appendChild(oArrowImg);
	oArrowImg.src=!oMaster._fIsRtL ? oMaster._wzMArrPath : oMaster._wzMArrPathRtL;
	oArrowImg.alt=L_SubMenu_Text;
	oArrowImg.title="";
	SetIType(oMenuitem, "submenu");
	oMenuitem.submenuRoot=oNode;
}
function MergeAttributes(oTarget, oSource)
{ULS0ug:;
	if (browseris.nav || oTarget.mergeAttributes==null)
	{
		var oAttributes=oSource.attributes;
		for (var i=0; i < oAttributes.length; i++)
		{
			var oAttrib=oAttributes[i];
			if (oAttrib !=null &&
				oAttrib.specified &&
				oAttrib.nodeName !="id" &&
				oAttrib.nodeName !="ID" &&
				oAttrib.nodeName !="name")
			{
				oTarget.setAttribute(oAttrib.nodeName, oAttrib.nodeValue);
			}
		}
		if (oSource.getAttribute("type") !=null)
			oTarget.setAttribute("type", oSource.getAttribute("type"));
		if (oSource.submenuRoot !=null)
			oTarget.submenuRoot=oSource.submenuRoot;
	}
	else
	{
		oTarget.mergeAttributes(oSource);
	}
}
function CreateMenuItem(oMaster, oNode, wzID, wzHtml)
{ULS0ug:;
	if (FIsIType(oNode, "label")) return;
	var MenuTagArray=new Object();
	if (!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		MenuTagArray.menuitem=new MenuTag("tr", null);
	}
	else
	{
		MenuTagArray.menuitem=new MenuTag("div", "ms-MenuUIULItem");
	}
	var oMenuitem=CreateMenuTag(MenuTagArray.menuitem);
	MergeAttributes(oMenuitem, oNode);
	if (FIsIType(oNode, "separator"))
	{
		if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
		{
			CreateMenuSeparator(oMaster, oMenuitem);
			return oMenuitem;
		}
		else
		{
			var oLi=document.createElement("li");
			MergeAttributes(oLi, oMenuitem);
			CreateMenuSeparator(oMaster, oMenuitem);
			oLi.appendChild(oMenuitem);
			oLi.id=wzID;
			return oLi;
		}
	}
	if (!GetIType(oNode)) SetIType(oNode, "option");
	var oFmtTableRow=null;
	var oFmtTableCell=null;
	var oFmtTable=null;
	var oFmtTableBody=null;
	var oLi=null;
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		oFmtTableRow=document.createElement("tr");
		oFmtTableCell=document.createElement("td");
		oFmtTable=document.createElement("table");
		oFmtTableBody=document.createElement("tbody");
		oFmtTableRow.appendChild(oFmtTableCell);
		oFmtTableCell.appendChild(oFmtTable);
		oFmtTable.appendChild(oFmtTableBody);
		oFmtTableBody.appendChild(oMenuitem);
		if (oMaster._fCompactItemsWithoutIcons && !oNode.getAttribute("iconSrc"))
			oFmtTableCell.className="ms-MenuUIItemTableCellCompact";
		else
			oFmtTableCell.className="ms-MenuUIItemTableCell";
		oFmtTable.className="ms-MenuUIItemTable";
		oFmtTable.width="100%";
		oFmtTable.cellSpacing=0;
		oFmtTable.cellPadding=0;
		if (oMenuitem.disabled==true ||oMenuitem.getAttribute("enabled")=="false")
			oFmtTableCell.className+=" ms-MenuUIItemTableCellDisabled";
	}
	else
	{
		oLi=document.createElement("li");
		oLi.appendChild(oMenuitem);
	}
	if (FIsIType(oNode, "submenu"))
		CreateSubmenu(oMaster, oMenuitem, oNode, wzID);
	else if (FIsIType(oNode, "option"))
		CreateMenuOption(oMaster, oMenuitem, oNode, wzID, wzHtml);
	if (oMenuitem.disabled==true ||
		oMenuitem.getAttribute("enabled")=="false")
	{
		oMenuitem.disabled=false;
		oMenuitem.className+=" ms-MenuUIDisabled";
		oMenuitem.disabled=false;
		var childLen=oMenuitem.childNodes.length;
		for (var nIndex=0; nIndex < childLen; nIndex++)
		{
			var childNode=oMenuitem.childNodes[nIndex];
			if (childNode.nodeType !=1 || childNode.tagName=="A")
				continue;
			childNode.disabled=true;
		}
		oMenuitem.optionDisabled=true;
	}
	if(!(typeof(_fV4UI) !="undefined" && _fV4UI))
	{
		MergeAttributes(oFmtTableRow, oMenuitem);
		if (oMenuitem.optionDisabled !=null)
			oFmtTableRow.optionDisabled=oMenuitem.optionDisabled;
		oFmtTableRow.id=wzID;
		SetIType(oFmtTableRow, GetIType(oMenuitem));
		return oFmtTableRow;
	}
	else
	{
		MergeAttributes(oLi, oMenuitem);
		if (oMenuitem.optionDisabled !=null)
			oLi.optionDisabled=oMenuitem.optionDisabled;
		oLi.id=wzID;	
		SetIType(oLi, GetIType(oMenuitem));
		return oLi;
	}
}
function GetItems(oMaster)
{ULS0ug:;
	if (!oMaster._oContents) PrepContents(oMaster);
	return oMaster._oContents.childNodes;
}
function GetIType(oItem)
{ULS0ug:;
	return oItem ? oItem.getAttribute("type") : null;
}
function FIsIType(oItem, wzType)
{ULS0ug:;
	return FIStringEquals(GetIType(oItem), wzType);
}
function SetIType(oItem, wzType)
{ULS0ug:;
	if (oItem) oItem.setAttribute("type", wzType);
}
function FIStringEquals(wzX, wzY)
{ULS0ug:;
	return wzX !=null && wzY !=null && wzX.toLowerCase()==wzY.toLowerCase();
}
function RenderAccessibleMenu(oMaster, fForceRefresh)
{ULS0ug:;
	if (fForceRefresh)
	{
		oMaster._oContents=null;
		oMaster._oRoot=null;
		oMaster._nLevel=0;
		oMaster._arrPopup=new Array();
		oMaster._arrSelected=new Array();
	}
	else
	{
		oMaster._oRoot=oMaster._oContents;
	}
	if (!oMaster._oContents) PrepContents(oMaster);
	if (!oMaster._oContents) return;
	if (!oMaster._oRoot)
	{
		oMaster._nLevel=0;
		oMaster._oRoot=oMaster._oContents;
	}
	FixUpMenuStructure(oMaster);
	var menuDir=oMaster._fIsRtL ? "rtl" : "ltr";
	g_menuHtc_html="<html dir='"+menuDir+"'><head><title>"+L_AccessibleMenu_Text+"</title></head><body><ul id='root'>";
	RenderMenuLevel(oMaster, oMaster._oRoot, true);
	g_menuHtc_html=g_menuHtc_html+"</ul></body></html>";
	oMaster._accessibleMenuInProgress=true;
	var oNewWindow=window.open("/_layouts/blank.htm", "_blank", "status=no,toolbar=no,menubar=no,location=no");	
	oMaster._accessibleMenu=oNewWindow;
	oNewWindow.document.write(g_menuHtc_html);
	oNewWindow.document.close();
		oNewWindow.onunload=MenuHtc_hide;
	oNewWindow.focus();
}
function CloseAccessibleMenu(oMaster, n)
{ULS0ug:;
	if (n==null)
		n=0;
	if (oMaster !=null)
	{
		oMaster._accessibleMenuInProgress=false;
		if (n==0 || n==1)
		{
			if (oMaster._accessibleMenu !=null)
			{
				oMaster._accessibleMenu.close();
				try
				{
					if (oMaster._accessibleMenu.opener !=null)
						oMaster._accessibleMenu.opener.focus();					
				}
				catch(e)
				{
				}
				oMaster._accessibleMenu=null;
			}
		}
		if (n==0 || n==2)
		{
			if (oMaster._onDestroy !=null)
			{
				oMaster._onDestroy();
				oMaster._onDestroy=null;
			}
		}
	}
}
function GetMenuItemText(oMaster, oNode, s)
{ULS0ug:;
	if (s=="")
	{
		s=EvalAttributeValue(oNode, "text", "textScript");
		var description=EvalAttributeValue(oNode, "description", "descriptionScript");
		if (description !=null &&
			description !="" &&
			oMaster._fLargeIconMode)
		{
			if (s !="")
				s=s+": ";
			s=s+description;
		}
	}
	if (oNode.getAttribute("checked")=="true")
		s="* "+s;
	if (oNode.title !=null && oNode.title !="")
		s=s+": "+oNode.title;
	return s;
}
function GetMenuItemEnabled(oNode, fEnabled)
{ULS0ug:;
	if (!fEnabled)
		return false;
	if (oNode.getAttribute("enabled")=="false")
		return false;
	if (oNode.getAttribute("disabled") !=null && oNode.getAttribute("disabled") !="")
		return false;
	return true;
}
var g_menuHtc_html;
function RenderMenuLevel(oMaster, oRoot, fEnabled)
{ULS0ug:;
	for (var nIndex=0; nIndex < oRoot.childNodes.length; nIndex++)
	{
		var oNode=oRoot.childNodes[nIndex];
		if (oNode.nodeType !=1)
			continue;
		if (oNode.style.display=="none")
			continue;
		if (FIsIType(oNode, "option"))
		{
			var s=GetMenuItemText(oMaster, oNode, oNode.innerHTML.trim());
			if (!GetMenuItemEnabled(oNode, fEnabled))
			{
				g_menuHtc_html=g_menuHtc_html+"<li><span id=\""
+oNode.id+"\">"
+s+"</span></li>";
			}
			else
			{
				g_menuHtc_html=g_menuHtc_html+"<li><a href=\"#\" id=\""
+oNode.id+"\" "
+"onMenuClick"
+"=\""
+oNode.getAttribute("onMenuClick")
+"\" onclick=\""
+"javascript:opener.ExecuteOnAccessibleClick(this.getAttribute('"+"onMenuClick"+"')); return false;"
+"\">"
+s
+"</a></li>";
			}
		}
		else if (FIsIType(oNode, "submenu"))
		{
			var s=GetMenuItemText(oMaster, oNode, "");
			g_menuHtc_html=g_menuHtc_html+"<li><span id=\""+oNode.id+"\">"+s;
			for (var n=0; n < oNode.childNodes.length; n++)
			{
				var oLabelNode=oNode.childNodes[n];
				if (oLabelNode.nodeType !=1)
					continue;
				if (oLabelNode.style.display=="none")
					continue;
				if (FIsIType(oLabelNode, "label"))
				{
					g_menuHtc_html=g_menuHtc_html+" "+oLabelNode.innerHTML;
					break;
				}
			}
			g_menuHtc_html=g_menuHtc_html+"</span><ul>";
			RenderMenuLevel(oMaster, oNode, GetMenuItemEnabled(oNode, fEnabled));
			g_menuHtc_html=g_menuHtc_html+"</ul></li>";
		}
	}
}
function ExecuteOnAccessibleClick(fnOnClick)
{ULS0ug:;
	var oMaster=g_menuHtc_lastMenu;
	if (oMaster !=null)
	{
		CloseAccessibleMenu(oMaster, 1);
		ExecuteOnClick(fnOnClick, oMaster);
		CloseAccessibleMenu(oMaster, 2);
	}
}
function FIsIHidden(oItem)
{ULS0ug:;
	if (oItem)
	{
		var hiddenFunc=oItem.getAttribute("hidden");
		if (!hiddenFunc) return false;
		return eval(hiddenFunc);
	}
	else
		return false;
}
function EvalAttributeValue(oNode, sAttribute1, sAttribute2)
{ULS0ug:;
	var result=oNode.getAttribute(sAttribute2);
	if (result !=null &&
		result.toLowerCase().indexOf("javascript:")==0)
	{
		result=eval(result.substring(11));
		if (result !=null && result !="")
			return result;
	}
	var result=oNode.getAttribute(sAttribute1);
	if (result==null)
		return "";
	return result;
}
var MMU_chDelim=",";
var MMU_chDelimEnc="%2c";
var MMU_postbackPrefix="javascript:__doPostBack(";
var MMU_chDelim2="%";
var MMU_chDelim2Enc="%25";
function MHash_New()
{ULS0ug:;
	var oMaster=new Object();
	oMaster._keys=new Array();
	oMaster._values=new Array();
	return oMaster;
}
function MHash_Add(oMaster, oKey, oValue)
{ULS0ug:;
	oMaster._keys.push(oKey);
	oMaster._values.push(oValue);
}
function MHash_Count(oMaster)
{ULS0ug:;
	return oMaster._keys.length;
}
function MHash_Keys(oMaster)
{ULS0ug:;
	return oMaster._keys;
}
function MHash_Values(oMaster)
{ULS0ug:;
	return oMaster._values;
}
function MHash_Exists(oMaster, oKey)
{ULS0ug:;
	for (var i=0; i < oMaster._keys.length; i++)
	{
		if (oMaster._keys[i]==oKey)
			return true;
	}
	return false;
}
function MHash_Item(oMaster, oKey)
{ULS0ug:;
	for (var i=0; i < oMaster._keys.length; i++)
	{
		if (oMaster._keys[i]==oKey)
			return oMaster._values[i];
	}
	return null;
}
var MMU_reDelimEnc=new RegExp(MMU_chDelimEnc, "g");
var MMU_reDelim2Enc=new RegExp(MMU_chDelim2Enc, "g");
var MMU_reDelimDec=new RegExp(MMU_chDelim, "g");
var MMU_reDelim2Dec=new RegExp(MMU_chDelim2, "g");
function MMU_EncVal(strDec)
{ULS0ug:;
	return strDec.replace(MMU_reDelimDec, MMU_chDelimEnc).replace(MMU_reDelim2Dec, MMU_chDelim2Enc);
}
function MMU_DecVal(strEnc)
{ULS0ug:;
	return strEnc.replace(MMU_reDelim2Enc, MMU_chDelim2).replace(MMU_reDelimEnc, MMU_chDelim);
}
function MMU_ParseNV(rgnv)
{ULS0ug:;
	var dictNV=MHash_New();
	var rgstrNV=rgnv.split(MMU_chDelim);
	if (rgstrNV !=null)
	{
		var i;
		for (i=0; i < rgstrNV.length; i++)
		{
			var strNV=rgstrNV[i];
			var iEq=strNV.indexOf("=");
			if (iEq==0)
			{
				continue;
			}
			var name=null;
			var value=null;
			if (iEq < 0)
			{
				name=strNV;
			}
			else
			{
				name=strNV.substr(0, iEq);
				if (iEq < strNV.length - 1)
				{
					value=MMU_DecVal(strNV.substr(iEq+1));
				}
				else
				{
					value="";
				}
			}
			MHash_Add(dictNV, name, value);
		}
	}
	return dictNV;
}
function MMU_ParseNVAttr(elem, attr)
{ULS0ug:;
	var val=elem.getAttribute(attr);
	if (val==null && elem.childNodes.length > 0 && elem.childNodes[0].nodeType==1)
	{
		val=elem.childNodes[0].getAttribute(attr);
	}
	if (val==null)
	{
		return MHash_New();
	}
	return MMU_ParseNV(val);
}
function MMU_ResetMenuState(menu, dis, hid, chk, tokval)
{ULS0ug:;
	var i;
	for (i=0; i < menu.childNodes.length; i++)
	{
		var mnu=menu.childNodes[i];
		if (mnu.nodeType !=1)
			continue;
		var mnuId=mnu.getAttribute("id");
		if ((mnu !=null) && (mnuId !=null) && (mnuId.length > 0))
		{
			if (mnu.childNodes.length > 0)
			{
				MMU_ResetMenuState(mnu, dis, hid, chk, tokval);
				continue;
			}
			if (MHash_Exists(hid, mnuId))
			{
				mnu.style.display="none";
			}
			else
			{
				mnu.style.display="";
				var enabledOverride=mnu.getAttribute("enabledOverride");
				if ((enabledOverride !=null) && (enabledOverride.length >0))
				{
					mnu.setAttribute("enabled", enabledOverride, 0);
				}
				else
				{
					if (MHash_Exists(dis, mnuId))
					{
						mnu.setAttribute("enabled", "false", 0);
					}
					else
					{
						mnu.setAttribute("enabled", "true", 0);
						if (MHash_Exists(chk, mnuId))
						{
							mnu.setAttribute("checked", "true", 0);
						}
						else
						{
							mnu.setAttribute("checked", "false", 0);
						}
					}
				}
			}
			MMU_ReplTokValAttr(mnu, "onMenuClick", tokval);
			MMU_ReplTokValAttr(mnu, "text", tokval);
			MMU_ReplTokValAttr(mnu, "description", tokval);
			MMU_ReplTokValVal(mnu, tokval)
		}
	}
}
function MMU_ReplTokValAttr(elem, attr, tokval)
{ULS0ug:;
	var val=elem.getAttribute(attr);
	var orig=elem.getAttribute(attr+"_Original");
	if ((val !=null) && (orig==null) && (MHash_Count(tokval) > 0))
	{
		elem.setAttribute(attr+"_Original", val, 0);
	}
	else if ((val !=null) && (orig !=null) && (val !=orig))
	{
		val=orig;
	}
	if ((val==null) || (val.length <=0))
	{
		return;
	}
	var newVal=MMU_ReplTokVal(val,  tokval);
	if (newVal !=val)
	{
		elem.setAttribute(attr, newVal, 0);
	}
}
function MMU_ReplTokValVal(item, tokval)
{ULS0ug:;
	if(item.nextSibling==null)
	{
		return;
	}
	var val=item.nextSibling.nodeValue;
	var orig=item.getAttribute("valOrig");
	if ((val !=null) && (orig==null) && (MHash_Count(tokval) > 0))
	{
		orig=val;
		item.setAttribute("valOrig", orig, 0);
	}
	else if ((val !=null) && (orig !=null) && (val !=orig))
	{
		val=orig;
	}
   var newVal=MMU_ReplTokVal(val,  tokval);
	if ((val !=null) && (newVal !=null) && (newVal !=val))
	{
		item.nextSibling.nodeValue=newVal;
	}
}
function MMU_ReplTokVal(toFix, tokval)
{ULS0ug:;
	if ((toFix !=null) && (toFix.indexOf("%") >=0) && (tokval !=null) && (MHash_Count(tokval) > 0))
	{
		var toks=MHash_Keys(tokval);
		var vals=MHash_Values(tokval);
		var i;
		for (i=0; i < toks.length; i++)
		{
			var tok=toks[i];
			var val=vals[i];
			toFix=toFix.replace("%"+tok+"%", val);
		}
	}
   return toFix;
}
var g_MMU_HighlightedEcbTable=null;
var g_MMU_HighlightedEcbTableOpen=null;
var g_MMU_OpenTimeoutHandle=null;
function MMU_Open(menu, ecbLink, e, fAlignRight, alignId, delay)
{ULS0ug:;
	try
	{
		if ((menu==null) || (ecbLink==null))
		{
			return;
		}
		if ((ecbLink.getAttribute("suppressBubbleIfPostback") !=null) && (e !=null) && (e.srcElement !=null) && (e.srcElement.href !=null) &&
			(e.srcElement.href.substr(0, MMU_postbackPrefix.length)==MMU_postbackPrefix))
		{
			event.cancelBubble=true;
			return;
		}
		ClearHighlightedEcbTableOpen();
		if (fAlignRight==null)
		{
			fAlignRight=true;
		}
		MMU_ResetMenuState(menu, MMU_ParseNVAttr(ecbLink, "menuItemsDisabled"), MMU_ParseNVAttr(ecbLink, "menuItemsHidden"),
			MMU_ParseNVAttr(ecbLink, "menuItemsChecked"), MMU_ParseNVAttr(ecbLink, "menuTokenValues"));
		var elemAlign=null;
		if ((alignId !=null) && (alignId.length > 0))
		{
			elemAlign=document.getElementById(alignId);
		}
		if (elemAlign==null)
		{
			elemAlign=document.getElementById(ecbLink.id+"_t");
		}
		if (elemAlign==null)
		{
			elemAlign=ecbLink;
		}
		MMU_EcbHighlight(MMU_GetHighlightElement(ecbLink), true);
		var openMenuScript="MenuHtc_show(document.getElementById('"+menu.id+"'), document.getElementById('"+elemAlign.id+				"'), true, "+fAlignRight+", null);";
		openMenuScript+="SetEcbMouseOutAndDestroy('"+menu.id+"');"
		if ((delay !=null) && (delay > 0))
		{
			openMenuScript+=" g_MMU_OpenTimeoutHandle=null;";
			g_MMU_OpenTimeoutHandle=window.setTimeout(openMenuScript, delay, "javascript");
		}
		else
		{
			eval(openMenuScript);
		}
		if (e !=null)
			e.cancelBubble=true;
	}
	catch (ex)
	{
		alert(L_Loading_Error_Text);
	}
}
function SetEcbMouseOutAndDestroy(menuId)
{ULS0ug:;
		if (g_MMU_HighlightedEcbTable !=null)
		{
			g_MMU_HighlightedEcbTable.onmouseout=null;
			g_MMU_HighlightedEcbTableOpen=g_MMU_HighlightedEcbTable;
			document.getElementById(menuId)._onDestroy=ClearHighlightedEcbTableOpen;
		}
}
function ClearHighlightedEcbTableOpen()
{ULS0ug:;
	if (g_MMU_HighlightedEcbTableOpen !=null)
	{
		MMU_EcbHighlight(g_MMU_HighlightedEcbTableOpen, false);
		g_MMU_HighlightedEcbTableOpen=null;
	}
}
function MMU_EcbLinkOnFocusBlurDeferCall(menu, ecbLink, fOnFocus)
{ULS0ug:;
	if (fOnFocus)
	{
		ecbLink.onblur=fOnFocus ? new Function("MMU_EcbLinkOnFocusBlurDeferCall(null, this, false)") : null;
	}
	if (g_MMU_HighlightedEcbTableOpen !=null)
		return;
	var ecbTable=document.getElementById(ecbLink.id+"_t");
	if (ecbTable !=null)
	{
		MMU_EcbHighlight(ecbTable, fOnFocus);
	}
}
function MMU_EcbTableMouseOverOutDeferCall(ecbTable, fMouseOver)
{ULS0ug:;
	if (fMouseOver)
	{
		if (ecbTable==g_MMU_HighlightedEcbTableOpen)
		{
			return;
		}
		ecbTable.onmouseout=fMouseOver ? new Function("MMU_EcbTableMouseOverOut(this, false)") : null;
	}
	MMU_EcbHighlight(ecbTable, fMouseOver);
}
function MMU_EcbHighlight(ecbTable, fHighlight)
{ULS0ug:;
	if ((ecbTable==null) && (!fHighlight))
	{
		ecbTable=g_MMU_HighlightedEcbTableOpen;
	}
	if (ecbTable==null)
	{
		return;
	}
	if (fHighlight==null)
	{
		fHighlight=false;
	}
	var hoverActive=ecbTable.getAttribute("hoverActive");
	var hoverInactive=ecbTable.getAttribute("hoverInactive");
	if ((hoverActive==null))
	{
		hoverActive="ms-selectedtitle";
	}
	if ((hoverInactive==null))
	{
		hoverInactive="ms-unselectedtitle";
	}
	if (fHighlight)
	{
		ecbTable.className=hoverActive;
		g_MMU_HighlightedEcbTable=ecbTable;
	}
	else
	{
		ecbTable.className=hoverInactive;
	}
	var menuFormat=ecbTable.getAttribute("menuformat");
	var imageCell=document.getElementById(ecbTable.id+"i");
	if (imageCell !=null && menuFormat!=null && menuFormat=="ArrowOnHover")
	{
		imageCell.style.visibility=fHighlight ? "visible" : "hidden";
	}
	if (!fHighlight)
	{
		g_MMU_HighlightedEcbTable=null;
	}
}
function MMU_PopMenuIfShowingDeferCall(menuElement)
{ULS0ug:;
	if (!IsAccessibilityFeatureEnabledProxy() && g_menuHtc_lastMenu)
	{
		var menuType=g_menuHtc_lastMenu.getAttribute("type");
		if (menuType && menuType=="ServerMenu")
			menuElement.onclick();
	}
}
function MMU_HandleArrowSplitButtonKeyDown(e, id, a ,t)
{ULS0ug:;
	if (!e.shiftKey &&
		!e.altKey &&
		!e.ctrlKey &&
		(GetEventKeyCode(e)==13))
	{
		return;
	}
	if(a) return MMU_EcbLinkOnKeyDown(byid(id), a, e);
}
function MMU_HandleArrowOnHoverKeyDown(menu, ecbLink, e)
{ULS0ug:;
	if (!e.shiftKey &&
		!e.altKey &&
		!e.ctrlKey &&
		(GetEventKeyCode(e)==13))
	{
		return;
	}
	if(ecbLink) return MMU_EcbLinkOnKeyDown(menu, ecbLink, e);
}
function MMU_GetHighlightElement(elem)
{ULS0ug:;
	var highlightElement=null
	highlightElement=document.getElementById(elem.id+"_t");
	if (highlightElement !=null)
		return highlightElement;
	else
		return elem;
}
var g_MMU_theFormActionAtPageLoad=null;
var g_MMU_theFormActionAtPreMenuOpen=null;
var g_MMU_Form0ActionAtPageLoad=null;
var g_MMU_Form0ActionAtPreMenuOpen=null;
function MMU_CallbackPreMenuOpen(templateClientId, menuClientId, callbackEventReference, timeoutLength, timeoutMessage, e)
{ULS0ug:;
	try
	{
		g_MMU_theFormActionAtPreMenuOpen=(theForm !=null ? theForm.action : "null");
		g_MMU_Form0ActionAtPreMenuOpen=(document.forms !=null && document.forms.length > 0 ? document.forms[0].action : "null");
		var menuTemplate=document.getElementById(templateClientId);
		var menuLink=document.getElementById(menuClientId);
		if ((menuLink.getAttribute("suppressBubbleIfPostback") !=null) && (e !=null) && (e.srcElement !=null) && (e.srcElement.href !=null) &&
			(e.srcElement.href.substr(0, MMU_postbackPrefix.length)==MMU_postbackPrefix))
		{
			event.cancelBubble=true;
			return;
		}
		MMU_StopPendingTimerEventsFromCallback();
		MMU_RemoveCallbackItemsFromMenuTemplate(menuTemplate);
		var menu=document.getElementById(menuClientId);
		menu.setAttribute("callbackInProgress", "true", 0);
		var loadingMessageMenuItem=CAMOpt(menuTemplate, L_Loading_Text, "null");
		if (loadingMessageMenuItem !=null)
		{
			loadingMessageMenuItem.setAttribute("callbackitem", "true", 0);
			loadingMessageMenuItem.setAttribute("enabled", "false", 0);
		}
		var callbackContext=templateClientId+";"+menuClientId+";"+timeoutMessage.replace(/;/g, "%semi%").replace(/\'/g, "%quot%");
		callbackEventReference=callbackEventReference.replace(/__CALLBACKCONTEXT__/g, callbackContext);
		eval(callbackEventReference);
		g_MMU_RequestTimeoutTimeoutHandle=window.setTimeout("MMU_CallbackErrHandler('timeout', '"+callbackContext+"')", timeoutLength, "javascript");
	}
	catch (ex)
	{
		alert(L_Loading_Error_Text);
	}
}
var g_MMU_RequestTimeoutTimeoutHandle=null;
function MMU_RemoveCallbackItemsFromMenuTemplate(menuTemplate)
{ULS0ug:;
	try
	{
		for (var menuChildIndex=0; menuChildIndex < menuTemplate.childNodes.length; menuChildIndex++)
		{
			var menuChild=menuTemplate.childNodes[menuChildIndex];
			if ((menuChild.nodeType==1) && (menuChild.getAttribute("callbackitem")=="true"))
			{
				menuTemplate.removeChild(menuChild);
				--menuChildIndex;
			}
		}
	}
	catch (ex)
	{
		alert(L_Loading_Error_Text);
	}
}
function MMU_StopPendingTimerEventsFromCallback()
{ULS0ug:;
	if (g_MMU_OpenTimeoutHandle !=null)
	{
		window.clearTimeout(g_MMU_OpenTimeoutHandle);
		g_MMU_OpenTimeoutHandle=null;
	}
	if (g_MMU_RequestTimeoutTimeoutHandle !=null)
	{
		window.clearTimeout(g_MMU_RequestTimeoutTimeoutHandle);
		g_MMU_RequestTimeoutTimeoutHandle=null;
	}
}
function MMU_UpdateMenuTemplateWithErrorItem(menuTemplate, errorString)
{ULS0ug:;
	MMU_RemoveCallbackItemsFromMenuTemplate(menuTemplate);
	var errorMenuItem=CAMOpt(menuTemplate, errorString, "null");
	if (loadingMessageMenuItem !=null)
	{
		loadingMessageMenuItem.setAttribute("callbackitem", "true", 0);
		loadingMessageMenuItem.setAttribute("enabled", "false", 0);
	}
}
function MMU_UpdateOpenedMenuWithErrorItem(menu, menuTemplate, errorString)
{ULS0ug:;
	MMU_UpdateMenuTemplateWithErrorItem(menuTemplate, errorString);
	HideMenu(menuTemplate);
	MMU_Open(menuTemplate, menu);
}
function MMU_CallbackHandler(result, contextString)
{ULS0ug:;
	{
		MMU_StopPendingTimerEventsFromCallback();
		var context=MMU_ParseContext(contextString);
		var menuTemplate=document.getElementById(context.TemplateClientId);
		if (menuTemplate==null) { alert(L_Loading_Error_Text); return; }
		var menu=document.getElementById(context.MenuClientId);
		if (menu==null) { alert(L_Loading_Error_Text); return; }
		var disabledIds="";
		var hiddenIds="";
		var checkedIds="";
		var tokensAndValues="";
		var menuItemsHtml="";
		var parts=result.split(MMU_chDelim);
		if ((parts==null) || (parts.length !=5))
		{
			menuItemsHtml=MMU_GenerateErrorMenuItem(L_Loading_Error_Text);
		}
		else
		{
			var re=new RegExp(MMU_chDelimEnc,"g");
			disabledIds=parts[0].replace(re, MMU_chDelim);
			hiddenIds=parts[1].replace(re, MMU_chDelim);
			checkedIds=parts[2].replace(re, MMU_chDelim);
			tokensAndValues=parts[3].replace(re, MMU_chDelim);
			menuItemsHtml=parts[4].replace(re, MMU_chDelim);
		}
		menu.setAttribute("menuItemsDisabled", disabledIds, 0);
		menu.setAttribute("menuItemsHidden", hiddenIds, 0);
		menu.setAttribute("menuItemsChecked", checkedIds, 0);
		menu.setAttribute("menuTokenValues", tokensAndValues, 0);
		MMU_RemoveCallbackItemsFromMenuTemplate(menuTemplate);
		menuTemplate.innerHTML=menuTemplate.innerHTML+menuItemsHtml;
		HideMenu(menuTemplate);
		MMU_Open(menuTemplate, menu);
		menu.setAttribute("callbackInProgress", "", 0);
	}
	{
	}
}
function MMU_CallbackErrHandler(result, contextString)
{ULS0ug:;
	try
	{
		alert(L_Loading_Error_Text);
		var context=MMU_ParseContext(contextString);
		var menuTemplate=document.getElementById(context.TemplateClientId);
		if (menuTemplate==null) { alert(L_Loading_Error_Text); return; }
		var menu=document.getElementById(context.MenuClientId);
		if (menu==null) { alert(L_Loading_Error_Text); return; }
		menu.setAttribute("callbackInProgress", "", 0);
		var errorMessage=L_Loading_Error_Text;
		if ((result=="timeout") && (context.TimeoutMessage !=null) && (context.TimeoutMessage.length > 0))
		{
			errorMessage=context.TimeoutMessage;
		}
		MMU_UpdateOpenedMenuWithErrorItem(menu, menuTemplate, errorMessage);
		;
	}
	catch (ex)
	{
		alert(L_Loading_Error_Text);
	}
}
function MMU_ParseContext(contextString)
{ULS0ug:;
	try
	{
		var context=new Object();
		var values=contextString.split(';');
		context.TemplateClientId=values[0];
		context.MenuClientId=values[1];
		context.TimeoutMessage=values[2].replace(/%semi%/g, ";").replace(/%quot%/g, "\'");
		return context;
	}
	catch (ex)
	{
		alert(L_Loading_Error_Text);
	}
}
if( typeof(Sys) !="undefined" && Sys && Sys.Application ){
	Sys.Application.notifyScriptLoaded();
}
if(typeof(NotifyScriptLoadedAndExecuteWaitingJobs)=="function"){
	NotifyScriptLoadedAndExecuteWaitingJobs("menu.js");
}

