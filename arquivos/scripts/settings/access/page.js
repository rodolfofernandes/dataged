$(document).ready(function () {
    $(".dropkick").dropkick({
        theme: "dataxdoc",
        change: function (value, label) {
            $("[id$=ddlFileCabinetByDocument] option, [id$=ddlArchivists] option, [id$=ddlOperators] option, [id$=ddlFileCabinet] option, [id$=ddlFileCabinetArchivist] option, [id$=ddlArquivistaResponsavel] option, [id$=ddlFilesCabinetsOperator] option").each(function () {
                if ($(this).val() == value) {
                    $(this).attr("selected", "selected");

                    $(this).closest("form").submit();
                }
            });
        }
    });
});

$(document).ready(function () {
    $("[id$=ddlArchivists] .dk_toggle").addClass("htmlSelect240");
    $("[id$=ddlOperators] .dk_toggle").addClass("htmlSelect240");
    $("[id$=ddlFileCabinet] .dk_toggle").addClass("htmlSelect240");
    $("[id$=ddlFileCabinetArchivist] .dk_toggle").addClass("htmlSelect240");
    $("[id$=ddlConvidados] .dk_toggle").addClass("htmlSelect250");
    $("[id$=ddlArquivos3] .dk_toggle").addClass("htmlSelect250");
    $("[id$=ddlArquivistaResponsavel] .dk_toggle").addClass("htmlSelect240");
    $("[id$=ddlFilesCabinetsOperator] .dk_toggle").addClass("htmlSelect240");
});

//SELECIONA ACIMA
function OnTreeClick(evt) {
    
    var src = window.event != window.undefined ? window.event.srcElement : evt.target;
    var isChkBoxClick = (src.tagName.toLowerCase() == "input" && src.type == "checkbox");
    if (isChkBoxClick) {
        var parentTable = GetParentByTagName("table", src);
        var nxtSibling = parentTable.nextSibling;
        if (nxtSibling && nxtSibling.nodeType == 1)//check if nxt sibling is not null & is an element node  
        {
            if (nxtSibling.tagName.toLowerCase() == "div") //if node has children  
            {
                //check or uncheck children at all levels  
                CheckUncheckChildren(parentTable.nextSibling, src.checked);
            }
        }
        //check or uncheck parents at all levels  
        CheckUncheckParents(src, src.checked);
    }
}

function CheckUncheckChildren(childContainer, check) {
    var childChkBoxes = childContainer.getElementsByTagName("input");
    var childChkBoxCount = childChkBoxes.length;
    for (var i = 0; i < childChkBoxCount; i++) {
        childChkBoxes[i].checked = false;
    }
}

function CheckUncheckParents(srcChild, check) {
    var parentDiv = GetParentByTagName("div", srcChild);
    var parentNodeTable = parentDiv.previousSibling;

    if (parentNodeTable) {
        var checkUncheckSwitch;

        if (check) //checkbox checked  
        {
            document.getElementById(ibtnAddOperators).disabled = false;
            document.getElementById(ibtnRemoveOperators).disabled = true;

            document.getElementById(ibtnAddOperators).src = "../arquivos/img/common/bt-on-adicionar.png";
            document.getElementById(ibtnRemoveOperators).src = "../arquivos/img/common/bt-off-remover.png";

            checkUncheckSwitch = true;
        }
        else //checkbox unchecked  
        {
            document.getElementById(ibtnAddOperators).disabled = true;
            document.getElementById(ibtnRemoveOperators).disabled = true;

            document.getElementById(ibtnAddOperators).src = "../arquivos/img/common/bt-off-adicionar.png";
            document.getElementById(ibtnRemoveOperators).src = "../arquivos/img/common/bt-off-remover.png";

            var isAllSiblingsUnChecked = AreAllSiblingsUnChecked(srcChild);
            if (!isAllSiblingsUnChecked)
                checkUncheckSwitch = true;
            else
                checkUncheckSwitch = false;

            document.getElementById(chbcheckall).checked = false;
        }

        var inpElemsInParentTable = parentNodeTable.getElementsByTagName("input");
        if (inpElemsInParentTable.length > 0) {
            var parentNodeChkBox = inpElemsInParentTable[0];
            parentNodeChkBox.checked = checkUncheckSwitch;
            //do the same recursively  
            CheckUncheckParents(parentNodeChkBox, checkUncheckSwitch);
        }
    }

}

function AreAllSiblingsUnChecked(chkBox) {
    var parentDiv = GetParentByTagName("div", chkBox);
    var childCount = parentDiv.childNodes.length;
    for (var i = 0; i < childCount; i++) {
        if (parentDiv.childNodes[i].nodeType == 1) //check if the child node is an element node  
        {
            if (parentDiv.childNodes[i].tagName.toLowerCase() == "table") {
                var prevChkBox = parentDiv.childNodes[i].getElementsByTagName("input")[0];
                //if any of sibling nodes are not checked, return false  
                if (prevChkBox.checked) {
                    return false;
                }
            }
        }
    }
    return true;
}

function UnCheckedSiblings(chkBox) {
    var parentDiv = GetParentByTagName("div", chkBox);
    var childCount = parentDiv.childNodes.length;
    for (var i = 0; i < childCount; i++) {
        if (parentDiv.childNodes[i].nodeType == 1) //check if the child node is an element node  
        {
            if (parentDiv.childNodes[i].tagName.toLowerCase() == "table") {
                var prevChkBox = parentDiv.childNodes[i].getElementsByTagName("input")[0];
                parentDiv.childNodes[i].checked = false; // desmarcar todos  
            }
        }
    }
    return true;
}

