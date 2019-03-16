<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown active">
                    <a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link active">Reclutamiento</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#publicarvac" id="publicarvac-tab" class="dropdown-item" data-toggle="tab">Vacantes</a>
                        <a role="presentation" href="#registrarcand" id="registrarcand-tab" class="dropdown-item" data-toggle="tab">Candidatos</a>
                        <a role="presentation" href="#agendarent" id="agendarent-tab" class="dropdown-item" data-toggle="tab">Agendar entrevista</a>
                    </div>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Empleados</a>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Capacitacion</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#" class="dropdown-item">Alta de Cursos</a>
                        <a role="presentation" href="#" class="dropdown-item">Administracion de Cursos</a>
                    </div>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="publicarvac" role="tabpanel" aria-labelledby="publicarvac-tab">
                    <div class="row justify-content-start" style="margin-top: 10px">
                        <div class="col-4"><input class="form-control" type="text" name="txtbuscarvac" id="txtbuscarvac" placeholder="Buscar vacantes"></div>
                        <div class="col-3"><input type="button" name="btnbuscarvac" id="btnbuscarvac" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <section class="portfolio-block projects-cards">
                                <div class="container">
                                    <div class="heading">
                                        <h2>VACANTES.</h2>
                                    </div>
                                    <div class="row" id="blklistavac">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="heading">
                      <h2>AGREGAR Y MODIFICAR VACANTES.</h2>
                    </div>
                    <form action="<?php echo site_url('masy_reclutador_controller/guardar_actualizar_vac');?>" method="post" role="form" id="formactualizarvac" name="formactualizarvac">
                        <div class="form-group row">
                            <div class="col">
                              <input class="form-control" id="txtidvac1" name="txtidvac1" type="text" pattern="[A-Za-z\s]+" maxlength="250" style="display: none" />
                              <div class="form-group ">
                              <label class="control-label requiredField" for="txtnomperfilvac1">
                               Nombre del perfil
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtnomperfilvac1" name="txtnomperfilvac1" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtnivimpactovac1">
                               Nivel de impacto
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtnivimpactovac1" name="txtnivimpactovac1" type="text" pattern="[0-9]+"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtnivvaluacionvac1">
                               Nivel de valuaci&oacute;n
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtnivvaluacionvac1" name="txtnivvaluacionvac1" type="text" pattern="[A-Za-z\s]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtsldrangovac1">
                               Rango de sueldo
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtsldrangovac1" name="txtsldrangovac1" placeholder="$######.## - $$######.##" type="text" pattern="[0-9$-\.,\s]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtsldofrecidovac1">
                               Sueldo ofrecido
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtsldofrecidovac1" name="txtsldofrecidovac1" placeholder="$######.##" type="text" pattern="[0-9\.]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtaremsnpuestovac1">
                               Misi&oacute;n del puesto
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <textarea required class="form-control" cols="40" id="txtaremsnpuestovac1" name="txtaremsnpuestovac1" rows="5" maxlength="500"></textarea>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtedadvac1">
                               Rango de edad
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtedadvac1" name="txtedadvac1" placeholder="## - ##" type="text" pattern="[0-9\-]+" minlength="5" maxlength="7" />
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="selsexovac1">
                               Sexo
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <select class="select form-control" id="selsexovac1" name="selsexovac1">
                               <option value="Hombre">
                                Hombre
                               </option>
                               <option value="Mujer">
                                Mujer
                               </option>
                               <option value="Indistinto">
                                Indistinto
                               </option>
                              </select>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="textareconpuestovac1">
                               Conocimientos t&eacute;cnicos
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <textarea required class="form-control" cols="40" id="textareconpuestovac1" name="textareconpuestovac1" rows="5" maxlength="500"></textarea>
                             </div>
                            </div>
                            <div class="col-md-auto"></div>
                            <div class="col col-lg-6">
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtidiomavac1">
                               Idioma(s)
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtidiomavac1" name="txtidiomavac1" placeholder="Ingles, Franc&eacute;s, Chino" type="text" pattern="[A-Za-z\s,]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label " for="txtproginformavac1">
                               Programas inform&aacute;ticos
                              </label>
                              <input required class="form-control" id="txtproginformavac1" name="txtproginformavac1" placeholder="Excel, Visual Studio, etc." type="text" pattern="[A-Za-z\s,]+" maxlength="250"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="textarehabilivac1">
                               Habilidades
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <textarea required class="form-control" cols="40" id="textarehabilivac1" name="textarehabilivac1" rows="5" maxlength="500"></textarea>
                             </div>
                             <div class="form-group ">
                              <label class="control-label " for="seldireccionvac1">
                               Direcci&oacute;n que reporta
                              </label>
                              <select class="select form-control" id="seldireccionvac1" name="seldireccionvac1">
                               <option value="Direcci&oacute;n General">
                                Direcci&oacute;n General
                               </option>
                               <option value="Direcci&oacute;n de TI">
                                Direcci&oacute;n de TI
                               </option>
                               <option value="Direcci&oacute;n de RH">
                                Direcci&oacute;n de RH
                               </option>
                              </select>
                             </div>
                             <div class="form-group ">
                              <label class="control-label " for="seldirectorvac1">
                               Director que reporta
                              </label>
                              <select class="select form-control" id="seldirectorvac1" name="seldirectorvac1">
                               <option value="Director general">
                                Director general
                               </option>
                               <option value="Directos de capacitaci&oacute;n">
                                Directos de capacitaci&oacute;n
                               </option>
                               <option value="Director de percepciones">
                                Director de percepciones
                               </option>
                               <option value="Director de sistemas holding">
                                Director de sistemas holding
                               </option>
                              </select>
                             </div>
                             <div class="form-group ">
                              <label class="control-label " for="textarefuncionesvac1">
                               Funciones del puesto
                              </label>
                              <textarea required class="form-control" cols="40" id="textarefuncionesvac1" name="textarefuncionesvac1" rows="5" maxlength="500"></textarea>
                             </div>
                             <div class="form-group">
                              <div>
                               <button class="btn btn-primary btn-block" name="guardar1" type="submit">
                                Guardar
                               </button>
                              </div>
                             </div>
                            </div>
                        </div>
                    </form>
                </div>
<?php

/* End of file masy_bodyreclutador_vac_view.php */
/* Location: /views/masy_bodyreclutador_vac_view.php */