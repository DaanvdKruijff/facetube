<?php $app->render('shared/header'); ?>

<div class="container">
	<form name="PostMaken" method="post" target="">
		<label>Titel</label>
			<input type="text" name="titel">
		
		<label>Inhoud</label>
			<textarea name="inhoud"></textarea>
		
		<label>Video</label>
			<input type="file" name="video">
		
		<input type="submit" value="Plaatsen" name="submit">
	</form>
</div>

<?php $app->render('shared/footer'); ?>
