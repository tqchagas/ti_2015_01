<?php
class Moradores_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function listar($value=''){
		return $this->db->query('SELECT 
									P.id id_pessoa,
									P.nome nome,
									P.data_nascimento nascimento,
									P.cpf cpf,
									P.usuario usuario,
									P.senha senha,
									P.telefone telefone,
									P.celular celular,
									P.endereco_id id_endereco,
									P.email email, 
									M.id id_morador,
									I.numero imovel
 								FROM morador M
 									JOIN pessoa P
								ON  M.pessoa_id = P.id
									JOIN imovel I
								ON I.id = M.imovel_id
								')->result();
	}

	public function cadastrar($data){
		$this->db->insert('morador', $data);
	}

	public function excluir($id){
		$this->db->delete('morador', array('id' => $id)); 
	}

	public function listar_moradores() {
		$this->db->select('*');
		$this->db->from('morador AS m');
		$this->db->join('pessoa AS p', 'm.pessoa_id = p.id');
		$this->db->join('imovel  AS i', 'm.imovel_id = i.id');
		return $this->db->get()->result();
	}

	public function imovel_ocupado($imovel_id) {
		$this->db->where('imovel_id', $imovel_id);
		$this->db->from('morador');
		if ($this->db->count_all_results() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// verifica se existe algum morador associado a pessoa
	public function morador_associado_pessoa($pessoa_id) {
		$this->db->where('pessoa_id', $pessoa_id);
		$this->db->from('morador');
		if ($this->db->count_all_results() > 0 ) {
			return true;
		} else {
			return false;
		}
	}
}