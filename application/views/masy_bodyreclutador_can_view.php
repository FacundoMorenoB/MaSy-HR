                <div class="tab-pane" id="registrarcand" role="tabpanel" aria-labelledby="registrarcand-tab">
			        <div class="container">
			        	<form action="<?=base_url()?>masy_reclutador_controller/alta_can" method="post" role="form" id="formagregarvac" name="formagregarvac" style="margin-top: 30px">
			        		<div class="form-group row">
			        			<div class="col">
			        				 <div class="form-group ">
								      <label class="control-label requiredField" for="txtnombrecan">
								       Nombre(s)
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtnombrecan" name="txtnombrecan" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtapaternocan">
								       Apellido paterno
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtapaternocan" name="txtapaternocan" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtamaternocan">
								       Apellido materno
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtamaternocan" name="txtamaternocan" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txttelefonocan">
								       Tel&eacute;fono #
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txttelefonocan" name="txttelefonocan" placeholder="5555555555" type="text"/>
								      <span class="help-block" id="hint_txttelefonocan">
								       Solo n&uacute;meros.
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtcurpcan">
								       CURP
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtcurpcan" name="txtcurpcan" type="text"/>
								      <span class="help-block" id="hint_txtcurpcan">
								       Minino 18 caracteres m&aacute;ximo 20
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtrfccan">
								       RFC
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtrfccan" name="txtrfccan" type="text"/>
								      <span class="help-block" id="hint_txtrfccan">
								       M&iacute;nimo 12 caracteres m&aacute;ximo 13
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtfechanancan">
								       Fecha de nacimiento
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtfechanancan" name="txtfechanancan" placeholder="YYYY-MM-DD" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="selestadocan">
								       Estado
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <select class="select form-control" id="selestadocan" name="selestadocan">
								       <option value="M&eacute;xico">
								        M&eacute;xico
								       </option>
								       <option value="Estado de M&eacute;xico">
								        Estado de M&eacute;xico
								       </option>
								       <option value="Jalisco">
								        Jalisco
								       </option>
								      </select>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="selmunicipiocan">
								       Municipio / Delegaci&oacute;n
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <select class="select form-control" id="selmunicipiocan" name="selmunicipiocan">
								       <option value="La Paz">
								        La Paz
								       </option>
								       <option value="Doctores">
								        Doctores
								       </option>
								       <option value="Guadalajara">
								        Guadalajara
								       </option>
								      </select>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtdireccioncan">
								       Direcci&oacute;n
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input class="form-control" id="txtdireccioncan" name="txtdireccioncan" type="text"/>
								      <span class="help-block" id="hint_txtdireccioncan">
								       M&aacute;ximo 250 caracteres
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="selvacantecan">
								       Vacante
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <select class="select form-control" id="selvacantecan" name="selvacantecan">
								       <option value="Director general">
								        Director general
								       </option>
								       <option value="Ingeniero TI">
								        Ingeniero TI
								       </option>
								       <option value="Maniobras generales">
								        Maniobras generales
								       </option>
								      </select>
								     </div>
								     <div class="form-group" id="div_radtipocan">
								      <label class="control-label requiredField" for="radtipocan">
								       Tipo de empleado
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <div class="">
								       <label class="radio-inline">
								        <input name="radtipocan" type="radio" value="Candidato"/>
								        Candidato
								       </label>
								       <label class="radio-inline">
								        <input name="radtipocan" type="radio" value="Empleado"/>
								        Empleado
								       </label>
								      </div>
								     </div>
								     <div class="form-group">
								        <label class="control-label requiredField" for="filecvcan">
								          Curriculum Vitae
								          <span class="asteriskField">
								            *
								          </span>
								        </label>
								          <input id="filecvcan" name="filecvcan" class="input-file" type="file">
								          <span class="help-block" id="hint_tfilecvcan">
								           Selecciona la ubicaci&oacute;n del CV
								          </span>
								     </div>
								     <div class="form-group">
								        <label class="control-label requiredField" for="filecontratocan">
								          Contrato
								          <span class="asteriskField">
								            *
								          </span>
								        </label>
								          <input id="filecontratocan" name="filecontratocan" class="input-file" type="file">
								          <span class="help-block" id="hint_tfilecontratocan">
								           Selecciona la ubicaci&oacute;n del contrato
								          </span>
								     </div>
								     <div class="form-group">
								        <label class="control-label requiredField" for="fileexamencan">
								          Examenes psicometricos
								          <span class="asteriskField">
								            *
								          </span>
								        </label>
								          <input id="fileexamencan" name="fileexamencan" class="input-file" type="file">
								          <span class="help-block" id="hintexamencan">
								           Selecciona la ubicaci&oacute;n del examen psicometrico
								          </span>
								     </div>
								     <div class="form-group">
								      <div>
								       <button class="btn btn-primary " name="submit" type="submit">
								        Submit
								       </button>
								      </div>
								     </div>
			        			</div>
			        			<div class="col-md-auto"></div>
                            	<div class="col col-lg-6"></div>
			        		</div>
			        	</form>
			        </div>
                </div>
                <div class="tab-pane" id="listarcand" role="tabpanel" aria-labelledby="listarcand-tab">
                    <h1>HOLA4</h1>
                </div>
                <div class="tab-pane" id="agendarent" role="tabpanel" aria-labelledby="agendarent-tab">
                    <h1>HOLA5</h1>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="<?=base_url()?>js/theme.js"></script>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $( function() {
    $( ".form_datetime" ).datepicker();
    $( ".form_datetime" ).datepicker(  "option", "showAnim", "slideDown");
    $( ".form_datetime" ).datepicker(  "option", "dateFormat", "yy-mm-dd");
  } );
</script> 

<?php

/* End of file masy_bodyreclutador_view.php */
/* Location: /views/masy_bodyreclutador_view.php */