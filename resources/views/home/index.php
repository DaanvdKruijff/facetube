<?php $app->render('shared/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Berichten</h2>

            <ul>
                <?php foreach ($posts as $post): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($post['Titel']); ?></strong>
                        <br />

                        <?php echo htmlspecialchars($post['Inhoud']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-sm-4">
            <h2>Video's</h2>

            <ul>
                <?php foreach ($videos as $video): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($video['Titel']); ?></strong>
                        <br />

                        <video src="/assets/video/<?php echo htmlspecialchars($video['VideoID']); ?>.mp4" style="width: 100%"></video>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-sm-4">
            <h2>Reacties</h2>

            <ul>
                <?php foreach ($comments as $comment): ?>
                    <li>
                        <strong>Gebruiker: <?php echo htmlspecialchars($comment['GebruikerID']); ?></strong>
                        <br />

                        <?php echo htmlspecialchars($comment['Inhoud']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<?php $app->render('shared/footer'); ?>
