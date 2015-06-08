<h4 class="page-header">Seleciona o nome do morador, o número do imóvel e as datas de aluguel do salão de festa para cada morador que o alugou</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Número</th>
                <th>Data inicio</th>
                <th>Data término</th>
            </tr>
                <?foreach ($dados_morador as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->numero?></td>
                        <td><?=$d->inicio?></td>
                        <td><?=$d->termino?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 