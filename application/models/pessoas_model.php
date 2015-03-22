<?php
class Pessoas_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar_pessoas($id = null) {
		if ($id === null) {
			$this->db->select('p.id, p.cpf, p.telefone, p.celular, p.email, p.nome');
			$this->db->from('pessoa AS p');
			$this->db->join('endereco AS e', 'p.endereco_id = e.id');
			return $this->db->get()->result();
		} else {
			return $this->db->query('SELECT 
										p.id AS pessoa_id
										, p.nome AS pessoa_nome
										, p.data_nascimento
										, p.telefone
										, p.celular
										, p.email
										, p.usuario
										, p.cpf
										, e.id AS endereco_id
										, e.cep
										, e.logradouro
										, e.numero
										, e.complemento
										, e.bairro
										, e.pais
										, e.estado_id AS estado_id
										, e.cidade_id AS cidade_id
										, c.descricao AS cidade_descricao
										, es.nome AS estado_descricao
									FROM 
										pessoa AS P
									INNER JOIN endereco AS e
									ON p.endereco_id = e.id
									INNER JOIN estado AS es 
									ON e.estado_id = es.id
									INNER JOIN cidade AS c 
									ON e.cidade_id = c.id')->result();
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