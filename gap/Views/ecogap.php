<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Eco GAP | GAP Seguros y Fianzas','ecogap');
$layout->inicio();

$ecogap='';
$idioma='';
$form="";

if (isset($_SESSION['idioma'])) 
{
	$idioma=$_SESSION['idioma'];
	
	if($idioma=="es")
	{
		$ecogap='
		<br><br>
			<img src="../assets/img/layout/ecogap_seccion.png" class="img-responsive">
		
		<br>
		<b>Somos una empresa preocupada por el bienestar y el futuro de nuestro querido planeta tierra</b>
		<br><br>
		<center>
			<img src="../assets/img/layout/tierra.jpg" class="img-responsive img-thumbnail img-ecogap">
		</center>
		<br>
		<p class="justificar">
		 Hoy más que nunca nuestro planeta necesita de todos nosotros ya que la notoria contaminación, la sobre población y 
		 la excesiva explotación de los recursos naturales son el resultado de los cambios climáticos del recalentamiento global 
		 y los recurrentes y cada vez más poderosos desastres naturales.
		</p>
		<p class="justificar">
			Debido a lo anterior el equipo de GAP preocupados y decididos a aportar nuestro granito de arena hemos decidido trabajar en
			un proyecto que denominamos “oficina sin papel” El cual sin su apoyo nos sería muy difícil llevar a cabo, si usted es nuestro
			cliente y desea contribuir con nuestro proyecto por favor llene este <a href="#formulario">pequeño formulario</a> para poder enviarle de ahora en adelante
			su póliza y sus recibos electrónicos a su correo en lugar de impresos. Toda nuestra oficina imprime únicamente lo necesario y se
			imprime en papel reciclado, esto con el objetivo por supuesto de ayudar a nuestros bosques que almacenan el 50% del carbón que
			existe en la tierra. Esto provoca que este carbón se mezcle con la contaminación existente y favorezca el terrible
			calentamiento global. El 42% de la madera obtenida por la industria se utiliza para fabricar papel, y además el proceso de
			creación de papel es terriblemente contaminante, nada menos que el cuarto contribuidor en cuanto a gases invernadero.
		</p>
		<p class="justificar">
		 Además colaboramos con un centro de acopio de baterías en nuestras oficinas, este centro de acopio lo trabajamos en forma conjunta con 
		 la ADAY (Asociación en Defensa de los Animales en Yucatán).
		</p>
		<br>
		<center>
			<img src="../assets/img/layout/reciclar_pilas.jpg" class="img-responsive img-thumbnail" height="300">
		</center>
		<br>
		<p class="justificar">
			Las pilas/baterías de uso común son peligrosas y toxicas, ya que están elaborados con químicos y sustancias letales que son nocivas para 
			la salud. Como lo son el Mercurio, Cadmio, Magnesio, Níquel y Cinc. Si desechamos las pilas con el resto de los residuos terminan en vertederos 
			o en plantas de incineración. Generando gases y se descomponen pasando sus componentes tóxicos al subsuelo contaminando las aguas subterráneas y 
			el suelo y con ello se introduce en las cadenas alimenticias naturales, de las que se nutre el ser humano. En las plantas de incineración, las 
			emanaciones resultantes darán lugar a elementos tóxicos volátiles contaminando el aire.
		</p>
		<center>
		 	Una sola pila es capaz de contaminar miles de litros de agua.
			<br>
			<b>NO LAS TIRES A LA BASURA, TRAELAS CON NOSOTROS!!</b>
		</center>
		<br>
		<p class="justificar">
			También reciclamos latas de aluminio, periódicos y envases pet y recibimos de todo el que desee colaborar, esto nos sirve para reciclar y lo 
			generado nos sirve para hacer pequeñas campañas de limpieza en ciertas partes de la ciudad o en playas cercanas. 
		</p>
		<p>Visita estas páginas relacionadas con el tema:</p>

		<p><a href="http://www.elblogverde.com">www.elblogverde.com</a></p>

		<p><a href="http://www.reciclandollantas.com.mx">www.reciclandollantas.com.mx</a></p>

		
		<center>
			<img src="../assets/img/layout/reclicla_planeta.jpg" class="img-responsive img-thumbnail">
		</center>
		<br>
		<center>
		 	<p>- Ayúdanos a salvar nuestro planeta. -</p>

			<p>Gracias</p>
		</center>
		';
		$form='<form class="form-horizontal" role="form" id="formulario">
                  <fieldset>
                    
          <legend>Formulario de contacto</legend>

                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellidos:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. de póliza:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div> 

					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Cómo se enteró</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                          <option value="">Espectacular</option>
                          <option value="">Prensa</option>
                          <option value="">Revista</option>
                          <option value="">TV</option>
                          <option value="">Publicación</option>
                          <option value="">Expo</option>
                          <option value="">Agente (especifique el nombre...)</option>
                        </select>
                      </div>
                    </div>
                    
          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Comentarios:</label>
                      <div class="col-sm-10">
                        <textarea cols="3" class="form-control"></textarea>
                      </div>
                    </div>

                    
                    <div class="help-block" style="float:right;">
                      TODOS los campos con <span class="rojo">*</span> son requeridos
                    </div>
                    <br><br>
                    <div>
                      <b>
                        <span class="help-block">NOTA: “Si no le llega la confirmación de recepción de su solicitud en 2 días por favor revise su bandeja de correo no deseado”</span>
                     </b> 
                    </div>  
                     <br>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </fieldset>
                </form>';
	}

	if($idioma=="en")
	{
		$ecogap='
		<br><br>
			<img src="../assets/img/layout/ecogap_seccion.png" class="img-responsive">
		
		<br>
		<b>We are a company concerned with the welfare and future of our beloved planet Earth</b>
		<br><br>
		<center>
			<img src="../assets/img/layout/tierra.jpg" class="img-responsive img-thumbnail img-ecogap">
		</center>
		<br>
		<p class="justificar">
		 Today more than ever, our planet needs all of us as the notorious pollution, over population 
		 and excessive exploitation of natural resources are the result of global warming climate change and the recurrent and increasingly powerful natural disasters.
		</p>
		<p class="justificar">
			Because of this GAP team concerned and determined to contribute our bit we decided to work on a project called "paperless office" Who without their support we 
			would be very difficult to carry out, if you are our customer and want to contribute to our project, please fill out the short form to send from now on your 
			policy and your receipts to your e-mail instead of printed. All our office prints only what is necessary and is printed on recycled paper, this course in order 
			to help our forests store 50% of the coal that exists on earth. This causes the coal to mix with existing pollution and promote the terrible global warming. 42% 
			of wood obtained from industry is used to make paper, and also the creation process is terribly polluting paper, no less than the fourth largest contributor in 
			terms of greenhouse gases.
		</p>
		<p class="justificar">
		 In addition we collaborate with a <b>battery recycling</b> center at our offices, the collection center as we work together with the ADAY (Association in Defense of Animals in Yucatan).
		</p>
		<br>
		<center>
			<img src="../assets/img/layout/reciclar_pilas.jpg" class="img-responsive img-thumbnail">
		</center>
		<br>
		<p class="justificar">
			The batteries / batteries commonly used are dangerous and toxic, as they are made with lethal chemicals and substances that are harmful to health. Such as mercury, 
			cadmium, magnesium, nickel and zinc. If we discard the batteries with the rest of the waste ends up in landfills or incineration plants. Gas Generating and decompose 
			toxic components from contaminating the subsurface groundwater and soil and thereby enters natural food chains, of which draws humans. In incineration plants, resulting 
			fumes will result in volatile toxic elements polluting the air.
		</p>
		<center>
		 	A single cell can contaminate thousands of gallons of water.
			<br>
			<b>DO NOT throw away, bring it with us!!</b>
		</center>
		<br>
		<p class="justificar">
			We also recycle aluminum cans, pet bottles and newspapers and received from everyone who wants to collaborate, it helps us to recycle and generated serves to make 
			small cleanups in certain parts of town or on nearby beaches. 
		</p>
		<p>Visit these related pages on the topic:</p>

		<p><a href="http://www.elblogverde.com">www.elblogverde.com</a></p>

		<p><a href="http://www.reciclandollantas.com.mx">www.reciclandollantas.com.mx</a></p>

		
		<center>
			<img src="../assets/img/layout/reclicla_planeta.jpg" class="img-responsive img-thumbnail">
		</center>
		<br>
		<center>
		 	<p>- Help save our planet. -</p>

			<p>Thanks</p>
		</center>
		';
		$form='<form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Eco gap form</legend>

                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Name: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Surnames :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Policy numbe:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div> 

                    
          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Comments:</label>
                      <div class="col-sm-10">
                        <textarea cols="3" class="form-control"></textarea>
                      </div>
                    </div>

                    
                    <div class="help-block" style="float:right;">
                      All fields marked with <span class="rojo">*</span> are required.
                    </div>
                    <br><br>
                    <div>
                      <b>
                        <span class="help-block">NOTE: "If you do not receive confirmation of receipt of your order within 2 days please check your junk mailbox"</span>
                     </b> 
                    </div>  
                     <br>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </fieldset>
                </form>';
			
	}
}

