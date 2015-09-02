function toggleDisplay(child){
	var container = document.getElementById(child);

	if(getComputedStyle(container, null).display == "none") {
 		container.style.display = "block";
 		document.getElementById(child).className ='infoContainer ani1';
 	}
 	else {
 		document.getElementById(child).className ='infoContainer ani2';
 		setTimeout(function(){container.style.display = "none";}, 2000);
 	}
}
