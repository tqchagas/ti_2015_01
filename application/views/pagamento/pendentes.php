<h1 class="page-header">Pendentes Pagamento</h1>
</a>
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
      
      <?foreach ($pagamentos as $key => $pagamento):?>
        <?php $data = date_create($pagamento->periodo); ?>
        <tr style="color: red">
          <td><?=$pagamento->id_pagamento?></td>
          <td><?=$pagamento->nome?></td>
          <td><?= date_format($data, 'm/Y')?></td>
          <td><?=$pagamento->bloco?></td>
          <td><?=$pagamento->numero?></td>
        </tr>
      <?endforeach?>
    </tbody>
  </table>
</div>