function pageLoad() {
    $(function () {
        $("#tree-container input[type='checkbox']").on("change", function () {
            $("#tree-container input[type='checkbox']").not(this).prop("checked", false);

            if ($(this).prop("checked")) {
                $("[id$='btnNext']").prop("disabled", false);
            }
            else {
                $("[id$='btnNext']").prop("disabled", true);
            }
        });

    });
}