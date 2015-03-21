<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		<table>
			<?php foreach ($imoveis as $imovel): ?>
				<tr>
					<td><?php echo $imovel->id;?></td>
					<td><?php echo $imovel->numero;?></td>
					<td><?php echo $imovel->quantidade_quartos;?></td>
					<td><?php echo $imovel->metragem;?></td>
					<td><?php echo $imovel->quantidade_banheiros;?></td>
					<td><?php echo $imovel->bloco;?></td>
					<td><?php echo $imovel->quantidade_vagas;?></td>
					<td><a href="<?php echo base_url('imovel/visualizar/'.$imovel->id);?>">Visualizar</a></td>
					<td><a href="<?php echo base_url('imovel/adicionar/'.$imovel->id);?>">Editar</a></td>
					<td><a href="<?php echo base_url('imovel/deletar/'.$imovel->id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a></td>
				</tr>
			<?php endforeach ?>
		</table>

		<b><?php print_r($this->session->flashdata('naoExclusaoImovel')); ?></b>
	</body>
</html>