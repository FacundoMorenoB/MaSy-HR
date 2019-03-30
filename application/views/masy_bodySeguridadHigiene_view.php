<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown active">
                    <a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link active">Procesos</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#registrarproceso" class="dropdown-item" data-toggle="tab">Añadir Proceso</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Artículos de Seguridad</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#catalogoart" class="dropdown-item" data-toggle="tab">Catálogo</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Mapas</a>

                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Salud Ocupacional</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#registrarproceso" id="registrarcurso-tab" class="dropdown-item" data-toggle="tab">Médicos Asignados</a>
                        <a role="presentation" href="#registrarproceso" id="registrarcurso-tab" class="dropdown-item" data-toggle="tab">Consultorios</a>
                        <a role="presentation" href="#registrarproceso" id="registrarcurso-tab" class="dropdown-item" data-toggle="tab">Citas Médicas</a>
                        <a role="presentation" href="#registrarproceso" id="registrarcurso-tab" class="dropdown-item" data-toggle="tab">Medicamentos</a>
                    </div>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="publicarvac" role="tabpanel" aria-labelledby="publicarvac-tab">
                    <div class="row justify-content-start" style="margin-top: 10px">
                        <div class="col-4">
                          <select class="form-control" name="selBuscarProc" id="txtbuscarProc" placeholder="Buscar Procesos">
                              <option value="1001" selected>1001 - Lavado de Máquina Engrasadora</option>
                              <option value="1002">1002 - Lavado de Máquina Pulidora</option>
                            </select>
                          </div>
                        <div class="col-3"><input type="button" name="btnbuscarvac" id="btnbuscarvac" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12" style="margin-top: 30px; margin-bottom: 15px;">
                          <div class="header">
                            <h2>Catálogo de Procesos</h2>
                          </div>
                        </div>
                    </div>

                    <form action="<?php echo site_url('masy_reclutador_controller/guardar_actualizar_proc');?>" method="post" role="form" id="formactualizarproc" name="formactualizarproc">
                        <div class="form-group row">
                            <div class="col">
                              <div class="form-group ">
                              <label class="control-label requiredField" for="txtidproc">
                               id Proceso:
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input class="form-control" id="txtidvac1" name="txtidvac1" type="hidden" value=""/>
                              <input required class="form-control" id="txtnomperfilvac1" name="txtnomperfilvac1" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
                             </div>
                             <div class="form-group">
                              <label class="control-label requiredField" for="txtDireccion">
                               Dirección
                              </label>
                              <input required class="form-control" id="txtDireccion" name="txtDireccion" type="text" pattern="[0-9]+"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtArea">
                               Área
                              </label>
                              <input required class="form-control" id="txtArea" name="txtArea" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
                             </div>
                            </div>
                    <div class="col-md-auto"></div>
                            <div class="col col-lg-6">
                             <div class="form-group">
                              <label class="control-label requiredField" for="txtVigenciaProcInicio">
                               Vigencia
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <br>
                              <span>Inicio:</span>
                              <input required class="form-control" id="txtVigenciaProcInicio" name="txtVigenciaProcInicio" placeholder="DD/MM/AAAA" pattern="[A-Za-z\s,]+" maxlength="250"/>
                              <br>
                              <span>Fin:</span>
                              <input required class="form-control" id="txtVigenciaProcInicio" name="txtVigenciaProcInicio" placeholder="DD/MM/AAAA" pattern="[A-Za-z\s,]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label " for="btnDescargaManual">
                               Manual
                              </label>
                              <button class="btn" style="width: 100%"><i class="fa fa-download"></i> Descargar</button>
                             </div>
                            </div>
                        </div>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Dirección</th>
                              <th scope="col">Área</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1001</th>
                              <td>Lavado de Máquina Engrasadora</td>
                              <td>Mantenimiento</td>
                              <td>Lavado y Engrasado</td>
                            </tr>
                            <tr>
                              <th scope="row">1002</th>
                              <td>Mantenimiento de Máquina Pulidora</td>
                              <td>Mantenimiento</td>
                              <td>Lavado y Engrasado</td>
                            </tr>
                            <tr>
                              <th scope="row">1003</th>
                              <td>Mantenimiento a Karcher</td>
                              <td>Mantenimiento</td>
                              <td>Lavado y Engrasado</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="form-group">
                         <div>
                          <button class="btn btn-primary btn-block" name="guardar1" type="submit">
                           Guardar
                          </button>
                         </div>
                        </div>
                    </form>
                </div>
<?php

/* End of file masy_bodySeguridadHigiene_view.php */
/* Location: /views/masy_bodySeguridadHigiene_view.php */
