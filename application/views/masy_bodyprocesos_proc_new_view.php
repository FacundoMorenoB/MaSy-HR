				<!--**************************************************************************
					**************************************************************************
					**************************************************************************
					Vistas de medicamento
					**************************************************************************
					**************************************************************************
					**************************************************************************-->
				<div class="tab-pane" id="registrarMedicamentos" role="tabpanel" aria-labelledby="registrarMedicamentos-tab">
					<div class="row justify-content-center">
                        <div class="col-12" style="margin-top: 30px; margin-bottom: 15px;">
                          <div class="header">
                            <h2>Registrar Medicamentos</h2>
                          </div>
                        </div>
                    </div>
                    <div>
                    	<form action="<?php echo site_url('masy_seghig_controller/guardar_actualizar_nue_med');?>" method="post" role="form" id="formactualizarmed" name="formactualizarmed">
	                        <div class="form-group row">
	                            <div class="col">
	                              <div class="form-group ">
	                              <label class="control-label requiredField" for="txtnomnedicamento">
	                               Nombre del medicamento
	                               <span class="asteriskField">
	                                *
	                               </span>
	                              </label>
	                              <input class="form-control" id="txtidmedicamento" name="txtidmedicamento" type="hidden" value=""/>
	                              <input required class="form-control" id="txtnomnedicamento" name="txtnomnedicamento" type="text" pattern="[A-Za-z\s]+" maxlength="100"/>
	                             </div>

	                             <div class="form-group">
	                              <label class="control-label requiredField" for="txtcostmedicamento">
	                               Costo del medicamento
	                              </label>
	                              <input required class="form-control" id="txtcostmedicamento" name="txtcostmedicamento" type="text" pattern="[0-9\.]+" maxlength="11" placeholder="#####.##" />
	                             </div>

	                             <div class="form-group">
	                              <label class="control-label requiredField" for="txtubimedicamento">
	                               Ubicacion del medicamento
	                              </label>
	                              <input required class="form-control" id="txtubimedicamento" name="txtubimedicamento" type="text" pattern="[A-Za-z0-9\s]+" maxlength="50"/>
	                             </div>
	                            </div>
	                          </div>
	                        <div class="row justify-content-start" style="margin-top: 100px">
	                          <div class="col-7"><input class="form-control" type="text" name="txtbuscarmedicamento" id="txtbuscarmedicamento" placeholder="Buscar Medicamento"></div>
	                          <div class="col-3"><input type="button" name="btnbuscarcurmedicamento" id="btnbuscarcurmedicamento" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
	                        </div>
	                        <div class="row justify-content-center">
	                            <div class="col-12">
	                                <section class="portfolio-block projects-cards">
	                                    <div class="container">
	                                        <div class="row" id="tablamedicamentos">
	                                            
	                                        </div>
	                                    </div>
	                                </section>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                         <div>
	                          <button class="btn btn-primary btn-block" name="guardar1" type="submit">
	                           Guardar
	                          </button>
	                         </div>
	                        </div>
	                        <div class="form-group">
	                            <div>
	                           		<a href="#formactualizarmed" name="btnlimpiarmedicamento" id="btnlimpiarmedicamento" class="btn btn-info btn-block">Limpiar</a>
	                            </div>
	                        </div>
	                    </form>
                    </div>
				</div>
				<!--**************************************************************************
					**************************************************************************
					**************************************************************************
					Vistas de medicos
					**************************************************************************
					**************************************************************************
					**************************************************************************-->
				<div class="tab-pane" id="registrarMedicos" role="tabpanel" aria-labelledby="registrarMedicos-tab">
					<div class="row justify-content-center">
                        <div class="col-12" style="margin-top: 30px; margin-bottom: 15px;">
                          <div class="header">
                            <h2>Registrar M&eacute;dicos</h2>
                          </div>
                        </div>
                    </div>
                    <div>
                    	<form action="<?php echo site_url('masy_seghig_controller/guardar_actualizar_nue_medico');?>" method="post" role="form" id="formactualizarmedico" name="formactualizarmedico">
	                        <div class="form-group row">
	                            <div class="col">
	                              <div class="form-group ">
	                              <label class="control-label requiredField" for="txtnommedico">
	                               Nombre del medicamento
	                               <span class="asteriskField">
	                                *
	                               </span>
	                              </label>
	                              <input class="form-control" id="txtidmedico" name="txtidmedico" type="hidden" value=""/>
	                              <select class="select form-control" id="txtnommedico" name="txtnommedico">
                      
                              	  </select>
	                             </div>

	                             <div class="form-group">
	                              <label class="control-label requiredField" for="txtespmedico">
	                               Especialidad del M&eacute;dico
	                              </label>
	                              <input required class="form-control" id="txtespmedico" name="txtespmedico" type="text" pattern="[A-Za-z\s]+" maxlength="100"/>
	                             </div>
	                            </div>
	                          </div>
	                        <div class="row justify-content-start" style="margin-top: 100px">
	                          <div class="col-7"><input class="form-control" type="text" name="txtbuscarmedico" id="txtbuscarmedico" placeholder="Buscar Medicamento"></div>
	                          <div class="col-3"><input type="button" name="btnbuscarcurmedico" id="btnbuscarcurmedico" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
	                        </div>
	                        <div class="row justify-content-center">
	                            <div class="col-12">
	                                <section class="portfolio-block projects-cards">
	                                    <div class="container">
	                                        <div class="row" id="tablamedicos">
	                                            
	                                        </div>
	                                    </div>
	                                </section>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                         <div>
	                          <button class="btn btn-primary btn-block" name="guardar1" type="submit">
	                           Guardar
	                          </button>
	                         </div>
	                        </div>
	                        <div class="form-group">
	                            <div>
	                           		<a href="#formactualizarmedico" name="btnlimpiarmedico" id="btnlimpiarmedico" class="btn btn-info btn-block">Limpiar</a>
	                            </div>
	                        </div>
	                    </form>
                    </div>
				</div>
				<!--**************************************************************************
					**************************************************************************
					**************************************************************************
					Vistas de consultorios
					**************************************************************************
					**************************************************************************
					**************************************************************************-->
				<div class="tab-pane" id="registrarConsultorios" role="tabpanel" aria-labelledby="registrarConsultorios-tab">
					<div class="row justify-content-center">
                        <div class="col-12" style="margin-top: 30px; margin-bottom: 15px;">
                          <div class="header">
                            <h2>Registrar Consultorios</h2>
                          </div>
                        </div>
                    </div>
                    <div>
                    	<form action="<?php echo site_url('masy_seghig_controller/guardar_actualizar_nue_consul');?>" method="post" role="form" id="formactualizarconsul" name="formactualizarconsul">
	                        <div class="form-group row">
	                            <div class="col">
	                              <div class="form-group ">
	                              <label class="control-label requiredField" for="txtnomxonsul">
	                               Nombre del consultorio
	                               <span class="asteriskField">
	                                *
	                               </span>
	                              </label>
	                              <input class="form-control" id="txtidconsul" name="txtidconsul" type="hidden" value=""/>
	                              <input required class="form-control" id="txtnomxonsul" name="txtnomxonsul" type="text" pattern="[A-Za-z\s]+" maxlength="50"/>
	                             </div>

	                             <div class="form-group">
	                              <label class="control-label requiredField" for="txtnommedicoasig">
	                               M&eacute;dico Asignado
	                              </label>
	                              <select class="select form-control" id="txtnommedicoasig" name="txtnommedicoasig">
                      
                              	  </select>
	                             </div>
	                            </div>
	                          </div>
	                        <div class="row justify-content-start" style="margin-top: 100px">
	                          <div class="col-7"><input class="form-control" type="text" name="txtbuscarconsul" id="txtbuscarconsul" placeholder="Buscar Medicamento"></div>
	                          <div class="col-3"><input type="button" name="btnbuscarconsul" id="btnbuscarconsul" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
	                        </div>
	                        <div class="row justify-content-center">
	                            <div class="col-12">
	                                <section class="portfolio-block projects-cards">
	                                    <div class="container">
	                                        <div class="row" id="tablaconsultorios">
	                                            
	                                        </div>
	                                    </div>
	                                </section>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                         <div>
	                          <button class="btn btn-primary btn-block" name="guardar1" type="submit">
	                           Guardar
	                          </button>
	                         </div>
	                        </div>
	                        <div class="form-group">
	                            <div>
	                           		<a href="#formactualizarconsul" name="btnlimpiaconsul" id="btnlimpiaconsul" class="btn btn-info btn-block">Limpiar</a>
	                            </div>
	                        </div>
	                    </form>
                    </div>
				</div>
				<!--**************************************************************************
					**************************************************************************
					**************************************************************************
					Vistas de citas
					**************************************************************************
					**************************************************************************
					**************************************************************************-->
				<div class="tab-pane" id="registrarcitas" role="tabpanel" aria-labelledby="registrarcitas-tab">
					<div class="row justify-content-center">
                        <div class="col-12" style="margin-top: 30px; margin-bottom: 15px;">
                          <div class="header">
                            <h2>Registrar Citas M&eacute;dicas</h2>
                          </div>
                        </div>
                    </div>
                    <div>
                    	<form action="<?php echo site_url('masy_seghig_controller/guardar_actualizar_nue_cita');?>" method="post" role="form" id="formactualizarcitas" name="formactualizarcitas">
	                        <div class="form-group row">
	                            <div class="col">
	                              <div class="form-group ">
	                              <label class="control-label requiredField" for="txtconsultoriocita">
	                               Consultorio Asignado
	                               <span class="asteriskField">
	                                *
	                               </span>
	                              </label>
	                              <input class="form-control" id="txtidcita" name="txtidcita" type="hidden" value=""/>
	                              <select class="select form-control" id="txtconsultoriocita" name="txtconsultoriocita">
                      
                              	  </select>
	                             </div>

	                             <div class="form-group">
	                              <label class="control-label requiredField" for="txtmedicoasigcita">
	                               Nombre del Medico Asignado
	                              </label>
	                              <input required class="form-control" id="txtmediduser" name="txtmediduser" type="text" hidden="true" />
	                              <input required class="form-control" id="txtmedicoasigcita" name="txtmedicoasigcita" type="text" disabled="true" />
	                             </div>


	                             <div class="form-group ">
	                              <label class="control-label requiredField" for="txtnomempcita">
	                               Nombre de Empleado
	                               <span class="asteriskField">
	                                *
	                               </span>
	                              </label>
	                              <select class="select form-control" id="txtnomempcita" name="txtnomempcita">
                      
                              	  </select>
	                             </div>

	                             <div class="form-group">
	                               <label class="control-label requiredField" for="txtfechacita">
	                               Fecha de Consulta
	                               <span class="asteriskField">
	                                *
	                               </span>
	                              </label>
	                              <input required class="form-control form_datetime" id="txtfechacita" name="txtfechacita" placeholder="YYYY-MM-DD" type="text" readonly />
	                             </div>

	                             <div class="form-group">
	                              <label class="control-label requiredField" for="txtrecetacita">
	                               Codigo de receta
	                              </label>
	                              <input required class="form-control" id="txtrecetacita" name="txtrecetacita" type="text" pattern="[A-Z]+" maxlength="10"/>
	                             </div>

	                            <div class="form-group">
	                               <label class="control-label requiredField" for="filerecetacita">
	                                  Adjuntar receta
	                                  <span class="asteriskField">
	                                   *
	                                  </span>
	                               </label>
	                                <div class="custom-file">
	                                  <input type="file" class="custom-file-input" id="filerecetacita">
	                                  <label class="custom-file-label fa fa-download" for="filerecetacita" style="text-align: left;">  Receta</label>
	                                </div>
	                             </div>
	                            </div>
	                          </div>
	                        <div class="row justify-content-start" style="margin-top: 100px">
	                          <div class="col-7"><input class="form-control" type="text" name="txtbuscarcita" id="txtbuscarcita" placeholder="Buscar Medicamento"></div>
	                          <div class="col-3"><input type="button" name="btnbuscarcita" id="btnbuscarcita" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
	                        </div>
	                        <div class="row justify-content-center">
	                            <div class="col-12">
	                                <section class="portfolio-block projects-cards">
	                                    <div class="container">
	                                        <div class="row" id="tablacitas">
	                                            
	                                        </div>
	                                    </div>
	                                </section>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                         <div>
	                          <button class="btn btn-primary btn-block" name="guardar1" type="submit">
	                           Guardar
	                          </button>
	                         </div>
	                        </div>
	                        <div class="form-group">
	                            <div>
	                           		<a href="#formactualizarcitas" name="btnlimpiarcita" id="btnlimpiarcita" class="btn btn-info btn-block">Limpiar</a>
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
    $( ".form_datetime" ).datepicker({changeMonth: true, changeYear: true });
  } );
</script> 

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<script src="<?=base_url()?>js/masy_seghig.js"></script>
<?php

/* End of file masy_bodyreclutador_cur_new_view.php */
/* Location: /views/masy_bodyreclutador_cur_new_view.php */
