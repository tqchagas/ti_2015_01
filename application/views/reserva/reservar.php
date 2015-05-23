      <h1 class="page-header">Reservar</h1>

    <?php $attr = array('class' => '', 'id'=>'form-reservar'); ?>
    <?php echo form_open('reserva/efetuar_reserva', $attr); ?>
        <div class="form-group"style="color: red;">
            <h2><?php print_r($this->session->flashdata('espaco_alugado')); ?></h2>
        </div>
        
        <div class="control-group">
            <div class="form-group">
                <label class="control-label" for="descricao">Imóvel</label>  
                <select name="imovel" id="imovel">
                    <?foreach ($imoveis as $key => $imovel):?>
                        <option value="<?=$imovel->id?>"><?=$imovel->numero." - ".$imovel->bloco?></option>
                    <?endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="descricao">Espaço</label>  
                <select name="espaco" id="espaco">
                    <?foreach ($espacos as $key => $espaco):?>
                        <option value="<?=$espaco->id?>"><?=$espaco->nome?></option>
                    <?endforeach?>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Data inicial</label>  
                <input name="data_inicial" id="data_inicial" type="date" placeholder="Data inicial" class="form-control" required style="width: 180px"> 
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Data final</label>  
                <input name="data_final" id="data_final" type="date" placeholder="Data final" class="form-control" required style="width: 180px"> 
            </div>
            <div class="form-group" id="custos" style="display: none;">
                <label class="control-label" for="nome">Custo R$</label>
                <input name="custo" id="custo" type="text" class="form-control" readonly="readonly" style="width: 180px"> 
            </div>
            <div class="form-group">
                <button type="submit" id="reservar" class="btn btn-success pull-right">Reservar</button>
                <a href="<?= base_url('reserva')?>" class="btn btn-danger" role="button">Cancelar</a>
            </div>
        </div>    
    
 
    <?php echo form_close(); ?>


  <script type="text/javascript">
    var path = '<?php echo site_url(); ?>'
    $(function(){
        var espaco = $('#espaco');
        var data_inicial = $('#data_inicial');
        var data_final = $('#data_final');
        var form = $('form-reservar');
        data_final.blur(function(){
                data1 = new Date(data_inicial.val());
                data2 = new Date(data_final.val());
                var dias = dateDiferencaEmDias( data1, data2 );

                function dateDiferencaEmDias(a, b) {
                   // Descartando timezone e horário de verão
                   var utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
                   var utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

                   return Math.floor((utc2 - utc1) / ( 1000 * 60 * 60 * 24) );
                }

                if (dias == 0){
                    //$('#custos').show();
                    alert('Selecione dias diferentes');
                } else {
                    $.ajax({
                        url:'<?=site_url("reserva/valor_espaco")?>',
                        data: {
                            'espaco': espaco.val(),
                        },
                        dataType: 'json',
                        type: 'GET',
                        success: function(data){
                            $('#custos').show();
                            var total = dias * data['custo_dia'];
                            $('#custo').val(total);
                        }
                    });
                }
        });
    });
  </script>