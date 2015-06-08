
 <h1 class="page-header">3º entrega Banco de Dados</h1>


<h4>Seleciona o nome e o cargo de cada funcionário cadastrado no sistema</h4>
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



<h4>Seleciona o nome do morador, o número do imóvel e as datas de aluguel do salão de festa para cada morador que o alugou</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Número</th>
                <th>Data inicio</th>
                <th>Data término</th>
            </tr>
                <?foreach ($dados_morador as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->numero?></td>
                        <td><?=$d->inicio?></td>
                        <td><?=$d->termino?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div> 


 
<h4>Projeta o nome do morador e o numero do imóvel com maior incidência de reclamações</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imovel</th>
            </tr>
                <?foreach ($reclamacoes_morador as $d):?>
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


<h4>Seleciona o número e o bloco do imóvel que possui salão de festas, mas que não possui ocorrências e reclamações</h4>
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


<h4>Seleciona nome e email da pessoa que é funcionário e morador</h4>
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


<h4>Seleciona o nome do morador, o número do imóvel e a soma de visitantes cadastrados no sistema para cada morador</h4>
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




<h4>Seleciona o nome, número do imóvel e o valor pendente de pagamaneto de condomínio de cada usuário que possui pendência de pagamentos</h4>
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



<h4>Seleciona o nome do morador, o número do imóvel e a média de gastos de cada imóvel</h4>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Imóvel</th>
                <th>Média gasto</th>
            </tr>
                <?foreach ($morador_gastos as $d):?>
                        <td><?=$d->nome?></td>
                        <td><?=$d->imovel?></td>
                        <td><?=$d->media_gasto?></td>
                    </tr>
                <?endforeach?>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>