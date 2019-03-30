				<div class="tab-pane" id="registraremp" role="tabpanel" aria-labelledby="registraremp-tab">
					<div class="row justify-content-start" style="margin-top: 10px">
						<div class="col-4"><input class="form-control" type="text" name="txtbuscaremp" id="txtbuscaremp" placeholder="Buscar candidato"></div>
						<div class="col-3"><input type="button" name="btnbuscaremp" id="btnbuscaremp" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
					</div>
					<div class="container">
						<div class="row justify-content-start" style="margin-top: 10px" id="list_nue_emp">
							
						</div>
						<form action="<?php echo site_url('masy_reclutador_controller/guardar_actualizar_emp');?>" method="post" role="form" id="formactualizarcan" name="formactualizarcan" style="margin-top: 30px">
							<div class="form-group row">
								<div class="col">
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtnombreemp1">
										 Nombre(s)
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input class="form-control" id="txtidemp1" name="txtidvac1" type="hidden" value=""/>
										<input required class="form-control" id="txtnombreemp1" name="txtnombreemp1" type="text" pattern="[A-Za-z\s]+" maxlength="50"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtapaternoemp1">
										 Apellido paterno
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtapaternoemp1" name="txtapaternoemp1" type="text" pattern="[A-Za-z\s]+" maxlength="20"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtamaternoemp1">
										 Apellido materno
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtamaternoemp1" name="txtamaternoemp1" type="text" pattern="[A-Za-z\s]+" maxlength="20"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtdireccionemp1">
										 Direcci&oacute;n
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtdireccionemp1" name="txtdireccionemp1" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
										<span class="help-block" id="hint_txtdireccionemp1">
										 M&aacute;ximo 250 caracteres
										</span>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txttelefonoemp1">
										 Tel&eacute;fono #
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txttelefonoemp1" name="txttelefonoemp1" placeholder="55-5555-5555" type="text" pattern="[0-9\-]+" maxlength="20"/>
										<span class="help-block" id="hint_txttelefonoemp1">
										 Conservar formato
										</span>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtcurpemp1">
										 CURP
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtcurpemp1" name="txtcurpemp1" type="text" pattern="[A-Z0-9\-]+" minlength="18" maxlength="20"/>
										<span class="help-block" id="hint_txtcurpemp1">
										 Minino 18 caracteres m&aacute;ximo 20
										</span>
									 </div>
								</div>
								<div class="col-md-auto"></div>
								<div class="col col-lg-6">
									<div class="form-group ">
										<label class="control-label requiredField" for="txtrfcemp1">
										 RFC
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtrfcemp1" name="txtrfcemp1" type="text" pattern="[A-Z0-9\-]+" minlength="12" maxlength="13"/>
										<span class="help-block" id="hint_txtrfcemp1">
										 M&iacute;nimo 12 caracteres m&aacute;ximo 13
										</span>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtfechanacemp1">
										 Fecha de nacimiento
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control form_datetime" id="txtfechanacemp1" name="txtfechanacemp1" placeholder="YYYY-MM-DD" type="text" readonly />
									 </div>
									<div class="form-group ">
										<label class="control-label requiredField" for="selciudademp1">
										 Ciudad
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<select class="select form-control" id="selciudademp1" name="selciudademp1">
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
										<label class="control-label requiredField" for="selestadoemp1">
										 Estado
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<select class="select form-control" id="selestadoemp1" name="selestadoemp1">
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
										<label class="control-label requiredField" for="selvacanteemp1">
										 Perfil / Puesto
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<select class="select form-control" id="selvacanteemp1" name="selvacanteemp1">
										 <option value="1">
										Director general
										 </option>
										 <option value="2">
										Ingeniero TI
										 </option>
										 <option value="3">
										Maniobras generales
										 </option>
										</select>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtfechaaltemp1">
										 Fecha de alta
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control form_datetime" id="txtfechaaltemp1" name="txtfechaaltemp1" placeholder="YYYY-MM-DD" type="text" readonly />
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
											<input type="file" class="custom-file-input" id="filecvemp1">
											<label class="custom-file-label" for="filecvemp1">CV</label>
										</div>
									</div>
									<br>
									<div class="card-body text-primary">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="filecontratoemp1">
											<label class="custom-file-label" for="filecontratoemp1">Contrato</label>
										</div>
									</div>
									<br>
									<div class="card-body text-primary">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="fileexamenemp1">
											<label class="custom-file-label" for="fileexamenemp1">Psicometrico</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-block" name="submit1" type="submit">
									Guardar
								</button>
							</div>
							<div class="form-group">
                              <div>
                               <a href="#formactualizarnuecur" name="btnlimpiaremp" id="btnlimpiaremp" class="btn btn-info btn-block">Limpiar</a>
                              </div>
                             </div>
						</form>
					</div>
				</div>
<?php

/* End of file masy_bodyreclutador_can_view.php */
/* Location: /views/masy_bodyreclutador_can_view.php */