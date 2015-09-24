<?php

class Layout{
	
	var $title;
	var $pagina;
	var $ruta="../";
		
	function Layout($titulo="",$pag)
	{
		$this->title=$titulo;
		$this->pagina=$pag;
		session_start();
	}
	
	function css()
	{
		$cadena='
		<link href="'.$this->ruta.'assets/css/bootstrap.css" rel="stylesheet">
   	    <link href="'.$this->ruta.'assets/css/bootstrap-theme.css" rel="stylesheet">
	    <link href="'.$this->ruta.'assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="'.$this->ruta.'assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="'.$this->ruta.'assets/css/styles.css" rel="stylesheet">
	    <link rel="stylesheet" href="'.$this->ruta.'assets/css/carousel.css"/>
		<link rel="stylesheet" href="'.$this->ruta.'assets/css/tabs.css"/>';
		return $cadena;
	}
	
	function script()
	{
		$cadena= '<script src="'.$this->ruta.'assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="'.$this->ruta.'assets/js/organictabs.jquery.js"></script>
		<script src="'.$this->ruta.'assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="'.$this->ruta.'assets/js/jquery.contentcarousel.js" type="text/javascript"></script>
		<script src="'.$this->ruta.'assets/js/jquery.easing.1.3.js" ></script>
		<script src="'.$this->ruta.'assets/js/jquery.mousewheel.js" type="text/javascript"></script>
		<script src="'.$this->ruta.'assets/js/scripts.js" type="text/javascript"></script>';
		return $cadena;
	}
	
