<?php $app->render('shared/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Berichten</h2>

            <ul>
                <?php print_r($posts); foreach ($posts as $post): ?>
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
                <?php print_r($videos); foreach ($videos as $video): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($video['Titel']); ?></strong>
                        <br />

                        <video src="/assets/videos/<?php echo htmlspecialchars($video['VideoID']); ?>.mp4"></video>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-sm-4">
            <h2>Reacties</h2>

            <ul>
                <?php print_r($comments); foreach ($comments as $comment): ?>
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
