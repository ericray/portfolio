<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Fianzas | GAP Seguros y Fianzas','fianzas');
$layout->inicio();

$idioma="";
$fianzas="";
$form="";

if(isset($_SESSION['idioma']))
{
    $idioma=$_SESSION['idioma'];
    if ($idioma=="es") {
      $fianzas='<h2 class="text-center">Fianzas</h2>
            <br>
            <p class="hidden-phone">
              <img src="../assets/img/fianzas/aserta.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/chubb.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/logodorama.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/insurgentes.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/mapfre.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/primero.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/sofimex.jpg" width="150" height="95">
             </p>
             
             <br>
             <p class="justificar">
              <b>Administrativa: </b>
                Garantizan el cumplimiento de obligaciones generales entre dos partes que por su actividad, celebran contratos que deben ser garantizados por 
                seguridad y confianza mutua. Y pueden ser: Cumplimiento, buena calidad, arrendamiento, interés fiscal por inconformidad y cuotas obrero 
                patronales, rifas y sorteos , anticipo, pago de fletes, concurso, boletaje, importación y exportación.
             </p>
             
             <p class="justificar">
              <b>Fidelidad: </b>
               Garantizan el resarcimiento del daño causado por cualquiera de los delitos de robo, fraude, abuso de confianza o peculado cometido por un 
               empleado en contra de los bienes de la empresa que contrata la fianza.
             </p>
             
             <p class="justificar">
              <b>Crédito</b>
              Las fianzas de crédito de suministro garantizan el pago de los productos derivados del petróleo que el fiado adquiere para su comercialización o  
              consumo, de acuerdo a las condiciones convenidas con el beneficiario.
             </p>
             
             <p class="justificar">
              <b>Penales y Judiciales: </b>
              Garantizan el cumplimiento de deberes y obligaciones de cualquier persona dentro de un procedimiento judicial o derivado de resoluciones 
              judiciales
             </p>
             
             <h3>Requisitos</h3>
             
             <b>Fiado Persona Física</b><br><br>
              
              <ul>
                <li>Llenar y firmar papelería de la afianzadora.</li>
                <li>Identificación IFE.</li>
                <li>Comprobante domicilio</li>
                <li>Estados financieros con leyenda y firmados por el contador y Representante Legal.</li>
                <li>Copia de la cédula profesional del contador</li>
                <li>Declaración anual.</li>
                <li>RFC.</li>
                <li>Currículum.</li>
              </ul>
                
              <br>  
             
             <b>Requisistos Obligado Solidario Persona Física</b> <br>
             (SOLO EN CASO QUE NO SEA LO SUFICIENTEMENTE SOLVENTE Y EL MONTO DE LA FIANZA LO AMERITE)
             <br>
             
             <ul>
                <li>Llenar y firmar papelería de la afianzadora.</li>
                <li>Identificación del dueño del predio.</li>
                <li>Comprobante domiciliario.</li>
                <li>Copia de escritura de un bien inmueble con sello del registro público de la propiedad.</li>
                <li>Libertad de Gravamen del predio.</li>
                <li>Acta de Matrimonio del dueño del Predio.</li>
              </ul> 
              
              <br>
              <b>Requisitos Fiados Persona Moral</b>
              
              <ul>
                <li>Llenar y firmar papelería de la afianzadora.</li>
                <li>Identificación del representante legal.</li>
                <li>Comprobante domicilio de la Empresa.</li>
                <li>Acta constitutiva con sello del registro público.</li>
                <li>Poderes con sello del registro público.</li>
                <li>Currículum de la empresa.</li>
                <li>Estados financieros con leyenda, y firmados por el contador y el representante legal.</li>
                <li>Copia de la cédula profesional del contador</li>
                <li>Declaración anual</li>
                <li>RFC</li>
              </ul>

              <b>Requisitos Obligado Solidario Persona Moral</b>
              <br>
              (SOLO EN CASO DE QUE NO SEA LO SUFICIENTEMENTE SOLVENTE Y EL MONTO DE LA FIANZA LO AMERITE)
              <br>

              <ul>
                <li>Llenar y Firmar papelería de la Afianzadora.</li>
                <li>Acta Constitutiva con Sello del Registro Público.</li>
                <li>Poderes con Sello del Registro Público.</li>
                <li>IFE Representante Legal con Poder para actos de Dominio.</li>
                <li>Currículum de la Empresa.</li>
                <li>Estados financieros con Leyenda, firmados por el contador y el Representante Legal.</li>
                <li>Copia de la cedula del contador.</li>
                <li>Declaración anual.</li>
                <li>R.F.C. de la Empresa.</li>
                <li>Comprobante de domicilio de la Empresa.</li>
                <li>Comprobante de domicilio del Representante Legal.</li>
                <li>Copia de las escrituras de un bien Inmueble Libre de Gravamen.</li>
              </ul>';
    $form='<div id="bs-example" class="col-lg-10 well-form">
                <form class="form-horizontal" role="form">
                  <fieldset>
                    <legend>Formulario de cotización</legend>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido paterno</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido materno</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Teléfono</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Correo electrónico</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Cómo se enteró</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Observaciones</label>
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
                       <span class="help-block">
                        NOTA: “Si necesita una cotización favor de llenar los datos, nosotros lo contactaremos en el menor tiempo posible. Si no le llega 
                        la confirmación de recepción de su solicitud en 2 días por favor revise su bandeja de correo no deseado”
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
                </form>
              </div>';
    }

    if ($idioma=="en") {
      $fianzas='<h2 class="text-center">Bails</h2>
            <br>
            <p class="hidden-phone">
              <img src="../assets/img/fianzas/aserta.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/chubb.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/logodorama.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/insurgentes.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/mapfre.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/primero.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/sofimex.jpg" width="150" height="95">
             </p>
             
             <br>
             <p class="justificar">
              <b>Administrative: </b>
                Ensure compliance with general obligations between two parties for their activities, enter into contracts to be 
                guaranteed for safety and mutual trust. And they can be: Compliance, quality, leasing, interest and fees tax by 
                labor-management disagreement, raffles and lotteries, advance, payment of freight, competition, ticketing, import 
                and export.
             </p>
             
             <p class="justificar">
              <b>Fidelity: </b>
               Ensure compensation for the damage caused by any of the crimes of theft, fraud, breach of trust or embezzlement committed 
               by an employee against the assets of the company that hires the security.
             </p>
             
             <p class="justificar">
              <b>Credit:</b>
              The supply of credit bonds guarantee the payment of petroleum products that takes trust for sale or consumption, according to 
              conditions agreed with the beneficiary.
             </p>
             
             <p class="justificar">
              <bCriminal and Judicial: </b>
              Ensure the performance of duties and obligations of any person in a judicial proceeding or derived from judicial decisions.
              judiciales
             </p>
             
             <h3>Requeriments</h3>
             
             <b>Trusting Natural Person</b><br><br>
              
              <ul>
                 <li>Complete and sign the surety stationery.</li>
                 <li>Identification (IFE)</li>
                 <li>Proof Home</li>
                 <li>Financial statements with inscription and signed by the accountant and legal representative.</li>
                 <li>Copy of professional license counter</li>
                 <li>Annual Statement</li>
                 <li>RFC</li>
                 <li>Curriculum</li>
              </ul>
                
              <br>  
             
             <b>Obligor Requisistos Natural Person</b> <br>
             (ONLY IF IT IS NOT ENOUGH solvent and amount of bond warrants)
             <br>
             
             <ul>
                <li>Complete and sign the surety stationery</li>
                <li>Identification of the owner of the land</li>
                <li>Proof house.</li>
                <li>Copy of deed of a property with the public record label property</li>
                <li>encumbrance of the property.</li>
                <li>Marriage certificate of the owner of the Estate</li>
              </ul> 
              
              <br>
              <b>Trusting Business Entity Requirements</b>
              
              <ul>
                <li>Complete and sign the surety stationery</li>
                <li>Identification of legal representative</li>
                <li>Proof domicile of the Company.</li>
                <li>Constitutive Act of the public record seal</li>
                <li>Powers to seal the public record</li>
                <li>Resume Company</li>
                <li>Financial statements with legend, and signed by the accountant and the legal representative</li>
                <li>Copy of professional license counter</li>
                <li>Annual Statement</li>
                <li>RFC</li>
              </ul>

              <b>Business Entity Requirements Obligor</b>
              <br>
              (ONLY IF NOT ENOUGH solvent and amount of the bond warrants)
              <br>

              <ul>
                <li>Complete and sign Afianzadora stationery</li>
                <li>Articles of Incorporation with Public Record Label</li>
                <li>Powers to Public Record Label</li>
                <li>Legal Representative IFE Power for acts of ownership.</li>
                <li>Resume Company</li>
                <li>Key financial statements, signed by the accountant and the Legal Representative</li>
                <li>Copy of identity card counter</li>
                <li>Annual Statement</li>
                <li>R.F.C. Company</li>
                <li>Proof of address of the Company.</li>
                <li>Proof of address of legal representative.</li>
                <li>Copy of the deed to a property unencumbered.</li>
              </ul>';


    $form='<div id="bs-example" class="col-lg-10 well-form">
                <form class="form-horizontal" role="form">
                  <fieldset>
                    <legend>Quote form</legend>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Name </label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Last Name paterno</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Last Maternal</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Phone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Observations</label>
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
                       <span class="help-block">
                        NOTE: "If you need a quote please fill out the information, we will contact you as soon as possible. 
                        If you do not receive confirmation of receipt of your order within 2 days please check your junk mailbox"
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
                </form>
              </div>';
    }
}

