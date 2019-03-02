<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("employees_model");
	}

	function guardar(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if ($this->input->is_ajax_request()) {
			$nombre = $this->input->post("nombre");
			$apaterno = $this->input->post("aPaterno");
			$amaterno = $this->input->post("aMaterno");
			$fechanacimento = $this->input->post("fechaNacimento");
			$estado = $this->input->post("estado");

			$datos = array(
				"nombre" => $nombre,
				"apaterno" => $apaterno,
				"dni_empleado" => $dni,
				"amaterno" => $amaterno,
				"fechanacimento" => $fechanacimento,
				"estado" => $estado
				);
			if($this->employees_model->guardar($datos)==true)
				echo "Registro Guardado";
			else
				echo "No se pudo guardar los datos";
		}
		else
		{
			echo "Error AJAX";
			show_404();
		}


	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
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
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("idsele");
			$nombres = $this->input->post("nombressele");
			$apellidos = $this->input->post("apellidossele");
			$dni = $this->input->post("dnisele");
			$telefono = $this->input->post("telefonosele");
			$email = $this->input->post("emailsele");
			$datos = array(
				"nombres_empleado" => $nombres,
				"apellidos_empleado" => $apellidos,
				"dni_empleado" => $dni,
				"telefono_empleado" => $telefono,
				"email_empleado" => $email
				);
			if($this->employees_model->actualizar($idsele,$datos) == true)
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
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			if($this->employees_model->eliminar($idsele) == true)
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

