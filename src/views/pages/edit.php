<?php $render('header'); ?>

<h2>Editar Usuário</h2>
<form method="POST" action="/usuario/<?=$usuario['id'];?>/editar">
    <label>
        Nome: <br />
        <input type="text" name="name" value="<?= $usuario['name']; ?>" />
    </label> <br /><br />

    <label>
        E-mail: <br>
        <input type="email" name="email" value="<?= $usuario['email']; ?>" />
    </label> <br /> <br />

    <input type="submit" value="Adicionar" />
</form>

<?php $render('footer'); ?>