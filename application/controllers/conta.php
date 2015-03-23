<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('conta_model', 'conta');
	}

	public function index()	{
		$data['page'] = 'conta/cadastrar';

		$this->load->view('template/template', $data);
	}

	public function cadastrar(){
		$data['descricao'] = $this->input->post('descricao');
		$data['valor'] = $this->input->post('valor');
		$data['balanco'] = $this->input->post('tipo-conta');
		$data['data_vencimento'] = $this->input->post('vencimento');
		$data['data_pagamento'] = $this->input->post('pagamento');

		if ($data['balanco'] == 'D') {
			$data['valor'] = $data['valor'] - ($data['valor'] * 2);
		}

		$this->conta->cadastrar($data);

		redirect('conta');
	}

}

/* End of file pagamento.php */
/* Location: ./application/controllers/pagamento.php */