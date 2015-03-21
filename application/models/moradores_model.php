d<?php
class Moradores_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_moradores() {
		$this->db->select('*');
		$this->db->from('morador AS m');
		$this->db->join('pessoa AS p', 'm.pessoa_id = p.id');
		$this->db->join('imovel  AS i', 'm.imovel_id = i.id');
		return $this->db->get()->result();
	}

	public function contar_morador_imovel($imovel_id) {
		$this->db->where('imovel_id', $imovel_id);
		$this->db->from('morador');
		return $this->db->count_all_results();
	}
}