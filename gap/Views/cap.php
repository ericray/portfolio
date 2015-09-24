<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Club CAP | GAP Seguros y Fianzas','cap');
$layout->inicio();


$idioma='';
$cap='';
$empresas='';

if (isset($_SESSION['idioma'])) {
	$idioma=$_SESSION['idioma'];

	if($idioma=="es")
	{
		$empresas='empresas_asociadas';
		$cap='<h2 class="text-center">Club CAP</h2>

			<p>SOMOS EL UNICO AGENTE DE SEGUROS Y FIANZAS QUE TE OTORGA ESTE BENEFICIO</p>

			<p class="justificar">
				Descuentos  exclusivos con  nuestros socios comerciales,  aunado  a nuestro programa de lealtad que le  otorgará  puntos que puede  canjear  por  PREMIOS.
			</p>

			<p class="justificar">
				Uno de los objetivos de AGENTE CAPITAL es cuidar por su salud y fomentar la prevención por lo que se busco trabajar en su mayoría con  estas alianzas comerciales que usted al utilizarlas además de ahorrar podrá prevenirse de enfermedades, aunado podrá mantener una buena salud física, mental y financiera. Porque su salud no tiene precio!
			</p>

			<p class="justificar">
				Para hacer uso de su descuento, favor de presentar su tarjeta CLUB CAP en conjunto con su identificación o IFE vigentes.
				Estos descuentos son un beneficio único y exclusivo para clientes de AGENTE CAPITAL y no son transferibles o extensivos a cualquier otra persona.
				Por lo que le suplicamos si extravía o le roban su tarjeta favor de reportarla y con gusto se la repondremos.
				También es importante recordarle que la tarjeta tiene vigencia mientras tenga vigente sus polizas.
				“No nos hacemos responsables, por los servicios otorgados de los proveedores en convenio”
			</p>
			
			<h3>Programa de lealtad</h3>

			<p class="justificar">
				Al ser cliente nuestro también podrá usted generar y acumular puntos los cuales podrán irse acumulando según las diferentes pólizas que usted
				contrate en esta institución, (en los ramos de Accidentes Personales, Dental, Gastos Médicos Mayores, Vida, Barcos, Aviones, Fianzas, Transportes,
				Diversos, y Autos) los puntos dependerán de los montos netos (antes de IVA, Derechos de Póliza y Recargos) pagados registrados en nuestro sistema 
				durante el año. La revisión de los puntos se hará en forma anual al cierre de cada año y en Enero se les enviara un correo electrónico a todos los 
				ganadores y se publicará el aviso en el periodico de mayor circulación (Mérida, Cancún y Chetumal). Si despues del aviso y pasado el mes de Enero 
				no acude a reclamar su regalo se acumulara para el siguiente año. Permitiendole acumular los puntos únicamente por dos años, si en el año siguiente
				tampoco se reclama, los puntos generados se borrarán.
				Para conocer detalles de la ponderación de los puntos favor de contactar a su agente asesor en Agente Capital
			</p>';
	}

	if ($idioma=="en") 
	{
		$empresas='associated_companies';
		$cap='<h2 class="text-center">Club CAP</h2>

			<p>WE ARE THE ONLY INSURANCE AGENT AND BONDS GIVES YOU THIS BENEFIT</p>

			<p class="justificar">
				Exclusive discounts with our business partners, coupled with our loyalty program that will award points that can be redeemed for great prizes.
			</p>

			<p class="justificar">
				One of the objectives is AGENT CAPITAL their health care and promote prevention so they seek work mostly with these 
				the alliances that you can use besides saving from preventable diseases combined can maintain good physical health, 
				mental and financial. Because your health is priceless!
			</p>

			<p class="justificar">
				To use your discount, please present your card CLUB CAP together with their identification numbers or IFE. 
				These discounts are a unique and exclusive benefit to customers GAP and are not transferable or extend to any other person. 
				As you pray if lost or stolen card please report it and taste are roasted. 
				It is also important to remember that the card is valid while you have your policies in force. 
				"We are not responsible for the services provided in partnership vendors"
			</p>
			
			<h3>Loyalty Program</h3>

			<p class="justificar">
				As our client you can also generate and accumulate points that may leave accumulated under different policies you
				hired in this institution ( in the fields of Personal Injury, Dental, Major Medical , Life, Boats, Planes, Bail Bonds, Transport,
				Different , and Cars ) points depend on the net amounts (before tax, and surcharges Rights Policy ) paid in our system
				during the year. The review points will annually at the end of January each year and they sent an email to all
				winners and the notice shall be published in the newspaper of largest circulation ( Merida , Cancun and Chetumal ) . If, after notice and past the month of January
				do not come to claim his gift over to next year. Points accumulate allowing only two years, if in the following year
				not claimed , the generated points are deleted.
				For details on the weighting of the points please contact your advisor agent in GAP
			</p>';
	}
}

