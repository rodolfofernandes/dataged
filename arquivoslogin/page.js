$(function () {
    $("[id*='UserName']").attr("placeholder", "Nome de usuário");
    $("[id*='Password']").attr("placeholder", "Senha");
    $("[id*='txtCPF']").attr("placeholder", "CPF");
    $("[id*='UserName']").attr("ng-model", "username");
    $("[id*='Password']").attr("ng-model", "password");

    $("#pageDemo4").click(function (event) {        
        $.blockUI({
            message: $("#recover-password"),
            css: {
                top: ($(window).height() - 200) / 2 + "px",
                height: "200px",
                border: "2px solid #ccc",
                cursor: "default"
            },
            overlayCSS: {
                cursor: "default"
            },
            blockMsgClass: "blockModalMsg"
        });
        event.preventDefault();
    });

    $("img.close").click(function () {
        $.unblockUI();
    });

});