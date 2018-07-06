<?php $app->render('shared/header'); ?>

<div class="container">
	<h1>Maak een bericht</h1>
	<form name="PostMaken" method="post" target="">
		
		<div class="form-group">
			<label>Titel</label><br>
				<input type="text" class="form-control" name="titel"><br>
		</div>

		<div class="form-group">
			<label>Inhoud</label><br>
				<textarea name="inhoud" class="form-control"></textarea><br>
		</div>

		<div class="form-group">
			<label>Video</label><br>
				<input type="file" class="form-control" name="video"><br><br>
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Plaatsen" name="submit">
		</div>
	</form>
</div>

<?php $app->render('shared/footer'); ?>
