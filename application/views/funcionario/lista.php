      <h1 class="page-header">Gestão de Funcionários</h1>
      
      <form method="POST" action="<?=site_url('funcionario/cadastrar')?>">
        <select name="pessoa" id="pessoa">
          <?foreach ($pessoas as $key => $value):?>
            <option value="<?=$value->id?>"><?=$value->nome?></option>
          <?endforeach?>
        </select>
        <select name="cargo" id="cargo">
          <?foreach ($cargos as $key => $value):?>
            <option value="<?=$value->id?>"><?=$value->descricao?></option>
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
            
            <?foreach ($funcionarios as $key => $value):?>
              <tr>
                <td><?=$value->id_funcionario?></td>
                <td><?=$value->nome?></td>
                <td><?=$value->cpf?></td>
                <td><?=$value->cargo?></td>
                <td><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
                <td><a href='<?=site_url("funcionario/excluir/$value->id_funcionario")?>' onclick="return confirm('Deseja realmente excluir?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
              </tr>
            <?endforeach?>
          </tbody>
        </table>
      </div>