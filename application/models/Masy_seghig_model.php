<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masy_seghig_model extends CI_Model {
	

	//SECCION DE NUEVO CURSO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	function guardar_curhig($data){
		$this->db->insert("shprocesos",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function mostrar_curhig($valor){
		$this->db->like("shprocesos.aproceso",$valor);
		$this->db->from('shprocesos');
		$this->db->join('gsdirdireccionesgen', 'shprocesos.iddireccionemp  = gsdirdireccionesgen.idgsdirdireccion');
		$this->db->join('gsdireccionessub', 'shprocesos.idgsareasdireccion  = gsdireccionessub.idgsdireccion');
		$this->db->where("shprocesos.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function mostrar_dirgen(){
		$this->db->select('gsdirdireccionesgen.idgsdirdireccion, gsdirdireccionesgen.anombredireccion anombredirdireccion');
		$this->db->from('gsdirdireccionesgen');
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function mostrar_dir($id){
		$this->db->select('gsdirdireccionesgen.idgsdirdireccion, gsdireccionessub.idgsdireccion, gsdireccionessub.anombredireccion');
		$this->db->from('gsdirdireccionesgen');
		$this->db->join('gsdireccionessub', 'gsdirdireccionesgen.idgsdirdireccion = gsdireccionessub. 	idgsdirdireccion');
		$this->db->where('gsdirdireccionesgen.idgsdirdireccion',$id);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar_curhig($id,$data){
		$this->db->where('idshprocesos', $id);
		$this->db->update('shprocesos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_curhig($id,$data){
		$this->db->where('idshprocesos', $id);
		$this->db->update('shprocesos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_curhig($id){
		$this->db->where("idshprocesos",$id);
		$consulta = $this->db->get("shprocesos");
		return $consulta->result();
	}


	//SECCION DE NUEVO MEDICAMENTO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	//


	function guardar_nue_med($data){
		$this->db->insert("shmedicamentos",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function mostrar_nue_med($valor){
		$this->db->like("adescripcionmedicamento",$valor);
		$this->db->from('shmedicamentos');
		$this->db->where("shmedicamentos.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}
	
	function actualizar_nue_med($id,$data){
		$this->db->where('idmedicamentos', $id);
		$this->db->update('shmedicamentos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_nue_med($id,$data){
		$this->db->where('idmedicamentos', $id);
		$this->db->update('shmedicamentos', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_nue_med($id){
		$this->db->where("idmedicamentos",$id);
		$consulta = $this->db->get("shmedicamentos");
		return $consulta->result();
	}

	//SECCION DE NUEVO MEDICO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	//


	function guardar_nue_medico($data){
		$this->db->insert("shmedicosasignados",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function mostrar_nue_medico($valor){
		$this->db->like("anombrepersona",$valor);
		$this->db->from('shmedicosasignados');
		$this->db->join('users', 'shmedicosasignados.user_id  = users.user_id');
		$this->db->where("shmedicosasignados.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}
	
	function actualizar_nue_medico($id,$data){
		$this->db->where('idmedico', $id);
		$this->db->update('shmedicosasignados', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_nue_medico($id,$data){
		$this->db->where('idmedico', $id);
		$this->db->update('shmedicosasignados', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_nue_medico($id){
		$this->db->where("idmedico",$id);
		$consulta = $this->db->get("shmedicosasignados");
		return $consulta->result();
	}

	function mostrar_emp(){
		$this->db->select('user_id, anombrepersona, apaterno, amaterno');
		$this->db->from('users');
		$this->db->where("users.user_id != 1637400287");
		$consulta = $this->db->get();
		return $consulta->result();
	}

	//SECCION DE NUEVO CONSULTORIO
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	//


	function guardar_nue_consul($data){
		$this->db->insert("shconsultorios",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function mostrar_nue_consul($valor){
		$this->db->like("anombrepersona",$valor);
		$this->db->from('shconsultorios');
		$this->db->join('shmedicosasignados', 'shconsultorios.idmedico  = shmedicosasignados.idmedico');
		$this->db->join('users', 'shmedicosasignados.user_id  = users.user_id');
		$this->db->where("shconsultorios.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}
	
	function actualizar_nue_consul($id,$data){
		$this->db->where('idshconsultorios', $id);
		$this->db->update('shconsultorios', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_nue_consul($id,$data){
		$this->db->where('idshconsultorios', $id);
		$this->db->update('shconsultorios', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_nue_consul($id){
		$this->db->where("idshconsultorios",$id);
		$consulta = $this->db->get("shconsultorios");
		return $consulta->result();
	}

	function mostrar_med(){
		$this->db->select('idmedico, anombrepersona, apaterno, amaterno');
		$this->db->from('shmedicosasignados');
		$this->db->join('users', 'shmedicosasignados.user_id  = users.user_id');
		$consulta = $this->db->get();
		return $consulta->result();
	}

	//SECCION DE NUEVAS CITAS
	////***************************************************************************************************************
	//***************************************************************************************************************
	//***************************************************************************************************************
	//


	function guardar_nue_cita($data){
		$this->db->insert("shcitasmedicas",$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function mostrar_nue_cita($valor){
		$this->db->like("anombrepersona",$valor);
		$this->db->from('shcitasmedicas');
		$this->db->join('users', 'shcitasmedicas.user_id  = users.user_id');
		$this->db->join('shconsultorios', 'shcitasmedicas.idshconsultorios  = shconsultorios.idshconsultorios');
		$this->db->join('shmedicosasignados', 'shconsultorios.idmedico  = shmedicosasignados.idmedico');
		$this->db->where("shcitasmedicas.autipomovimiento != 3");
		$consulta = $this->db->get();
		return $consulta->result();
	}
	
	function actualizar_nue_cita($id,$data){
		$this->db->where('idcitasmedicas', $id);
		$this->db->update('shcitasmedicas', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar_nue_cita($id,$data){
		$this->db->where('idcitasmedicas', $id);
		$this->db->update('shcitasmedicas', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function buscar_nue_cita($id){
		$this->db->select('shconsultorios.idshconsultorios, shconsultorios.idmedico, shmedicosasignados.idmedico, shmedicosasignados.user_id, users.anombrepersona, users.apaterno, users.amaterno');
		$this->db->from('shconsultorios');
		$this->db->join('shmedicosasignados', 'shconsultorios.idmedico  = shmedicosasignados.idmedico');
		$this->db->join('users', 'shmedicosasignados.user_id  = users.user_id');
		$this->db->where("shconsultorios.idshconsultorios",$id);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function buscar_nue_cita2($id){
		$this->db->select('shcitasmedicas.idcitasmedicas, shcitasmedicas.idshconsultorios, shcitasmedicas.user_id, shcitasmedicas.afechaconsulta, shcitasmedicas.arecetamedica, shcitasmedicas.recetamedica, shcitasmedicas.aufecha, shcitasmedicas.autipomovimiento, shcitasmedicas.auidusuario, users.anombrepersona, users.apaterno, users.amaterno');
		$this->db->from('shcitasmedicas');
		$this->db->join('shconsultorios', 'shcitasmedicas.idshconsultorios  = shconsultorios.idshconsultorios');
		$this->db->join('shmedicosasignados', 'shconsultorios.idmedico  = shmedicosasignados.idmedico');
		$this->db->join('users', 'shmedicosasignados.user_id  = users.user_id');
		$this->db->where('shcitasmedicas.idcitasmedicas',$id);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function mostrar_consul(){
		$this->db->select('idshconsultorios, aoficinaconsultorio');
		$this->db->from('shconsultorios');
		$consulta = $this->db->get();
		return $consulta->result();
	}
}