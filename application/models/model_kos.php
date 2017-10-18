<?php
class model_talking extends CI_Model {
	
	
	public function Login($table, $username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
	}
	
	public function getDataWhere($table, $key, $value){
		$this->db->where($key, $value);
		return $this->db->get($table);
	}
	
	public function getData($table, $id) {
		$this->db->order_by($key, 'desc');
		return $this->db->get($table);
	}
		 
}

?>