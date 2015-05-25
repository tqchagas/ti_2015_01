<h1 class="page-header">Espaços</h1>
<div class="table-responsive">
        
        <a href="<?= base_url('espaco/cadastro')?>" class="btn btn-primary" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo espaco
        </a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Custo/dia</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($espacos as $espaco): ?>
                <tr>
                    <td><?= $espaco->id?></td>
                    <td><?= $espaco->nome?></td>
                    <td><?= $espaco->descricao?></td>
                    <td>R$ <?= $espaco->custo_dia?></td>
                </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>