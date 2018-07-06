<!DOCTYPE html>
<html>
<head>
    <!-- Meta-tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="format-detection" content="telephone=no">

    <?php if (isset($title)): ?>
        <title><?php echo htmlspecialchars($title); ?> - <?php echo htmlspecialchars($app->get('name')); ?></title>
    <?php else: ?>
        <title><?php echo htmlspecialchars($app->get('name')); ?></title>
    <?php endif; ?>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>
<body>
    <nav class="navbar sticky-top navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="/assets/images/FaceTube.png" width="110" height="50" class="d-inline-block align-top" alt="">
      </a>
        <div class="collapse navbar-collapse" id="navbarText">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/auth/signin">Inloggen</a>
                </li>
                <li>
                    <a href="/auth/signup">Registreren</a>
                </li>
            </ul>
        </div>
    </nav>
</body>