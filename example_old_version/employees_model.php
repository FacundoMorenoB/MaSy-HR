<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {

	function guardar($data){
		$this->db->insert("employees",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar($valor){
		$this->db->like("curp",$valor);
		$consulta = $this->db->get("employees");
		return $consulta->result();
	}

	function actualizar($curp,$data){
		$this->db->where('curp', $curp);
		$this->db->update('employees', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar($curp){
		$this->db->where('curp', $curp);
		$this->db->delete('employees'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

}