//utility function to get the container of an element by tagname  
function GetParentByTagName(parentTagName, childElementObj) {
    var parent = childElementObj.parentNode;
    while (parent.tagName.toLowerCase() != parentTagName.toLowerCase()) {
        parent = parent.parentNode;
    }
    return parent;
}

//SELECIONA SOMENTE A BAIXO
function OnTreeClick2(evt) {
    var src = window.event != window.undefined ? window.event.srcElement : evt.target;
    var isChkBoxClick = (src.tagName.toLowerCase() == "input" && src.type == "checkbox");
    if (isChkBoxClick) {
        var parentTable = GetParentByTagName2("table", src);
        var nxtSibling = parentTable.nextSibling;
        if (nxtSibling && nxtSibling.nodeType == 1)//check if nxt sibling is not null & is an element node
        {
            if (nxtSibling.tagName.toLowerCase() == "div") //if node has children
            {
                //check or uncheck children at all levels
                CheckUncheckChildren2(parentTable.nextSibling, src.checked);
            }
        }
        //check or uncheck parents at all levels
        //CheckUncheckParents2(src, src.checked);

        if (src.checked) //checkbox checked
        {
            document.getElementById(ibtnAddOperators).disabled = true;
            document.getElementById(ibtnRemoveOperators).disabled = false;

            document.getElementById(ibtnAddOperators).src = "../arquivos/img/common/bt-off-adicionar.png";
            document.getElementById(ibtnRemoveOperators).src = "../arquivos/img/common/bt-on-remover.png";
        }
        else //checkbox unchecked
        {
            document.getElementById(ibtnAddOperators).disabled = true;
            document.getElementById(ibtnRemoveOperators).disabled = true;

            document.getElementById(ibtnAddOperators).src = "../arquivos/img/common/bt-off-adicionar.png";
            document.getElementById(ibtnRemoveOperators).src = "../arquivos/img/common/bt-off-remover.png";
        }
    }
}

function CheckUncheckChildren2(childContainer, check) {
    var childChkBoxes = childContainer.getElementsByTagName("input");
    var childChkBoxCount = childChkBoxes.length;
    for (var i = 0; i < childChkBoxCount; i++) {
        childChkBoxes[i].checked = check;
    }
}

function CheckUncheckParents2(srcChild, check) {
    var parentDiv = GetParentByTagName2("div", srcChild);
    var parentNodeTable = parentDiv.previousSibling;

    if (parentNodeTable) {
        var checkUncheckSwitch;

        if (check) //checkbox checked
        {            
            var isAllSiblingsChecked = AreAllSiblingsChecked2(srcChild);
            if (isAllSiblingsChecked)
                checkUncheckSwitch = true;
            else
                return; //do not need to check parent if any(one or more) child not checked
        }
        else //checkbox unchecked
        {            
            checkUncheckSwitch = false;
        }

        var inpElemsInParentTable = parentNodeTable.getElementsByTagName("input");
        if (inpElemsInParentTable.length > 0) {
            var parentNodeChkBox = inpElemsInParentTable[0];
            parentNodeChkBox.checked = checkUncheckSwitch;
            //do the same recursively
            // CheckUncheckParents2(parentNodeChkBox, checkUncheckSwitch);
        }
    }
}

function AreAllSiblingsChecked2(chkBox) {
    var parentDiv = GetParentByTagName2("div", chkBox);
    var childCount = parentDiv.childNodes.length;
    for (var i = 0; i < childCount; i++) {
        if (parentDiv.childNodes[i].nodeType == 1) //check if the child node is an element node
        {
            if (parentDiv.childNodes[i].tagName.toLowerCase() == "table") {
                var prevChkBox = parentDiv.childNodes[i].getElementsByTagName("input")[0];
                //if any of sibling nodes are not checked, return false
                if (!prevChkBox.checked) {
                    return false;
                }
            }
        }
    }
    return true;
}

//utility function to get the container of an element by tagname
function GetParentByTagName2(parentTagName, childElementObj) {
    var parent = childElementObj.parentNode;
    while (parent.tagName.toLowerCase() != parentTagName.toLowerCase()) {
        parent = parent.parentNode;
    }
    return parent;
}

$(function () {
    var countChecked = function () {
        var countAll = document.getElementById(tvOperators).getElementsByTagName("input");
        var n = $("#tvOperadores1 input:checked").length;
        $("div#teste").text(n + (n === 1 ? " is" : " are") + " checked! " + countAll.length);

        if (n == countAll.length) {
            document.getElementById(chbcheckall).checked = true;
        }
    };
    countChecked();
    $("input[type=checkbox]").on("click", countChecked);
});

$.facebox.settings.opacity = 0.5
$.facebox.settings.closeImage = '../arquivos/img/facebox/close-label.png';
$.facebox.settings.loadingImage = '../arquivos/img/facebox/loading.gif';
$(document).bind('loading.facebox', function () {
    $(document).unbind('keydown.facebox');
    $('#facebox_overlay').unbind('click');
});

//$(function () {
//    var countChecked = function () {
//        var n = $("#tvOperadores1 input:checked").length;
//        $("div#teste").text(n + (n === 1 ? " is" : " are") + " checked!");
//    };
//    countChecked();
//    $("input[type=checkbox]").on("click", countChecked);

//    if (n == lblCountChecked) {
//        document.getElementById(chbcheckall).checked = false;
//    }

//});

