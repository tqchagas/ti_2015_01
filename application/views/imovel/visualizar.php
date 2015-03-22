<h1 class="page-header">Gestão de imoveis</h1>
<div class="table-responsive">	
    	<dl class="dl-horizontal">
			<dt>Número: </dt> <dd><?= $imovel[0]->numero ?> </dd> 
			<dt>Número de quartos: </dt> <dd><?= $imovel[0]->quantidade_quartos ?> </dd> 
			<dt>Metragem: </dt> <dd><?= $imovel[0]->metragem ?> </dd> 
			<dt>Número de banheiros: </dt> <dd><?= $imovel[0]->quantidade_banheiros ?> </dd> 
			<dt>Bloco: </dt> <dd><?= $imovel[0]->bloco ?> </dd> 
			<dt>Número de vagas: </dt> <dd><?= $imovel[0]->quantidade_vagas ?> </dd> 
			<dt>Valor comdomínio: </dt> <dd><?= $imovel[0]->valor_condominio ?> </dd> 
		</dl>
		<a href="<?php echo base_url('imovel');?>">Voltar</a>
		<a href="<?php echo base_url('imovel/adicionar/'.$imovel[0]->id);?>">Editar</a>
		<a href="<?php echo base_url('imovel/deletar/'.$imovel[0]->id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
