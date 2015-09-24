<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Alianzas | GAP Seguros y Fianzas','sucursal');
$layout->inicio();

$idioma="";
$sucursal="";

if (isset($_SESSION['idioma'])) {
	
	$idioma=$_SESSION['idioma'];

	if ($idioma=="es") {
		$sucursal="Sucursales";
	}

	if ($idioma=="en") {
		$sucursal="Branches";
	}
}
else{
	$sucursal="Sucursales";
}
?>


<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">
			
			<h2><?php echo $sucursal; ?></h2>

			<b>Corporativo:</b> <br> 
			Calle 27 #164-C x 36 y 38 <br>
			Colonia Buenavista <br>
			Mérida Yucatán <br>
			C.P 97127 <br>
			(999) 926 00 63 <br><br>
			 

			<b>Dirección de Agencia Cancún:</b> <br>
			Pecarí 3-16 SM 20 <br>
			C.P 77500 <br>
			(998) 898 14 59 <br>
			(998) 898 31 45 <br><br>
			 

			<b>Dirección de Agencia Chetumal:</b> <br>
			Av. Francisco I. Madero #130-A <br>
			Entre Chapultepec y Lázaro Cárdenas <br>
			Colonia Centro <br>
			C.P 77000 <br>
			(983) 144 02 44 <br><br>

		</div>
	</div>
</div>

<?php
$layout->fin();
?>