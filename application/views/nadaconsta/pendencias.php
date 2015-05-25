<h1 class="page-header">Nada Consta</h1>
<p>Não foi possível emitir o relatório de Nada Consta para o morador <?=$morador->nome?> devido às seguintes pendências:</p>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Responsável</th>
        <th>Período</th>
        <th>Bloco</th>
        <th>Número</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($pendencias as $key => $pendencia):?>
        <?php $data = date_create($pendencia->periodo); ?>
        <tr style="color: red">
          <td><?=$pendencia->id_pagamento?></td>
          <td><?=$pendencia->nome?></td>
          <td><?= date_format($data, 'm/Y')?></td>
          <td><?=$pendencia->bloco?></td>
          <td><?=$pendencia->numero?></td>
        </tr>
      <?endforeach?>
    </tbody>
  </table>
</div>