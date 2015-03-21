<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function index(){
		$data['page'] = 'funcionario/lista';
		$this->load->view('template/template', $data);
	}

}

/* End of file funcionario.php */
/* Location: ./application/controllers/funcionario.php */