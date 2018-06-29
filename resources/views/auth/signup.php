<?php $app->render('shared/header'); ?>

<div class="container">
    <h1>Registreren</h1>

    <?php if (isset($error)): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="post">
        <div class="form-group">
            <label>Voornaam</label>
            <input type="text" name="firstname" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label>Achternaam</label>
            <input type="text" name="lastname" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label>E-mailadres</label>
            <input type="email" name="email" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label>Gebruikersnaam</label>
            <input type="text" name="username" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label>Wachtwoord</label>
            <input type="password" name="password" class="form-control" required="required">
        </div>

        <button type="submit" class="btn btn-primary">Registreren</button>
    </form>
</div>

<?php $app->render('shared/footer'); ?>
