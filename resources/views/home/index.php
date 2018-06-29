<?php $app->render('shared/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php echo print_r($posts, true); ?>
        </div>

        <div class="col-sm-4">
            <?php echo print_r($videos, true); ?>
        </div>

        <div class="col-sm-4">
            <?php echo print_r($comments, true); ?>
        </div>
    </div>
</div>

<?php $app->render('shared/footer'); ?>
