<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamacao extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reclamacao_model');
	}
	
	public function index(){
		$data['page'] = 'reclamacao/lista';
		$data['reclamacoes'] = $this->reclamacao_model->retrieveAll();
		$this->load->view('template/template', $data);
	}

	public function cadastro(){
		$this->load->model('imoveis_model');
		$data['imoveis'] = $this->imoveis_model->listar_imoveis();
		
		$data['page'] = 'reclamacao/cadastrar';
		$this->load->view('template/template', $data);
	}

	public function cadastrar(){
		$data['imovel_id'] 	= $this->input->post('imovel');
		$data['descricao'] 	= $this->input->post('descricao');
		$data['data'] 		= $this->input->post('data');

		$this->reclamacao_model->cadastrar($data);

		redirect('reclamacao');
	}

	public function excluir(){
		$this->load->model('imovel_model');
		$id = $this->uri->segment(3);
		$this->reclamacao_model->excluir($id);
		redirect('reclamacao');

	}

}

/* End of file reclamacao.php */
/* Location: ./application/controllers/reclamacao.php */