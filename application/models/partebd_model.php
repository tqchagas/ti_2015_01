<?php
class ParteBD_model extends CI_Model 
{

	public function __construct() 
	{
		parent::__construct();
	}

	// Seleciona o nome e o cargo de cada funcionário cadastrado no sistema.
	public function dados_funcionario() 
	{
		return $this->db->query('SELECT P.nome, C.descricao
								FROM pessoa P
								JOIN funcionario F
									ON P.id = F.pessoa_id
								JOIN morador M
									ON M.pessoa_id = F.pessoa_id
								JOIN cargo C
									ON C.id = F.cargo_id')->result();
	}

	// Seleciona o nome do morador, o número do imóvel e as datas de aluguel do salão de festa para cada morador que o alugou
	public function dados_morador() 
	{
		return $this->db->query('SELECT P.nome, I.numero, re.data_inicial inicio, re.data_final termino
								FROM pessoa P
								JOIN morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON P.id = M.pessoa_id
								JOIN reserva_espaco re
									ON I.id = re.imovel_id')->result();
	}

	// Projeta o nome do morador e o numero do imóvel com maior incidência de reclamações
	public function reclamacoes_morador()
	{
		return $this->db->query('SELECT P.nome, I.numero AS imovel
								FROM pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON M.imovel_id = I.id
								JOIN ocorrencia_reclamacoes O
									ON O.imovel_id = I.id
								HAVING MAX(DISTINCT(O.imovel_id))
									UNION
								SELECT P.nome, I.numero AS imovel
									FROM pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON M.imovel_id = I.id
								JOIN visitante V
									ON V.imovel_id = I.id
								GROUP BY P.nome
									HAVING MAX(DISTINCT(V.imovel_id))')->result();
	}

	// Seleciona o número e o bloco do imóvel que possui salão de festas, mas que não possui ocorrências e reclamações.
	public function morador_salao_reclamacoes()
	{
		return $this->db->query('SELECT I.numero, I.bloco
								FROM Imovel I
								JOIN reserva_espaco re
									ON re.imovel_id = I.id 
								AND 
								I.id NOT IN 
								(SELECT I.id
									FROM Imovel I
								JOIN ocorrencia_reclamacoes ocr
									ON I.id = ocr.imovel_id)')->result();
	}


	// Seleciona nome e email da pessoa que é funcionário e morador
	public function funcionario_morador()
	{
		return $this->db->query('SELECT p.nome, p.email
								FROM pessoa AS p
								INNER  JOIN morador AS m
								ON p.id = m.pessoa_id
								INNER  JOIN funcionario AS f
								ON p.id = f.pessoa_id')->result();
	}

	// Seleciona o nome do morador, o número do imóvel e a soma de visitantes cadastrados no sistema para cada morador
	public function visitantes_morador()
	{
		return $this->db->query('SELECT p.nome, i.numero, COUNT(*) AS numero_visitantes
								FROM pessoa AS p
								INNER JOIN morador as m
									ON (p.id = m.pessoa_id)
								INNER JOIN imovel as i
									ON (i.id = m.imovel_id)
								INNER JOIN visitante AS v
									ON (v.imovel_id = i.id)
								GROUP BY i.numero')->result();
									}

	// Seleciona o nome, número do imóvel e o valor pendente de pagamaneto de condomínio de cada usuário que possui pendência de pagamentos
	public function imoveis_pagamento_pendente()
	{
		return $this->db->query('SELECT P.nome, I.numero AS imovel, COUNT(Pag.id) * SUM(I.valor_condominio) AS pendente
								FROM pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON M.imovel_id = I.id
								JOIN pagamento Pag
									ON M.id = Pag.morador_id
								WHERE Pag.pago = 0')->result();
	}

	// Seleciona o nome do morador, o número do imóvel e a média de gastos de cada imóvel
	public function morador_gastos()
	{
		return $this->db->query('SELECT P.nome, I.numero AS imovel, AVG(R.valor) media_gasto
								FROM pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON M.imovel_id = I.id
								LEFT JOIN receita R
									ON I.id = R.imovel_id
								GROUP BY P.nome')->result();
	}

	// Seleciona o nome do morador, o número do imóvel e o número de reclamações dos imóveis com o menor número de reclamações
	public function imovel_maior_numero_reclamacoes()
	{
		return $this->db->query('SELECT P.nome, I.numero AS imovel, COUNT(*) AS reclamacoes
								FROM pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON M.imovel_id = I.id
								JOIN ocorrencia_reclamacoes O
									ON O.imovel_id = I.id
								GROUP BY P.nome
									HAVING COUNT(*) =
								(
								SELECT COUNT(DISTINCT(imovel_id)) count
									FROM ocorrencia_reclamacoes
								GROUP BY imovel_id
									HAVING COUNT(count) = MIN(count)
								)')->result();
	}

	// Seleciona o nome do morador e o número do imóvel de todos os moradores que o nome comece "João"
	public function morador_joao()
	{
		return $this->db->query('SELECT P.nome, I.numero AS imovel
								FROM pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN imovel I
									ON M.imovel_id = I.id
								HAVING P.nome LIKE "Joao%"')->result();
	}

	// Seleciona o nome e cidade de todas as pessoas que possuem como cidade Belo Horizonte ou São Paulo.
	public function moradores_bh_sp()
	{
		return $this->db->query('SELECT p.nome, c.descricao
								FROM pessoa AS p
								INNER JOIN endereco AS e
								ON e.id = p.endereco_id
								INNER JOIN cidade as c
								ON c.id = e.cidade_id
								WHERE
								c.descricao IN ("Belo Horizonte", "São Paulo")')->result();

	}

	// Seleciona o nome e cfp de todos os moradores que possuem pagamentos pendentes entre os anos de 2000 e 2005
	public function pagamento_pendente()
	{
		return $this->db->query('SELECT P.nome, P.cpf
								FROM Pessoa P
								JOIN Morador M
									ON P.id = M.pessoa_id
								JOIN Pagamento Pa
									ON M.id = Pa.morador_id
								WHERE Pa.pago = 0 AND Pa.ANO BETWEEN 2000 AND 2005')->result();
	}

	public function imovel_visitantes_reclamacoes()
	{
		return $this->db->query('SELECT numero, reclamacoes FROM imovel_visitantes_reclamacoes')->result();
	}


	public function pessoa_localizacao() 
	{
		return $this->db->query('SELECT * FROM pessoa_localizacao')->result();
	}
}