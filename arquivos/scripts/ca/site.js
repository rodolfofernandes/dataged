function redirect(url) {
    location.href = url;

    return false;
}

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

function showError(error) {
    $.blockUI({
        message: "<p class='message'><img src='../arquivos/img/error-16x16.png' />" + error + "</p>",
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