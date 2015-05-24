
 <h1 class="page-header">Emitir balancete</h1>

    <?php echo form_open('/balancete/calcular'); ?>
        <div class="control-group"> 
            <div class="form-group">
                <label class="control-label" for="nome">Data inicial</label>  
                <input name="data_inicial" type="date" placeholder="Data inicial" class="form-control" required> 
                <label class="control-label" for="nome">Data final</label>  
                <input name="data_final" type="date" placeholder="Data final" class="form-control" required> 
            </div>

            
            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Emitir Balancete</button>
            </div>
        </div>    
    <?php echo form_close(); ?>
<div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data</th>
            </tr>
            	<?foreach ($contas as $key => $conta):?>
                    <tr style="color: <?=$conta->balanco == "D" ? "red" : "green"?>">
                        <td><?=$conta->balanco?></td>
                        <td>R$ <?=$conta->valor?></td>
                        <td><?=$conta->descricao?></td>
                        <td><?=$conta->data_vencimento?></td>
                    </tr>
                <?endforeach?>
            	<tr>
                    <td>Total</td>
                    <td style="color: <?=$total->valor >= 0 ? "green" : "red"?>">R$ <?=$total->valor ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tr>
            </thead>
            <tbody>
            </tbody>
</div>   
 
