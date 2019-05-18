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
		$this->db->like("mincursos.anombrecurso",$valor);
		$this->db->from('mincursos');
		$this->db->join('gsdireccionessub', 'mincursos.idgsdireccion = gsdireccionessub.idgsdireccion');
		$this->db->where("mincursos.autipomovimiento != 3 and gsdireccionessub.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar_cur($id,$data){
		$this->db->where('idcursoind', $id);
		$this->db->update('mincursos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_cur($id,$data){
		$this->db->where('idcursoind', $id);
		$this->db->update('mincursos', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_cur($id){
		$this->db->where("idcursoind",$id);
		$consulta = $this->db->get("mincursos");
		return $consulta->result();
	}


	//seccion de calendarizar curso
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
		$this->db->like("mincursos.anombrecurso",$valor);
		$this->db->from('micalendariocursos');
		$this->db->join('mincursos', 'micalendariocursos.idcursoind = mincursos.idcursoind');
		$this->db->join('micapacitadores', 'micalendariocursos.idcapacitadores = micapacitadores.idcapacitadores');
		$this->db->join('users', 'micapacitadores.user_id = users.user_id');
		$this->db->where("micalendariocursos.autipomovimiento != 3 and mincursos.autipomovimiento != 3 and micapacitadores.autipomovimiento != 3 and users.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar_cur_cal($id,$data){
		$this->db->where('idmicalendarcurso', $id);
		$this->db->update('micalendariocursos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_cur_cal($id,$data){
		$this->db->where('idmicalendarcurso', $id);
		$this->db->update('micalendariocursos', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_cur_cal($id){
		$this->db->where("idmicalendarcurso",$id);
		$consulta = $this->db->get("micalendariocursos");
		return $consulta->result();
	}

	//seccion de asignar curso
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
		$this->db->like("anombrecurso",$valor);
		$this->db->from('incursosxempl');
		$this->db->join('users', 'incursosxempl.user_id = users.user_id');
		$this->db->join('micalendariocursos', 'incursosxempl.idmicalendariocursos = micalendariocursos.idmicalendarcurso');
		$this->db->join('mincursos', 'micalendariocursos.idcursoind = mincursos.idcursoind');
		$this->db->where("incursosxempl.autipomovimiento != 3 and users.autipomovimiento != 3 and micalendariocursos.autipomovimiento != 3 and mincursos.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar_cur_asig($id,$data){
		$this->db->where('idmicursosxempl', $id);
		$this->db->update('incursosxempl', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_cur_asig($id,$data){
		$this->db->where('idmicursosxempl', $id);
		$this->db->update('incursosxempl', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_cur_asig($id){
		$this->db->where("idmicursosxempl",$id);
		$this->db->from('incursosxempl');
		$this->db->join('users', 'incursosxempl.user_id = users.user_id');
		$this->db->join('micalendariocursos', 'incursosxempl.idmicalendariocursos = micalendariocursos.idmicalendarcurso');
		$this->db->join('mincursos', 'micalendariocursos.idcursoind = mincursos.idcursoind');
		$consulta = $this->db->get();
		return $consulta->result();
	}

	//seccion de asignar curso
	//***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************

	function mostrar_dir_cur($valor){
		$this->db->like("idgsdireccion",$valor);
		$this->db->where("gsdireccionessub.autipomovimiento != 3");
		$consulta = $this->db->get("gsdireccionessub");
		return $consulta->result();
	}

	function mostrar_emp_capa(){
		$this->db->select('*');
		$this->db->from('micapacitadores');
		$this->db->join('users', 'micapacitadores.user_id = users.user_id');
		$this->db->where("users.autipomovimiento != 3 and micapacitadores.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function buscar_cur_asig_list($id){
		$this->db->where("idmicalendarcurso",$id);
		$this->db->from('micalendariocursos');
		$consulta = $this->db->get();
		return $consulta->result();
	}




}