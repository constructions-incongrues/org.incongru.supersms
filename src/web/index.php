<?php
// PHP configuration
ini_set('display_errors', true);

// Main controller
$name = filter_input(INPUT_GET, 'name', FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);
$body = filter_input(INPUT_GET, 'body');

try {
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
} catch (\Exception $e) {
    if (isset($_GET['debug'])) {
        throw $e;
    }
    $name = 'default';
}

// Execute service
$dirServices = __DIR__.'/../services';
$serviceController = $dirServices.'/'.$name.'/index.php';
if (!file_exists($serviceController)) {
    throw new \RuntimeException('Missing service controller - service='.$name);

}
require($serviceController);
