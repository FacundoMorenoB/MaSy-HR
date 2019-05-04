<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item active">
                  <a role="presentation" href="#registrarprocesocat" id="registrarprocesocat-tab" class="dropdown-item active" data-toggle="tab">Procesos e Higiene</a>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Salud Ocupacional</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#registrarMedicamentos" id="registrarMedicamentos-tab" class="dropdown-item" data-toggle="tab">Medicamentos</a>
                        <a role="presentation" href="#registrarMedicos" id="registrarMedicos-tab" class="dropdown-item" data-toggle="tab">Médicos Asignados</a>
                        <a role="presentation" href="#registrarConsultorios" id="registrarConsultorios-tab" class="dropdown-item" data-toggle="tab">Consultorios</a>
                        <a role="presentation" href="#registrarcitas" id="registrarcitas-tab" class="dropdown-item" data-toggle="tab">Citas Médicas</a>
                    </div>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="registrarprocesocat" role="tabpanel" aria-labelledby="registrarprocesocat-tab">
                    <div class="row justify-content-center">
                        <div class="col-12" style="margin-top: 30px; margin-bottom: 15px;">
                          <div class="header">
                            <h2>Procesos e Higiene</h2>
                          </div>
                        </div>
                    </div>

                    <form action="<?php echo site_url('masy_seghig_controller/guardar_actualizar_nue_curhig');?>" method="post" role="form" id="formactualizarproc" name="formactualizarproc">
                        <div class="form-group row">
                            <div class="col">
                              <div class="form-group ">
                              <label class="control-label requiredField" for="txtnomcurhig1">
                               Nombre del proceso
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input class="form-control" id="txtidcurhig1" name="txtidcurhig1" type="hidden" value=""/>
                              <input required class="form-control" id="txtnomcurhig1" name="txtnomcurhig1" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
                             </div>
                             <div class="form-group">
                              <label class="control-label requiredField" for="txtDireccioncurhig">
                               Dirección
                              </label>
                              <select class="select form-control" id="txtDireccioncurhig" name="txtDireccioncurhig">
                      
                              </select>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtAreacurhig">
                               Área
                              </label>
                              <select class="select form-control" id="txtAreacurhig" name="txtAreacurhig">
                      
                              </select>
                             </div>
                          </div>
                          <div class="col-md-auto"></div>
                          <div class="col col-lg-6">
                             <div class="form-group">
                              <label class="control-label requiredField" for="txtnomcurhig1">
                               Fecha de Inicio
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control form_datetime" id="txtfechainicurhig" name="txtfechainicurhig" placeholder="YYYY-MM-DD" type="text" readonly />
                             </div>
                             <div class="form-group">
                               <label class="control-label requiredField" for="txtnomcurhig1">
                               Fecha de Fin
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control form_datetime" id="txtfechafincurhig" name="txtfechafincurhig" placeholder="YYYY-MM-DD" type="text" readonly />
                             </div>
                             <div class="form-group">
                                <label class="control-label requiredField" for="txtnomcurhig1">
                                  Adjuntar manual
                                  <span class="asteriskField">
                                   *
                                  </span>
                               </label>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="filemancurhig1">
                                  <label class="custom-file-label fa fa-download" for="filemancurhig1" style="text-align: left;">  Manual</label>
                                </div>
                             </div>
                            </div>
                        </div>
                        <div class="row justify-content-start" style="margin-top: 100px">
                          <div class="col-7"><input class="form-control" type="text" name="txtbuscarcurhig" id="txtbuscarcurhig" placeholder="Buscar Proceso"></div>
                          <div class="col-3"><input type="button" name="btnbuscarcurhig" id="btnbuscarcurhig" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <section class="portfolio-block projects-cards">
                                    <div class="container">
                                        <div class="row" id="blklisprco">
                                            
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
                                    <a href="#formactualizarproc" name="btnlimpiarcurhig" id="btnlimpiarcurhig" class="btn btn-info btn-block">Limpiar</a>
                                  </div>
                                </div>
                    </form>
                </div>
<?php

/* End of file masy_bodySeguridadHigiene_view.php */
/* Location: /views/masy_bodySeguridadHigiene_view.php */
