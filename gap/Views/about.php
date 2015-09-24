<?php
 include_once("Shared/Layout.php");
 $title="Nosotros | GAP Seguros y Fianzas";
 $layout=new Layout($title,"about");
 $layout->inicio();
 
 $idioma="";
 $nosotros="";
 $tabs="";
 $tabs_mobile="";
 if(isset($_SESSION['idioma']))
 {
	 $idioma=$_SESSION['idioma'];
	 if($idioma=="en")
	 {
		 $idioma="";
		 $nosotros=' <br>
			 <h1>About us</h1> 
			  <br>
			  <center>
			   <img src="../assets/img/otros/nosotros.png" class="img-responsive">
			  </center>
			  <p id="justificar">
			   In keeping with the times we live in, and to make our services efficient, we have combined knowledge, and experience to form (GAP) Insurance and 
			   Bonding Agent, with the goal of offering to the public the most convenient alternative in the insurance market.
			  </p>
			  <p id="justificar">	
			    GAP is the initiative of several brokers motivated to excel in a wide range of insurance services.
			  </p>
			  <p id="justificar">
				At GAP, we act as insurance agents, structured and specialized with the intention of offering our insured the best options in the market; 
				financially, and in the terms of our policies.
			  </p>
			  <p id="justificar">	
				We work with the best and most prestigious insurance and surety companies. Our strength lies in our portfolios, which allow us access to the 
				best levels of negotiation, and to achieve our primary objective, "Offer you the best option in the protection of your inheritance".
			  </p>
			  	';
			  $tabs='<div id="page-wrap">
	
			<div id="slot-machine-tabs">
				
				<ul class="tabs">
					 <li><a href="#mision">Mission</a></li>
					 <li><a href="#vision">Vission</a></li>
					 <li><a href="#valores">Values</a></li>
					 <li><a href="#filosofia">Philosophy of quality</a></li>
				</ul>
				
				<div class="box-wrapper">
					
					<div id="mision" class="content-box">
						<div class="col-one col">
							<p>
								 We are the best choice in the insurance industry, to guarantee the protection of inheritances, and the physical 
								 integrity of our clients.
							</p>
	
						</div>
						
	
					</div>
					
					<div id="vision" class="content-box">
						<div class="col-one col">
							<p>
								To remain leaders in the sale of insurance, and bonding through quality service, and continued, and undiminished improvement 
								stimulated from the support and cooperation of teamwork.
							</p>
						</div>
						
					</div>
					
					<div id="valores" class="content-box">
						<div class="col-one col">
						 <p>
							<span>Loyalty:</span> Loyalty to our commitments; our customers, the company, and the insurance companies we represent.<br>
							<span>Efficiency:</span> Ability to achieve optimal results, andaccess to the necessary resources.<br>
							<span>Trustworthiness:</span> To act with righteousness and integrity, maintaining our good reputation under any circumstances.
						 </p>
						</div>
					</div>
					
					
					<div id="filosofia" class="content-box">
						<div class="col-one col">
							<p>
							 In GAP we promise to offer to clients and suppliers our services with suitable quality, in the agreed time, with the awaited 		
							 conscientiousness and that satisfies his needs and with highly qualified personnel.
							</p>
	
							<p>
							  We combine our efforts with the insurance carriers that we represent, to offer him benefits, guarantee and professionalism.
							</p>
	
							<p>
								We grant direct advising in order that the service goes according to his specific needs of protection and all our professional 								support in case of disaster or accident.
							</p>
						</div>
					</div>
					
				</div>
			
			</div> <!-- END Box Wrapper -->
				
			</div> <!-- END Slot Machine Tabs -->';
			  
			$tabs_mobile='<div class="hidden-tablet hidden-desktop">
	  <div class="container">
		<div class="row">
		 <div class="col-lg-12">
			<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#mis">
					  Mission
					</a>
				  </h4>
				</div>
				<div id="mis" class="panel-collapse collapse in">
				  <div class="panel-body">
					We are the best choice in the insurance industry, to guarantee the protection of inheritances, and the physical 
					integrity of our clients.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#vis">
					  Vission
					</a>
				  </h4>
				</div>
				<div id="vis" class="panel-collapse collapse">
				  <div class="panel-body">
					To remain leaders in the sale of insurance, and bonding through quality service, and continued, and undiminished improvement stimulated 
					from the support and cooperation of teamwork.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#valo">
					  Values
					</a>
				  </h4>
				</div>
				<div id="valo" class="panel-collapse collapse">
				  <div class="panel-body">
					<span>Loyalty:</span> Loyalty to our commitments; our customers, the company, and the insurance companies we represent.<br>
					<span>Efficiency:</span> Ability to achieve optimal results, andaccess to the necessary resources.<br>
					<span>Trustworthiness:</span> To act with righteousness and integrity, maintaining our good reputation under any circumstances.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#filo">
					  Philosophy of quality
					</a>
				  </h4>
				</div>
				<div id="filo" class="panel-collapse collapse">
				  <div class="panel-body">
					<p>
						In GAP we promise to offer to clients and suppliers our services with suitable quality, in the agreed time, with the awaited 
						conscientiousness and that satisfies his needs and with highly qualified personnel.
					</p>
					<p>
						We combine our efforts with the insurance carriers that we represent, to offer him benefits, guarantee and professionalism.
					</p>
					<p>
						We grant direct advising in order that the service goes according to his specific needs of protection and all our professional 
						support in case of disaster or accident.
					</p>
				  </div>
				</div>
			  </div>
			  
			 </div>
			 
			 </div> 
		 </div>
		</div>
	  
	  </div>';  
	 }
	 
	 if($idioma=="es")
	 {
		 $idioma="";
		 $nosotros=' <br>
			 <h1>Nosotros</h1> 
			  <br>
			  <center>
			   <img src="../assets/img/otros/nosotros.png" class="img-responsive">
			  </center>
			  <p class="justificar">
			   Acorde con la época que vivimos y para eficientar nuestros servicios, conjuntamos experiencias y conocimientos para formar (AGENTE CAPITAL) Agente de Seguros y Fianzas.
			   Con la finalidad de dar a todo público la alternativa más conveniente en el mercado asegurador.
			  </p>
			  <p class="justificar">
			   Este despacho se constituyó por iniciativa de varios agentes de seguros con visión para prestar servicios con excelencia.
			  </p>
			  <p class="justificar">
			   En AGENTE CAPITAL, fungimos como Agente de Seguros, Persona Moral y estamos estructurados departamentalmente con la intención de poder ofrecer a nuestros Clientes la mejor opción   en el mercado, tanto en condiciones del contrato, como económicas. Trabajamos con las mejores y más prestigiadas compañías tanto de Seguros como de Fianzas y nuestra fortaleza   reside en tener una buena cartera que nos permite accesar a los mejores niveles de negociación, para lograr nuestro objetivo primordial, “Dar la mejor opción en la protección de   su Patrimonio”.
			  </p>	';
			  $tabs='<div id="page-wrap">
	
			<div id="slot-machine-tabs">
				
				<ul class="tabs">
					 <li><a href="#mision">Misión</a></li>
					 <li><a href="#vision">Visión</a></li>
					 <li><a href="#valores">Valores</a></li>
					 <li><a href="#filosofia">Filosofía de calidad</a></li>
				</ul>
				
				<div class="box-wrapper">
					
					<div id="mision" class="content-box">
						<div class="col-one col">
							<p>
								 Somos la mejor opción profesional en asesoría y servicios del ramo asegurador y  garantizamos la protección del patrimonio e integridad física de nuestros clientes.
							</p>
	
						</div>
						
	
					</div>
					
					<div id="vision" class="content-box">
						<div class="col-one col">
							<p>
								Permanecer en el liderazgo en venta de seguros y fianzas a través de un servicio de calidad y mejora continúa sin menoscabo de la unión del equipo de trabajo.
							</p>
						</div>
						
					</div>
					
					<div id="valores" class="content-box">
						<div class="col-one col">
						 <p>
							<span>Lealtad:</span> Fidelidad a nuestros compromisos con los clientes, la empresa y las aseguradoras que representamos.<br>
							<span>Eficiencia:</span> Capacidad para lograr óptimos resultados con los recursos estrictamente necesarios.<br>
							<span>Honradez:</span> Actuar con rectitud y justicia, manteniendo nuestra honorabilidad bajo cualquier circunstancia.
						 </p>
						</div>
					</div>
					
					
					<div id="filosofia" class="content-box">
						<div class="col-one col">
							<p>En AGENTE CAPITAL nos comprometemos a ofrecer a  clientes y proveedores nuestros servicios con adecuada calidad, en el tiempo pactado, con el esmero esperado y que satisfaga sus necesidades y con personal altamente capacitado.</p>
	
							<p>Conjuntamos nuestros esfuerzos con las empresas aseguradoras que representamos, para ofrecerle beneficios, garantía y profesionalismo.</p>
	
							<p>Otorgamos  asesoría directa para que el servicio vaya acorde con sus necesidades específicas de protección y todo nuestro apoyo profesional en el caso de siniestro o accidente.</p>
						</div>
					</div>
					
				</div>
			
			</div> <!-- END Box Wrapper -->
				
			</div> <!-- END Slot Machine Tabs -->';
			  
			$tabs_mobile='<div class="hidden-tablet hidden-desktop">
	  <div class="container">
		<div class="row">
		 <div class="col-lg-12">
			<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#mis">
					  Misión
					</a>
				  </h4>
				</div>
				<div id="mis" class="panel-collapse collapse in">
				  <div class="panel-body">
					Somos la mejor opción profesional en asesoría y servicios del ramo asegurador y  garantizamos la protección del patrimonio e integridad física de nuestros clientes.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#vis">
					  Visión
					</a>
				  </h4>
				</div>
				<div id="vis" class="panel-collapse collapse">
				  <div class="panel-body">
					Permanecer en el liderazgo en venta de seguros y fianzas a través de un servicio de calidad y mejora continúa sin menoscabo de la unión del equipo de trabajo.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#valo">
					  Valores
					</a>
				  </h4>
				</div>
				<div id="valo" class="panel-collapse collapse">
				  <div class="panel-body">
					<span>Lealtad:</span> Fidelidad a nuestros compromisos con los clientes, la empresa y las aseguradoras que representamos.<br>
					<span>Eficiencia:</span> Capacidad para lograr óptimos resultados con los recursos estrictamente necesarios.<br>
					<span>Honradez:</span> Actuar con rectitud y justicia, manteniendo nuestra honorabilidad bajo cualquier circunstancia.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#filo">
					  Filosofía de calidad
					</a>
				  </h4>
				</div>
				<div id="filo" class="panel-collapse collapse">
				  <div class="panel-body">
					<p>En AGENTE CAPITAL nos comprometemos a ofrecer a  clientes y proveedores nuestros servicios con adecuada calidad, en el tiempo pactado, con el esmero esperado y que satisfaga sus necesidades y con personal altamente capacitado.</p>
					<p>Conjuntamos nuestros esfuerzos con las empresas aseguradoras que representamos, para ofrecerle beneficios, garantía y profesionalismo.</p>
					<p>Otorgamos  asesoría directa para que el servicio vaya acorde con sus necesidades específicas de protección y todo nuestro apoyo profesional en el caso de siniestro o accidente.</p>
				  </div>
				</div>
			  </div>
			  
			 </div>
			 
			 </div> 
		 </div>
		</div>
	  
	  </div>';  
	 }
 }
 
 else
 {
	 $idioma="";
	 $nosotros=' <br>
		 <h1>Nosotros</h1> 
		  <br>
          <center>
           <img src="../assets/img/otros/nosotros.png" class="img-responsive">
		  </center>
          <p class="justificar">
		   Acorde con la época que vivimos y para eficientar nuestros servicios, conjuntamos experiencias y conocimientos para formar (AGENTE CAPITAL) Agente de Seguros y Fianzas.
		   Con la finalidad de dar a todo público la alternativa más conveniente en el mercado asegurador.
		  </p>
		  <p class="justificar">
		   Este despacho se constituyó por iniciativa de varios agentes de seguros con visión para prestar servicios con excelencia.
		  </p>
		  <p class="justificar">
		   En AGENTE CAPITAL, fungimos como Agente de Seguros, Persona Moral y estamos estructurados departamentalmente con la intención de poder ofrecer a nuestros Clientes la mejor opción   en el mercado, tanto en condiciones del contrato, como económicas. Trabajamos con las mejores y más prestigiadas compañías tanto de Seguros como de Fianzas y nuestra fortaleza   reside en tener una buena cartera que nos permite accesar a los mejores niveles de negociación, para lograr nuestro objetivo primordial, “Dar la mejor opción en la protección de   su Patrimonio”.
		  </p>	';
		  $tabs='<div id="page-wrap">

        <div id="slot-machine-tabs">
        	
        	<ul class="tabs">
        		 <li><a href="#mision">Misión</a></li>
        		 <li><a href="#vision">Visión</a></li>
        		 <li><a href="#valores">Valores</a></li>
				 <li><a href="#filosofia">Filosofía de calidad</a></li>
        	</ul>
        	
        	<div class="box-wrapper">
	        	
	        	<div id="mision" class="content-box">
	        		<div class="col-one col">
	        			<p>
							 Somos la mejor opción profesional en asesoría y servicios del ramo asegurador y  garantizamos la protección del patrimonio e integridad física de nuestros clientes.
						</p>

	        		</div>
	        		

	        	</div>
	        	
	        	<div id="vision" class="content-box">
	        		<div class="col-one col">
	        			<p>
							Permanecer en el liderazgo en venta de seguros y fianzas a través de un servicio de calidad y mejora continúa sin menoscabo de la unión del equipo de trabajo.
						</p>
	        		</div>
	        		
	        	</div>
	        	
	        	<div id="valores" class="content-box">
	        		<div class="col-one col">
					 <p>
						<span>Lealtad:</span> Fidelidad a nuestros compromisos con los clientes, la empresa y las aseguradoras que representamos.<br>
						<span>Eficiencia:</span> Capacidad para lograr óptimos resultados con los recursos estrictamente necesarios.<br>
						<span>Honradez:</span> Actuar con rectitud y justicia, manteniendo nuestra honorabilidad bajo cualquier circunstancia.
					 </p>
	        		</div>
	        	</div>
				
				
				<div id="filosofia" class="content-box">
	        		<div class="col-one col">
	        			<p>En AGENTE CAPITAL nos comprometemos a ofrecer a  clientes y proveedores nuestros servicios con adecuada calidad, en el tiempo pactado, con el esmero esperado y que satisfaga sus necesidades y con personal altamente capacitado.</p>

						<p>Conjuntamos nuestros esfuerzos con las empresas aseguradoras que representamos, para ofrecerle beneficios, garantía y profesionalismo.</p>

						<p>Otorgamos  asesoría directa para que el servicio vaya acorde con sus necesidades específicas de protección y todo nuestro apoyo profesional en el caso de siniestro o accidente.</p>
	        		</div>
	        	</div>
	        	
	        </div>
        
        </div> <!-- END Box Wrapper -->
        	
        </div> <!-- END Slot Machine Tabs -->';
		  
		$tabs_mobile='<div class="hidden-tablet hidden-desktop">
  <div class="container">
	<div class="row">
	 <div class="col-lg-12">
		<div class="panel-group" id="accordion">
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#mis">
				  Misión
				</a>
			  </h4>
			</div>
			<div id="mis" class="panel-collapse collapse in">
			  <div class="panel-body">
				Somos la mejor opción profesional en asesoría y servicios del ramo asegurador y  garantizamos la protección del patrimonio e integridad física de nuestros clientes.
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#vis">
				  Visión
				</a>
			  </h4>
			</div>
			<div id="vis" class="panel-collapse collapse">
			  <div class="panel-body">
				Permanecer en el liderazgo en venta de seguros y fianzas a través de un servicio de calidad y mejora continúa sin menoscabo de la unión del equipo de trabajo.
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#valo">
				  Valores
				</a>
			  </h4>
			</div>
			<div id="valo" class="panel-collapse collapse">
			  <div class="panel-body">
				<span>Lealtad:</span> Fidelidad a nuestros compromisos con los clientes, la empresa y las aseguradoras que representamos.<br>
				<span>Eficiencia:</span> Capacidad para lograr óptimos resultados con los recursos estrictamente necesarios.<br>
				<span>Honradez:</span> Actuar con rectitud y justicia, manteniendo nuestra honorabilidad bajo cualquier circunstancia.
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#filo">
				  Filosofía de calidad
				</a>
			  </h4>
			</div>
			<div id="filo" class="panel-collapse collapse">
			  <div class="panel-body">
				<p>En AGENTE CAPITAL nos comprometemos a ofrecer a  clientes y proveedores nuestros servicios con adecuada calidad, en el tiempo pactado, con el esmero esperado y que satisfaga sus necesidades y con personal altamente capacitado.</p>
                <p>Conjuntamos nuestros esfuerzos con las empresas aseguradoras que representamos, para ofrecerle beneficios, garantía y profesionalismo.</p>
				<p>Otorgamos  asesoría directa para que el servicio vaya acorde con sus necesidades específicas de protección y todo nuestro apoyo profesional en el caso de siniestro o accidente.</p>
			  </div>
			</div>
		  </div>
		  
		 </div>
		 
		 </div> 
	 </div>
	</div>
  
  </div>';  
 }
 
?>

<link rel='stylesheet' href='../assets/css/styles.css'>
<script src='../assets/js/slotmachine.js'></script>

<div class="container">
 <div class="row-fluid">
	<div class="col-lg-9">
   			<?php echo $nosotros; ?>
	</div>
 </div>
 
</div>

<center>
 <img src="../assets/img/otros/compania.png" class="img-responsive">
</center>

<div class="container hidden-phone">
 <div class="row-fluid">
 <div class="col-lg-3">&nbsp;</div>
  <div class="col-lg-9">
	<?php echo $tabs; ?>
  </div>
 </div>
</div>

<?php echo $tabs_mobile; ?>
 
  <br><br>
  
<script type="text/javascript">
	(function(){ var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = '//s3.buysellads.com/ac/bsa.js'; (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa); })();
</script>

<script type="text/javascript">
	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-68528-29']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); })();
</script>

<?php $layout->fin(); ?>
