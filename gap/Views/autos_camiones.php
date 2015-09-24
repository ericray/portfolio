<?php
include_once('Shared/Layout.php');
$layout=new Layout('Seguros para Autos y Camiones | GAP Seguros y Fianzas','seguros');
$layout->inicio();
$idioma='';
$autos='';

if(isset($_SESSION['idioma']))
{
	$idioma=$_SESSION['idioma'];
	if($idioma=="es")
	{
		$titulo='<h2>Autos y Camiones</h2>
	   <p><img src="../assets/img/layout/seg-autos-banner-izq.jpg" class="img-responsive"></p>';
	   $titulo='<h2>Autos y Camiones</h2>
	   <p><center><img src="../assets/img/layout/seg-autos-banner-izq.jpg" class="img-responsive"></center></p>';
	   $autos='
	     <b>Te ofrecemos:</b>
		<ul>
			<li>Las mejores coberturas para su auto y la mejor infraestructura de servicio.</li>
			<li>Servicios de emergencias medica móvil (Sólo en el D.F., Guadalajara y Monterrey).</li>
			<li>Como conductor habitual del vehículo asegurado, cubre también su Responsabilidad Civil, aún manejando otro vehiculo.</li>
		    <li>Los Gastos Médicos a ocupantes de su vehículo hasta la suma asegurada contratada en caso de accidente.</li>
			<li>El respaldo de un gran equipo de ajustadores profesionales para atender las 24 horas, los 365 días del año.</li>
			<li>Eliminación de Deducible.</li>
			<li>Auto substituto.</li>
		</ul>
		
		<b>¡Es mucho más que un seguro ¡</b>
		 <p>Y contratar es muy sencillo:</p>
		 <ul>
		  <li>Llenar y firmar la solicitud.</li>
		  <li>Proporciónanos copia de tarjeta de circulación.</li>
		  <li>Copia de identificación.</li>
		 </ul>
		<p>Para cotizar su auto con la mejor opción, mándenos un correo con la siguiente información</p>
		<ul>
		 <li>Año y modelo del vehículo.</li>
		 <li>Marca.</li>
		 <li>Características del vehiculo (Aire/Sin aire, de lujo, automático).</li>
		</ul>
		 <br><br>
		 <table class="table table-bordered">
		  <tr>
		   <th>Coberturas</th>
		   <th>Cobertura Amplia</th>
		   <th>Cobertura Limitada</th>
		   <th>Cobertura Básica</th>
		  </tr>
		  <tr>
		   <td>Daños materiales</td>
		   <td style="text-align:center">x</td>
		   <td></td>
		   <td></td>
		  </tr>
		  <tr>
		   <td>Robo total</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center"></td>
		  </tr>
		  <tr>
		   <td>Responsabilidad civil</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		  <tr>
		   <td>Gastos médicos ocupantes</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		  <tr>
		   <td>Defensa legal</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  <tr>
		   <td>Asistencia en el camino</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		 </table>
		 
		 <p>Su seguro de Auto y Camiones se lo podemos cotizar con las siguientes aseguradoras:</p>
	   ';
	}
	
	if($idioma=="en")
	{
		$titulo='<h2>Cars & Trucks</h2>
	   <p><center><img src="../assets/img/layout/seg-autos-banner-izq.jpg" class="img-responsive"></center></p>';
	   $autos='
	     <b>Te ofrecemos:</b>
		<ul>
			<li>The best coverages for his car and the best infrastructure of service.</li>
			<li>Emergency services mobile doctor (Only in the D.F., Guadalajara and Monterrey). </li>
			<li>As habitual driver of the insured vehicle, it covers also his Civil Responsibility, still handling another vehicle. </li>
		    <li>The Medical Expenses to occupants of his vehicle up to the insured sum contracted in case of accident.</li>
			<li>The support of a great equipment of professional adjustors to attend 24 hours, 365 days of the year. </li>
			<li>Elimination of Deducible.</li>
			<li>Surrogate car.</li>
		</ul>
		
		<b>It is much more than an insurance !</b>
		 <p>And to contract is very simple: </p>
		 <ul>
		  <li>To fill and to sign the request. </li>
		  <li>Provide To Us copy of card of traffic. </li>
		  <li>Copy of identification.</li>
		 </ul>
		<p>To quote his car with the best option, order us a mail with the following information </p>
		<ul>
		 <li>Year and model of the vehicle.</li>
		 <li>Marks.</li>
		 <li>Characteristics of the vehicle (Aire/Sin angers, of luxury, automatically).</li>
		</ul>
		 <br><br>
		 <table class="table table-bordered">
		  <tr>
		   <th>Coverage</th>
		   <th>Wide Coverage</th>
		   <th>Limited Coverage</th>
		   <th>Basic Coverage</th>
		  </tr>
		  <tr>
		   <td>Property Damage</td>
		   <td style="text-align:center">x</td>
		   <td></td>
		   <td></td>
		  </tr>
		  <tr>
		   <td>Total Theft</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center"></td>
		  </tr>
		  <tr>
		   <td>Civil Responsability</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		  <tr>
		   <td>Occupants Medical Expenses</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		  <tr>
		   <td>Legal-Defense</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  <tr>
		   <td>Roadside Assistance o Assistance in the Way</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		 </table>
		 
		 <p>Your Card and Trucks insurance can quote it with the following insurers:</p>
	   ';
	}

}
else
{
	$idioma='';
	$titulo='<h2>Autos y Camiones</h2>
	   <p><center><img src="../assets/img/layout/seg-autos-banner-izq.jpg" class="img-responsive"></center></p>';
	   $autos='
	     <b>Te ofrecemos:</b>
		<ul>
			<li>Las mejores coberturas para su auto y la mejor infraestructura de servicio.</li>
			<li>Servicios de emergencias medica móvil (Sólo en el D.F., Guadalajara y Monterrey).</li>
			<li>Como conductor habitual del vehículo asegurado, cubre también su Responsabilidad Civil, aún manejando otro vehiculo.</li>
		    <li>Los Gastos Médicos a ocupantes de su vehículo hasta la suma asegurada contratada en caso de accidente.</li>
			<li>El respaldo de un gran equipo de ajustadores profesionales para atender las 24 horas, los 365 días del año.</li>
			<li>Eliminación de Deducible.</li>
			<li>Auto substituto.</li>
		</ul>
		
		<b>¡Es mucho más que un seguro ¡</b>
		 <p>Y contratar es muy sencillo:</p>
		 <ul>
		  <li>Llenar y firmar la solicitud.</li>
		  <li>Proporciónanos copia de tarjeta de circulación.</li>
		  <li>Copia de identificación.</li>
		 </ul>
		<p>Para cotizar su auto con la mejor opción, mándenos un correo con la siguiente información</p>
		<ul>
		 <li>Año y modelo del vehículo.</li>
		 <li>Marca.</li>
		 <li>Características del vehiculo (Aire/Sin aire, de lujo, automático).</li>
		</ul>
		 <br><br>
		 <table class="table table-bordered">
		  <tr>
		   <th>Coberturas</th>
		   <th>Cobertura Amplia</th>
		   <th>Cobertura Limitada</th>
		   <th>Cobertura Básica</th>
		  </tr>
		  <tr>
		   <td>Daños materiales</td>
		   <td style="text-align:center">x</td>
		   <td></td>
		   <td></td>
		  </tr>
		  <tr>
		   <td>Robo total</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center"></td>
		  </tr>
		  <tr>
		   <td>Responsabilidad civil</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		  <tr>
		   <td>Gastos médicos ocupantes</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		  <tr>
		   <td>Defensa legal</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  <tr>
		   <td>Asistencia en el camino</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		   <td style="text-align:center">x</td>
		  </tr>
		 </table>
		 
		 <p>Su seguro de Auto y Camiones se lo podemos cotizar con las siguientes aseguradoras:</p>
	   ';
}

?>
<div class="container"> 
 <div class="row-fluid">
  <div class="col-lg-9">
   <?php
    echo $titulo;
   ?>
   
   <?php echo $autos; ?>
   <p>
		  <img src="../assets/img/seguros/aba.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/alanis.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/atlas.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/axa.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/banorte.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/genral.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/gmx.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/gnp.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/imbursa.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/mapfre.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/multiva.jpg" width="150" height="95">
		  <img src="../assets/img/seguros/zurich.jpg" width="150" height="95">
    </p>
  </div>
 </div>
</div>
<?php
$layout->fin()
?>