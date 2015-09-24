<?php
include_once('Shared/Layout.php');
$layout=new Layout('Gasto Médicos Mayores | GAP Seguros y Fianzas','seguros');
$layout->inicio();
$titulo="";
$idioma="";
$gastos="";
if(isset($_SESSION['idioma']))
{
	$idioma=$_SESSION['idioma'];
	if($idioma=="es")
	{
		$titulo='<h2>Gastos Médico Mayores</h2>
	   <p><img src="../assets/img/layout/Banner_GMM.jpg" class="img-responsive"></p>
   	   <p>Su seguro de Educacion se lo podemos cotizar con las siguientes aseguradoras:</p>';
	   $gastos='
	<ul>
	  <li>Cobertura Nacional o Internacional</li>
      <li>Individual</li>
      <li>Grupo</li>
    </ul>
	<p class="justificar">
		Una de las principales inquietudes hoy en día, es conservar su salud y la de su familia. 
		Y cuando la salud sea afectada, hay que tener la completa seguridad de acceder a los mejores servicios que ayuden a recuperarla, sin sufrir el 
		desequilibrio económico de sus finanzas.
	</p>
	<p class="justificar">	
		Una decisión adecuada para estar tranquilidad es destinar cada año una cantidad para garantizar los mejores y más adecuados servicios de salud, es 
		decir, un seguro para tener solvencia y hacer frente a esas necesidades de servicios médicos de excelencia.
	</p>
	<p class="justificar">	
		Los seguros médicos son realmente valiosos. Recuerde que los servicios hospitalarios particulares implican un gasto, mismo que se reduce 
		considerablemente gracias a los costos de las primas, mismas que presentan diversas formas de pago y garantizan tener una protección muy amplia.
	</p>
	<p class="justificar">	
		Esto se puede lograr si aumentamos la participación del asegurado, deducible, en el caso de un siniestro.
		Un asegurado mencionó al escuchar la propuesta: “Me parece excelente que en caso de accidente me cubran sin deducible hasta 7,200 pesos. En caso de una
		enfermedad grave puedo conseguir 10, 20 o 30 mil pesos para pagar el deducible, pero sí se me complicaría el conseguir 500 mil, un millón o más que
		tendría que pagar si no tuviera el seguro”.
	</p>
	<p class="justificar">
		Está documentado en hospitales de todos los niveles: una simple intervención quirúrgica de apendicitis, muy común, tiene un costo que va desde los 30 
		hasta los 50 mil pesos. Cincuenta mil pesos tal vez no sean mucho pero con un Seguro de Gastos Médicos el costo es mucho menor.
	</p>
	<p class="justificar">	
		Hay casos registrados de estancias mayores a seis meses ,con cuentas de más de cuatro millones quinientos mil pesos, cubiertas fácilmente por las 
		aseguradoras.
	</p>
	<p class="justificar">	
		Por dar otro ejemplo: Un trasplante de riñón tiene un costo superior a los 250 mil dólares, y un valor incalculable para los afectados.
	</p>
	<p class="justificar">	
		Con el fin de ahorrar dinero, tal vez su seguro sea aún más barato, pero considere, si cuenta con los medios para ampararse totalmente: hay personas
		que han agotado su póliza justo cuando más la necesitaban.
	</p>
	<p class="justificar">	
		Al prever los servicios de salud para usted y su familia, su nivel de vida seguramente estará respaldado. Si desea una asesoría personalizada 
		¡consúltenos!
	</p>';
	}
	
	if($idioma=="en")
	{
		$titulo='
		<h2>Health Insurance</h2>
		<p><img src="../assets/img/layout/Banner_GMM.jpg" class="img-responsive"></p>
		Your Health insurance can quote it with the following insurers:';
		$gastos='
		  <ul> 
		   <li>National or International coverage</li>
	       <li>Individual</li>
           <li>Group</li>
            <p class="justificar"> 
			  One of the principal worries nowadays, it is to preserve his health and that of his family.
			  And when the health is affected, it is necessary to have the complete safety of acceding to the best services that they help her recover, without  			  suffering the economic imbalance of his finance.
			</p>
			<p class="justificar">
			  A decision adapted to be tranquility is to destine every year a quantity to guarantee the best and more suitable services of health, that is to 
			  say, an insurance to have solvency and to face to these needs of medical services of excellence
			</p>
			<p class="justificar">
			  The medical insurances are really valuable. Remember that the hospitable particular services imply an expense, same that diminishes considerably 
			  thanks to the costs of the premiums
			</p>
			<p class="justificar">
			  Same that present diverse forms of payment and guarantee to have a very wide protection.
			</p>
			<p class="justificar">
			  This can be achieved if we increase the participation of the policyholder, deducible, in case of a disaster.
			  A policyholder mentioned on having listened to the offer: " it seems to me to be excellent that in case of accident cover me without deducible up
			  to 7,200 weight. In case of a critical illness I can obtain 10, 20 or 30 thousand weight to pay the deducible one, but yes me would be 
			  complicated 500 thousand, one obtain million or more that it would have to pay if it did not have the insurance ".
			</p>
			<p class="justificar">
			  It is documented in hospitals of all the levels: a simple surgical intervention of appendicitis, very common, has a cost that goes from the 30 up
			  to 50 thousand weight. Fifty thousand weight maybe is not great but with an Insurance of Medical Expenses
			</p>
			<p class="justificar">
			  There are cases registered of stays major to six months, with accounts of more than four million five hundred thousand weight, covered easily by 
			  the insurance ones.
			</p>
			<p class="justificar">
			  For giving another example: A transplant of kidney has a cost superior to 250 thousand dollars, and an incalculable value for the affected ones.
			</p>
			<p class="justificar">
			  In order to save money, maybe his insurance is furthermore cheap, but consider, if it possesses the means to seek protection totally: there are 
			  persons who have exhausted his policy rightly when more they needed it.
			</p>
			<p class="justificar">
			  On having foreseen the services of health for you and his family, his standard of living surely will be endorsed. If he wishes a personalized 
			  advising consult us!
			</p>';
	}

}
else
{
	$idioma='';
	$titulo='<h2>Gastos Médico Mayores</h2>
   <p><img src="../assets/img/layout/Banner_GMM.jpg" class="img-responsive"></p>
   <p>Su seguro de Educacion se lo podemos cotizar con las siguientes aseguradoras:</p>';
	$gastos='
	<ul>
	  <li>Cobertura Nacional o Internacional</li>
      <li>Individual</li>
      <li>Grupo</li>
    </ul>
	<p class="justificar">
		Una de las principales inquietudes hoy en día, es conservar su salud y la de su familia. 
		Y cuando la salud sea afectada, hay que tener la completa seguridad de acceder a los mejores servicios que ayuden a recuperarla, sin sufrir el 
		desequilibrio económico de sus finanzas.
	</p>
	<p class="justificar">	
		Una decisión adecuada para estar tranquilidad es destinar cada año una cantidad para garantizar los mejores y más adecuados servicios de salud, es 
		decir, un seguro para tener solvencia y hacer frente a esas necesidades de servicios médicos de excelencia.
	</p>
	<p class="justificar">	
		Los seguros médicos son realmente valiosos. Recuerde que los servicios hospitalarios particulares implican un gasto, mismo que se reduce 
		considerablemente gracias a los costos de las primas, mismas que presentan diversas formas de pago y garantizan tener una protección muy amplia.
	</p>
	<p class="justificar">	
		Esto se puede lograr si aumentamos la participación del asegurado, deducible, en el caso de un siniestro.
		Un asegurado mencionó al escuchar la propuesta: “Me parece excelente que en caso de accidente me cubran sin deducible hasta 7,200 pesos. En caso de una
		enfermedad grave puedo conseguir 10, 20 o 30 mil pesos para pagar el deducible, pero sí se me complicaría el conseguir 500 mil, un millón o más que
		tendría que pagar si no tuviera el seguro”.
	</p>
	<p class="justificar">
		Está documentado en hospitales de todos los niveles: una simple intervención quirúrgica de apendicitis, muy común, tiene un costo que va desde los 30 
		hasta los 50 mil pesos. Cincuenta mil pesos tal vez no sean mucho pero con un Seguro de Gastos Médicos el costo es mucho menor.
	</p>
	<p class="justificar">	
		Hay casos registrados de estancias mayores a seis meses ,con cuentas de más de cuatro millones quinientos mil pesos, cubiertas fácilmente por las 
		aseguradoras.
	</p>
	<p class="justificar">	
		Por dar otro ejemplo: Un trasplante de riñón tiene un costo superior a los 250 mil dólares, y un valor incalculable para los afectados.
	</p>
	<p class="justificar">	
		Con el fin de ahorrar dinero, tal vez su seguro sea aún más barato, pero considere, si cuenta con los medios para ampararse totalmente: hay personas
		que han agotado su póliza justo cuando más la necesitaban.
	</p>
	<p class="justificar">	
		Al prever los servicios de salud para usted y su familia, su nivel de vida seguramente estará respaldado. Si desea una asesoría personalizada 
		¡consúltenos!
	</p>';
}
?>
<div class="container"> 
 <div class="row-fluid">
  <div class="col-lg-9">
   <?php
    echo $titulo;
   ?>
   <p>
    <img src="../assets/img/seguros/atlas.jpg" width="150" height="95">
    <img src="../assets/img/seguros/axa.jpg" width="150" height="95">
    <img src="../assets/img/seguros/banorte.jpg" width="150" height="95">
    <img src="../assets/img/seguros/genral.jpg" width="150" height="95">
    <img src="../assets/img/seguros/gnp.jpg" width="150" height="95">
    <img src="../assets/img/seguros/hdi.jpg" width="150" height="95">
    <img src="../assets/img/seguros/imbursa.jpg" width="150" height="95">
    <img src="../assets/img/seguros/mapfre.jpg" width="150" height="95">
    <img src="../assets/img/seguros/metlife.jpg" width="150" height="95">
    <img src="../assets/img/seguros/multiva.jpg" width="150" height="95">
   </p>
   <?php echo $gastos; ?>
  </div>
 </div>
</div>
<?php
 $layout->fin();
?>