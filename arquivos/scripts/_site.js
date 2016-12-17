$(function () {
    $(".cpf").mask("999.999.999-99");
    $(".date").mask("99/99/9999");

    $("#nav-toggle").click(function () {
        $("#header-menu").slideToggle("fast");
    });

    $("[id*='txtSearch']").prop("placeholder", "Busca");

    if (window.location.href.indexOf("piracicabana") >= 0) {
        $("#showUploadForm").hide();
    }

});

function showMessage(message) {
    $.blockUI({
        message: "<p class=\"message\">" + message + "</p>",
        fadeIn: 700,
        fadeOut: 700,
        showOverlay: false,
        css: {
            top: "30px",
            left: 0,
            right: 0,
            margin: "0 auto",
            padding: "10px",
            color: "#fff",
            opacity: .5,
            backgroundColor: "#000",
            border: "none",
            "border-radius": "10px",
            cursor: "default"
        }
    });

    setTimeout(function () {
        if ($("div.blockUI.blockModalMsg").length === 0) {
            $.unblockUI();
        }
        else {
            $("div.blockUI.blockMsg").prev("div.blockUI.blockOverlay").remove();
            $("div.blockUI.blockMsg").prev("div.blockUI").remove();
            $("div.blockUI.blockMsg").remove();
        }
    }, 3000);
}

function redirect(url) {
    location.href = url;

    return false;
}