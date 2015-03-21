<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cargo_model', 'cargo');
		$this->load->model('pessoas_model', 'pessoa');
		$this->load->model('funcionarios_model', 'funcionario');
	}

	public function index(){
		$data['page'] = 'funcionario/lista';
		$data['cargos'] = $this->cargo->getAll();
		$data['pessoas'] = $this->pessoa->listar_pessoas();
		$data['funcionarios'] = $this->funcionario->listar_funcionarios();

		$this->load->view('template/template', $data);
	}

	public function cadastrar(){
		$data['nome'] = $this->input->post('nome');
		$data['cpf'] = $this->input->post('cpf');
		$data['cargo'] = $this->input->post('cargo');
	}

}

/* End of file funcionario.php */
/* Location: ./application/controllers/funcionario.php */