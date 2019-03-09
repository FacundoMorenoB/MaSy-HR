<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="fechaNacimento"]'); //our date input has the name "date"
        var date2_input=$('input[name="fechaIngreso"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      date2_input.datepicker(options);
    });
</script>

<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown active"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link active">Perfiles</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="#home" class="dropdown-item" id="home-tab" data-toggle="tab">Alta perfiles</a><a role="presentation" href="#profile" class="dropdown-item" id="profile-tab" data-toggle="tab">Consulta perfiles</a></div>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Candidatos</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="#home2" class="dropdown-item" id="home2-tab" data-toggle="tab">Alta candidatos</a><a role="presentation" href="#profile2" class="dropdown-item" id="profile2-tab" data-toggle="tab">Consulta candidatos</a></div>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link">Empleados</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="#home3" class="dropdown-item" id="home3-tab" data-toggle="tab">Alta empleados</a><a role="presentation" href="#profile3" class="dropdown-item" id="profile3-tab" data-toggle="tab">Consulta Empleados</a></div>
                </li>
            </ul>
        </div>

    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container">
            <form  role="form" action="<?php echo site_url('employees/guardar');?>" method="POST" id="form_agregar">
            <div class="row">
            <div class="col col-lg-6">
            <div class="bootstrap-iso">
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="nombre">
            Nombre(s)
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="nombre" name="nombre" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="aPaterno">
            Primer apellido
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="aPaterno" name="aPaterno" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="aMaterno">
            Segundo apellido
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="aMaterno" name="aMaterno" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="fechaNacimento">
            Fecha de nacimiento
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-calendar">
            </i>
            </div>
            <input class="form-control" id="fechaNacimiento" name="fechaNacimento" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="estado">
            Estado
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="estado" name="estado" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="colonia">
            Colonia
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="colonia" name="colonia" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="codigoPostal">
            Codigo postal
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="codigoPostal" name="codigoPostal" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="calle">
            Direccion
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="calle" name="calle" type="text" placeholder="Calle No. Ext. No. Int" />
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="correoCorporativo">
            Correo corporativo
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-medium">
            </i>
            </div>
            <input class="form-control" id="correoCorporativo" name="correoCorporativo" type="text"/>
            </div>
            </div>

            </div>
            </div>
            <div class="col-lg-auto">
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="sexo">
            Sexo
            <span class="asteriskField">
            *
            </span>
            </label>
            <select class="select form-control" id="sexo" name="sexo">
            <option value="Hombre">
            Hombre
            </option>
            <option value="Mujer">
            Mujer
            </option>
            </select>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="imss">
            Numero de IMSS
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="imss" name="imss" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="ine">
            INE
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="ine" name="ine" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="curp">
            CURP
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="curp" name="curp" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="telefono">
            Telefono
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-phone">
            </i>
            </div>
            <input class="form-control" id="telefono" name="telefono" type="text"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="fechaIngreso">
            Fecha de ingreso
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-calendar">
            </i>
            </div>
            <input class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label " for="correo">
            Correo alternativo
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-medium">
            </i>
            </div>
            <input class="form-control" id="correo" name="correo" type="text"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="tipoempleado">
            Tipo de empleado
            <span class="asteriskField">
            *
            </span>
            </label>
            <select class="select form-control" id="tipoempleado" name="tipoempleado">
            <option value="user">
            Usuario
            </option>
            <option value="recluitmen">
            Reclutador
            </option>
            <option value="admin">
            Administrador
            </option>
            </select>
            </div>
            <div class="form-group btn-group" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-success active" id="agregar">Agregar</button>
            </div>
            </div>
            </div>
            </form>
        </div>
        </div>


        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
            <div class="row">
            <br>
            <div class="col-lg-6"></div>
            <div class="col-lg-3">
            <input type="text" class="form-control" id="buscar" placeholder="Buscar">
            </div>
            <div class="col-lg-3">
            <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
            </div>
            </div>
            <hr>
            <div class="row">
            <div id="listaEmpleados" class="col-lg-8">

            </div>
            <div class="col-lg-4">
            <div class="panel panel-default">
            <div class="panel-heading">Editar Empleado</div>
            <div class="panel-body">
            <form id="form-actualizar" class="form-horizontal" action="<?php echo base_url();?>employees/actualizar" method="post" role="form" style="padding:0 10px;">
            <div class="form-group">
            <label>Nombre:</label>
            <input type="hidden" id="curpsele" name="curpsele" value="">
            <input type="text" name="nombresele" id="nombresele" class="form-control">
            </div>
            <div class="form-group">
            <label>Apellido:</label>
            <input type="text" name="apaternosele" id="apaternosele" class="form-control">
            </div>
            <div class="form-group">
            <button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>

            </div>
            </form>

            </div>
            </div>

            </div>

            </div>
            </div>
        </div>


        <div class="tab-pane" id="home2" role="tabpanel" aria-labelledby="home2-tab">
        <div class="container">
            <form  role="form" action="<?php echo site_url('employees/guardar');?>" method="POST" id="form_agregar">
            <div class="row">
            <div class="col col-lg-6">
            <div class="bootstrap-iso">
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="nombre">
            Nombre(s)
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="nombre" name="nombre" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="aPaterno">
            Primer apellido
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="aPaterno" name="aPaterno" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="aMaterno">
            Segundo apellido
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="aMaterno" name="aMaterno" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="fechaNacimento">
            Fecha de nacimiento
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-calendar">
            </i>
            </div>
            <input class="form-control" id="fechaNacimiento" name="fechaNacimento" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="estado">
            Estado
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="estado" name="estado" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="colonia">
            Colonia
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="colonia" name="colonia" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="codigoPostal">
            Codigo postal
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="codigoPostal" name="codigoPostal" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="calle">
            Direccion
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="calle" name="calle" type="text" placeholder="Calle No. Ext. No. Int" />
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="correoCorporativo">
            Correo corporativo
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-medium">
            </i>
            </div>
            <input class="form-control" id="correoCorporativo" name="correoCorporativo" type="text"/>
            </div>
            </div>

            </div>
            </div>
            <div class="col-lg-auto">
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="sexo">
            Sexo
            <span class="asteriskField">
            *
            </span>
            </label>
            <select class="select form-control" id="sexo" name="sexo">
            <option value="Hombre">
            Hombre
            </option>
            <option value="Mujer">
            Mujer
            </option>
            </select>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="imss">
            Numero de IMSS
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="imss" name="imss" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="ine">
            INE
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="ine" name="ine" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="curp">
            CURP
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="curp" name="curp" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="telefono">
            Telefono
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-phone">
            </i>
            </div>
            <input class="form-control" id="telefono" name="telefono" type="text"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="fechaIngreso">
            Fecha de ingreso
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-calendar">
            </i>
            </div>
            <input class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label " for="correo">
            Correo alternativo
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-medium">
            </i>
            </div>
            <input class="form-control" id="correo" name="correo" type="text"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="tipoempleado">
            Tipo de empleado
            <span class="asteriskField">
            *
            </span>
            </label>
            <select class="select form-control" id="tipoempleado" name="tipoempleado">
            <option value="user">
            Usuario
            </option>
            <option value="recluitmen">
            Reclutador
            </option>
            <option value="admin">
            Administrador
            </option>
            </select>
            </div>
            <div class="form-group btn-group" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-success active" id="agregar">Agregar</button>
            </div>
            </div>
            </div>
            </form>
        </div>
        </div>


        <div class="tab-pane" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
            <div class="container">
            <div class="row">
            <br>
            <div class="col-lg-6"></div>
            <div class="col-lg-3">
            <input type="text" class="form-control" id="buscar" placeholder="Buscar">
            </div>
            <div class="col-lg-3">
            <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
            </div>
            </div>
            <hr>
            <div class="row">
            <div id="listaEmpleados" class="col-lg-8">

            </div>
            <div class="col-lg-4">
            <div class="panel panel-default">
            <div class="panel-heading">Editar Empleado</div>
            <div class="panel-body">
            <form id="form-actualizar" class="form-horizontal" action="<?php echo base_url();?>employees/actualizar" method="post" role="form" style="padding:0 10px;">
            <div class="form-group">
            <label>Nombre:</label>
            <input type="hidden" id="curpsele" name="curpsele" value="">
            <input type="text" name="nombresele" id="nombresele" class="form-control">
            </div>
            <div class="form-group">
            <label>Apellido:</label>
            <input type="text" name="apaternosele" id="apaternosele" class="form-control">
            </div>
            <div class="form-group">
            <button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>

            </div>
            </form>

            </div>
            </div>

            </div>

            </div>
            </div>
        </div>


        <div class="tab-pane" id="home3" role="tabpanel" aria-labelledby="home3-tab">
        <div class="container">
            <form  role="form" action="<?php echo site_url('employees/guardar');?>" method="POST" id="form_agregar">
            <div class="row">
            <div class="col col-lg-6">
            <div class="bootstrap-iso">
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="nombre">
            Nombre(s)
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="nombre" name="nombre" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="aPaterno">
            Primer apellido
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="aPaterno" name="aPaterno" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="aMaterno">
            Segundo apellido
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="aMaterno" name="aMaterno" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="fechaNacimento">
            Fecha de nacimiento
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-calendar">
            </i>
            </div>
            <input class="form-control" id="fechaNacimiento" name="fechaNacimento" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="estado">
            Estado
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="estado" name="estado" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="colonia">
            Colonia
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="colonia" name="colonia" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="codigoPostal">
            Codigo postal
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="codigoPostal" name="codigoPostal" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="calle">
            Direccion
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="calle" name="calle" type="text" placeholder="Calle No. Ext. No. Int" />
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="correoCorporativo">
            Correo corporativo
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-medium">
            </i>
            </div>
            <input class="form-control" id="correoCorporativo" name="correoCorporativo" type="text"/>
            </div>
            </div>

            </div>
            </div>
            <div class="col-lg-auto">
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="sexo">
            Sexo
            <span class="asteriskField">
            *
            </span>
            </label>
            <select class="select form-control" id="sexo" name="sexo">
            <option value="Hombre">
            Hombre
            </option>
            <option value="Mujer">
            Mujer
            </option>
            </select>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="imss">
            Numero de IMSS
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="imss" name="imss" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="ine">
            INE
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="ine" name="ine" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="curp">
            CURP
            <span class="asteriskField">
            *
            </span>
            </label>
            <input class="form-control" id="curp" name="curp" type="text"/>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="telefono">
            Telefono
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-phone">
            </i>
            </div>
            <input class="form-control" id="telefono" name="telefono" type="text"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="fechaIngreso">
            Fecha de ingreso
            <span class="asteriskField">
            *
            </span>
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-calendar">
            </i>
            </div>
            <input class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label " for="correo">
            Correo alternativo
            </label>
            <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-medium">
            </i>
            </div>
            <input class="form-control" id="correo" name="correo" type="text"/>
            </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="control-label requiredField" for="tipoempleado">
            Tipo de empleado
            <span class="asteriskField">
            *
            </span>
            </label>
            <select class="select form-control" id="tipoempleado" name="tipoempleado">
            <option value="user">
            Usuario
            </option>
            <option value="recluitmen">
            Reclutador
            </option>
            <option value="admin">
            Administrador
            </option>
            </select>
            </div>
            <div class="form-group btn-group" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-success active" id="agregar">Agregar</button>
            </div>
            </div>
            </div>
            </form>
        </div>
        </div>


        <div class="tab-pane" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
            <div class="container">
            <div class="row">
            <br>
            <div class="col-lg-6"></div>
            <div class="col-lg-3">
            <input type="text" class="form-control" id="buscar" placeholder="Buscar">
            </div>
            <div class="col-lg-3">
            <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
            </div>
            </div>
            <hr>
            <div class="row">
            <div id="listaEmpleados" class="col-lg-8">

            </div>
            <div class="col-lg-4">
            <div class="panel panel-default">
            <div class="panel-heading">Editar Empleado</div>
            <div class="panel-body">
            <form id="form-actualizar" class="form-horizontal" action="<?php echo base_url();?>employees/actualizar" method="post" role="form" style="padding:0 10px;">
            <div class="form-group">
            <label>Nombre:</label>
            <input type="hidden" id="curpsele" name="curpsele" value="">
            <input type="text" name="nombresele" id="nombresele" class="form-control">
            </div>
            <div class="form-group">
            <label>Apellido:</label>
            <input type="text" name="apaternosele" id="apaternosele" class="form-control">
            </div>
            <div class="form-group">
            <button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>

            </div>
            </form>

            </div>
            </div>

            </div>

            </div>
            </div>
        </div>
    </div>
    </section>
</main>

            


<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/employees.js"></script>
<?php

/* End of file page_header_home_recruitment.php */
/* Location: /community_auth/views/examples/page_header_home_recruitment.php */