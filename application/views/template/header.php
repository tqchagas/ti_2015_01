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
	<script src="<?=base_url('assets/js/npm.js')?>"></script>


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
					<li><a href="<?= base_url('balancete')?>">Balancete</a></li>
					<li><a href="<?= base_url('segunda_via')?>">2º Via</a></li>
			</ul>
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Search...">
			</form>
			</div>
		</div>
	</nav>

<div class="container-fluid" style="padding-top: 25px;">
  <div class="row">
    <div class="col-sm-9 col-md-offset-1 col-md-10 main">