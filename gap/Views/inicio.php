<?php
include_once 'Shared/Layout.php';
$layout=new Layout('GAP Seguros y Fianzas','inicio');
$layout->inicio();

$idioma="";
$bienvenido="";
$empresas="";
if(isset($_SESSION['idioma']))
{
	$idioma=$_SESSION['idioma'];
	if($idioma=="es")
	{
		$bienvenido="<h2>Bienvenido</h2>
              <br />
              <p> 
                Descuentos  exclusivos con  nuestros socios comerciales,  aunado a nuestro programa de lealtad que le otorgará puntos que puede 
                canjear por PREMIOS.
              </p>
              <br />
              <p>
               Uno de los objetivos de AGENTE CAPITAL es cuidar por su salud y fomentar la prevención por lo que se busco trabajar en su mayoría con  
               estas a  lianzas comerciales que usted al   utilizarlas además de ahorrar podrá prevenirse de enfermedades, aunado podrá mantener una 
               buena salud física, mental y financiera. Porque su salud no tiene precio!
              </p>";		
		$empresas="empresas_asociadas";
	}
	
	if($idioma=="en")
	{
		$bienvenido="<h2>Welcome</h2>
              <br />
              <p> 
                Exclusive discounts with our business partners, coupled with our loyalty program that will award points that can 
				be redeemed for great prizes.
              </p>
              <br />
              <p>
               One objective of GAP is to care for your health and encourage prevention so they seek work mostly with
                these alliances that besides saving you the disease can be prevented using them, together may maintain an
                good physical, mental and financial health. Because your health is priceless!
              </p>";
			$empresas="associated_companies";
	}
}
else
{
	$idioma="";
	$bienvenido="<h2>Bienvenido</h2>
              <br />
              <p> 
                Descuentos  exclusivos con  nuestros socios comerciales,  aunado a nuestro programa de lealtad que le otorgará puntos que puede 
                canjear por PREMIOS.
              </p>
              <br />
              <p>
               Uno de los objetivos de AGENTE CAPITAL es cuidar por su salud y fomentar la prevención por lo que se busco trabajar en su mayoría con  
               estas a  lianzas comerciales que usted al   utilizarlas además de ahorrar podrá prevenirse de enfermedades, aunado podrá mantener una 
               buena salud física, mental y financiera. Porque su salud no tiene precio!
              </p>";		
		$empresas="empresas_asociadas";
}

?>

<div class="container">
        	<br>
            <div class="row-fluid">
            
             <div class="col-lg-1"></div>
             <div class="col-lg-12 well">
           	  <?php echo $bienvenido; ?>
             </div>
             <div class="col-lg-1"></div>
            </div>
            

			
        	<?php include_once "../includes/".$empresas.".html"; ?>
</div>
<div class="container">
	
</div>




<?php
$layout->fin();
?>