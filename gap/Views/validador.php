<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Validador | GAP Seguros y Fianzas','');
$layout->inicio();

?>
<style>
 #btnValida{
	 display:block;
 }
</style>
<div class="container">
	<div class="row-fluid">
		<div class="col-lg-9">
        <h2>Validador</h2>
        <br><br>
         <p><b>Verificar la Existencia del Agente</b></p>
			<form class="form-horizontal" role="form">
                  <fieldset>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Folio: </label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
                <br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>	
	</div>
</div>

<?php
$layout->fin()
?>

