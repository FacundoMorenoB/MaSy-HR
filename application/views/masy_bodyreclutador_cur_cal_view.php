				<div class="tab-pane" id="calendarizacurso" role="tabpanel" aria-labelledby="calendarizacurso-tab">
					<div class="row justify-content-start" style="margin-top: 10px">
						<div class="col-4"><input class="form-control" type="text" name="txtbuscarcan" id="txtbuscarcan" placeholder="Buscar candidato"></div>
						<div class="col-3"><input type="button" name="btnbuscarcan" id="btnbuscarcan" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
					</div>
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
						<form action="<?=base_url()?>masy_reclutador_controller/alta_can" method="post" role="form" id="formactualizarcalcur" name="formactualizarcalcur" style="margin-top: 30px">
							<div class="form-group row">
								<div class="card border-success col-lg-12 mb-3">
									<div class="card-header bg-success text-white" style="margin-top: 10px">
										<h3 class="card-title">Calendarizar curso</h3>
									</div>
									<div class="form-group " style="margin-top: 10px">
										<label class="control-label requiredField" for="selcursocal1">
										 Curso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<select class="select form-control" id="selcursocal1" name="selcursocal1">
										 <option value="M&eacute;xico">
										Curso 1
										 </option>
										 <option value="Estado de M&eacute;xico">
										Curso 2
										 </option>
										 <option value="Jalisco">
										Curso 3
										 </option>
										</select>
									 </div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtfechainicurcal1">
										 Fecha de nacimiento
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control form_datetime" id="txtfechainicurcal1" name="txtfechainicurcal1" placeholder="YYYY-MM-DD" type="text" readonly />
									</div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtfechafincurcal1">
										 Fecha de nacimiento
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control form_datetime" id="txtfechafincurcal1" name="txtfechafincurcal1" placeholder="YYYY-MM-DD" type="text" readonly />
									</div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtcapacitadorcurcal1">
										Direcci&oacute;n
										<span class="asteriskField">
										*
										</span>
										</label>
										<input required class="form-control" id="txtcapacitadorcurcal1" name="txtcapacitadorcurcal1" type="text"/>
										<span class="help-block" id="hint_txtcapacitadorcurcal1">
										M&aacute;ximo 250 caracteres
										</span>
									</div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtcomentarioscurcal1">
										Direcci&oacute;n
										<span class="asteriskField">
										*
										</span>
										</label>
										<input required class="form-control" id="txtcomentarioscurcal1" name="txtcomentarioscurcal1" type="text"/>
										<span class="help-block" id="hint_txtcomentarioscurcal1">
										M&aacute;ximo 250 caracteres
										</span>
									</div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtclavecurcal1">
										Direcci&oacute;n
										<span class="asteriskField">
										*
										</span>
										</label>
										<input required class="form-control" id="txtclavecurcal1" name="txtclavecurcal1" type="text"/>
										<span class="help-block" id="hint_txtclavecurcal1">
										M&aacute;ximo 250 caracteres
										</span>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="submit1" type="submit">
											Guardar
										</button>
									</div>
									<div class="form-group">
		                              <div>
		                              	<a href="<?php echo site_url('masy_reclutador_controller/pdf_vac');?>" class="btn btn-dark btn-block" name="pdfvac" id="pdfvac" >PDF</a>
		                              </div>
		                            </div>
		                            <div class="form-group">
		                              <div>
		                              	<a href="#formactualizarcalcur" name="btnlimpiarcurcal" id="btnlimpiarcurcal" class="btn btn-info btn-block">Limpiar</a>
		                              </div>
		                            </div>
		                        </div>
							</div>
						</form>
					</div>
				</div>
            
<?php

/* End of file masy_bodyreclutador_cur_cal_view.php */
/* Location: /views/masy_bodyreclutador_cur_cal_view.php */