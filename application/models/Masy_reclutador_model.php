<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_reclutador_model extends CI_Model {
	
	//FUNCIONES PARA VACANTES
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	function guardar($data){
		$this->db->insert("gsperfilespuestos",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar($valor){
		$this->db->like("ANOMBREPERFILPUESTO",$valor);
		$consulta = $this->db->get("gsperfilespuestos");
		return $consulta->result();
	}

	function actualizar($id,$data){
		$this->db->where('IDPERFILDEPUESTO', $id);
		$this->db->update('gsperfilespuestos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar($id){
		$this->db->where('IDPERFILDEPUESTO', $id);
		$this->db->delete('gsperfilespuestos'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar($id){
		$this->db->where("IDPERFILDEPUESTO",$id);
		$consulta = $this->db->get("gsperfilespuestos");
		return $consulta->result();
	}



	//FUNCIONES PARA EMPLEADOS
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	
	function guardar_emp($data){
		$this->db->insert("gspersonas",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar_emp($valor){
		$this->db->like("ANOMBREPERSONA",$valor);
		$consulta = $this->db->get("gspersonas");
		return $consulta->result();
	}

	function actualizar_emp($id,$data){
		$this->db->where('IDGSPERSONAS', $id);
		$this->db->update('gspersonas', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_emp($id){
		$this->db->where('IDGSPERSONAS', $id);
		$this->db->delete('gspersonas'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_emp($id){
		$this->db->where("IDGSPERSONAS",$id);
		$consulta = $this->db->get("gspersonas");
		return $consulta->result();
	}

}