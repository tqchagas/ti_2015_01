<h1 class="page-header">Rateio de Despesas</h1>
</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Imovel</th>
        <th>Valor</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($imoveis as $key => $imovel):?>
        <tr style="color: red">
          <td><?=$imovel->numero?></td>
          <td><?=$rateio->valor?></td>
        </tr>
      <?endforeach?>
    </tbody>
  </table>
</div>