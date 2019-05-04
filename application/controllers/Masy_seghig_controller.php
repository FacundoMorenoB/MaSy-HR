<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_seghig_controller extends MY_Controller {

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
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$idcurhig = $this->input->post("txtidcurhig1");
			$nomcurhig = $this->input->post("txtnomcurhig1");
			$direccioncurhig = $this->input->post("txtDireccioncurhig");
			$areacurhig = $this->input->post("txtAreacurhig");
			$fechainicurhig = $this->input->post("txtfechainicurhig");
			$fechafincurhig = $this->input->post("txtfechafincurhig");
			$mancurhig = $this->input->post("filemancurhig1");
			$aufecha = mdate('%y-%m-%d %h:%i', time());
			if ($idcurhig == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"aproceso" => $nomcurhig,
				"iddireccionemp" => $direccioncurhig,
				"idgsareasdireccion" => $areacurhig,
				"afechainicio" => $fechainicurhig,
				"afechafin" => $fechafincurhig,
				"amanualproceso" => $mancurhig,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
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
			$buscar = $this->input->post("txtbuscarcurhig");
			$datos = $this->masy_seghig_model->mostrar_curhig($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function mostrar_dirgen(){
		if ($this->input->is_ajax_request()) {
			$datos = $this->masy_seghig_model->mostrar_dirgen();
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function mostrar_dir(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtDireccioncurhig");
			$datos = $this->masy_seghig_model->mostrar_dir($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_curhig(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcurhig1");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			$autipomovimiento = 3;
			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }
			$datos = array(
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
			);
			if($this->masy_seghig_model->eliminar_curhig($id,$datos) == true){
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
			$id = $this->input->post("txtidcurhig1");
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



	//SECCION DE NUEVO MEDICAMENTO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_actualizar_nue_med(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$idmedicamentos = $this->input->post("txtidmedicamento");
			$adescripcionmedicamento = $this->input->post("txtnomnedicamento");
			$ncosto = $this->input->post("txtcostmedicamento");
			$aubicaci = $this->input->post("txtubimedicamento");

			$aufecha = mdate('%y-%m-%d %h:%i', time());
			if ($idmedicamentos == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"adescripcionmedicamento" => $adescripcionmedicamento,
				"ncosto" => $ncosto,
				"aubicaci" => $aubicaci,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);
			if ($idmedicamentos == '') {
				$r = $this->masy_seghig_model->guardar_nue_med($datos);
				redirect("masy_login_controller/security");
			}
			else{
				$this->masy_seghig_model->actualizar_nue_med($idmedicamentos,$datos);
				redirect("masy_login_controller/security");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}

	}

	function mostrar_nue_med(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarmedicamento");
			$datos = $this->masy_seghig_model->mostrar_nue_med($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_med(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidmedicamento");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			$autipomovimiento = 3;
			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }
			$datos = array(
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
			);
			if($this->masy_seghig_model->eliminar_nue_med($id,$datos) == true){
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

	function buscar_nue_med(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidmedicamento");
			$datos = $this->masy_seghig_model->buscar_nue_med($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	//SECCION DE NUEVO MEDICO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_actualizar_nue_medico(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$idmedico = $this->input->post("txtidmedico");
			$user_id = $this->input->post("txtnommedico");
			$aespecialidad = $this->input->post("txtespmedico");

			$aufecha = mdate('%y-%m-%d %h:%i', time());
			if ($idmedico == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"user_id" => $user_id,
				"aespecialidad" => $aespecialidad,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);
			if ($idmedico == '') {
				$r = $this->masy_seghig_model->guardar_nue_medico($datos);
				redirect("masy_login_controller/security");
			}
			else{
				$this->masy_seghig_model->actualizar_nue_medico($idmedico,$datos);
				redirect("masy_login_controller/security");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}

	}

	function mostrar_nue_medico(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarmedico");
			$datos = $this->masy_seghig_model->mostrar_nue_medico($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_medico(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidmedico");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			$autipomovimiento = 3;
			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }
			$datos = array(
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
			);
			if($this->masy_seghig_model->eliminar_nue_medico($id,$datos) == true){
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

	function buscar_nue_medico(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidmedico");
			$datos = $this->masy_seghig_model->buscar_nue_medico($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function mostrar_emp(){
		if ($this->input->is_ajax_request()) {
			$datos = $this->masy_seghig_model->mostrar_emp();
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}


	//SECCION DE NUEVO CONSULTORIO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_actualizar_nue_consul(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$idshconsultorios = $this->input->post("txtidconsul");
			$aoficinaconsultorio = $this->input->post("txtnomxonsul");
			$idmedico = $this->input->post("txtnommedicoasig");

			$aufecha = mdate('%y-%m-%d %h:%i', time());
			if ($idshconsultorios == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"aoficinaconsultorio" => $aoficinaconsultorio,
				"idmedico" => $idmedico,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);
			if ($idshconsultorios == '') {
				$r = $this->masy_seghig_model->guardar_nue_consul($datos);
				redirect("masy_login_controller/security");
			}
			else{
				$this->masy_seghig_model->actualizar_nue_consul($idshconsultorios,$datos);
				redirect("masy_login_controller/security");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}

	}

	function mostrar_nue_consul(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarconsul");
			$datos = $this->masy_seghig_model->mostrar_nue_consul($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_consul(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidconsul");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			$autipomovimiento = 3;
			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }
			$datos = array(
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
			);
			if($this->masy_seghig_model->eliminar_nue_consul($id,$datos) == true){
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

	function buscar_nue_consul(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidconsul");
			$datos = $this->masy_seghig_model->buscar_nue_consul($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function mostrar_med(){
		if ($this->input->is_ajax_request()) {
			$datos = $this->masy_seghig_model->mostrar_med();
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	//SECCION DE NUEVAS CITAS
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_actualizar_nue_cita(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$idcitasmedicas = $this->input->post("txtidcita");
			$idshconsultorios = $this->input->post("txtconsultoriocita");
			$user_id = $this->input->post("txtnomempcita");
			$afechaconsulta = $this->input->post("txtfechacita");
			$arecetamedica = $this->input->post("txtrecetacita");
			$recetamedica = $this->input->post("filerecetacita");


			$aufecha = mdate('%y-%m-%d %h:%i', time());
			if ($idcitasmedicas == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"idshconsultorios" => $idshconsultorios,
				"user_id" => $user_id,
				"afechaconsulta" => $afechaconsulta,
				"arecetamedica" => $arecetamedica,
				"recetamedica" => $recetamedica,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);
			if ($idcitasmedicas == '') {
				$r = $this->masy_seghig_model->guardar_nue_cita($datos);
				redirect("masy_login_controller/security");
			}
			else{
				$this->masy_seghig_model->actualizar_nue_cita($idcitasmedicas,$datos);
				redirect("masy_login_controller/security");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}

	}

	function mostrar_nue_cita(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarcita");
			$datos = $this->masy_seghig_model->mostrar_nue_cita($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_cita(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcita");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			$autipomovimiento = 3;
			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }
			$datos = array(
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
			);
			if($this->masy_seghig_model->eliminar_nue_cita($id,$datos) == true){
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

	function buscar_nue_cita(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtconsultoriocita");
			$datos = $this->masy_seghig_model->buscar_nue_cita($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function buscar_nue_cita2(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcita");
			$datos = $this->masy_seghig_model->buscar_nue_cita2($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}


	function mostrar_consul(){
		if ($this->input->is_ajax_request()) {
			$datos = $this->masy_seghig_model->mostrar_consul();
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

}

