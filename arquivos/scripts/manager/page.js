function AddUpdate() {
    
    $.blockUI({
        message: $('#uploadForm').appendTo('body'),
        css: {
            top: ($(window).height() - 400) / 2 + 'px',
            width: '400x',
            cursor: 'default',
            height: '300px',
            position: 'absolute',
            top: '50%',
            left: '50%',
            width: '400px',
            height: '580px',
            margin: '-290px 0px 0px -200px',
        },
        overlayCSS: {
            cursor: 'default' 
        }
    });

    var helper = document.getElementById("ctl00_PlaceHolderMain_txtUpdate").value;
    document.getElementById("txt1").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtWhatUpdated").value;
    document.getElementById("txt2").innerHTML = helper;

    helper = document.getElementById("ctl00_PlaceHolderMain_txtTitle1").value;
    document.getElementById("txt3").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtContent1").value;
    document.getElementById("txt4").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtTitle2").value;
    document.getElementById("txt5").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtContent2").value;
    document.getElementById("txt6").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtTitle3").value;
    document.getElementById("txt7").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtContent3").value;
    document.getElementById("txt8").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtTitle4").value;
    document.getElementById("txt9").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtContent4").value;
    document.getElementById("txt10").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtTitle5").value;
    document.getElementById("txt11").innerHTML = helper;
    helper = document.getElementById("ctl00_PlaceHolderMain_txtContent5").value;
    document.getElementById("txt12").innerHTML = helper;

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

