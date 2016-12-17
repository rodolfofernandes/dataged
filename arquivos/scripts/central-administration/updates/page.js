//$(document).ready(function () {
//    $('[id~="btnAddUpdate"]').click(function () {
//        $.blockUI({ message: $('#popup') });

//        setTimeout($.unblockUI, 2000);
//    });
//});

function AddUpdate() {
    
    $.blockUI({
        message: $('#pop').appendTo('body'),
            css: {
                padding: '5px',
                margin: 0,
                top: '40%',
                left: '35%',
                width: '350',
                background: 'none',
                border: 'none',
                cursorReset: 'initial',
                cursor: 'initial',
            }    
    });

    return false;
}

function Close() {

    $.unblockUI();

}

function Ok() {
    $('#btnAuxRegisterUpdate').onclick();

    return true;
}


function efeito() {
    //Armazena o ID da div em uma váriavel chamada mostrar_div
    // mostrar_div pode ser mudado para um nome a sua escolha
    var mostrar_div = document.getElementById('texto');

    // condição para ele mostrar e esconder de acordo com o estado atual
    if (mostrar_div.style.display == 'none') {
        //caso o display do elemento for none ele muda para block
        mostrar_div.style.display = 'block';
    } else {
        //se não será none
        mostrar_div.style.display = 'none';
    }
}
// none = invisivel ; block = visivel

