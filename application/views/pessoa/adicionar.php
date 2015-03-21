<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php echo form_open('pessoa/cadastrar'); ?>
    
    <input type="text" name="nome" value="<?php echo set_value('numero'); ?>"/>

    <input type="date" name="data_nascimento" value="<?php echo set_value('email'); ?>"/>

    <input type="text" name="cpf" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="email" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="usuario" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="password" name="senha" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="telefone" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="celular" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="cep" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="logradouro" value="<?php echo set_value('valor_condominio'); ?>"/>
    
    <input type="text" name="numero" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="complemento" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="bairro" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="cidade_id" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="estado_id" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="text" name="pais" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <?php echo form_close(); ?>
</body>
</html>