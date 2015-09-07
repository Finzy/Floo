//document.ontouchmove = function (event) {
//    event.preventDefault();
//}

$(document).ready(function () {
    $('.nav_contact').click(function () {
        $('.contact').addClass("middle").removeClass("con_right");
    });

})

//voor het ring click effect
$("a").click(function () {
    var to = this.getAttribute("to");
    $("#clickBolContainer").append("<div class='bolClick'></div>");
    if (to == null) {
        console.log("geen 'to' attribute in de 'a' tag");
    } else {

        $('.page').animate({
            top: '100%'
        });
        $('.page').css({
            position: 'fixed'
        });
        $('#' + to).animate({
            top: '0'
        });
        $('#' + to).css({
            position: 'absolute'
        });

        var tH = $('#' + to).height();
        console.log(to + " H: " + tH);
        $('#container').animate({
            height: tH + "px"
        });
    }
});

$('span').click(function () {
    var dit = this;
    p = dit.getElementsByTagName('p');
//    console.log(p);
    if ( $(p).css('display') == 'none' ) {
        $(p).css({
            display: 'block'
        });
    } else {
        $(p).css({
            display: 'none'
        });
    }
});