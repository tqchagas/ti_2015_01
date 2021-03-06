      <h1 class="page-header">Cadastrar Imovél</h1>

    <?php $attr = array('class' => ''); ?>
    <?php echo form_open('imovel/cadastrar', $attr); ?>
        <div class="control-group"> 
            <div class="form-group">
                <label class="control-label" for="nome">Número</label>  
                <input name="numero" type="text" placeholder="Número" class="form-control" required> 
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Bloco</label>
                <input name="bloco" type="text" placeholder="Bloco" class="form-control" required>
            </div>            
            
            <div class="form-group">
                <label class="control-label" for="nome">Número de vagas garagem</label>
                <input name="quantidade_vagas" type="number" placeholder="Número vagas" class="form-control" required>
            </div> 
            
            <div class="form-group">
                <label class="control-label" for="nome">Número quartos</label>
                <input name="quantidade_quartos" type="number" placeholder="Número quartos" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Número banheiros</label>
                <input name="quantidade_banheiros" type="number" placeholder="Número banheiros" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Metragem</label>
                <input name="metragem" type="text" placeholder="Metragem" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Valor Condominio</label>
                <input name="valor_condominio" type="text" placeholder="Valor Condominio" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Cadastrar</button>
                <a href="<?= base_url('imovel')?>" class="btn btn-danger" role="button">Cancelar</a>
            </div>
        </div>    
    
 
    <?php echo form_close(); ?>