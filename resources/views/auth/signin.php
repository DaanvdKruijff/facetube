<?php $app->render('shared/header'); ?>

<div class="container">
    <h1>Sign in</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="post">
        <div class="form-group">
            <label>E-mailadres</label>
            <input type="email" name="email" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label>Wachtwoord</label>
            <input type="password" name="password" class="form-control" required="required">
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>

<?php $app->render('shared/footer'); ?>
