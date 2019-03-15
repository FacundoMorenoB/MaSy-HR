<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown active">
                    <a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link active">Reclutamiento</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#publicarvac" id="publicarvac-tab" class="dropdown-item" data-toggle="tab">Publicar Vacante</a>
                        <a role="presentation" href="#listarvac" id="listarvac-tab" class="dropdown-item" data-toggle="tab">Lista de Vacantes</a>
                        <a role="presentation" href="#registrarcand" id="registrarcand-tab" class="dropdown-item" data-toggle="tab">Registrar Candidato</a>
                        <a role="presentation" href="#listarcand" id="listarcand-tab" class="dropdown-item" data-toggle="tab">Lista de Candidatos</a>
                        <a role="presentation" href="#agendarent" id="agendarent-tab" class="dropdown-item" data-toggle="tab">Agendar entrevista</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Empleados</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#" class="dropdown-item">Alta de Empleado</a>
                        <a role="presentation" href="#" class="dropdown-item">Administrar Empleados</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Capacitacion</a>
                    <div role="menu" class="dropdown-menu">
                        <a role="presentation" href="#" class="dropdown-item">Alta de Cursos</a>
                        <a role="presentation" href="#" class="dropdown-item">Administracion de Cursos</a>
                    </div>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="publicarvac" role="tabpanel" aria-labelledby="publicarvac-tab">
                    <div class="container">
                        <form action="<?=base_url()?>masy_reclutador_controller/alta_vac" method="post" role="form" id="formagregarvac" name="formagregarvac" style="margin-top: 30px">
                            <div class="form-group row">
                                <div class="col">
                                  <div class="form-group ">
                                  <label class="control-label requiredField" for="txtnomperfilvac">
                                   Nombre del perfil
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtnomperfilvac" name="txtnomperfilvac" type="text" pattern="[A-Za-z]+" maxlength="250" />
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtnivimpactovac">
                                   Nivel de impacto
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtnivimpactovac" name="txtnivimpactovac" type="text" pattern="[1-9]+"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtnivvaluacionvac">
                                   Nivel de valuaci&oacute;n
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtnivvaluacionvac" name="txtnivvaluacionvac" type="text" pattern="[A-Za-z]+" maxlength="250"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtsldrangovac">
                                   Rango de sueldo
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtsldrangovac" name="txtsldrangovac" placeholder="$######.## - $$######.##" type="text" pattern="[0-9$-\.,]+" maxlength="250"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtsldofrecidovac">
                                   Sueldo ofrecido
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtsldofrecidovac" name="txtsldofrecidovac" placeholder="$######.##" type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtaremsnpuestovac">
                                   Misi&oacute;n del puesto
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <textarea required class="form-control" cols="40" id="txtaremsnpuestovac" name="txtaremsnpuestovac" rows="5"></textarea>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtedadvac">
                                   Rango de edad
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtedadvac" name="txtedadvac" placeholder="## - ##" type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="selsexovac">
                                   Sexo
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <select class="select form-control" id="selsexovac" name="selsexovac">
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
                                  <label class="control-label requiredField" for="textareconpuestovac">
                                   Conocimientos t&eacute;cnicos
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <textarea required class="form-control" cols="40" id="textareconpuestovac" name="textareconpuestovac" rows="5"></textarea>
                                 </div>
                                </div>
                                <div class="col-md-auto"></div>
                                <div class="col col-lg-6">
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtidiomavac">
                                   Idioma(s)
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtidiomavac" name="txtidiomavac" placeholder="Ingles, Franc&eacute;s, Chino" type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label " for="txtproginformavac">
                                   Programas inform&aacute;ticos
                                  </label>
                                  <input required class="form-control" id="txtproginformavac" name="txtproginformavac" placeholder="Excel, Visual Studio, etc." type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="textarehabilivac">
                                   Habilidades
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <textarea required class="form-control" cols="40" id="textarehabilivac" name="textarehabilivac" rows="5"></textarea>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label " for="seldireccionvac">
                                   Direcci&oacute;n que reporta
                                  </label>
                                  <select class="select form-control" id="seldireccionvac" name="seldireccionvac">
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
                                  <label class="control-label " for="seldirectorvac">
                                   Director que reporta
                                  </label>
                                  <select class="select form-control" id="seldirectorvac" name="seldirectorvac">
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
                                  <label class="control-label " for="textarefuncionesvac">
                                   Funciones del puesto
                                  </label>
                                  <textarea required class="form-control" cols="40" id="textarefuncionesvac" name="textarefuncionesvac" rows="5"></textarea>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="dateregistrovac1">
                                   Fecha de registro
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control form_datetime" id="dateregistrovac1" name="dateregistrovac1" placeholder="YYYY-MM-DD" type="text" readonly/> 
                                 </div>
                                 <div class="form-group">
                                  <div>
                                   <button class="btn btn-primary " name="btnguardar" type="submit">
                                    Guardar
                                   </button>
                                  </div>
                                 </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane active" id="listarvac" role="tabpanel" aria-labelledby="listarvac-tab">
                    <div class="row justify-content-start" style="margin-top: 10px">
                        <div class="col-4"><input class="form-control" type="text" name="txtbuscarvac" id="txtbuscarvac" placeholder="Buscar vacantes"></div>
                        <div class="col-3"><input type="button" name="btnbuscarvac" id="btnbuscarvac" class="btn btn-info" value="Mostrar todo" data-toggle='modal' data-target='#basicModal'></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12" id="blkactualizarvac">
                            <section class="portfolio-block projects-cards">
                                <div class="container">
                                    <div class="heading">
                                        <h2>VACANTES.</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0"><a href="#formactualizarvac"><img src="<?=base_url()?>img/nature/image1.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                                                <div class="card-body">
                                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0"><a href="#formactualizarvac"><img src="<?=base_url()?>img/nature/image2.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                                                <div class="card-body">
                                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0"><a href="#formactualizarvac"><img src="<?=base_url()?>img/nature/image3.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                                                <div class="card-body">
                                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0"><a href="#formactualizarvac"><img src="<?=base_url()?>img/nature/image4.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                                                <div class="card-body">
                                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0"><a href="#formactualizarvac"><img src="<?=base_url()?>img/nature/image5.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                                                <div class="card-body">
                                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0"><a href="#formactualizarvac"><img src="<?=base_url()?>img/nature/image6.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                                                <div class="card-body">
                                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <form action="<?=base_url()?>masy_reclutador_controller/actualizar_vac" method="post" role="form" id="formactualizarvac" name="formactualizarvac">
                        <div class="form-group row">
                            <div class="col">
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
                              <input required class="form-control" id="txtsldrangovac1" name="txtsldrangovac1" placeholder="$######.## - $$######.##" type="text" pattern="[0-9$-\.,\s]+" maxlength="250/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtsldofrecidovac1">
                               Sueldo ofrecido
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtsldofrecidovac1" name="txtsldofrecidovac1" placeholder="$######.##" type="text"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtaremsnpuestovac1">
                               Misi&oacute;n del puesto
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <textarea required class="form-control" cols="40" id="txtaremsnpuestovac1" name="txtaremsnpuestovac1" rows="5"></textarea>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtedadvac1">
                               Rango de edad
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtedadvac1" name="txtedadvac1" placeholder="## - ##" type="text"/>
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
                              <textarea required class="form-control" cols="40" id="textareconpuestovac1" name="textareconpuestovac1" rows="5"></textarea>
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
                              <input required class="form-control" id="txtidiomavac1" name="txtidiomavac1" placeholder="Ingles, Franc&eacute;s, Chino" type="text"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label " for="txtproginformavac1">
                               Programas inform&aacute;ticos
                              </label>
                              <input required class="form-control" id="txtproginformavac1" name="txtproginformavac1" placeholder="Excel, Visual Studio, etc." type="text"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="textarehabilivac1">
                               Habilidades
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <textarea required class="form-control" cols="40" id="textarehabilivac1" name="textarehabilivac1" rows="5"></textarea>
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
                              <textarea required class="form-control" cols="40" id="textarefuncionesvac1" name="textarefuncionesvac1" rows="5"></textarea>
                             </div>
                             <div class="form-group">
                              <div>
                               <button class="btn btn-primary " name="guardar1" type="submit">
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