<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="format-detection" content="telephone=no">

    <?php if (isset($title)): ?>
        <title><?php echo htmlspecialchars($title); ?> - <?php echo htmlspecialchars($app->get('name')); ?></title>
    <?php else: ?>
        <title><?php echo htmlspecialchars($app->get('name')); ?></title>
    <?php endif; ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>
<body>
