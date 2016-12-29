$(function () {
    $("input[type=text], input[type=password]").each(function () {
        $(this).watermark($(this).attr("placeholder"));
    });
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    $(".date").mask("99/99/9999");
    $(".phone").mask("(99)9999-9999");
    $(".numeric").mask("0#");
    $(".monetary").maskMoney({ prefix: 'R$ ', allowZero: true, allowNegative: false, thousands: '.', decimal: ',', affixesStay: false });
});

function Navigate(message) {
    alert(message);
}

function Redirect(url) {
    location.href = _spPageContextInfo.webServerRelativeUrl + url;

    return false;
}

function ShowMessage(message) {
    $.blockUI({
        message: '<h3>' + message + '</h3>',
        timeout: 5000
    });
}

//function ShowMessage(message, timeout) {
//    $.blockUI({
//        message: '<h3>' + message + '</h3>',
//        timeout: timeout
//    });
//}

function ConfirmMessage(message) {
    return confirm(message);
}


