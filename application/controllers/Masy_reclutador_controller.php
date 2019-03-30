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

	//FUNCIONES PARA VACANTES
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************

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
				$r = $this->masy_reclutador_model->guardar($datos);
				redirect("masy_login_controller/recruiter");
			}
			else{
				$this->masy_reclutador_model->actualizar($id,$datos);
				redirect("masy_login_controller/recruiter");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar_vac(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscarvac");
			$datos = $this->masy_reclutador_model->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_vac(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidvac1");
			if($this->masy_reclutador_model->eliminar($id) == true){
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

	function buscar_vac(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidvac1");
			$datos = $this->masy_reclutador_model->buscar($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	public function pdf_vac(){
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('masy_bodyreclutador_vac_view',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}



	//FUNCIONES PARA EMPLEADOS
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	
	function guardar_actualizar_emp(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if (!$this->input->is_ajax_request()) {

			$idemp = $this->input->post("txtidemp1");
			$nombreemp = $this->input->post("txtnombreemp1");
			$apaternoemp = $this->input->post("txtapaternoemp1");
			$amaternoemp = $this->input->post("txtamaternoemp1");
			$direccionemp = $this->input->post("txtdireccionemp1");
			$telefonoemp = $this->input->post("txttelefonoemp1");
			$curpemp = $this->input->post("txtcurpemp1");
			$rfcemp = $this->input->post("txtrfcemp1");
			$fechanacemp = $this->input->post("txtfechanacemp1");
			$ciudademp = $this->input->post("selciudademp1");
			$estadoemp = $this->input->post("selestadoemp1");
			$vacanteemp = $this->input->post("selvacanteemp1");
			$fechaaltemp = $this->input->post("txtfechaaltemp1");
			$ecvemp = $this->input->post("filecvemp1");
			$econtratoemp = $this->input->post("filecontratoemp1");
			$eexamenemp = $this->input->post("fileexamenemp1");
			
			$datos = array(
				"ANOMBREPERSONA" => $nombreemp,
				"APATERNO" => $apaternoemp,
				"AMATERNO" => $amaternoemp,
				"ADIRECCION" => $direccionemp,
				"ATELEFONO" => $telefonoemp,
				"ACURP" => $curpemp,
				"ARFC" => $rfcemp,
				"AFECHANACIMIENTO" => $fechanacemp,
				"NCIUDAD" => "1",
				"AESTADO" => "1",
				"IDPERFILDEPUESTO" => $vacanteemp,
				"AUFECHAMOV" => $fechaaltemp,
				"CVVTAE" => $ecvemp,
				"CONTRATO" => $econtratoemp,
				"ADRESULTPSICO" => $eexamenemp
			);

			if ($idemp == '') {
				$r = $this->masy_reclutador_model->guardar_emp($datos);
				redirect("masy_login_controller/recruiter");
			}
			else{
				$this->masy_reclutador_model->actualizar_emp($idemp,$datos);
				redirect("masy_login_controller/recruiter");
			}
		}
		else
		{
			echo $this->input->is_ajax_request();
			show_404();
		}


	}

	function mostrar_emp(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscaremp");
			$datos = $this->masy_reclutador_model->mostrar_emp($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar_emp(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidemp1");
			if($this->masy_reclutador_model->eliminar_emp($id) == true){
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

	function buscar_emp(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post("txtidemp1");
			$datos = $this->masy_reclutador_model->buscar_emp($id);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}
}

