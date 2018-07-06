<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize application
$app = new flight\Engine;

// Declare configuration, database and routes
require_once __DIR__ . '/../bootstrap/includes/configuration.php';
require_once __DIR__ . '/../bootstrap/includes/database.php';
require_once __DIR__ . '/../bootstrap/includes/routes.php';

// Set global view variables
$app->view()->set('app', $app);

// Run application
$app->start();
