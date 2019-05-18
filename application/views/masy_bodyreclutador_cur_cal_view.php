				<div class="tab-pane" id="calendarizacurso" role="tabpanel" aria-labelledby="calendarizacurso-tab">
					<div class="row justify-content-start" style="margin-top: 10px">
						<div class="col-4"><input class="form-control" type="text" name="txtbuscarcalcur" id="txtbuscarcalcur" placeholder="Buscar candidato"></div>
						<div class="col-3"><input type="button" name="btnbuscarcalcur" id="btnbuscarcalcur" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
					</div>
					<div class="container">
						<div class="row justify-content-start" style="margin-top: 10px" id="list_cal_cur">

						</div>
						<form action="<?php echo site_url('masy_cursos_controller/guardar_actualizar_cur_cal');?>" method="post" role="form" id="formactualizarcalcur" name="formactualizarcalcur" style="margin-top: 30px">
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
										<input class="form-control" id="txtidcurcal1" name="txtidcurcal1" type="hidden" value=""/>
										<select class="select form-control" id="selcursocal1" name="selcursocal1">
										 
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
										Capacitador
										<span class="asteriskField">
										*
										</span>
										</label>
										<select class="select form-control" id="txtcapacitadorcurcal1" name="txtcapacitadorcurcal1">
										 
										</select>
									</div>
									<div class="form-group ">
		                              <label class="control-label requiredField" for="txtarecomentarioscurcal1">
		                               Comentarios
		                               <span class="asteriskField">
		                                *
		                               </span>
		                              </label>
		                              <textarea required class="form-control" cols="40" id="txtarecomentarioscurcal1" name="txtarecomentarioscurcal1" rows="5" maxlength="500"></textarea>
		                            </div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtclavecurcal1">
										Clave del curso
										<span class="asteriskField">
										*
										</span>
										</label>
										<input required class="form-control" id="txtclavecurcal1" name="txtclavecurcal1" type="text"/>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="submit1" type="submit">
											Guardar
										</button>
									</div>
									<div class="form-group">
		                              <div>
		                              	<!-- <a href="<?php echo site_url('masy_reclutador_controller/pdf_vac');?>" class="btn btn-dark btn-block" name="pdfvac" id="pdfvac" >PDF</a> -->
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