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
