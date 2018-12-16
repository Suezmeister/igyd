$( document ).ready(function() {
    $('.size-s').css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('#friends li:first-child').css({
        "background-color" : "aquamarine"
    });
    $('input[name="receiver_id"]').val($('#friends li:first-child').val());
    $('input[name=size]').val('S')
});

$('.size-s').click(function () {
    $(this).css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('.size-m').css({
        "background-color" : "transparent"
    });
    $('.size-l').css({
        "background-color" : "transparent"
    });
    $('input[name=size]').val('S')
});

$('.size-m').click(function () {
    $('.size-s').css({
        "background-color" : "transparent"
    });
    $(this).css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('.size-l').css({
        "background-color" : "transparent"
    });
    $('input[name=size]').val('M')
});

$('.size-l').click(function () {
    $('.size-s').css({
        "background-color" : "transparent"
    });
    $('.size-m').css({
        "background-color" : "transparent"
    });
    $(this).css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('input[name=size]').val('L')
});