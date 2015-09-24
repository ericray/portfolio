<style type="text/css">
      html, body, #map_canvas {

		margin: 0;
        padding: 0;
		height: 100%;

      }
    </style>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">	
      var map;
      var lugar = new google.maps.LatLng(21.000967,-89.618847);
	  var textoGlobo = "<strong>Gap Seguros y Fianzas</strong> <br />Calle 27 #164-D por 36 y 38, <br>Col. Buenavista (M&eacute;xico), <br>M&eacute;rida, Yucat&aacute;n, C.P. 97127";
	  
      function initialize() {
		  var myOptions = { zoom: 15, center: lugar, mapTypeId: google.maps.MapTypeId.ROADMAP };
		  
		  var map = new google.maps.Map(document.getElementById('map_canvas'),myOptions);
		  
		  var marker = new google.maps.Marker({ position: lugar, map: map });
		  
		  var coordInfoWindow = new google.maps.InfoWindow();
		  coordInfoWindow.setContent(textoGlobo);
		  coordInfoWindow.setPosition(lugar);
		  coordInfoWindow.open(map);
		  //zoom_changed
		  google.maps.event.addListener(
										marker, 
										'click', 
										function() {
											coordInfoWindow.setContent(textoGlobo); 
											coordInfoWindow.open(map); 
											infowindow.open(marker.get('map'), marker);
										}
										);
	  }
	  
	  google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map_canvas"></div>