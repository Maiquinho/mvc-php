<?php $render('header'); ?>


<h2>Editar usuário</h2>

<form action="<?= "$base/user/$user[id]/edit" ?>" method="POST">
    <div>
        <label for="name">Nome:</label>
        <input id="name" type="text" name="name" value="<?= $user['name'] ?>" />
    </div>
    <div>
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" value="<?= $user['email'] ?>" />
    </div>
    <div>
        <input type="submit" value="Salvar" />
    </div>
</form>


<?php $render('footer'); ?>