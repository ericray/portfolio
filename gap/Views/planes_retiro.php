<?php
include_once('Shared/Layout.php');
$layout=new Layout('Planes para el Retiro | GAP Seguros y Fianzas','seguros');
$layout->inicio();
$idioma='';
$titulo='';
$planes='';

if(isset($_SESSION['idioma']))
{
	$idioma=$_SESSION['idioma'];
	
	if($idioma=="es")
	{
		$titulo='<h2>Planes para el Retiro</h2>
		<center> 
		 <img src="../assets/img/layout/plan-ret-banner-izq.jpg">
		</center>
		<p>Su seguro de Plan de Retiro se lo podemos cotizar con las siguientes aseguradoras:</p>';
		$planes='	 	 
		<b>Asegure su Futuro Financiero</b>
		<p class="justificar">
		  Debido a los rápidos avances en la medicina y en la tecnología, estamos viviendo más. La vida promedio de una persona actualmente, es de 
		  aproximadamente 80 años. Mientras tanto, mucha gente sueña con retirarse tempranamente, sin embargo, no muchos de nosotros dedicamos tiempo a 
		  planificar para esa eventualidad. Como resultado, la gran mayoría de las personas termina con poco o ningún   fondo de retiro. Mientras más se vive 
		  retirado, más financieramente preparado debe estarse para permitirse el estilo de vida al cual se está acostumbrando
		</p>
		
		<b>¿Cómo trabaja El Plan de Retiro?</b>
		<p class="justificar">
		  La planificación del retiro de una persona es una decisión que debe tomarse ya ¡Mientras más pronto mejor! Los planes de retiro están cuidadosamente 
		  ajustados a sus necesidades individuales, a fin de ayudarle a lograr metas y garantizar su tranquilidad.
		</p>
		<p class="justificar">
		  Una vez que se llegue a la edad de retiro (o si el pensionado del plan fallece), el pensionado o el beneficiario recibe un ingreso garantizado 
		  (Pensión) por un número específico de años.
		</p>';
	}
	
	if($idioma=="en")
	{
		$titulo='<h2>Retirement Plans</h2>
		<center> 
		 <img src="../assets/img/layout/plan-ret-banner-izq.jpg">
		</center>
		<p>Your Retirement insurance can quote it with the following insurers:</p>';
		$planes='
		 <b>Assure his Financial Future</b>
	     <p class="justificar">
			Due to the rapid advances in the medicine and in the technology, we are living more. The average life of a person nowadays, is of approximately 80 
			years. Meanwhile, many people dream of moving back early, nevertheless, not many of us we dedicate time to planning for this contingency. As 
			result, the great majority of the persons ends with little or no bottom of retirement. While more it is lived retired, more financially prepared 
			one must be to there be allowed the way of life to which he is getting used
		 </p>	
			
		 <b>How does The Plan of Retirement work?</b>
		 
		 <p class="justificar">	
			The planning of the retirement of a person is a decision that must think already while more soon better! The plans of retirement are carefully 
			fitted to his individual needs,to help him to achieve goals and to guarantee his tranquility.
		 </p>
		 <p class="justificar"> 	
			 As soon as it comes near to the age of retirement (or if the pensioned one of the plan dies), the pensioned one or the beneficiary gets a 
			 guaranteed revenue (Pension) for a specific number of years.
	     </p>';	
	}
}

else
{
	$idioma='';
	$titulo='<h2>Planes para el Retiro</h2>
 	<center> 
	 <img src="../assets/img/layout/plan-ret-banner-izq.jpg">
	</center>
    <p>Su seguro de Plan de Retiro se lo podemos cotizar con las siguientes aseguradoras:</p>';
	$planes='	 	 
	<b>Asegure su Futuro Financiero</b>
	<p class="justificar">
	  Debido a los rápidos avances en la medicina y en la tecnología, estamos viviendo más. La vida promedio de una persona actualmente, es de aproximadamente 
	  80 años. Mientras tanto, mucha gente sueña con retirarse tempranamente, sin embargo, no muchos de nosotros dedicamos tiempo a planificar para esa 
	  eventualidad. Como resultado, la gran mayoría de las personas termina con poco o ningún   fondo de retiro. Mientras más se vive retirado, más 
	  financieramente preparado debe estarse para permitirse el estilo de vida al cual se está acostumbrando
	</p>
	
	<b>¿Cómo trabaja El Plan de Retiro?</b>
	<p class="justificar">
	  La planificación del retiro de una persona es una decisión que debe tomarse ya ¡Mientras más pronto mejor! Los planes de retiro están cuidadosamente 
	  ajustados a sus necesidades individuales, a fin de ayudarle a lograr metas y garantizar su tranquilidad.
	</p>
	<p class="justificar">
	  Una vez que se llegue a la edad de retiro (o si el pensionado del plan fallece), el pensionado o el beneficiario recibe un ingreso garantizado (Pensión) 
	  por un número específico de años.
	</p>';
}

?>

<div class="container">
 <div class="row-fluid">
  <div class="col-lg-9">
   <?php echo $titulo ?>
    <p>
    <img src="../assets/img/seguros/alanis.jpg" width="150" height="95">
    <img src="../assets/img/seguros/genral.jpg" width="150" height="95">
    <img src="../assets/img/seguros/gnp.jpg" width="150" height="95">
    <img src="../assets/img/seguros/imbursa.jpg" width="150" height="95">
    <img src="../assets/img/seguros/mapfre.jpg" width="150" height="95">
    </p>
   <?php echo $planes ?>
  </div>
 </div>
</div>

<?php echo $layout->fin(); ?>