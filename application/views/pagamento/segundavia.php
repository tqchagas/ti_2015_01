<h1 class="page-header">Segunda Via - <?=$pagamento->periodo?></h1>
<div>	
<dl class="dl-horizontal">
	<dt>Nome: </dt> <dd><?= $pagamento->nome ?> </dd> 
	<dt>Data nascimento: </dt> <dd><?= $pagamento->data_nascimento ?> </dd> 
	<dt>Telefone: </dt> <dd><?= $pagamento->telefone ?> </dd> 
	<dt>Celular: </dt> <dd><?= $pagamento->celular ?> </dd> 
	<dt>Email: </dt> <dd><?= $pagamento->email ?> </dd> 
	<dt>Usuario: </dt> <dd><?= $pagamento->usuario ?> </dd> 
	<dt>CEP: </dt> <dd><?= $pagamento->cep ?> </dd> 
	<dt>Logradouro: </dt> <dd><?= $pagamento->logradouro . ', ' .$pagamento->numero . ' - ' . $pagamento->complemento ?> </dd> 
	<dt>Bairro: </dt> <dd><?= $pagamento->bairro ?> </dd>
	<dt>Cidade: </dt> <dd><?= $pagamento->cidade_nome ?> </dd>
	<dt>Estado: </dt> <dd><?= $pagamento->estado_nome ?> </dd>
	<dt>País: </dt> <dd><?= $pagamento->pais ?> </dd>
</dl>

<h2 style="float: right">Valor: R$<?=$pagamento->valor_condominio?></h2>
<a href="<?php echo base_url('pagamento');?>" style="position: relative; top: 50px">Voltar</a>