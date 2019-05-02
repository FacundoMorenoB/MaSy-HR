$( document ).ready(function() {
	// handler for .ready() called.
	mostrardatos("");
	mostrardatos_emp("");
	mostrardatos_nue_cur("");
	mostrardatos_cal_cur("");
	mostrardatos_asig_cur("");
	mostrardatos_cal_cur_list("");
	mostrardatos_asig_cur_list("");
	mostrardatos_dir_cur("");
	mostrardatos_emp_capa_cur_list("");
	mostrardatos_cal_asig_list("");
	mostrardatos_perf_emp("");

	$("#txtbuscarvac").keyup(function(){
		txtbuscarvac = $("#txtbuscarvac").val();
		mostrardatos(txtbuscarvac);
	});
	$("#txtbuscarcur").keyup(function(){
		txtbuscarcur = $("#txtbuscarcur").val();
		mostrardatos_nue_cur(txtbuscarcur);
	});
	$("#txtbuscarcalcur").keyup(function(){
		txtbuscarcalcur = $("#txtbuscarcalcur").val();
		mostrardatos_cal_cur(txtbuscarcalcur);
	});
	$("#txtbuscarcurasig").keyup(function(){
		txtbuscarcurasig = $("#txtbuscarcurasig").val();
		mostrardatos_asig_cur(txtbuscarcurasig);
	});
	$("#txtbuscaremp").keyup(function(){
		txtbuscaremp = $("#txtbuscaremp").val();
		mostrardatos_emp(txtbuscaremp);
	});



  	$("#btnbuscarvac").click(function(){
		mostrardatos("");
		$("#txtbuscarvac").val("");
	});
	$("#btnbuscarcur").click(function(){
		mostrardatos_nue_cur("");
		$("#txtbuscarcur").val("");
	});
	$("#btnbuscarcalcur").click(function(){
		mostrardatos_cal_cur("");
		$("#txtbuscarcalcur").val("");
	});
	$("#btnbuscarcurasig").click(function(){
		mostrardatos_asig_cur("");
		$("#txtbuscarcurasig").val("");
	});
	$("#btnbuscaremp").click(function(){
		mostrardatos_emp("");
		$("#txtbuscaremp").val("");

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
				//alert(respuesta);
			}
		});
	});
	$("body").on("click","#blklistavac a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidvac1").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/buscar_vac",
			type:"post",
			data:{txtidvac1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidvac1").val(registros[0]["idperfildepuesto"]);
				$("#txtnomperfilvac1").val(registros[0]["anombreperfilpuesto"]);
				$("#txtnivimpactovac1").val(registros[0]["anivelimpacto"]);
				$("#txtnivvaluacionvac1").val(registros[0]["anivelevaluacion"]);
				$("#txtsldrangovac1").val(registros[0]["arangosueldo"]);
				$("#txtsldofrecidovac1").val(registros[0]["nsueldo"]);
				$("#txtaremsnpuestovac1").val(registros[0]["amision"]);
				$("#txtedadvac1").val(registros[0]["nrangoedad"]);
				$("#selsexovac1").val(registros[0]["agenero"]);
				$("#textareconpuestovac1").val(registros[0]["aconocimientostec"]);
				$("#txtidiomavac1").val(registros[0]["aidiomas"]);
				$("#txtproginformavac1").val(registros[0]["aprogramasinfo"]);
				$("#textarehabilivac1").val(registros[0]["ahabilidadesprf"]);
				$("#seldireccionvac1").val(registros[0]["agerenciapert"]);
				$("#seldirectorvac1").val(registros[0]["apuestoreporta"]);
				$("#textarefuncionesvac1").val(registros[0]["afunespecificas"]);
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
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/buscar_emp",
			type:"post",
			data:{txtidemp1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidemp1").val(registros[0]["user_id"]);
				$("#txtnombreemp1").val(registros[0]["anombrepersona"]);
				$("#txtapaternoemp1").val(registros[0]["apaterno"]);
				$("#txtamaternoemp1").val(registros[0]["amaterno"]);
				$("#txtdireccionemp1").val(registros[0]["adireccion"]);
				$("#txttelefonoemp1").val(registros[0]["atelefono"]);
				$("#txtcurpemp1").val(registros[0]["acurp"]);
				$("#txtrfcemp1").val(registros[0]["arfc"]);
				$("#txtfechanacemp1").val(registros[0]["afechanacimiento"]);
				$("#selciudademp1").val(registros[0]["nciudad"]);
				$("#selestadoemp1").val(registros[0]["aestado"]);
				$("#selvacanteemp1").val(registros[0]["idperfildepuesto"]);
				$("#txtfechaaltemp1").val(registros[0]["aufechamov"]);
				$("#filecvemp1").val(registros[0]["cvvtae"]);
				$("#filecontratoemp1").val(registros[0]["contrato"]);
				$("#fileexamenemp1").val(registros[0]["adresultpsico"]);
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
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/buscar_nue_cur",
			type:"post",
			data:{txtidcur1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidcur1").val(registros[0]["idcursoind"]);
				$("#txtnombrecur1").val(registros[0]["anombrecurso"]);
				$("#txttipocur1").val(registros[0]["atipocurso"]);
				$("#txtdireccioncur1").val(registros[0]["idgsdireccion"]);
				$("#txtarecontenidocur1").val(registros[0]["acontenido"]);
				$("#fileimagencur1").val(registros[0]["aimgfolleto"]);
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
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/buscar_cur_asig_list",
			type:"post",
			data:{txtidasigfecid1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidasigfecid1").val(registros[0]["idmicalendarcurso"]);
				$("#txtfechainicurasig1").val(registros[0]["afechainicio"]);
				$("#txtfechafincurasig1").val(registros[0]["afechafin"]);
			}
		});
	});


	$("body").on("click","#list_cal_cur a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidcurcal1").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/buscar_cur_cal",
			type:"post",
			data:{txtidcurcal1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidcurcal1").val(registros[0]["idmicalendarcurso"]);
				$("#selcursocal1").val(registros[0]["idcursoind"]);
				$("#txtfechainicurcal1").val(registros[0]["afechainicio"]);
				$("#txtfechafincurcal1").val(registros[0]["afechafin"]);
				$("#txtcapacitadorcurcal1").val(registros[0]["idcapacitadores"]);
				$("#txtarecomentarioscurcal1").val(registros[0]["acomentarios"]);
				$("#txtclavecurcal1").val(registros[0]["aclavecurso"]);
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
		//alert(valor);
		$("#txtidasigcal1").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/buscar_cur_asig",
			type:"post",
			data:{txtidasigcal1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidasigcal1").val(registros[0]["idmicursosxempl"]);
				$("#txtclaveempcurasig1").val(registros[0]["user_id"]);
				$("#selclavecurasig1").val(registros[0]["idmicalendariocursos"]);
				$("#txtfechainicurasig1").val(registros[0]["afechainicio"]);
				$("#txtfechafincurasig1").val(registros[0]["afechafin"]);
			}
		});

	});
	$("body").on("click","#list_asig_cur button",function(event){
		id = $(this).attr("value");
		eliminar_cur_asig(id);
	});

});

