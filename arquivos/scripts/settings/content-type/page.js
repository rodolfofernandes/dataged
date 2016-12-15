function ContentTypeDelete() {

    if (confirm("Deseja Realmente Remover a Espécie?") == true)
        return true;
    else
        return false;
}


function MetadataRemove(control) {
    var status = document.getElementById(control.id).getAttribute('disabled');
    if (status != "disabled") {
        if (confirm("Deseja Realmente Remover Este Metadado?") == true)
            return true;
        else
            return false;
    }
}

$(document).ready(function () {
    $(".dropkick").dropkick({
        theme: "dataxdoc"
    });

    $("[id$=ddlCurrentPeriodType] .dk_toggle").addClass("htmlSelect60");
    $("[id$=ddlIntermediatePeriodType] .dk_toggle").addClass("htmlSelect60");
    $("[id$=ddlPermanent] .dk_toggle").addClass("htmlSelect100");

    selectedTemporality();
});

$.facebox.settings.opacity = 0.5
$.facebox.settings.closeImage = '../arquivos/img/facebox/close-label.png';
$.facebox.settings.loadingImage = '../arquivos/img/facebox/loading.gif';
$(document).bind('loading.facebox', function () {
    $(document).unbind('keydown.facebox');
    $('#facebox_overlay').unbind('click');
});

function selectedTemporality() {
    if (document.getElementById('cbTemporality').checked) {
        $("[id$=ddlCurrentPeriodType] .dk_toggle").removeClass("disableTemporalityControls");
        $("[id$=ddlIntermediatePeriodType] .dk_toggle").removeClass("disableTemporalityControls");
        $("[id$=ddlPermanent] .dk_toggle").removeClass("disableTemporalityControls");

        $("[id$=ddlCurrentPeriodType] .dk_toggle").addClass("enableTemporalityControls");
        $("[id$=ddlIntermediatePeriodType] .dk_toggle").addClass("enableTemporalityControls");
        $("[id$=ddlPermanent] .dk_toggle").addClass("enableTemporalityControls");

        $(".txtTemporality").removeClass("disableTemporalityControls");
        $(".txtTemporality").addClass("enableTemporalityControls");

        document.getElementById(txtCurrentTime).disabled = false;
        document.getElementById(txtIntermediateTime).disabled = false;
        
    } else {
        $("[id$=ddlCurrentPeriodType] .dk_toggle").removeClass("enableTemporalityControls");
        $("[id$=ddlIntermediatePeriodType] .dk_toggle").removeClass("enableTemporalityControls");
        $("[id$=ddlPermanent] .dk_toggle").removeClass("enableTemporalityControls");

        $("[id$=ddlCurrentPeriodType] .dk_toggle").addClass("disableTemporalityControls");
        $("[id$=ddlIntermediatePeriodType] .dk_toggle").addClass("disableTemporalityControls");
        $("[id$=ddlPermanent] .dk_toggle").addClass("disableTemporalityControls");

        $(".txtTemporality").removeClass("enableTemporalityControls");
        $(".txtTemporality").addClass("disableTemporalityControls");

        document.getElementById(txtCurrentTime).disabled = true;
        document.getElementById(txtIntermediateTime).disabled = true;
    }
}