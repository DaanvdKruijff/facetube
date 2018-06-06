<?php

// Initialize application
$app = new Flight\Engine;

// Declare configuration, database and routes
require_once __DIR__ . '/../bootstrap/includes/configuration.php';
require_once __DIR__ . '/../bootstrap/includes/database.php';
require_once __DIR__ . '/../bootstrap/includes/routes.php';

// Set global view variables
$app->view()->set('app', $app);

// Run application
$app->start();
