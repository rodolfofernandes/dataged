$(function () {
    $("input[type=text], input[type=password]").each(function () {
        $(this).watermark($(this).attr("placeholder"));
    });
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    $(".date").mask("99/99/9999");
    $(".phone").mask("(99)9999-9999");
    $(".monetary").maskMoney({ prefix: 'R$ ', allowZero: true, allowNegative: false, thousands: '.', decimal: ',', affixesStay: false });
});

function Navigate(message) {
    alert(message);
}

function Redirect(url) {
    location.href = url;

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



jQuery.fn.toggleText = function (a, b) {
    return this.html(this.html().replace(new RegExp("(" + a + "|" + b + ")"), function (x) { return (x == a) ? b : a; }));
}

$(document).ready(function () {
    $('.tgl').before('<span>Dados do Cliente</span>');
    $('.tgl').css('display', 'none')

    $('.tgl1').before('<span>Dados do Cliente</span>');
    $('.tgl1').css('display', 'none')

    $('.tgl2').before('<span>Dados do Site</span>');
    $('.tgl2').css('display', 'none')

    $('.tgl3').before('<span>Administrador(es)</span>');
    $('.tgl3').css('display', 'none')

    $('span', '#box-toggle').click(function () {
        $(this).next().slideToggle('fast')
		.siblings('.tgl:visible').slideToggle('fast');

        $(this).toggleText('Revelar', 'Esconder')
		.siblings('span').next('.tgl:visible').prev()
		.toggleText('Revelar', 'Esconder')
    });
})


//<%--apagar--%>