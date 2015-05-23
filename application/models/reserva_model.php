<?php
class Reserva_model extends CI_Model 
{

	public function __construct() 
	{
		parent::__construct();
	}


	public function cadastrar($data)
	{
		$this->db->insert('reserva_espaco', $data);
	}

	public function listar() 
	{
		return $this->db->query('SELECT e.nome, i.numero, i.bloco, r.id, r.data_inicial, r.data_final, r.custo
					FROM reserva_espaco AS r
					INNER JOIN imovel AS i
					ON(i.id = r.imovel_id)
					INNER JOIN espaco AS e
					ON(e.id = r.espaco_id)')->result();
	}

	public function listar_espacos()
	{
		return $this->db->get('espaco')->result();
	}

	public function valor_espaco($data) {
		return $this->db->query('SELECT id, custo_dia FROM espaco WHERE id = ?',(array('id' => $data['espaco'])))->row();	
	}

	public function alugado($data) {
		$res = $this->db->query('SELECT id FROM `reserva_espaco` WHERE data_inicial >= ? OR data_final <= ? AND espaco_id = ?',
			(array(
				'data_inicial' =>$data['data_inicial'],
				'data_final' =>$data['data_final'],
				'espaco'=> $data['espaco_id']
			))
		)->row();
		if (!$res) {
			return false;
		} else {
			return true;
		}
	}
}