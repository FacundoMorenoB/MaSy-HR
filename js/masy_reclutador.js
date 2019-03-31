$( document ).ready(function() {
	// Handler for .ready() called.
	mostrarDatos("");
	mostrarDatos_emp("");
	mostrarDatos_nue_cur("");
	mostrarDatos_cal_cur("");
	mostrarDatos_asig_cur("");
	mostrarDatos_cal_cur_list("");
	mostrarDatos_asig_cur_list("");
	mostrarDatos_dir_cur("");
	mostrarDatos_emp_capa_cur_list("");
	mostrarDatos_cal_asig_list("");

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
	$("#txtbuscarcurasig").keyup(function(){
		txtbuscarcurasig = $("#txtbuscarcurasig").val();
		mostrarDatos_asig_cur(txtbuscarcurasig);
	});



  	$("#btnbuscarvac").click(function(){
		mostrarDatos("");
		$("#txtbuscarvac").val("");
	});
	$("#btnbuscarcur").click(function(){
		mostrarDatos_nue_cur("");
		$("#txtbuscarcur").val("");
	});
	$("#btnbuscarcalcur").click(function(){
		mostrarDatos_cal_cur("");
		$("#txtbuscarcalcur").val("");
	});
	$("#btnbuscarcurasig").click(function(){
		mostrarDatos_asig_cur("");
		$("#txtbuscarcurasig").val("");

	});

	$("#btnlimpiarvac").click(limpiarvac);
	$("#btnlimpiarcur").click(limpiarcur);
	$("#btnlimpiarcurcal").click(limpiarcurcal);
	$("#btnlimpiarcurasig").click(limpiarcurasig);
	$("#btnlimpiaremp").click(btnlimpiaremp);


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
				$("#txtidvac1").val(registros[0]["IDPERFILDEPUESTO"]);
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


	$("body").on("click","#list_nue_emp a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidemp1").val(valor);
		$.ajax({
			url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/buscar_emp",
			type:"POST",
			data:{txtidemp1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidemp1").val(registros[0]["IDGSPERSONAS"]);
				$("#txtnombreemp1").val(registros[0]["ANOMBREPERSONA"]);
				$("#txtapaternoemp1").val(registros[0]["APATERNO"]);
				$("#txtamaternoemp1").val(registros[0]["AMATERNO"]);
				$("#txtdireccionemp1").val(registros[0]["ADIRECCION"]);
				$("#txttelefonoemp1").val(registros[0]["ATELEFONO"]);
				$("#txtcurpemp1").val(registros[0]["ACURP"]);
				$("#txtrfcemp1").val(registros[0]["ARFC"]);
				$("#txtfechanacemp1").val(registros[0]["AFECHANACIMIENTO"]);
				$("#selciudademp1").val(registros[0]["NCIUDAD"]);
				$("#selestadoemp1").val(registros[0]["AESTADO"]);
				$("#selvacanteemp1").val(registros[0]["IDPERFILDEPUESTO"]);
				$("#txtfechaaltemp1").val(registros[0]["AUFECHAMOV"]);
				$("#filecvemp1").val(registros[0]["CVVTAE"]);
				$("#filecontratoemp1").val(registros[0]["CONTRATO"]);
				$("#fileexamenemp1").val(registros[0]["ADRESULTPSICO"]);
			}
		});

	});
	$("body").on("click","#list_nue_emp button",function(event){
		id = $(this).attr("value");
		eliminar_emp(id);
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
				$("#txtdireccioncur1").val(registros[0]["IDGSDIRECCION"]);
				$("#txtarecontenidocur1").val(registros[0]["ACONTENIDO"]);
				$("#fileimagencur1").val(registros[0]["AIMGFOLLETO"]);
			}
		});

	});
	$("body").on("click","#list_nue_cur button",function(event){
		id = $(this).attr("value");
		eliminar_nue_cur(id);
	});


	$("body").on("click","#selclavecurasig1 option",function(event){
		event.preventDefault();
		valor = $(this).attr("value");
		$("#txtidasigfecid1").val(valor);
		//alert(valor);
		$.ajax({
			url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/buscar_cur_asig_list",
			type:"POST",
			data:{txtidasigfecid1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtfechainicurasig1").val(registros[0]["AFECHAINICIO"]);
				$("#txtfechafincurasig1").val(registros[0]["AFECHAFIN"]);
			}
		});
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
				$("#txtcapacitadorcurcal1").val(registros[0]["IDCAPACITADORES"]);
				$("#txtarecomentarioscurcal1").val(registros[0]["ACOMENTARIOS"]);
				$("#txtclavecurcal1").val(registros[0]["ACLAVECURSO"]);
			}
		});

	});
	$("body").on("click","#list_cal_cur button",function(event){
		id = $(this).attr("value");
		eliminar_cur_cal(id);
	});

	$("body").on("click","#list_asig_cur a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		alert(valor);
		$("#txtidasigcal1").val(valor);
		$.ajax({
			url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/buscar_cur_asig",
			type:"POST",
			data:{txtidasigcal1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidasigcal1").val(registros[0]["IDMICURSOSXEMPL"]);
				$("#txtclaveempcurasig1").val(registros[0]["IDGSPERSONAS"]);
				$("#selclavecurasig1").val(registros[0]["IDMICALENDARIOCURSOS"]);
				$("#txtfechainicurasig1").val(registros[0]["AFECHAINICIO"]);
				$("#txtfechafincurasig1").val(registros[0]["AFECHAFIN"]);
			}
		});

	});
	$("body").on("click","#list_asig_cur button",function(event){
		id = $(this).attr("value");
		eliminar_cur_asig(id);
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
				html +="<a href='"+registros[i]["IDPERFILDEPUESTO"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["IDPERFILDEPUESTO"]+"'>Eliminar</button>";
				html +="</div></div></div>";
			};
			//alert(html);
			$("#blklistavac").html(html);
		}
	});
}

