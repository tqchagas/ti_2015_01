<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('moradores_model', 'moradores');
	}

	public function index(){
		$data['page'] = 'morador/index';
		$data['moradores'] = $this->moradores->listar();

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