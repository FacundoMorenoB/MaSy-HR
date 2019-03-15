<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_reclutador_controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("masy_reclutador_model");
	    $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('form_validation');
	}

	function guardar_actualizar_vac(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidvac1");
			$nomprefil = $this->input->post("txtnomperfilvac1");
			$invimpacto = $this->input->post("txtnivimpactovac1");
			$nivvaluacion = $this->input->post("txtnivvaluacionvac1");
			$sldrango = $this->input->post("txtsldrangovac1");
			$sldofrecido = $this->input->post("txtsldofrecidovac1");
			$msnpuesto = $this->input->post("txtaremsnpuestovac1");
			$edad = $this->input->post("txtedadvac1");
			$sexo = $this->input->post("selsexovac1");
			$conpuesto = $this->input->post("textareconpuestovac1");
			$idioma = $this->input->post("txtidiomavac1");
			$proginforma = $this->input->post("txtproginformavac1");
			$habili = $this->input->post("textarehabilivac1");
			$direccion = $this->input->post("seldireccionvac1");
			$director = $this->input->post("seldirectorvac1");
			$funciones = $this->input->post("textarefuncionesvac1");
			
			$datos = array(
				"ANOMBREPERFILPUESTO" => $nomprefil,
				"ANIVELIMPACTO" => $invimpacto,
				"ANIVELEVALUACION" => $nivvaluacion,
				"ARANGOSUELDO" => $sldrango,
				"NSUELDO" => $sldofrecido,
				"AMISION" => $msnpuesto,
				"NRANGOEDAD" => $edad,
				"AGENERO" => $sexo,
				"ACONOCIMIENTOSTEC" => $conpuesto,
				"AIDIOMAS" => $idioma,
				"APROGRAMASINFO" => $proginforma,
				"AHABILIDADESPRF" => $habili,
				"AGERENCIAPERT" => $direccion,
				"APUESTOREPORTA" => $director,
				"AFUNESPECIFICAS" => $funciones
			);

			if ($id == '') {
				if($this->masy_reclutador_model->guardar($datos)==true){
					return JavaScript(alert("Perfil agregado"));
					redirect("masy_login_controller/recruiter");
				}
				else{
					return JavaScript(alert("No se pudo guardar el perfil"));
				}
			}
			else{
				if($this->masy_reclutador_model->actualizar($id,$datos)==true)
					return JavaScript(alert("Perfil actualizado"));
				else
					return JavaScript(alert("No se pudo actualizar el perfil"));
				}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar(){
		if (!$this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->masy_reclutador_model->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function actualizar(){
		if (!$this->input->is_ajax_request()) {
			$curp = $this->input->post("curpsele");
			$nombre = $this->input->post("nombresele");
			$apaterno = $this->input->post("apaternosele");
			$datos = array(
				"nombre" => $nombre,
				"apaterno" => $apaterno,
				);
			if($this->masy_reclutador_model->actualizar($curp,$datos) == true)
				echo "Registro Actualizado";
			else
				echo "No se pudo actualizar los datos";
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar(){
		if (!$this->input->is_ajax_request()) {
			$curp = $this->input->post("curpsele");
			if($this->masy_reclutador_model->eliminar($curp) == true)
				echo "Registro Eliminado";
			else
				echo "No se pudo eliminar los datos";
			
		}
		else
		{
			show_404();
		}
	}

}

