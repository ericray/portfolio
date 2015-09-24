<?php
include_once('Shared/Layout.php');
$layout=new Layout('Seguros de Vida | GAP Seguros y Fianzas','seguros');
$layout->inicio();
$titulo="";
$idioma="";
$vida="";
if(isset($_SESSION['idioma']))
{
	$idioma=$_SESSION['idioma'];
	if($idioma=="es")
	{
		$titulo='<h2>Seguros de vida</h2>
	   <p><img src="../assets/img/seg-vida-banner-izq.jpg" class="img-responsive"></p>
   	   <p>Su seguro de Educacion se lo podemos cotizar con las siguientes aseguradoras:</p>';
	  $vida='
		<p class="justificar">
		 El estilo de vida, se dice, es la casa que habita, el auto que conduce, el lugar en el que vacaciona  y los lugares que frecuenta, satisfactores que 
		 goza gracias a los recursos que genera y posee.
		 Existen garantías para reponer el inmueble o el auto que disfruta. Sin embargo ¿Ha pensado qué sucedería si la fuente de estos recursos se viera 
		 afectada?
		</p>
		<p class="justificar">
		 Asegurar su forma de vivir es algo deseable, y posible, en estos tiempos. Basta pensar qué cantidad requiere como mínimo cada año, durante cuánto 
		 tiempo, y cuándo debe contar con esos recursos, de manera segura, sin especular con ellos.
		</p>
		<p class="justificar">
		 La pregunta es si ahora su salud, economía y disponibilidad de recursos actuales le permiten respaldar su estilo de vida ¿Porqué no hacerlo ahora 
		 mismo? 
		 ¿Vale la pena correr el riesgo de perder los recursos de una vida.
		</p>
		';
	}
	
	if($idioma=="en")
	{
		$titulo='
		<h2>Health Insurance</h2>
		<p><img src="../assets/img/layout/seg-vida-banner-izq.jpg" class="img-responsive"></p>
		Your Health insurance can quote it with the following insurers:';
		$vida='
		<p class="justificar">
			The way of life, it is said, is the house that he lives, the car that he leads, the place in which vacaciona and the places that it frequents, 
			satisfactores that has a good time thanks to the resources that it generates and possesses.
	        Guarantees exist to re-put the building or the car that he enjoys. Nevertheless has he thought what would happen if the source of these resources 
			was meeting affected?
		</p>
		<p class="justificar">
		 To assure his way of living is something desirable, and possible, in these times. Coarse sewing to think what quantity it needs as minimum every year,
		 during how much time, and when it must possess these resources, of a sure way, without speculating on them.
		</p>
		<p class="justificar">
		 The question is if now his health, economy and availability of current resources allow him to endorse his way of life Porqué not to do it just now? It
		 is worth a sorrow traversing the risk of losing the resources of a life.
		</p>
		';
	}

}
else
{
	$idioma='';
	$titulo='<h2>Seguros de vida</h2>
   <p><img src="../assets/img/layout/seg-vida-banner-izq.jpg" class="img-responsive"></p>
   <p>Su seguro de Educacion se lo podemos cotizar con las siguientes aseguradoras:</p>';
	$vida='
	<p class="justificar">
	 El estilo de vida, se dice, es la casa que habita, el auto que conduce, el lugar en el que vacaciona  y los lugares que frecuenta, satisfactores que goza
	 gracias a los recursos que genera y posee.
	 Existen garantías para reponer el inmueble o el auto que disfruta. Sin embargo ¿Ha pensado qué sucedería si la fuente de estos recursos se viera afectada?
	</p>
	<p class="justificar">
	 Asegurar su forma de vivir es algo deseable, y posible, en estos tiempos. Basta pensar qué cantidad requiere como mínimo cada año, durante cuánto tiempo, 
	 y cuándo debe contar con esos recursos, de manera segura, sin especular con ellos.
	</p>
	<p class="justificar">
	 La pregunta es si ahora su salud, economía y disponibilidad de recursos actuales le permiten respaldar su estilo de vida ¿Porqué no hacerlo ahora mismo? 
	 ¿Vale la pena correr el riesgo de perder los recursos de una vida.
	</p>
	';
}

?>

<div class="container"> 
 <div class="row-fluid">
  <div class="col-lg-9">
   <?php
    echo $titulo;
   ?>
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
    <img src="../assets/img/seguros/pseguros.jpg" width="150" height="95">
    <img src="../assets/img/seguros/zurich.jpg" width="150" height="95">
   </p>
   <?php echo $vida; ?>
  </div>
 </div>
</div>  	

<?php 
$layout->fin()
?>