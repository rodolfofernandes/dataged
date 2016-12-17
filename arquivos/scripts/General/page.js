$(function () {

    $(".grid input:checkbox").click(function () {
        if (this.checked === false) {
            if ($(".grid input[type='checkbox']:checked").length == 0) {
                //$("input[id*='cbSelectAllDocuments']").prop('checked', false);

                $("[id*='ibtnRename1']").prop('disabled', true).prop('src', '../arquivos/img/LawModule/edit-off.png');
                $("[id*='ibtnDelete']").prop('disabled', true).prop('src', '../arquivos/img/LawModule/del-off.png');
                $("[id*='ibtnMove']").prop('disabled', true).prop('src', '../arquivos/img/LawModule/Bt-MoverArqDocOff.png');
                $("[id*='ibtnIndex']").prop('disabled', true).prop('src', '../arquivos/img/LawModule/index-off.png');
            }
        }
        else {
            if ($(".grid input[type='checkbox']:checked").length == $(".grid input[type='checkbox']").length) {
                //$("input[id*='cbSelectAllDocuments']").prop('checked', true);
            }
            else {
                $("[id*='ibtnRename1']").prop('disabled', false).prop('src', '../arquivos/img/LawModule/edit-on.png');
                $("[id*='ibtnDelete']").prop('disabled', false).prop('src', '../arquivos/img/LawModule/del-on.png');
                $("[id*='ibtnMove']").prop('disabled', false).prop('src', '../arquivos/img/LawModule/Bt-MoverArqDocOn.png');
                $("[id*='ibtnIndex']").prop('disabled', false).prop('src', '../arquivos/img/LawModule/index-on.png');
            }
        }
    });

    function showRenameFolder() {
        if (!document.getElementById(ibtnRename).disabled) {
            if (boxRenameFolderShow == false) {
                $(".boxRenameFolder").show("slow");
                boxRenameFolderShow = true;
            }
            else {
                $(".boxRenameFolder").hide("fast");
                boxRenameFolderShow = false;
            }
        }
    }

    function showCreateFolder() {
        if (!document.getElementById(ibtnCreate).disabled) {
            if (boxCreateFolderShow == false) {
                $(".boxCreateFolder").show("slow");
                boxCreateFolderShow = true;
            }
            else {
                $(".boxCreateFolder").hide("fast");
                boxCreateFolderShow = false;
            }
        }
    }




    function countChecked() {
        var n = $("[id*=gvResults] input:checked").length;
        if (n == 0) {
            document.getElementById(ibtnCreate).src = "../arquivos/img/LawModule/add-on.png";
            document.getElementById(ibtnRename).src = "../arquivos/img/LawModule/edit-off.png";
            document.getElementById(ibtnDelete).src = "../arquivos/img/LawModule/del-off.png";
            document.getElementById(ibtnUpload).src = "../arquivos/img/LawModule/upload-on.png";
            document.getElementById(ibtnIndex).src = "../arquivos/img/LawModule/index-off.png";
            document.getElementById(ibtnMove).src = "../arquivos/img/LawModule/Bt-MoverArqDocOff.png";
            

            document.getElementById(ibtnCreate).disabled = false;
            document.getElementById(ibtnRename).disabled = true;
            document.getElementById(btnRenameItem).disabled = true;
            document.getElementById(ibtnDelete).disabled = true;
            document.getElementById(ibtnUpload).disabled = false;
            document.getElementById(ibtnIndex).disabled = true;
            document.getElementById(ibtnMove).disabled = true;
        }
        if (n == 1) {
            document.getElementById(ibtnCreate).src = "../arquivos/img/LawModule/add-off.png";
            document.getElementById(ibtnRename).src = "../arquivos/img/LawModule/edit-on.png";
            document.getElementById(ibtnDelete).src = "../arquivos/img/LawModule/del-on.png";
            document.getElementById(ibtnUpload).src = "../arquivos/img/LawModule/upload-on.png";
            document.getElementById(ibtnIndex).src = "../arquivos/img/LawModule/index-on.png";
            document.getElementById(ibtnMove).src = "../arquivos/img/LawModule/Bt-MoverArqDoc.png";

            document.getElementById(ibtnCreate).disabled = true;
            document.getElementById(ibtnRename).disabled = false;
            document.getElementById(btnRenameItem).disabled = false;
            document.getElementById(ibtnDelete).disabled = false;
            document.getElementById(ibtnUpload).disabled = false;
            document.getElementById(ibtnIndex).disabled = false;
            document.getElementById(ibtnMove).disabled = false;
        }
        if (n > 1) {
            document.getElementById(ibtnCreate).src = "../arquivos/img/LawModule/add-off.png";
            document.getElementById(ibtnRename).src = "../arquivos/img/LawModule/edit-off.png";
            document.getElementById(ibtnDelete).src = "../arquivos/img/LawModule/del-on.png";
            document.getElementById(ibtnUpload).src = "../arquivos/img/LawModule/upload-on.png";
            document.getElementById(ibtnIndex).src = "../arquivos/img/LawModule/index-on.png";
            document.getElementById(ibtnMove).src = "../arquivos/img/LawModule/Bt-MoverArqDoc.png";

            document.getElementById(ibtnCreate).disabled = true;
            document.getElementById(ibtnRename).disabled = true;
            document.getElementById(btnRenameItem).disabled = true;
            document.getElementById(ibtnDelete).disabled = false;
            document.getElementById(ibtnUpload).disabled = false;
            document.getElementById(ibtnIndex).disabled = false;
            document.getElementById(ibtnMove).disabled = false;
        }
    };
    countChecked();
    $("input[type=checkbox]").on("click", countChecked);
});

