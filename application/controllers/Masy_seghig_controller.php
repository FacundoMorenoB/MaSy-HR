<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_seghig_controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("masy_seghig_model");
	    $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('form_validation');
	}

	//SECCION DE NUEVO CURSO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************


	function guardar_actualizar_nue_curhig(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {

			$idcurhig = $this->input->post("txtidcurhig1");
			$nomcurhig = $this->input->post("txtnomcurhig1");
			$Direccioncurhig = $this->input->post("txtDireccioncurhig");
			$Areacurhig = $this->input->post("txtAreacurhig");
			$fechainicurhig = $this->input->post("txtfechainicurhig");
			$fechafincurhig = $this->input->post("txtfechafincurhig");
			$mancurhig = $this->input->post("filemancurhig1");


			$datos = array(
				"APROCESO" => $nomcurhig,
				"IDDIRECCIONEMP" => $Direccioncurhig,
				"IDGSAREASDIRECCION" => $Areacurhig,
				"AFECHAINICIO" => $fechainicurhig,
				"AFECHAFIN" => $fechafincurhig,
				"AMANUALPROCESO" => $mancurhig
			);

			if ($idcurhig == '') {
				$r = $this->masy_seghig_model->guardar_curhig($datos);
				redirect("masy_login_controller/security");
			}
			else{
				$this->masy_seghig_model->actualizar_curhig($idcurhig,$datos);
				redirect("masy_login_controller/security");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar_nue_curhig(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarcur");
			$datos = $this->masy_seghig_model->mostrar_curhig($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_curhig(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcur1");
			if($this->masy_seghig_model->eliminar_curhig($id) == true){
				redirect("masy_login_controller/security");				
			}
			else{
				redirect("masy_login_controller/security");
			
			}
		}
		else
		{
			show_404();
		}
	}

	function buscar_nue_curhig(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcur1");
			$datos = $this->masy_seghig_model->buscar_curhig($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	public function pdf_nue_curhig(){
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}

}

