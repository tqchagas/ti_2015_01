<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nadaconsta extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('moradores_model', 'morador');
		$this->load->model('pagamento_model', 'pagamento');
	}


	public function index(){
		$data['page'] = "nadaconsta/emitir";
		$data['moradores'] 	= $this->morador->listar();

		$this->load->view('template/template', $data);
	}

	public function emitir(){
		$data['morador_id'] = $this->input->post('morador');
		$data['pendencias'] = $this->pagamento->listar_pendencia_morador($data['morador_id']);
		$data['morador'] = $this->morador->get($data['morador_id']);

		if(count($data['pendencias']) == 0){
			$data['page'] = 'nadaconsta/index';

			$this->load->view('template/template', $data);
		}else{
			$data['page'] = 'nadaconsta/pendencias';
			
			$this->load->view('template/template', $data);
		}
	}

}

/* End of file nadaconsta.php */
/* Location: ./application/controllers/nadaconsta.php */