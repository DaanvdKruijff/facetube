<?php $app->render('shared/header');

print_r($posts);
print_r($videos);
print_r($comments);
exit();

?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Berichten</h2>

            <ul style="margin:0; padding:0;">
                <?php foreach ($posts as $post): ?>
                    <li style="list-style-type:none;">
                        <strong><?php echo htmlspecialchars($post['Titel']); ?></strong>
                        <br />

                        <?php echo htmlspecialchars($post['Inhoud']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-sm-4">
            <h2>Video's</h2>

            <ul style="margin:0; padding:0;">
                <?php foreach ($videos as $video): ?>
                    <li style="list-style-type:none;">
                        <strong><?php echo htmlspecialchars($video['Titel']); ?></strong>
                        <br />

                        <video src="/assets/video/<?php echo htmlspecialchars($video['VideoID']); ?>.mp4" controls="controls" style="width:100%;"></video>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-sm-4">
            <h2>Reacties</h2>

            <ul style="margin:0; padding:0;">
                <?php foreach ($comments as $comment): ?>
                    <li style="list-style-type:none;">
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
