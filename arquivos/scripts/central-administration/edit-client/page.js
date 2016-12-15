function AdminDelete() {

    if (confirm("Deseja Remover o Administrador?") == true)
        return true;
    else
        return false;
}

function readXML(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.txt_xml')
                .attr('value', input.files[0].name)
        };

        reader.readAsDataURL(input.files[0]);
    }
} 

function MascaraPass(txt, evt, str) {
    if (evt.type == "focus") {
        txt.type = "password";
        txt.style.color = "#4682B4";
        txt.className = "txt-focus";
        txt.value = (txt.value == txt.defaultValue) ? '' : txt.value; return true;
    }
    else if (evt.type == "blur") {
        if (txt.value == "") {
            txt.value = str
            txt.style.color = "gray";
            txt.type = "text";
        }
        txt.className = "textbox";
    }
};

jQuery.fn.toggleText = function(a,b) {
    return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
}
 
$(document).ready(function(){
    $('.tgl').before('<span>Revelar conteúdo</span>');
    $('.tgl').css('display', 'none')
    $('span', '#box-toggle').click(function() {
        $(this).next().slideToggle('slow')
        .siblings('.tgl:visible').slideToggle('fast');
        // aqui começa o funcionamento do plugin
        $(this).toggleText('Revelar','Esconder')
        .siblings('span').next('.tgl:visible').prev()
        .toggleText('Revelar','Esconder')
    });
})
