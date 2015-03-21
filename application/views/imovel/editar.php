<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
</head>
<body>
    <?php echo form_open('imovel/atualizar'); ?>

    <input type="hidden" name="id" value="<?php echo $imovel[0]->id ?>" />
 
    <input type="text" name="numero" value="<?php echo $imovel[0]->numero ?>"/>

    <input type="text" name="bloco" value="<?php echo $imovel[0]->bloco ?>"/>

    <input type="number" min="1" max="5" name="quantidade_vagas" value="<?php echo $imovel[0]->quantidade_vagas ?>"/>

    <input type="number" min="1" max="5" name="quantidade_quartos" value="<?php echo $imovel[0]->quantidade_quartos ?>"/>

    <input type="number" min="1" max="5" name="quantidade_banheiros" value="<?php echo $imovel[0]->quantidade_banheiros ?>"/>
    
    <input type="text" name="metragem" value="<?php echo $imovel[0]->metragem ?>"/>

    <input type="text" name="valor_condominio" value="<?php echo $imovel[0]->valor_condominio ?>"/>

    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <?php echo form_close(); ?>
</body>
</html>