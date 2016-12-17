$(function () {
    $("input[type=text], input[type=password]").each(function () {
        $(this).watermark($(this).attr("placeholder"));
    });
    $(".cpf").mask("999.999.999-99");
    $(".date").mask("99/99/9999");
    $(".monetary").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
});

function Show(message) {
    $.blockUI({
        message: '<h3>' + message + '</h3>',
        timeout: 3000
    });
}

function FireEvent(senderSelector, targetSelector) {

    $(senderSelector).keypress(function (event) {

        var targetUniqueID = $(targetSelector).attr("id").replace(/[_]/g, "$");

        if (event.which == 13) {
            __doPostBack(targetUniqueID, "");
        }
    });
}

function HoverLink(selector) {

}
