 <h4 class="page-header">Seleciona todos os imóveis e a quantidade de ocorrência de reclamações</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Número</th>
                <th>Reclamações</th>
            </tr>
                <?foreach ($imovel_visitantes_reclamacoes as $d):?>
                        <td><?=$d->numero?></td>
                        <td><?=$d->reclamacoes?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 