$( document ).ready(function() {
	// Handler for .ready() called.
	mostrarDatos("");
	mostrarDatos_nue_cur("");
	mostrarDatos_cal_cur("");

	$("#txtbuscarvac").keyup(function(){
		txtbuscarvac = $("#txtbuscarvac").val();
		mostrarDatos(txtbuscarvac);
	});
	$("#txtbuscarcur").keyup(function(){
		txtbuscarcur = $("#txtbuscarcur").val();
		mostrarDatos_nue_cur(txtbuscarcur);
	});
	$("#txtbuscarcalcur").keyup(function(){
		txtbuscarcalcur = $("#txtbuscarcalcur").val();
		mostrarDatos_cal_cur(txtbuscarcalcur);
	});


  	$("#btnbuscarvac").click(function(){
		mostrarDatos("");
	});
	$("#btnbuscarcur").click(function(){
		mostrarDatos_nue_cur("");
	});
	$("#btnbuscarcalcur").click(function(){
		mostrarDatos_cal_cur("");
	});

	$("#btnlimpiarvac").click(limpiarvac);
	$("#btnlimpiarcur").click(limpiarcur);
	$("#btnlimpiarcurcal").click(limpiarcurcal);
	$("#btnlimpiarcurasig").click(limpiarcurasig);


	$("#btnactualizar").click(actualizar);
	$("#formactualizarvac").submit(function (){
		$.ajax({
			url:$("#formactualizarvac").attr("action"),
			type:$("#formactualizarvac").attr("method"),
			data:$("#formactualizarvac").serialize(),
			success:function(respuesta){
				alert(respuesta);
			}
		});
	});
	$("body").on("click","#blklistavac a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidvac1").val(valor);
		$.ajax({
			url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/buscar_vac",
			type:"POST",
			data:{txtidvac1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtnomperfilvac1").val(registros[0]["ANOMBREPERFILPUESTO"]);
				$("#txtnivimpactovac1").val(registros[0]["ANIVELIMPACTO"]);
				$("#txtnivvaluacionvac1").val(registros[0]["ANIVELEVALUACION"]);
				$("#txtsldrangovac1").val(registros[0]["ARANGOSUELDO"]);
				$("#txtsldofrecidovac1").val(registros[0]["NSUELDO"]);
				$("#txtaremsnpuestovac1").val(registros[0]["AMISION"]);
				$("#txtedadvac1").val(registros[0]["NRANGOEDAD"]);
				$("#selsexovac1").val(registros[0]["AGENERO"]);
				$("#textareconpuestovac1").val(registros[0]["ACONOCIMIENTOSTEC"]);
				$("#txtidiomavac1").val(registros[0]["AIDIOMAS"]);
				$("#txtproginformavac1").val(registros[0]["APROGRAMASINFO"]);
				$("#textarehabilivac1").val(registros[0]["AHABILIDADESPRF"]);
				$("#seldireccionvac1").val(registros[0]["AGERENCIAPERT"]);
				$("#seldirectorvac1").val(registros[0]["APUESTOREPORTA"]);
				$("#textarefuncionesvac1").val(registros[0]["AFUNESPECIFICAS"]);
			}
		});

	});
	$("body").on("click","#blklistavac button",function(event){
		id = $(this).attr("value");
		eliminar(id);
	});

	

	$("body").on("click","#list_nue_cur a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidcur1").val(valor);
		$.ajax({
			url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/buscar_nue_cur",
			type:"POST",
			data:{txtidcur1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidcur1").val(registros[0]["IDCURSOIND"]);
				$("#txtnombrecur1").val(registros[0]["ANOMBRECURSO"]);
				$("#txttipocur1").val(registros[0]["ATIPOCURSO"]);
				$("#txtdireccioncur1").val(registros[0]["ADIRECCIONCURSO"]);
				$("#txtarecontenidocur1").val(registros[0]["ACONTENIDO"]);
				$("#fileimagencur1").val(registros[0]["AIMGFOLLETO"]);
			}
		});

	});
	$("body").on("click","#list_nue_cur button",function(event){
		id = $(this).attr("value");
		eliminar_nue_cur(id);
	});


	$("body").on("click","#list_cal_cur a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidcurcal1").val(valor);
		$.ajax({
			url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/buscar_cur_cal",
			type:"POST",
			data:{txtidcurcal1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidcurcal1").val(registros[0]["IDMICALENDARCURSO"]);
				$("#selcursocal1").val(registros[0]["IDCURSOIND"]);
				$("#txtfechainicurcal1").val(registros[0]["AFECHAINICIO"]);
				$("#txtfechafincurcal1").val(registros[0]["AFECHAFIN"]);
				$("#txtcapacitadorcurcal1").val(registros[0]["CAPACITADOR"]);
				$("#txtarecomentarioscurcal1").val(registros[0]["ACOMENTARIOS"]);
				$("#txtclavecurcal1").val(registros[0]["ACLAVECURSO"]);
			}
		});

	});
	$("body").on("click","#list_cal_cur button",function(event){
		id = $(this).attr("value");
		eliminar_nue_cur(id);
	});
});

