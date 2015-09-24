<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Agentes de seguros o fianzas | GAP Seguros y Fianzas','');
$layout->inicio();

$idioma="";
$segFianza="";
$form="";
if(isset($_SESSION['idioma']))
{
    $idioma=$_SESSION['idioma'];

    if($idioma=="es")
    {
        $segFianza='<h2>Agentes de seguros o fianzas</h2>

      <p>
        ¿ERES AGENTE DE SEGUROS?, ¿cuanto tiempo le dedicas a la administración de tu cartera que le restas a tiempo para ventas nuevas?  
      </p>

      <p class="justificar">
        Tenemos varios esquemas que seguramente alguno se puede ajustar a tus necesidades o a lo que estas buscando para poder 
        crecer en tu profesión como agente de seguros y fianzas. <b>Recuerda que la unión hace la fuerza!!</b>
      </p>

      <p>Las metas te las pones, nosotros te ayudamos a que las alcances...el límite eres TÚ.</p>

      <p class="justificar">
        <b>¿TE HAS PREGUNTADO QUE PASARIA CON TU CARTERA DE CLIENTES SI TU LLEGARAS A FALTAR?</b> ¿Te gustaría dejar tu cartera a tu esposa o a tus hijos? Algunas de las ventajas en hacer una alianza con nosotros son:
      </p>

      <ul class="justificar">
        
        <li>
          Convenio de transparencia, se respeta tu cartera si por algún motivo usted o sus clientes no llegara a quedar satisfecho con nuestro servicio.
        </li>

        <li>Tu cartera es heredable al beneficiario que tu nos designes al momento de firmar el convenio</li>

        <li>Acceso web al control de tu cartera, el cual es una magnifica herramienta para que te apoyes con tu prospectación por medio de un CRM que te
        ayudara a dar un mejor servicio por el seguimiento que vas a poder tener, que tambien te ayudara con la administración de tus polizas, cobranza, 
        renovaciones, cancelaciones, comisiones, cotizaciones, y lo mas importante sin importar en que compañia se encuentren</li>

        <li>
          Apoyo de nuestro personal administrativo que te ayudarán con la entrega de pólizas, cobranza (si asi lo deseas) apoyo en caso de que alguno de tus clientes se siniestre ya sea en Autos, GMM, o Daños y nuestro técnico especialísta podrá darle el apoyo y asesoria a tu cliente en caso de 
          requerirlo
          </li>
        
        <li>Tendrás capacidad de cotizar en más de 20 Aseguradoras y 7 Afianzadoras</li>
        
        <li>Con nosotros te ahorras tu póliza de RC</li>
        
        <li>Nunca más te cancelarán por baja producción</li>
        
        <li>Con nuestro portal multi-aseguradora, multi-ramo tendrás estarás siempre actualizado con nuevos productos de las aseguradoras/afianzadoras</li>
        
        <li>Todos sus clientes tendrán acceso a un monedero que a final del año con los puntos acumulados podrán canjear por obsequios</li>
        
        <li>Podrás tener acceso a bonos mucho mas fácil y sencillo que al estar independiente</li>

      </ul>

      <div class="row">
        <div class="col-lg-8">
          Entre otros beneficios....acércate te platicámos sin compromiso, la idea es que con nuestro apoyo y los beneficios a tus clientes tu cartera crezca
        </div>
        <div class="col-lg-4">
          <img src="../assets/img/otros/billetes.jpg" alt="" height="100" width="100" class="img-rounded img-responsive">
        </div>
      </div>

      <br>

      <p class="justificar">
        <b>¿ERES AGENTE Y QUIERES CRECER TU NEGOCIO PERO TE FALTA CAPITAL?</b> Llamanos o ven a visitarnos sin compromiso haremos un analisis de tu situación para ver la posibilidad de convertirte en nuestro socio de negocio, y atiende una sucursal Agente Capital que te traerá múltiples ventajas como son entre otras: el uso de una imagen corporativa reconocida, un sistema de administración de pólizas moderno y eficaz, procesos administrativos, respaldo de la institución, todas las opciones de compañías que tiene la institución, herramientas de venta, folletos, etc.
      </p>
      
      <p>
        <img src="../assets/img/otros/sucursal.jpg" height="350" width="500" alt="" heif class="img-rounded img-responsive">
      </p>

      <br><br>';
      $form='<form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Formulario de contacto</legend>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Razón de contacto</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                          <option value="">Agente de seguros</option>
                          <option value="">Colaborador</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre: </label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellidos:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>

          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
                    
          <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Estado</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Teléfono:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
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


                    <div class="help-block" style="float:right;">
                      TODOS los campos con <span class="rojo">*</span> son requeridos
                    </div>
                    <br><br>
                    <div>
                      <b>
                       <span class="help-block">
                        NOTA: “Si no le llega la confirmación de recepción de su solicitud en 2 días por favor revise su bandeja de correo no deseado”
                       </span>
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

    if ($idioma=="en") {
      
      $segFianza='<h2>Insurance and bails agents</h2>

      <p>
        ARE YOU INSURANCE AGENT?, How much time do you spend managing your portfolio to these subtracting the time for new sales?
      </p>

      <p class="justificar">
        We have several schemes that surely some can be adjusted to your needs or what you are looking to grow in your career as an insurance agent and surety
      </p>

      <p>The goals you put them, we will help to limit the scope ... is YOU.</p>

      <p class="justificar">
        <b>HAVE YOU ASKED THAT HAPPEN WITH YOUR CUSTOMERS IF YOUR PORTFOLIO MUST come to?</b> Would you like to leave your wallet to your wife or your children? Some of the advantages of making an alliance with us are:
      </p>

      <ul class="justificar">
        
        <li>
          Convention transparency, respecting your wallet if for some reason you or your customers come to not being satisfied with our service.
        </li>

        <li>Your portfolio is heritable beneficiary us your designes upon signing the agreement.</li>

        <li>
          Web access to control your wallet, which is a great tool for you to lean your prospecting by a CRM that will help you provide better service by tracking you will be able 
          to have, it also will help with the administration of your policies, collections, renewals, cancellations, fees, contributions, and most importantly no matter what company 
          they are.
        </li>

        <li>
          Support our administrative staff who will help with the delivery of policies, collection (if so desired) support in case any of your customers sinister either Cars, 
          GMM, or damage and our technician will give you the support and advice to your client in case of need
          </li>
        
        <li>You will have ability to contribute more than 20 and 7 Surety Insurance</li>
        
        <li>Con nosotros te ahorras tu póliza de RC</li>
        
        <li>With us you save your RC policy</li>
        
        <li>With our multi-carrier website, you will always have a composite date with new products of the insurance / surety</li>
        
        <li>All customers have access to a purse to end the year with accumulated points can be redeemed for gifts</li>
        
        <li>You can access bonds much easier and simpler than the separate living</li>

      </ul>

      <div class="row">
        <div class="col-lg-8">
          Among other benefits .... come closer you talked without commitment, the idea is that with our support and benefits to your customers grow your portfolio.
        </div>
        <div class="col-lg-4">
          <img src="../assets/img/otros/billetes.jpg" alt="" height="100" width="100" class="img-rounded img-responsive">
        </div>
      </div>

      <br>

      <p class="justificar">
        <b>ARE YOU WANT AGENT AND GROW YOUR BUSINESS BUT YOU NEED CAPITAL?</b> Call or come visit without obligation will analyze your situation to see the 
         chance to become our business partner, serving a branch Agent Capital will bring many advantages such as including: the use of a picture 
         Corporate recognized a modern management system and effective policies, administrative processes, support of the institution, all options of companies 
         of the institution, sales tools, brochures, etc..
      </p>
      
      <p>
        <img src="../assets/img/otros/sucursal.jpg" height="350" width="500" alt="" heif class="img-rounded img-responsive">
      </p>

      <br><br>';

      $form='<form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Contact Form</legend>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Reason of Contact</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Select --</option>
                          <option value="">Insurance agent</option>
                          <option value="">Collaborator</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Name: </label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Surnames:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>

          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
                    
          <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> State:</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Select --</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Phone:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
          
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Comments:</label>
                      <div class="col-sm-10">
                        <textarea id="inputPassword3" class="form-control"></textarea>
                      </div>
                    </div>  

                    <div class="help-block" style="float:right;">
                      ALL fields are required
                    </div>
                    <br><br>
                    <div>
                      <b>
                       <span class="help-block">
                        NOTE: "If you do not receive confirmation of receipt of your order within 2 days please check your junk mailbox"
                       </span>
                     </b> 
                    </div>  
                     <br>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </fieldset>
                </form>';
    }
}

else
{
    $idioma="";
    $segFianza='<h2>Agentes de seguros o fianzas</h2>

      <p>
        ¿ERES AGENTE DE SEGUROS?, ¿cuanto tiempo le dedicas a la administración de tu cartera que le restas a tiempo para ventas nuevas?  
      </p>

      <p class="justificar">
        Tenemos varios esquemas que seguramente alguno se puede ajustar a tus necesidades o a lo que estas buscando para poder 
        crecer en tu profesión como agente de seguros y fianzas. <b>Recuerda que la unión hace la fuerza!!</b>
      </p>

      <p>Las metas te las pones, nosotros te ayudamos a que las alcances...el límite eres TÚ.</p>

      <p class="justificar">
        <b>¿TE HAS PREGUNTADO QUE PASARIA CON TU CARTERA DE CLIENTES SI TU LLEGARAS A FALTAR?</b> ¿Te gustaría dejar tu cartera a tu esposa o a tus hijos? Algunas de las ventajas en hacer una alianza con nosotros son:
      </p>

      <ul class="justificar">
        
        <li>
          Convenio de transparencia, se respeta tu cartera si por algún motivo usted o sus clientes no llegara a quedar satisfecho con nuestro servicio.
        </li>

        <li>Tu cartera es heredable al beneficiario que tu nos designes al momento de firmar el convenio</li>

        <li>Acceso web al control de tu cartera, el cual es una magnifica herramienta para que te apoyes con tu prospectación por medio de un CRM que te
        ayudara a dar un mejor servicio por el seguimiento que vas a poder tener, que tambien te ayudara con la administración de tus polizas, cobranza, 
        renovaciones, cancelaciones, comisiones, cotizaciones, y lo mas importante sin importar en que compañia se encuentren</li>

        <li>
          Apoyo de nuestro personal administrativo que te ayudarán con la entrega de pólizas, cobranza (si asi lo deseas) apoyo en caso de que alguno de tus clientes se siniestre ya sea en Autos, GMM, o Daños y nuestro técnico especialísta podrá darle el apoyo y asesoria a tu cliente en caso de 
          requerirlo
          </li>
        
        <li>Tendrás capacidad de cotizar en más de 20 Aseguradoras y 7 Afianzadoras</li>
        
        <li>Con nosotros te ahorras tu póliza de RC</li>
        
        <li>Nunca más te cancelarán por baja producción</li>
        
        <li>Con nuestro portal multi-aseguradora, multi-ramo tendrás estarás siempre actualizado con nuevos productos de las aseguradoras/afianzadoras</li>
        
        <li>Todos sus clientes tendrán acceso a un monedero que a final del año con los puntos acumulados podrán canjear por obsequios</li>
        
        <li>Podrás tener acceso a bonos mucho mas fácil y sencillo que al estar independiente</li>

      </ul>

      <div class="row">
        <div class="col-lg-8">
          Entre otros beneficios....acércate te platicámos sin compromiso, la idea es que con nuestro apoyo y los beneficios a tus clientes tu cartera crezca
        </div>
        <div class="col-lg-4">
          <img src="../assets/img/otros/billetes.jpg" alt="" height="100" width="100" class="img-rounded img-responsive">
        </div>
      </div>

      <br>

      <p class="justificar">
        <b>¿ERES AGENTE Y QUIERES CRECER TU NEGOCIO PERO TE FALTA CAPITAL?</b> Llamanos o ven a visitarnos sin compromiso haremos un analisis de tu situación para ver la posibilidad de convertirte en nuestro socio de negocio, y atiende una sucursal Agente Capital que te traerá múltiples ventajas como son entre otras: el uso de una imagen corporativa reconocida, un sistema de administración de pólizas moderno y eficaz, procesos administrativos, respaldo de la institución, todas las opciones de compañías que tiene la institución, herramientas de venta, folletos, etc.
      </p>
      
      <p>
        <img src="../assets/img/otros/sucursal.jpg" height="350" width="500" alt="" heif class="img-rounded img-responsive">
      </p>

      <br><br>';

      $form='<form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Formulario de contacto</legend>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Razón de contacto</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                          <option value="">Agente de seguros</option>
                          <option value="">Colaborador</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre: </label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellidos:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>

          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
                    
          <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Estado</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Teléfono:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
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


                    <div class="help-block" style="float:right;">
                      TODOS los campos con <span class="rojo">*</span> son requeridos
                    </div>
                    <br><br>
                    <div>
                      <b>
                       <span class="help-block">
                        NOTA: “Si no le llega la confirmación de recepción de su solicitud en 2 días por favor revise su bandeja de correo no deseado”
                       </span>
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

			
    <?php echo $segFianza; ?>
			
			<div id="bs-example" class="col-lg-11 well-form">
          <?php echo $form; ?>          
      </div>

		</div>

		</div>	
			
	</div>
</div>

<?php
$layout->fin();
?>