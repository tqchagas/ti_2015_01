<h1 class="page-header">Contas</h1>
<a href="<?=site_url('conta/cadastro')?>" class="btn btn-primary" role="button">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Conta
</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Vencimento</th>
        <th>Pagamento</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($contas as $key => $conta):?>
        <tr style="color: <?=$conta->balanco == "D" ? "red" : "green"?>">
          <td><?=$conta->id_conta?></td>
          <td><?=$conta->descricao?></td>
          <td><?=$conta->data_vencimento?></td>
          <td><?=$conta->data_pagamento?></td>
          <td><?=$conta->balanco?></td>
          <td><?=$conta->valor?></td>
          <td><a href="#" data-nome="<?=$conta->descricao?>" data-id="<?=$conta->id_conta?>" data-toggle="modal" data-target="#modalEditar"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
          <td><a href='<?=site_url("conta/excluir/$conta->id_conta")?>' onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
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
        <h4 class="modal-title">Editar Conta - <span class="conta"></span></h4>
      </div>
      <div class="modal-body">
        <input type="hidden" class="id_conta" data-id="">
        <input name="data_pagamento" id="edita-pagamento" type="date" placeholder="Data de Pagamento" class="form-control" required> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary edita-conta">Salvar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
  $(function () {

    $('#modalEditar').on('shown.bs.modal', function (event) {
      var id = $(event.relatedTarget).data('id');
      var nome = $(event.relatedTarget).data('nome');
      $('#modalEditar').find('.conta').html(nome);
      $('#modalEditar').find('.id_conta').data('id', id);
    });

    $('#modalEditar').on('click', '.edita-conta', function(e){
      var data_pagamento = $('#edita-pagamento').val();
      var id_conta = $('#modalEditar').find('.id_conta').data('id');

      $.ajax({
          url: '<?=site_url("conta/editar")?>',
          type: 'post',
          dataType: 'json',
          data: {
            data_pagamento : data_pagamento,
            id_conta : id_conta
          },
          success: function (response) {
            window.location.href = '<?=site_url("conta")?>';
          }
        });
    });


  });
</script>