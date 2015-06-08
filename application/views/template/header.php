<html>
<head>
	<meta charset="UTF-8">
	<title>Trabalho Integrado 2015/01</title>
	
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css.map')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-theme.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-theme.css.map')?>">
	
	<script src="<?=base_url('assets/js/jquery-2.1.3.min.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/js/estados.js')?>"></script>


</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?= base_url() ?>">Sistema Gerenciador de Condomínio</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url('pessoa')?>">Pessoas</a></li>
					<li><a href="<?= base_url('morador')?>">Moradores</a></li>
					<li><a href="<?= base_url('funcionario')?>">Funcionários</a></li>
					<li><a href="<?= base_url('imovel')?>">Imovéis</a></li>
					<li id="fat-menu" class="dropdown">
						<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
							Espaços
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('espaco')?>">Espaços</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('reserva')?>">Reservas</a></li>
						</ul>
					</li>
					<li id="fat-menu" class="dropdown">
						<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
							Financeiro
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('conta')?>">Contas</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('pagamento')?>">Condomínio</a></li>
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('balancete')?>">Balancete</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('pagamento/relatorio_pendencia_pagamento')?>">Relatório pendência pagamento</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('pagamento/rateio')?>">Rateio de Despesas</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('nadaconsta')?>">Emitir "Nada Consta"</a></li>
						</ul>
					</li>
					<li id="fat-menu" class="dropdown">
						<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
							Outros
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="drop4">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('reclamacao')?>">Reclamações</a></li>
						</ul>
					</li>
					<li id="fat-menu" class="dropdown">
						<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
							3º Entrega BD
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="drop4">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/dados_funcionario')?>">Dados funcionário</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/dados_morador')?>">Dados morador</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/reclamacoes_morador')?>">Reclamações morador</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/morador_salao_reclamacoes')?>">Reclamações morador salão festas</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/funcionario_morador')?>">Funcionário morador</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/visitantes_morador')?>">Visitantes morador</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/imoveis_pagamento_pendente')?>">Imóveis pagamento pendente</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/morador_gastos')?>">Morador gastos</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/imovel_maior_numero_reclamacoes')?>">Imóvel maior número reclamações</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/morador_joao')?>">Morador João</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/moradores_bh_sp')?>">Moradores BH/SP</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/pagamento_pendente')?>">Pagamento pendente</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/imovel_visitantes_reclamacoes')?>">VIEW - Imóvel visitantes reclamações</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url('partebd/pessoa_localizacao')?>">VIEW - Pessoa localização</a></li>


						</ul>
					</li>
				</ul>
			<!-- <form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Search...">
			</form> -->
			</div>
		</div>
	</nav>

<div class="container-fluid" style="padding-top: 25px;">
  <div class="row">
    <div class="col-sm-9 col-md-offset-1 col-md-10 main">