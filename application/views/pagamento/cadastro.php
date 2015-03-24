<h1 class="page-header">Novo Boleto</h1>

<?php $attr = array('class' => ''); ?>
<?php echo form_open('pagamento/cadastrar', $attr); ?>
<div class="control-group"> 
    <div class="form-group">
        <label class="control-label" for="descricao">Morador</label>  
        <select name="morador" id="morador">
            <?foreach ($moradores as $key => $morador):?>
                <option value="<?=$morador->id_morador?>"><?=$morador->nome?></option>
            <?endforeach?>
        </select>


    </div>

    <div class="form-group">
        <label class="control-label" for="mes">Período </label>
        <input name="periodo" type="month" class="form-control" required style="width: 180px"> 
    </div>

    <div class="form-group" style="width: 30px;">
        <label class="control-label" for="valor">Pago?</label>
        <input type="checkbox" class="form-control" name="situacao" value="1">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">Cadastrar</button>
        <a href="<?= base_url('pagamento/cadastrar')?>" class="btn btn-danger" role="button">Cancelar</a>
    </div>
</div>    


<?php echo form_close(); ?>


  <script type="text/javascript">
    var path = '<?php echo site_url(); ?>'
  </script>