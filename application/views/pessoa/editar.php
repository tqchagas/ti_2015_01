    <h1 class="page-header">Atualizar Pessoa</h1>

    <?php $attr = array('class' => ''); ?>
    <?php echo form_open('pessoa/atualizar', $attr); ?>
        <div class="control-group"> 
            <div class="form-group">
                <input type="hidden" name="pessoa_id" value="<?= $pessoa[0]->pessoa_id ?>">
                <input type="hidden" name="endereco_id" value="<?= $pessoa[0]->endereco_id ?>">
                <label class="control-label" for="nome">Nome</label>  
                <input name="nome" type="text" placeholder="Nome" class="form-control" value="<?= $pessoa[0]->pessoa_nome ?>" required> 
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Data nascimento</label>
                <input name="data_nascimento" type="date" placeholder="Nome" class="form-control" value="<?= $pessoa[0]->data_nascimento ?>" required>
            </div>            
            
            <div class="form-group">
                <label class="control-label" for="nome">Cpf</label>
                <input name="cpf" type="text" placeholder="cpf" class="form-control" value="<?= $pessoa[0]->cpf ?>" required>
            </div> 
            
            <div class="form-group">
                <label class="control-label" for="nome">Email</label>
                <input name="email" type="email" placeholder="email" class="form-control" value="<?= $pessoa[0]->email ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Usuário</label>
                <input name="usuario" type="text" placeholder="usuario" class="form-control" value="<?= $pessoa[0]->usuario ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Senha</label>
                <input name="senha" type="Password" placeholder="senha" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Telefone</label>
                <input name="telefone" type="text" placeholder="telefone" class="form-control" value="<?= $pessoa[0]->telefone ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Celular</label>
                <input name="celular" type="text" placeholder="celular" class="form-control" value="<?= $pessoa[0]->celular ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Cep</label>
                <input name="cep" type="text" placeholder="cep" class="form-control" value="<?= $pessoa[0]->cep ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Logradouro</label>
                <input name="logradouro" type="text" placeholder="logradouro" class="form-control" value="<?= $pessoa[0]->logradouro ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Número</label>
                <input name="numero" type="text" placeholder="numero" class="form-control" value="<?= $pessoa[0]->numero ?>" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Complemento</label>
                <input name="complemento" type="text" placeholder="complemento" class="form-control" value="<?= $pessoa[0]->complemento ?>" >
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Bairro</label>
                <input name="bairro" type="text" placeholder="Bairro" class="form-control" value="<?= $pessoa[0]->bairro ?>" required>
            </div>  

            
            <div class="form-group">
                <label class="control-label" for="nome">Estado</label>
                <?php
                    $options = array ('' => 'Escolha');
                    
                    foreach($estados as $estado)
                        $options[$estado->id] = $estado->nome;
                    echo form_dropdown('estado_id', $options, '', 'id="estado"');
                ?>
                <script type="text/javascript">
                    $( document ).ready(function() {
                        $("#estado").val('<?= $pessoa[0]->estado_id ?>').trigger('change');
                    });
                </script>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Cidade</label>
                <?php echo form_dropdown('cidade_id', array('' => 'Escolha um Estado'), '','id="cidade"' ); ?>
                <script type="text/javascript">
                    setTimeout(function(){
                        $("#cidade").val('<?= $pessoa[0]->cidade_id ?>')
                    }, 2000);
                </script>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">País</label>
                <input name="pais" type="text" placeholder="pais" class="form-control" value="<?= $pessoa[0]->pais ?>" required>
            </div>  

            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Atualizar</button>
                <a href="<?= base_url('pessoa')?>" class="btn btn-danger" role="button">Cancelar</a>
            </div>
        </div>    
    
 
    <?php echo form_close(); ?>


  <script type="text/javascript">
    var path = '<?php echo site_url(); ?>'
  </script>