 <h4 class="page-header">Seleciona o nome do morador e o número do imóvel de todos os moradores que o nome comece "João"</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imóvel</th>
            </tr>
            	<?foreach ($morador_joao as $d):?>
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