function mostrarDatos_emp(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/mostrar_emp",
		type:"POST",
		data:{txtbuscaremp:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
                
                
			for (var i = 0; i < registros.length; i++) {
				html +="<div class=\"col-md-6 col-lg-4\">";
				html +="<a href='"+registros[i]["IDGSPERSONAS"]+"'><div class=\"avatar\" style=\"background-image:url(http://localhost/MaSy-HR/img/avatars/avatar.jpg);\"></div></a>"
                html +="<div class=\"card-body\">";
				html +="<p class=\"text-muted card-text\">"+registros[i]["ANOMBREPERSONA"]+" "+registros[i]["APATERNO"]+" "+registros[i]["AMATERNO"]+"</p>";
				html +="<a href='"+registros[i]["IDGSPERSONAS"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["IDGSPERSONAS"]+"'>Eliminar</button>";
				html +="</div></div>";
			};
			//alert(html);
			$("#list_nue_emp").html(html);
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
				html +="<tr><th scope=\"row\">"+registros[i]["ANOMBRECURSO"]+"</th><td>"+registros[i]["ANOMBREDIRECCION"]+"</td><td>"+registros[i]["ATIPOCURSO"]+"</td><td>"+registros[i]["AIMGFOLLETO"]+"</td>"
				html +="<td><a href='"+registros[i]["IDCURSOIND"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["IDCURSOIND"]+"'>Eliminar</button></td></tr>";
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
				html +="<tr><th scope=\"row\">"+registros[i]["ANOMBRECURSO"]+"</th><td>"+registros[i]["AFECHAINICIO"]+"</td><td>"+registros[i]["AFECHAFIN"]+"</td><td>"+registros[i]["ANOMBREPERSONA"]+" "+registros[i]["APATERNO"]+" "+registros[i]["AMATERNO"]+"</td><td>"+registros[i]["ACLAVECURSO"]+"</td>"
				html +="<td><a href='"+registros[i]["IDMICALENDARCURSO"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["IDMICALENDARCURSO"]+"'>Eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_cal_cur").html(html);
		}
	});
}

function mostrarDatos_cal_cur_list(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_nue_cur",
		type:"POST",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["IDCURSOIND"]+">"+registros[i]["ANOMBRECURSO"]+"</option>";
			};
			//alert(html);
			$("#selcursocal1").html(html);
		}
	});
}

function mostrarDatos_cal_asig_list(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_cur_cal",
		type:"POST",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["IDMICALENDARCURSO"]+">"+registros[i]["ANOMBRECURSO"]+"</option>";
			};
			//alert(html);
			$("#selclavecurasig1").html(html);
		}
	});
}

function mostrarDatos_asig_cur_list(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/mostrar_emp",
		type:"POST",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["IDGSPERSONAS"]+">"+registros[i]["ANOMBREPERSONA"]+"</option>";
			};
			//alert(html);
			$("#txtclaveempcurasig1").html(html);
		}
	});
}

function mostrarDatos_emp_capa_cur_list(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_emp_capa",
		type:"POST",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["IDCAPACITADORES"]+">"+registros[i]["ANOMBREPERSONA"]+" "+registros[i]["APATERNO"]+" "+registros[i]["AMATERNO"]+"</option>";
			};
			//alert(html);
			$("#txtcapacitadorcurcal1").html(html);
		}
	});
}


function mostrarDatos_dir_cur(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_dir_cur",
		type:"POST",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["IDGSDIRECCION"]+">"+registros[i]["ANOMBREDIRECCION"]+"</option>";
			};
			//alert(html);
			$("#txtdireccioncur1").html(html);
		}
	});
}

function mostrarDatos_asig_cur(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/mostrar_cur_asig",
		type:"POST",
		data:{txtbuscarcurasig:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Empleado asignado</th>"
			html += "<th scope=\"col\">Curso asignado</th>"
			html += "<th scope=\"col\">Fecha de inicio</th>"
			html += "<th scope=\"col\">Fecha de fin</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["ANOMBREPERSONA"]+" "+registros[i]["APATERNO"]+" "+registros[i]["AMATERNO"]+"</th><td>"+registros[i]["ANOMBRECURSO"]+"</td><td>"+registros[i]["AFECHAINICIO"]+"</td><td>"+registros[i]["AFECHAFIN"]+"</td>"
				html +="<td><a href='"+registros[i]["IDMICURSOSXEMPL"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#myModal'>Editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["IDMICURSOSXEMPL"]+"'>Eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_asig_cur").html(html);
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

function eliminar_emp(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/eliminar_emp",
		type:"POST",
		data:{txtidemp1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrarDatos_emp("");
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

function eliminar_cur_cal(valor){
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

function eliminar_cur_asig(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_cursos_controller/eliminar_cur_asig",
		type:"POST",
		data:{txtidasigcal1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrarDatos_asig_cur("");
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


function btnlimpiaremp(){
	$("#txtnombreemp1").val("");
	$("#txtapaternoemp1").val("");
	$("#txtamaternoemp1").val("");
	$("#txtdireccionemp1").val("");
	$("#txttelefonoemp1").val("");
	$("#txtcurpemp1").val("");
	$("#txtrfcemp1").val("");
	$("#txtfechanacemp1").val("");
	$("#selciudademp1").val("");
	$("#selestadoemp1").val("");
	$("#selvacanteemp1").val("");
	$("#txtfechaaltemp1").val("");
	$("#filecvemp1").val("");
	$("#filecontratoemp1").val("");
	$("#fileexamenemp1").val("");
}