<h4 class="page-header">Seleciona o nome do morador, o número do imóvel e a média de gastos de cada imóvel</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imóvel</th>
                <th>Média gasto</th>
            </tr>
                <?foreach ($morador_gastos as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->imovel?></td>
                        <td><?=$d->media_gasto?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>