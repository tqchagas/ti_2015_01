<h4 class="page-header"> Seleciona o número e o bloco do imóvel que possui salão de festas, mas que não possui ocorrências e reclamações</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Número</th>
                <th>Bloco</th>
            </tr>
                <?foreach ($morador_salao_reclamacoes as $d):?>
                        <td><?=$d->numero?></td>
                        <td><?=$d->bloco?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>
