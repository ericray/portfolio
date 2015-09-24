<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Bolsa de trabajo | GAP Seguros y Fianzas','');
$layout->inicio();

$idioma="";
$bolsa="";
$form="";

if (isset($_SESSION['idioma'])) {
    
    $idioma=$_SESSION['idioma'];

    if ($idioma=="es") {
        
        $bolsa='<h2>Bolsa de trabajo</h2>

      <p>
        <b>¡UNETE A LO GRANDE!</b> Si deseas unirte al equipo de colaboradores de esta magnífica institución te pedimos nos envíes tu currículo, ofrecemos prestaciones mayores a las que marca la ley y un excelente ambiente laboral, por el momento tenemos las vacantes:
      </p>

       <p>Agente de ventas (tiempo completo).</p>

         <p>Requisitos: Sexo Indistinto, de 25 a 55 años, experiencia en ventas minimo 6 meses.</p>
      
             
              <p><img src="../assets/img/otros/bolsa_trabajo.jpg" class="img-responsive img-rounded" height="250" width="260"></p>';
        
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
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Adjuntar curriculum:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPassword3">
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

    if ($idioma=="en") {
        
        $bolsa='<h2>Job</h2>

      <p>
        <b>JOIN BIG!</b> If you want to join the team of contributors to this great institution we ask 
        you send us your resume, offer greater benefits to which trademark law and a great work environment, we currently have vacancies:
      </p>

       <p>Sales Agent (full time).</p>

         <p>Requirements: Gender Random, 25 to 55, minimum 6 months experience in sales.</p>
      
             
              <p><img src="../assets/img/otros/bolsa_trabajo.jpg" class="img-responsive img-rounded" height="250" width="260"></p>';

        $form='<form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Contact form</legend>

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
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Surnames:</label>
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
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> State</label>
                      <div class="col-sm-10">
                        <select class="form-control">
                          <option value="" selected>-- Seleccione --</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Phone:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Attach CV (. Pdf):</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPassword3">
                      </div>
                    </div>
       
          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Comments:</label>
                      <div class="col-sm-10">
                        <textarea cols="3" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="help-block" style="float:right;">
                      ALL fields are required
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
  $bolsa='<h2>Bolsa de trabajo</h2>

      <p>
        <b>¡UNETE A LO GRANDE!</b> Si deseas unirte al equipo de colaboradores de esta magnífica institución te pedimos nos envíes tu currículo, ofrecemos prestaciones mayores a las que marca la ley y un excelente ambiente laboral, por el momento tenemos las vacantes:
      </p>

       <p>Agente de ventas (tiempo completo).</p>

         <p>Requisitos: Sexo Indistinto, de 25 a 55 años, experiencia en ventas minimo 6 meses.</p>
      
             
              <p><img src="../assets/img/otros/bolsa_trabajo.jpg" class="img-responsive img-rounded" height="250" width="260"></p>';
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
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Adjuntar curriculum:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPassword3">
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

			
			<?php
       echo $bolsa;
       
      ?>
		     
            
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