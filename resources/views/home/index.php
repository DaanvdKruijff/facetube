<?php $app->render('shared/header'); ?>

<div class="container">
    Hello World!

    <?php var_dump($app->get('db')); ?>
</div>

<?php $app->render('shared/footer'); ?>
