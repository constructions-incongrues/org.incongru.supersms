<?php
// Response configuration
header('Content-Type: text/plain; charset=utf-8');

// PHP configuration
if (isset($_GET['debug'])) {
    ini_set('display_errors', true);
} else {
    ini_set('display_errors', false);
}

// Dependencies
require_once(__DIR__.'/../lib.php');

// Filter input
$name = filter_input(INPUT_GET, 'name', FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);
$body = filter_input(INPUT_GET, 'body');

// Get services list
$services = getServices(__DIR__.'/../services');

try {
    // Sanity checks
    if (false === $name) {
        throw new \InvalidArgumentException('Please provide a service name');
    }

    // Service selection
    if (!in_array($name, array_keys($services))) {
        throw new \InvalidArgumentException('Unkown service - service='.$name);
    }
} catch (\Exception $e) {
    if (isset($_GET['debug'])) {
        throw $e;
    }
    $name = 'default';
}

// Execute service, pass output to fixOutput function which makes sure we are not sending "dangerous" content
ob_start('fixOutput');
require($services[$name]['controller']);
ob_end_flush();
