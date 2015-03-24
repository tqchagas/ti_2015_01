<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagamento extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pagamento_model', 'pagamento');
		$this->load->model('moradores_model', 'morador');
	}

	public function index(){
		$data['page'] = 'pagamento/lista';
		$data['pagamentos'] = $this->pagamento->listar();

		$this->load->view('template/template', $data);
	}

	public function cadastro(){
		$data['page'] 		= 'pagamento/cadastro';
		$data['moradores'] 	= $this->morador->listar();

		$this->load->view('template/template', $data);	
	}

	public function cadastrar(){
		$data['periodo'] = $this->input->post('periodo');
		$data['morador_id'] = $this->input->post('morador');

		if($this->input->post('situacao')){
			$data['pago'] = 1;
		}else{
			$data['pago'] = 0;	
		}

		$this->pagamento->cadastrar($data);
		
		redirect('pagamento');
	}

	public function excluir(){
		$id = $this->uri->segment(3);

		$this->pagamento->excluir($id);
		redirect('pagamento');
	}

	public function pagar(){
		$id = $this->uri->segment(3);

		$this->pagamento->pagar($id);

		redirect('pagamento');
	}

	public function segundaVia(){
		$data['page'] = 'pagamento/segundavia';

		$id = $this->uri->segment(3);
		$data['pagamento'] = $this->pagamento->get($id);

		$this->load->view('template/template', $data);
	}

}

/* End of file pagamento.php */
/* Location: ./application/controllers/pagamento.php */