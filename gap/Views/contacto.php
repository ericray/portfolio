<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Contacto | GAP Seguros y Fianzas','contacto');
$layout->inicio();

$idioma="";
$contacto="";

if (isset($_SESSION['idioma'])) {
	
	$idioma=$_SESSION['idioma'];

	if ($idioma=="es") {
		
		$contacto='<h2 class="text-center">Contacto</h2>	

		<div class="col-lg-5">


			
			<p>Puedes ponerte en contacto mediante los siguientes medios:</p>
			
			<p>Lada sin costo: 01-800-987-2201</p>

			<p>Correo electronico:<a href="#">despacho@agentecapital.com</a></p>
			
			<b>Corporativo:</b>

			<p>Tel: 926-0063 (con 10 Lineas)</p>

			<p>Calle 27 #164-D por 36 y 38, Col. Buenavista (México), Mérida, Yucatán, C.P. 97127</p>

			<b>Dirección de Agencia Cancún:</b>
			<br>

			Pecarí 3-16 SM 20<br>
			C.P 77500<br>
			(998) 898 14 59<br>
			(998) 898 31 45<br>
			 
			<br> 

			<b>Direccion de Agencia Chetumal:</b>
			<br>
			Av. Francisco I. Madero #130-A<br>
			Entre Chapultepec y Lázaro Cárdenas<br>
			Colonia Centro<br>
			C.P 77000<br>
			(983) 144 02 44<br>
			Horario:<br>

			De Lunes a Viernes de:
			8:30 a.m. a 7:00 p.m.

		</div>
		
		<div class="col-lg-4">
			<h3>Mapa de ubicación</h3>
			<div id="map_canvas"></div>
		</div>';
	}

	if ($idioma=="en") {
		$contacto='<h2 class="text-center">Contact</h2>	

		<div class="col-lg-5">


			
			<p>You can contact through the following means.</p>
			
			<b>Telephones:</b>

			<p>Tel: 926-0063.</p>
			<p>Toll free: 01-800-987-2201</p>
			<br>
			<b>Company Address:</b>  

			<p>Street 27 #164-D por 36 y 38, Col. Buenavista (México), Mérida, Yucatán, C.P. 97127</p>

			<b>Hours:</b>
			<br>
			<p>Monday to Friday:</p>
			<p>8:30 am at 7:00 p.m.</p>

		</div>
		
		<div class="col-lg-4">
			<h3>Map</h3>
			<div id="map_canvas"></div>
		</div>';
	}

}

else
{
	$idioma="";
	$contacto='<h2 class="text-center">Contacto</h2>	

		<div class="col-lg-5">


			
			<p>Puedes ponerte en contacto mediante los siguientes medios:</p>
			
			<p>Lada sin costo: 01-800-987-2201</p>

			<p>Correo electronico:<a href="#">despacho@agentecapital.com</a></p>
			
			<b>Corporativo:</b>

			<p>Tel: 926-0063 (con 10 Lineas)</p>

			<p>Calle 27 #164-D por 36 y 38, Col. Buenavista (México), Mérida, Yucatán, C.P. 97127</p>

			<b>Dirección de Agencia Cancún:</b>
			<br>

			Pecarí 3-16 SM 20<br>
			C.P 77500<br>
			(998) 898 14 59<br>
			(998) 898 31 45<br>
			 
			<br> 

			<b>Direccion de Agencia Chetumal:</b>
			<br>
			Av. Francisco I. Madero #130-A<br>
			Entre Chapultepec y Lázaro Cárdenas<br>
			Colonia Centro<br>
			C.P 77000<br>
			(983) 144 02 44<br>
			Horario:<br>

			De Lunes a Viernes de:
			8:30 a.m. a 7:00 p.m.

		</div>
		
		<div class="col-lg-4">
			<h3>Mapa de ubicación</h3>
			<div id="map_canvas"></div>
		</div>';
}

?>


<style type="text/css">
  #map_canvas {
	height: 250px;
	width:290px;
	border: 1px solid #000;
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

<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">		

		<?php echo $contacto; ?>
		</div>

	</div>
</div>

<br><br>

<?php
	$layout->fin();
?>