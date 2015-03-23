<h1 class="page-header">Gestão de Funcionários</h1>

<form method="POST" action="<?=site_url('funcionario/cadastrar')?>">
  <select name="pessoa" id="pessoa">
    <?foreach ($pessoas as $key => $pessoa):?>
      <option value="<?=$pessoa->id?>"><?=$pessoa->nome?></option>
    <?endforeach?>
  </select>
  <select name="cargo" id="cargo">
    <?foreach ($cargos as $key => $cargo):?>
      <option value="<?=$cargo->id?>"><?=$cargo->descricao?></option>
    <?endforeach?>
  </select>
  <input type="submit" class="btn btn-success cadastra" value="Cadastrar">
</form>

<h2 class="sub-header">Funcionários</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Cargo</th>
        <th>Visulizar</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      
      <?foreach ($funcionarios as $key => $funcionario):?>
        <tr>
          <td><?=$funcionario->id_funcionario?></td>
          <td><?=$funcionario->nome?></td>
          <td><?=$funcionario->cpf?></td>
          <td><?=$funcionario->cargo?></td>
          <td><a href="#" data-id="<?=$funcionario->id_funcionario?>" data-toggle="modal" data-target="#modalVisualizar"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
          <td><a href="#" data-nome="<?=$funcionario->nome?>" data-id="<?=$funcionario->id_funcionario?>" data-toggle="modal" data-target="#modalEditar"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
          <td><a href='<?=site_url("funcionario/excluir/$funcionario->id_funcionario")?>' onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
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
        <h4 class="modal-title">Detalhes do Funcionário</h4>
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

<div id="modalEditar" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Cargo - <span class="pessoa"></span></h4>
      </div>
      <div class="modal-body">
        <input type="hidden" class="id_pessoa" data-id="">
        <select name="edita-cargo" id="edita-cargo">
          <?foreach ($cargos as $key => $cargo):?>
            <option value="<?=$cargo->id?>"><?=$cargo->descricao?></option>
          <?endforeach?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary edita-usuario">Salvar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
  $(function () {
    $('#modalVisualizar').on('shown.bs.modal', function (event) {
      var id = $(event.relatedTarget).data('id');
      
      $.ajax({
          url: '<?=site_url("funcionario/visualizar")?>',
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

    $('#modalEditar').on('shown.bs.modal', function (event) {
      var id = $(event.relatedTarget).data('id');
      var nome = $(event.relatedTarget).data('nome');
      $('#modalEditar').find('.pessoa').html(nome);
      $('#modalEditar').find('.id_pessoa').data('id', id);
    });

    $('#modalEditar').on('click', '.edita-usuario', function(e){
      var cargo     = $('#edita-cargo option:selected').val();
      var id_pessoa = $('#modalEditar').find('.id_pessoa').data('id');

      $.ajax({
          url: '<?=site_url("funcionario/editar")?>',
          type: 'post',
          dataType: 'json',
          data: {
            id_cargo  : cargo,
            id_pessoa : id_pessoa
          },
          success: function (response) {
            console.log(response);
            window.location.href = '<?=site_url("funcionario")?>';
          }
        });
    });


  });
</script>