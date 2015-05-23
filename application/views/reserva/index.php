<h1 class="page-header">Espaços reservados</h1>
<div class="table-responsive">
        
        <a href="<?= base_url('reserva/reservar')?>" class="btn btn-primary" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nova Reserva
        </a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Imovel</th>
              <th>Espaço</th>
              <th>Data inicial</th>
              <th>Data final</th>
              <th>Custo</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($reservas as $reserva): ?>
                <tr>
                    <td><?= $reserva->id;?></td>
                    <td><?= $reserva->nome;?></td>
                    <td><?= $reserva->numero ." - ". $reserva->bloco?></td>
                    <td><?= $reserva->data_inicial;?></td>
                    <td><?= $reserva->data_final;?></td>
                    <td><?= $reserva->custo;?></td>
                </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>