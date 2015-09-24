
<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Seguros | GAP Seguros y Fianzas','seguro');
$layout->inicio();
$idioma="";
$seguro="";

if (isset($_SESSION['idioma'])) {
	

	if($idioma=="es")
	{
		$seguro='
		<h2>Seguros</h2>
		<b>Normas del Servicio</b>
	    <p id="justificar">Nos caracterizamos por brindar a nuestros clientes un trato con el más alto nivel de confidencialidad y profesionalismo.</p>
	    
	    <b>Ventajas que Ofrecemos:</b>
		<p>En nuestra empresa proponemos siempre a nuestros clientes:</p>
		<ul>
		 <li>Contamos con personal interno especializado en apoyo para sisniestros y rembolsos de siniestros Autos, Gastos Médicos y Daños</li>
		 <li>Cuadro comparativo a la renovación de su póliza</li>
		 <li>Condiciones especiales a costos preferenciales</li>
		 <li>Reingeniería continúa de productos y procesos</li>
		 <li>Personal profesional. Somos el despacho con mejor estructura del sureste que le ayudaran a satisfacer todas sus demandas</li>
		 <li>Adaptación necesaria conforme a sus necesidades</li>
		 <li>Personal altamente capacitado</li>
		 <li>Calidad en el servicio</li>
		 <li>Atención personalizada</li>
		 <li>Contamos con herramientas tecnológicas para consulta en linea de su póliza y recibos</li>
		</ul>';
	}

	else
	{
		$seguro='
		<h2>Seguros</h2>
		<b>Normas del Servicio</b>
	    <p id="justificar">Nos caracterizamos por brindar a nuestros clientes un trato con el más alto nivel de confidencialidad y profesionalismo.</p>
	    
	    <b>Ventajas que Ofrecemos:</b>
		<p>En nuestra empresa proponemos siempre a nuestros clientes:</p>
		<ul>
		 <li>Contamos con personal interno especializado en apoyo para sisniestros y rembolsos de siniestros Autos, Gastos Médicos y Daños</li>
		 <li>Cuadro comparativo a la renovación de su póliza</li>
		 <li>Condiciones especiales a costos preferenciales</li>
		 <li>Reingeniería continúa de productos y procesos</li>
		 <li>Personal profesional. Somos el despacho con mejor estructura del sureste que le ayudaran a satisfacer todas sus demandas</li>
		 <li>Adaptación necesaria conforme a sus necesidades</li>
		 <li>Personal altamente capacitado</li>
		 <li>Calidad en el servicio</li>
		 <li>Atención personalizada</li>
		 <li>Contamos con herramientas tecnológicas para consulta en linea de su póliza y recibos</li>
		</ul>';	
	}
}

else
{
	$idioma='';
	$seguro='
	<h2>Seguros</h2>
	<b>Normas del Servicio</b>
    <p id="justificar">Nos caracterizamos por brindar a nuestros clientes un trato con el más alto nivel de confidencialidad y profesionalismo.</p>
    
    <b>Ventajas que Ofrecemos:</b>
	<p>En nuestra empresa proponemos siempre a nuestros clientes:</p>
	<ul>
	 <li>Contamos con personal interno especializado en apoyo para sisniestros y rembolsos de siniestros Autos, Gastos Médicos y Daños</li>
	 <li>Cuadro comparativo a la renovación de su póliza</li>
	 <li>Condiciones especiales a costos preferenciales</li>
	 <li>Reingeniería continúa de productos y procesos</li>
	 <li>Personal profesional. Somos el despacho con mejor estructura del sureste que le ayudaran a satisfacer todas sus demandas</li>
	 <li>Adaptación necesaria conforme a sus necesidades</li>
	 <li>Personal altamente capacitado</li>
	 <li>Calidad en el servicio</li>
	 <li>Atención personalizada</li>
	 <li>Contamos con herramientas tecnológicas para consulta en linea de su póliza y recibos</li>
	</ul>';	
	
}

?>

<div class="container">
	<div class="row-fliud">
		<div class="col-lg-9">

			<?php echo $seguro; ?>

		</div>

	</div>
</div>

<?php
 $layout->fin();
?>