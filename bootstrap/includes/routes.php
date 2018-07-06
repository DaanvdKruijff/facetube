<?php

$app->route('/', [$controllers['HomeController'], 'index']);

// Auth
$app->route('/auth/signup', [$controllers['AuthController'], 'signup']);
$app->route('/auth/signin', [$controllers['AuthController'], 'signin']);

// Dashboard
$app->route('/dashboard', [$controllers['DashboardController'], 'index']);

// Posts
$app->route('/posts/create', [$controllers['PostsController'], 'create']);
$app->route('/posts/view', [$controllers['PostsController'], 'view']);
$app->route('/posts/index', [$controllers['PostsController'], 'ShowPostContent']);
