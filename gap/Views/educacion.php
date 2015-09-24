<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Plan educativo | GAP Seguros y Fianzas','seguro');
$layout->inicio();
$idioma="";
$educacion="";
$titulo='';
$texto="";

if(isset($_SESSION['idioma']))
{
	$idioma=$_SESSION['idioma'];
	if ($idioma=="es") {
		
		$titulo='<h2>Educación</h2>';
		$texto="Su seguro de Educacion se lo podemos cotizar con las siguientes aseguradoras:";
		$educacion='
		<b>¿Que es Plan Educativo?</b>
		
		 <p>El Plan Educativo es la opción que GAP te ofrece para formar un ahorro para la educación de sus hijos.</p>
		 <p>El ahorro, si se pospone, nunca se logra. Siempre habrá algo que pagar. Es por eso que con el Plan Educativo,  el ahorro para la educación de su vástago está protegido.</p>
		 <p>Una educación superior es la más valiosa herencia que le puede dejar a su descendencia.</p>

		 <p>Con el Plan Educativo puedes estar tranquilo</p>

		 <p>Recibimos tus aportaciones pagadas en tus primas, más los intereses que genere mismos que son superiores a los de cualquier banco actualmente</p>

		 <p>Puedes escoger la manera de entregarle el dinero: </p>
		 
		 <ul>
			<li>En una sola exhibición, </li>
			<li>A través de un fideicomiso, (sin costo) en forma de rentas mensuales. </li>
			<li>O puedes manejar el dinero personalmente si lo prefieres.</li>
		 </ul>';
	}

	if ($idioma=="en") {
		$titulo='<h2>Education</h2>';
		$texto="Your insurance education can quote it with the following insurers:";
		$educacion='
		<b>What is Education Plan?</b>
		
		 <p>The Educational Plan is the option that gives you GAP to form a saving for the education of their children.</p>
		 <p>The savings, if postponed, never achieved. There will always be something to pay. That is why with the Educational Plan, saving for the education of their offspring is protected.</p>
		 <p>A college education is the most valuable inheritance that can leave their offspring.</p>

		 <p>With the Educational Plan you can rest assured</p>

		 <p>We receive your contributions paid your premiums plus interest that they generate are superior to any bank currently.</p>

		 <p>You can choose how to deliver the money: </p>
		 
		 <ul>
			<li>In one exhibition.</li>
			<li>Through a trust, (toll free) in the form of monthly income. </li>
			<li>Or you can handle money personally if you prefer.</li>
		 </ul>';
	}
}

else{
	$titulo='<h2>Educacion</h2>';
	$texto="Su seguro de Educacion se lo podemos cotizar con las siguientes aseguradoras:";
	$educacion='
		<b>¿Que es Plan Educativo?</b>
		
		 <p>El Plan Educativo es la opción que GAP te ofrece para formar un ahorro para la educación de sus hijos.</p>
		 <p>El ahorro, si se pospone, nunca se logra. Siempre habrá algo que pagar. Es por eso que con el Plan Educativo,  el ahorro para la educación de su vástago está protegido.</p>
		 <p>Una educación superior es la más valiosa herencia que le puede dejar a su descendencia.</p>

		 <p>Con el Plan Educativo puedes estar tranquilo</p>

		 <p>Recibimos tus aportaciones pagadas en tus primas, más los intereses que genere mismos que son superiores a los de cualquier banco actualmente</p>

		 <p>Puedes escoger la manera de entregarle el dinero: </p>
		 
		 <ul>
			<li>En una sola exhibición, </li>
			<li>A través de un fideicomiso, (sin costo) en forma de rentas mensuales. </li>
			<li>O puedes manejar el dinero personalmente si lo prefieres.</li>
		 </ul>';
}

?>

<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">
			<?php echo $titulo; ?>
			<p class="hidden-phone">
			  <br>
			  <?php echo $texto; ?>
			  <br>
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
			<?php echo $educacion; ?>
		</div>
	</div>
</div>

<?php 
 $layout->fin();
?>