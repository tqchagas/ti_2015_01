<?php

class Reserva extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Reserva_model', 'reserva');
		$this->load->model('Imoveis_model', 'imoveis');
	}

	public function index()
	{
		$data['page'] = 'reserva/index';

		$data['reservas'] = $this->reserva->listar();

 		$this->load->view('template/template', $data);
	}

	public function reservar()
	{
		$data['page'] = 'reserva/reservar';

		$data['imoveis'] = $this->imoveis->listar_imoveis();
		$data['espacos'] = $this->reserva->listar_espacos();

 		$this->load->view('template/template', $data);
	}

	public function efetuar_reserva()
	{
		$data['imovel_id'] = $this->input->post('imovel');
		$data['espaco_id'] = $this->input->post('espaco');
		$data['data_inicial'] = $this->input->post('data_inicial');
		$data['data_final'] = $this->input->post('data_final');
		$data['custo'] = $this->input->post('custo');
		$alugado = $this->reserva->alugado($data);
		if(!$alugado){
			$this->reserva->cadastrar($data);
		} else{
			$this->session->set_flashdata('espaco_alugado', 'Espaço alugado dentro do período escolhido.');
			redirect('/reserva/reservar/');
		}

		redirect('reserva');
	}

	public function valor_espaco()
	{
		$data['espaco'] = $this->input->get('espaco');
		$espaco = $this->reserva->valor_espaco($data);
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($espaco));
	}

}