function mostrarDatos(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/mostrar_vac",
		type:"POST",
		data:{txtbuscarvac:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="";

			for (var i = 0; i < registros.length; i++) {
				var num = Math.floor((Math.random() * (7-1))+1);
				html +="<div class=\"col-md-6 col-lg-4\">";
                html +="<div class=\"card border-0\"><a href='"+registros[i]["IDPERFILDEPUESTO"]+"'><img src=\"http://localhost/MaSy-HR/img/nature/image"+num+".jpg\" alt=\"Card Image\" class=\"card-img-top scale-on-hover\"></a>";
                html +="<div class=\"card-body\">";
				html +="<h6>"+registros[i]["ANOMBREPERFILPUESTO"]+"</h6>";
				html +="<p class=\"text-muted card-text\">"+registros[i]["AFUNESPECIFICAS"]+"</p>";
				html +="<a href='"+registros[i]["IDPERFILDEPUESTO"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger' type='button' value='"+registros[i]["IDPERFILDEPUESTO"]+"'>Eliminar</button>";
				html +="</div></div></div>";
			};
			//alert(html);
			$("#blklistavac").html(html);
		}
	});
}

function mostrarDatos_nue_cur(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_nue_cur",
		type:"POST",
		data:{txtbuscarcur:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Nombre del Curso</th>"
			html += "<th scope=\"col\">Direccion</th>"
			html += "<th scope=\"col\">Tipo de Curso</th>"
			html += "<th scope=\"col\">Imagen del Curso</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["ANOMBRECURSO"]+"</th><td>"+registros[i]["ADIRECCIONCURSO"]+"</td><td>"+registros[i]["ATIPOCURSO"]+"</td><td>"+registros[i]["AIMGFOLLETO"]+"</td>"
				html +="<td><a href='"+registros[i]["IDCURSOIND"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger' type='button' value='"+registros[i]["IDCURSOIND"]+"'>Eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_nue_cur").html(html);
		}
	});
}

function mostrarDatos_cal_cur(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_cur_cal",
		type:"POST",
		data:{txtbuscarcalcur:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Curso</th>"
			html += "<th scope=\"col\">Fecha de inicio</th>"
			html += "<th scope=\"col\">Fecha de fin</th>"
			html += "<th scope=\"col\">Capacitador</th>"
			html += "<th scope=\"col\">Clave del curso</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["IDCURSOIND"]+"</th><td>"+registros[i]["AFECHAINICIO"]+"</td><td>"+registros[i]["AFECHAFIN"]+"</td><td>"+registros[i]["CAPACITADOR"]+"</td><td>"+registros[i]["ACLAVECURSO"]+"</td>"
				html +="<td><a href='"+registros[i]["IDMICALENDARCURSO"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger' type='button' value='"+registros[i]["IDMICALENDARCURSO"]+"'>Eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_cal_cur").html(html);
		}
	});
}

function actualizar(){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/guardar_actualizar_vac",
		type:"POST",
		data:$("#form-formactualizarvac").serialize(),
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}

function actualizar_nue_cur(){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/guardar_actualizar_nue_cur",
		type:"POST",
		data:$("#formactualizarnuecur").serialize(),
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}

function actualizar_cal_cur(){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/guardar_actualizar_cur_cal",
		type:"POST",
		data:$("#formactualizarcalcur").serialize(),
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}

function eliminar(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/eliminar_vac",
		type:"POST",
		data:{txtidvac1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrarDatos("");
		}
	});
}

function eliminar_nue_cur(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/eliminar_nue_cur",
		type:"POST",
		data:{txtidcur1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrarDatos_nue_cur("");
		}
	});
}

function eliminar_nue_cur(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/eliminar_cur_cal",
		type:"POST",
		data:{txtidcurcal1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrarDatos_cal_cur("");
		}
	});
}

function limpiarvac(){
	$("#txtnomperfilvac1").val("");
	$("#txtnivimpactovac1").val("");
	$("#txtnivvaluacionvac1").val("");
	$("#txtsldrangovac1").val("");
	$("#txtsldofrecidovac1").val("");
	$("#txtaremsnpuestovac1").val("");
	$("#txtedadvac1").val("");
	$("#selsexovac1").val("");
	$("#textareconpuestovac1").val("");
	$("#txtidiomavac1").val("");
	$("#txtproginformavac1").val("");
	$("#textarehabilivac1").val("");
	$("#seldireccionvac1").val("");
	$("#seldirectorvac1").val("");
	$("#textarefuncionesvac1").val("");
}

function limpiarcur(){
	$("#txtnombrecur1").val("");
	$("#txtdireccioncur1").val("");
	$("#txttipocur1").val("");
	$("#txtarecontenidocur1").val("");
	$("#fileimagencur1").val("");
}

function limpiarcurcal(){
	$("#txtfechainicurcal1").val("");
	$("#txtfechafincurcal1").val("");
	$("#txtcapacitadorcurcal1").val("");
	$("#txtcomentarioscurcal1").val("");
	$("#txtclavecurcal1").val("");
}

function limpiarcurasig(){
	$("#txtclaveempcurasig1").val("");
	$("#txtfechainicurasig1").val("");
	$("#txtfechafincurasig1").val("");
}