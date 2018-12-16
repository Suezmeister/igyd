$('#sizes').ready(function() {
    $('#s').css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('#order_size').val('S')
});

$('#summary_size').ready(function() {
    if($('#summary_size').val()=="S"){
        $('#ss').css({
            "border-radius" : "50%",
            "background-color" : "aquamarine"
        });
    }else if($('#summary_size').val()=="M"){
        $('#sm').css({
            "border-radius" : "50%",
            "background-color" : "aquamarine"
        });
    }else if($('#summary_size').val()=="L"){
        $('#sl').css({
            "border-radius" : "50%",
            "background-color" : "aquamarine"
        });
    }
});

$('#s').click(function () {
    $(this).css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('#m').css({
        "background-color" : "transparent"
    });
    $('#l').css({
        "background-color" : "transparent"
    });
    $('#order_size').val('S')
});

$('#m').click(function () {
    $('#s').css({
        "background-color" : "transparent"
    });
    $(this).css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('#l').css({
        "background-color" : "transparent"
    });
    $('#order_size').val('M')
});

$('#l').click(function () {
    $('#s').css({
        "background-color" : "transparent"
    });
    $('#m').css({
        "background-color" : "transparent"
    });
    $(this).css({
        "border-radius" : "50%",
        "background-color" : "aquamarine"
    });
    $('#order_size').val('L')
});