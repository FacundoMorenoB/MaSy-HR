<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_cursos_controller extends CI_Controller {

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
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcur1");
			$nomcurso = $this->input->post("txtnombrecur1");
			$tipocurso = $this->input->post("txttipocur1");
			$dircurso = $this->input->post("txtdireccioncur1");
			$contcurso = $this->input->post("txtarecontenidocur1");
			$imagecurso = $this->input->post("fileimagencur1");


			$datos = array(
				"ANOMBRECURSO" => $nomcurso,
				"ATIPOCURSO" => $tipocurso,
				"IDGSDIRECCION" => $dircurso,
				"ACONTENIDO" => $contcurso,
				"AIMGFOLLETO" => $imagecurso,
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
			if($this->masy_cursos_model->eliminar_cur($id) == true){
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
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}

	//SECCION DE CALENDARIZAR CURSO
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************


	function guardar_actualizar_cur_cal(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidcurcal1");
			$curso = $this->input->post("selcursocal1");
			$fechaini = $this->input->post("txtfechainicurcal1");
			$fechafin = $this->input->post("txtfechafincurcal1");
			$capacitador = $this->input->post("txtcapacitadorcurcal1");
			$comentarios = $this->input->post("txtarecomentarioscurcal1");
			$clavecurso = $this->input->post("txtclavecurcal1");


			$datos = array(
				"IDCURSOIND" => $curso,
				"AFECHAINICIO" => $fechaini,
				"AFECHAFIN" => $fechafin,
				"ACOMENTARIOS" => $comentarios,
				"ACLAVECURSO" => $clavecurso,
				"IDCAPACITADORES" => $capacitador
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
			if($this->masy_cursos_model->eliminar_cur_cal($id) == true){
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
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}


	//SECCION DE SIGNACION CURSO
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************


	function guardar_actualizar_cur_asig(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidasigcal1");
			$calveemp = $this->input->post("txtclaveempcurasig1");
			$clavecur = $this->input->post("selclavecurasig1");

			$datos = array(
				"IDGSPERSONAS" => $calveemp,
				"IDMICALENDARIOCURSOS" => $clavecur
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
			if($this->masy_cursos_model->eliminar_cur_asig($id) == true){
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
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}

	//SECCION DE ASIGNAR CURSO
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