	function menu()
	{
		$css_inicio="";
		$css_about="";
		$css_fianzas="";
		$css_contact="";
		$css_gap="";
		$css_siniestro="";
		$css_alianza="";
		$css_sucursales="";
		$css_cap="";
		$css_eco="";
		
		$idioma="";
		$home="";
		$nosotros="";
		$fianzas="";
		$contacto="";
		$gap="";
		$siniestro="";
		$alianza="";
		$sucursal="";
		$unete="";
		$seguro="";
		$cap="";
		$seguros="";
		
		if(isset($_SESSION['idioma']))
		{
			$idioma=$_SESSION['idioma'];
			
		}
		else
		{
			$idioma="";
			$home="Inicio";
			$nosotros="Nosotros";
			$fianzas="Fianzas";
			$contacto="Contacto";
			$siniestro="Siniestros";
			$alianza="Alianzas";
			$sucursal="Sucursales";
			$unete="Únete a GAP";
			$seguro="Seguros";
			$cap="Club CAP";
			$subUnete='<li><a href="agente_seguro_fianza.php">Agentes de seguros o fianzas</a></li>
    					<li><a href="bolsa_trabajo.php">Bolsa de trabajo</a></li>';
			$seguros='<li><a href="educacion.php">Educación</a></li>
					  <li><a href="gastos_medicos.php">Gastos Médicos Mayores</a></li>
					  <li><a href="planes_retiro.php">Planes para el Retiro</a></li>
					  <li><a href="damage.php">Daños</a></li>
					  <li><a href="autos_camiones.php">Autos y Camiones</a></li>
					  <li><a href="vidas.php">Vida</a></li>
					  <li><a href="alianza.php">Alianzas</a></li>';
		}
		
		if($idioma=="es")
		{
		
			$home="Inicio";
			$nosotros="Nosotros";
			$fianzas="Fianzas";
			$contacto="Contacto";
			$siniestro="Siniestros";
			$alianza="Alianzas";
			$sucursal="Sucursales";
			$unete="Únete a GAP";
			$seguro="Seguros";
			$cap="Club CAP";
			$subUnete='<li><a href="agente_seguro_fianza.php">Agentes de seguros o fianzas</a></li>
    					<li><a href="bolsa_trabajo.php">Bolsa de trabajo</a></li>';
			$seguros='<li><a href="educacion.php">Educación</a></li>
					  <li><a href="gastos_medicos.php">Gastos Médicos Mayores</a></li>
					  <li><a href="planes_retiro.php">Planes para el Retiro</a></li>
					  <li><a href="damage.php">Daños</a></li>
					  <li><a href="autos_camiones.php">Autos y Camiones</a></li>
					  <li><a href="vidas.php">Vida</a></li>
					  <li><a href="alianza.php">Alianzas</a></li>';
		}
		 
		 if($idioma=="en")
		 {	 
		  	$home="Home";
			$nosotros="About us";
			$fianzas="Bails";
			$contacto="Contact";
			$siniestro="Accident";
			$alianza="Alliances";
			$sucursal="Branches";
			$unete="Join GAP";
			$seguro="Insurance";
			$cap="CAP club";
			$subUnete='<li><a href="agente_seguro_fianza.php">Insurance and bails agents</a></li>
    					<li><a href="bolsa_trabajo.php">Job</a></li>';
			$seguros='<li><a href="educacion.php">Education</a></li>
					<li><a href="gastos_medicos.php">Health Insurance</a></li>
					<li><a href="planes_retiro.php">Retirement Plans</a></li>
					<li><a href="damage.php">Damage</a></li>
					<li><a href="autos_camiones.php">Cars and Trucks</a></li>
					<li><a href="vidas.php">Life</a></li>
					<li><a href="alianza.php">Alliances</a></li>';
		 }
		
		if($this->pagina!="")
		{
			switch($this->pagina)
			{
				case 'inicio':
				$css_inicio=" active ";
				break;
				
				case 'about':
				$css_about=" active ";
				break;
				
				case 'fianzas':
				$css_fianzas=" active ";
				break;
				
				case 'contacto':
				$css_contact=" active ";
				break;
				
				case 'gap':
				$css_gap=" active ";
				break;
				
				case 'siniestro':
				$css_siniestro=" active ";
				break;
				
				case 'alianza':
				$css_alianza=" active ";
				break;
				
				case 'sucursal':
				$css_sucursales=" active ";
				break;
				
				case 'cap':
				$css_cap=" active ";
				break;

				case 'ecogap':
				$css_eco=" active ";
				break;
			}
		}
		
		echo '<div class="container">
		<div class="row-fluid" id="menu">
			<nav class="navbar navbar-inverse" role="navigation">
	
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			  </div>
			
	
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				  <li class="'.$css_about.'"><a href="about.php">'.$nosotros.'</a></li>
				  <li class="dropdown">
					<a href="seguros.php" class="dropdown-toggle" data-toggle="dropdown">'.$seguro.' <b class="caret"></b></a>
					<ul class="dropdown-menu">
					  '.$seguros.'
					</ul>
				  </li>
				  <li class="'.$css_fianzas.'"><a href="fianzas.php">'.$fianzas.'</a></li>
				  <li class="'.$css_siniestro.'"><a href="siniestro.php">'.$siniestro.'</a></li>
				  <li class="'.$css_alianza.'"><a href="alianza.php">'.$alianza.'</a></li>
				  <li class="'.$css_sucursales.'"><a href="sucursales.php">'.$sucursal.'</a></li>
				  <li class="'.$css_contact.'"><a href="contacto.php">'.$contacto.'</a></li>
				  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$unete.' <b class="caret"></b></a>
					<ul class="dropdown-menu">
						'.$subUnete.'
					</ul>
				  <li>
				  <li class="'.$css_cap.'"><a href="cap.php">'.$cap.'</a></li>
				  <li class="'.$css_eco.' hidden-phone hidden-tablet"><a href="ecogap.php"><img src="'.$this->ruta.'assets/img/layout/ecogap.png" height="30" width="40"></a></li>
				  <li class="'.$css_eco.' hidden-desktop"><a href="ecogap.php">Ecogap</a></li>
				</ul>
				
				
			  </div>
			</nav>
		</div>
	  </div>';	
	  
	}
	
	function parteUno()
	{
		echo '<!doctype html>
		<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
		<html>
		 <head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		  <title>'.$this->title.'</title>
		 
		  <link href="'.$this->ruta.'assets/img/layout/favicon.ico" rel="shortcut icon">'.$this->css().$this->script();
	}
	
	function parteDos()
	{
		
	}
	
	function parteTres()
	{
		echo '</head>
		<body>';
		$this->cabecera();
		$this->menu();
	}
	
