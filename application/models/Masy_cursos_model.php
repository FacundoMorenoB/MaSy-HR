<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_cursos_model extends CI_Model {
	

	//SECCION DE NUEVO CURSO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_cur($data){
		$this->db->insert("mincursos",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar_cur($valor){
		$this->db->like("ANOMBRECURSO",$valor);
		$consulta = $this->db->get("mincursos");
		return $consulta->result();
	}

	function actualizar_cur($id,$data){
		$this->db->where('IDCURSOIND', $id);
		$this->db->update('mincursos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_cur($id){
		$this->db->where('IDCURSOIND', $id);
		$this->db->delete('mincursos'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_cur($id){
		$this->db->where("IDCURSOIND",$id);
		$consulta = $this->db->get("mincursos");
		return $consulta->result();
	}


	//SECCION DE CALENDARIZAR CURSO
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************

	function guardar_cur_cal($data){
		$this->db->insert("micalendariocursos",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar_cur_cal($valor){
		$this->db->like("IDCAPACITADORES",$valor);
		$consulta = $this->db->get("micalendariocursos");
		return $consulta->result();
	}

	function actualizar_cur_cal($id,$data){
		$this->db->where('IDMICALENDARCURSO', $id);
		$this->db->update('micalendariocursos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_cur_cal($id){
		$this->db->where('IDMICALENDARCURSO', $id);
		$this->db->delete('micalendariocursos'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_cur_cal($id){
		$this->db->where("IDMICALENDARCURSO",$id);
		$consulta = $this->db->get("micalendariocursos");
		return $consulta->result();
	}

	//SECCION DE ASIGNAR CURSO
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************

	function guardar_cur_asig($data){
		$this->db->insert("incursosxempl",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar_cur_asig($valor){
		$this->db->like("IDGSPERSONAS",$valor);
		$consulta = $this->db->get("incursosxempl");
		return $consulta->result();
	}

	function actualizar_cur_asig($id,$data){
		$this->db->where('IDMICURSOSXEMPL', $id);
		$this->db->update('incursosxempl', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_cur_asig($id){
		$this->db->where('IDMICURSOSXEMPL', $id);
		$this->db->delete('incursosxempl'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_cur_asig($id){
		$this->db->where("IDMICURSOSXEMPL",$id);
		$consulta = $this->db->get("incursosxempl");
		return $consulta->result();
	}


}