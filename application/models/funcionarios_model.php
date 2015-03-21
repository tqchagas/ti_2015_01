<?php
class Funcionarios_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_funcionarios() {
		$this->db->select('*');
		$this->db->from('funcionario AS f');
		$this->db->join('pessoa AS p', 'f.pessoa_id = p.id');
		$this->db->join('cargo  AS c', 'f.cargo_id = c.id');
		return $this->db->get()->result();
	}
}