function mostrardatos(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/mostrar_vac",
		type:"post",
		data:{txtbuscarvac:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="";

			for (var i = 0; i < registros.length; i++) {
				var num = math.floor((math.random() * (7-1))+1);
				html +="<div class=\"col-md-6 col-lg-4\">";
                html +="<div class=\"card border-0\"><a href='"+registros[i]["idperfildepuesto"]+"'><img src=\"http://masyhr.hopto.org/MaSy-HR/img/nature/image"+num+".jpg\" alt=\"card image\" class=\"card-img-top scale-on-hover\"></a>";
                html +="<div class=\"card-body\">";
				html +="<h6>"+registros[i]["anombreperfilpuesto"]+"</h6>";
				html +="<p class=\"text-muted card-text\">"+registros[i]["afunespecificas"]+"</p>";
				html +="<a href='"+registros[i]["idperfildepuesto"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idperfildepuesto"]+"'>eliminar</button>";
				html +="</div></div></div>";
			};
			//alert(html);
			$("#blklistavac").html(html);
		}
	});
}

function mostrardatos_emp(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/mostrar_emp",
		type:"post",
		data:{txtbuscaremp:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
                
                
			for (var i = 0; i < registros.length; i++) {
				html +="<div class=\"col-md-6 col-lg-4\">";
				html +="<a href='"+registros[i]["user_id"]+"'><div class=\"avatar\" style=\"background-image:url(http://masyhr.hopto.org/MaSy-HR/img/avatars/avatar.jpg);\"></div></a>"
                html +="<div class=\"card-body\">";
				html +="<p class=\"text-muted card-text\">"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</p>";
				html +="<a href='"+registros[i]["user_id"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["user_id"]+"'>eliminar</button>";
				html +="</div></div>";
			};
			//alert(html);
			$("#list_nue_emp").html(html);
		}
	});
}

function mostrardatos_nue_cur(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_nue_cur",
		type:"post",
		data:{txtbuscarcur:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">nombre del curso</th>"
			html += "<th scope=\"col\">direccion</th>"
			html += "<th scope=\"col\">tipo de curso</th>"
			html += "<th scope=\"col\">imagen del curso</th>"
			html += "<th scope=\"col\">acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["anombrecurso"]+"</th><td>"+registros[i]["anombredireccion"]+"</td><td>"+registros[i]["atipocurso"]+"</td><td>"+registros[i]["aimgfolleto"]+"</td>"
				html +="<td><a href='"+registros[i]["idcursoind"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idcursoind"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_nue_cur").html(html);
		}
	});
}

