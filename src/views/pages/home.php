<?php $render('header'); ?>


<a href="<?= "$base/new" ?>">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="<?= "$base/user/$user[id]/edit" ?>">[Edit]</a>
                <a href="<?= "$base/user/$user[id]/delete" ?>">[Delete]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php $render('footer'); ?>