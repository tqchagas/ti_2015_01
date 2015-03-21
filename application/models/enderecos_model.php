<?php
class Enderecos_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function cadastrar($data) {
		$this->db->insert('endereco', $data);
	}
}