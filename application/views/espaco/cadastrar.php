      <h1 class="page-header">Cadastrar</h1>

    <?php $attr = array('class' => '', 'id'=>'form-reservar'); ?>
    <?php echo form_open('espaco/cadastrar', $attr); ?>        
        <div class="control-group">
            <div class="form-group">

            <div class="form-group">
                <label class="control-label" for="nome">Nome</label>  
                <input name="nome" id="nome" type="text" placeholder="Nome" class="form-control" required> 
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" cols="80" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="nome">Custo/dia</label>
                <input type="number" name="custo_dia" class="form-control" min="0.01" step="0.01" max="2500" value="100.00">
           </div>
            <div class="form-group">
                <button type="submit" id="reservar" class="btn btn-success pull-right">Cadastrar</button>
                <a href="<?= base_url('reserva')?>" class="btn btn-danger" role="button">Cancelar</a>
            </div>
        </div>    
    
 
    <?php echo form_close(); ?>