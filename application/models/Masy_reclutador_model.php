<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_reclutador_model extends CI_Model {
	
	function guardar($data){
		$this->db->insert("GSPERFILESPUESTOS",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar($valor){
		$this->db->like("IDPERFILDEPUESTO",$valor);
		$consulta = $this->db->get(" 	GSPERFILESPUESTOS");
		return $consulta->result();
	}

	function actualizar($id,$data){
		$this->db->where('IDPERFILDEPUESTO', $id);
		$this->db->update('GSPERFILESPUESTOS', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar($id){
		$this->db->where('IDPERFILDEPUESTO', $id);
		$this->db->delete(' 	GSPERFILESPUESTOS'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

}