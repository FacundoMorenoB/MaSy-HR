$( document ).ready(function() {
	// handler for .ready() called.
	mostrardatos_dir("");
	mostrardatos_curhig("");
	mostrardatos_nue_med("");
	mostrardatos_nue_medico("");
	mostrardatos_emp("");
	mostrardatos_nue_consul("");
	mostrardatos_med("");
	mostrardatos_nue_cita("");
	mostrardatos_consul("");

	$("#txtbuscarcurhig").keyup(function(){
		txtbuscarcurhig = $("#txtbuscarcurhig").val();
		mostrardatos_curhig(txtbuscarcurhig);
	});
	$("#txtbuscarmedicamento").keyup(function(){
		txtbuscarmedicamento = $("#txtbuscarmedicamento").val();
		mostrardatos_nue_med(txtbuscarmedicamento);
	});
	$("#txtbuscarmedico").keyup(function(){
		txtbuscarmedico = $("#txtbuscarmedico").val();
		mostrardatos_nue_medico(txtbuscarmedico);
	});
	$("#txtbuscarconsul").keyup(function(){
		txtbuscarconsul = $("#txtbuscarconsul").val();
		mostrardatos_nue_consul(txtbuscarconsul);
	});
	$("#txtbuscarcita").keyup(function(){
		txtbuscarcita = $("#txtbuscarcita").val();
		mostrardatos_nue_cita(txtbuscarcita);
	});



	$("#btnbuscarcurhig").click(function(){
		mostrardatos_curhig("");
		$("#txtbuscarcurhig").val("");
	});
	$("#btnbuscarcurmedicamento").click(function(){
		mostrardatos_nue_med("");
		$("#txtbuscarmedicamento").val("");
	});
	$("#btnbuscarcurmedico").click(function(){
		mostrardatos_nue_medico("");
		$("#txtbuscarmedico").val("");
	});
	$("#btnbuscarconsul").click(function(){
		mostrardatos_nue_consul("");
		$("#txtbuscarconsul").val("");
	});
	$("#btnbuscarcita").click(function(){
		mostrardatos_nue_cita("");
		$("#txtbuscarcita").val("");
	});




	$("#btnlimpiarcurhig").click(btnlimpiarcurhig);
	$("#btnlimpiarmedicamento").click(btnlimpiarmedicamento);
	$("#btnlimpiarmedico").click(btnlimpiarmedico);
	$("#btnlimpiaconsul").click(btnlimpiaconsul);
	$("#btnlimpiarcita").click(btnlimpiarcita);


	$("body").on("click","#txtDireccioncurhig option",function(event){
		event.preventDefault();
		valor = $(this).attr("value");
		$("#txtDireccioncurhig").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_dir",
			type:"post",
			data:{txtDireccioncurhig:valor},
			success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idgsdireccion"]+">"+registros[i]["anombredireccion"]+"</option>";
			};
			//alert(html);
			$("#txtAreacurhig").html(html);
			}
		});

	});



	$("body").on("click","#blklisprco a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidcurhig1").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/buscar_nue_curhig",
			type:"post",
			data:{txtidcurhig1:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidcurhig1").val(registros[0]["idshprocesos"])
				$("#txtnomcurhig1").val(registros[0]["aproceso"])
				$("#txtDireccioncurhig").val(registros[0]["iddireccionemp"])
				$("#txtAreacurhig").val(registros[0]["idgsareasdireccion"])
				$("#txtfechainicurhig").val(registros[0]["afechainicio"])
				$("#txtfechafincurhig").val(registros[0]["afechafin"])
				$("#filemancurhig1").val(registros[0]["amanualproceso"])
			}
		});
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_dir",
			type:"post",
			data:{txtDireccioncurhig:valor},
			success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idgsdireccion"]+">"+registros[i]["anombredireccion"]+"</option>";
			};
			//alert(html);
			$("#txtAreacurhig").html(html);
			}
		});

	});
	$("body").on("click","#blklisprco button",function(event){
		id = $(this).attr("value");
		eliminar_curhig(id);
	});


	$("body").on("click","#tablamedicamentos a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidmedicamento").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/buscar_nue_med",
			type:"post",
			data:{txtidmedicamento:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidmedicamento").val(registros[0]["idmedicamentos"])
				$("#txtnomnedicamento").val(registros[0]["adescripcionmedicamento"])
				$("#txtcostmedicamento").val(registros[0]["ncosto"])
				$("#txtubimedicamento").val(registros[0]["aubicaci"])
				
			}
		});
	});
	$("body").on("click","#tablamedicamentos button",function(event){
		id = $(this).attr("value");
		eliminar_nue_med(id);
	});

	$("body").on("click","#tablamedicos a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidmedico").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/buscar_nue_medico",
			type:"post",
			data:{txtidmedico:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidmedico").val(registros[0]["idmedico"])
				$("#txtnommedico").val(registros[0]["user_id"])
				$("#txtespmedico").val(registros[0]["aespecialidad"])
				
			}
		});
	});
	$("body").on("click","#tablamedicos button",function(event){
		id = $(this).attr("value");
		eliminar_nue_medico(id);
	});

	$("body").on("click","#tablaconsultorios a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidconsul").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/buscar_nue_consul",
			type:"post",
			data:{txtidconsul:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidconsul").val(registros[0]["idshconsultorios"])
				$("#txtnomxonsul").val(registros[0]["aoficinaconsultorio"])
				$("#txtnommedicoasig").val(registros[0]["idmedico"])
				
			}
		});
	});
	$("body").on("click","#tablaconsultorios button",function(event){
		id = $(this).attr("value");
		eliminar_nue_consul(id);
	});


	$("body").on("click","#tablacitas a",function(event){
		event.preventDefault();
		valor = $(this).attr("href");
		$("#txtidcita").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/buscar_nue_cita2",
			type:"post",
			data:{txtidcita:valor},
			success:function(respuesta){
				//alert(respuesta);
				var registros = eval(respuesta);
				$("#txtidcita").val(registros[0]["idcitasmedicas"])
				$("#txtconsultoriocita").val(registros[0]["idshconsultorios"])
				$("#txtmedicoasigcita").val(registros[0]["anombrepersona"]+" "+registros[0]["apaterno"]+" "+registros[0]["amaterno"])
				$("#txtmediduser").val(registros[0]["user_id_med"])
				$("#txtnomempcita").val(registros[0]["user_id"])
				$("#txtfechacita").val(registros[0]["afechaconsulta"])
				$("#txtrecetacita").val(registros[0]["arecetamedica"])
				$("#filerecetacita").val(registros[0]["recetamedica"])

				
			}
		});
	});
	$("body").on("click","#tablacitas button",function(event){
		id = $(this).attr("value");
		eliminar_nue_cita(id);
	});

	$("body").on("click","#txtconsultoriocita option",function(event){
		event.preventDefault();
		valor = $(this).attr("value");
		$("#txtconsultoriocita").val(valor);
		$.ajax({
			url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/buscar_nue_cita",
			type:"post",
			data:{txtconsultoriocita:valor},
			success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			$("#txtmedicoasigcita").val(registros[0]["anombrepersona"]+" "+registros[0]["apaterno"]+" "+registros[0]["amaterno"])
			$("#txtmediduser").val(registros[0]["user_id"])
			}
		});

	});


});
//***********************************************************************
//***********************************************************************
//***********************************************************************
//Funciones Cursos
//***********************************************************************
//***********************************************************************
//***********************************************************************

