$(document).ready(function () {
    $("table.SettingsMenu").hover(function () {
        $("table.SettingsMenu").addClass("SelectedMenu");
        $("table.SettingsMenu img").attr("src", "../arquivos/img/UserControls/dynamic_arrow.png");
    }, function () {
        $("table.SettingsMenu").removeClass("SelectedMenu");
        $("table.SettingsMenu img").attr("src", "../arquivos/img/UserControls/static_arrow.png");
    });
});

$(document).ready(function () {
    $("table.SettingsMenuItem").hover(function () {
        $("table.SettingsMenu").addClass("SelectedMenu");
        $("table.SettingsMenu img").attr("src", "../arquivos/img/UserControls/dynamic_arrow.png");
    }, function () {
        $("table.SettingsMenu").removeClass("SelectedMenu");
        $("table.SettingsMenu img").attr("src", "../arquivos/img/UserControls/static_arrow.png");
    });
});