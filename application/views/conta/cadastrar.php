      <h1 class="page-header">Cadastrar Conta</h1>

    <?php $attr = array('class' => ''); ?>
    <?php echo form_open('conta/cadastrar', $attr); ?>
        <div class="control-group"> 
            <div class="form-group">
                <label class="control-label" for="descricao">Descrição</label>  
                <input name="descricao" type="text" placeholder="Nome" class="form-control" required> 
            </div>

            <div class="form-group">
                <label class="control-label" for="tipo">Tipo de Conta: </label>
                <br />
                <input type="radio" name="tipo-conta" id="credito" value="C" checked> Crédito
                <br />
                <input type="radio" name="tipo-conta" id="debito" value="D" checked> Débito
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Data de Vencimento</label>  
                <input name="vencimento" type="date" placeholder="Data inicial" class="form-control" required style="width: 180px"> 
                <label class="control-label" for="nome">Data de Pagamento</label>  
                <input name="pagamento" type="date" placeholder="Data final" class="form-control" style="width: 180px"> 
            </div>

            <div class="form-group">
                <label class="control-label" for="valor">Valor</label>
                <div class="input-group">
                    <div class="input-group-addon">R$</div>
                        <input type="text" class="form-control" name="valor" placeholder="500,00" style="width: 150px">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Cadastrar</button>
                <a href="<?= base_url('conta')?>" class="btn btn-danger" role="button">Cancelar</a>
            </div>
        </div>    
    
 
    <?php echo form_close(); ?>


  <script type="text/javascript">
    var path = '<?php echo site_url(); ?>'
  </script>