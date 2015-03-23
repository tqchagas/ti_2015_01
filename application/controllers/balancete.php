<?php

class Balancete extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('balancetes_model', 'balancetes');
		$this->load->model('conta_model', 'conta');
	}

	public function index()
	{
		$data['page'] = 'balancete/index';

		$data['total'] = $this->conta->calculaBalancete();
		$data['contas'] = $this->conta->listaContas();

 		$this->load->view('template/template', $data);
	}

	public function calcular($value=''){
		$response['page'] = 'balancete/index';
		$data['data_inicial'] = $this->input->post("data_inicial");
		$data['data_final'] = $this->input->post("data_final");

		$response['total'] = $this->conta->calculaBalancete($data);
		$response['contas'] = $this->conta->listaContas($data);

		$this->load->view('template/template', $response);
	}
}