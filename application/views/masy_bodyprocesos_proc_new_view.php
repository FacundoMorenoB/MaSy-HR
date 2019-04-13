				<div class="tab-pane" id="registrarproceso" role="tabpanel" aria-labelledby="registrarproceso-tab">
					<div class="row justify-content-start" style="margin-top: 10px">
						<div class="col-4"><input class="form-control" type="text" name="txtbuscarcur" id="txtbuscarcur" placeholder="Buscar Proceso"></div>
						<div class="col-3"><input type="button" name="btnbuscarcur" id="btnbuscarcur" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
					</div>
					<div class="container">
						<div class="row justify-content-start" style="margin-top: 10px" id="list_nue_cur">

						</div>
						<form action="<?php echo site_url('masy_cursos_controller/guardar_actualizar_nue_proc');?>" method="post" role="form" id="formactualizarnueproc" name="formactualizarnueproc" style="margin-top: 30px">
							<div class="form-group row">
								<div class="card border-primary col-lg-12 mb-3">
									<div class="card-header bg-primary text-white" style="margin-top: 10px">
										<h3 class="card-title">Añadir Proceso</h3>
									</div>
									 <div class="form-group " style="margin-top: 10px">
										<label class="control-label requiredField" for="txtnombreproc1" pattern="[A-Za-z0-9\s]+" maxlength="250">
										 Nombre del Proceso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input class="form-control" id="txtidproc1" name="txtidvac1" type="hidden" value=""/>
										<input required class="form-control" id="txtnombreproc1" name="txtnombreproc1" type="text" pattern="[A-Za-z0-9\s]+" maxlength="250"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtdireccionproc1">
										 Direcci&oacute;n a la que pertenece el proceso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtdireccionproc1" name="txtdireccionproc1" type="text" pattern="[0-9]+" maxlength="20"/>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtareaproc1">
										 Área
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtareaproc1" name="txtareaproc1" type="text"/>
									 </div>
									 <div class="form-group">
		                              <label class="control-label requiredField" for="txt">
		                               Vigencia
		                               <span class="asteriskField">
		                                *
		                               </span>
		                              </label>
		                              <input class"form-control" type="date" name="fechaInicioProc1"/>
																	<input class"form-control" type="date" name="fechaFinProc1"/>
		                             </div>
                    				<div class="card-body text-primary">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="filemanualproc1">
											<label class="custom-file-label" for="filemanualproc">Selecciona el Manual del curso</label>
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
                               <a href="<?php echo site_url('masy_cursos_controller/pdf_nue_cur');?>" class="btn btn-dark btn-block" name="pdfvac" id="pdfvac" >PDF</a>
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

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<script s

<?php

/* End of file masy_bodyreclutador_cur_new_view.php */
/* Location: /views/masy_bodyreclutador_cur_new_view.php */
