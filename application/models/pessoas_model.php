<?php
class Pessoas_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_pessoas($id = null) {
		if ($id === null) {
			return $this->db->get('pessoa')->result();
		} else {
			return $this->db->get_where('pessoa', array('id' => $id))->result();
		}
	}

	public function cadastrar($data) {
		if(isset($data['id'])) {
			$this->db->where('id', $data['id']);
			$this->db->update('pessoa', $data);
		} else {
			$this->db->insert('pessoa', $data);
		}
	}


	public function deletar($id) {
		$this->load->model('Funcionarios_model', 'funcionarios');
		$this->load->model('Moradores_model', 'moradores');
		$morador_associado = $this->moradores->morador_associado_pessoa($id);
		$funcionario_associado = $this->funcionarios->funcionario_associado_pessoa($id);
		if (!$morador_associado && !$funcionario_associado) {
			$this->db->delete('pessoa', array('id' => $id));
			$this->session->set_flashdata('exclusaoPessoa', 'ID '.$id.' excluido');
			redirect('/pessoa/', 'refresh');
		} else {
			$this->session->set_flashdata('naoExclusaoPessoa', 'Não foi possível excluir pois existe morador e/ou funcionário associado.');
			redirect('/pessoa/', 'refresh');
		}
	}
}