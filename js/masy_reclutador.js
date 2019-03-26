$( document ).ready(function() {
	// Handler for .ready() called.
	mostrarDatos("");
	$("#txtbuscarvac").keyup(function(){
		txtbuscarvac = $("#txtbuscarvac").val();
		mostrarDatos(txtbuscarvac);
	});
  	$("#btnbuscarvac").click(function(){
		mostrarDatos("");
	});
	$("#btnactualizar").click(actualizar);
	$("#btnlimpiarvac").click(limpiar);
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

function actualizar(){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/guardar_actualizar_vac",
		type:"POST",
		data:$("#form-actualizar").serialize(),
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

function limpiar(){
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