<h1 class="page-header">Gestão de Pessoas</h1>
<div class="table-responsive">	
    	<dl class="dl-horizontal">
			<dt>Nome: </dt> <dd><?= $pessoa[0]->pessoa_nome ?> </dd> 
			<dt>Data nascimento: </dt> <dd><?= $pessoa[0]->data_nascimento ?> </dd> 
			<dt>Telefone: </dt> <dd><?= $pessoa[0]->telefone ?> </dd> 
			<dt>Celular: </dt> <dd><?= $pessoa[0]->celular ?> </dd> 
			<dt>Email: </dt> <dd><?= $pessoa[0]->email ?> </dd> 
			<dt>Usuario: </dt> <dd><?= $pessoa[0]->usuario ?> </dd> 
			<dt>CEP: </dt> <dd><?= $pessoa[0]->cep ?> </dd> 
			<dt>Logradouro: </dt> <dd><?= $pessoa[0]->logradouro . ', ' .$pessoa[0]->numero . ' - ' . $pessoa[0]->complemento ?> </dd> 
			<dt>Bairro: </dt> <dd><?= $pessoa[0]->bairro ?> </dd>
			<dt>Cidade: </dt> <dd><?= $pessoa[0]->cidade_descricao ?> </dd>
			<dt>Estado: </dt> <dd><?= $pessoa[0]->estado_descricao ?> </dd>
			<dt>País: </dt> <dd><?= $pessoa[0]->pais ?> </dd>
		</dl>
		<a href="<?php echo base_url('pessoa');?>">Voltar</a>
		<a href="<?php echo base_url('pessoa/adicionar/'.$pessoa[0]->pessoa_id);?>">Editar</a>
		<a href="<?php echo base_url('pessoa/deletar/'.$pessoa[0]->pessoa_id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
		