	function cabecera()
	{   
		$idioma="";
		$css1="";
		$css2="";
		$texto_es="";
		$texto_en="";	
		if(isset($_SESSION['idioma']))
		{
			$idioma=$_SESSION['idioma'];
			
		}
		else
		{
			$idioma="";
			echo "<script>
			   $(document).ready(function(e){
					$('#idioma div#es').hide();
					$('#idioma div#en').show();
					
					
					
			   });
			 </script>";
			 $texto_en="English";
			 $texto_es='';
		
		}
		
		

		if($idioma=="es")
		{
		
			 echo "<script>
			   $(document).ready(function(e){
					$('#idioma div#es').hide();
					$('#idioma div#en').show();
					

			   });
			 </script>";
			 $texto_en='English';
			 $texto_es='';
		}
		 
		 if($idioma=="en")
		 {	 
		  	echo "<script>
			   $(document).ready(function(e){
					$('#idioma div#es').show();
					$('#idioma div#en').hide();

					
			   });
			 </script>";
			 $texto_en='';
			 $texto_es='Español';
			 

		 }
		
		echo '<div class="container" id="header-desk">
				
				<div class="row-fluid header visible-desktop">
					<div class="col-lg-4" id="logo">
						<a href="about.php"><img src="'.$this->ruta.'assets/img/layout/logo2.png" class="img-responsive"></a>
					</div>
					<div class="col-lg-8" id="cabecera2">
					    <form action="" method="post">
						 <div class="col-lg-4 input-group">
						  <input type="text" class="form-control">
						  <span class="input-group-btn">
					        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
					      </span>
						 </div>
					    </form>
					    <div class="col-lg-8">
							<form action="../procesos/cambia_idioma.php" method="post" id="idioma">
							 <div id="en">
								<span>'.$texto_en.'</span>
							 	<input type="submit" id="btnEn" name="accion" value="Inglés" title="English">
							 	<span>|</span>
							 	<span>
							 	 <a href="#">Aviso de privacidad</a>
							 	</span>
							 	<span>|</span>
							 	<span>
							 	 <a href="validador.php">Validador</a>
							 	</span>
							 </div>
							 <div id="es">
								<span>'.$texto_es.'</span>
							    <input type="submit" id="btnEs" name="accion" value="Español" title="Español">
							    <span>|</span>
							 	<span>
							 	 <a href="#">Notice of Privacy</a>
							 	</span>
							  </div>
							</form>						 
					    </div> 
					</div>
				</div>
				
				<!-- cabecera para verse el moviles -->
				
				<div class="row-fluid header-mobile hidden-desktop">
					<div class="col-lg-4" id="logo-mobile">
						<a href="about.php"><img src="'.$this->ruta.'assets/img/layout/logo2.png" class="img-responsive"></a>

					</div>
					<div class="col-lg-8">
					  <div class="input-group col-sm-8" id="buscador">
					   <form action="" method="post">
						<div class="input-group">
						  <input type="text" class="form-control">
						  <span class="input-group-btn">
					        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
					      </span>
						</div>
					   </form> 		
 						<div id="idiomas">
 							<form action="../procesos/cambia_idioma.php" method="post" id="idioma">
							 <div id="en">
							  <span>'.$texto_en.'</span>
							  <input type="submit" id="btnEn" name="accion" value="Inglés" title="English">
							   <spa>|</span>
							   <a href="#">Aviso de privacidad</a>
							   <spa>|</span>
							   <a href="#">Validador</a>
							 </div>
							 <div id="es">
							  <span>'.$texto_es.'</span>
							  <input type="submit" id="btnEs" name="accion" value="Español" title="Español">
							  <spa>|</span>
							  <a href="#">Notice of Privacy</a>
							 </div>
							</form>	
 						</div>
					  </div>
					 </div>
				    </div>
				
			    </div>

				<div class="container hidden-phone" id="header-tablet">
				
				
				
				<!-- cabecera para verse en tablets -->
				
				<div class="row-fluid header-mobile">
					<div class="col-lg-4" id="logo-mobile">
						<a href="about.php"><img src="'.$this->ruta.'assets/img/layout/logo2.png" class="img-responsive"></a>
						<div class="col-lg-1">
							<form action="" method="post">
							<div class="input-group">
							  <input type="text" class="form-control">
							  <span class="input-group-btn">
						        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						      </span>
							</div>
						   </form>
					   </div>
					   <div id="idiomas">
 							<form action="../procesos/cambia_idioma.php" method="post" id="idioma">
							 <div id="en">
							  <span>'.$texto_en.'</span>
							  <input type="submit" id="btnEn" name="accion" value="Inglés" title="English">
							   <spa>|</span>
							   <a href="#">Aviso de privacidad</a>
							   <spa>|</span>
							   <a href="#">Validador</a>
							 </div>
							 <div id="es">
							  <span>'.$texto_es.'</span>
							  <input type="submit" id="btnEs" name="accion" value="Español" title="Español">
							  <spa>|</span>
							  <a href="#">Notice of Privacy</a>
							 </div>
							</form>	
 						</div> 	
					</div>
						
					
					 </div>
				    </div>
				
			    </div>

			    ';
	}
	
