<?php
class Enderecos_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function cadastrar($data) {
		if(isset($data['id'])) {
			$this->db->where('id', $data['id']);
			$this->db->update('endereco', $data);
		} else 
		{
			$this->db->insert('endereco', $data);
			return $this->db->insert_id();
		}
		
	}
}