function mostrardatos_dir(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_dirgen",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idgsdirdireccion"]+">"+registros[i]["anombredirdireccion"]+"</option>";
			};
			//alert(html);
			$("#txtDireccioncurhig").html(html);
		}
	});
}

function mostrardatos_curhig(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_nue_curhig",
		type:"post",
		data:{txtbuscarcurhig:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Nombre Proceso</th>"
			html += "<th scope=\"col\">Direccion</th>"
			html += "<th scope=\"col\">Fecha Inicio</th>"
			html += "<th scope=\"col\">Fecha Fin</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["aproceso"]+"</th><td>"+registros[i]["anombredireccion"]+"</td><td>"+registros[i]["afechainicio"]+"</td><td>"+registros[i]["afechafin"]+"</td>"
				html +="<td><a href='"+registros[i]["idshprocesos"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idshprocesos"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#blklisprco").html(html);
		}
	});
}


function eliminar_curhig(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/eliminar_nue_curhig",
		type:"post",
		data:{txtidcurhig1:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_curhig("");
		}
	});
}




function btnlimpiarcurhig(){
	$("#txtidcurhig1").val("")
	$("#txtnomcurhig1").val("")
	$("#txtDireccioncurhig").val("")
	$("#txtAreacurhig").val("")
	$("#txtfechainicurhig").val("")
	$("#txtfechafincurhig").val("")
	$("#filemancurhig1").val("")
}

//***********************************************************************
//***********************************************************************
//***********************************************************************
//Funciones medicamentos
//***********************************************************************
//***********************************************************************
//***********************************************************************

function mostrardatos_nue_med(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_nue_med",
		type:"post",
		data:{txtbuscarmedicamento:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Nombre Medicamento</th>"
			html += "<th scope=\"col\">Costo</th>"
			html += "<th scope=\"col\">Ubicacion</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["adescripcionmedicamento"]+"</th><td>"+registros[i]["ncosto"]+"</td><td>"+registros[i]["aubicaci"]+"</td>"
				html +="<td><a href='"+registros[i]["idmedicamentos"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idmedicamentos"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#tablamedicamentos").html(html);
		}
	});
}


function eliminar_nue_med(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/eliminar_nue_med",
		type:"post",
		data:{txtidmedicamento:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_nue_med("");
		}
	});
}




