$( document ).ready(function() {
	// Handler for .ready() called.
	mostrarDatos("");
	$("#txtbuscarvac").keyup(function(){
		buscar = $("#txtbuscarvac").val();
		mostrarDatos(buscar);
	});
  	$("#btnbuscarvac").click(function(){
		mostrarDatos("");
	});
});

function mostrarDatos(valor){
	$.ajax({
		url:"http://localhost/MaSy-HR/index.php/masy_reclutador_controller/mostrar",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="";

			for (var i = 0; i < registros.length; i++) {
				var num = Math.floor((Math.random() * (7-1))+1);
				html +="<div class=\"col-md-6 col-lg-4\">";
                html +="<div class=\"card border-0\"><a href=\"#formactualizarvac\"><img src=\"http://localhost/MaSy-HR/img/nature/image"+num+".jpg\" alt=\"Card Image\" class=\"card-img-top scale-on-hover\"></a>";
                html +="<div class=\"card-body\">";
				html +="<h6>"+registros[i]["ANOMBREPERFILPUESTO"]+"</h6>";
				html +="<p class=\"text-muted card-text\">"+registros[i]["AFUNESPECIFICAS"]+"</p>";
				html +="<a href='"+registros[i]["IDPERFILDEPUESTO"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>E</a> <button class='btn btn-danger' type='button' value='"+registros[i]["IDPERFILDEPUESTO"]+"'>X</button>";
				html +="</div></div></div>";
			};
			//alert(html);
			$("#blklistavac").html(html);
		}
	});
}