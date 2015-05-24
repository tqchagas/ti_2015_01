<h1 class="page-header">Pagamento Condomínio</h1>
<a href="<?=site_url('pagamento/cadastro')?>" class="btn btn-primary" role="button">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Pagamento
</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Período</th>
        <th>Valor</th>
        <th>Pago?</th>
        <th>Marcar Pago</th>
        <th>Segunda Via</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($pagamentos as $key => $pagamento):?>
        <tr style="color: <?=$pagamento->pago == "0" ? "red" : "green"?>">
          <td><?=$pagamento->id_pagamento?></td>
          <td><?=$pagamento->nome?></td>
          <td><?=$pagamento->periodo?></td>
          <td>R$ <?=$pagamento->valor_condominio?></td>
          <td><?=$pagamento->pago == "1" ? "Sim" : "Não"?></td>
          <?php if ($pagamento->pago == "0"): ?>
            <td><a href="<?=site_url('pagamento/pagar/'.$pagamento->id_pagamento)?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
          <?php else: ?>
            <td></td>
          <?php endif ?>
          <td><a href='<?=site_url("pagamento/segundavia/$pagamento->id_pagamento")?>'><span class="glyphicon glyphicon-th-list" aria-hidden="true" style="margin-left: 40px;"></span></a></td>
          <td><a href='<?=site_url("pagamento/excluir/$pagamento->id_pagamento")?>' onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
        </tr>
      <?endforeach?>
    </tbody>
  </table>
</div>

<div id="modalEditar" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Conta - <span class="pagamento"></span></h4>
      </div>
      <div class="modal-body">
        <input type="hidden" class="id" data-id="">
        <input name="data_pagamento" id="edita-pagamento" type="date" placeholder="Data de Pagamento" class="form-control" required> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary edita-pagamento">Salvar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
  $(function () {

    $('#modalEditar').on('shown.bs.modal', function (event) {
      var id = $(event.relatedTarget).data('id');
      var nome = $(event.relatedTarget).data('nome');
      $('#modalEditar').find('.pagamento').html(nome);
      $('#modalEditar').find('.id').data('id', id);
    });

    $('#modalEditar').on('click', '.edita-pagamento', function(e){
      var data_pagamento = $('#edita-pagamento').val();
      var id = $('#modalEditar').find('.id').data('id');

      $.ajax({
          url: '<?=site_url("pagamento/editar")?>',
          type: 'post',
          dataType: 'json',
          data: {
            data_pagamento : data_pagamento,
            id : id
          },
          success: function (response) {
            window.location.href = '<?=site_url("pagamento")?>';
          }
        });
    });


  });
</script>