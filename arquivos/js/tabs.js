$(function() {

    $("[id*='lbtnIndexDocument']").attr('disabled', true);
    $("[id*='lbtnDeleteDocument']").attr('disabled', true);

    $("[id*='lbtnIndexDocument']").click(function (e) {
        if ($(this).is("[disabled='disabled']")) {
            e.preventDefault();
        }
    });

    $("[id*='lbtnDeleteDocument']").click(function (e) {
        if ($(this).is("[disabled='disabled']")) {
            e.preventDefault();
        }
    });

    $("input[id*='cbSelectAllDocuments']").click(function () {
        $(".list input:checkbox").not(this).prop('checked', this.checked);

        if (this.checked) {
            $("[id*='lbtnIndexDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/bt-salvararqdoc.png');
            $("[id*='lbtnDeleteDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/delete-doc-on-3-24x24.png');
        }
        else {
            $("[id*='lbtnIndexDocument']").attr('disabled', true).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/bt-salvararqdocoff.png');
            $("[id*='lbtnDeleteDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/delete-doc-off-4-24x24.png');
        }
    });

    $(".list input:checkbox").click(function () {        
        if (this.checked === false) {
            if ($(".list input[type='checkbox']:checked").length == 0) {
                $("input[id*='cbSelectAllDocuments']").prop('checked', false);

                $("[id*='lbtnIndexDocument']").attr('disabled', true).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/bt-salvararqdocoff.png');
                $("[id*='lbtnDeleteDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/delete-doc-off-4-24x24.png');
            }
        }
        else {
            if ($(".list input[type='checkbox']:checked").length == $(".list input[type='checkbox']").length) {
                $("input[id*='cbSelectAllDocuments']").prop('checked', true);

                $("[id*='lbtnIndexDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/bt-salvararqdoc.png');
                $("[id*='lbtnDeleteDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/delete-doc-on-3-24x24.png');
            }
            else {
                $("[id*='lbtnIndexDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/bt-salvararqdoc.png');
                $("[id*='lbtnDeleteDocument']").attr('disabled', false).find("img").prop('src', '/_layouts/images/dataxdoc/workarea/delete-doc-on-3-24x24.png');
            }
        }
    });

    $('#showUploadForm').click(function () {
        $.blockUI({
            message: $('#uploadForm'),
            css: {
                top: ($(window).height() - 350) / 2 + 'px',
                left: ($(window).width() - 500) / 2 + 'px',
                width: '500px',
                cursor: 'default'
            },
            overlayCSS: {
                cursor: 'default'
            }
        });
    });

    $('#closeUploadForm').click(function () {
        $.unblockUI();

        window.location.reload(true);
    });

});