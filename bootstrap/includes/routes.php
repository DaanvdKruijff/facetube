<?php

$app->route('/', [$controllers['HomeController'], 'index']);

// Auth
$app->route('/auth/signup', [$controllers['AuthController'], 'signup']);
$app->route('/auth/signin', [$controllers['AuthController'], 'signin']);

// Dashboard
$app->route('/dashboard', [$controllers['DashboardController'], 'index']);

<<<<<<< HEAD
// Posts
$app->route('/post/create', [$controllers['PostsController'], 'create']);
=======
// Post
$app->route('/post/create', [$controllers['PostsController'], 'create']);
$app->route('/post/view', [$controllers['PostsController'], 'view']);
>>>>>>> 1837b993e5f487439223e234597ef129f80750c8
