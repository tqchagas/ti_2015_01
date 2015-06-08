<h4 class="page-header">Seleciona nome e email da pessoa que é funcionário e morador</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
                <?foreach ($funcionario_morador as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->email?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>
