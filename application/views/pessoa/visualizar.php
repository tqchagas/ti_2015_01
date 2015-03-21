<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		
			<?php echo $pessoa[0]->id;?> <br/>
			<?php echo $pessoa[0]->nome;?> <br/>
			<?php echo $pessoa[0]->data_nascimento;?> <br/>
			<?php echo $pessoa[0]->telefone;?> <br/>
			<?php echo $pessoa[0]->celular;?> <br/>
			<?php echo $pessoa[0]->email;?> <br/>
			<?php echo $pessoa[0]->usuario;?> <br/>
			<a href="<?php echo base_url('pessoa/adicionar/'.$pessoa[0]->id);?>">Editar</a>
			<a href="<?php echo base_url('pessoa/deletar/'.$pessoa[0]->id);?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
			<a href="<?php echo base_url('pessoa');?>">Voltar</a>
		</tr>
	</body>
</html>