$(function () {

    $(".scrollbar-inner").scrollbar();

    $(".menu-container ul.root li.static").hover(function () {
        var $child = $(this).find("a.static img.menu-item-image:first-child");

        $child.attr("src", function (n, v) {
            var filename = v.substr((v.lastIndexOf("/") + 1));

            return "../arquivos/img/site/orange-" + filename;
        });
    }, function () {
        var $child = $(this).find("a.static img.menu-item-image:first-child");

        $child.attr("src", function (n, v) {
            var filename = v.substr((v.lastIndexOf("/") + 1));

            return "../arquivos/img/site/" + filename.replace("orange-", "");
        });
    });

});

function showMessage(message) {
    $.blockUI({
        message: "<h3>" + message + "</h3>",
        timeout: 5000
    });
}


//$(function () {
//    $("input[type=text], input[type=password]").each(function () {
//        $(this).watermark($(this).attr("placeholder"));
//    });
//    $(".cpf").mask("999.999.999-99");
//    $(".cnpj").mask("99.999.999/9999-99");
//    $(".date").mask("99/99/9999");
//    $(".phone").mask("(99)9999-9999");
//    $(".monetary").maskMoney({ prefix: 'R$ ', allowZero: true, allowNegative: false, thousands: '.', decimal: ',', affixesStay: false });
//});

//function Navigate(message) {
//    alert(message);
//}

//function Redirect(url) {
//    location.href = _spPageContextInfo.webServerRelativeUrl + url;

//    return false;
//}



////function ShowMessage(message, timeout) {
////    $.blockUI({
////        message: '<h3>' + message + '</h3>',
////        timeout: timeout
////    });
////}

//function ConfirmMessage(message) {
//    return confirm(message);
//}


