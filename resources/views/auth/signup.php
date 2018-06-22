<?php $app->render('shared/header'); ?>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <label>Voornaam</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <div class="form-group">
            <label>Achternaam</label>
            <input type="text" name="lastname" class="form-control">
        </div>

        <div class="form-group">
            <label>E-mailadres</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label>Wachtwoord</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
</div>

<?php $app->render('shared/footer'); ?>
