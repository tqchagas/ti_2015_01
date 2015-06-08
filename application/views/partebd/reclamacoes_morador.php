<h4 class="page-header">Projeta o nome do morador e o numero do imóvel com maior incidência de reclamações</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imovel</th>
            </tr>
                <?foreach ($reclamacoes_morador as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->imovel?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>