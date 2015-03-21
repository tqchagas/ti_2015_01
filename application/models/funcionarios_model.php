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

	public function funcionario_associado_pessoa($pessoa_id) {
		$this->db->where('pessoa_id', $pessoa_id);
		$this->db->from('funcionario');
		if ($this->db->count_all_results() > 0 ) {
			return true;
		} else {
			return false;
		}
	}
}