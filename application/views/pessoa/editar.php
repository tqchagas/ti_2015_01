<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php echo form_open('pessoa/cadastrar'); ?>

    <input type="hidden" name="id" value="<?php echo $pessoa[0]->id ?>">

    <input type="text" name="nome" value="<?php echo $pessoa[0]->nome ?>"/>

    <input type="date" name="nascimento" value="<?php echo $pessoa[0]->nascimento ?>"/>

    <input type="text" name="cpf" value="<?php echo $pessoa[0]->cpf ?>"/>

    <input type="text" name="email" value="<?php echo $pessoa[0]->email ?>"/>

    <input type="text" name="usuario" value="<?php echo $pessoa[0]->usuario ?>"/>

    <input type="password" name="senha"value="<?php echo $pessoa[0]->senha ?>"/>

    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <?php echo form_close(); ?>
</body>
</html>