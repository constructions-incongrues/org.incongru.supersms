<?php
// PHP configuration
ini_set('display_errors', true);

// Main controller
$name = filter_input(INPUT_GET, 'name', FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);
$body = filter_input(INPUT_GET, 'body');

// Sanity checks
if (false === $name) {
    throw new \InvalidArgumentException('Please provide a service name');
}

// Service selection
$dirServices = __DIR__.'/../services';
$services = array();
foreach (glob($dirServices.'/*', GLOB_ONLYDIR) as $service) {
    $services[] = basename($service);
}
if (!in_array($name, $services)) {
    throw new \InvalidArgumentException('Unkown service - service='.$name);
}

// Execute service
$serviceController = $dirServices.'/'.$name.'/index.php';
if (!file_exists($serviceController)) {
    throw new \RuntimeException('Missing service controller - service='.$name);

}
require($serviceController);
