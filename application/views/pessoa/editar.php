<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/estados.js'; ?>"></script>
    <script type="text/javascript">
        var path = '<?php echo site_url(); ?>'
    </script>
    
</head>
<body>
    <?php $attr = array('class' => 'form-horizontal'); ?>
    <?php echo form_open('pessoa/atualizar', $attr); ?>
    <fieldset>
        <legend>Cadastro </legend>
        <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $pessoa[0]->id; ?>"/>
            <label class="control-label" for="nome">Nome</label>
            <div class="controls">
                <input name="nome" type="text" placeholder="Nome" class="input-xlarge" value="<?php echo $pessoa[0]->nome ?>"required>
            </div>
            <label class="control-label" for="nome">Data nascimento</label>
            <div class="controls">
                <input name="data_nascimento" type="date" placeholder="Nome" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>
            <label class="control-label" for="nome">Cpf</label>
            <div class="controls">
                <input name="cpf" type="text" placeholder="cpf" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div> 
            <label class="control-label" for="nome">Email</label>
            <div class="controls">
                <input name="email" type="email" placeholder="email" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>  
            <label class="control-label" for="nome">Usuário</label>
            <div class="controls">
                <input name="usuario" type="text" placeholder="usuario" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>  
            <label class="control-label" for="nome">Senha</label>
            <div class="controls">
                <input name="senha" type="Password" placeholder="senha" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>  
            <label class="control-label" for="nome">Telefone</label>
            <div class="controls">
                <input name="telefone" type="text" placeholder="telefone" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>  
            <label class="control-label" for="nome">Celular</label>
            <div class="controls">
                <input name="celular" type="text" placeholder="celular" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>  
            <label class="control-label" for="nome">Cep</label>
            <div class="controls">
                <input name="cep" type="text" placeholder="cep" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>" required>
            </div>  
            <label class="control-label" for="nome">Logradouro</label>
            <div class="controls">
                <input name="logradouro" type="text" placeholder="logradouro" class="input-xlarge" value="<?php echo $pessoa[0]->data_nascimento ?>"required>
            </div>  
            <label class="control-label" for="nome">Número</label>
            <div class="controls">
                <input name="numero" type="text" placeholder="numero" class="input-xlarge" required>
            </div>  
            <label class="control-label" for="nome">Complemento</label>
            <div class="controls">
                <input name="complemento" type="text" placeholder="complemento" class="input-xlarge" required>
            </div>  
            <label class="control-label" for="nome">Bairro</label>
            <div class="controls">
                <input name="bairro" type="text" placeholder="Bairro" class="input-xlarge" required>
            </div>  
            <label class="control-label" for="nome">Estado</label>
            <div class="controls">
                <?php
                    $options = array ('' => 'Escolha');
                    foreach($estados as $estado)
                        $options[$estado->id] = $estado->nome;
                    echo form_dropdown('estado_id', $options);
                ?>
            </div>  
            <label class="control-label" for="nome">Cidade</label>
            <div class="controls">
                <?php echo form_dropdown('cidade_id', array('' => 'Escolha um Estado'), '','id="cidade"' ); ?>
            </div>  
            <label class="control-label" for="nome">pais</label>
            <div class="controls">
                <input name="pais" type="text" placeholder="pais" class="input-xlarge" required>
            </div>  

            <div class="controls">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>    
    </fieldset>
 
    <?php echo form_close(); ?>

</body>
</html>