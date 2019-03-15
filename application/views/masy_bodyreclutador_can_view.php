                <div class="tab-pane" id="registrarcand" role="tabpanel" aria-labelledby="registrarcand-tab">
			        <div class="container">
			        	<form action="<?=base_url()?>masy_reclutador_controller/alta_can" method="post" role="form" id="formagregarcan" name="formagregarcan" style="margin-top: 30px">
			        		<div class="form-group row">
			        			<div class="col">
			        				 <div class="form-group ">
								      <label class="control-label requiredField" for="txtnombrecan">
								       Nombre(s)
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtnombrecan" name="txtnombrecan" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtapaternocan">
								       Apellido paterno
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtapaternocan" name="txtapaternocan" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtamaternocan">
								       Apellido materno
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtamaternocan" name="txtamaternocan" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txttelefonocan">
								       Tel&eacute;fono #
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txttelefonocan" name="txttelefonocan" placeholder="5555555555" type="text"/>
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
								      <input required class="form-control" id="txtcurpcan" name="txtcurpcan" type="text"/>
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
								      <input required class="form-control" id="txtrfccan" name="txtrfccan" type="text"/>
								      <span class="help-block" id="hint_txtrfccan">
								       M&iacute;nimo 12 caracteres m&aacute;ximo 13
								      </span>
								     </div>
			        			</div>
			        			<div class="col-md-auto"></div>
                            	<div class="col col-lg-6">
                            		<div class="form-group ">
								      <label class="control-label requiredField" for="txtfechanancan">
								       Fecha de nacimiento
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control form_datetime" id="txtfechanancan" name="txtfechanancan" placeholder="YYYY-MM-DD" type="text" readonly />
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
								      <input required class="form-control" id="txtdireccioncan" name="txtdireccioncan" type="text"/>
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
								     <br>
								     <div class="form-group" id="div_radtipocan">
								      <label class="control-label requiredField" for="radtipocan">
								       Tipo de empleado
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <div class="">
								       <label class="radio-inline">
								        <input checked name="radtipocan" type="radio" value="Candidato"/>
								        Candidato
								       </label>
								       <label class="radio-inline">
								        <input name="radtipocan" type="radio" value="Empleado"/>
								        Empleado
								       </label>
								      </div>
								     </div>
                            	</div>
			        		</div>
			        		<div class="row form-group">
			        			<div class="card border-primary col-lg-12">
								    <div class="card-header">
										<h3 class="card-title">Archivos requeridos</h3>
									</div>
									<div class="card-body text-primary">
										<div class="custom-file">
										    <input type="file" class="custom-file-input" id="filecvcan">
										    <label class="custom-file-label" for="filecvcan">Selecciona el CV</label>
										</div>
									</div>
									<br>
									<div class="card-body text-primary">
										<div class="custom-file">
										    <input type="file" class="custom-file-input" id="filecontratocan">
										    <label class="custom-file-label" for="filecontratocan">Selecciona el contrato</label>
										</div>
									</div>
									<br>
									<div class="card-body text-primary">
										<div class="custom-file">
										    <input type="file" class="custom-file-input" id="fileexamencan">
										    <label class="custom-file-label" for="fileexamencan">Selecciona examen psicometrico</label>
										</div>
									</div>
								</div>
			        		</div>
			        		<div class="row form-group">
								<button class="btn btn-primary btn-block" name="submit" type="submit">
									Guardar
								</button>
			        		</div>
			        	</form>
			        </div>
                </div>
                <div class="tab-pane" id="listarcand" role="tabpanel" aria-labelledby="listarcand-tab">
                	<div class="container">
						<div class="row justify-content-start" style="margin-top: 10px">
	                    	<table class="table">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">First</th>
							      <th scope="col">Last</th>
							      <th scope="col">Handle</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
	                    </div>
	                    <form action="<?=base_url()?>masy_reclutador_controller/alta_can" method="post" role="form" id="formactualizarcan" name="formactualizarcan" style="margin-top: 30px">
			        		<div class="form-group row">
			        			<div class="col">
			        				 <div class="form-group ">
								      <label class="control-label requiredField" for="txtnombrecan1">
								       Nombre(s)
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtnombrecan1" name="txtnombrecan1" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtapaternocan1">
								       Apellido paterno
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtapaternocan1" name="txtapaternocan1" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtamaternocan1">
								       Apellido materno
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtamaternocan1" name="txtamaternocan1" type="text"/>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txttelefonocan1">
								       Tel&eacute;fono #
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txttelefonocan1" name="txttelefonocan1" placeholder="5555555555" type="text"/>
								      <span class="help-block" id="hint_txttelefonocan1">
								       Solo n&uacute;meros.
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtcurpcan1">
								       CURP
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtcurpcan1" name="txtcurpcan1" type="text"/>
								      <span class="help-block" id="hint_txtcurpcan1">
								       Minino 18 caracteres m&aacute;ximo 20
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="txtrfccan1">
								       RFC
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtrfccan1" name="txtrfccan1" type="text"/>
								      <span class="help-block" id="hint_txtrfccan1">
								       M&iacute;nimo 12 caracteres m&aacute;ximo 13
								      </span>
								     </div>
			        			</div>
			        			<div class="col-md-auto"></div>
                            	<div class="col col-lg-6">
                            		<div class="form-group ">
								      <label class="control-label requiredField" for="txtfechanancan1">
								       Fecha de nacimiento
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control form_datetime" id="txtfechanancan1" name="txtfechanancan1" placeholder="YYYY-MM-DD" type="text" readonly />
								    </div>
                            		<div class="form-group ">
								      <label class="control-label requiredField" for="selestadocan1">
								       Estado
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <select class="select form-control" id="selestadocan1" name="selestadocan1">
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
								      <label class="control-label requiredField" for="selmunicipiocan1">
								       Municipio / Delegaci&oacute;n
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <select class="select form-control" id="selmunicipiocan1" name="selmunicipiocan1">
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
								      <label class="control-label requiredField" for="txtdireccioncan1">
								       Direcci&oacute;n
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <input required class="form-control" id="txtdireccioncan1" name="txtdireccioncan1" type="text"/>
								      <span class="help-block" id="hint_txtdireccioncan1">
								       M&aacute;ximo 250 caracteres
								      </span>
								     </div>
								     <div class="form-group ">
								      <label class="control-label requiredField" for="selvacantecan1">
								       Vacante
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <select class="select form-control" id="selvacantecan1" name="selvacantecan1">
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
								     <br>
								     <div class="form-group" id="div_radtipocan1">
								      <label class="control-label requiredField" for="radtipocan1">
								       Tipo de empleado
								       <span class="asteriskField">
								        *
								       </span>
								      </label>
								      <div class="">
								       <label class="radio-inline">
								        <input checked name="radtipocan1" type="radio" value="Candidato"/>
								        Candidato
								       </label>
								       <label class="radio-inline">
								        <input name="radtipocan1" type="radio" value="Empleado"/>
								        Empleado
								       </label>
								      </div>
								     </div>
                            	</div>
			        		</div>
			        		<div class="row form-group">
			        			<div class="card border-primary col-lg-12">
								    <div class="card-header">
										<h3 class="card-title">Archivos requeridos</h3>
									</div>
									<div class="card-body text-primary">
										<div class="custom-file">
										    <input type="file" class="custom-file-input" id="filecvcan1">
										    <label class="custom-file-label" for="filecvcan1">Selecciona el CV</label>
										</div>
									</div>
									<br>
									<div class="card-body text-primary">
										<div class="custom-file">
										    <input type="file" class="custom-file-input" id="filecontratocan1">
										    <label class="custom-file-label" for="filecontratocan1">Selecciona el contrato</label>
										</div>
									</div>
									<br>
									<div class="card-body text-primary">
										<div class="custom-file">
										    <input type="file" class="custom-file-input" id="fileexamencan1">
										    <label class="custom-file-label" for="fileexamencan1">Selecciona examen psicometrico</label>
										</div>
									</div>
								</div>
			        		</div>
			        		<div class="row form-group">
								<button class="btn btn-primary btn-block" name="submit1" type="submit">
									Guardar
								</button>
			        		</div>
			        	</form>
                	</div>
                </div>
<?php

/* End of file masy_bodyreclutador_can_view.php */
/* Location: /views/masy_bodyreclutador_can_view.php */