<?php $app->render('shared/header'); ?>

<div class="container">
	<h1>Maak een bericht</h1>
	<form name="PostMaken" method="post" target="">
		<label>Titel</label><br>
			<input type="text" name="titel"><br>
		
		<label>Inhoud</label><br>
			<textarea name="inhoud"></textarea><br>
		
		<label>Video</label><br>
			<input type="file" name="video"><br><br>
		
		<input type="submit" value="Plaatsen" name="submit">
	</form>
</div>

<?php $app->render('shared/footer'); ?>
