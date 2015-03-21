<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php echo form_open('imovel/cadastrar'); ?>

    <input type="text" name="numero" value="<?php echo set_value('numero'); ?>"/>

    <input type="text" name="bloco" value="<?php echo set_value('email'); ?>"/>

    <input type="number" min="1" max="5" name="quantidade_vagas" value="<?php echo set_value('quantidade_vagas'); ?>"/>

    <input type="number" min="1" max="5" name="quantidade_quartos" value="<?php echo set_value('quantidade_quartos'); ?>"/>

    <input type="number" min="1" max="5" name="quantidade_banheiros" value="<?php echo set_value('quantidade_banheiros'); ?>"/>
    
    <input type="text" name="metragem" value="<?php echo set_value('metragem'); ?>"/>

    <input type="text" name="valor_condominio" value="<?php echo set_value('valor_condominio'); ?>"/>

    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <?php echo form_close(); ?>
</body>
</html>