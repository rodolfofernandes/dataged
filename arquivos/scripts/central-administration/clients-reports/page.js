function ShowMessage(message) {
    $.blockUI({
        message: '<h3>' + message + '</h3>',
        timeout: 3000
    });
}

function Mensagem() {
    alert('Registro gravado com sucesso!');
}

        $(document).ready(function () {
            $(".dropkick").dropkick({
                theme: "dataxdoc",
                change: function (value, label) {
                    $("[id$=ddlClients] option").each(function () {
                        if ($(this).val() == value) {
                            $(this).attr("selected", "selected");

                            $(this).closest("form").submit();
                        }
                    });
                }
            });
        });

$(document).ready(function () {
    $("[id$=ddlClients] .dk_toggle").addClass("htmlSelect360");
});

    $.facebox.settings.opacity = 0.5
$.facebox.settings.closeImage = '../arquivos/img/facebox/close-label.png';
$.facebox.settings.loadingImage = '../arquivos/img/facebox/loading.gif';
$(document).bind('loading.facebox', function () {
    $(document).unbind('keydown.facebox');
    $('#facebox_overlay').unbind('click');
});
