      <h1 class="page-header">Gestão de Funcionários</h1>
      
      <form method="POST" action="<?=site_url('funcionario/cadastrar')?>">
        <select name="setor" id="setor">
          <?foreach ($pessoas as $key => $value):?>
            <option value="<?=$value->id?>"><?=$value->nome?></option>
          <?endforeach?>
        </select>
        <select name="setor" id="setor">
          <?foreach ($cargos as $key => $value):?>
            <option value="<?=$value->id?>"><?=$value->descricao?></option>
          <?endforeach?>
        </select>
        <input type="submit" class="btn btn-success cadastra" value="Enviar">
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
                <td><?=$value->id?></td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
                <td><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left: 20px;"></span></a></td>
              </tr>
            <?endforeach?>
          </tbody>
        </table>
      </div>