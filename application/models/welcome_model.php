<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_model extends CI_Model {
	public $variable;
	public function __construct()
	{
		parent::__construct();
		
	}
	public function login($usuario,$password){
		$this->db->where('correo',$usuario);
		$this->db->where('password',$password);
		$query = $this->db->get('usuario');
		if ($query->num_rows()>0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function get_roll($usuario){
		$this->db->select('pagina.nombre_pagina')
		->from('usuario')
		->where('codigo_Usuario',$usuario)
		->join('pagina_has_rol','usuario.Rol_id_Rol = pagina_has_rol.Rol_id_Rol')
		->join('pagina','pagina_has_rol.pagina_id_pagina = pagina.id_Pagina');
		$query = $this->db->get();
		#return $query;
		
		foreach ($query->result_array() as $row)
		{
		        echo $row['nombre_pagina'];
		}
		die();
	}
}
/* End of file welcome_model.php */
/* Location: ./application/models/welcome_model.php */