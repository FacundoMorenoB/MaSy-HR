				<div class="tab-pane" id="asignarcurso" role="tabpanel" aria-labelledby="asignarcurso-tab">
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
						<form action="<?=base_url()?>masy_reclutador_controller/alta_can" method="post" role="form" id="formactualizarasigcur" name="formactualizarasigcur" style="margin-top: 30px">
							<div class="form-group row">
								<div class="card border-warning col-lg-12 mb-3">
									<div class="card-header text-white bg-warning" style="margin-top: 10px">
										<h3 class="card-title">Curso por empleado</h3>
									</div>
									<div class="form-group " style="margin-top: 10px">
										<label class="control-label requiredField" for="txtclaveempcurasig1">
										 Clave del empleado
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control" id="txtclaveempcurasig1" name="txtclaveempcurasig1" type="text"/>
										<span class="help-block" id="hint_txtclaveempcurasig1">
										 M&aacute;ximo 250 caracteres
										</span>
									 </div>
									<div class="form-group ">
										<label class="control-label requiredField" for="selclavecurasig1">
										 Seleccionar curso
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<select class="select form-control" id="selclavecurasig1" name="selclavecurasig1">
										 <option value="M&eacute;xico">
										Curso1
										 </option>
										 <option value="Estado de M&eacute;xico">
										Curso2
										 </option>
										 <option value="Jalisco">
										Curso3
										 </option>
										</select>
									 </div>
									 <div class="form-group ">
										<label class="control-label requiredField" for="txtfechainicurasig1">
										 Fecha de inicio
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control form_datetime" id="txtfechainicurasig1" name="txtfechainicurasig1" placeholder="YYYY-MM-DD" type="text" readonly />
									</div>
									<div class="form-group ">
										<label class="control-label requiredField" for="txtfechafincurasig1">
										 Fecha de fin
										 <span class="asteriskField">
										*
										 </span>
										</label>
										<input required class="form-control form_datetime" id="txtfechafincurasig1" name="txtfechafincurasig1" placeholder="YYYY-MM-DD" type="text" readonly />
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
		                              	<a href="#formactualizarasigcur" name="btnlimpiarcurasig" id="btnlimpiarcurasig" class="btn btn-info btn-block">Limpiar</a>
		                              </div>
		                            </div>
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


<script src="<?=base_url()?>js/masy_reclutador.js"></script>
<?php

/* End of file masy_bodyreclutador_cit_view.php */
/* Location: /views/masy_bodyreclutador_cit_view.php */