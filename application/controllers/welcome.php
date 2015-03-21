<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Imoveis_model', 'imoveis');
		$this->load->model('Pessoas_model', 'pessoas');
		$this->load->model('Moradores_model', 'moradores');
		$this->load->model('Funcionarios_model', 'funcionarios');
	}


	public function index()
	{
		$dados['a'] = $this->imoveis->listar_imoveis();
		$dados['b'] = $this->pessoas->listar_pessoas();
		$dados['c'] = $this->moradores->listar_moradores();
		$dados['d'] = $this->funcionarios->listar_funcionarios();
		$this->load->view('welcome_message', $dados);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */