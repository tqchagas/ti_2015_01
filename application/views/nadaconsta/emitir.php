<h1 class="page-header">Emitir Nada Consta</h1>

<?php $attr = array('class' => ''); ?>
<?php echo form_open('nadaconsta/emitir', $attr); ?>
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
        <button type="submit" class="btn btn-success pull-right">Emitir Relatório</button>
        <a href="<?= base_url('')?>" class="btn btn-danger" role="button">Cancelar</a>
    </div>
</div>    


<?php echo form_close(); ?>


  <script type="text/javascript">
    var path = '<?php echo site_url(); ?>'
  </script>