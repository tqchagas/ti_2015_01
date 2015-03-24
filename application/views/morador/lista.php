<h1 class="page-header">Gestão de Moradores</h1>
<h4>Adicionar Morador</h4>
<form method="POST" action="<?=site_url('morador/cadastrar')?>">
  <select name="pessoa" id="pessoa">
    <?foreach ($pessoas as $key => $pessoa):?>
      <option value="<?=$pessoa->id?>"><?=$pessoa->nome?></option>
    <?endforeach?>
  </select>
  
  <select name="imovel" id="imovel">
    <?foreach ($imoveis as $key => $imovel):?>
      <option value="<?=$imovel->id?>"><?=$imovel->numero?></option>
    <?endforeach?>
  </select>

  <input type="submit" class="btn btn-success cadastra" value="Cadastrar">
</form>

<h2 class="sub-header">Moradores</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Imovel</th>
        <th>Visulizar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($moradores as $key => $morador):?>
        <tr>
          <td><?=$morador->id_morador?></td>
          <td><?=$morador->nome?></td>
          <td><?=$morador->cpf?></td>
          <td><?=$morador->imovel?></td>
          <td><a href="#" data-id="<?=$morador->id_morador?>" data-toggle="modal" data-target="#modalVisualizar"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
          <td><a href='<?=site_url("morador/excluir/$morador->id_morador")?>' onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
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
        <h4 class="modal-title">Detalhes do Morador</h4>
      </div>
      <div class="modal-body">
        <label for="usuario">Usuário: </label>
        <span class="usuario"></span>
        <br />
        <label for="nome">Nome: </label>
        <span class="nome"></span>
        <br />
        <label for="nascimento">Nascimento: </label>
        <span class="nascimento"></span>
        <br />
        <label for="cpf">CPF: </label>
        <span class="cpf"></span>
        <br />
        <label for="telefone">Telefone: </label>
        <span class="telefone"></span>
        <br />
        <label for="email">E-Mail: </label>
        <span class="email"></span>
        <br />
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
      
      $.ajax({
          url: '<?=site_url("morador/visualizar")?>',
          type: 'post',
          dataType: 'json',
          data: {
            id:id
          },
          success: function (response) {
            $('#modalVisualizar').find('.usuario').html(response.usuario);
            $('#modalVisualizar').find('.nome').html(response.nome);
            $('#modalVisualizar').find('.nascimento').html(response.nascimento);
            $('#modalVisualizar').find('.cpf').html(response.cpf);
            $('#modalVisualizar').find('.telefone').html(response.telefone);
            $('#modalVisualizar').find('.email').html(response.email);
          }
        });
    });


  });
</script>