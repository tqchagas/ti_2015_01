
 <h1 class="page-header">Emitir balancete</h1>

    <?php echo form_open('balancete/'); ?>
        <div class="control-group"> 
            <div class="form-group">
                <label class="control-label" for="nome">Data inicial</label>  
                <input name="data_inicial" type="date" placeholder="Data inicial" class="form-control" required> 
                <label class="control-label" for="nome">Data final</label>  
                <input name="data_final" type="date" placeholder="Data final" class="form-control" required> 
            </div>

            
            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Balancete</button>
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
            </tr>
            	<?php foreach ($lista_creditos as $credito): ?>
            		<tr>
            		<td>Crédito</td>
            		<td>R$ <?= $credito->valor ?></td>
            		<td><?= $credito->descricao ?></td>
            		</tr>
            	<?php endforeach ?>
            	<?php foreach ($lista_debitos as $debitos): ?>
            		<tr>
            		<td>Débito</td>
            		<td>R$ <?= $debitos->valor ?></td>
            		<td><?= $debitos->descricao ?></td>
            		</tr>
            	<?php endforeach ?>
            	<tr><td>Saldo</td><td>R$ <?= $total_creditos->total - $total_debitos->total ?></td></tr>
            </tr>
            </thead>
            <tbody>
            </tbody>
</div>   
 
