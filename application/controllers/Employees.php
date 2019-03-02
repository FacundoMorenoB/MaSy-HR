<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("employees_model");
	    $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('form_validation');
	}

	function guardar(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {
			$nombre = $this->input->post("nombre");
			$apaterno = $this->input->post("aPaterno");
			$amaterno = $this->input->post("aMaterno");
			$fechanacimiento = $this->input->post("fechaNacimiento");
			$estado = $this->input->post("estado");

			$datos = array(
				"nombre" => $nombre,
				"apaterno" => $apaterno,
				"amaterno" => $amaterno,
				"fechanacimiento" => $fechanacimiento,
				"estado" => $estado
				);
			if($this->employees_model->guardar($datos)==true)
				echo "Registro Guardado";
			else
				echo "No se pudo guardar los datos";
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
			$datos = $this->employees_model->mostrar($buscar);
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
			if($this->employees_model->actualizar($curp,$datos) == true)
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
			if($this->employees_model->eliminar($curp) == true)
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

