<?php $render('header'); ?>

<a href="/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td>
                <?= $usuario['id']; ?>
            </td>
            <td>
                <?= $usuario['name']; ?>
            </td>
            <td>
                <?= $usuario['email']; ?>
            </td>
            <td>
                <a href="/usuario/<?= $usuario['id']; ?>/editar">
                    <img width="20" src="/assets/images/document.jpg" alt="Editar" />
                </a>
                <a href="/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza?')">
                    <img width="20" src="/assets/images/trash.jpg" alt="Excluir" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>