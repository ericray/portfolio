<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Siniestros | GAP Seguros y Fianzas','siniestro');
$layout->inicio();

$idioma="";
$form="";
if(isset($_SESSION['idioma']))
{
  $idioma=$_SESSION['idioma'];

  if ($idioma=="es") {
    
    $form='<h2>Siniestros</h2>

      

      <div id="bs-example" class="col-lg-11 well-form">
                <form class="form-horizontal" role="form">
                  <fieldset>
                    <b>Sino haz reportado tu siniestro por favor contactar a tu compañia de seguros:</b> <br><br>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> No. de siniestro:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre del cliente:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. de poliza:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    
                    
                    <div class="help-block" style="float:right;">
                      TODOS los campos con <span class="rojo">*</span> son requeridos
                    </div>
                    

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>';

  }

  if ($idioma=="en") {
    
    $form='<h2>Accident</h2>

      

      <div id="bs-example" class="col-lg-11 well-form">
                <form class="form-horizontal" role="form">
                  <fieldset>
                    <b>But do your sinister reported please contact your insurance company:</b> <br><br>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Number of loss:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Customer Name:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Policy number:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    
                    
                    <div class="help-block" style="float:right;">
                      All field are required;
                    </div>
                    

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>';

  }
}

else
{
    $form='<h2>Siniestros</h2>

      

      <div id="bs-example" class="col-lg-11 well-form">
                <form class="form-horizontal" role="form">
                  <fieldset>
                    <b>Sino haz reportado tu siniestro por favor contactar a tu compañia de seguros:</b> <br><br>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> No. de siniestro:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre del cliente:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> No. de poliza:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    
                    
                    <div class="help-block" style="float:right;">
                      TODOS los campos con <span class="rojo">*</span> son requeridos
                    </div>
                    

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>';
}

?>

<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">
			
			<?php echo $form; ?>

		</div>
	</div>
</div>

<?php
 $layout->fin();
?>