else
{
	$empresas='empresas_asociadas';
	$idioma='';
	$cap='<h2 class="text-center">Club CAP</h2>

			<p>SOMOS EL UNICO AGENTE DE SEGUROS Y FIANZAS QUE TE OTORGA ESTE BENEFICIO</p>

			<p class="justificar">
				Descuentos  exclusivos con  nuestros socios comerciales,  aunado  a nuestro programa de lealtad que le  otorgará  puntos que puede  canjear  por  PREMIOS.
			</p>

			<p class="justificar">
				Uno de los objetivos de AGENTE CAPITAL es cuidar por su salud y fomentar la prevención por lo que se busco trabajar en su mayoría con  estas alianzas comerciales que usted al utilizarlas además de ahorrar podrá prevenirse de enfermedades, aunado podrá mantener una buena salud física, mental y financiera. Porque su salud no tiene precio!
			</p>

			<p class="justificar">
				Para hacer uso de su descuento, favor de presentar su tarjeta CLUB CAP en conjunto con su identificación o IFE vigentes.
				Estos descuentos son un beneficio único y exclusivo para clientes de AGENTE CAPITAL y no son transferibles o extensivos a cualquier otra persona.
				Por lo que le suplicamos si extravía o le roban su tarjeta favor de reportarla y con gusto se la repondremos.
				También es importante recordarle que la tarjeta tiene vigencia mientras tenga vigente sus polizas.
				“No nos hacemos responsables, por los servicios otorgados de los proveedores en convenio”
			</p>
			
			<h3>Programa de lealtad</h3>

			<p class="justificar">
				Al ser cliente nuestro también podrá usted generar y acumular puntos los cuales podrán irse acumulando según las diferentes pólizas que usted
				contrate en esta institución, (en los ramos de Accidentes Personales, Dental, Gastos Médicos Mayores, Vida, Barcos, Aviones, Fianzas, Transportes,
				Diversos, y Autos) los puntos dependerán de los montos netos (antes de IVA, Derechos de Póliza y Recargos) pagados registrados en nuestro sistema 
				durante el año. La revisión de los puntos se hará en forma anual al cierre de cada año y en Enero se les enviara un correo electrónico a todos los 
				ganadores y se publicará el aviso en el periodico de mayor circulación (Mérida, Cancún y Chetumal). Si despues del aviso y pasado el mes de Enero 
				no acude a reclamar su regalo se acumulara para el siguiente año. Permitiendole acumular los puntos únicamente por dos años, si en el año siguiente
				tampoco se reclama, los puntos generados se borrarán.
				Para conocer detalles de la ponderación de los puntos favor de contactar a su agente asesor en Agente Capital
			</p>';
}
?>


<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">
			
				<?php echo $cap; ?>	
				<?php include_once('../includes/'.$empresas.'.html') ?>			

		</div>
	</div>
</div>

<?php
$layout->fin();
?>