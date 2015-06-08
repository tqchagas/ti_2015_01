 <h4 class="page-header">Seleciona o nome e cidade de todas as pessoas que possuem como cidade Belo Horizonte ou São Paulo</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
            	<?foreach ($moradores_bh_sp as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->descricao?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 