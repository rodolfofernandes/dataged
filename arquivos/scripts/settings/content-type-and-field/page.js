    function MetadataDelete() {
        if (confirm("Deseja Realmente Excluir Este Metadado?") == true)
            return true;
        else
            return false;
    }

function ContentTypeDelete() {
    if (confirm("Deseja Realmente Excluir Esta Espécie?") == true)
        return true;
    else
        return false;
}

    $(document).ready(function () {
        $(".dropkick").dropkick({
            theme: "dataxdoc",
            change: function (value, label) {
                $("[id$=ddlFiles] option").each(function () {
                    if ($(this).val() == value) {
                        $(this).attr("selected", "selected");

                        $(this).closest("form").submit();
                    }
                });
            }
        });
    });



$(document).ready(function () {
    $("[id$=ddlFiles] .dk_toggle").addClass("htmlSelect260");
});
