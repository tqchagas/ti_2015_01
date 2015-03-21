<?php
class Cidades_model extends CI_Model 
{

	function __construct() 
	{
		parent::__construct();
	}

	public function listar_estados() 
	{
		return $this->db->get('estado')->result();
	}

	public function listar_cidades($estado_id) 
	{
		return $this->db->select('cidade.id, cidade.descricao')
						->from('estado')
						->join('cidade', 'cidade.estado_id = estado.id')
						->where(array('estado.id' => $estado_id))
						->get()->result();
	}
}