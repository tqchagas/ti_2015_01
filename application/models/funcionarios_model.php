<?php
class Funcionarios_model extends CI_Model {

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
									F.id id_funcionario,
									C.descricao cargo 
 								FROM funcionario F
 									JOIN pessoa P
								ON  F.pessoa_id = P.id
									JOIN cargo C
								ON F.cargo_id = C.id')->result();
	}

	public function get($id){
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
									F.id id_funcionario,
									C.descricao cargo 
 								FROM funcionario F
 									JOIN pessoa P
								ON  F.pessoa_id = P.id
									JOIN cargo C
								ON F.cargo_id = C.id
									WHERE F.id = ?', (array('id' => $id)))->row();
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

	public function cadastrar($data){
		$this->db->insert('funcionario', $data);
	}

	public function editar($data){
		$this->db->query('UPDATE funcionario SET cargo_id = ? WHERE id = ?', array('cargo_id' => $data['cargo_id'], 'pessoa_id' => $data['pessoa_id']));
	}

	public function excluir($id){
		$this->db->delete('funcionario', array('id' => $id)); 
	}
}