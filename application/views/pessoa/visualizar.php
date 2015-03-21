<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		
			<?php echo $pessoa[0]->id;?>
			<?php echo $pessoa[0]->nome;?>
			<?php echo $pessoa[0]->nascimento;?>
			<?php echo $pessoa[0]->telefone;?>
			<?php echo $pessoa[0]->email;?>
			<?php echo $pessoa[0]->usuario;?>
			<a href="<?php echo base_url('pessoa/adicionar/'.$pessoa[0]->id);?>">Editar</a>
			<a href="<?php echo base_url('pessoa/deletar/'.$pessoa[0]->id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
			<a href="<?php echo base_url('pessoa');?>">Voltar</a>
		</tr>
	</body>
</html>