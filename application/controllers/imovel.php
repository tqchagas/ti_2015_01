<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imovel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Imoveis_model', 'imoveis');
	}


	public function index()
	{
		$dados['titulo'] = "Imoveis - Listagem";
		$dados['imoveis'] = $this->imoveis->listar_imoveis();
		$this->load->view('imovel/adicionar', $dados);
	}

	public function adicionar() {
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */