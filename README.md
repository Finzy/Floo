## Intro
Dit is ons bedrijfs portfolio die vooral gericht is op animaties.
Er is gebruik gemaakt van SCSS en javascript, wat erg goed samenwerkt voor het animeren van objecten op de website.

## Voorbeeld

Een stukje javascript voor de animatie

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
