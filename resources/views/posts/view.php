<?php $app->render('shared/header'); ?>

<div class="container">
	<form name="CommentMaken" method="post" target="">
		<label>Inhoud</label>
			<textarea name="inhoud"></textarea>	
		<input type="submit" value="Plaatsen" name="submit">
	</form>
</div>

<?php $app->render('shared/footer'); ?>
