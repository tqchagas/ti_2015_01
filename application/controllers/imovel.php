<?php

class Imovel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Imoveis_model', 'imoveis');
	}

	public function index()
	{
		$dados['titulo'] = "Imoveis - Listagem";
		$dados['imoveis'] = $this->imoveis->listar_imoveis();
		$this->load->view('imovel/index.php', $dados);
	}

	public function visualizar($id) {
		$dados['imovel'] = $this->imoveis->listar_imoveis($id);
		$dados['titulo'] = "Imovel ". $id . " - Visualizar";
		$this->load->view('imovel/visualizar', $dados);
	}

	public function adicionar($id = null) {
		if ($id === null) {
			$dados['titulo'] = 'Imoveis - Cadastrar';
			$this->load->view('imovel/adicionar', $dados);
		} else {
			$dados['titulo'] = 'Imoveis - Editar';
			$dados['imovel'] = $this->imoveis->listar_imoveis($id);
			$this->load->view('imovel/editar', $dados);
		}
	}

	public function cadastrar() {
		//$this->load->library('form_validation');
		$data['id'] = $this->input->post('id');
		echo $data['id'];
		die();
		$data['numero'] = $this->input->post('numero');
		$data['bloco'] = $this->input->post('bloco');
		$data['quantidade_vagas'] = $this->input->post('quantidade_vagas');
		$data['quantidade_quartos'] = $this->input->post('quantidade_quartos');
		$data['quantidade_banheiros'] = $this->input->post('quantidade_banheiros');
		$data['metragem'] = $this->input->post('metragem');
		$data['valor_condominio'] = $this->input->post('valor_condominio');

		$this->imoveis->cadastrar($data);
	}

	public function atualizar() {
		//$this->load->library('form_validation');
		$data['id'] = $this->input->post('id');
		$data['numero'] = $this->input->post('numero');
		$data['bloco'] = $this->input->post('bloco');
		$data['quantidade_vagas'] = $this->input->post('quantidade_vagas');
		$data['quantidade_quartos'] = $this->input->post('quantidade_quartos');
		$data['quantidade_banheiros'] = $this->input->post('quantidade_banheiros');
		$data['metragem'] = $this->input->post('metragem');
		$data['valor_condominio'] = $this->input->post('valor_condominio');

		$this->imoveis->cadastrar($data);
	}

	public function deletar($id) {
		$resposta = $this->imoveis->deletar($id);
		if ($resposta === -1) {
			die('teste');
		}
	}
}