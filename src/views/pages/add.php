<?php $render('header'); ?>


<h2>Adicionar novo usuário</h2>

<form action="<?= "$base/new" ?>" method="POST">
    <div>
        <label for="name">Nome:</label>
        <input id="name" type="text" name="name" />
    </div>
    <div>
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" />
    </div>
    <div>
        <input type="submit" value="Enviar" />
    </div>
</form>


<?php $render('footer'); ?>