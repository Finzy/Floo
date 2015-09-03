$(document).ready(function() {
	$('.nav_contact').click(function(){
		$('.contact').addClass("middle").removeClass("con_right");
	});

})

//voor het ring click effect
$('a').click(function(){
    $("#clickBolContainer").append("<div class='bolClick'></div>");
});