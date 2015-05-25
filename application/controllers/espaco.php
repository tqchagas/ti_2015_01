<?php

class Espaco extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Reserva_model', 'reserva');
	}


	public function index()
	{
		$data['page'] = 'espaco/index';
		$data['espacos'] = $this->reserva->listar_espacos();
 		$this->load->view('template/template', $data);
	}

	public function cadastro()
	{
		$data['page'] = 'espaco/cadastrar';
		$data['espacos'] = $this->reserva->listar_espacos();
 		$this->load->view('template/template', $data);
	}

	public function cadastrar() 
	{
		$data['nome'] = $this->input->post('nome');
		$data['descricao'] = $this->input->post('descricao');
		$data['custo_dia'] = $this->input->post('custo_dia');
		$this->reserva->cadastrar_espaco($data);
		redirect('/espaco/');
	}

}