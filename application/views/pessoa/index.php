<h1 class="page-header">Gestão de Pessoas</h1>


<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>CPF</th>
              <th>Telefone</th>
              <th>Celular</th>
              <th>E-mail</th>
              <th>Visulizar</th>
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>
          <tbody>
			<?php foreach ($pessoas as $pessoa): ?>
	            <tr>
					<td><?php echo $pessoa->id;?></td>
					<td><?php echo $pessoa->cpf;?></td>
					<td><?php echo $pessoa->telefone;?></td>
					<td><?php echo $pessoa->celular;?></td>
					<td><?php echo $pessoa->email;?></td>
					<td><a href="<?php echo base_url('pessoa/visualizar/'.$pessoa->id);?>"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
					<td><a href="<?php echo base_url('pessoa/adicionar/'.$pessoa->id);?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
					<td><a href="<?php echo base_url('pessoa/deletar/'.$pessoa->id);?>" onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
	            </tr>
			<?php endforeach ?>
          </tbody>
        </table>
      </div>

<b><?php print_r($this->session->flashdata('naoExclusaoPessoa')); ?></b>
<b><?php print_r($this->session->flashdata('exclusaoPessoa')); ?></b>