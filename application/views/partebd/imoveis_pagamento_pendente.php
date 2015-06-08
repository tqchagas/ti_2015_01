<h4 class="page-header">Seleciona o nome, número do imóvel e o valor pendente de pagamaneto de condomínio de cada usuário que possui pendência de pagamentos</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imóvel</th>
                <th>Pendente</th>
            </tr>
                <?foreach ($imoveis_pagamento_pendente as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->imovel?></td>
                        <td><?=$d->pendente?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>