<?php
class Pessoas_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_pessoas() {
		return $this->db->get('pessoa')->result();
	}
}