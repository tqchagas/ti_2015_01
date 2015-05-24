<h1 class="page-header">Reclamações</h1>
<a href="<?=site_url('reclamacao/cadastro')?>" class="btn btn-primary" role="button">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Reclamação
</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Imóvel</th>
        <th>Morador</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Visualizar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($reclamacoes as $key => $reclamacao):?>
        <tr>
          <td><?=$reclamacao->imovel?></td>
          <td><?=$reclamacao->morador?></td>
          <td><?=$reclamacao->descricao?></td>
          <td><?=$reclamacao->data?></td>
          <td><a href="#" data-data="<?=$reclamacao->data?>" data-imovel="<?=$reclamacao->imovel?>" data-morador="<?=$reclamacao->morador?>" data-desc="<?=$reclamacao->descricao?>" data-id="<?=$reclamacao->id?>" data-toggle="modal" data-target="#modalVisualizar"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
          <td><a href='<?=site_url("reclamacao/excluir/$reclamacao->id")?>' onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
        </tr>
      <?endforeach?>
    </tbody>
  </table>
</div>

<div id="modalVisualizar" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reclamação - <span class="descricao-reclamacao"></span></h4>
      </div>
      <div class="modal-body">
        <b>Imóvel: </b><span class="imovel-value"></span>
        <br />
        <b>Morador: </b><span class="morador-value"></span>
        <br />
        <b>Descrição: </b><span class="descricao-value"></span>
        <br />
        <b>Data: </b><span class="data-value"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
  $(function () {

    $('#modalVisualizar').on('shown.bs.modal', function (event) {
      var id = $(event.relatedTarget).data('id');
      var descricao = $(event.relatedTarget).data('desc');
      var imovel = $(event.relatedTarget).data('imovel');
      var morador = $(event.relatedTarget).data('morador');
      var data = $(event.relatedTarget).data('data');
      $('#modalVisualizar').find('.descricao-reclamacao').html(descricao);
      $('#modalVisualizar').find('.imovel-value').html(imovel);
      $('#modalVisualizar').find('.morador-value').html(morador);
      $('#modalVisualizar').find('.descricao-value').html(descricao);
      $('#modalVisualizar').find('.data-value').html(data);
    });


  });
</script>