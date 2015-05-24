<?php
class Balancetes_model extends CI_Model 
{

	public function __construct() 
	{
		parent::__construct();
	}

	public function listar_creditos() 
	{
		return $this->db->query('SELECT
									valor
									, descricao
								FROM 
									conta 
								WHERE 
									balanco = "C"')->result();
	}

	public function total_creditos() 
	{
		return $this->db->query('SELECT
									SUM(valor) AS total
								FROM 
									conta 
								WHERE 
									balanco = "C"')->row();
	}


	public function listar_debitos() 
	{
		return $this->db->query('SELECT 
									valor
									, descricao
								FROM 
									conta 
								WHERE 
									balanco = "D" 
								AND 
									data_pagamento != "0000-00-00"')->result();
	}


	public function total_debitos()
	{
		return $this->db->query('SELECT
									SUM(valor) AS total
								FROM 
									conta
								WHERE 
									balanco = "D"
								AND data_pagamento != "0000-00-00"')->row();
	}
}