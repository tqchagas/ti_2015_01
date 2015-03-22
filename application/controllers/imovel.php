<?php

class Imovel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Imoveis_model', 'imoveis');
	}

	public function index()
	{
		$dados['page']    = 'imovel/index';
		$dados['imoveis'] = $this->imoveis->listar_imoveis();
		$this->load->view('template/template', $dados);
	}

	public function visualizar($id) {
		$dados['page']   = 'imovel/visualizar';
		$dados['imovel'] = $this->imoveis->listar_imoveis($id);
		$this->load->view('template/template', $dados);
	}

	public function adicionar($id = null) {
		if ($id === null) {
			$dados['page']   = 'imovel/adicionar';
			$this->load->view('template/template', $dados);
		} else {
			$dados['page']   = 'imovel/editar';
			$dados['imovel'] = $this->imoveis->listar_imoveis($id);
			$this->load->view('template/template', $dados);
		}
	}

	public function cadastrar() {
		$data['numero']               = $this->input->post('numero');
		$data['bloco']                = $this->input->post('bloco');
		$data['quantidade_vagas']     = $this->input->post('quantidade_vagas');
		$data['quantidade_quartos']   = $this->input->post('quantidade_quartos');
		$data['quantidade_banheiros'] = $this->input->post('quantidade_banheiros');
		$data['metragem']             = $this->input->post('metragem');
		$data['valor_condominio']     = $this->input->post('valor_condominio');
		$this->imoveis->cadastrar($data);
	}

	public function atualizar() {
		$data['id']                   = $this->input->post('id');
		$data['numero']               = $this->input->post('numero');
		$data['bloco']                = $this->input->post('bloco');
		$data['quantidade_vagas']     = $this->input->post('quantidade_vagas');
		$data['quantidade_quartos']   = $this->input->post('quantidade_quartos');
		$data['quantidade_banheiros'] = $this->input->post('quantidade_banheiros');
		$data['metragem']             = $this->input->post('metragem');
		$data['valor_condominio']     = $this->input->post('valor_condominio');
		$this->imoveis->cadastrar($data);
	}

	public function deletar($id) {
		$this->imoveis->deletar($id);
	}
}