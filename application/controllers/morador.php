<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Morador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pessoas_model', 'pessoa');
		$this->load->model('moradores_model', 'moradores');
		$this->load->model('imoveis_model', 'imovel');
	}

	public function index(){
		$data['page'] = 'morador/lista';
		$data['moradores'] = $this->moradores->listar();
		$data['pessoas'] = $this->pessoa->listar_pessoas();
		$data['imoveis'] = $this->imovel->listar_imoveis();

		$this->load->view('template/template', $data);
	}

	public function cadastrar(){
		$data['pessoa_id'] = $this->input->post('pessoa');
		$data['imovel_id'] = $this->input->post('imovel');

		$this->moradores->cadastrar($data);

		redirect('morador');
	}

	public function excluir(){
		$id = $this->uri->segment(3);
		$this->moradores->excluir($id);

		redirect('morador');
	}

	public function visualizar(){
		$id = $this->input->post('id');
		$return = $this->moradores->get($id);

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($return));
	}

	public function editar($value=''){
		$data['pessoa_id'] = $this->input->post('id_pessoa');
		$data['cargo_id'] = $this->input->post('id_cargo');

		$this->funcionario->editar($data);
		$return['success'] = true;

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($return));
	}

}

/* End of file funcionario.php */
/* Location: ./application/controllers/funcionario.php */