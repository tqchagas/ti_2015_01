<?php

class Pessoa extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Pessoas_model', 'pessoas');
		$this->load->model('Enderecos_model', 'enderecos');
		$this->load->model('Cidades_model', 'cidades');
	}

	public function index()
	{
		$dados['titulo']  = "Pessoas - Listagem";
		$dados['pessoas'] = $this->pessoas->listar_pessoas();
		$dados['page'] = 'pessoa/index';
		$this->load->view('template/template', $dados);
	}

	public function visualizar($id) 
	{
		$dados['pessoa'] = $this->pessoas->listar_pessoas($id);
		$dados['titulo'] = "Pessoa ". $id . " - Visualizar";
		$this->load->view('pessoa/visualizar', $dados);
	}

	public function adicionar($id = null)
	{
		$dados['page'] = 'pessoa/adicionar';
		$dados['estados'] = $this->cidades->listar_estados();
		if ($id === null) {
			$dados['titulo'] = 'Pessoas - Cadastrar';
			$this->load->view('template/template', $dados);
		} else {
			$dados['titulo'] = 'pessoas - Editar';
			$dados['pessoa'] = $this->pessoas->listar_pessoas($id);
			$dados['endereco'] = $this->enderecos->listar_enderecos($dados['pessoa'][0]);
			$this->load->view('template/template', $dados);
		}
	}

	public function listar_cidades($id) 
	{
		$cidades = $this->cidades->listar_cidades($id);
		echo json_encode($cidades);
		return;
	}

	public function cadastrar() 
	{
		$data['pessoa']['nome']            = $this->input->post('nome');
		$data['pessoa']['data_nascimento'] = $this->input->post('data_nascimento');
		$data['pessoa']['cpf']             = $this->input->post('cpf');
		$data['pessoa']['email']           = $this->input->post('email');
		$data['pessoa']['usuario']         = $this->input->post('usuario');
		$data['pessoa']['senha']           = $this->input->post('senha');
		$data['pessoa']['telefone']        = $this->input->post('telefone');
		$data['pessoa']['celular']         = $this->input->post('celular');
 		$data['endereco']['cep']           = $this->input->post('cep');
		$data['endereco']['logradouro']    = $this->input->post('logradouro');
		$data['endereco']['numero']        = $this->input->post('numero');
		$data['endereco']['complemento']   = $this->input->post('complemento');
		$data['endereco']['bairro']        = $this->input->post('bairro');
		$data['endereco']['cidade_id']     = $this->input->post('cidade_id');
		$data['endereco']['estado_id']     = $this->input->post('estado_id');
		$data['endereco']['pais']          = $this->input->post('pais');
		$codigo_endereco                   = $this->enderecos->cadastrar($data['endereco']);
		$data['pessoa']['endereco_id']     = $codigo_endereco;
		$this->pessoas->cadastrar($data['pessoa']);
	}

	public function atualizar() 
	{
		$data['pessoa']['nome']            = $this->input->post('nome');
		$data['pessoa']['data_nascimento'] = $this->input->post('data_nascimento');
		$data['pessoa']['cpf']             = $this->input->post('cpf');
		$data['pessoa']['email']           = $this->input->post('email');
		$data['pessoa']['usuario']         = $this->input->post('usuario');
		$data['pessoa']['senha']           = $this->input->post('senha');
		$data['pessoa']['telefone']        = $this->input->post('telefone');
		$data['pessoa']['celular']         = $this->input->post('celular');
 		$data['endereco']['cep']           = $this->input->post('cep');
		$data['endereco']['logradouro']    = $this->input->post('logradouro');
		$data['endereco']['numero']        = $this->input->post('numero');
		$data['endereco']['complemento']   = $this->input->post('complemento');
		$data['endereco']['bairro']        = $this->input->post('bairro');
		$data['endereco']['cidade_id']     = $this->input->post('cidade_id');
		$data['endereco']['estado_id']     = $this->input->post('estado_id');
		$data['endereco']['pais']          = $this->input->post('pais');

		echo $data['endereco']['cidade_id'];
		echo $data['endereco']['estado_id'];
		die();
		$this->pessoas->cadastrar($data['pessoa']);
		$this->enderecos->cadastrar($data['endereco']);
	}

	public function deletar($id) 
	{
		$this->pessoas->deletar($id);
	}
}