
function LoadingOn() {

	var cidade = document.getElementById('cidade').value;
	var pop = document.getElementById('pop').value;
	var era = document.getElementById('era').value;

	if ( (cidade>0) && (pop>0) && (era>0) ) {
		document.getElementById("loading").style.visibility = "visible";
	}
	
}

function LoadingOff() {
	document.getElementById("loading").style.visibility = "hidden";
}