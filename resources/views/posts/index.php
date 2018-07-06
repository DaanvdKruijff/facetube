<?php $app->render('shared/header'); ?>

<div class="container">
	<?php 
	$sql = $posts;
	foreach ($posts as $post) {?>
		<div>
			<h1>Post title <?php echo $post['Titel']; ?></h1>
		</div>
		<div>
			<?php echo $post['Inhoud'];?>
		</div>
	<?php }
	 ?>
</div>

<?php $app->render('shared/footer'); ?>
