<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagamento_model extends CI_Model {

	public function listar(){
		return $this->db->query('SELECT
									P.id id_pagamento,
									P.pago,
									M.id morador_id,
									P.periodo,
									P.id pessoa_id,
									I.id imovel_id,
									I.numero,
									I.bloco,
									I.quantidade_vagas,
									I.quantidade_quartos,
									I.quantidade_banheiros,
									I.metragem,
									I.valor_condominio,
									pessoa.nome,
									pessoa.data_nascimento,
									pessoa.cpf,
									pessoa.email,
									pessoa.usuario,
									pessoa.telefone,
									pessoa.celular,
									pessoa.endereco_id
										FROM pagamento P
									JOIN morador M
										ON P.morador_id = M.id
									JOIN imovel I
										ON M.imovel_id = I.id
									JOIN pessoa
										ON M.pessoa_id = pessoa.id')->result();
	}

	public function get($id){
		return $this->db->query('SELECT
									P.id id_pagamento,
									P.pago,
									M.id morador_id,
									P.periodo,
									P.id pessoa_id,
									I.id imovel_id,
									I.numero,
									I.bloco,
									I.quantidade_vagas,
									I.quantidade_quartos,
									I.quantidade_banheiros,
									I.metragem,
									I.valor_condominio,
									pessoa.nome,
									pessoa.data_nascimento,
									pessoa.cpf,
									pessoa.email,
									pessoa.usuario,
									pessoa.telefone,
									pessoa.celular,
									pessoa.endereco_id,
									E.logradouro,
									E.numero,
									E.complemento,
									E.bairro,
									E.cep,
									E.pais,
									C.descricao cidade_nome,
									estado.nome estado_nome
										FROM pagamento P
									JOIN morador M
										ON P.morador_id = M.id
									JOIN imovel I
										ON M.imovel_id = I.id
									JOIN pessoa
										ON M.pessoa_id = pessoa.id
									JOIN endereco E
										ON E.id = pessoa.endereco_id
									LEFT JOIN cidade C
										ON C.id = E.cidade_id
									LEFT JOIN estado
										ON estado.id = E.estado_id
									WHERE P.id = ?', array('id' => $id))->row();
	}

	public function cadastrar($data){
		$this->db->insert('pagamento', $data);
	}

	public function pagar($id){
		$this->db->query('UPDATE pagamento SET pago = 1 WHERE id = ?', array('id' => $id));
	}

	public function excluir($id){
		$this->db->delete('pagamento', array('id' => $id));
	}

	public function listar_pendentes() {
		return $this->db->query('SELECT
									P.id AS id_pagamento,
									P.periodo,
									I.numero, 
									I.bloco,
									pessoa.nome
										FROM pagamento P
									JOIN morador M
										ON P.morador_id = M.id
									JOIN imovel I
										ON M.imovel_id = I.id
									JOIN pessoa
										ON M.pessoa_id = pessoa.id
									where P.pago = 0')->result();
	}

	public function listar_pendencia_morador($id) {
		return $this->db->query('SELECT
									P.id AS id_pagamento,
									P.periodo,
									I.numero, 
									I.bloco,
									pessoa.nome
										FROM pagamento P
									JOIN morador M
										ON P.morador_id = M.id
									JOIN imovel I
										ON M.imovel_id = I.id
									JOIN pessoa
										ON M.pessoa_id = pessoa.id
									WHERE P.pago = 0 AND M.id = ?', array('id' => $id))->result();
	}

	public function ratear(){
		$query = "SELECT (SUM(conta.valor)/(SELECT COUNT(imovel.id) FROM imovel)) as valor FROM conta WHERE conta.valor > 0";
		return $this->db->query($query)->row();
	}

}

/* End of file pagamento_model.php */
/* Location: ./application/models/pagamento_model.php */