else
{
	$idioma='';
	$ecogap='
		<br><br>
			<img src="../assets/img/layout/ecogap_seccion.png" class="img-responsive">
		
		<br>
		<b>Somos una empresa preocupada por el bienestar y el futuro de nuestro querido planeta tierra</b>
		<br><br>
		<center>
			<img src="../assets/img/layout/tierra.jpg" class="img-responsive img-thumbnail img-ecogap">
		</center>
		<br>
		<p class="justificar">
		 Hoy más que nunca nuestro planeta necesita de todos nosotros ya que la notoria contaminación, la sobre población y 
		 la excesiva explotación de los recursos naturales son el resultado de los cambios climáticos del recalentamiento global 
		 y los recurrentes y cada vez más poderosos desastres naturales.
		</p>
		<p class="justificar">
			Debido a lo anterior el equipo de GAP preocupados y decididos a aportar nuestro granito de arena hemos decidido trabajar en
			un proyecto que denominamos “oficina sin papel” El cual sin su apoyo nos sería muy difícil llevar a cabo, si usted es nuestro
			cliente y desea contribuir con nuestro proyecto por favor llene este <a href="#formulario">pequeño formulario</a> para poder enviarle de ahora en adelante
			su póliza y sus recibos electrónicos a su correo en lugar de impresos. Toda nuestra oficina imprime únicamente lo necesario y se
			imprime en papel reciclado, esto con el objetivo por supuesto de ayudar a nuestros bosques que almacenan el 50% del carbón que
			existe en la tierra. Esto provoca que este carbón se mezcle con la contaminación existente y favorezca el terrible
			calentamiento global. El 42% de la madera obtenida por la industria se utiliza para fabricar papel, y además el proceso de
			creación de papel es terriblemente contaminante, nada menos que el cuarto contribuidor en cuanto a gases invernadero.
		</p>
		<p class="justificar">
		 Además colaboramos con un centro de acopio de baterías en nuestras oficinas, este centro de acopio lo trabajamos en forma conjunta con 
		 la ADAY (Asociación en Defensa de los Animales en Yucatán).
		</p>
		<br>
		<center>
			<img src="../assets/img/layout/reciclar_pilas.jpg" class="img-responsive img-thumbnail">
		</center>
		<br>
		<p class="justificar">
			Las pilas/baterías de uso común son peligrosas y toxicas, ya que están elaborados con químicos y sustancias letales que son nocivas para 
			la salud. Como lo son el Mercurio, Cadmio, Magnesio, Níquel y Cinc. Si desechamos las pilas con el resto de los residuos terminan en vertederos 
			o en plantas de incineración. Generando gases y se descomponen pasando sus componentes tóxicos al subsuelo contaminando las aguas subterráneas y 
			el suelo y con ello se introduce en las cadenas alimenticias naturales, de las que se nutre el ser humano. En las plantas de incineración, las 
			emanaciones resultantes darán lugar a elementos tóxicos volátiles contaminando el aire.
		</p>
		<center>
		 	Una sola pila es capaz de contaminar miles de litros de agua.
			<br>
			<b>NO LAS TIRES A LA BASURA, TRAELAS CON NOSOTROS!!</b>
		</center>
		<br>
		<p class="justificar">
			También reciclamos latas de aluminio, periódicos y envases pet y recibimos de todo el que desee colaborar, esto nos sirve para reciclar y lo 
			generado nos sirve para hacer pequeñas campañas de limpieza en ciertas partes de la ciudad o en playas cercanas. 
		</p>
		<p>Visita estas páginas relacionadas con el tema:</p>

		<p><a href="http://www.elblogverde.com">www.elblogverde.com</a></p>

		<p><a href="http://www.reciclandollantas.com.mx">www.reciclandollantas.com.mx</a></p>

		
		<center>
			<img src="../assets/img/layout/reclicla_planeta.jpg" class="img-responsive img-thumbnail">
		</center>
		<br>
		<center>
		 	<p>- Ayúdanos a salvar nuestro planeta. -</p>

			<p>Gracias</p>
		</center>
		';
	$form='<form class="form-horizontal" role="form" id="formulario">
                  <fieldset>
                    
          			<legend>Formulario de contacto</legend>

                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellidos:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. de póliza:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div> 

					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Cómo se enteró</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                          <option value="">Espectacular</option>
                          <option value="">Prensa</option>
                          <option value="">Revista</option>
                          <option value="">TV</option>
                          <option value="">Publicación</option>
                          <option value="">Expo</option>
                          <option value="">Agente (especifique el nombre...)</option>
                        </select>
                      </div>
                    </div>
                    
          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Comentarios:</label>
                      <div class="col-sm-10">
                        <textarea cols="3" class="form-control"></textarea>
                      </div>
                    </div>

                    
                    <div class="help-block" style="float:right;">
                      TODOS los campos con <span class="rojo">*</span> son requeridos
                    </div>
                    <br><br>
                    <div>
                      <b>
                        <span class="help-block">NOTA: “Si no le llega la confirmación de recepción de su solicitud en 2 días por favor revise su bandeja de correo no deseado”</span>
                     </b> 
                    </div>  
                     <br>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </fieldset>
                </form>';
}

?>

<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">
			
				<?php echo $ecogap; ?>			

		</div>
		<div class="col-lg-2">&nbsp;</div>
		<div id="bs-example" class="col-lg-9 well-form">
                <?php echo $form; ?>
      </div>
	</div>
</div>

<?php
$layout->fin();
?>