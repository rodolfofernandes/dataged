$(function () {

    $(".slide-out-div01").tabSlideOut({
        tabHandle: '.handle01',                                                 //class of the element that will become your tab
        pathToTabImage: '/_layouts/images/dataxdoc/masterpage/structure.png',   //path to the image for the tab //Optionally can be set using css
        imageHeight: '130px',                                                   //height of tab image           //Optionally can be set using css
        imageWidth: '40px',                                                     //width of tab image            //Optionally can be set using css
        tabLocation: 'left',                                                    //side of screen where tab lives, top, right, bottom, or left
        speed: 300,                                                             //speed of animation
        action: 'click',                                                        //options: 'click' or 'hover', action to trigger animation
        //topPos: '130px',                                                      //position from the top/ use if tabLocation is left or right
        topPos: '155px',                                                        //position from the top/ use if tabLocation is left or right
        leftPos: '40px',                                                        //position from left/ use if tabLocation is bottom or top
        fixedPosition: false                                                    //options: true makes it stick(fixed position) on scroll
    });

    $(".slide-out-div03").tabSlideOut({
        tabHandle: '.handle03',                                                 //class of the element that will become your tab
        pathToTabImage: '/_layouts/images/dataxdoc/masterpage/workarea.png',    //path to the image for the tab //Optionally can be set using css
        imageHeight: '130px',                                                   //height of tab image           //Optionally can be set using css
        imageWidth: '40px',                                                     //width of tab image            //Optionally can be set using css
        tabLocation: 'right',                                                   //side of screen where tab lives, top, right, bottom, or left
        speed: 300,                                                             //speed of animation
        action: 'click',                                                        //options: 'click' or 'hover', action to trigger animation
        topPos: '155px',                                                        //position from the top/ use if tabLocation is left or right
        leftPos: '40px',                                                        //position from left/ use if tabLocation is bottom or top
        fixedPosition: false                                                    //options: true makes it stick(fixed position) on scroll
    });

});

function showModal() {

    $.blockUI({
        message: $("#document-properties"),
        css: {
            top: ($(window).height() - 450) / 2 + "px",
            left: 0,
            right: 0,
            height: "450px",
            width: '100%',
            maxWidth: '365px',
            margin: '0 auto',
            paddingBottom: "20px",
            border: "2px solid #ccc",
            overflow: "auto",
            cursor: "default"
        },
        overlayCSS: {
            cursor: "default"
        },
        blockMsgClass: "blockModalMsg"
    });

    $("img.close").click(function () {
        $.unblockUI();
    });
}

/* Opção de Visualização */

function pageLoad(sender, args) {

    var simplified = document.getElementById("simplified-layout");

    if (simplified === null)
        getTitleList();
    else
        return null;
}

var getTitleList =

    function () {
        var titleList = document.getElementById("title-list");
        var display = window.getComputedStyle(titleList, null).getPropertyValue("display");

        if (display === "block") imgList(); 
    }

function setActiveStyleSheet(title) {
    var i, a;
    for (i = 0; (a = document.getElementsByTagName("link")[i]) ; i++) {
        if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
            a.disabled = true;
            changeImage(title);
            if (a.getAttribute("title") == title) {
                a.disabled = false;
            }
        }
    }
}

function getActiveStyleSheet() {
    var i, a;
    for (i = 0; (a = document.getElementsByTagName("link")[i]) ; i++) {
        if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled)
            return a.getAttribute("title");
    }
    return null;
}

function getPreferredStyleSheet() {
    var i, a;
    for (i = 0; (a = document.getElementsByTagName("link")[i]) ; i++) {

        if (a.getAttribute("rel").indexOf("style") != -1
           && a.getAttribute("rel").indexOf("alt") == -1
           && a.getAttribute("title"))

          return a.getAttribute("title");
    }
    return null;
}

function changeImage(title) {

    if (title == "default-list")
        imgList();
    else
        imgGrid();
}

function imgList() {

    $(".icon").each(function () {
        var defaultPath = "/_layouts/images/dataxdoc/main/";
        var imgPathGrid = $(this).attr("src");

        if (imgPathGrid === defaultPath + "ws-128x128.png") {
            $(this).attr("src", defaultPath + "ws-24x24.png");

        } else if (imgPathGrid === defaultPath + "root-128x118.png") {
            $(this).attr("src", defaultPath + "root-24x24.png");

        } else if (imgPathGrid === defaultPath + "guard-location-128x118.png") {
            $(this).attr("src", defaultPath + "guard-location-24x24.png");

        } else if (imgPathGrid === defaultPath + "record-128x118.png") {
            $(this).attr("src", defaultPath + "record-24x24.png");
        }
    });
}

function imgGrid() {

    $(".icon").each(function () {
        var defaultPath = "/_layouts/images/dataxdoc/main/";
        var imgPathList = $(this).attr("src");

        if (imgPathList === defaultPath + "ws-24x24.png") {
            $(this).attr("src", defaultPath + "ws-128x128.png");

        } else if (imgPathList === defaultPath + "root-24x24.png") {
            $(this).attr("src", defaultPath + "root-128x118.png");

        } else if (imgPathList === defaultPath + "guard-location-24x24.png") {
            $(this).attr("src", defaultPath + "guard-location-128x118.png");

        } else if (imgPathList === defaultPath + "record-24x24.png") {
            $(this).attr("src", defaultPath + "record-128x118.png");
        }
    });
}