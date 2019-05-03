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
		$this->db->like("gspuestos.anombrepuesto",$valor);
		$this->db->from('gspuestos');
		$this->db->join('gsperfilespuestos', 'gspuestos.idgspuestos = gsperfilespuestos.idgspuestos');
		$this->db->where("gsperfilespuestos.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar($id,$data){
		$this->db->where('idperfildepuesto', $id);
		$this->db->update('gsperfilespuestos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar($id,$data){
		$this->db->where('idperfildepuesto', $id);
		$this->db->update('gsperfilespuestos', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar($id){
		$this->db->where("idperfildepuesto",$id);
		$consulta = $this->db->get("gsperfilespuestos");
		return $consulta->result();
	}

	function mostrar_dirgen($valor){
		$this->db->like("idgsdirdireccion",$valor);
		$consulta = $this->db->get("gsdirdireccionesgen");
		return $consulta->result();
	}

	function mostrar_puesto($valor){
		$this->db->like("idgspuestos",$valor);
		$consulta = $this->db->get("gspuestos");
		return $consulta->result();
	}



	//FUNCIONES PARA EMPLEADOS
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	//*******************************************************************************************************************************************
	
	function guardar_emp($data){
		$this->db->insert("users",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar_emp($valor){
		$this->db->like("anombrepersona",$valor);
		$this->db->where("user_id != 1637400287 and autipomovimiento != 3");
		$consulta = $this->db->get("users");
		return $consulta->result();
	}

	function actualizar_emp($id,$data){
		$this->db->where('user_id', $id);
		$this->db->update('users', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_emp($id, $data){
		$this->db->where('user_id', $id);
		$this->db->update('users', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_emp($id){
		$this->db->where("user_id",$id);
		$consulta = $this->db->get("users");
		return $consulta->result();
	}

	function mostrar_perf_emp($valor){
		$this->db->like("anombrepuesto",$valor);
		$consulta = $this->db->get("gspuestos");
		return $consulta->result();
	}

}