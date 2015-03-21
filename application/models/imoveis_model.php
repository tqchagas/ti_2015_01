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
		if(isset($data['id'])) {
			$this->db->where('id', $data['id']);
			$this->db->update('imovel', $data);
		} else {
			$this->db->insert('imovel', $data);
		}
	}

	public function deletar($id) {
		$this->load->model('moradores_model', 'moradores');
		$imovel_ocupado = $this->moradores->imovel_ocupado($id);
		if (!$imovel_ocupado) {
			$this->db->delete('imovel', array('id' => $id));
		} else {
			$this->session->set_flashdata('naoExclusaoImovel', 'Não foi possível excluir pois o imóvel possui morador associado.');
			redirect('/imovel/', 'refresh');
		}
	}
}