<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		<table>
			<?php foreach ($pessoas as $pessoa): ?>
				<tr>
					<td><?php echo $pessoa->id;?></td>
					<td><?php echo $pessoa->cpf;?></td>
					<td><?php echo $pessoa->telefone;?></td>
					<td><?php echo $pessoa->email;?></td>
					<td><a href="<?php echo base_url('pessoa/visualizar/'.$pessoa->id);?>">Visualizar</a></td>
					<td><a href="<?php echo base_url('pessoa/adicionar/'.$pessoa->id);?>">Editar</a></td>
					<td><a href="<?php echo base_url('pessoa/deletar/'.$pessoa->id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a></td>
				</tr>
			<?php endforeach ?>
		</table>
		<b><?php print_r($this->session->flashdata('naoExclusaoPessoa')); ?></b>
		<b><?php print_r($this->session->flashdata('exclusaoPessoa')); ?></b>
	</body>
</html>