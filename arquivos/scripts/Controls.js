function focusField(elementId, description) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");
            }
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus");

            if ($(this).val() == "") {
                // Insere a descrição do campo
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");
            }
        });
    });
}

function focusCurrencyField(elementId, description) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");
            }
        }
        else {
            // Remove o cifrão
            var onfocusValue = $(selector).val();

            onfocusValue = onfocusValue.substring(3, onfocusValue.length);

            $(selector).val(onfocusValue);
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus")

            if ($(this).val() == "") {
                // Insere a descrição do campo
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");
            }
            else {
                // Adiciona cifrão
                var onblurValue = $(this).val();

                if (onblurValue.indexOf("R$") == -1) {
                    $(this).val("R$ " + onblurValue);
                }
            }
        });
    });
}

function focusDateField(elementId, description) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");

                ApplyMask(elementId, "99/99/9999");
            }
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus");

            if ($(this).val() == "") {
                // Insere a descrição do campo
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");
            }
        });
    });
}

function focusPhoneField(elementId, description) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");

                ApplyMask(elementId, "(99)9999-9999");
            }
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus");

            if ($(this).val() == "") {
                // Insere a descrição do campo
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");
            }
        });
    });
}

function focusCNPJField(elementId, description) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");

                ApplyMask(elementId, "99.999.999/9999-99");
            }
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus");

            if ($(this).val() == "") {
                // Insere a descrição do campo
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");
            }
        });
    });
}

function focusCPFField(elementId, description) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");

                ApplyMask(elementId, "999.999.999-99");
            }
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus");

            if ($(this).val() == "") {
                // Insere a descrição do campo
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");
            }
        });
    });
}

function focusPasswordField(element, description) {
    $(document).ready(function () {
        var selector = "[id=" + element.id + "]";

        $(selector).addClass("SetFocus");

        if ($(selector).val() == description) {
            if ($(selector).hasClass("nonFilledHtmlInputText")) {
                // Apaga a descrição do campo
                $(selector).val("");

                $(selector).removeClass("nonFilledHtmlInputText");
                $(selector).addClass("filledHtmlInputText");

                element.type = "password";
            }
        }

        $(selector).blur(function () {
            $(this).removeClass("SetFocus");

            if ($(this).val() == "") {
                // Insere a descrição do campo                   
                $(this).val(description);

                $(this).removeClass("filledHtmlInputText");
                $(this).addClass("nonFilledHtmlInputText");

                element.type = "text";
            }
        });
    });
}

function ApplyMask(elementId, mask) {
    elementId = "[id=" + elementId + "]";

    $(elementId).mask(mask);
}

function RemoveMask(elementId) {
    elementId = "[id=" + elementId + "]";

    $(elementId).unmask();
}

function limitSomeChars(elementId) {
    $(document).ready(function () {
        var selector = "[id=" + elementId + "]";
        var denied = eval('/[/:*?"<>|]/g');
        var comparedChars = ['/', ':', '*', '?', '"', '<', '>', '|', '\\'];
        var lastTypedChar = $(selector).val().substring($(selector).val().length - 1);
        
        for (var i = 0; i <= comparedChars.length - 1; i++) {
            if (lastTypedChar == comparedChars[i]) {
                $('#inputTextPopUp').fadeTo('slow', 1, function () { });
                $('#inputTextPopUp').css('display', 'block');
                setTimeout(function () {
                    $('#inputTextPopUp').fadeTo('slow', 0, function () { });
                    $('#inputTextPopUp').css('display', 'none');
                }, 5000);
            }
        }
        $(selector).val($(selector).val().replace(denied, ""));
        $(selector).val($(selector).val().replace(/\\/g, ""));

    });
}

//MÁSCARA ANTIGA
/*
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e) {
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    //var whichCode = (window.Event) ? e.which : e.keyCode;
    //if (navigator.appName.substring(0,9) == "Microsoft"){
    //if (navigator.userAgent.search("MSIE") >= 0) {
    //    var whichCode = e.keyCode;
    //}
    if (navigator.appName == 'Microsoft Internet Explorer') {
        var whichCode = e.keyCode;
    }
    else if (navigator.appName == 'Netscape') {
        var whichCode = e.which;
    }
    if (whichCode == 13) return true;
    var t = new String(objTextBox.value);
    if (whichCode == 8) {
        objTextBox.value = t.substring(0, t.length - 1);
    }
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1 && e.keyCode != 9) return false; // Chave inválida
    len = objTextBox.value.length;
    for (i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for (; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i)) != -1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0' + SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0' + SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
            objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }

    if (e.keyCode == 9) {
        if (t == '') {
            $(objTextBox).val("");
        }
        else {
            objTextBox.value = t.substring(0, t.length);
        }
        return true;
    }
    return false;
}
*/

//function isCurrencyKey(evt) {
//    var tecla = (window.event) ? e.keyCode : e.which;
//    var texto = Text;
//    var indexvir = texto.indexOf(",")
//    var indexpon = texto.indexOf(".")


//    if (tecla != 44 && tecla != 46 && tecla < 48 || tecla > 57)
//        return false;
//    if (tecla == 44) { if (indexvir !== -1 || indexpon !== -1) { return false } }
//    if (tecla == 46) { if (indexvir !== -1 || indexpon !== -1) { return false } }
//}


function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function readImageURL(inputFile, imageSelector, imageHeight, imageWidth, filenameSelector) {
    if (inputFile.files && inputFile.files[0]) {
        var file = inputFile.files[0];

        var fileName = file.name;
        var fileSize = file.size;

        var extension = fileName.substr(fileName.lastIndexOf('.') + 1);

        var extensions = new Array("BMP", "GIF", "JPEG", "JPG", "PNG");

        for (i = 0; i < extensions.length; i++) {
            if (extension.toUpperCase() == extensions[i]) {
                if (fileSize < 850000) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $(imageSelector)
                        .attr("src", e.target.result)
                        .height(imageHeight)
                        .width(imageWidth);
                    }

                    reader.readAsDataURL(file);

                    $(filenameSelector).attr("value", fileName);

                    return true;
                }
                else {
                    alert("Apenas imagens menores que 850 kb");
                    return false;
                }
            }
        }

        inputFile.value = "";

        alert("Extensão não suportada pelo sistema. Envie apenas imagens .BMP, .GIF, .JPEG, .JPG e .PNG.");

        return false;
    }
}