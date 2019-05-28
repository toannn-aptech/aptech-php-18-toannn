$(document).ready(function () {
    $("#hinh-1").show();
    $("#hinh-2").hide();
    $("#hinh-3").hide();
    $("#hinh-1").click(function () {
        $("#hinh-1").hide();
        $("#hinh-2").show();
        $("#hinh-3").hide();
    });
    $("#hinh-2").click(function () {
        $("#hinh-2").hide();
        $("#hinh-3").show();
        $("#hinh-1").hide();
    });
    $("#hinh-3").click(function () {
        $("#hinh-3").hide();
        $("#hinh-1").show();
        $("#hinh-2").hide();
    });

});