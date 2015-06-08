 <h4 class="page-header">Seleciona o nome do morador, o número do imóvel e o número de reclamações dos imóveis com o menor número de reclamações</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imóvel</th>
                <th>Reclamações</th>
            </tr>
            	<?foreach ($imovel_maior_numero_reclamacoes as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->imovel?></td>
                        <td><?=$d->reclamacoes?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 