				<div class="tab-pane" id="registrarcurso" role="tabpanel" aria-labelledby="registrarcurso-tab">
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
						<form action="<?=base_url()?>masy_reclutador_controller/alta_nuw_cur" method="post" role="form" id="formactualizarnuecur" name="formactualizarnuecur" style="margin-top: 30px">
							<div class="form-group row">
								<div class="card border-primary col-lg-12 mb-3">
									<div class="card-header bg-primary text-white" style="margin-top: 10px">
										<h3 class="card-title">Cursos de Inducci&oacute;n</h3>
									</div>
									 <div class="form-group " style="margin-top: 10px">
										<label class="control-label requiredField" for="txtnombrecur1" pattern="[A-Za-z0-9\s]+" maxlength="250">
										 Nombre del curso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtnombrecur1" name="txtnombrecur1" type="text" pattern="[A-Za-z0-9\s]+" maxlength="250"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtdireccioncur1">
										 Direcci&oacute;n que otorga el curso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtdireccioncur1" name="txtdireccioncur1" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txttipocur1">
										 Tipo de curso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txttipocur1" name="txttipocur1" type="text"/>
									 </div>
									 <div class="form-group ">
		                              <label class="control-label requiredField" for="txtarecontenidocur1">
		                               Contenido del curso
		                               <span class="asteriskField">
		                                *
		                               </span>
		                              </label>
		                              <textarea required class="form-control" cols="40" id="txtarecontenidocur1" name="txtarecontenidocur1" rows="5" maxlength="500"></textarea>
		                             </div>
		                             <div class="card-body text-primary">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="fileimagencur1">
											<label class="custom-file-label" for="fileimagencur1">Selecciona imagen del curso</label>
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
                               <a href="<?php echo site_url('masy_reclutador_controller/pdf_vac');?>" class="btn btn-dark btn-block" name="pdfvac" id="pdfvac" >PDF</a>
                              </div>
                             </div>
                             <div class="form-group">
                              <div>
                               <a href="#formactualizarnuecur" name="btnlimpiarcur" id="btnlimpiarcur" class="btn btn-info btn-block">Limpiar</a>
                              </div>
                             </div>
						</form>
					</div>
				</div>
            
<?php

/* End of file masy_bodyreclutador_cur_new_view.php */
/* Location: /views/masy_bodyreclutador_cur_new_view.php */