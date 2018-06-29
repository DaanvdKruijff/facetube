<?php $app->render('shared/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php var_dump($posts); ?>
        </div>

        <div class="col-sm-4">
            <?php var_dump($videos); ?>
        </div>

        <div class="col-sm-4">
            <?php var_dump($comments); ?>
        </div>
    </div>
</div>

<?php $app->render('shared/footer'); ?>
