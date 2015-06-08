 <h4 class="page-header">Seleciona o nome e cfp de todos os moradores que possuem pagamentos pendentes entre os anos de 2000 e 2005</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
            </tr>
            	<?foreach ($pagamento_pendente as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->cpf?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 