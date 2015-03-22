      <h1 class="page-header">Cadastrar Pessoa</h1>

    <?php $attr = array('class' => ''); ?>
    <?php echo form_open('pessoa/cadastrar', $attr); ?>
        <div class="control-group"> 
            <div class="form-group">
                <label class="control-label" for="nome">Nome</label>  
                <input name="nome" type="text" placeholder="Nome" class="form-control" required> 
            </div>

            <div class="form-group">
                <label class="control-label" for="nome">Data nascimento</label>
                <input name="data_nascimento" type="date" placeholder="Nome" class="form-control" required>
            </div>            
            
            <div class="form-group">
                <label class="control-label" for="nome">Cpf</label>
                <input name="cpf" type="text" placeholder="cpf" class="form-control" required>
            </div> 
            
            <div class="form-group">
                <label class="control-label" for="nome">Email</label>
                <input name="email" type="email" placeholder="email" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Usuário</label>
                <input name="usuario" type="text" placeholder="usuario" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Senha</label>
                <input name="senha" type="Password" placeholder="senha" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Telefone</label>
                <input name="telefone" type="text" placeholder="telefone" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Celular</label>
                <input name="celular" type="text" placeholder="celular" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Cep</label>
                <input name="cep" type="text" placeholder="cep" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Logradouro</label>
                <input name="logradouro" type="text" placeholder="logradouro" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Número</label>
                <input name="numero" type="text" placeholder="numero" class="form-control" required>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Complemento</label>
                <input name="complemento" type="text" placeholder="complemento" class="form-control">
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Bairro</label>
                <input name="bairro" type="text" placeholder="Bairro" class="form-control" required>
            </div>  

            
            <div class="form-group">
                <label class="control-label" for="nome">Estado</label>
                <?php
                    $options = array ('' => 'Escolha');
                    foreach($estados as $estado)
                        $options[$estado->id] = $estado->nome;
                    echo form_dropdown('estado_id', $options);
                ?>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">Cidade</label>
                <?php echo form_dropdown('cidade_id', array('' => 'Escolha um Estado'), '','id="cidade"' ); ?>
            </div>  
            
            <div class="form-group">
                <label class="control-label" for="nome">País</label>
                <input name="pais" type="text" placeholder="pais" class="form-control" required>
            </div>  

            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Cadastrar</button>
                <a href="<?= base_url('pessoa')?>" class="btn btn-danger" role="button">Cancelar</a>
            </div>
        </div>    
    
 
    <?php echo form_close(); ?>


  <script type="text/javascript">
    var path = '<?php echo site_url(); ?>'
  </script>