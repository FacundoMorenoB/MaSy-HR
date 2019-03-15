$(document).on("ready",inicio);

function inicio(){
	mostrarDatos("");
	$("#buscar").keyup(function(){
		buscar = $("#buscar").val();
		mostrarDatos(buscar);
	});
	$("#btnbuscarvac").click(function(){
		mostrarDatos("");
	});
	$("#btnactualizar").click(actualizar);
	$("form").submit(function (){
		console.log( $("form").attr("action") );
		console.log( $("form").attr("method") );
		console.log( $("form").serialize() );

		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form").serialize(),
			success:function(respuesta){
				alert(respuesta);
			}
		});
	});
	$("body").on("click","#listaEmpleados a",function(event){
		event.preventDefault();
		curpsele = $(this).attr("href");
		nombresele = $(this).parent().parent().children("td:eq(1)").text();
		apaternosele = $(this).parent().parent().children("td:eq(2)").text();

		$("#curpsele").val(curpsele);
		$("#nombresele").val(nombresele);
		$("#apaternosele").val(apaternosele);
	});
	$("body").on("click","#listaEmpleados button",function(event){
		curp = $(this).attr("value");
		eliminar(curp);
	});
}

function mostrarDatos(valor){
	$.ajax({
		url:"http://localhost/masy-hr/index.php/employees/mostrar",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class='table table-responsive table-bordered'><thead>";
 			html +="<tr><th>CURP</th><th>Nombre</th><th>Apellido Paterno</th><th>Accion</th></tr>";
			html +="</thead><tbody>";
			for (var i = 0; i < registros.length; i++) {
				html +="<tr><td>"+registros[i]["curp"]+"</td><td>"+registros[i]["nombre"]+"</td><td>"+registros[i]["apaterno"]+"</td><td><a href='"+registros[i]["curp"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>E</a> <button class='btn btn-danger' type='button' value='"+registros[i]["curp"]+"'>X</button></td></tr>";
			};
			html +="</tbody></table>";
			$("#listaEmpleados").html(html);
		}
	});
}

function actualizar(){
	$.ajax({
		url:"http://localhost/masy-hr/index.php/employees/actualizar",
		type:"POST",
		data:$("#form-actualizar").serialize(),
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}

function eliminar(curpsele){
	$.ajax({
		url:"http://localhost/masy-hr/index.php/employees/eliminar",
		type:"POST",
		data:{curpsele:curp},
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}

