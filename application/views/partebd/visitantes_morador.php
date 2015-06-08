<h4 class="page-header">Seleciona o nome do morador, o número do imóvel e a soma de visitantes cadastrados no sistema para cada morador</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Número</th>
                <th>Número visitante</th>
            </tr>
                <?foreach ($visitantes_morador as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->numero?></td>
                        <td><?=$d->numero_visitantes?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>
