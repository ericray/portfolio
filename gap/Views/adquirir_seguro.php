<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Adquirir Seguros | GAP Seguros y Fianzas','');
$layout->inicio();

$idioma="";
$form="";

if (isset($_SESSION['idioma'])) {
    
    $idioma=$_SESSION['idioma'];

    if ($idioma=="es") {
        
       
        
        $form='
  <h2>Seguros</h2>
  <form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Formulario de contacto</legend>


                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre del menor: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Fecha nac. menor:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

			        <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido paterno del titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido materno del titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Fecha nac. titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Sexo titular</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Masculino</option>
                          <option value="">Femenino</option>
                        </select>
                      </div>
                    </div>
			        <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span>Persona moral</label>
                      <div class="col-sm-10">
					   <input type="checkbox" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. ext:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. int.:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> C.P. :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Teléfono:</label>
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> RFC:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>¿Fuma titular?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>			
          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido paterno conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Apellido materno conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Fecha nac. conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Sexo conyugue</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Masculino</option>
                          <option value="">Femenino</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>¿Fuma conyugue?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Suma aseg. ahorro:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
					</div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Moneda</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Pesos</option>
                          <option value="">Dólares</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Formas de pago:</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Mensual</option>
						  <option value="">Mensual</option>
                          <option value="">Semestrar</option>
						  <option value="">Trimestral</option>
                        </select>
                      </div>
					 </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>¿Cobertura Invalidez?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Observaciones:</label>
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
        
        
        $form='
  <h2>Insurance</h2>
  <form class="form-horizontal" role="form">
                  <fieldset>
       

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Name child:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Date  of birth of the child:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

			        <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Holder Name:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Last Name of holder:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Last Maternal holder:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Date of birth of the holder:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span><strong></strong></label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Male</option>
                          <option value="">Female</option>
                        </select>
                      </div>
                    </div>
			        <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span>Moral person</label>
                      <div class="col-sm-10">
					   <input type="checkbox" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Street :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Outside number:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Internal number :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Internal number:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Cologne :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> City :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>State</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value=""></option>
                        </select>
                      </div>
                    </div>	
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Zip Code :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Phone  :</label>
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> RFC :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Smoke the holder?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Yes</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>			
          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Name spouse:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Last Name of spouse :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Mother´s Maiden Name of Spouse :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Date of birth of spouse:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Sex spouse</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Male</option>
                          <option value="">Female</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Smoke the spouse?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Sum insured savings:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
					</div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Currency </label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Weights</option>
                          <option value="">USD</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Method of payment:</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Monthly</option>
						  <option value="">Quarterly</option>
                          <option value="">Semianual</option>
						  <option value="">Counted</option>
                        </select>
                      </div>
					 </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Disability Coverage?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Yes</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>
                  
          
                   <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Observations:</label>
                      <div class="col-sm-10">
                        <textarea cols="3" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="help-block" style="float:right;">
                      ALL fields with <span class="rojo">*</span> are required
                    </div>
                    <br><br>
                    <div>
                      <b>
                        <span class="help-block"NOTE: "If you do not receive confirmation of receipt of your order within 2 days please check your junk mailbox"</span>
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
 
$form='
  <h2>Seguros</h2>
  <form class="form-horizontal" role="form">
                  <fieldset>
                    
          <legend>Formulario de contacto</legend>


                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre del menor: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Fecha nac. menor:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

			        <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido paterno del titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido materno del titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>                    
                     <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Fecha nac. titular:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Sexo titular</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Masculino</option>
                          <option value="">Femenino</option>
                        </select>
                      </div>
                    </div>
			        <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span>Persona moral</label>
                      <div class="col-sm-10">
					   <input type="checkbox" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. ext:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. int.:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> C.P. :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Teléfono:</label>
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> RFC:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>¿Fuma titular?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>			
          			<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido paterno conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Apellido materno conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Fecha nac. conyugue:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Sexo conyugue</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Masculino</option>
                          <option value="">Femenino</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>¿Fuma conyugue?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Suma aseg. ahorro:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
					</div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Moneda</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Pesos</option>
                          <option value="">Dólares</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>Formas de pago:</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Mensual</option>
						  <option value="">Mensual</option>
                          <option value="">Semestrar</option>
						  <option value="">Trimestral</option>
                        </select>
                      </div>
					 </div>
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span>¿Cobertura Invalidez?</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
                          <option value="">Sí</option>
                          <option value="">No</option>
                        </select>
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Observaciones:</label>
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