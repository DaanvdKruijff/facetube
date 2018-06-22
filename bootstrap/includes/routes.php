<?php

$app->route('/', [$controllers['HomeController'], 'index']);

// Auth
$app->route('/auth/signup', [$controllers['AuthController'], 'signup']);
$app->route('/auth/signin', [$controllers['AuthController'], 'signin']);

// Dashboard
$app->route('/dashboard', [$controllers['DashboardController'], 'index']);

// Posts
$app->route('/post/create', [$controllers['PostsController'], 'create']);
