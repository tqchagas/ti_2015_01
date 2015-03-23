<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conta_model extends CI_Model {

	public function cadastrar($data){
		$this->db->insert('conta', $data);
	}

	public function calculaBalancete($data = NULL){
		if ($data != NULL) {
			$sql = 'SELECT SUM(valor) valor FROM conta WHERE data_vencimento >= ? AND data_vencimento <= ?';
			return $this->db->query($sql, array($data['data_inicial'], $data['data_final']))->row();
		}else{
			return $this->db->query('SELECT SUM(valor) valor FROM conta', $data)->row();
		}
		
	}

	public function listaContas($data = NULL){
		if ($data != NULL) {
			$sql = 'SELECT * FROM conta WHERE data_vencimento >= ? AND data_vencimento <= ?';
			return $this->db->query($sql, array($data['data_inicial'], $data['data_final']))->result();
		}else{
			return $this->db->query('SELECT * FROM conta')->result();
		}
		
	}

	public function editar($data){
		$this->db->query('UPDATE conta SET data_pagamento = ? WHERE id_conta = ?', array('data_pagamento' => $data['data_pagamento'], 'id_conta' => $data['id_conta']));
	}

	public function excluir($id){
		$this->db->delete('conta', array('id_conta' => $id));
	}

}

/* End of file contal_model.php */
/* Location: ./application/models/contal_model.php */