function mostrardatos_cal_cur(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_cur_cal",
		type:"post",
		data:{txtbuscarcalcur:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">curso</th>"
			html += "<th scope=\"col\">fecha de inicio</th>"
			html += "<th scope=\"col\">fecha de fin</th>"
			html += "<th scope=\"col\">capacitador</th>"
			html += "<th scope=\"col\">clave del curso</th>"
			html += "<th scope=\"col\">acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["anombrecurso"]+"</th><td>"+registros[i]["afechainicio"]+"</td><td>"+registros[i]["afechafin"]+"</td><td>"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</td><td>"+registros[i]["aclavecurso"]+"</td>"
				html +="<td><a href='"+registros[i]["idmicalendarcurso"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idmicalendarcurso"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_cal_cur").html(html);
		}
	});
}

function mostrardatos_cal_cur_list(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_nue_cur",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idcursoind"]+">"+registros[i]["anombrecurso"]+"</option>";
			};
			//alert(html);
			$("#selcursocal1").html(html);
		}
	});
}

function mostrardatos_cal_asig_list(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_cur_cal",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idmicalendarcurso"]+">"+registros[i]["anombrecurso"]+"</option>";
			};
			//alert(html);
			$("#selclavecurasig1").html(html);
		}
	});
}

function mostrardatos_asig_cur_list(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/mostrar_emp",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["user_id"]+">"+registros[i]["anombrepersona"]+"</option>";
			};
			//alert(html);
			$("#txtclaveempcurasig1").html(html);
		}
	});
}

function mostrardatos_emp_capa_cur_list(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_emp_capa",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idcapacitadores"]+">"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</option>";
			};
			//alert(html);
			$("#txtcapacitadorcurcal1").html(html);
		}
	});
}


function mostrardatos_dir_cur(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_dir_cur",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idgsdireccion"]+">"+registros[i]["anombredireccion"]+"</option>";
			};
			//alert(html);
			$("#txtdireccioncur1").html(html);
		}
	});
}

function mostrardatos_asig_cur(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/mostrar_cur_asig",
		type:"post",
		data:{txtbuscarcurasig:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">empleado asignado</th>"
			html += "<th scope=\"col\">curso asignado</th>"
			html += "<th scope=\"col\">fecha de inicio</th>"
			html += "<th scope=\"col\">fecha de fin</th>"
			html += "<th scope=\"col\">acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</th><td>"+registros[i]["anombrecurso"]+"</td><td>"+registros[i]["afechainicio"]+"</td><td>"+registros[i]["afechafin"]+"</td>"
				html +="<td><a href='"+registros[i]["idmicursosxempl"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idmicursosxempl"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#list_asig_cur").html(html);
		}
	});
}

function actualizar(){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/guardar_actualizar_vac",
		type:"post",
		data:$("#form-formactualizarvac").serialize(),
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos("");
		}
	});
}

function actualizar_nue_cur(){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/guardar_actualizar_nue_cur",
		type:"post",
		data:$("#formactualizarnuecur").serialize(),
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos("");
		}
	});
}

function actualizar_cal_cur(){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/guardar_actualizar_cur_cal",
		type:"post",
		data:$("#formactualizarcalcur").serialize(),
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos("");
		}
	});
}

function eliminar(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/eliminar_vac",
		type:"post",
		data:{txtidvac1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos("");
		}
	});
}

function eliminar_emp(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/eliminar_emp",
		type:"post",
		data:{txtidemp1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_emp("");
		}
	});
}

function eliminar_nue_cur(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/eliminar_nue_cur",
		type:"post",
		data:{txtidcur1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_nue_cur("");
		}
	});
}

function eliminar_cur_cal(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/eliminar_cur_cal",
		type:"post",
		data:{txtidcurcal1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_cal_cur("");
		}
	});
}

function eliminar_cur_asig(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_cursos_controller/eliminar_cur_asig",
		type:"post",
		data:{txtidasigcal1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_asig_cur("");
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


//***********************************************************************************************************
//***********************************************************************************************************
//***********************************************************************************************************
//***********************************************************************************************************
// funciones empleados
//***********************************************************************************************************
//***********************************************************************************************************
//***********************************************************************************************************
//***********************************************************************************************************

function mostrardatos_perf_emp(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_reclutador_controller/mostrar_perf_emp",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idgspuestos"]+">"+registros[i]["anombrepuesto"]+"</option>";
			};
			//alert(html);
			$("#selvacanteemp1").html(html);
		}
	});
}