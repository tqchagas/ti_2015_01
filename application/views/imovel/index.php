<h1 class="page-header">Gestão de Imóveis</h1>
<div class="table-responsive">
        
        <a href="<?= base_url('imovel/adicionar')?>" class="btn btn-primary" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar
        </a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Número</th>
              <th>Número quartos</th>
              <th>Metragem</th>
              <th>Número banheiros</th>
              <th>Bloco</th>
              <th>Número vagas</th>
              <th>Visualizar</th>
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>
          <tbody>
			<?php foreach ($imoveis as $imovel): ?>
	            <tr>
					<td><?= $imovel->id;?></td>
					<td><?= $imovel->numero;?></td>
					<td><?= $imovel->quantidade_quartos;?></td>
					<td><?= $imovel->metragem;?></td>
					<td><?= $imovel->quantidade_banheiros;?></td>
					<td><?= $imovel->bloco;?></td>
					<td><?= $imovel->quantidade_vagas;?></td>
					<td><a href="<?= base_url('imovel/visualizar/'.$imovel->id);?>"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
					<td><a href="<?= base_url('imovel/adicionar/'.$imovel->id);?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
					<td><a href="<?= base_url('imovel/deletar/'.$imovel->id);?>" onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
	            </tr>
			<?php endforeach ?>
          </tbody>
        </table>
      </div>
<b><?php print_r($this->session->flashdata('naoExclusaoImovel')); ?></b>
