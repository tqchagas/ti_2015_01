      <h1 class="page-header">Cadastrar Reclamação</h1>

    <?php $attr = array('class' => ''); ?>
    <?php echo form_open('reclamacao/cadastrar', $attr); ?>
        <div class="control-group">
            <div class="form-group">
                <label class="control-label" for="descricao">Imóvel</label>  
                <select name="imovel" id="imovel">
                    <?foreach ($imoveis as $key => $imovel):?>
                        <option value="<?=$imovel->id?>"><?=$imovel->numero?></option>
                    <?endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="descricao">Descrição</label>
                <br />
                <textarea name="descricao" id="descricao" cols="40" rows="10" placeholder="Descreva a Reclamação"></textarea>
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Data da Ocorrência</label>  
                <input name="data" type="date" placeholder="Data inicial" class="form-control" required style="width: 180px"> 
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