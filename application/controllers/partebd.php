<?php

class ParteBD extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('ParteBD_model', 'bd');
	}


	public function index()
	{
		$data['page'] = 'partebd/index';
		$data['dados_funcionario'] = $this->bd->dados_funcionario();
		//$data['dados_morador'] = $this->bd->dados_morador();
		$data['reclamacoes_morador'] = $this->bd->reclamacoes_morador();
		//$data['morador_salao_reclamacoes'] = $this->bd->morador_salao_reclamacoes();
		$data['funcionario_morador'] = $this->bd->funcionario_morador();
		$data['visitantes_morador'] = $this->bd->visitantes_morador();
		$data['imoveis_pagamento_pendente'] = $this->bd->imoveis_pagamento_pendente();
		$data['morador_gastos'] = $this->bd->morador_gastos();
		$data['imovel_maior_numero_reclamacoes'] = $this->bd->imovel_maior_numero_reclamacoes();
		$data['morador_joao'] = $this->bd->morador_joao();
		//$data['moradores_bh_sp'] = $this->bd->moradores_bh_sp();
		$data['moradores_bh_sp'] = $this->bd->pagamento_pendente();


 		$this->load->view('template/template', $data);
	}

}