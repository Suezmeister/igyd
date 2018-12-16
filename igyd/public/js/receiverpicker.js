$( '#friends' ).ready(function() {
    $('#friends li:first-child').css({
        "background-color" : "aquamarine"
    });
    $('input[name="receiver_id"]').val($('#friends li:first-child').val());
});

$('.list-group-item').click(function () {
    $(this).css({
        "background-color" : "aquamarine"
    });
    $('.list-group-item').not(this).css({
        "background-color" : "azure"
    });;
    $('input[name="receiver_id"]').val($(this).val());
});