function btnlimpiarmedicamento(){
	$("#txtidmedicamento").val("")
	$("#txtnomnedicamento").val("")
	$("#txtcostmedicamento").val("")
	$("#txtubimedicamento").val("")
}

//***********************************************************************
//***********************************************************************
//***********************************************************************
//Funciones medicos
//***********************************************************************
//***********************************************************************
//***********************************************************************

function mostrardatos_emp(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_emp",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["user_id"]+">"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</option>";
			};
			//alert(html);
			$("#txtnommedico").html(html);
			$("#txtnomempcita").html(html);
		}
	});
}

function mostrardatos_nue_medico(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_nue_medico",
		type:"post",
		data:{txtbuscarmedico:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Nombre Medico</th>"
			html += "<th scope=\"col\">Especialidad</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</th><td>"+registros[i]["aespecialidad"]+"</td>"
				html +="<td><a href='"+registros[i]["idmedico"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idmedico"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#tablamedicos").html(html);
		}
	});
}


function eliminar_nue_medico(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/eliminar_nue_medico",
		type:"post",
		data:{txtidmedico:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_nue_medico("");
		}
	});
}


function btnlimpiarmedico(){
	$("#txtidmedico").val("")
	$("#txtnommedico").val("")
	$("#txtespmedico").val("")
}

//***********************************************************************
//***********************************************************************
//***********************************************************************
//Funciones cosultorios
//***********************************************************************
//***********************************************************************
//***********************************************************************

function mostrardatos_med(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_med",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idmedico"]+">"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</option>";
			};
			//alert(html);
			$("#txtnommedicoasig").html(html);
		}
	});
}

function mostrardatos_nue_consul(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_nue_consul",
		type:"post",
		data:{txtbuscarmedico:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Nombre Consultorio</th>"
			html += "<th scope=\"col\">Combre Medico Asignado</th>"
			html += "<th scope=\"col\">Acciones</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["aoficinaconsultorio"]+"</th><td>"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</td>"
				html +="<td><a href='"+registros[i]["idshconsultorios"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idshconsultorios"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#tablaconsultorios").html(html);
		}
	});
}


function eliminar_nue_consul(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/eliminar_nue_consul",
		type:"post",
		data:{txtidconsul:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_nue_consul("");
		}
	});
}


function btnlimpiaconsul(){
	$("#txtidconsul").val("")
	$("#txtnomxonsul").val("")
	$("#txtnommedicoasig").val("")
}

//***********************************************************************
//***********************************************************************
//***********************************************************************
//Funciones citas
//***********************************************************************
//***********************************************************************
//***********************************************************************

function mostrardatos_nue_cita(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_nue_cita",
		type:"post",
		data:{txtbuscarmedico:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class=\"table\">"
			html += "<thead class=\"thead-dark\">"
			html += "<tr>"
			html += "<th scope=\"col\">Consultorio Asignado</th>"
			html += "<th scope=\"col\">Nombre Empleado</th>"
			html += "<th scope=\"col\">Fecha Consulta</th>"
			html += "<th scope=\"col\">Acciones</th</th>"
			html += "</tr>"
			html += "</thead>"
			html += "<tbody>"


			for (var i = 0; i < registros.length; i++) {
				html +="<tr><th scope=\"row\">"+registros[i]["aoficinaconsultorio"]+"</th><td>"+registros[i]["anombrepersona"]+" "+registros[i]["apaterno"]+" "+registros[i]["amaterno"]+"</td><td>"+registros[i]["afechaconsulta"]+"</td>"
				html +="<td><a href='"+registros[i]["idcitasmedicas"]+"' class='btn btn-warning btn-block' data-toggle='modal' data-target='#mymodal'>editar</a> <button class='btn btn-danger btn-block' type='button' value='"+registros[i]["idcitasmedicas"]+"'>eliminar</button></td></tr>";
			};
			html +="</tbody></table>";
			//alert(html);
			$("#tablacitas").html(html);
		}
	});
}


function eliminar_nue_cita(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/eliminar_nue_cita",
		type:"post",
		data:{txtidcita:valor},
		success:function(respuesta){
			//alert(respuesta);
			mostrardatos_nue_cita("");
		}
	});
}


function btnlimpiarcita(){
	$("#txtidcita").val("")
	$("#txtconsultoriocita").val("")
	$("#txtmedicoasigcita").val("")
	$("#txtnomempcita").val("")
	$("#txtfechacita").val("")
	$("#txtrecetacita").val("")
	$("#filerecetacita").val("")

}

function mostrardatos_consul(valor){
	$.ajax({
		url:"http://masyhr.hopto.org/MaSy-HR/index.php/masy_seghig_controller/mostrar_consul",
		type:"post",
		data:{valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "";
			for (var i = 0; i < registros.length; i++) {
				html += "<option value="+registros[i]["idshconsultorios"]+">"+registros[i]["aoficinaconsultorio"]+"</option>";
			};
			//alert(html);
			$("#txtconsultoriocita").html(html);
		}
	});
}