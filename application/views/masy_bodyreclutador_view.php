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
                        <form action="<?=base_url()?>masy_reclutador_controller/actualizar" method="post" role="form" id="formactualizarvac" name="formactualizarvac">
                            <div class="form-group row">
                                <div class="col">
                                  <div class="form-group ">
                                  <label class="control-label requiredField" for="txtnomperfilvac">
                                   Nombre del perfil
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtnomperfilvac" name="txtnomperfilvac" type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtnivimpactovac">
                                   Nivel de impacto
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtnivimpactovac" name="txtnivimpactovac" type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtnivvaluacionvac">
                                   Nivel de valuaci&oacute;n
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtnivvaluacionvac" name="txtnivvaluacionvac" type="text"/>
                                 </div>
                                 <div class="form-group ">
                                  <label class="control-label requiredField" for="txtsldrangovac">
                                   Rango de sueldo
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <input required class="form-control" id="txtsldrangovac" name="txtsldrangovac" placeholder="$######.## - $$######.##" type="text"/>
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
                                 <div class="form-group">
                                  <div>
                                   <button class="btn btn-primary " name="submit" type="submit">
                                    Submit
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
                    <div class="row justify-content-center" style="margin-top: 10px">
                        <div class="col-12" id="tblactualizarvac">
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
                    </div>
                    <form action="<?=base_url()?>masy_reclutador_controller/actualizar" method="post" role="form" id="formactualizarvac" name="formactualizarvac">
                        <div class="form-group row">
                            <div class="col">
                              <div class="form-group ">
                              <label class="control-label requiredField" for="txtnomperfilvac">
                               Nombre del perfil
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtnomperfilvac" name="txtnomperfilvac" type="text"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtnivimpactovac">
                               Nivel de impacto
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtnivimpactovac" name="txtnivimpactovac" type="text"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtnivvaluacionvac">
                               Nivel de valuaci&oacute;n
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtnivvaluacionvac" name="txtnivvaluacionvac" type="text"/>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtsldrangovac">
                               Rango de sueldo
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="txtsldrangovac" name="txtsldrangovac" placeholder="$######.## - $$######.##" type="text"/>
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
                              <label class="control-label requiredField" for="dateregistrovac">
                               Fecha de registro
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input required class="form-control" id="dateregistrovac" name="dateregistrovac" placeholder="DD/MM/YYYY HH:MM AM/PM" type="text" readonly/> 
                             </div>
                             <div class="form-group">
                              <div>
                               <button class="btn btn-primary " name="submit" type="submit">
                                Submit
                               </button>
                              </div>
                             </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="registrarcand" role="tabpanel" aria-labelledby="registrarcand-tab">
                    <h1>HOLA3</h1>
                </div>
                <div class="tab-pane" id="listarcand" role="tabpanel" aria-labelledby="listarcand-tab">
                    <h1>HOLA4</h1>
                </div>
                <div class="tab-pane" id="agendarent" role="tabpanel" aria-labelledby="agendarent-tab">
                    <h1>HOLA5</h1>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="<?=base_url()?>js/theme.js"></script>

<script type="text/javascript" src="<?=base_url()?>js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?=base_url()?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?=base_url()?>js/locales/bootstrap-datetimepicker.mS.js" charset="UTF-8"></script>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script> 

<?php

/* End of file masy_bodyreclutador_view.php */
/* Location: /views/masy_bodyreclutador_view.php */