<?php $render('header'); ?>

<hr>

Meu nome é
<?php echo $nome; ?> <br>
Minha idade é
<?php echo $idade; ?> <br>

<hr>
    
<?php foreach ($posts as $post): ?>
    <h3>
        <?php echo $post['titulo']; ?>
    </h3>
    <p>
        <?php echo $post['corpo']; ?>
    </p>
<?php endforeach; ?>