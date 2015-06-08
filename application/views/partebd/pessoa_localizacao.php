 <h4 class="page-header">Seleciona a cidade e estado de cada pessoa</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Pessoa</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
            	<?foreach ($pessoa_localizacao as $d):?>
                        <td><?=$d->pessoa?></td>
                        <td><?=$d->cidade?></td>
                        <td><?=$d->estado?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 