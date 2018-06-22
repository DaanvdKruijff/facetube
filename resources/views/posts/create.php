<?php $app->render('shared/header'); ?>

<div class="container">
	<form name="PostMaken" method="post" target="">
		<label>Titel</label><br>
			<input type="text" name="titel"><br>
		
		<label>Inhoud</label><br>
			<textarea name="inhoud"></textarea><br>
		
		<label>Video</label><br>
			<input type="file" name="video"><br>
		
		<input type="submit" value="Plaatsen" name="submit">
	</form>
</div>

<?php $app->render('shared/footer'); ?>
