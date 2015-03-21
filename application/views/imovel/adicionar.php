<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php echo form_open('imovel/adicionar'); ?>
 
    <input type="text" name="numero" value="<?php echo set_value('nome'); ?>"/>

    <input type="text" name="bloco" value="<?php echo set_value('email'); ?>"/>

    <input type="number" min="1" max="5" name="quantidade_vagas"/>

    <input type="number" min="1" max="5" name="quantidade_banheiros"/>


    <input type="text" name="valor_condominio"/>

    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <?php echo form_close(); ?>
</body>
</html>