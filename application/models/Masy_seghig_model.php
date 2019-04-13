<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_seghig_model extends CI_Model {
	

	//SECCION DE NUEVO CURSO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_curhig($data){
		$this->db->insert("SHPROCESOS",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar_curhig($valor){
		$this->db->like("SHPROCESOS.ANOMBRECURSO",$valor);
		$this->db->from('SHPROCESOS');
		$this->db->join('gsdireccionessub', 'SHPROCESOS.IDGSDIRECCION = gsdireccionessub.IDGSDIRECCION');
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar_curhig($id,$data){
		$this->db->where('IDCURSOIND', $id);
		$this->db->update('SHPROCESOS', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_curhig($id){
		$this->db->where('IDCURSOIND', $id);
		$this->db->delete('SHPROCESOS'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_curhig($id){
		$this->db->where("IDCURSOIND",$id);
		$consulta = $this->db->get("SHPROCESOS");
		return $consulta->result();
	}

}