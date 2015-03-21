<?php
class Imoveis_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_imoveis($id = null) {
		if ($id === null) {
			return $this->db->get('imovel')->result();
		} else {
			return $this->db->get_where('imovel', array('id' => $id))->result();
		}
	}

	public function cadastrar($data) {
		$this->db->insert('imovel', $data);
	}

	public function deletar($id) {
		$this->load->model('moradores_model', 'moradores');
		$numeroMoradoresImovel = $this->moradores->contar_morador_imovel($id);
		if ($numeroMoradoresImovel > 0) {
			return -1;
		}
		else {
			$this->db->delete('imovel', array('id' => $id));
		}
	}
}