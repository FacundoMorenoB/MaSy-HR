<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_cursos_controller extends MY_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("masy_cursos_model");
	    $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('form_validation');
	}

	//SECCION DE NUEVO CURSO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************


	function guardar_actualizar_nue_cur(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcur1");
			$nomcurso = $this->input->post("txtnombrecur1");
			$tipocurso = $this->input->post("txttipocur1");
			$dircurso = $this->input->post("txtdireccioncur1");
			$contcurso = $this->input->post("txtarecontenidocur1");
			$imagecurso = $this->input->post("fileimagencur1");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			if ($id == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"anombrecurso" => $nomcurso,
				"atipocurso" => $tipocurso,
				"idgsdireccion" => $dircurso,
				"acontenido" => $contcurso,
				"aimgfolleto" => $imagecurso,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);

			if ($id == '') {
				$r = $this->masy_cursos_model->guardar_cur($datos);
				redirect("masy_login_controller/recruiter");
			}
			else{
				$this->masy_cursos_model->actualizar_cur($id,$datos);
				redirect("masy_login_controller/recruiter");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar_nue_cur(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarcur");
			$datos = $this->masy_cursos_model->mostrar_cur($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_nue_cur(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcur1");
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
			if($this->masy_cursos_model->eliminar_cur($id,$datos) == true){
				redirect("masy_login_controller/recruiter");				
			}
			else{
				redirect("masy_login_controller/recruiter");
			
			}
		}
		else
		{
			show_404();
		}
	}

	function buscar_nue_cur(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcur1");
			$datos = $this->masy_cursos_model->buscar_cur($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	public function pdf_nue_cur(){
		$mpdf = new \mpdf\mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->writehtml($html);
        $mpdf->output(); // opens in browser
        //$mpdf->output('arjun.pdf','d'); // it downloads the file into the user system, with give name
	}

	//seccion de calendarizar curso
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************


	function guardar_actualizar_cur_cal(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcurcal1");
			$curso = $this->input->post("selcursocal1");
			$fechaini = $this->input->post("txtfechainicurcal1");
			$fechafin = $this->input->post("txtfechafincurcal1");
			$capacitador = $this->input->post("txtcapacitadorcurcal1");
			$comentarios = $this->input->post("txtarecomentarioscurcal1");
			$clavecurso = $this->input->post("txtclavecurcal1");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			if ($id == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }


			$datos = array(
				"idcursoind" => $curso,
				"afechainicio" => $fechaini,
				"afechafin" => $fechafin,
				"acomentarios" => $comentarios,
				"aclavecurso" => $clavecurso,
				"idcapacitadores" => $capacitador,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);

			if ($id == '') {
				$r = $this->masy_cursos_model->guardar_cur_cal($datos);
				redirect("masy_login_controller/recruiter");
			}
			else{
				$this->masy_cursos_model->actualizar_cur_cal($id,$datos);
				redirect("masy_login_controller/recruiter");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar_cur_cal(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarcalcur");
			$datos = $this->masy_cursos_model->mostrar_cur_cal($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_cur_cal(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcurcal1");
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
			if($this->masy_cursos_model->eliminar_cur_cal($id,$datos) == true){
				redirect("masy_login_controller/recruiter");				
			}
			else{
				redirect("masy_login_controller/recruiter");
			
			}
		}
		else
		{
			show_404();
		}
	}

	function buscar_cur_cal(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcurcal1");
			$datos = $this->masy_cursos_model->buscar_cur_cal($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	public function pdf_cur_cal(){
		$mpdf = new \mpdf\mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->writehtml($html);
        $mpdf->output(); // opens in browser
        //$mpdf->output('arjun.pdf','d'); // it downloads the file into the user system, with give name
	}


	//seccion de signacion curso
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************


	function guardar_actualizar_cur_asig(){
		//el metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo ajax 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidasigcal1");
			$calveemp = $this->input->post("txtclaveempcurasig1");
			$clavecur = $this->input->post("selclavecurasig1");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			if ($id == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }

			$datos = array(
				"user_id" => $calveemp,
				"idmicalendariocursos" => $clavecur,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario,
			);

			if ($id == '') {
				$r = $this->masy_cursos_model->guardar_cur_asig($datos);
				redirect("masy_login_controller/recruiter");
			}
			else{
				$this->masy_cursos_model->actualizar_cur_asig($id,$datos);
				redirect("masy_login_controller/recruiter");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar_cur_asig(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarcurasig");
			$datos = $this->masy_cursos_model->mostrar_cur_asig($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_cur_asig(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidasigcal1");
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
			if($this->masy_cursos_model->eliminar_cur_asig($id,$datos) == true){
				redirect("masy_login_controller/recruiter");				
			}
			else{
				redirect("masy_login_controller/recruiter");
			
			}
		}
		else
		{
			show_404();
		}
	}

	function buscar_cur_asig(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidasigcal1");
			$datos = $this->masy_cursos_model->buscar_cur_asig($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	public function pdf_cur_asig(){
		$mpdf = new \mpdf\mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->writehtml($html);
        $mpdf->output(); // opens in browser
        //$mpdf->output('arjun.pdf','d'); // it downloads the file into the user system, with give name
	}

	//seccion de asignar curso
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	
	function mostrar_dir_cur(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtdireccioncur1");
			$datos = $this->masy_cursos_model->mostrar_dir_cur($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}


	function mostrar_emp_capa(){
		if ($this->input->is_ajax_request()) {
			$datos = $this->masy_cursos_model->mostrar_emp_capa();
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function buscar_cur_asig_list(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidasigfecid1");
			$datos = $this->masy_cursos_model->buscar_cur_asig_list($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

}

