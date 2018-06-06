<?php

try {
    // Connect to database
    $db = new PDO($env['DB_DSN'], $env['DB_USERNAME'], $env['DB_PASSWORD']);

    // Set database attributes
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (Exception $e) {
    $db = null;
}

// Set as framework variable
$app->set('db', $db);