else
{
    $fianzas='<h2 class="text-center">Fianzas</h2>
            <br>
            <p class="hidden-phone">
              <img src="../assets/img/fianzas/aserta.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/chubb.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/logodorama.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/insurgentes.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/mapfre.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/primero.jpg" width="150" height="95">
              <img src="../assets/img/fianzas/sofimex.jpg" width="150" height="95">
             </p>
             
             <br>
             <p class="justificar">
              <b>Administrativa: </b>
                Garantizan el cumplimiento de obligaciones generales entre dos partes que por su actividad, celebran contratos que deben ser garantizados por 
                seguridad y confianza mutua. Y pueden ser: Cumplimiento, buena calidad, arrendamiento, interés fiscal por inconformidad y cuotas obrero 
                patronales, rifas y sorteos , anticipo, pago de fletes, concurso, boletaje, importación y exportación.
             </p>
             
             <p class="justificar">
              <b>Fidelidad: </b>
               Garantizan el resarcimiento del daño causado por cualquiera de los delitos de robo, fraude, abuso de confianza o peculado cometido por un 
               empleado en contra de los bienes de la empresa que contrata la fianza.
             </p>
             
             <p class="justificar">
              <b>Crédito</b>
              Las fianzas de crédito de suministro garantizan el pago de los productos derivados del petróleo que el fiado adquiere para su comercialización o  
              consumo, de acuerdo a las condiciones convenidas con el beneficiario.
             </p>
             
             <p class="justificar">
              <b>Penales y Judiciales: </b>
              Garantizan el cumplimiento de deberes y obligaciones de cualquier persona dentro de un procedimiento judicial o derivado de resoluciones 
              judiciales
             </p>
             
             <h3>Requisitos</h3>
             
             <b>Fiado Persona Física</b><br><br>
              
              <ul>
                <li>Llenar y firmar papelería de la afianzadora.</li>
                <li>Identificación IFE.</li>
                <li>Comprobante domicilio</li>
                <li>Estados financieros con leyenda y firmados por el contador y Representante Legal.</li>
                <li>Copia de la cédula profesional del contador</li>
                <li>Declaración anual.</li>
                <li>RFC.</li>
                <li>Currículum.</li>
              </ul>
                
              <br>  
             
             <b>Requisistos Obligado Solidario Persona Física</b> <br>
             (SOLO EN CASO QUE NO SEA LO SUFICIENTEMENTE SOLVENTE Y EL MONTO DE LA FIANZA LO AMERITE)
             <br>
             
             <ul>
                <li>Llenar y firmar papelería de la afianzadora.</li>
                <li>Identificación del dueño del predio.</li>
                <li>Comprobante domiciliario.</li>
                <li>Copia de escritura de un bien inmueble con sello del registro público de la propiedad.</li>
                <li>Libertad de Gravamen del predio.</li>
                <li>Acta de Matrimonio del dueño del Predio.</li>
              </ul> 
              
              <br>
              <b>Requisitos Fiados Persona Moral</b>
              
              <ul>
                <li>Llenar y firmar papelería de la afianzadora.</li>
                <li>Identificación del representante legal.</li>
                <li>Comprobante domicilio de la Empresa.</li>
                <li>Acta constitutiva con sello del registro público.</li>
                <li>Poderes con sello del registro público.</li>
                <li>Currículum de la empresa.</li>
                <li>Estados financieros con leyenda, y firmados por el contador y el representante legal.</li>
                <li>Copia de la cédula profesional del contador</li>
                <li>Declaración anual</li>
                <li>RFC</li>
              </ul>

              <b>Requisitos Obligado Solidario Persona Moral</b>
              <br>
              (SOLO EN CASO DE QUE NO SEA LO SUFICIENTEMENTE SOLVENTE Y EL MONTO DE LA FIANZA LO AMERITE)
              <br>

              <ul>
                <li>Llenar y Firmar papelería de la Afianzadora.</li>
                <li>Acta Constitutiva con Sello del Registro Público.</li>
                <li>Poderes con Sello del Registro Público.</li>
                <li>IFE Representante Legal con Poder para actos de Dominio.</li>
                <li>Currículum de la Empresa.</li>
                <li>Estados financieros con Leyenda, firmados por el contador y el Representante Legal.</li>
                <li>Copia de la cedula del contador.</li>
                <li>Declaración anual.</li>
                <li>R.F.C. de la Empresa.</li>
                <li>Comprobante de domicilio de la Empresa.</li>
                <li>Comprobante de domicilio del Representante Legal.</li>
                <li>Copia de las escrituras de un bien Inmueble Libre de Gravamen.</li>
              </ul>';
    $form='<div id="bs-example" class="col-lg-10 well-form">
                <form class="form-horizontal" role="form">
                  <fieldset>
                    <legend>Formulario de cotización</legend>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><span class="rojo">*</span> Nombre</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido paterno</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Apellido materno</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Teléfono</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Correo electrónico</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Cómo se enteró</label>
                      <div class="col-sm-10">
                        <select name="" id="" class="form-control">
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
                      <label for="inputPassword3" class="col-sm-2 control-label"><span class="rojo">*</span> Observaciones</label>
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
                       <span class="help-block">
                        NOTA: “Si necesita una cotización favor de llenar los datos, nosotros lo contactaremos en el menor tiempo posible. Si no le llega 
                        la confirmación de recepción de su solicitud en 2 días por favor revise su bandeja de correo no deseado”
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
                </form>
              </div>';
}

?>

<div class="container">
	<div class="row-fluid">
    	<div class="col-lg-9">
        
             <?php 
              echo $fianzas; 
              echo $form;
             ?>
              
              
              

        </div>
    </div>
</div>

<?php
$layout->fin();
?>