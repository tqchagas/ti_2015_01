<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		
			<?php echo $imovel[0]->id;?>
			<?php echo $imovel[0]->numero;?>
			<?php echo $imovel[0]->quantidade_quartos;?>
			<?php echo $imovel[0]->metragem;?>
			<?php echo $imovel[0]->quantidade_banheiros;?>
			<?php echo $imovel[0]->bloco;?>
			<?php echo $imovel[0]->quantidade_vagas;?>
			<?php echo $imovel[0]->valor_condominio;?>
			<a href="<?php echo base_url('imovel/adicionar/'.$imovel[0]->id);?>">Editar</a>
			<a href="<?php echo base_url('imovel/deletar/'.$imovel[0]->id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
			<a href="<?php echo base_url('imovel');?>">Voltar</a>
		</tr>
	</body>
</html>