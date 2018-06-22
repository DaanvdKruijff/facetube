<?php

$app->route('/', [$controllers['HomeController'], 'index']);

// Auth
$app->route('/auth/signup', [$controllers['AuthController'], 'signup']);
$app->route('/auth/signin', [$controllers['AuthController'], 'signin']);


// Post
$app->route('/post/create', [$controllers['PostsController'], 'create']);
$app->route('/post/view', [$controllers['PostsController'], 'view']);