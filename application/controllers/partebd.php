<?php

class ParteBD extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ParteBD_model', 'bd');
    }


    public function dados_funcionario()
    {
        $data['page'] = 'partebd/dados_funcionario';
        $data['dados_funcionario'] = $this->bd->dados_funcionario();
        $this->load->view('template/template', $data);
    }

    public function dados_morador()
    {
        $data['page'] = 'partebd/dados_morador';
        $data['dados_morador'] = $this->bd->dados_morador();
        $this->load->view('template/template', $data);
    }
    public function reclamacoes_morador()
    {
        $data['page'] = 'partebd/reclamacoes_morador';
        $data['reclamacoes_morador'] = $this->bd->reclamacoes_morador();
        $this->load->view('template/template', $data);
    }
    public function morador_salao_reclamacoes()
    {
        $data['page'] = 'partebd/morador_salao_reclamacoes';
        $data['morador_salao_reclamacoes'] = $this->bd->morador_salao_reclamacoes();
        $this->load->view('template/template', $data);
    }
    public function funcionario_morador()
    {
        $data['page'] = 'partebd/funcionario_morador';
        $data['funcionario_morador'] = $this->bd->funcionario_morador();
        $this->load->view('template/template', $data);
    }
    public function visitantes_morador()
    {
        $data['page'] = 'partebd/visitantes_morador';
        $data['visitantes_morador'] = $this->bd->visitantes_morador();
        $this->load->view('template/template', $data);
    }
    public function imoveis_pagamento_pendente()
    {
        $data['page'] = 'partebd/imoveis_pagamento_pendente';
        $data['imoveis_pagamento_pendente'] = $this->bd->imoveis_pagamento_pendente();
        $this->load->view('template/template', $data);
    }
    public function morador_gastos()
    {
        $data['page'] = 'partebd/morador_gastos';
        $data['morador_gastos'] = $this->bd->morador_gastos();
        $this->load->view('template/template', $data);
    }

    public function imovel_maior_numero_reclamacoes()
    {
        $data['page'] = 'partebd/imovel_maior_numero_reclamacoes';
        $data['imovel_maior_numero_reclamacoes'] = $this->bd->imovel_maior_numero_reclamacoes();
        $this->load->view('template/template', $data);
    }
    public function morador_joao()
    {
        $data['page'] = 'partebd/morador_joao';
        $data['morador_joao'] = $this->bd->morador_joao();
        $this->load->view('template/template', $data);
    }
    public function moradores_bh_sp()
    {
        $data['page'] = 'partebd/moradores_bh_sp';
        $data['moradores_bh_sp'] = $this->bd->moradores_bh_sp();
        $this->load->view('template/template', $data);
    }
    public function pagamento_pendente()
    {
        $data['page'] = 'partebd/pagamento_pendente';
        $data['pagamento_pendente'] = $this->bd->pagamento_pendente();
        $this->load->view('template/template', $data);
    }
    public function imovel_visitantes_reclamacoes()
    {
        $data['page'] = 'partebd/imovel_visitantes_reclamacoes';
        $data['imovel_visitantes_reclamacoes'] = $this->bd->imovel_visitantes_reclamacoes();
        $this->load->view('template/template', $data);
    }
    public function pessoa_localizacao()
    {
        $data['page'] = 'partebd/pessoa_localizacao';
        $data['pessoa_localizacao'] = $this->bd->pessoa_localizacao();
        $this->load->view('template/template', $data);
    }

}