	function parteCuatro()
	{

		$idioma="";
		$login="";
		$cotiza="";
		
		if(isset($_SESSION['idioma']))
		{
			$idioma=$_SESSION['idioma'];
			
		}
		else
		{
			$idioma="";
			$login='<div id="login">
		    <h3>Iniciar sesión</h3>
		    <form action="login.php" method="post">
				 <div class="form-group">
				  <label for="user">Usuario</label>
				  <input type="text" class="form-control" id="user">
				 </div>
				 <div class="form-group">
				  <label for="pass">Contraseña</label>
				  <input type="password" class="form-control" id="pass">
				 </div>
				 <input type="submit" class="btn btn-primary" value="Entrar">
				 <a href="#">¿Olvidó su Contraseña?</a>
				</form>
		   </div>';
			$cotiza='<div id="cotiza">
			   	
				<img src="'.$this->ruta.'assets/img/layout/cotiza_seguro.gif" id="cotiza_img" class="visible-desktop hidden-tablet">
				<form action="adquirir_seguro.php" method="post">
				 <div class="form-group">
				  <label for="cotiza">Elija el tipo de seguro</label>
				  <select name="cotiza" id="cotiza" class="form-control">
				   <option>Seleccione uno</option>
				   <option>Educación</option>
				   <option>Gastos Médicos Mayores</option>
				   <option>Planes de Retiro</option>
				   <option>Daños</option>
				   <option>Autos y Camiones</option>
				   <option>Vida</option>
				   <option>Dental</option>
				  </select>
				 </div>
				 
				 <input type="submit" class="btn btn-primary" value="Elegir">
				</form>
		   </div>';
		}
		
		if($idioma=="es")
		{
			$login='<div id="login">
		    <h3>Iniciar sesión</h3>
		    <form action="login.php" method="post">
				 <div class="form-group">
				  <label for="user">Usuario</label>
				  <input type="text" class="form-control" id="user">
				 </div>
				 <div class="form-group">
				  <label for="pass">Contraseña</label>
				  <input type="password" class="form-control" id="pass">
				 </div>
				 <input type="submit" class="btn btn-primary" value="Entrar">
				 <a href="#">¿Olvidó su Contraseña?</a>
				</form>
		   </div>';
			$cotiza='<div id="cotiza">
			   	
				<img src="'.$this->ruta.'assets/img/layout/cotiza_seguro.gif" id="cotiza_img" class="visible-desktop hidden-tablet">
				<form action="adquirir_seguro.php" method="post">
				 <div class="form-group">
				  <label for="cotiza">Elija el tipo de seguro</label>
				  <select name="cotiza" id="cotiza" class="form-control">
				   <option>Seleccione uno</option>
				   <option>Educación</option>
				   <option>Gastos Médicos Mayores</option>
				   <option>Planes de Retiro</option>
				   <option>Daños</option>
				   <option>Autos y Camiones</option>
				   <option>Vida</option>
				   <option>Dental</option>
				  </select>
				 </div>
				 
				 <input type="submit" class="btn btn-primary" value="Elegir">
				</form>
		   </div>';	 
		}
		 
		 if($idioma=="en")
		 {	 
		  	$login='<div id="login">
		    <h3>Login</h3>
		    <form action="login.php" method="post">
				 <div class="form-group">
				  <label for="user">User</label>
				  <input type="text" class="form-control" id="user">
				 </div>
				 <div class="form-group">
				  <label for="pass">Password</label>
				  <input type="password" class="form-control" id="pass">
				 </div>
				 <input type="submit" class="btn btn-primary" value="Login">
				 <a href="#">Forgot your password?</a>
				</form>
		   </div>';
			$cotiza='<div id="cotiza">
			   	
				<h3>Insurance Quotes</h3>
				<form action="adquirir_seguro.php" method="post">
				 <div class="form-group">
				  <label for="cotiza">Choose the type of insurance: </label>
				  <select name="cotiza" id="cotiza" class="form-control">
				   <option>Select one</option>
				   <option>Education</option>
				   <option>Health Insurance</option>
				   <option>Retirement plans</option>
				   <option>Damage</option>
				   <option>Cars and Trucks</option>
				   <option>Life</option>
				   <option>Dental</option>
				  </select>
				 </div>
				 
				 <input type="submit" class="btn btn-primary" value="Choose">
				</form>
		   </div>';
		 }

		echo '<div class="container">
  		<div class="row-fluid" id="cuerpo">
  		<div class="col-lg-3">
		   
		   '.$login.'

		   '.$cotiza.'
		   
  		</div>';
	}
	
