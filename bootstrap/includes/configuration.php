<?php

// Start session
session_start();

// Declare environment variables
$env = parse_ini_file('../.env');

// Declare configuration
$app->set('name', 'Facetube');
$app->set('env', $env);

// Declare framework configuration
$app->set('flight.handle_errors', false);
$app->set('flight.views.path', '../resources/views');

// Declare controllers
$controllers = [
    'HomeController' => new App\Controllers\HomeController($app),
    'AuthController' => new App\Controllers\AuthController($app),
    'DashboardController' => new App\Controllers\DashboardController($app),
    'PostsController' => new App\Controllers\PostsController($app),
];
