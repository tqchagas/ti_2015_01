<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamacao_model extends CI_Model {

	public function retrieveAll(){
		$sql = "SELECT P.nome AS morador, O.id, I.numero AS imovel, O.imovel_id, O.descricao, O.data 
					FROM ocorrencia_reclamacoes O
				JOIN imovel I
					ON O.imovel_id = I.id
				JOIN morador M
					ON I.id = M.imovel_id
				JOIN pessoa P
					ON M.pessoa_id = P.id";
		return $this->db->query($sql)->result();
	}

	public function cadastrar($data){
		$this->db->insert('ocorrencia_reclamacoes', $data);
	}

	public function excluir($id){
		$this->db->delete('ocorrencia_reclamacoes', array('id' => $id));
	}

}

/* End of file reclamacao_model.php */
/* Location: ./application/models/reclamacao_model.php */