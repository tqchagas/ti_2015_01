 <h4 class="page-header">Seleciona o nome e o cargo de cada funcionário cadastrado no sistema</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
            </tr>
            	<?foreach ($dados_funcionario as $d):?>
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