$(function () {   
    $("[id$='txtDatabaseServer']").attr("placeholder", "Servidor de banco de dados");
    $("[id$='txtUserName']").attr("placeholder", "Nome de usuário");
    $("[id$='txtPassword']").attr("placeholder", "Senha");

    $("[id$='btnConfigure']").click(function () {
        if (!$("[id$='txtDatabaseServer']").val()) {
            showMessage("Preencha o nome do servidor.");
            return false;
        }

        if (!$("[id$='txtUserName']").val()) {
            showMessage("Preencha o usuário.");
            return false;
        }

        if (!$("[id$='txtPassword']").val()) {
            showMessage("Preencha a senha.");
            return false;
        }

        $.blockUI({
            message: '<div><img src="../arquivos/img/central-administration/loading-gallery.gif" /></div>',
            css: {
                padding: "10px",
                color: "#fff",
                opacity: .5,
                backgroundColor: "transparent",
                border: "none",
                "border-radius": "10px",
                cursor: "default"
            }
        });

        return true;
    });


    $("[id$='btnBack']").click(function () {
        return redirect("/systemsettings.aspx");
    });
});