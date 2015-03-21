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
		$data['funcionarios'] = $this->funcionario->listar();

		$this->load->view('template/template', $data);
	}

	public function cadastrar(){
		$data['pessoa_id'] = $this->input->post('pessoa');
		$data['cargo_id'] = $this->input->post('cargo');

		$this->funcionario->cadastrar($data);

		redirect('funcionario');
	}

	public function excluir(){
		$id = $this->uri->segment(3);
		$this->funcionario->excluir($id);

		redirect('funcionario');
	}

}

/* End of file funcionario.php */
/* Location: ./application/controllers/funcionario.php */