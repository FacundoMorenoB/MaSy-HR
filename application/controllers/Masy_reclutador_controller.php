<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_reclutador_controller extends MY_Controller {

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
		//
		$this->load->helper('auth');		
		//$this->load->module('Auth_Controller');

		if (!$this->input->is_ajax_request()) {
			$id = $this->input->post("txtidvac1");
			$idgspuestos = $this->input->post("selnomperfilvac1");
			$agerenciapert = $this->input->post("seldireccionvac1");
			$apuestoreporta = $this->input->post("seldirectorvac1");
			$anivelimpacto = $this->input->post("txtnivimpactovac1");
			$anivelevaluacion = $this->input->post("txtnivvaluacionvac1");
			$arangosueldo = $this->input->post("txtsldrangovac1");
			$nsueldo = $this->input->post("txtsldofrecidovac1");
			$amision = $this->input->post("txtaremsnpuestovac1");
			$nrangoedad = $this->input->post("txtedadvac1");
			$agenero = $this->input->post("selsexovac1");
			$aescolaridad = $this->input->post("txtescolaridad");
			$aestatusescolaridad = $this->input->post("selstescol1");
			$aconocimientostec = $this->input->post("textareconpuestovac1");
			$aidiomas = $this->input->post("txtidiomavac1");
			$aprogramasinfo = $this->input->post("txtproginformavac1");
			$ahabilidadesprf  = $this->input->post("textarehabilivac1");
			$afunespecificas = $this->input->post("textarefuncionesvac1");
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
				"idgspuestos" => $idgspuestos,
				"agerenciapert" => $agerenciapert,
				"apuestoreporta" => $apuestoreporta,
				"anivelimpacto" => $anivelimpacto,
				"anivelevaluacion" => $anivelevaluacion,
				"arangosueldo" => $arangosueldo,
				"nsueldo" => $nsueldo,
				"amision" => $amision,
				"nrangoedad" => $nrangoedad,
				"agenero" => $agenero,
				"aescolaridad" => $aescolaridad,
				"aestatusescolaridad" => $aestatusescolaridad,
				"aconocimientostec" => $aconocimientostec,
				"aidiomas" => $aidiomas,
				"aprogramasinfo" => $aprogramasinfo,
				"ahabilidadesprf" => $ahabilidadesprf,
				"afunespecificas" => $afunespecificas,
				"aufecha" => $aufecha,
				"autipomovimiento" => $autipomovimiento,
				"auidusuario" => $auidusuario
			);

			//echo json_encode($datos);

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
			if($this->masy_reclutador_model->eliminar($id,$datos) == true){
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

	function mostrar_dirgen(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("seldireccionvac1");
			$datos = $this->masy_reclutador_model->mostrar_dirgen($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function mostrar_puesto(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("selnomperfilvac1");
			$datos = $this->masy_reclutador_model->mostrar_puesto($buscar);
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
			$idgspuestos = $this->input->post("selvacanteemp1");
			$ecvemp = $this->input->post("filecvemp1");
			$econtratoemp = $this->input->post("filecontratoemp1");
			$eexamenemp = $this->input->post("fileexamenemp1");
			$aufecha = mdate('%Y-%m-%d %h:%i', time());
			if ($idemp == '') {
				$autipomovimiento = 1;
			}
			else{
				$autipomovimiento = 2;
			}

			if($this->is_logged_in()) {
                        $auidusuario = $this->auth_user_id;
            }
            $username = $this->input->post("txtrfcemp1");
            $passwd = $this->input->post("txtcurpemp1");+'0';
            $email = $nombreemp . "." . $apaternoemp . "." . $amaternoemp . "@masy.hr.com";
            $auth_level = $this->input->post("sellevelemp1");

			$this->is_logged_in();

			// Load resources
			$this->load->helper('auth');
			$this->load->model('examples/examples_model');
			$this->load->model('examples/validation_callables');
			$this->load->library('form_validation');


				$datos = array(
					"anombrepersona" => $nombreemp,
					"apaterno" => $apaternoemp,
					"amaterno" => $amaternoemp,
					"adireccion" => $direccionemp,
					"atelefono" => $telefonoemp,
					"acurp" => $curpemp,
					"arfc" => $rfcemp,
					"afechanacimiento" => $fechanacemp,
					"nciudad" => $ciudademp,
					"aestado" => $estadoemp,
					"idgspuestos" => $idgspuestos,
					"cvvtae" => $ecvemp,
					"contrato" => $econtratoemp,
					"adresultpsico" => $eexamenemp,
					"aufecha" => $aufecha,
					"autipomovimiento" => $autipomovimiento,
					"auidusuario" => $auidusuario,
					"auth_level" =>$auth_level,
				);

				if ($idemp == '') {
					$datos['username'] = $username;
					$datos['email'] = $email;
					$datos['passwd']     = $this->authentication->hash_passwd($datos['passwd']);
					$datos['user_id']    = $this->examples_model->get_unused_id();
					$datos['created_at'] = date('Y-m-d H:i:s');
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
			if($this->masy_reclutador_model->eliminar_emp($id,$datos) == true){
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

	function mostrar_perf_emp(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("txtbuscaremp");
			$datos = $this->masy_reclutador_model->mostrar_perf_emp($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}
}

