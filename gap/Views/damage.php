<?php
include_once('Shared/Layout.php');
$layout=new Layout('Seguros para Daños | GAP Seguros y Fianzas','seguros');
$layout->inicio();
$idioma='';
$titulo='';
$danios='';

if(isset($_SESSION['idioma'])){
	$idioma=$_SESSION['idioma'];
	
	if($idioma=="es")
	{
		$titulo='
	<h2>Daños</h2>
	<p><img src="../assets/img/layout/seg-danos-banner-izq.jpg" class="img-responsive"></p>
	<p>Su seguro de Daños se lo podemos cotizar con las siguientes aseguradoras:</p>
	';
	$danios='
	  <br><br>
	  <p class="justificar"> 
	   Los seguros de bienes son los más comercializados en la historia de la industria, pero delicados por la cantidad de detalles a tomar en cuenta para 								
	   cumplir con las expectativas de protección que se desean, y con el ingrediente en común de ser propiedades físicas, expuestas a múltiples riesgos, de 
	   naturaleza diferente de acuerdo al bien: mueble o inmueble.
      </p>
	  <p class="justificar"> 
       Nuestro consultor especializado puede describir cuales son los riesgos que puede usted asumir, en la remota posibilidad de que se den, y también debe 
	   informarle del impacto económico que tendrá si llega a ocurrir.
      </p>
      <p class="justificar">  
       Los seguros de bienes abarcan: la preservación de bienes inmuebles y sus contenidos; vehículos, naves aéreas, cascos marítimos, mercancías y personas 
	   que se trasladan en estos transportes; la responsabilidad civil por daños accidentales causados por las actividades que lleve a cabo; rotura de 
	   maquinaria y equipos sujetos a presión, y más.
      </p>
	  <p class="justificar"> 
	   Para cotizar su seguro llámenos para que nuestro consultor especializado le visite para hacer una evaluación de los bienes asegurables.
	  </p>
	';
	}
	
	if($idioma=="en")
	{
		$titulo='
	<h2>Damage</h2>
	<p><img src="../assets/img/layout/seg-danos-banner-izq.jpg" class="img-responsive"></p>
	<p>Your Damage insurance can quote it with the following insurers:</p>
	';
	$danios='
	  <br><br>
	  <p class="justificar"> 
	   The insurances of goods are most commercialized in the history of the industry, but delicate for the quantity of details to bear in mind to expire with 
	   the protection expectations that are wished, and with the ingredient jointly of being physical properties, exposed to multiple risks, of nature 
	   different from agreement to the good: furniture or building.
      </p>
	  <p class="justificar"> 
       Our specialized consultant can describe which are the risks that you can assume, in the remote possibility that they are given, and also him it must 
	   inform about the economic impact that it will have if it manages to happen.
      </p>
      <p class="justificar">  
       The insurances of goods include: the preservation of real estate and his contents; vehicles, air ships, maritime hulls, goods and persons who move in 
	   this transport; the civil responsibility for accidental hurts caused by the activities that it carries out; break of machinery and equipments subject to
	   pressure, and more.
      </p>
	  <p class="justificar"> 
	    To quote his insurance call us in order that our specialized consultant visits him to do an evaluation of the insurable goods
	  </p>
	';
	}
}
else
{
	$idioma='';
	$titulo='
	<h2>Daños</h2>
	<p><img src="../assets/img/layout/seg-danos-banner-izq.jpg" class="img-responsive"></p>
	<p>Su seguro de Daños se lo podemos cotizar con las siguientes aseguradoras:</p>
	';
	$danios='
	  <br><br>
	  <p class="justificar"> 
	   Los seguros de bienes son los más comercializados en la historia de la industria, pero delicados por la cantidad de detalles a tomar en cuenta para 								
	   cumplir con las expectativas de protección que se desean, y con el ingrediente en común de ser propiedades físicas, expuestas a múltiples riesgos, de 
	   naturaleza diferente de acuerdo al bien: mueble o inmueble.
      </p>
	  <p class="justificar"> 
       Nuestro consultor especializado puede describir cuales son los riesgos que puede usted asumir, en la remota posibilidad de que se den, y también debe 
	   informarle del impacto económico que tendrá si llega a ocurrir.
      </p>
      <p class="justificar">  
       Los seguros de bienes abarcan: la preservación de bienes inmuebles y sus contenidos; vehículos, naves aéreas, cascos marítimos, mercancías y personas 
	   que se trasladan en estos transportes; la responsabilidad civil por daños accidentales causados por las actividades que lleve a cabo; rotura de 
	   maquinaria y equipos sujetos a presión, y más.
      </p>
	  <p class="justificar"> 
	   Para cotizar su seguro llámenos para que nuestro consultor especializado le visite para hacer una evaluación de los bienes asegurables.
	  </p>
	';
}
?>

<div class="container">
 <div class="row-fluid">
  <div class="col-lg-9">
  <?php echo $titulo ?>
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
    <?php echo $danios; ?>
  </div>
 </div>
</div>
<?php $layout->fin() ?>
