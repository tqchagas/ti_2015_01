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
		$dados['page'] = 'welcome_message';
		$this->load->view('template/template', $dados);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */