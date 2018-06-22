<?php

$app->route('/', [$controllers['HomeController'], 'index']);

// Auth
$app->route('/signup', [$controllers['AuthController'], 'signup']);
$app->route('/signin', [$controllers['AuthController'], 'signin']);
