
function LoadingOn() {

	var cidade = document.getElementById('cidade').value;
	var pop = document.getElementById('pop').value;
	var era = document.getElementById('era').value;

	if ( (cidade>0) && (pop>0) && (era>0) ) {
		document.getElementById('loading').style.visibility = 'visible';
	}
	
}

function LoadingOff() {
	document.getElementById('loading').style.visibility = 'hidden';
}

function load() {
   if (GBrowserIsCompatible()) {

      var map = new GMap2(document.getElementById('map'));   
      map.setCenter(new GLatLng(40.002,-4.12),5);
      
      var madrid = new GLatLng(40.4165020, -3.702564);
      var barcelona = new GLatLng(41.38878, 2.15898);
      
      var polyline = new GPolyline([madrid, barcelona], '0000dd', 6, 0.4);
      map.addOverlay(polyline);
   }
}