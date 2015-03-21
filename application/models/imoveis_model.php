<?php
class Imoveis_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_imoveis() {
		return $this->db->get('imovel')->result();
	}
}