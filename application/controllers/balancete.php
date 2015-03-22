<?php

class Balancete extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('balancetes_model', 'balancetes');
	}

	public function index()
	{
		$data['page'] = 'balancete/index';
		$data['lista_creditos'] = $this->balancetes->listar_creditos();
		$data['lista_debitos'] = $this->balancetes->listar_debitos();
		$data['total_creditos'] = $this->balancetes->total_creditos();
		$data['total_debitos'] = $this->balancetes->total_debitos();
 		$this->load->view('template/template', $data);
	}
}