<?php $app->render('shared/header'); ?>

<div class="container">
    <h1>Inloggen</h1>

    <?php if (isset($error)): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="post">
        <div class="form-group">
            <label>E-mailadres</label>
            <input type="email" name="email" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label>Wachtwoord</label>
            <input type="password" name="password" class="form-control" required="required">
        </div>

        <button type="submit" class="btn btn-primary">Inloggen</button>
    </form>
</div>

<?php $app->render('shared/footer'); ?>