	function inicio()
	{
		$this->parteUno();
		$this->parteDos();
		$this->parteTres();
		$this->parteCuatro();
	}
	
	function parteCinco()
	{
		echo "</div>
		</div>";
	}
	
	function parteSeis()
	{
		echo "</body>
		</html";
	}
	
	function footer()
	{
		$direccion="";
		$titulo_direccion="";
		$titulo_tel="";
		$privacidad="";
		$derechos="";
		
		if(isset($_SESSION['idioma']))
		{
			$idioma=$_SESSION['idioma'];
			
		}
		else
		{
			$idioma="";
			$titulo_direccion="Nos encontramos en";
			$direccion="<p>Calle 27 # 164-C x 36 y 38</p> 
			  <p>Col. Buena Vista</p> 
			  <p>C.P. 97127</p> 
			  <p>Mérida, Yucatán, México.</p>";
			$titulo_tel="LADA sin costo";
			$privacidad="Aviso de privacidad";
			$derechos=" Derechos Reservados 2011 © GAP Agente de Seguros y Fianzas S.A. de C.V.";
		}
		
		if($idioma=="es")
		{
			$titulo_direccion="Nos encontramos en";
			$direccion="
			  <p>
			    Calle 27 # 164-C x 36 y 38<br>
			  	Col. Buena Vista<br>
			  	C.P. 97127<br>
			  	Mérida, Yucatán, México.
			  </p> ";
			$titulo_tel="LADA sin costo";
			$privacidad="Aviso de privacidad";
			$derechos=" Derechos Reservados 2011 © GAP Agente de Seguros y Fianzas S.A. de C.V.";
		}
		
		if($idioma=="en")
		{
			$titulo_direccion="We are in";
			$direccion="
			  <p>
			  	Street 27 # 164-C x 36 and 38<br> 
			  	Buena Vista<br> 
			  	Zip Code 97127<br> 
			  	Mérida, Yucatán, México.
			  </p>";
			$titulo_tel="Toll free";
			$privacidad="Privacy notice";
			$derechos=" Copyright 2011 © GAP Agent of Insurance and Bonds S.A. de C.V.";
		}
		
		echo '<div class="container subir">
  
   <div class="row-fluid footer">
   		<div class="col-lg-12">
    
    		<div class="col-lg-1">&nbsp;</div>
		 
    		<div class="col-lg-3" id="datos-contacto">
			  <span>'.$titulo_direccion.':</span>
			  <br><br>
			  '.$direccion.'
			</div>
		 
			<div class="col-lg-2" id="datos-contacto">
			  <span>'.$titulo_tel.':</span>
		  	  <br><br>
		  	  <p>
				01-800-987-2201<br />
				TEL: 926-0063
			  </p>
			</div>
	
		    <div class="col-lg-2" id="social">
			  <a href="sucursales.php"><img src="'.$this->ruta.'assets/img/layout/visita_nuestras_sucursales.png"></a>
			</div>
	
		    <div class="col-lg-3" id="social">
		  
        	  <span>
					<a target="_blank" href="https://www.facebook.com/AgenteCapital"><i class="fa fa-facebook-square fa-3x"></i></a>
         	  </span>
	      
              <span>
               <a target="_blank" href="https://twitter.com/agentecapital"><i class="fa fa-twitter-square fa-3x"></i></a>
              </span>
              
              <span>
               <a target="_blank" href="http://www.linkedin.com/company/2393771?trk=tyah"><i class="fa fa-linkedin-square fa-3x"></i></a>
              </span>
              
              <span>
               <a target="_blank" href="http://www.youtube.com/user/gapseguros?blend=1&ob=0"><i class="fa fa-youtube-square fa-3x"></i></a>
              </span>
              
	 	    </div>
				  		
           
         </div>
	   </div>
       

       	<div class="footer">
        	<div id="" class="text-center">
               
                <a href="#aviso">
                 '.$privacidad.'
                </a> &nbsp; &nbsp;
                <label>'.$derechos.'</label>
               
              </div>
        </div>
		';
	}
	
	function fin()
	{
		$this->parteCinco();
		$this->footer();
		$this->parteSeis();
	}
}

?>